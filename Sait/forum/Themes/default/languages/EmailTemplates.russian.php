<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = '��������� ���� ������� ���������:';
$txt['scheduled_approval_email_msg'] = '��������� ��������� ������� ���������:';
$txt['scheduled_approval_email_attach'] = '��������� �������� ������� ���������:';
$txt['scheduled_approval_email_event'] = '��������� ������� ������� ���������:';

$txt['emails'] = array(
	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONCODE:  The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������ {USERNAME}. ���� ������ ���� ������, ������ ������������ ��� �� ���� ������ => {FORGOTPASSWORDLINK}.

��� ��������� ����� ������� ������, ����������, ��������� �� ������:

{ACTIVATIONLINK}

��� ������������� �����-���� ������� � ���������� ��������� �� �������� {ACTIVATIONLINKWITHOUTCODE} � ������� ��� "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '��� ������ � ����������� �� ������ {FORUMNAME} ������, {REALNAME}.

��� ��������������� ������������ {USERNAME}.

����� ��� ������ �������, ������ ������ ������ � ������� ������, � �� ������� ����� �� �����.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => '������ �� ���������� � ������',
		'body' => '{USERNAME},

��� ������ �� ���������� � ������ "{GROUPNAME}" �� ������ {FORUMNAME} �������. ���� ������� ������ ���������.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => '������ �� ���������� � ������ ��������',
		'body' => '{USERNAME},

��� ������ �� ���������� � ������ "{GROUPNAME}" �� ������ {FORUMNAME} ��������.

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => '������ �� ���������� � ������ ��������',
		'body' => '{USERNAME},

��� ������ �� ���������� � ������ "{GROUPNAME}" �� {FORUMNAME} ��������.

��� ��������� �� ��������� �������: {REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '����� ����������, {NAME}!

���� ������� ������ ���� ������������, ������ ����� ������������ �������. ���� ��� ������������: {USERNAME}. ���� ������ ���� ������, ������ �������� ��� {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '����� ����������, {USERNAME}!

���� ������� ������ �� {FORUMNAME} ���� ��������, ������ � ����� ������������. ��� ���������, ����������, ��������� �� ������:

{ACTIVATIONLINK}

��� ������������� �����-���� ������� � ���������� ��������� �� �������� {ACTIVATIONLINKWITHOUTCODE} � ������� ��� "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => '����������� ���������',
		'body' => '{USERNAME},

��� �������� � ����������� �� {FORUMNAME}.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => '�������� ������� ������',
		'body' => '{USERNAME},

���� ������� ������ �� ������ {FORUMNAME} ���� �������. ��������� �������: ������� ������ ��� � �� ���� ������������. �� ����� ������������������ �����.

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => '����������� � �����������',
		'body' => '{USERNAME},
�� �� ��� ��� �� ������������ ���� ������� ������ �� ������ {FORUMNAME}.

��� ���������, ����������, ��������� �� ������:
{ACTIVATIONLINK}

��� ������������� �����-���� ������� � ���������� ��������� �� �������� {ACTIVATIONLINKWITHOUTCODE} � ������� ��� "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������: {USERNAME}, ������: {PASSWORD}.

������ ���������� ������������ ���� ������� ������. ����������, ��������� �� ������:

{ACTIVATIONLINK}

��� ������������� �����-���� ������� � ���������� ��������� �� �������� {ACTIVATIONLINKWITHOUTCODE} � ������� ��� "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������  {USERNAME}, ��� ������ {PASSWORD}.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:

		*/
		'subject' => '����� ����������: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

����� �� �������� ����� ����������, ����������, ������� �� ����� � ������� ������� � ������ "�������� ������� � ������ ���������� ������ �� email" � ����� �������.

������ ����� ���������� ����� �����������, ������ �� ���� ������:
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '����� ����: {TOPICSUBJECT}',
		'body' => '� �������, �� ������� �� ���������, ���� ������� ����� ����  \'{TOPICSUBJECT}\'.

�� ������ ����������� �, ������� �� ������
{TOPICLINK}

� ������� ����� ���� ������� ����� ����� ���, �� �� �� ������ �������� � ��� ����������� �� ��� ���, ���� �� �������� ���� ������ � �� ���������� �����-������ �� ���.

���������� ���� �������� ����:
{MESSAGE}

����� ���������� �� ����������� � ����� ����� � ���� �������, ������� ����:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '����� ����: {TOPICSUBJECT}',
		'body' => '� �������, �� ������� �� ���������, ���� ������� ����� ����  \'{TOPICSUBJECT}\'.

�� ������ ����������� �, ������� �� ������
{TOPICLINK}

� ������� ����� ���� ������� ����� ����� ���, �� �� �� ������ �������� � ��� ����������� �� ��� ���, ���� �� �������� ���� ������ � �� ���������� �����-������ �� ���.

����� ���������� �� ����������� � ����� ����� � ���� �������, ������� ����:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '����� ����: {TOPICSUBJECT}',
		'body' => '� �������, �� ������� �� ���������, ���� ������� ����� ����  \'{TOPICSUBJECT}\'.

�� ������ ����������� �, ������� �� ������
{TOPICLINK}

���������� ���� �������� ����:
{MESSAGE}

����� ���������� �� ����������� � ����� ����� � ���� �������, ������� ����:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => '����� ����: {TOPICSUBJECT}',
		'body' => '� �������, �� ������� �� ���������, ���� ������� ����� ����  \'{TOPICSUBJECT}\'.

�� ������ ����������� �, ������� �� ������
{TOPICLINK}

����� ���������� �� ����������� � ����� ����� � ���� �������, ������� ����:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => '������ �� ���������� � ������.',
		'body' => '{RECPNAME},

{APPYNAME} ������ ������ �� ���������� � ������ "{GROUPNAME}". ������������ ������ ��������� ������� ��� ���������� � ������:

{REASON}

�� ������ ��������� ��� ������� ������ ������, ������ �� ������:

{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.
			@description:
		*/
		'subject' => '������������� ������� �������� �� ������ {FORUMNAME}',
		'body' => '{REALNAME},

���� ����� ������� �������� �� {FORUMNAME} �������������. ���� ��� ������ �������� ���� �������� �������������, �� �� ��������� ��������� ������� ��������, � ��������� ������ ������� �������� �������� ������. ������ ������� ����:

�������� ��������: {SUBSCRIPTION}
�������������: {END_DATE}

�� ������ �������� ���� ��������, ������ �� ������:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '��� ������������ ������������ ������ ���� ������� ������ ���� ��������������. ��� ��������� ���������, ����������, �������� �� ������:
{ACTIVATIONLINK}

��� ������������� �����-���� ������� � ���������� ��������� �� �������� {ACTIVATIONLINKWITHOUTCODE} � ������� ��� "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => '����� ������ ��� ����������� �� ������ {FORUMNAME}',
		'body' => '��������� {REALNAME},
�� ��������������� �������� \'�������������� ������\' ��� ����� ������� ������. ��� ��������� ������ ������ ��������� �� ������:
{REMINDLINK}

IP: {IP}
��� ������������: {MEMBERNAME}

{REGARDS}',
	),
	'forgot_openid' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				IP: The IP address of the requester.
				OPENID: The members OpenID identity.
			@description:
		*/
		'subject' => '����������� OpenID ��� ����������� �� ������ {FORUMNAME}',
		'body' => '��������� {REALNAME},
�� ��������������� �������� \'�������������� OpenID\' ��� ����� ������� ������. ���� ������ ��� OpenID:
{OPENID}

IP: {IP}
��� ������������: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => '�������������� ��������� ������� ��������� �� ������ {FORUMNAME}',
		'body' => '��� ������ �������� ������ ���� ���������, ��������� ��������� �� ������ {FORUMNAME}.

{BODY}

����������, ������� �� ����� ��� ��������� ������ ���������.
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => '����: {TOPICSUBJECT} (�����������: {SENDERNAME})',
		'body' => '��������� {RECPNAME},
��������� ������������ � ����� "{TOPICSUBJECT}" �� {FORUMNAME}.  ��� ��������� ��������� �� ������:

{TOPICLINK}

�������,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => '����: {TOPICSUBJECT} (�����������: {SENDERNAME})',
		'body' => '��������� {RECPNAME},
��������� ������������ � ����� "{TOPICSUBJECT}" �� {FORUMNAME}.  ��� ��������� ��������� �� ������:

{TOPICLINK}

����� � ������ ���� ��� �������� �����������:
{COMMENT}

�������,

{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => '����������� � ���������: {TOPICSUBJECT} �� {POSTERNAME}',
		'body' => '{REPORTERNAME} ������� ��� �� ������, �������, ��������, ���������� ��������������� "{TOPICSUBJECT}" �� {POSTERNAME}. �� �������� ��� �����������, ��� ��� ��������� ����������� �������:

����: {TOPICLINK}
����� ���������: {REPORTLINK}

������������ ������� ��������� �����������:
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => '���������� � ����� ������',
		'body' => '������������, {USERNAME}!

���������� ��� ����� �� {FORUMNAME} ���� �������� � ������ �������. ���� ��������� ����� ���������� ��� �����.

���� ��� ������������ "{USERNAME}", ������: "{PASSWORD}".

������ ����� �������� � ���������� ������ �������, ������� ��� �������� ����� �����:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������ {USERNAME}. ���� ������ ���� ������, ������ ������������ ���, ������� {FORGOTPASSWORDLINK}.

�� ������� ���������� ������������ ���� ������� ������. ��� �����, ����������, ��������� �� ������:

{ACTIVATIONLINK}

��� ������������� �����-���� ������� � ���������� ��������� �� �������� {ACTIVATIONLINKWITHOUTCODE} � ������� ��� "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_openid_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������ {USERNAME}. �� ������� ����������� �� ��������� ��������������� OpenID:
{OPENID}

�� ������� ���������� ������������ ���� ������� ������. ��� �����, ����������,  ��������� �� ������:

{ACTIVATIONLINK}

��� ������������� �����-���� ������� � ���������� ��������� �� �������� {ACTIVATIONLINKWITHOUTCODE} � ������� ��� "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK:  The url link to the coppa form.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������ {USERNAME}. ���� ������ ���� ������, ������ ������������ ���, ������� {FORGOTPASSWORDLINK}.

����� ��� ��� ������� �����, ������������� ��������� ���������� ����� ���������/�������� ��� ����������� �� ������. �������������� ���������� ����� ��������, ������� �� ������:

{COPPALINK}

{REGARDS}',
	),
	'register_openid_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				COPPALINK:  The url link to the coppa form.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������ {USERNAME}. 

�� ������� ����������� �� ��������� ��������������� OpenID:
{OPENID}

����� ��� ��� ������� �����, ������������� ��������� ���������� ����� ���������/�������� ��� ����������� �� ������. �������������� ���������� ����� ��������, ������� �� ������:

{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������ {USERNAME}. ���� ������ ���� ������, ������ ������������ ���, ������� {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'register_openid_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '������� �� ����������� �� ������ {FORUMNAME}. ���� ��� ������������ {USERNAME}. 

�� ������� ����������� �� ��������� ��������������� OpenID:
{OPENID}

��� ��������� ������ ������� �������� ��� �������� ����� �����:

{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '��� ������ � ����������� �� ������ {FORUMNAME} ������, {REALNAME}.

���� ��� ������������ {USERNAME}. ���� ������ ���� ������, ������ ������������ ���, ������� {FORGOTPASSWORDLINK}.

���������, ���� ��� ������ �������. ����� ��� ����������, ������ ������ ������ � ������� ������, � �� ������� ����� �� �����.

{REGARDS}',
	),
	'register_openid_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => '����� ���������� �� ����� {FORUMNAME}',
		'body' => '��� ������ � ����������� �� ������ {FORUMNAME} ������, {REALNAME}.

���� ��� ������������ {USERNAME}.

�� ������� ����������� �� ��������� ��������������� OpenID:
{OPENID}

���������, ���� ��� ������ �������. ����� ��� ����������, ������ ������ ������ � ������� ������, � �� ������� ����� �� �����.

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => '����� � ����: {TOPICSUBJECT}',
		'body' => '�������� ����� �� {POSTERNAME} � ����, �� ������� �� ���������.

��������� �����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => '����� � ����: {TOPICSUBJECT}',
		'body' => '�������� ����� �� {POSTERNAME} � ����, �� ������� �� ���������.

��������� �����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

���������� ������ �������� ����:
{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => '����� � ����: {TOPICSUBJECT}',
		'body' => '�������� ����� �� {POSTERNAME} � ����, �� ������� �� ���������.

��������� �����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

� ���� ����� ���� ��������� ����� ����� �������, �� ����������� � ��� �� ����� ���������, ���� �� �� ����������� ���������, � ������� ��� ���� ����������.

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => '����� � ����: {TOPICSUBJECT}',
		'body' => '�������� ����� �� {POSTERNAME} � ����, �� ������� �� ���������.

��������� �����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

���������� ������ �������� ����:
{MESSAGE}

� ���� ����� ���� ��������� ����� ����� �������, �� ����������� � ��� �� ����� ���������, ���� �� �� ����������� ���������, � ������� ��� ���� ����������.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => '���� �����������: {TOPICSUBJECT}',
		'body' => '����, �� ������� �� ���������, ���� ����������� ������������� {POSTERNAME}.

����������� ����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => '���� �������������: {TOPICSUBJECT}',
		'body' => '����, �� ������� �� ���������, ���� ������������� ������������� {POSTERNAME}.

����������� ����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => '���� ��������������: {TOPICSUBJECT}',
		'body' => '����, �� ������� �� ���������, ���� �������������� ������������� {POSTERNAME}.

����������� ����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => '���� �������: {TOPICSUBJECT}',
		'body' => '����, �� ������� �� ���������, ���� ������� ������������� {POSTERNAME}.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => '���� ����������: {TOPICSUBJECT}',
		'body' => '����, �� ������� �� ���������, ���� ���������� ������������� {POSTERNAME}.

����������� ����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => '���� ����������: {TOPICSUBJECT}',
		'body' => '���� �� ������� �� ���������, ���� ���������� � ������ ����� ������������� {POSTERNAME}.

����������� ����� ����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => '���� ���������: {TOPICSUBJECT}',
		'body' => '����, �� ������� �� ���������, ���� ��������� �� ��� ��� ����� ������������� {POSTERNAME}.

����������� ������� ����: {TOPICLINK}

����� ���������� �� �����������, ������� ����: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => '��������������� ����� ������������',
		'body' => '�� ����� ������ ��������������� ����� ������������: {USERNAME}. ������� �� ������, ����� ����������� ��� �������.
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => '��������������� ����� ������������',
		'body' => '�� ����� ������ ��������������� ����� ������������: {USERNAME}. ������� �� ������, ����� ����������� ��� �������.
{PROFILELINK}

������ ��� ������������ ������ ���������� ���������, ������� ������ ������ ���� ��������. ��� ����� ������� �� ������:
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => '������! ����� �������� ����� ���������',
		'body' => '{REALNAME},

����� �������� �� ������ {FORUMNAME} ����� ���������. ����������, �������� ����� � ������ ��� ��������.

����� ������ ����� �������� ��������� ����������� ������������, ������������ �� ������ ������������ �������� � ���������� � ��������� ������� (���� ���������).

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => '�������� ������� ��������',
		'body' => '{REALNAME},

������������ ������� ��������� ������� ��������. ���� ������� ������ ���� ��������:

	�������� ��������: {NAME}
	��� ������������: {REFUNDNAME} ({REFUNDUSER})
	����: {DATE}

�� ������ ����������� ������� ����� ������������, ������� �� ������:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => '����� ������� ��������',
		'body' => '{REALNAME},

������������ ������� ����� ������� ��������. ���� ������� ������ ���� ��������:

	�������� ��������: {NAME}
	��� ������������: {SUBNAME} ({SUBUSER})
	Email ������������: {SUBEMAIL}
	����: {PRICE}
	����: {DATE}

�� ������ ����������� ������� ����� ������������, ������� �� ������:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => '��������� ������ ������� ��������',
		'body' => '{REALNAME},

��� ��������� ������� �������� �������� ��������� ������
---------------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => '� ���� �������� �� {FORUMNAME}.',
		'body' => '��������� {REALNAME},

������������� {FORUMNAME} ����������� ��� � ���� ��������. ����� ���� ���� � ��� �������� ��� �������.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => '� ��� ���� ��������...',
		'body' => '�� ����� �� �������� ��� ��������������� ��������. �� ����� �� �������� ��� ����� ������ ��� ����������� ����.

�� �� ����� �� �������.

�� ����� �� ������� ��� ���� �� ������������� ��������������� ��������� � ���������� ����������� �� ��� ��������, ��� ����� ���� ����� ���� �� �������� ���.

�� �� ����� �� �������.

�� �������� ��� ������������ ���������� ��� ���.

�� ������ ��� �� ����� ������ ���������� ��� ��������.

{REGARDS}

//:: ������ ������ ������������� ������������� :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => '� ��� ��������!',
		'body' => '���� ������ �� ������ {FORUMNAME} ������ ��� ����� ������ ���������� � ��� ���� ��������, {REALNAME}. ���� �� ����� �� ���� �� ������, ��������� � ���, ����� ������ ����������� �� ������ ��������.

������� � ��� ���� ��������, {REALNAME}, ���� ����������� �� ���� ������ ����� ������� ������� ��� ���.

� ���������� �����������,
������� ������ {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => '������������ � ��� �������� {REALNAME}',
		'body' => '������� {REALNAME},

��� � ������ ��� ���� ���.  ������������� ������ {FORUMNAME} ��������, ��� ��� ��� ������� ��� ��� ��� � ������ ��� ������� � �����.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => '� ��� ��������, {REALNAME}!',
		'body' => '�� ������, � ���� ������� ���� ��������, {REALNAME}?

�� ����� ... � ���!

� ��� ��������!

�� ����� �� ���� ��� ������ � �� ��������, ��� ��������� ��� ��� ��� ��� ����������.

������� ��� ����, {REALNAME}, ������ ���������!

- � ���������� ����������� �� ������ {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => '����������� � ���� ��������',
		'body' => '�� ��������, ��� ��� ���� �������� ����� �����, ��������� � ���������� ��� �������.
������ ��� �������� �����, ����� ������ ������ � ������ ������������ ���! ���� ���� ��������� ���� �� ������� ������� - �� ����� ���� ������ �� ����.

�� ��������, ��� �� ��������� ������� ���������� �� ���� ��� �� ������ ������������ � ��������� ����.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>