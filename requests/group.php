﻿<?php
include("../includes/config.php");
include("../includes/classes.php");
include(getLanguage(null, (!empty($_GET['lang']) ? $_GET['lang'] : $_COOKIE['lang']), 2));
session_start();
$db = new mysqli($CONF['host'], $CONF['user'], $CONF['pass'], $CONF['name']);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$db->set_charset("utf8");

$resultSettings = $db->query(getSettings()); 
$settings = $resultSettings->fetch_assoc();

if(isset($_POST['type']) && isset($_POST['value']) && isset($_POST['group']) && isset($_POST['user'])) {
	$feed = new feed();
	$feed->db = $db;
	$feed->url = $CONF['url'];
	if($_POST['type'] == '3') {
		$feed->per_page = $settings['qperpage'];
		echo $feed->getGroups($_POST['group'], $_POST['value'], null);
		return;
	}
	if($_POST['type'] == '4') {
		$feed->per_page = 4;
		echo $feed->getGroups(0, substr($_POST['value'], 1), 1);
		return;
	}
	if($_POST['type'] == '5') {
		$feed->per_page = $settings['uperpage'];
		echo $feed->getGroups($_POST['group'], 0, null);
		return;
	}
	if(isset($_SESSION['username']) && isset($_SESSION['password']) || isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
		$loggedIn = new loggedIn();
		$loggedIn->db = $db;
		$loggedIn->url = $CONF['url'];
		$loggedIn->username = (isset($_SESSION['username'])) ? $_SESSION['username'] : $_COOKIE['username'];
		$loggedIn->password = (isset($_SESSION['password'])) ? $_SESSION['password'] : $_COOKIE['password'];
		
		$verify = $loggedIn->verify();

		if($verify['username']) {
			$feed->title = $settings['title'];
			$feed->username = $verify['username'];
			$feed->id = $verify['idu'];
			$feed->profile = $_POST['profile'];
			$feed->email = $CONF['email'];
			$feed->profile_data = $feed->profileData(null, $_POST['id']);
			$feed->email_group_invite = $settings['email_group_invite'];
			$feed->s_per_page = $settings['sperpage'];
			
			$feed->group_data = $feed->groupData(null, $_POST['group']);

			if(!$feed->group_data['id']) {
				return false;
			}
			$feed->group_member_data = $feed->groupMemberData($feed->group_data['id']);
			
			if($_POST['type'] == 6) {
				echo $feed->joinGroup(1);
				return false;
			}
			
			if($_POST['type'] == 7 && $feed->group_member_data['status']) {
				$feed->inviteGroup(1, $_POST['value']);
				return false;
			}
			
			if(!$feed->groupPermission($feed->group_data, $feed->group_member_data, 1)) {
				return false;
			}
			
			if($_POST['type'] == 0) {
				if(in_array($feed->group_member_data['permissions'], array(1, 2))) {
					// If the user tries to promote to Admin or remove the Admin status and is not the group owner, return false
					if(in_array($_POST['value'], array(4, 5)) && $feed->group_member_data['permissions'] == '1') {
						return false;
					}
					
					if(in_array($_POST['value'], array(0, 2))) {
						// Temporarily set the $feed->id to the targeted user to get the group permission
						$feed->id = $_POST['user'];
						$user = $feed->groupMemberData($feed->group_data['id']);
						
						// Restore the $feed->id
						$feed->id = $verify['idu'];
						
						// If a group Admin tries to block/remove another group admin
						if($user['permissions'] == '1' && $feed->group_member_data['permissions'] == 1) {
							return false;
						}
					}
					return $feed->groupMember($_POST['value'], $_POST['user']);
				}
			} elseif($_POST['type'] == 1) {
				echo $feed->listGroupMembers($_POST['value'], $_POST['user']);
			} elseif($_POST['type'] == 2) {
				if(in_array($feed->group_member_data['permissions'], array(1, 2))) {
					// Temporarily set the $feed->id to the targeted user to get the group permission
					$feed->id = $_POST['user'];
					$user = $feed->groupMemberData($feed->group_data['id']);
					
					// If the targeted user is not an admin or the request is made by the group owner
					if(!$user['permissions'] || $feed->group_member_data['permissions'] == '2') {
						// Before deleting the post check if the message was posted in the group
						$query = $db->query(sprintf("SELECT `id` FROM `messages` WHERE `group` = '%s' AND `id` = '%s'", $feed->group_data['id'], $db->real_escape_string($_POST['value'])));
						
						if($query->num_rows > 0) {
							// Delete the post
							$feed->delete($_POST['value'], 1);
						}
					}
				}
			}
		}
	}
}
mysqli_close($db);
?>