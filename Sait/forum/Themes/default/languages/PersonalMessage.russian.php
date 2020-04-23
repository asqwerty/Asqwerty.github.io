<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = '������ ���������';
$txt['send_message'] = '��������� ���������';
$txt['pm_add'] = '��������';
$txt['make_bcc'] = '������� �����';
$txt['pm_to'] = '����';
$txt['pm_bcc'] = '�����';
$txt['inbox'] = '��������';
$txt['conversation'] = '������';
$txt['messages'] = '���������';
$txt['sent_items'] = '������������';
$txt['new_message'] = '����� ���������';
$txt['delete_message'] = '������� ���������';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = '������� ��� ������ ���������';
$txt['delete_all_confirm'] = '�� �������, ��� ������ ������� ��� ���������?';
$txt['recipient'] = '����������';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = '����� ������ ���������: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = '�� �������� ������ ��������� �� SENDER �� ' . $context['forum_name'] . '.' . "\n\n" . '�������� ��������: ��� ����� ���� �����������. ����������, �� ��������� �� ��� ������.' . "\n\n" . '������������ ��� ���������:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(����������: \'���1, ���2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = '�������� �� ��� ������ ��������� �����:';

$txt['delete_selected_confirm'] = '�� �������, ��� ������ ������� ��� ���������� ������ ���������?';

$txt['sent_to'] = '����������';
$txt['reply_to_all'] = '�������� ����';
$txt['delete_conversation'] = '������� ������';

$txt['pm_capacity'] = '����������';
$txt['pm_currently_using'] = '%1$s ���������, �������� �� %2$s%%.';
$txt['pm_sent'] = '���� ��������� ������� ����������.';

$txt['pm_error_user_not_found'] = '�� ������ ������������ \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = '������������ \'%1$s\' ������������ ���� ������ ���������.';
$txt['pm_error_data_limit_reached'] = '��������� �� ����� ���� ���������� ������������ \'%1$s\', ��� ��� ��� ���� ����������!';
$txt['pm_error_user_cannot_read'] = '������������ \'%1$s\' �� ����� �������� ������ ���������.';
$txt['pm_successfully_sent'] = '������ ��������� ������� ���������� ������������ \'%1$s\'.';
$txt['pm_send_report'] = '��������� �����';
$txt['pm_save_outbox'] = '��������� ����� � ���������';
$txt['pm_undisclosed_recipients'] = '������� ����������';
$txt['pm_too_many_recipients'] = '�� �� ������ �������� ������ ��������� ����� ��� %1$d ����������� �� ���� ���.';

$txt['pm_read'] = '���������';
$txt['pm_replied'] = '��������';

// Message Pruning.
$txt['pm_prune'] = '������� ���������';
$txt['pm_prune_desc1'] = '������� ��� ������ ��������� ������ ���';
$txt['pm_prune_desc2'] = '����.';
$txt['pm_prune_warning'] = '�� �������, ��� ������ �������� ���� ������ ���������?';

// Actions Drop Down.
$txt['pm_actions_title'] = '���������� ��������';
$txt['pm_actions_delete_selected'] = '������� ����������';
$txt['pm_actions_filter_by_label'] = '����������� �� �������';
$txt['pm_actions_go'] = '���������';

// Manage Labels Screen.
$txt['pm_apply'] = '�������';
$txt['pm_manage_labels'] = '���������� ��������';
$txt['pm_labels_delete'] = '�� �������, ��� ������ ������� ���������� ������?';
$txt['pm_labels_desc'] = '����� ����� ���������, ������������� � ������� ������ ��� ����� ������ ���������.';
$txt['pm_label_add_new'] = '�������� ����� �����';
$txt['pm_label_name'] = '��� ������';
$txt['pm_labels_no_exist'] = '� ��� ��� ��������� �������!';

// Labeling Drop Down.
$txt['pm_current_label'] = '�����';
$txt['pm_msg_label_title'] = '�������� ������';
$txt['pm_msg_label_apply'] = '�������� �����';
$txt['pm_msg_label_remove'] = '������ �����';
$txt['pm_msg_label_inbox'] = '��������';
$txt['pm_sel_label_title'] = '������ ��� ����������';

// Sidebar Headings.
$txt['pm_labels'] = '������';
$txt['pm_messages'] = '���������';
$txt['pm_actions'] = '��������';
$txt['pm_preferences'] = '������������';

$txt['pm_is_replied_to'] = '�� �������� �� ��� ���������.';

// Reporting messages.
$txt['pm_report_to_admin'] = '�������� �������������';
$txt['pm_report_title'] = '������ �� ���������';
$txt['pm_report_desc'] = '����� ����� �������� ������ �� ������ ��������� ������� ������������. ���� ������ ����� ���������� �� ������������ ������������� ������, ������ � ����������� ������������� ���������.';
$txt['pm_report_admins'] = '�������� �������������';
$txt['pm_report_all_admins'] = '��������� ���� ��������������� ������';
$txt['pm_report_reason'] = '�������';
$txt['pm_report_message'] = '���������';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[�����] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} �������� ����� � ������ ���������, ������������ {SENDER}, �� ��������� ��������:';
$txt['pm_report_pm_other_recipients'] = '������ ���������� ���������:';
$txt['pm_report_pm_hidden'] = '%1$d ������� ����������(�)';
$txt['pm_report_pm_unedited_below'] = '���� ���������� ������� ��������� � ������� �������� �����:';
$txt['pm_report_pm_sent'] = '�����������:';

$txt['pm_report_done'] = '���������� �� ������������ ������. � ������ ������� �� ������ �������� ����� �� �������������.';
$txt['pm_report_return'] = '�������� �� ��������';

$txt['pm_search_title'] = '����� ������ ���������';
$txt['pm_search_bar_title'] = '����� ���������';
$txt['pm_search_text'] = '�����';
$txt['pm_search_go'] = '������';
$txt['pm_search_advanced'] = '����������� �����';
$txt['pm_search_user'] = '�� ������������';
$txt['pm_search_match_all'] = '���������� ��� �����';
$txt['pm_search_match_any'] = '���������� ����� �����';
$txt['pm_search_options'] = '��������';
$txt['pm_search_post_age'] = '�� ��������';
$txt['pm_search_show_complete'] = '���������� � ����������� ��������� �������.';
$txt['pm_search_subject_only'] = '����� ������ �� ���� � ������.';
$txt['pm_search_between'] = '�����';
$txt['pm_search_between_and'] = '�';
$txt['pm_search_between_days'] = '����';
$txt['pm_search_order'] = '���������� �����������';
$txt['pm_search_choose_label'] = '�������� ��������� ������ ��� ����� �����';

$txt['pm_search_results'] = '���������� ������';
$txt['pm_search_none_found'] = '��������� �� �������';

$txt['pm_search_orderby_relevant_first'] = '���������� �������';
$txt['pm_search_orderby_recent_first'] = '��������� �������';
$txt['pm_search_orderby_old_first'] = '������ �������';

$txt['pm_visual_verification_label'] = '���������� ��������';
$txt['pm_visual_verification_desc'] = '����������, ������� ��� �� �����������, ������ ��� ��������� ������ ���������.';

$txt['pm_settings'] = '�������� ���������';
$txt['pm_change_view'] = '�������� ���';

$txt['pm_manage_rules'] = '���������� ���������';
$txt['pm_manage_rules_desc'] = '������� ��������� ��������� ������������� ����������� �������� ��������� �� ��������� ��������. ���� ������������ ������ ���� ������������� ��������. ��� ��������� ������� ������ ������� �� ��� ��������.';
$txt['pm_rules_none'] = '�� ������� �� ������ ������� ��� ���������.';
$txt['pm_rule_title'] = '������';
$txt['pm_add_rule'] = '�������� ����� ������';
$txt['pm_apply_rules'] = '��������� ������ ������';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = '�� �������, ��� ������ ��������� ������� ������� �� ���� ������ ���������?';
$txt['pm_edit_rule'] = '�������� ������';
$txt['pm_rule_save'] = '��������� ������';
$txt['pm_delete_selected_rule'] = '������� ��������� �������';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = '�� ������� ��� ������ ������� ���������� �������?';
$txt['pm_rule_name'] = '��������';
$txt['pm_rule_name_desc'] = '�������� ������� ��� �����������';
$txt['pm_rule_name_default'] = '[��������]';
$txt['pm_rule_description'] = '��������';
$txt['pm_rule_not_defined'] = '�������� ��������� ������� ��� ���� ����� ��������� �������� �������.';
$txt['pm_rule_js_disabled'] = '����������: � ��� �������� JavaScript. ������������� �������� ��� ��� ������������� ���� �������.';
$txt['pm_rule_criteria'] = '�������';
$txt['pm_rule_criteria_add'] = '�������� �������';
$txt['pm_rule_criteria_pick'] = '������� �������';
$txt['pm_rule_mid'] = '��� �����������';
$txt['pm_rule_gid'] = '������ �����������';
$txt['pm_rule_sub'] = '���� ���������';
$txt['pm_rule_msg'] = '���� ��������� ��������';
$txt['pm_rule_bud'] = '����������� ����';
$txt['pm_rule_sel_group'] = '������� ������';
$txt['pm_rule_logic'] = '����� ���������� ������';
$txt['pm_rule_logic_and'] = '��� ������� ������ ���������';
$txt['pm_rule_logic_or'] = '���������� ���������� ������ �������';
$txt['pm_rule_actions'] = '��������';
$txt['pm_rule_sel_action'] = '������� ��������';
$txt['pm_rule_add_action'] = '�������� ��������';
$txt['pm_rule_label'] = '�������� �������';
$txt['pm_rule_sel_label'] = '�������� �����';
$txt['pm_rule_delete'] = '������� ���������';
$txt['pm_rule_no_name'] = '�� ������ ������ �������� �������.';
$txt['pm_rule_no_criteria'] = '������ ������ ��������� ���� �� ���� ������� � ���� ��������.';
$txt['pm_rule_too_complex'] = '������, ������� �� �������, ������� ������� ��� SMF. ���������� ������� ������ ��������.';

$txt['pm_readable_and'] = '<em>�</em>';
$txt['pm_readable_or'] = '<em>���</em>';
$txt['pm_readable_start'] = '���� ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = '��������� �� ������������ &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = '����������� �� ������ &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = '���� ��������� �������� &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = '���� ��������� �������� &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = '����������� � ����';
$txt['pm_readable_label'] = '�������� ������� &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = '������� ���������';
$txt['pm_readable_then'] = '<strong>�����</strong>';

?>