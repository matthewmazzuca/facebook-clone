<?php
//======================================================================\\
// Author: Pricop Alexandru                                             \\
// Website: http://pricop.info                                          \\
// Email: pricop2008@yahoo.com                                          \\
// Language: English                                                    \\
//======================================================================\\

$LNG['user_success'] = 'User succesfully created';
$LNG['user_exists'] = 'This username already exists';
$LNG['email_exists'] = 'This email is already in use';
$LNG['all_fields'] = 'All fields are required';
$LNG['user_alnum'] = 'The username must consists only from letters and numbers';
$LNG['user_too_short'] = 'The username must be between 3 and 32 characters';
$LNG['user_limit'] = 'Too many accounts created from this IP';
$LNG['invalid_email'] = 'Invalid email';
$LNG['invalid_user_pw'] = 'Invalid username or password';
$LNG['invalid_captcha'] = 'Invalid captcha';
$LNG['log_out'] = 'Log Out';
$LNG['hello'] = 'Hello';
$LNG['register'] = 'Register';
$LNG['login'] = 'Login';
$LNG['connect'] = 'Connect';
$LNG['password'] = 'Password';
$LNG['username'] = 'Username';
$LNG['email'] = 'Email';
$LNG['captcha'] = 'Captcha';
$LNG['username_or_email'] = 'Username or email';
$LNG['welcome_title'] = 'Welcome';
$LNG['welcome_desc'] = 'to our social network';
$LNG['welcome_about'] = 'share your memories, connect with others, make new friends.';
$LNG['forgot_password'] = 'Forgot your password?';
$LNG['all_rights_reserved'] = 'All rights reserved';

$LNG['welcome_one'] = 'Connect';
$LNG['welcome_two'] = 'Share';
$LNG['welcome_three'] = 'Discover';
$LNG['welcome_one_desc'] = 'Connect with your family and friends and share your moments';
$LNG['welcome_two_desc'] = 'Share what\'s new and life moments with your friends';
$LNG['welcome_three_desc'] = 'Discover new people, create new connections and make new friends';
$LNG['latest_users'] = 'Latest users';

// NOTIFICATION BOXES
$LNG['settings_saved'] = 'Settings Saved';
$LNG['nothing_saved'] = 'Nothing Saved';
$LNG['password_changed'] = 'Password Changed';
$LNG['nothing_changed'] = 'Nothing Changed';
$LNG['incorrect_date'] = 'The selected date is not valid, please pick a valid date.';
$LNG['password_not_changed'] = 'Your password was not changed.';
$LNG['image_saved'] = 'Image Saved';
$LNG['error'] = 'Error';
$LNG['no_file'] = 'You did not selected any files to be uploaded, or the selected file(s) are empty.';
$LNG['file_exceeded'] = 'The selected file size must not exceed <strong>%s</strong> MB.';
$LNG['file_format'] = 'The selected file format is not supported. Upload <strong>%s</strong> file format';
$LNG['image_removed'] = 'Image Removed';
$LNG['bio_description'] = 'The Bio description should be %s characters or less.';
$LNG['valid_email'] = 'Please enter a valid email.';
$LNG['valid_url'] = 'Please enter a valid URL format.';
$LNG['background_changed'] = 'The background has been successfully changed.';
$LNG['background_not_changed'] = 'The background could not be changed.';
$LNG['password_too_short'] = 'The password must contain at least 6 characters.';
$LNG['password_not_match'] = 'The password did not match.';
$LNG['username_not_found'] = 'We couldn\'t find the choosed username.';
$LNG['userkey_not_found'] = 'The username or the reset key are wrong, make sure you\'ve entered the correct credentials.';
$LNG['password_reseted'] = 'You have succcessfully reseted your passsword, you can now log-in using the new credentials.';
$LNG['email_sent'] = 'Email sent';
$LNG['email_reset'] = 'An email containing password reset instructions has been sent. Please allow us up to 24 hours to deliver the message, also check your Spam box if you can\'t find in your Inbox.';
$LNG['user_has_been_deleted'] = 'User with the ID: <strong>%s</strong> has been deleted.';
$LNG['user_not_deleted'] = 'The selected user (ID: %s) could not be deleted.';
$LNG['user_not_exist'] = 'The selected user does not exist.';
$LNG['theme_changed'] = 'Theme changed';
$LNG['notif_saved'] = 'Notifications changed';
$LNG['notif_success_saved'] = 'Notifications has been successfully updated.';

// MAIL CONTENT
$LNG['welcome_mail'] = 'Welcome to %s';
$LNG['user_created'] = 'Thank you for joining <strong>%s</strong><br /><br />Your username: <strong>%s</strong><br />Your Password: <strong>%s</strong><br /><br />You can log-in at: <a href="%s" target="_blank">%s</a>';
$LNG['recover_mail'] = 'Password Recovery';
$LNG['recover_content'] = 'A password recover was requested, if you didn\'t make this action please ignore this email. <br /><br />Your Username: <strong>%s</strong><br />Your Reset Key: <strong>%s</strong><br /><br />You can reset your password by accessing the following link: <a href="%s/index.php?a=recover&r=1" target="_blank">%s/index.php?a=recover&r=1</a>';
$LNG['ttl_comment_email'] = '%s commented on your message';
$LNG['comment_email'] = 'Hello <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> has commented on your <strong><a href="%s">message.</a></strong>
<br /><br /><span style="color: #aaa;">This message was sent automatically, if you don\'t want to receive these type of emails from <strong>%s</strong> in the future, please <a href="%s">Unsubscribe</a>.</span>';
$LNG['ttl_like_email'] = '%s liked your message';
$LNG['like_email'] = 'Hello <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> liked your <strong><a href="%s">message.</a></strong>
<br /><br /><span style="color: #aaa;">This message was sent automatically, if you don\'t want to receive these type of emails from <strong>%s</strong> in the future, please <a href="%s">Unsubscribe</a>.</span>';
$LNG['ttl_new_friend_email'] = '%s has sent you a friend request';
$LNG['new_friend_email'] = 'Hello <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> wants to be friends on %s.
<br /><br /><span style="color: #aaa;">This message was sent automatically, if you don\'t want to receive these type of emails from <strong>%s</strong> in the future, please <a href="%s">Unsubscribe</a>.</span>';
$LNG['ttl_friendship_confirmed_email'] = '%s accepted your friendship request';
$LNG['friendship_confirmed_email'] = 'Hello <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> has accepted your friendship on %s.
<br /><br /><span style="color: #aaa;">This message was sent automatically, if you don\'t want to receive these type of emails from <strong>%s</strong> in the future, please <a href="%s">Unsubscribe</a>.</span>';
$LNG['ttl_group_invite'] = '%s has invited you to join a group';
$LNG['group_invite'] = 'Hello <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> has invited you to join <strong><a href="%s">%s</a> group.</strong>
<br /><br /><span style="color: #aaa;">This message was sent automatically, if you don\'t want to receive these type of emails from <strong>%s</strong> in the future, please <a href="%s">Unsubscribe</a>.</span>';
$LNG['ttl_suspended_account_mail'] = 'Your account has been suspended';
$LNG['suspended_account_mail'] = 'Hello <strong>%s</strong>,<br /><br />Your account has been suspended. If you think this was an error, please contact us.<br /><br /><span style="color: #aaa;">Copyright &copy; '.date('Y').' <a href="%s">%s</a>. All rights reserved.';

// PHP MODULES
$LNG['openssl_error'] = 'You must enable <strong>OpenSSL</strong> extension on the server';
$LNG['curl_error'] = 'Is recommended that <strong>cURL</strong> extension is enabled on the server';

// ADMIN PANEL'
$LNG['general_link'] = 'General';
$LNG['security_link'] = 'Security';
$LNG['manage_users'] = 'Manage Users';

$LNG['theme_install'] = 'To install a new theme, upload it on the <strong>themes</strong> folder';
$LNG['plugin_install'] = 'To install a new plugin, upload it on the <strong>plugins</strong> folder';
$LNG['auhtor_title'] = 'Visit the author homepage';
$LNG['version'] = 'Version';
$LNG['active'] = 'Active';
$LNG['activate'] = 'Activate';
$LNG['deactivate'] = 'Deactivate';
$LNG['by'] = 'By';

// FEED
$LNG['welcome_feed_ttl'] = 'Welcome to your Feed';
$LNG['welcome_feed'] = 'All the posts from your friends will appear on this page, start by making new friends.';
$LNG['leave_comment'] = 'Leave a comment...';
$LNG['post'] = 'Post';
$LNG['view_more_comments'] = 'View more comments';
$LNG['delete_this_comment'] = 'Delete this comment';
$LNG['delete_this_message'] = 'Delete this message';
$LNG['report_this_message'] = 'Report this message';
$LNG['report_this_comment'] = 'Report this comment';
$LNG['view_more_messages'] = 'Load More';
$LNG['view_more'] = 'View more';
$LNG['food'] = 'I ate at: <strong>%s</strong>';
$LNG['visited'] = 'I visited:  <strong>%s</strong>';
$LNG['played'] = 'I played: <strong>%s</strong>';
$LNG['watched'] = 'I watched: <strong>%s</strong>';
$LNG['listened'] = 'I listened: <strong>%s</strong>';
$LNG['shared_title'] = 'shared <a href="%s" rel="loadpage"><strong>%s</strong></a>\'s <a href="%s" rel="loadpage"><strong>message</strong></a>.';
$LNG['group_title'] = 'posted in <a href="%s" rel="loadpage"><strong>%s</strong></a> group.';
$LNG['form_title'] = 'Update your status';
$LNG['comment_wrong'] = 'Something went wrong, please refresh the page and try again.';
$LNG['comment_too_long'] = 'Sorry, the maximum characters allowed per comment is <strong>%s</strong>.';
$LNG['comment_error'] = 'Sorry, we couldn\'t post the comment, please refresh the page and try again.';
$LNG['message_private'] = 'Sorry, this message is private, only the author of the message can see it.';
$LNG['message_private_ttl'] = 'Private Message';
$LNG['message_semi_private'] = 'Sorry, this message is private, only the friends and the author of this message can see it.';
$LNG['message_semi_private_ttl'] = 'Private Message';
$LNG['login_to_lcs'] = 'Log-in to Like, Comment or Share';
$LNG['message'] = 'Message';
$LNG['comment'] = 'Comment';
$LNG['share'] = 'Share';
$LNG['shared_success'] = 'The post has been successfully shared on your <a href="%s" rel="loadpage"><strong>timeline</strong></a>.';
$LNG['no_shared'] = 'Sorry but this message can\'t be shared.';
$LNG['share_title'] = 'Share this post';
$LNG['share_desc'] = 'Are you sure do you want to share this message on your timeline?';
$LNG['cancel'] = 'Cancel';
$LNG['close'] = 'Close';

// REPORT
$LNG['1_not_exists'] = 'The reported message does not exist.';
$LNG['0_not_exists'] = 'The reported comment does not exist.';
$LNG['1_already_reported'] = 'This message has already been reported and it will be reviewed in the shortest time, thank you.';
$LNG['0_already_reported'] = 'This comment has already been reported and it will be reviewed in the shortest time, thank you.';
$LNG['1_is_safe'] = 'This message is marked as <strong>safe</strong> by an administrator, thank you for your feedack.';
$LNG['0_is_safe'] = 'This comment is marked as <strong>safe</strong> by an administrator, thank you for your feedack.';
$LNG['1_report_added'] = 'The message has been reported, thank you for your feedback.';
$LNG['0_report_added'] = 'The comment has been reported, thank you for your feedback.';
$LNG['1_report_error'] = 'Sorry but something went wrong while reporting this message, please refresh the page and try again.';
$LNG['0_report_error'] = 'Sorry but something went wrong while reporting this comment, please refresh the page and try again.';
$LNG['1_is_deleted'] = 'The message has been removed, thank you for your feedback.';
$LNG['0_is_deleted'] = 'The comment has been removed, thank you for your feedback.';
$LNG['rep_comment'] = 'Comment';

// SIDEBAR
$LNG['groups'] = 'Groups';
$LNG['events'] = 'Events';
$LNG['archive'] = 'Archives';
$LNG['all_events'] = 'All events';
$LNG['sidebar_map'] = 'Places';
$LNG['sidebar_food'] = 'Meals';
$LNG['sidebar_visited'] = 'Visits';
$LNG['sidebar_game'] = 'Games';
$LNG['sidebar_picture'] = 'Pictures';
$LNG['sidebar_video'] = 'Videos';
$LNG['sidebar_music'] = 'Music';
$LNG['sidebar_shared'] = 'Shared';
$LNG['sidebar_groups'] = 'Groups';
$LNG['all_time'] = 'All time';
$LNG['friends'] = 'Friends';
$LNG['welcome'] = 'Welcome';
$LNG['filter_age'] = 'Age';
$LNG['all_ages'] = 'All ages';
$LNG['filter_gender'] = 'Gender';
$LNG['sidebar_male'] = 'Male';
$LNG['sidebar_female'] = 'Female';
$LNG['all_genders'] = 'All genders';
$LNG['online_friends'] = 'Online Friends';
$LNG['sidebar_likes'] = 'Likes';
$LNG['sidebar_comments'] = 'Comments';
$LNG['sidebar_friendships'] = 'Friendships';
$LNG['sidebar_chats'] = 'Chats';
$LNG['sidebar_birthdays'] = 'Birthdays';
$LNG['sidebar_suggestions'] = 'Friends Suggestions';
$LNG['sidebar_trending'] = 'Trending topics';
$LNG['sidebar_friends_activity'] = 'Friends Activity';
$LNG['friends_birthdays'] = 'Birthdays';
$LNG['sidebar_people'] = 'People';
$LNG['sidebar_tag'] = 'Hashtags';

// MESSAGES / CHAT
$LNG['lonely_here'] = 'It\'s lonely here, how about making some friends?';
$LNG['write_message'] = 'Write a message...';
$LNG['chat_too_long'] = 'Sorry, but the maximum characters allowed per chat message is <strong>%s</strong>.';
$LNG['blocked_by'] = 'The message could not be sent. <strong>%s</strong> blocked you.';
$LNG['blocked_user'] = 'The message could not be sent. You\'ve blocked <strong>%s</strong>.';
$LNG['chat_self'] = 'Sorry but we cannot deliver chat messages to yourself.';
$LNG['chat_no_user'] = 'You must select a user to chat with.';
$LNG['view_more_conversations'] = 'View more conversations';
$LNG['block'] = 'Block';
$LNG['unblock'] = 'Unblock';
$LNG['conversation'] = 'Conversation';
$LNG['start_conversation'] = 'You can start a conversation by chosing a person from your friends list.';
$LNG['send_message'] = 'Send Message';

// MESSAGE FORM
$LNG['label_food'] = 'Add a place where you ate at';
$LNG['label_game'] = 'Add a played game';
$LNG['label_visited'] = 'Add a visited location';
$LNG['label_map'] = 'Add a place';
$LNG['label_video'] = 'Share a movie or a link from YouTube or Vimeo';
$LNG['label_music'] = 'Share a SoundCloud link or add a listened song';
$LNG['label_image'] = 'Upload images';
$LNG['message_form'] = 'What\'s on your mind?';
$LNG['file_too_big'] = 'The selected file size (%s) is too big, the maxium file size allowed is <strong>%s</strong>.';
$LNG['format_not_exist'] = 'The selected file (%s) format is invalid, please upload only <strong>%s</strong> image format.';
$LNG['privacy_no_exist'] = 'The selected privacy does not exist, please refresh the page and try again.';
$LNG['event_not_exist'] = 'The selected event does not exist, please refresh the page and try again.';
$LNG['change_privacy'] = 'Who should see the message';

$LNG['unexpected_message'] = 'An unexpected error has occured, please refresh the page and try again.';
$LNG['message_too_long'] = 'Sorry, but the maximum characters allowed per message is <strong>%s</strong>.';
$LNG['files_selected'] = 'image(s) selected.';
$LNG['too_many_images'] = 'The maximum number of images allowed to be uploaded per message is <strong>%s</strong>, you tried to upload <strong>%s</strong> images.';

// USER PANEL
$LNG['user_menu_general'] = 'General';
$LNG['user_menu_security'] = 'Password';
$LNG['user_menu_avatar'] = 'Profile Images';
$LNG['user_menu_notifications'] = 'Notifications';
$LNG['user_menu_privacy'] = 'Privacy';

$LNG['user_ttl_general'] = 'General Settings';
$LNG['user_ttl_security'] = 'Password Settings';
$LNG['user_ttl_avatar'] = 'Profile Images Settings';
$LNG['user_ttl_notifications'] = 'Notifications Settings';
$LNG['user_ttl_privacy'] = 'Privacy Settings';

$LNG['ttl_background'] = 'Backgrounds';
$LNG['sub_background'] = 'Pick a background for your profile';

$LNG['ttl_first_name'] = 'First Name';
$LNG['sub_first_name'] = 'Enter your first name';

$LNG['ttl_last_name'] = 'Last Name';
$LNG['sub_last_name'] = 'Enter your last name';

$LNG['ttl_email'] = 'Email';
$LNG['sub_email'] = 'Email will not be displayed';

$LNG['address'] = 'Address';
$LNG['sub_address'] = 'The address you live at';

$LNG['ttl_location'] = 'City';
$LNG['sub_location'] = 'The city you live in';

$LNG['ttl_website'] = 'Website';
$LNG['sub_website'] = 'Your website, blog or personal page';

$LNG['ttl_gender'] = 'Gender';
$LNG['sub_gender'] = 'Select your gender';

$LNG['interests'] = 'Interests';
$LNG['sub_interested_in'] = 'Persons you\'re interested in';

$LNG['ttl_country'] = 'Country';
$LNG['sub_country'] = 'The country you live in';

$LNG['ttl_work'] = 'Workplace';
$LNG['sub_work'] = 'Enter the company name where you\'re working';

$LNG['ttl_school'] = 'School';
$LNG['sub_school'] = 'Enter the school name you attended';

$LNG['ttl_profile'] = 'Profile';
$LNG['sub_profile'] = 'Profile visibility';

$LNG['ttl_messages'] = 'Message';
$LNG['sub_messages'] = 'The default way of posting messages';

$LNG['ttl_offline'] = 'Chat Status';
$LNG['sub_offline'] = 'The visibility status for the Chat';

$LNG['ttl_facebook'] = 'Facebook';
$LNG['sub_facebook'] = 'Your facebook profile ID.';

$LNG['ttl_twitter'] = 'Twitter';
$LNG['sub_twitter'] = 'Your twitter profile ID.';

$LNG['ttl_google'] = 'Google+';
$LNG['sub_google'] = 'Your google+ profile ID.';

$LNG['ttl_bio'] = 'Bio';
$LNG['sub_bio'] = 'About you (160 characters or less)';

$LNG['ttl_birthdate'] = 'Birth Date';
$LNG['sub_birthdate'] = 'Select the date you were born';

$LNG['ttl_not_verified'] = 'Not verified';
$LNG['ttl_verified'] = 'Verified';
$LNG['sub_verified'] = 'Verified badge on user\'s profile';

$LNG['ttl_upload_avatar'] = 'Upload the selected profile image';
$LNG['ttl_delete_avatar'] = 'Delete your current profile image';

$LNG['privacy'] = 'Privacy';
$LNG['public'] = 'Public';
$LNG['private'] = 'Private';
$LNG['report'] = 'Report';
$LNG['delete_message'] = 'Delete Message';
$LNG['remove_user'] = 'Remove User';

$LNG['opt_offline_off'] = 'Online (when available)';
$LNG['opt_offline_on'] = 'Always Offline';

$LNG['no_gender'] = 'No Gender';
$LNG['male'] = 'Male';
$LNG['female'] = 'Female';
$LNG['men'] = 'Men';
$LNG['women'] = 'Women';

$LNG['contact_information'] = 'Contact Information';
$LNG['basic_information'] = 'Basic Information';
$LNG['other_accounts'] = 'Other Accounts';
$LNG['work_and_education'] = 'Work and Education';

$LNG['ttl_upload'] = 'Upload';
$LNG['ttl_password'] = 'Password';
$LNG['sub_password'] = 'Enter a new password (at least 6 characters)';
$LNG['ttl_repeat_password'] = 'Repeat Password';
$LNG['sub_repeat_password']= 'Repeat your password';
$LNG['save_changes'] = 'Save Changes';
$LNG['profile_images_desc'] = 'Click on the profile picture or cover to change them';
$LNG['confirm'] = 'Confirm';
$LNG['approve'] = 'Approve';
$LNG['requests'] = 'Requests';
$LNG['blocked'] = 'Blocked';
$LNG['remove'] = 'Remove';
$LNG['decline'] = 'Decline';
$LNG['confirmed'] = 'Confirmed';
$LNG['declined'] = 'Declined';
$LNG['make_admin'] = 'Make Admin';
$LNG['remove_admin'] = 'Remove Admin';

$LNG['ttl_notificationl'] = 'Likes Notifications';
$LNG['sub_notificationl'] = 'Display alert and notifications for <strong>Likes</strong>';

$LNG['ttl_notificationc'] = 'Comments Notifications';
$LNG['sub_notificationc'] = 'Display alert and notifications for <strong>Comments</strong>';

$LNG['ttl_notifications'] = 'Messages Notifications';
$LNG['sub_notifications'] = 'Display alert and notifications for <strong>Shared Messages</strong>';

$LNG['ttl_notificationd'] = 'Chat Notifications';
$LNG['sub_notificationd'] = 'Display alert and notifications for <strong>Chats</strong>';

$LNG['ttl_notificationf'] = 'Friends Notifications';
$LNG['sub_notificationf'] = 'Display alert and notifications for <strong>Confirmed Friendships</strong>';

$LNG['ttl_notificationg'] = 'Groups Notifications';
$LNG['sub_notificationg'] = 'Display alert and notifications for <strong>Groups Invitations</strong>';

$LNG['ttl_sound_nn'] = 'Notifications Sound';
$LNG['sub_sound_nn'] = 'Play a sound when a new notification is received';

$LNG['ttl_sound_nc'] = 'Chat Sound';
$LNG['sub_sound_nc'] = 'Play a sound when a new chat message is received';

$LNG['ttl_email_comment'] = 'Emails on Comments';
$LNG['sub_email_comment'] = 'Receive emails when someone comments on your messages';

$LNG['ttl_email_like'] = 'Emails on Likes';
$LNG['sub_email_like'] = 'Receive emails when someone likes your messages';

$LNG['ttl_email_new_friend'] = 'Emails on Friendships';
$LNG['sub_email_new_friend'] = 'Receive emails when someone sends or confirms a friend request';

$LNG['ttl_email_group'] = 'Email Group Invite';
$LNG['sub_email_group'] = 'Receive emails when someone sends you a group invitation';

$LNG['user_ttl_sidebar'] = 'Settings';

// ADMIN PANEL
$LNG['admin_login'] = 'Admin Login';
$LNG['admin_user_name'] = 'Username';
$LNG['desc_admin_user'] = 'Type in your Admin Username';
$LNG['admin_pass'] = 'Password';
$LNG['desc_admin_pass'] = 'Type in your Admin Password';
$LNG['admin_ttl_sidebar'] = 'Menu';
$LNG['admin_menu_logout'] = 'Log Out';
$LNG['admin_ttl_general'] 			= $LNG['admin_menu_general'] 		= 'General Settings';
$LNG['admin_ttl_users_settings'] 	= $LNG['admin_menu_users_settings'] = 'Users Settings';
$LNG['admin_ttl_social'] 			= $LNG['admin_menu_social']			= 'Social Login';
$LNG['admin_ttl_themes'] 			= $LNG['admin_menu_themes'] 		= 'Themes';
$LNG['admin_ttl_plugins'] 			= $LNG['admin_menu_plugins'] 		= 'Plugins';
$LNG['admin_ttl_stats'] 			= $LNG['admin_menu_stats'] 			= 'Statistics';
$LNG['admin_ttl_security'] 			= $LNG['admin_menu_security'] 		= 'Password';
$LNG['admin_ttl_users'] 			= $LNG['admin_menu_users'] 			= 'Manage Users';
$LNG['admin_ttl_manage_groups']		= $LNG['admin_menu_manage_groups'] 	= 'Manage Groups';
$LNG['admin_ttl_manage_reports']	= $LNG['admin_menu_manage_reports'] = 'Manage Reports';
$LNG['admin_ttl_manage_ads']		= $LNG['admin_menu_manage_ads'] 	= 'Manage Ads';

$LNG['title'] = 'Title';
$LNG['admin_sub_title'] = 'The site\'s title';

$LNG['admin_ttl_captcha'] = 'Captcha';
$LNG['admin_sub_captcha'] = 'Enable captcha at registration';

$LNG['admin_ttl_timestamp'] = 'Timestamp';
$LNG['admin_sub_timestamp'] = 'The Messages, Comments and Chat timestamps type';

$LNG['admin_ttl_msg_perpage'] = 'Messages';
$LNG['admin_sub_msg_perpage'] = 'The number of messages per page';

$LNG['admin_ttl_com_perpage'] = 'Comments';
$LNG['admin_sub_com_perpage'] = 'The number of comments per message';

$LNG['admin_ttl_chat_perpage'] = 'Chat';
$LNG['admin_sub_chat_perpage'] = 'The number of chat conversations per page';

$LNG['admin_ttl_smiles'] = 'Emoticons';
$LNG['admin_sub_smiles'] = 'Allow and transform shortcodes on Messages, Comments and Chat into emoticons';

$LNG['admin_ttl_nperpage'] = 'Notifications';
$LNG['admin_sub_nperpage'] = 'The number of notifications to be shown (Notifications Page)';

$LNG['admin_ttl_qperpage'] = 'Search';
$LNG['admin_sub_qperpage'] = 'The number of user results per page (Search Page)';

$LNG['admin_ttl_msg_limit'] = 'Messages Limit';
$LNG['admin_sub_msg_limit'] = 'The number of characters allowed per message';

$LNG['admin_ttl_chat_limit'] = 'Chat Limit';
$LNG['admin_sub_chat_limit'] = 'The number of characters allowed per conversation';

$LNG['admin_ttl_email_user'] = 'Email Users';
$LNG['admin_sub_email_user'] = 'Email users at registration';

$LNG['admin_ttl_notificationsm'] = 'Messages Notifications';
$LNG['admin_sub_notificationsm'] = 'The update interval to check for new messages';

$LNG['admin_ttl_notificationsn'] = 'Events Notifications';
$LNG['admin_sub_notificationsn'] = 'The update interval to check for new events notifications';

$LNG['admin_ttl_chatrefresh'] = 'Chat Refresh';
$LNG['admin_sub_chatrefresh'] = 'The time how often the chat window updates with new messages';

$LNG['admin_ttl_timeonline'] = 'Online Users';
$LNG['admin_sub_timeonline'] = 'The amount of time to be considered online since the last user\'s activity';

$LNG['admin_ttl_image_profile'] = 'Image Size (Profile)';
$LNG['admin_sub_image_profile'] = 'Image size allowed to upload (profile image, profile cover, group cover)';

$LNG['admin_ttl_image_format'] = 'Image Format (Profile)';
$LNG['admin_sub_image_format'] = 'Image format allowed for upload (profile image, profile cover, group cover), use only gif,png,jpg other formats are not supported';

$LNG['admin_ttl_message_image'] = 'Image Size (Messages)';
$LNG['admin_sub_message_image'] = 'Image size allowed to upload (Messages)';

$LNG['admin_ttl_message_format'] = 'Image Format (Messages)';
$LNG['admin_sub_message_format'] = 'Image format allowed for upload (Messages), use only gif,png,jpg other formats are not supported';

$LNG['admin_ttl_censor'] = 'Censor';
$LNG['admin_sub_censor'] = 'Words to be censored (divided by \',\' [comma])';

$LNG['admin_ttl_ad1'] = 'Ad Unit 1';
$LNG['admin_sub_ad1'] = 'Advertisement Unit 1 (Bottom [Welcome Page])';

$LNG['admin_ttl_ad2'] = 'Ad Unit 2';
$LNG['admin_sub_ad2'] = 'Advertisement Unit 2 (Sidebar [News Feed Page])';

$LNG['admin_ttl_ad3'] = 'Ad Unit 3';
$LNG['admin_sub_ad3'] = 'Advertisement Unit 3 (Sidebar [Groups Page])';

$LNG['admin_ttl_ad4'] = 'Ad Unit 4';
$LNG['admin_sub_ad4'] = 'Advertisement Unit 4 (Sidebar [Profile Page])';

$LNG['admin_ttl_ad5'] = 'Ad Unit 5';
$LNG['admin_sub_ad5'] = 'Advertisement Unit 5 (Sidebar [Messages Page])';

$LNG['admin_ttl_ad6'] = 'Ad Unit 6';
$LNG['admin_sub_ad6'] = 'Advertisement Unit 6 (Sidebar [Search Page])';

$LNG['admin_ttl_password'] = 'Password';

$LNG['admin_ttl_fbapp'] = 'Facebook Login';
$LNG['admin_sub_fbapp'] = 'Allow users to log-in using Facebook';

$LNG['admin_ttl_fbappid'] = 'App ID';
$LNG['admin_sub_fbappid'] = 'Facebook App ID';

$LNG['admin_ttl_fbappsecret'] = 'App Secret'; 
$LNG['admin_sub_fbappsecret'] = 'Facebook App Secret';

$LNG['admin_ttl_edit'] = 'Edit';
$LNG['admin_ttl_edit_profile'] = 'Edit Profile';

$LNG['admin_ttl_delete'] = 'Delete';
$LNG['admin_ttl_delete_profile'] = 'Delete Profile';

$LNG['admin_ttl_mail'] = 'Email';
$LNG['admin_ttl_username'] = 'Username';
$LNG['admin_ttl_id'] = 'ID'; // As in user ID

$LNG['admin_ttl_mprivacy'] = 'Msg. Type';
$LNG['admin_sub_mprivacy'] = 'User\'s message privacy by default (default option, the user can change this setting)';

$LNG['admin_ttl_notificationl'] = 'Likes Notifications';
$LNG['admin_sub_notificationl'] = 'Display alert and notifications for <strong>Likes</strong> (default option, the user can change this setting)';

$LNG['admin_ttl_notificationc'] = 'Comments Notifications';
$LNG['admin_sub_notificationc'] = 'Display alert and notifications for <strong>Comments</strong> (default option, the user can change this setting)';

$LNG['admin_ttl_notifications'] = 'Messages Notifications';
$LNG['admin_sub_notifications'] = 'Display alert and notifications for <strong>Shared Messages</strong> (default option, the user can change this setting)';

$LNG['admin_ttl_notificationd'] = 'Chat Notifications';
$LNG['admin_sub_notificationd'] = 'Display alert and notifications for <strong>Chats</strong> (default option, the user can change this setting)';

$LNG['admin_ttl_notificationf'] = 'Friends Notifications';
$LNG['admin_sub_notificationf'] = 'Display alert and notifications for <strong>Friends Additions</strong> (default option, the user can change this setting)';

$LNG['admin_ttl_notificationg'] = 'Groups Notifications';
$LNG['admin_sub_notificationg'] = 'Display alert and notifications for <strong>Groups Invitations</strong> (default option, the user can change this setting)';

$LNG['admin_ttl_sound_nn'] = 'Notifications Sound';
$LNG['admin_sub_sound_nn'] = 'Enable playing a sound for new notifications (default option, the user can change this setting)';

$LNG['admin_ttl_sound_nc'] = 'Chat Sound';
$LNG['admin_sub_sound_nc'] = 'Enable playing a sound for new chat messages (default option, the user can change this setting)';

$LNG['admin_ttl_email_comment'] = 'Email on Comment';
$LNG['admin_sub_email_comment'] = 'Enable sending emails when someone comments to a message (overrides user\'s settings)';

$LNG['admin_ttl_email_like'] = 'Email on Like';
$LNG['admin_sub_email_like'] = 'Enable sending emails when someone likes a message (overrides user\'s settings)';

$LNG['admin_ttl_email_new_friend'] = 'Email on Friendships';
$LNG['admin_sub_email_new_friend'] = 'Enable sending emails when someone sends or confirms a friend request (overrides user\'s settings)';

$LNG['admin_ttl_email_group'] = 'Email Group Invite';
$LNG['admin_sub_email_group'] = 'Enable sending emails when someone sends a group invitation (overrides user\'s settings)';

$LNG['admin_ttl_ilimit'] = 'Max. Images';
$LNG['admin_sub_ilimit'] = 'The maximum images allowed to be uploaded per message';

$LNG['admin_ttl_wholiked'] = 'Who Liked';
$LNG['admin_sub_wholiked'] = 'The number of profile images to be shown near likes number';

$LNG['admin_ttl_sperpage'] = 'Users';
$LNG['admin_sub_sperpage'] = 'Number of users to be displayed per page (Profile Friends, Group Users)';

$LNG['admin_ttl_aperip'] = 'Accounts';
$LNG['admin_sub_aperip'] = 'Number of accounts allowed to register per IP';

$LNG['admin_ttl_ronline'] = 'Online Friends';
$LNG['admin_sub_ronline'] = 'Number of online friends to be displayed on the Feed/Subscriptions page (sidebar).';

$LNG['admin_ttl_nperwidget'] = 'Dropdown Notifications';
$LNG['admin_sub_nperwidget'] = 'Number of notifications to be shown per category (likes, comments, messages, shares, friend requests)';

$LNG['admin_ttl_uperpage'] = 'Admin';
$LNG['admin_sub_uperpage'] = 'Number of users per page (Manage Sections)';

$LNG['admin_sub_verified'] = 'Verified user profile by default? (Not recommended)';

$LNG['join_date'] = 'Join Date';

$LNG['per_page'] = '/ page';
$LNG['per_ip'] = '/ IP';
$LNG['second'] = 'second';
$LNG['seconds'] = 'seconds';
$LNG['minute'] = 'minute';
$LNG['minutes'] = 'minutes';
$LNG['hour'] = 'hour';
$LNG['recommended'] = 'recommended';
$LNG['edit_user'] = 'Edit User';
$LNG['username_to_edit'] = 'Username';
$LNG['username_to_edit_sub'] = 'Enter the username you want to edit';
$LNG['group_to_edit'] = 'Group name';
$LNG['group_to_edit_sub'] = 'Enter the group name you want to edit';

// STATS
$LNG['likes'] = 'Likes';
$LNG['messages'] = 'Messages';
$LNG['registered_users'] = 'Registered Users';
$LNG['today'] = 'Today';
$LNG['this_month'] = 'This Month';
$LNG['this_year'] = 'This Year';
$LNG['total'] = 'Total';

$LNG['messages_posted'] = 'Messages Posted';
$LNG['comments_posted'] = 'Comments Posted';
$LNG['stats_reports'] = 'Reports';
$LNG['total_reports'] = 'Total Reports';
$LNG['pending_reports'] = 'Pending Reports';
$LNG['safe_reports'] = 'Safe Reports';
$LNG['deleted_reports'] = 'Deleted Reports';
$LNG['liked_messages'] = 'Liked Messages';
$LNG['shared_messages'] = 'Shared Messages';
$LNG['groups_created'] = 'Groups Created';

// MANAGE REPORTS
$LNG['admin_reports_ignore'] = 'Ignore the report and mark the content as safe';
$LNG['admin_reports_delete'] = 'Delete the report and the reported content';
$LNG['admin_reports_view'] = 'View the reported content';

// LIKES
$LNG['already_liked'] = 'You\'ve already liked this message.';
$LNG['already_disliked'] = 'You\'ve already disliked this message.';
$LNG['like'] = 'Like';
$LNG['dislike'] = 'Unlike';
$LNG['like_message_not_exist'] = 'This message doesn\'t exist or has been deleted.';
$LNG['liked_this'] = 'liked this';
$LNG['x_liked_y_post'] = 'liked %1$s\'s <a href="%2$s" rel="loadpage"><strong>message</strong></a>';
$LNG['view_all_likes'] = 'View all likes';

// MISC
$LNG['sponsored'] = 'Sponsored';
$LNG['censored'] = '<strong>censored</strong>';
$LNG['new_like_notification'] = '<a href="%s" rel="loadpage">%s</a> liked your <a href="%s" rel="loadpage">message</a>';
$LNG['new_comment_notification'] = '<a href="%s" rel="loadpage">%s</a> commented on your <a href="%s" rel="loadpage">message</a>';
$LNG['new_shared_notification'] = '<a href="%s" rel="loadpage">%s</a> shared your <a href="%s" rel="loadpage">message</a>';
$LNG['new_group_notification'] = '<a href="%s" rel="loadpage">%s</a> has invited you to join <a href="%s" rel="loadpage">%s</a> group';
$LNG['new_friend_notification'] = '<a href="%s" rel="loadpage">%s</a> accepted your friend request';
$LNG['new_chat_notification'] = '<a href="%s" rel="loadpage">%s</a> sent you a <span class="desktop"><a onclick="%s">chat message</a></span><span class="mobile"><a href="%s" rel="loadpage">chat message</a></span>';
$LNG['new_birthday_notification'] = '<a href="%s" rel="loadpage">%s</a>\'s birthday';
$LNG['years_old'] = '%s years old';
$LNG['x_and_x_others'] = '<a href="%s" rel="loadpage">%s</a> and <a href="%s" rel="loadpage">%s others</a>';
$LNG['new_like_fa'] = '<a href="%s" rel="loadpage">%s</a> liked a <a href="%s" rel="loadpage">message</a>';
$LNG['new_comment_fa'] = '<a href="%s" rel="loadpage">%s</a> commented on a <a href="%s" rel="loadpage">message</a>';
$LNG['new_message_fa'] = '<a href="%s" rel="loadpage">%s</a> posted a new <a href="%s" rel="loadpage">message</a>';
$LNG['change_password'] = 'Change Password';
$LNG['enter_new_password'] = 'Enter your new password';
$LNG['enter_reset_key'] = 'Enter the reset key';
$LNG['enter_username'] = 'Enter Username';
$LNG['reset_key'] = 'Reset Key';
$LNG['new_password'] = 'New Password';
$LNG['password_recovery'] = 'Password Recovery';
$LNG['recover']	= 'Recover';
$LNG['recover_sub_username'] = 'Type in the username or email you want to recover the password';

// GROUP
$LNG['create_group'] = 'Create Group';
$LNG['edit_group'] = 'Edit Group';
$LNG['leave_group'] = 'Leave Group';
$LNG['delete_group'] = 'Delete Group';
$LNG['discussion'] = 'Discussion';
$LNG['members'] = 'Members';
$LNG['admins'] = 'Admins';
$LNG['group'] = 'Group';
$LNG['group_private'] = 'Sorry, but this group is private, only the member of this group can view the content.';
$LNG['group_private_ttl'] = 'Private Group';
$LNG['name'] = 'Name';
$LNG['any_member'] = 'Any member';
$LNG['posts'] = 'Posts';
$LNG['group_sub_name'] = 'The group name (will appear in URL)';
$LNG['group_sub_title'] = 'The group title (will appear on the group\'s page)';
$LNG['group_sub_privacy'] = 'The group privacy';
$LNG['group_sub_description'] = 'The group description';
$LNG['group_sub_posts'] = 'Who can post in the group';
$LNG['admins_posts'] = ', only admins can post';
$LNG['members_posts'] = ', any member can post';
$LNG['cover'] = 'Cover';
$LNG['group_sub_cover'] = 'The group cover image';
$LNG['public_group'] = 'Public Group';
$LNG['private_group'] = 'Private Group';
$LNG['x_members'] = '%s members';
$LNG['join_group'] = 'Join Group';
$LNG['pending_approval'] = 'Pending Approval';
$LNG['search_this_group'] = 'Search this group';
$LNG['invited'] = 'Invited';
$LNG['member'] = 'Member';
$LNG['invite'] = 'Invite';

$LNG['group_name_consist'] = 'Group name can only contain letters and numbers';
$LNG['group_name_taken'] = 'This group name is already taken';
$LNG['group_name_less'] = 'Group name should be less than %s characters';
$LNG['group_title_less'] = 'Group title should be less than %s characters';
$LNG['group_desc_less'] = 'Group description should be less than %s characters';
$LNG['group_delete_desc'] = 'Deleting a group will also delete its messages along with their content.';
$LNG['group_deleted'] = 'The group <strong>%s</strong> has been deleted';

$LNG['invite_friends'] = 'Invite Friends';

// PROFILE
$LNG['profile_not_exist'] = 'Sorry, but this user profile does not exist.';
$LNG['profile_semi_private'] = 'Sorry, but this profile is private, only the friends of this user can view the profile.';
$LNG['profile_private'] = 'Sorry, but this profile is completely private.';
$LNG['profile_suspended'] = 'Sorry, but this profile has been suspended.';
$LNG['profile_not_exist_ttl'] = 'Profile does not exist.';
$LNG['profile_semi_private_ttl'] = 'Private profile';
$LNG['profile_private_ttl'] = 'Private profile';
$LNG['profile_suspended_ttl'] = 'Suspended Profile';
$LNG['profile_blocked'] = 'Sorry, but you have blocked or been blocked by this user.';
$LNG['profile_blocked_ttl'] = 'Blocked profile';
$LNG['add_friend'] = 'Add as friend';
$LNG['remove_friend'] = 'Remove friend';
$LNG['friend_request_sent'] = 'Friend request sent';
$LNG['friend_request_accept'] = 'Accept friend request';
$LNG['created_on'] = 'Created on';
$LNG['description'] = 'Description';
$LNG['profile_about'] = 'About';
$LNG['profile_birthdate'] = 'Birthdate';
$LNG['lives_in'] = 'Lives in';
$LNG['born_on'] = 'Born on';
$LNG['studied_at'] = 'Studied at';
$LNG['works_at'] = 'Works at';
$LNG['profile_view_site'] = 'View website';
$LNG['profile_view_profile'] = 'View Profile';
$LNG['profile_bio']	= 'Bio';
$LNG['verified_user'] = 'Verified User';
$LNG['edit_profile_cover'] = 'Change Profile Images';
$LNG['view_all_notifications'] = 'View More Notifications';
$LNG['view_chat_notifications'] = 'View More Messages';
$LNG['view_confirmed_friendships'] = 'View confirmed requests';
$LNG['close_notifications'] = 'Close Notifications';
$LNG['notifications_settings'] = 'Notifications Settings';
$LNG['no_notifications'] = 'No notifications';
$LNG['search_title'] = 'Search Results';
$LNG['view_all_results'] = 'View All Results';
$LNG['close_results'] = 'Close Results';
$LNG['no_results'] = 'No results available. Try another search.';
$LNG['no_results_ttl'] = 'Search Results';
$LNG['search_for_users'] = 'Search for users';
$LNG['search_in_friends'] = 'Search in friends';
$LNG['follows'] = 'Follows';
$LNG['followed_by'] = 'Followed by';
$LNG['people'] = 'people';
$LNG['no_info_avail'] = 'No information available';
$LNG['account_suspended'] = 'This account is currently suspended.';

// GENERAL
$LNG['title_profile'] = 'Profile';
$LNG['title_feed'] = 'News Feed';
$LNG['title_post'] = 'Post';
$LNG['title_messages'] = 'Messages';
$LNG['title_settings'] = 'Settings';
$LNG['title_search'] = 'Search';
$LNG['title_notifications'] = 'Notifications';
$LNG['title_group'] = 'Create Group';
$LNG['title_admin']	= 'Admin';
$LNG['edit'] = 'Edit';
$LNG['delete'] = 'Delete';
$LNG['suspend'] = 'Suspend';
$LNG['restore'] = 'Restore';
$LNG['ignore'] = 'Ignore';
$LNG['view'] = 'View';
$LNG['timeline'] = 'Timeline';
$LNG['on'] = 'On';
$LNG['off'] = 'Off';
$LNG['none'] = 'None';
$LNG['pages'] = 'Pages';
$LNG['search_for_people'] = 'search people, #hashtags, !groups';
$LNG['new_message'] = 'New message';
$LNG['privacy_policy'] = 'Privacy Policy';
$LNG['terms_of_use'] = 'Terms of Use';
$LNG['about'] = 'About';
$LNG['disclaimer'] = 'Disclaimer';
$LNG['contact'] = 'Contact';
$LNG['api_documentation'] = 'API Documentation';
$LNG['developers'] = 'Developers';
$LNG['language'] = 'Language';

// TIME
$LNG['just_now'] = 'just now';
$LNG['second_s'] = 'second(s)';
$LNG['minute_s'] = 'minute(s)';
$LNG['hour_s'] = 'hour(s)';
$LNG['day_s'] = 'day(s)';
$LNG['week_s'] = 'week(s)';
$LNG['month_s'] = 'month(s)';
$LNG['year_s'] = 'year(s)';
$LNG['ago'] = 'ago';

// MONTHS
$LNG['month'] = 'Month';
$LNG['year'] = 'Year';
$LNG['day'] = 'Day';
$LNG['month_1'] = 'January';
$LNG['month_2'] = 'February';
$LNG['month_3'] = 'March';
$LNG['month_4'] = 'April';
$LNG['month_5'] = 'May';
$LNG['month_6'] = 'June';
$LNG['month_7'] = 'July';
$LNG['month_8'] = 'August';
$LNG['month_9'] = 'September';
$LNG['month_10'] = 'October';
$LNG['month_11'] = 'November';
$LNG['month_12'] = 'December';
?>