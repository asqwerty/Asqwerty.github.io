<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = '����';
$txt['modlog_member'] = '������������';
$txt['modlog_position'] = '������';
$txt['modlog_action'] = '��������';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = '���������� ������';
$txt['modlog_total_entries'] = '����� �������';
$txt['modlog_ac_approve_topic'] = '�������� ���� &quot;{topic}&quot; �� ������������ &quot;{member}&quot;';
$txt['modlog_ac_approve'] = '�������� ��������� &quot;{subject}&quot; � ���� &quot;{topic}&quot; �� ������������ &quot;{member}&quot;';
$txt['modlog_ac_lock'] = '������������� ���� &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = '������������ {member} ������� �������������� �� &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = '�������������� ���� &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = '����������� ���� &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = '���������� ���� &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = '������� ��������� &quot;{subject}&quot; �� ������������ &quot;{member}&quot; �� ���� &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = '������ ������������ &quot;{name}&quot;';
$txt['modlog_ac_remove'] = '������� ���� &quot;{topic}&quot; �� ������� &quot;{board}&quot;';
$txt['modlog_ac_modify'] = '��������������� ��������� &quot;{message}&quot; �� ������������ &quot;{member}&quot;';
$txt['modlog_ac_merge'] = '���������� ���� � &quot;{topic}&quot;';
$txt['modlog_ac_split'] = '��������� ���� &quot;{topic}&quot; ����� ���� &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = '���������� ���� &quot;{topic}&quot; �� ������� &quot;{board_from}&quot; � ������ &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = '�������������� �������';
$txt['modlog_ac_pruned'] = '������� ��������� ��������� � ��������� ����� {days} ����';
$txt['modlog_ac_news'] = '�������� �������';
$txt['modlog_enter_comment'] = '������ �����������';
$txt['modlog_moderation_log'] = '��� ���������';
$txt['modlog_moderation_log_desc'] = '���� ������� ������ ���� ��������, ������������� ������������ ������.<br /><strong>�������� ��������:</strong> ������ �� ����� ���� ������� �� ������ �����, ���� �� ������� 24 ����.';
$txt['modlog_no_entries_found'] = '������� �� �������';
$txt['modlog_remove'] = '�������';
$txt['modlog_removeall'] = '������� ���';
$txt['modlog_go'] = '�����';
$txt['modlog_add'] = '��������';
$txt['modlog_search'] = '������� �����';
$txt['modlog_by'] = '�� �����';
$txt['modlog_id'] = '<em>(������� - ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = '�������� ������ ��������������: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = '�������������� ������ �������������� : &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = '������ ������ ��������������: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = '��������� ��������� ����:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>������������:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>��� �����:</em> {hostname}';

$txt['modlog_admin_log'] = '���� �����������������';
$txt['modlog_admin_log_desc'] = '���� ������� ������ ���� �������� ��������������� ������.<br /><strong>�������� ��������:</strong> ������ �� ����� ���� ������� �� ������ �����, ���� �� ������� 24 ����.';
$txt['modlog_admin_log_no_entries_found'] = '������� �� �������.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = '����� �������� �� ������ {version}';
$txt['modlog_ac_install'] = '����������� ������ {version}';
$txt['modlog_ac_add_board'] = '�������� ����� ������: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = '������� ������ &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = '������ ������ &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = '��������� ����� ���������, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = '�������� ��������� &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = '������� ��������� &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = '������� ������ &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = '��������� ������ &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = '�������� ������ &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = '������������ &quot;{member}&quot; �������� � ������ &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = '������������ &quot;{member}&quot; ������ �� ������ &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = '������������ &quot;{member}&quot; ������ �� ���� �����';

$txt['modlog_ac_remind_member'] = '���������� ����������� ������������ &quot;{member}&quot; ��� ��������� ������� ������';
$txt['modlog_ac_approve_member'] = '��������/������������ ������� ������ ������������ &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = '����������� ��������';

$txt['modlog_ac_install_package'] = '���������� ���: &quot;{package}&quot;, ������ {version}';
$txt['modlog_ac_upgrade_package'] = '�������� ���: &quot;{package}&quot; �� ������ {version}';
$txt['modlog_ac_uninstall_package'] = '������ ���: &quot;{package}&quot;, ������ {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = '������������� ���� &quot;{topic}&quot; �� ������� &quot;{board}&quot; � ������ &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = '������������� ��������� �� ���� &quot;{subject}&quot; � ���� &quot;{topic}&quot; � ������ &quot;{board}&quot;.';

$txt['modlog_parameter_guest'] = '<em>�����</em>';

?>