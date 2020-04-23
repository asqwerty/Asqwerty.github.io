<?php
// Version: 2.0.10; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ru_RU';
$txt['lang_dictionary'] = 'ru';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'windows-1251';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('�����������', '�����������', '�������', '�����', '�������', '�������', '�������');
$txt['days_short'] = array('��.', '��.', '��.', '��.', '��.', '��.', '��.');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => '������', '�������', '�����', '������', '���', '����', '����', '�������', '��������', '�������', '������', '�������');
$txt['months_titles'] = array(1 => '������', '�������', '����', '������', '���', '����', '����', '������', '��������', '�������', '������', '�������');
$txt['months_short'] = array(1 => '���.', '���.', '����', '���.', '���', '����', '����', '���.', '���.', '���.', '����.', '���.');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = '�����';
$txt['newmessages1'] = '�����';
$txt['newmessages3'] = '�����';
$txt['newmessages4'] = ',';

$txt['admin'] = '�������';
$txt['moderate'] = '���������';
$txt['Stepen'] = '�������';

$txt['save'] = '���������';

$txt['modify'] = '��������';

$txt['skeet.h1n.ru'] = '�����';
$txt['forum_index'] = '%1$s - ��������';
$txt['members'] = '�������������';
$txt['board_name'] = '�������� �������';
$txt['posts'] = '���������';

$txt['member_postcount'] = '���������';
$txt['no_subject'] = '(��� ����)';
$txt['view_profile'] = '�������� �������';
$txt['guest_title'] = '�����';
$txt['author'] = '�����';
$txt['on'] = '';
$txt['remove'] = '�������';
$txt['start_new_topic'] = '����� ����';

$txt['login'] = '����';
// Use numeric entities in the below string.
$txt['username'] = '��� ������������';
$txt['password'] = '������';

$txt['username_no_exist'] = '������ ������������ �� ����������.';
$txt['no_user_with_email'] = '������������ � ����� e-mail �� ����������.';

$txt['board_moderator'] = '���������';
$txt['remove_topic'] = '������� ����';
$txt['topics'] = '���';
$txt['modify_msg'] = '������������� ���������';
$txt['name'] = '���';
$txt['email'] = 'E-mail';
$txt['subject'] = '����';
$txt['message'] = '���������';
$txt['redirects'] = '���������';
$txt['quick_modify'] = '��������';

$txt['choose_pass'] = '������';
$txt['verify_pass'] = '����������� ������';
$txt['position'] = '������';

$txt['profile_of'] = '�������� �������';
$txt['total'] = '�����';
$txt['posts_made'] = '���������';
$txt['website'] = '����';
$txt['register'] = '�����������';
$txt['warning_status'] = '������ ��������������';
$txt['user_warn_watch'] = '������������ � ������������� ������ ����������';
$txt['user_warn_moderate'] = '��������� ������������ ���������� � ������� ��� ���������';
$txt['user_warn_mute'] = '������������ ������� ��-�� ���������';
$txt['warn_watch'] = '��� �����������';
$txt['warn_moderate'] = '������������';
$txt['warn_mute'] = '��������� ��������� ���������';

$txt['message_index'] = '���������';
$txt['news'] = '�������';
$txt['Portal'] = '����';
$txt['home'] = '��������';

$txt['lock_unlock'] = '�������������/�������������� ����';
$txt['post'] = '���������';
$txt['error_occured'] = '������!';
$txt['at'] = '�';
$txt['logout'] = '�����';
$txt['started_by'] = '�����';
$txt['replies'] = '�������';
$txt['last_post'] = '��������� �����';
$txt['admin_login'] = '���� ��� ��������������';
// Use numeric entities in the below string.
$txt['topic'] = '����';
$txt['help'] = '�������';
$txt['notify'] = '����������';
$txt['unnotify'] = '�� ����������';
$txt['notify_request'] = '������ �������� ����������� �� e-mail ��� ��������� ����� ������� � ���� ����?';
// Use numeric entities in the below string.
$txt['regards_team'] = "� ���������,\n������������� ������ " . $context['forum_name'] . '';
$txt['notify_replies'] = '��������� � ����� �������';
$txt['move_topic'] = '����������� ����';
$txt['move_to'] = '����������� �';
$txt['pages'] = '��������';
$txt['users_active'] = '������������ �� ��������� %1$d �����';
$txt['personal_messages'] = '����������';
$txt['reply_quote'] = '�������������';
$txt['reply'] = '�����';
$txt['reply_noun'] = '�����';
$txt['approve'] = '��������';
$txt['approve_all'] = '�������� ���';
$txt['awaiting_approval'] = '������� ���������';
$txt['attach_awaiting_approve'] = '��������, ��������� ���������';
$txt['post_awaiting_approval'] = '�������� ��������: ������ ��������� ������� ��������� ����������.';
$txt['there_are_unapproved_topics'] = '� ������ ������� ������� ��������� %1$s ��� � %2$s ���������. ������� <a href="%3$s">�����</a> ��� ���������.';

$txt['msg_alert_none'] = '��� ���������...';
$txt['msg_alert_you_have'] = '� ���';
$txt['msg_alert_messages'] = '���������';
$txt['remove_message'] = '������� ���������';

$txt['online_users'] = '������ �� ������';
$txt['personal_message'] = '������ ���������';
$txt['jump_to'] = '������� �';
$txt['go'] = '��';
$txt['are_sure_remove_topic'] = '�������, ��� ������ ������� ��� ����?';
$txt['yes'] = '��';
$txt['no'] = '���';

$txt['search_end_results'] = '����� �����������';
$txt['search_on'] = '��';

$txt['search'] = '�����';
$txt['all'] = '���';

$txt['back'] = '�����';
$txt['password_reminder'] = '��������� ������';
$txt['topic_started'] = '���� ������';
$txt['title'] = '��������';
$txt['post_by'] = '����������';
$txt['memberlist_searchable'] = '����� �������������.';
$txt['welcome_member'] = '����� ����������';
$txt['admin_center'] = '����� �����������������';
$txt['last_edit'] = '��������� ��������������';
$txt['notify_deactivate'] = '������ ��������� ����������� ��� ���� ����?';

$txt['recent_posts'] = '��������� ���������';

$txt['location'] = '������������';
$txt['gender'] = '���';
$txt['date_registered'] = '���� �����������';

$txt['recent_view'] = '��������� ��������� �� ������.';
$txt['recent_updated'] = '';

$txt['male'] = '�������';
$txt['female'] = '�������';

$txt['error_invalid_characters_username'] = '������������ ������ � ����� ������������.';

$txt['welcome_guest'] = '����� ����������, <strong>%1$s</strong>. ����������, <a href="' . $scripturl . '?action=login">�������</a> ��� <a href="' . $scripturl . '?action=register">�����������������</a>.';
$txt['login_or_register'] = '����������, <a href="' . $scripturl . '?action=login">�������</a> ��� <a href="' . $scripturl . '?action=register">�����������������</a>.';
$txt['welcome_guest_activate'] = '<br />�� �������� <a href="' . $scripturl . '?action=activate">������ � ����� ���������</a>?';
$txt['hello_member'] = '������������,';
// Use numeric entities in the below string.
$txt['hello_guest'] = '����� ����������,';
$txt['welmsg_hey'] = '������������,';
$txt['welmsg_welcome'] = '����� ����������,';
$txt['welmsg_please'] = '����������,';
$txt['select_destination'] = '����������, �������� ����������';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = '�����';

$txt['icon_smiley'] = '�����������';
$txt['icon_angry'] = '����';
$txt['icon_cheesy'] = '�������';
$txt['icon_laugh'] = '���������';
$txt['icon_sad'] = '��������';
$txt['icon_wink'] = '�������������';
$txt['icon_grin'] = '�������';
$txt['icon_shocked'] = '������������';
$txt['icon_cool'] = '������';
$txt['icon_huh'] = '������������';
$txt['icon_rolleyes'] = '������ ������';
$txt['icon_tongue'] = '���������� ����';
$txt['icon_embarrassed'] = '�������������';
$txt['icon_lips'] = '��� �� �����';
$txt['icon_undecided'] = '� ��������������';
$txt['icon_kiss'] = '��������';
$txt['icon_cry'] = '��������';

$txt['moderator'] = '���������';
$txt['moderators'] = '����������';

$txt['mark_board_read'] = '�������� ���� ������ �����������';
$txt['views'] = '����������';
$txt['new'] = '�����';

$txt['view_all_members'] = '��� ������������';
$txt['view'] = '��������';

$txt['viewing_members'] = '������ �� %1$s �� %2$s';
$txt['of_total_members'] = '�����: %1$s';

$txt['forgot_your_password'] = '������ ������?';

$txt['date'] = '����';
// Use numeric entities in the below string.
$txt['from'] = '��';
$txt['check_new_messages'] = '��������� ����� ���������';
$txt['to'] = '����';

$txt['board_topics'] = '���';
$txt['members_title'] = '������������';
$txt['members_list'] = '������ �������������';
$txt['new_posts'] = '����� ���������';
$txt['old_posts'] = '��� ����� ���������';
$txt['redirect_board'] = '���������������';

$txt['sendtopic_send'] = '���������';
$txt['report_sent'] = '���� ������ ������� ����������.';

$txt['time_offset'] = '������� ����';
$txt['or'] = '���';

$txt['no_matches'] = '��������, ������ �� �������';

$txt['notification'] = '�����������';

$txt['your_ban'] = '�������� %1$s, �� �������� � �� ������ ��������� ��������� �� ������!';
$txt['your_ban_expires'] = '��� ��� �������� %1$s.';
$txt['your_ban_expires_never'] = '�� �������� ��������.';
$txt['ban_continue_browse'] = '�� ������ ���������� ������������ ������� ��� �����.';

$txt['mark_as_read'] = '�������� ��� ��������� ������������';

$txt['hot_topics'] = '���������� ���� (����� %1$d �������)';
$txt['very_hot_topics'] = '����� ���������� ���� (����� %1$d �������)';
$txt['locked_topic'] = '��������������� ����';
$txt['normal_topic'] = '������� ����';
$txt['participation_caption'] = '���� � ������ ��������';

$txt['go_caps'] = '�������';

$txt['print'] = '������';
$txt['profile'] = '�������';
$txt['topic_summary'] = '��������� � ���� ����';
$txt['not_applicable'] = '��� ������';
$txt['message_lowercase'] = '���������';
$txt['name_in_use'] = '��� ��� ��� ������������ ������ �������������.';

$txt['total_members'] = '����� �������������';
$txt['total_posts'] = '����� ���������';
$txt['total_topics'] = '����� ���';

$txt['mins_logged_in'] = '����������������� ������';

$txt['preview'] = '��������������� ��������';
$txt['always_logged_in'] = '���������';

$txt['logged'] = '�������';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = '��';

$txt['hours'] = '�����';
$txt['days_word'] = '����';

$txt['newest_member'] = ', ��� ����� ������������.';

$txt['search_for'] = '������';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = '������. �� �����?';
$txt['aim_title'] = 'AOL ������';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ ������';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN ������';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo ������';

$txt['maintain_mode_on'] = '����� ��������� �� ���������������.';

$txt['read'] = '���������';
$txt['times'] = '���';

$txt['forum_stats'] = '���������� ������';
$txt['latest_member'] = '��������� ������������';
$txt['total_cats'] = '����� ���������';
$txt['latest_post'] = '��������� ���������';

$txt['you_have'] = '� ���';
$txt['click'] = '';
$txt['here'] = '������� �����';
$txt['to_view'] = '��� ���������.';

$txt['total_boards'] = '����� ��������';

$txt['print_page'] = '������ ��������';

$txt['valid_email'] = 'E-mail ������ ���� ������������.';

$txt['geek'] = '�������� ������!!';
$txt['info_center_title'] = '%1$s - �������������� �����';

$txt['send_topic'] = '���������� �����';

$txt['sendtopic_title'] = '�������� ������ �� ���� &quot;%1$s&quot; ����� ��� ���������';
$txt['sendtopic_sender_name'] = '���� ���';
$txt['sendtopic_sender_email'] = '��� e-mail';
$txt['sendtopic_receiver_name'] = '��� ����������';
$txt['sendtopic_receiver_email'] = 'E-mail ����������';
$txt['sendtopic_comment'] = '�������� �����������';

$txt['allow_user_email'] = '��������� ������������� ����������� � ���� �� e-mail';

$txt['check_all'] = '�������� ���';

// Use numeric entities in the below string.
$txt['database_error'] = '������ ���� ������';
$txt['try_again'] = '����������, ��������� ��� ���. ���� ������ ���������� �����������, ���������� � ��������������.';
$txt['file'] = '����';
$txt['line'] = '������';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF ��������� � �������� ������������� ��������� ������ � ���� ������. ���� �������� �������� ��� ���������� ��������� �����������, ����������, ���������� � �������.';
$txt['database_error_versions'] = '<strong>����������:</strong> ��������, ���� ������ <em>��������� </em>����������. ������ ������ ������ %1$s, ����� ��� ������ ������������ ���� ������ %2$s. ��� ���������� ������, ����������, �������� �����.';
$txt['template_parse_error'] = '������ �������!';
$txt['template_parse_error_message'] = '��������, ���-�� ��������� � �������� �������� �� ������. ��� ��������� ��������, ������������� ���� ����� � ���������� �����. ���� ������� ��� ��������� �����, ���������� � ��������������.<br /><br />����� ����, ������ ����������� <a href="javascript:location.reload();">�������� ��������</a>.';
$txt['template_parse_error_details'] = '�������� � ��������� <tt><strong>%1$s</strong></tt> ������� ��� ��������� �����. ����������, ��������� ��������� � ���������� ����� &mdash; ���������, ��������� ������� (<tt>\'</tt>) ������ �������������� ������ (<tt>\\</tt>). ����� ������� ����� ��������� ���������� �� ������ PHP, ����������� <a href="' . $boardurl . '%1$s">��������� ��������������� ��� ����</a>.<br /><br />����� ����, ���������� <a href="javascript:location.reload();">�������� ��������</a> ��� <a href="' . $scripturl . '?theme=1">������������ ���� �� ���������</a>.';

$txt['today'] = '<strong>�������</strong> � ';
$txt['yesterday'] = '<strong>�����</strong> � ';
$txt['new_poll'] = '����� �����������';
$txt['poll_question'] = '������';
$txt['poll_vote'] = '����������';
$txt['poll_total_voters'] = '������������� �������������';
$txt['shortcuts'] = '���������: ������� alt+s ����� �����������/��������� ��� alt+p ����� �������������� ����������� ���������';
$txt['shortcuts_firefox'] = '���������: ������� shift+alt+s ����� �����������/��������� ��� shift+alt+p ��� ���������������� ��������� ���������';
$txt['poll_results'] = '���������� ����������';
$txt['poll_lock'] = '������������� �����������';
$txt['poll_unlock'] = '�������������� �����������';
$txt['poll_edit'] = '������������� �����������';
$txt['poll'] = '�����������';
$txt['one_day'] = '1 ����';
$txt['one_week'] = '1 ������';
$txt['one_month'] = '1 �����';
$txt['forever'] = '��������';
$txt['quick_login_dec'] = '';
$txt['one_hour'] = '1 ���';
$txt['moved'] = '����������';
$txt['moved_why'] = '����������, ������� ������� ����������� ������ ����.';
$txt['board'] = '������';
$txt['in'] = '�';
$txt['sticky_topic'] = '������������� ����';

$txt['delete'] = '�������';

$txt['your_pms'] = '���� ������ ���������';

$txt['kilobyte'] = '��';

$txt['more_stats'] = '[��������� ����������]';

// Use numeric entities in the below three strings.
$txt['code'] = '���';
$txt['code_select'] = '[��������]';
$txt['quote_from'] = '������';
$txt['quote'] = '����������';

$txt['merge_to_topic_id'] = 'ID ����, � ������� ����������';
$txt['split'] = '��������� ����';
$txt['merge'] = '���������� ����';
$txt['subject_new_topic'] = '�������� ��� ����� ����';
$txt['split_this_post'] = '�������� ������ ��� ���������.';
$txt['split_after_and_this_post'] = '�������� ��� � ����������� ���������.';
$txt['select_split_posts'] = '�������� ���������� ���������.';
$txt['new_topic'] = '����� ����';
$txt['split_successful'] = '���� ������� ��������� �� ���.';
$txt['origin_topic'] = '�������� ����';
$txt['please_select_split'] = '����������, �������� ���������, ������� ���������� ��������.';
$txt['merge_successful'] = '���� ������� ����������.';
$txt['new_merged_topic'] = '����� ������������ ����';
$txt['topic_to_merge'] = '���� ��� �����������';
$txt['target_board'] = '������ ��� ����� ����';
$txt['target_topic'] = '���������� � �����';
$txt['merge_confirm'] = '�������, ��� ������ ���������� ����?';
$txt['with'] = '�';
$txt['merge_desc'] = '��� ������� ���������� ��� ���� � ����. ��������� ����� ����������� �� ����. ����� ������ ��������� ����� ������ � ����������� ����.';

$txt['set_sticky'] = '���������� ����';
$txt['set_nonsticky'] = '��������� ����';
$txt['set_lock'] = '������������� ����';
$txt['set_unlock'] = '�������������� ����';

$txt['search_advanced'] = '����������� �����';

$txt['security_risk'] = '���� ������������:';
$txt['not_removed'] = '�� �� ������� ';
$txt['not_removed_extra'] = '%1$s ��� ��������� ����� %2$s, ������� ���� ������� �� �������. ��� �������� �������� � ����� �������������� ��� ��������� �������������������� ������� � ������ ������. ������� ������� �� ����������.';

$txt['cache_writable_head'] = '�������������� � ������ ������������������';
$txt['cache_writable'] = '���������� ��� ����������� �� �������� ��� ������ - ��� ����������� ������ ������������������ ������ ������.';

$txt['page_created'] = '�������� ������������� �� ';
$txt['seconds_with'] = ' ������. ��������: ';
$txt['queries'] = '.';

$txt['report_to_mod_func'] = '����������� ��� ������� ��� �������������� ����������� � ��������������� �� �������������� ����������.<br /><em>����������, �������� �������� �� ��, ��� ��� e-mail ����� ������� �����������.</em>';

$txt['online'] = '������';
$txt['offline'] = '�������';
$txt['pm_online'] = '������ ��������� (������)';
$txt['pm_offline'] = '������ ��������� (�������)';
$txt['status'] = '������';

$txt['go_up'] = '�����';
$txt['go_down'] = '����';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2015</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = '��� ��������:';
$txt['events'] = '�������:';
$txt['birthdays_upcoming'] = '��������� ��� ��������:';
$txt['events_upcoming'] = '��������� �������:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = '�����:';
$txt['calendar_year'] = '���:';
$txt['calendar_day'] = '����:';
$txt['calendar_event_title'] = '�������� �������';
$txt['calendar_event_options'] = '��������� �������';
$txt['calendar_post_in'] = '��������� �:';
$txt['calendar_edit'] = '������������� �������';
$txt['event_delete_confirm'] = '������� ��� �������?';
$txt['event_delete'] = '������� �������';
$txt['calendar_post_event'] = '�������� �������';
$txt['calendar'] = '���������';
$txt['calendar_link'] = '������ �� ���������';
$txt['calendar_upcoming'] = '��������� ����������� �������';
$txt['calendar_today'] = '������� �������';
$txt['calendar_week'] = '������';
$txt['calendar_week_title'] = '������ %1$d �� %2$d';
$txt['calendar_numb_days'] = '���������� ����:';
$txt['calendar_how_edit'] = '��� ��������������� ��� �������?';
$txt['calendar_link_event'] = '������ �� �������';
$txt['calendar_confirm_delete'] = '�������, ��� ������ ������� ��� �������?';
$txt['calendar_linked_events'] = '������ �� ��������� �������';
$txt['calendar_click_all'] = '������� ���� ��� ��������� %1$s';

$txt['moveTopic1'] = '�������� ���� ��� ���������������';
$txt['moveTopic2'] = '�������� �������� ����';
$txt['moveTopic3'] = '����� ����';
$txt['moveTopic4'] = '�������� �������� ���� � ������ ���������';
$txt['move_topic_unapproved_js'] = '��������������! ������ ���� �� ��������.\\n\\n�� ������������� ��������� ���� ���������������, ���� �� ����� �� �������� ����.';

$txt['theme_template_error'] = '���������� ��������� \'%1$s\' ������.';
$txt['theme_language_error'] = '���������� ��������� \'%1$s\' �������� ����.';

$txt['parent_boards'] = '����������';

$txt['smtp_no_connect'] = '������ ����������� � SMTP �������';
$txt['smtp_port_ssl'] = '������� ������ SMTP ����; ��� SSL �������� �� ������ ���� 465.';
$txt['smtp_bad_response'] = '�� ���� �������� ����� � ��������� �������';
$txt['smtp_error'] = '�������� � ��������� �����. ������: ';
$txt['mail_send_unable'] = '���������� ��������� ����� �� ���������� ������ \'%1$s\'';

$txt['mlist_search'] = '����� �������������';
$txt['mlist_search_again'] = '������ ��� ���';
$txt['mlist_search_email'] = 'E-mail';
$txt['mlist_search_messenger'] = 'ICQ, AIM, MSN, YIM';
$txt['mlist_search_group'] = '������';
$txt['mlist_search_name'] = '�����';
$txt['mlist_search_website'] = '����';
$txt['mlist_search_results'] = '������';
$txt['mlist_search_by'] = '%1$s';
$txt['mlist_menu_view'] = '����� ������';

$txt['attach_downloaded'] = '���������';
$txt['attach_viewed'] = '�����������';
$txt['attach_times'] = '���';

$txt['settings'] = '���������';
$txt['never'] = '�������';
$txt['more'] = '���';

$txt['hostname'] = '����';
$txt['you_are_post_banned'] = '��������, %1$s, �� �� �������� � ������� �� ������ ������������ ������� ������ ���������.';
$txt['ban_reason'] = '�������';

$txt['tables_optimized'] = '������� ���� ������ ��������������';

$txt['add_poll'] = '�������� �����������';
$txt['poll_options6'] = '����� ������� %1$s ��������� ������.';
$txt['poll_remove'] = '������� �����������';
$txt['poll_remove_warn'] = '�������, ��� ������ ������� �����������?';
$txt['poll_results_expire'] = '���������� ����� �������� ����� ��������� �����������';
$txt['poll_expires_on'] = '����������� �������������';
$txt['poll_expired_on'] = '����������� �����������';
$txt['poll_change_vote'] = '������� �����';
$txt['poll_return_vote'] = '�����';
$txt['poll_cannot_see'] = '� ������ ������ ����������� ���������� ����������� ����������.';

$txt['quick_mod_approve'] = '�������� ����������';
$txt['quick_mod_remove'] = '������� ����������';
$txt['quick_mod_lock'] = '����������/������������� �����������';
$txt['quick_mod_sticky'] = '����������/��������� ����������';
$txt['quick_mod_move'] = '����������� ���������� �';
$txt['quick_mod_merge'] = '��������� ����������';
$txt['quick_mod_markread'] = '�������� ���������� ��� �����������';
$txt['quick_mod_go'] = '������!';
$txt['quickmod_confirm'] = '�������?';

$txt['spell_check'] = '�������� ����������';

$txt['quick_reply'] = '������� �����';
$txt['quick_reply_desc'] = '� <em>������� ������</em> ����� ������������ BB-���� � ������.';
$txt['quick_reply_warning'] = '��������: ��� ���� �������������! �������� � ��� ����� ������ ��������� ��� ������������� ������.';
$txt['quick_reply_verification'] = '����� �������� ��������� ��������� ��������������� �� �������� ������� ������, ����� ����������� ��� %1$s.';
$txt['quick_reply_verification_guests'] = '(��������� ��� ���� ������)';
$txt['quick_reply_verification_posts'] = '(��������� ��� ���� ������������� � ������� ����� %1$d ���������)';
$txt['wait_for_approval'] = '�������� ��������: ������ ��������� �� ����� ������������, ���� ��������� �� ������� ���.';

$txt['notification_enable_board'] = '�������, ��� ������ �������� ����������� ��� �������� ����� ��� � ������ ������� ������?';
$txt['notification_disable_board'] = '��������� �����������?';
$txt['notification_enable_topic'] = '�������, ��� ������ �������� ����������� ��� ��������� ����� ������� � ���� ����?';
$txt['notification_disable_topic'] = '��������� �����������?';

$txt['report_to_mod'] = '�������� ����������';
$txt['issue_warning_post'] = '������� ��������������';

$txt['unread_topics_visit'] = '������������� ���� � ���������� ���������';
$txt['unread_topics_visit_none'] = '��� ������������� ��� � ������� ������ ���������� ���������.  <a href="' . $scripturl . '?action=unread;all">����������� ��� ������������� ����</a>.';
$txt['unread_topics_all'] = '��� ������������� ����';
$txt['unread_replies'] = '���� � �������������� ��������';

$txt['who_title'] = '��� ������';
$txt['who_and'] = ' � ';
$txt['who_viewing_topic'] = ' ������������� ��� ����.';
$txt['who_viewing_board'] = ' ������������� ���� ������.';
$txt['who_member'] = '������������';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS!';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['wap2'] = '��������� ������';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = '�����';
$txt['guests'] = '������';
$txt['user'] = '������������';
$txt['users'] = '�������������';
$txt['hidden'] = '�������';
$txt['buddy'] = '����';
$txt['buddies'] = '������';
$txt['most_online_ever'] = '�������� ������ �� ��� �����';
$txt['most_online_today'] = '�������� ������ �������';

$txt['merge_select_target_board'] = '������� ������ ��� ����������� ����';
$txt['merge_select_poll'] = '������� �����������, ��� ����������� ����';
$txt['merge_topic_list'] = '������� ���� ��� �����������';
$txt['merge_select_subject'] = '�������� ����������� ����';
$txt['merge_custom_subject'] = '������� ��������';
$txt['merge_enforce_subject'] = '�������� ���� � ���� ���������';
$txt['merge_include_notifications'] = '�������� �����������?';
$txt['merge_check'] = '����������?';
$txt['merge_no_poll'] = '��� �����������';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = '������';
$txt['message_icon'] = '������ ���������';

$txt['smileys_current'] = '������� ����� �������';
$txt['smileys_none'] = '��� �������';
$txt['smileys_forum_board_default'] = '�����/������ �� ���������';

$txt['search_results'] = '���������� ������';
$txt['search_no_results'] = '��������, ������ �� �������';

$txt['totalTimeLogged1'] = '����� �����, ����������� �� ������: ';
$txt['totalTimeLogged2'] = ' ����, ';
$txt['totalTimeLogged3'] = ' ����� � ';
$txt['totalTimeLogged4'] = ' �����.';
$txt['totalTimeLogged5'] = '� ';
$txt['totalTimeLogged6'] = '� ';
$txt['totalTimeLogged7'] = '�';

$txt['approve_thereis'] = '<b>��������!</b> ������� ���������:';
$txt['approve_thereare'] = '<b>��������!</b> ������� ���������:';
$txt['approve_member'] = '1';
$txt['approve_members'] = '';
$txt['approve_members_waiting'] = '';

$txt['notifyboard_turnon'] = '������ �������� ����������� � ����� ����� � ���� �������?';
$txt['notifyboard_turnoff'] = '�� ������ �������� ����������� � ����� ����� � ���� �������?';

$txt['activate_code'] = '��� ��� ���������';

$txt['find_members'] = '����� �������������';
$txt['find_username'] = '������������ ���, ��� ������������ ��� e-mail';
$txt['find_buddies'] = '���������� ������ ������?';
$txt['find_wildcards'] = '��������� ������� ��� ������ �� �����: *, ?';
$txt['find_no_results'] = '������ �� �������';
$txt['find_results'] = '����������';
$txt['find_close'] = '�������';

$txt['unread_since_visit'] = '����� ��������� � ���������� ������.';
$txt['show_unread_replies'] = '����� ������ �� ���� ���������.';

$txt['change_color'] = '�������� ����';

$txt['quickmod_delete_selected'] = '������� ���������';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = '� ��� ���� ����� ������ ���������.\\n������� � �� ���������?';

$txt['previous_next_back'] = '&laquo; ���������� ����';
$txt['previous_next_forward'] = '��������� ���� &raquo;';

$txt['movetopic_auto_board'] = '[������ ������]';
$txt['movetopic_auto_topic'] = '[������ �� ����]';
$txt['movetopic_default'] = '���� ���������� � ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = '��������/����������';

$txt['mark_unread'] = '�������� �������������';

$txt['ssi_not_direct'] = '����������, �� ����������� �������� � ����� SSI.php ����� ����� (URL). ��������, �� �������� ������������ ���� (%1$s) ��� �������� ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php �� ����� ��������� ������! ��������, ��� �������� ������� � ������� ��� ������� ���������. ����������, ��������� ��� SSI.php �������� � ����� ������ ����� ����� ������� ���������!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = '��������������� ��������';
$txt['preview_fetch'] = '�������� ���������������� ���������...';
$txt['preview_new'] = '����� ���������';
$txt['error_while_submitting'] = '��������� ������ �������� ��� ������� �������� ���������:';
$txt['error_old_topic'] = '��������������: � ������ ���� �� ���� ��������� ����� %1$d ����.<br />���� �� �������, ��� ������ ��������, �� ����� �������� ����� ����.';

$txt['split_selected_posts'] = '��������� ���������';
$txt['split_selected_posts_desc'] = '���� ��������� ���������, ����������� ���� ����� ����������.';
$txt['split_reset_selection'] = '����� ���������';

$txt['modify_cancel'] = '��������';
$txt['mark_read_short'] = '�������� ������������';

$txt['pm_short'] = '����������';
$txt['pm_menu_read'] = '��������';
$txt['pm_menu_send'] = '��������� ���������';

$txt['hello_member_ndt'] = '������������,';

$txt['unapproved_posts'] = '������������ ��������� (���: %1$d, ���������: %2$d)';

$txt['ajax_in_progress'] = '�����������...';

$txt['mod_reports_waiting'] = '� ��������� ����� ����� %1$d � ���������� �� ������������.';

$txt['view_unread_category'] = '������������� ���������';
$txt['verification'] = '���������� ��������';
$txt['visual_verification_description'] = '�������� �������, ������� ���������� �� ��������';
$txt['visual_verification_sound'] = '����������';
$txt['visual_verification_request_new'] = '��������� ������ �����������';

// Sub menu labels
$txt['summary'] = '�������� ����������';
$txt['account'] = '��������� ��������';
$txt['forumprofile'] = '��������� �������';

$txt['modSettings_title'] = '�������� � ���������';
$txt['package'] = '�������� �������';
$txt['errlog'] = '���� ������';
$txt['edit_permissions'] = '����� �������';
$txt['mc_unapproved_attachments'] = '������������ ��������';
$txt['mc_unapproved_poststopics'] = '������������ ��������� � ����';
$txt['mc_reported_posts'] = '�����������';
$txt['modlog_view'] = '���� ���������';
$txt['calendar_menu'] = '�������� ���������';

//!!! Send email strings - should move?
$txt['send_email'] = '��������� e-mail';
$txt['send_email_disclosed'] = '�������� ��������: ��� ����� ����� ����� ����������.';
$txt['send_email_subject'] = '���� ���������';

$txt['ignoring_user'] = '�� ����������� ������� ������������.';
$txt['show_ignore_user_post'] = '�������� ���������.';

$txt['spider'] = '����';
$txt['spiders'] = '������';
$txt['openid'] = 'OpenID';

$txt['downloads'] = '�������';
$txt['filesize'] = '������ �����';
$txt['subscribe_webslice'] = '�������� ���-�������� � �������';

// Restore topic
$txt['restore_topic'] = '������������ ����';
$txt['restore_message'] = '������������ ���������';
$txt['quick_mod_restore'] = '������������ ���������� ���������';

// Editor prompt.
$txt['prompt_text_email'] = '������� ����������� �����.';
$txt['prompt_text_ftp'] = '������ ftp �����';
$txt['prompt_text_url'] = '������� ����� ������.';
$txt['prompt_text_img'] = '������ ��������������� ��������.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = '�������';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = '��������: ';
$txt['debug_subtemplates'] = '�������������� ��������: ';
$txt['debug_language_files'] = '�������� ������: ';
$txt['debug_stylesheets'] = '������ ������: ';
$txt['debug_files_included'] = '���������� ������: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = '��������';
$txt['debug_cache_hits'] = '��������� � ���: ';
$txt['debug_cache_seconds_bytes'] = '%1$s ���. - %2$s ����';
$txt['debug_cache_seconds_bytes_total'] = '%1$s ���. ��� %2$s ����';
$txt['debug_queries_used'] = '�������� � ��: %1$d.';
$txt['debug_queries_used_and_warnings'] = '�������� � ��: %1$d, %2$d ��������������.';
$txt['debug_query_in_line'] = '���� <em>%1$s</em>, ������ <em>%2$s</em>, ';
$txt['debug_query_which_took'] = '������������ %1$s ���.';
$txt['debug_query_which_took_at'] = '��� ������ %1$s ���. � ��������: %2$s.';
$txt['debug_show_queries'] = '[�������� �������]';
$txt['debug_hide_queries'] = '[������ �������]';

?>