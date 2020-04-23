<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = '���� ������ ��������� �������� ��������� ��������� ������� � �������� ��������� ������. ����������, ����������� <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">��������� ���� ����������</a> ��� ��������� �������������� ����������. ����� ��������� ������� �������� ������ ���������, ����� �� ������ (?) ����� � ���.';
$txt['security_settings_desc'] = '� ������ ������� ����� ��������� ��������� ������������ � ������������� ������, ������� ��������� ���������.';
$txt['modification_settings_desc'] = '������ ������ �������� ��������� �����, ������������� �� ������';

$txt['modification_no_misc_settings'] = '������������� �����, ������� ���������, � ������ ������� ���.';

$txt['pollMode'] = '�����������';
$txt['disable_polls'] = '��������� �����������';
$txt['enable_polls'] = '��������� �����������';
$txt['polls_as_topics'] = '���������� � ���� ���';
$txt['allow_guestAccess'] = '��������� ������ ������������� �����';
$txt['userLanguage'] = '��������� ������������� �������� ���� ������';
$txt['allow_editDisplayName'] = '��������� ������������� �������� ������������ ���';
$txt['allow_hideOnline'] = '��������� ������������� �������� ���� ������-������';
$txt['guest_hideContacts'] = '�� ���������� ���������� ������������� ������ ������';
$txt['titlesEnable'] = '��������� ������� ��� ��������';
$txt['enable_buddylist'] = '��������� ������ ������/������������';
$txt['default_personal_text'] = '������� ��� �������� �� ���������';
$txt['number_format'] = '������ ����� �� ���������';
$txt['time_format'] = '������ ������� �� ���������';
$txt['setting_time_offset'] = '������� �� ������� <div class="smalltext">(���������� � � �������� �������������.)</div>';
$txt['setting_default_timezone'] = '��������� ���� �������';
$txt['failed_login_threshold'] = '���������� ��������� ������� �����';
$txt['lastActive'] = '�����, � ������� �������� ������������ ��������� ��������';
$txt['trackStats'] = '�������� ��������� ����������';
$txt['hitStats'] = '�������� ���������� ���������� (���������� ������ ���� ��������)';
$txt['enableCompressedOutput'] = '������������ ������ �������';
$txt['disableTemplateEval'] = '��������� �������� �������� ���� ����������';
$txt['databaseSession_enable'] = '������� ������ � ���� ������';
$txt['databaseSession_loose'] = '��������� ��������� ������������ �� ������������ ��������';
$txt['databaseSession_lifetime'] = '����������������� ������ � ��������:';
$txt['enableErrorLogging'] = '�������� ���������������� ������';
$txt['enableErrorQueryLogging'] = '�������� � ��� ������ ����� SQL-������� � ���� ������';
$txt['pruningOptions'] = '��������� ��������� ������� �����';
$txt['pruneErrorLog'] = '������� ������ � ���� ������ ������ <div class="smalltext">(0 &mdash; ���������)</div>';
$txt['pruneModLog'] = '������� ������ �  ���� ��������� ������ <div class="smalltext">(0 &mdash; ���������)</div>';
$txt['pruneBanLog'] = '������� ���� ���� ������:<div class="smalltext">(0 &mdash; ���������)</div>';
$txt['pruneReportLog'] = '������� ������ � ���� �������� ���������� ������ <div class="smalltext">(0 &mdash; ���������)</div>';
$txt['pruneScheduledTaskLog'] = '������� ������ � ���� ���������� ����� ������<div class="smalltext">(0 &mdash; ���������)</div>';
$txt['pruneSpiderHitLog'] = '������� ������ � ���� ���������� ��������� ����� ������<div class="smalltext">(0 &mdash; ���������)</div>';
$txt['cookieTime'] = '����� �������� cookies (� �������)';
$txt['localCookies'] = '������������ ��������� �������� cookies<div class="smalltext">(SSI � ���� �������� �������� �� �����.)</div>';
$txt['globalCookies'] = '������������ ��������� cookies ��� ����������<div class="smalltext">(������� ��������� ��������� �������� cookies!)</div>';
$txt['secureCookies'] = '��������� cookies<div class="smalltext">(����������� ������ ��� ������������� HTTPS-���������� &mdash; � ��������� ������� �� ���������!)</div>';
$txt['securityDisable'] = '��������� �������� ������ ��� ����� � �������';
$txt['send_validation_onChange'] = '��������� ��������� ������� ������ ����� ����� ������������ ������';
$txt['approveAccountDeletion'] = '����������� ��������� ������ ��� �������� ������������� ������ ��������';
$txt['autoOptMaxOnline'] = '�������� ������������� ������ �� ����� �����������:<div class="smalltext">(0 &mdash; ��� �����������.)</div>';
$txt['autoFixDatabase'] = '������������� ��������������� ������������ �������';
$txt['allow_disableAnnounce'] = '��������� ������������� ������������ �� ����������� ������';
$txt['disallow_sendBody'] = '�� ���������� ����� ��������� � ������������';
$txt['queryless_urls'] = '������������ ����������� URL-������ <div class="smalltext"><strong>������ ��� Apache/Lighttpd!</strong></div>';
$txt['max_image_width'] = '������������ ������ ����������� ����������� (0 = �� ������ ������)';
$txt['max_image_height'] = '������������ ������ ����������� ����������� (0 = �� ������ ������)';
$txt['enableReportPM'] = '��������� ������ �� ������ ���������';
$txt['max_pm_recipients'] = '������������ ���������� ����������� ��� �������� ������� ��������� <div class="smalltext">(0 &mdash; ��� �����������, �� ��������������� �� ����������������)</div>';
$txt['pm_posts_verification'] = '���������� ���������, ����� �������� �� ����� ������� ��� ��� ������� �� <div class="smalltext">(0 &mdash; ��� �����������, �� ��������������� �� ����������������)</div>.';
$txt['pm_posts_per_hour'] = '���������� ��, ������� ����� �������� ������������ � ������� ������ ���� <div class="smalltext">(0 &mdash; ��� �����������, �� ����������� �� ����������������)</div>';
$txt['compactTopicPagesEnable'] = '���������� ���������� ������������ �������';
$txt['contiguous_page_display'] = '������ ����������� ���������� �������:';
$txt['to_display'] = '��� �����������';
$txt['todayMod'] = '��������� ������� &quot;�������&quot;';
$txt['today_disabled'] = '���������';
$txt['today_only'] = '������ �������';
$txt['yesterday_today'] = '������� � �����';
$txt['topbottomEnable'] = '���������� ������ <strong>�����</strong>/<strong>����</strong>';
$txt['onlineEnable'] = '���������� ������ ������/������� � ���������� �������������';
$txt['enableVBStyleLogin'] = '���������� ����� ������� ����������� �� ������ ��������';
$txt['defaultMaxMembers'] = '���������� ������������� �� �������� (� ������ �������������)';
$txt['timeLoadPageEnable'] = '���������� �����, ����������� �� �������� ��������';
$txt['disableHostnameLookup'] = '�� ���������� �������� ������ �������������';
$txt['who_enabled'] = '���������� ������ "������ �� ������"';
$txt['make_email_viewable'] = '���������� e-mail �������������';
$txt['meta_keywords'] = '�������� �����, ��������������� ������ <div class="smalltext">�������� ������ ��� ����������.</div>';

$txt['karmaMode'] = '������� �����';
$txt['karma_options'] = '��������|���������� ����� �����|���������� �������� ����/�����';
$txt['karmaMinPosts'] = '����������� ���������� ��������� ��� ��������� ����� �������������';
$txt['karmaWaitTime'] = '����� �������� � �����';
$txt['karmaTimeRestrictAdmins'] = '���������� ��������������� �������� ��������';
$txt['karmaLabel'] = '�������� �����';
$txt['karmaApplaudLabel'] = '����� ��� ����������� �����';
$txt['karmaSmiteLabel'] = '����� ��� ���������� �����';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>��������! ������ ��� ������������� ��� �������, �������� ��������� ����������.</strong></div><br />
	SMF ������������ ����������� � ������� �������������. �������������� ��������� ������������:<br />
	<ul class="normallist"> 
		<li>APC</li>
		<li>eAccelerator (������ ������ 0.9.6 �� ������������ ����������� ������)</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (�� Zend Optimizer)</li> 
		<li>XCache</li>
	</ul>
	����������� ����� �������� �����, ���� PHP ������������� � ���������� ������ �� ���������� ���� ������������� ��� �� ������� �������� memcached.
	���� �� ���� �� ������������� �� ����������, SMF ����� ������������ ����������� ����������� �� ������.<br /><br />
	SMF ������������ ��������� ������� �����������. ��� ���� �������, ��� ������ �������� ���������� �������. ���� ������ ������������ �����������, ������������� ������� ����������� ������ �������.
	<br /><br />
	�������� ��������: ���� ������������ memcached, ���� ���������� ������� ��������� ���������. ������� �� ����� �������, ��� �������� �� �������:
	<br />
	&quot;������1,������2,������3:����,������4&quot;<br /><br />
	���� ���� �� ������, SMF ����� ������������ ���� �� ��������� &mdash; 11211. SMF ����� �������� ������������� �������������� �������� ����� ���������.
	<br /><br />
	%1$s
	<hr />';

$txt['detected_no_caching'] = '<strong class="alert">�� ������� �� ���������� �������������� SMF �������������.</strong>';
$txt['detected_APC'] = '<strong style="color: green">�� ������� ���������� APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">�� ������� ���������� eAccelerator.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green"�� ������� ���������� MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">�� ������� ���������� Zend Accelerator.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">�� ������� ���������� Memcached.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">�� ������� ���������� XCache.</strong>';

$txt['cache_enable'] = '������� �����������';
$txt['cache_off'] = '����������� ���������';
$txt['cache_level1'] = '������� 1 (�������������)';
$txt['cache_level2'] = '������� 2';
$txt['cache_level3'] = '������� 3 (�� �������������)';
$txt['cache_memcached'] = '��������� Memcache:';

$txt['loadavg_warning'] = '<span class="error">�������� ��������: ����������� ���� ��������� ���������� �������� � �������������. ��������� ��� ������ �� ���� ���������� ������� ������� �������� ����� �������� � ������ <strong>�������������������</strong> ������! ������� ������� ��������: <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = '�������� ������������ �������� �� �������� �������� (load averages)';
$txt['loadavg_auto_opt'] = '����� ��� ���������� �������������� ����������� ���� ������';
$txt['loadavg_search'] = '����� ��� ���������� ������';
$txt['loadavg_allunread'] = '����� ��� ���������� ������� "��� ������������� ���������"';
$txt['loadavg_unreadreplies'] = '����� ��� ���������� ������� "������������� ������"';
$txt['loadavg_show_posts'] = '����� ��� ���������� ������� "�������� ��������� ������������"';
$txt['loadavg_forum'] = '����� ��� <strong>�������</strong> ���������� ������';
$txt['loadavg_disabled_windows'] = '<span class="error">������������ �������� �� �������������� Windows-���������.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">������������ �������� ��������� � ���������� ������ ��������.</span>';

$txt['setting_password_strength'] = '���������� � ����� ������ �������������';
$txt['setting_password_strength_low'] = '������ &mdash; ������� 4 �������';
$txt['setting_password_strength_medium'] = '������� &mdash; �� ����� ��������� � ������ ������������';
$txt['setting_password_strength_high'] = '������� &mdash; ��������� ��������� ��������';

$txt['antispam_Settings'] = '������ �� ������';
$txt['antispam_Settings_desc'] = '����� ����� ��������� � ������������ �������� ����������� ����� ��� ������ ������ �� ����� � �����.';
$txt['setting_reg_verification'] = '��������� �������� �� �������� �����������';
$txt['posts_require_captcha'] = '���������� ���������, �� ���������� �������� ��������� �������� �����';
$txt['posts_require_captcha_desc'] = '(0 &mdash; ��� �����������, �� ����������� �� ����������������)';
$txt['search_enable_captcha'] = '������������ ��� �������� ��� ������ �������';
$txt['setting_guests_require_captcha'] = '����� ������ ��������������� ������� ������ ����� ����������� ��������';
$txt['setting_guests_require_captcha_desc'] = '(��������������� �������������, ���� ���� ������� ����������� ���������� ���������)';
$txt['guests_report_require_captcha'] = '����� ������ ��������� ���������� �������� ��� ������ �������� ���������';

$txt['configure_verification_means'] = '��������� ������ �������� �����';
$txt['setting_qa_verification_number'] = '���������� ����������� ��������';
$txt['setting_qa_verification_number_desc'] = '(0 &mdash; ���������; ��� ������� ����������)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">��������� �������� ��������� ��������� ��� ���������� ��������� ����� ��� ����� ������. �������, ��� ������������ ����� �������� ������ <em>���</em> ���������� ��������.</span>';
$txt['setting_visual_verification_type'] = '��������� ����������� ���������� ��������';
$txt['setting_visual_verification_type_desc'] = '����� ������� ����������� ������� �������� � ����� � �����';
$txt['setting_image_verification_off'] = '���������';
$txt['setting_image_verification_vsimple'] = '����� ������� &mdash; ������� ����� �� �����������';
$txt['setting_image_verification_simple'] = '������� &mdash; ������� �������, ��� ����';
$txt['setting_image_verification_medium'] = '������� &mdash; ����������� ��� � ����� �� ������� �������';
$txt['setting_image_verification_high'] = '������� &mdash; ��������� �������, �� ������������� ������ � �������';
$txt['setting_image_verification_extreme'] = '����� ������� &mdash; ��������� �������, ���, ����� � �����';
$txt['setting_image_verification_sample'] = '������';
$txt['setting_image_verification_nogd'] = '<strong>�������� ��������:</strong> ��� ��� �� ������ ������� �� ����������� ���������� GD, �� ��������� ��������� ������ �� �������.';
$txt['setup_verification_questions'] = '����������� �������';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">���� ������, ����� ������������ �������� �� ����������� ������� ��� ���������� �����, �� ������� ������� � ������ �� ��� � ������� ����. ����� ������������ BB-���� ��� �������������� ��������, ��� �� ����������� ��������. ������ �� ������������� ���� ����������� � ������������������� ����.</span>';
$txt['setup_verification_question'] = '������';
$txt['setup_verification_answer'] = '�����';
$txt['setup_verification_add_more'] = '�������� ��� ���� ������';

$txt['moderation_settings'] = '��������� ������� ��������������';
$txt['setting_warning_enable'] = '��������� ������� �������������� �������������';
$txt['setting_warning_watch'] = '������� �������������� &mdash; ������������ ��� �����������<div class="smalltext">������� �������������� ������������, ����� �������� �� ���������� ��� ����������� (0 &mdash; ���������).</div>';
$txt['setting_warning_moderate'] = '������� �������������� &mdash; ������������ ���������<div class="smalltext">������� �������������� ������������, ����� �������� ��� ��������� ������� ��������� (0 &mdash; ���������).</div>';
$txt['setting_warning_mute'] = '������� �������������� &mdash; ������������ ������<div class="smalltext">������� �������������� ������������, ����� �������� ������������ �� ����� ��������� ��������� (0 &mdash; ���������).</div>';
$txt['setting_user_limit'] = '������������ ���������� ������ �������������� � ����<div class="smalltext">������ �������� ���������� ����������� ���������� ������ ��������������, ������� ����� ��������� ������������ ��������� � ������� 24 ����� (0 &mdash; ��� �����������).</div>';
$txt['setting_warning_decrement'] = '���������� ���������� ������ �������������� ������ 24 ����<div class="smalltext">����������� ������ � ��� �������������, � ������� �� ���� ����� �������������� � ������� ����� (0 &mdash; ���������).</div>';
$txt['setting_warning_show'] = '������������, ������� ����� ������ ������ ��������������. <div class="smalltext">���� ���������, �� ������ ���������� ������ ������ ���� ������.</div>';
$txt['setting_warning_show_mods'] = '������ ����������';
$txt['setting_warning_show_user'] = '���������� � ��������������� ������������';
$txt['setting_warning_show_all'] = '��� ������������';

$txt['signature_settings'] = '��������� ��������';
$txt['signature_settings_desc'] = '����������� ������ ��������� ��� ����������� ���� ������� ������������ � SMF.';
$txt['signature_settings_warning'] = '�������� ��������, ��� �� ��������� ��� ��������� �� ����������� � ��� ������������ ��������. ������� <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">����</a> ��� ���������� �������� �� ���� ������������ ��������.';
$txt['signature_enable'] = '��������� �������';
$txt['signature_max_length'] = '������������ ���������� ��������<div class="smalltext">(0 &mdash; ��� �����������)</div>';
$txt['signature_max_lines'] = '������������ ���������� �����<div class="smalltext">(0 &mdash; ��� �����������)</div>';
$txt['signature_max_images'] = '������������ ���������� �����������<div class="smalltext">(0 &mdash; ��� �����������; ������ �� �����������)</div>';
$txt['signature_allow_smileys'] = '��������� ������ � ��������';
$txt['signature_max_smileys'] = '������������ ���������� �������<div class="smalltext">(0 &mdash; ��� �����������)</div>';
$txt['signature_max_image_width'] = '������������ ������ ����������� � ������� (��������)<div class="smalltext">(0 &mdash; ��� �����������)</div>';
$txt['signature_max_image_height'] = '������������ ������ ����������� � ������� (��������)<div class="smalltext">(0 &mdash; ��� �����������)</div>';
$txt['signature_max_font_size'] = '������������ ������ ������ � �������<div class="smalltext">(0 &mdash; ��� �����������)</div>';
$txt['signature_bbc'] = '����������� BB-����';

$txt['custom_profile_title'] = '����������� ����';
$txt['custom_profile_desc'] = '� ������ ������� ����� ��������� �������������� ���� ������� � ������ ���������� ������� ������.';
$txt['custom_profile_active'] = '��������';
$txt['custom_profile_fieldname'] = '�������� ����';
$txt['custom_profile_fieldtype'] = '��� ����';
$txt['custom_profile_make_new'] = '����� ����';
$txt['custom_profile_none'] = '�� ������ ���� ���� �� �������!';
$txt['custom_profile_icon'] = '������';

$txt['custom_profile_type_text'] = '�����';
$txt['custom_profile_type_textarea'] = '������������� �����';
$txt['custom_profile_type_select'] = '������ ������';
$txt['custom_profile_type_radio'] = '����� ��������';
$txt['custom_profile_type_check'] = '�������������';

$txt['custom_add_title'] = '�������� ���� �������';
$txt['custom_edit_title'] = '�������� ���� �������';
$txt['custom_edit_general'] = '��������� �����������';
$txt['custom_edit_input'] = '��������� �����';
$txt['custom_edit_advanced'] = '����������� ���������';
$txt['custom_edit_name'] = '��������';
$txt['custom_edit_desc'] = '��������';
$txt['custom_edit_profile'] = '������ �������';
$txt['custom_edit_profile_desc'] = '������ ������� ��� ��������� ��������.';
$txt['custom_edit_profile_none'] = '���';
$txt['custom_edit_registration'] = '���������� ��� �����������';
$txt['custom_edit_registration_disable'] = '���';
$txt['custom_edit_registration_allow'] = '��';
$txt['custom_edit_registration_require'] = '��, ������������';
$txt['custom_edit_display'] = '���������� ��� ��������� ����';
$txt['custom_edit_picktype'] = '��� ����';

$txt['custom_edit_max_length'] = '������������ �����';
$txt['custom_edit_max_length_desc'] = '(0 &mdash; ��� �����������)';
$txt['custom_edit_dimension'] = '���������';
$txt['custom_edit_dimension_row'] = '�����';
$txt['custom_edit_dimension_col'] = '��������';
$txt['custom_edit_bbc'] = '��������� BB-����';
$txt['custom_edit_options'] = '���������';
$txt['custom_edit_options_desc'] = '�������� ���� ������ ������ ��� ��������. ����� ������ �������� �� ���������.';
$txt['custom_edit_options_more'] = '�������������';
$txt['custom_edit_default'] = '�������� �� ���������';
$txt['custom_edit_active'] = '��������';
$txt['custom_edit_active_desc'] = '���� �� �������, ������ ���� ������ ������������ �� �����.';
$txt['custom_edit_privacy'] = '����� �� ��������� � ��������';
$txt['custom_edit_privacy_desc'] = '��� ����� ������������� � �������� ������ ����.';
$txt['custom_edit_privacy_all'] = '������������ ����� �������������, �������� ��������';
$txt['custom_edit_privacy_see'] = '������������ ����� �������������, ������ ������������� ����� ��������';
$txt['custom_edit_privacy_owner'] = '������������ �� ����� ��� ����; �������� � �������������� ����� ��������';
$txt['custom_edit_privacy_none'] = '������ ���� ����� ������ ��������������';
$txt['custom_edit_can_search'] = '�������� � ������';
$txt['custom_edit_can_search_desc'] = '�� ������� ���� ����� ������ � ������ �������������.';
$txt['custom_edit_mask'] = '�����';
$txt['custom_edit_mask_desc'] = '��������� ����� ����� ������ ����� ��� �������� �������� ������.';
$txt['custom_edit_mask_email'] = '�������� e-mail';
$txt['custom_edit_mask_number'] = '��������';
$txt['custom_edit_mask_nohtml'] = '��� HTML';
$txt['custom_edit_mask_regex'] = '���������� ��������� � ����� (��� ���������)';
$txt['custom_edit_enclose'] = '���������� � �������������� ������� (�� �������)';
$txt['custom_edit_enclose_desc'] = '<strong>������������</strong> ������������� ������������ ����� ��� �������� �������� ������.';

$txt['custom_edit_placement'] = '�������� ����������';
$txt['custom_edit_placement_standard'] = '����������� (� ��������� ����)';
$txt['custom_edit_placement_withicons'] = '����� � ��������';
$txt['custom_edit_placement_abovesignature'] = '��� ��������';
$txt['custom_profile_placement'] = '����������';
$txt['custom_profile_placement_standard'] = '�����������';
$txt['custom_profile_placement_withicons'] = '����� � ��������';
$txt['custom_profile_placement_abovesignature'] = '��� ��������';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '�������, ��� ������ ������� ��� ����? ��� ������� ������ ������������� ����� ��������!';

$txt['standard_profile_title'] = '����������� ����';
$txt['standard_profile_field'] = '����';

$txt['core_settings_welcome_msg'] = '����� ���������� �� ��� ����� �����';
$txt['core_settings_welcome_msg_desc'] = '��� ������ ���������� �������, ����� ����������� ������ ���������� ��������. ��������� ������ ��, ��� ������������� ����������!';
$txt['core_settings_item_cd'] = '���������';
$txt['core_settings_item_cd_desc'] = '����������� ������������� � ��������� �������, ��� �������� � ������ ������.';
$txt['core_settings_item_cp'] = '����������� ���� �������';
$txt['core_settings_item_cp_desc'] = '����������� �������� ����������� ���� �������, ��������� �������������� ���� ��� ����������� � ��������� ����� ���� ������� ��� ������.';
$txt['core_settings_item_k'] = '�����';
$txt['core_settings_item_k_desc'] = '����������� ���������� ������������ (��� ������� �������) �������������. ���� ���������, ������������ c����� �������� ����� ���� �����.';
$txt['core_settings_item_ml'] = '���� ���������';
$txt['core_settings_item_ml_desc'] = '����������� ��������������� ��� �������� ����������� �� ������.';
$txt['core_settings_item_pm'] = '������������ ���������';
$txt['core_settings_item_pm_desc'] = '��������� � ���� �� ���������� ������������� ��� ����� � ��������� �������� ����� ������������� ������ ����� �������� � ���������. ����� ��������� ������ ����������� ��������� ��������������� ����� �������.';
$txt['core_settings_item_ps'] = '������� ��������';
$txt['core_settings_item_ps_desc'] = '����������� ������ �������� � �������, � ����� �������� ����� ������� � ������� �������� ������������.';
$txt['core_settings_item_rg'] = '��������� �������';
$txt['core_settings_item_rg_desc'] = '����������� ��������� ������ (������� ����� �����������) � ������������� ������� �������� ������.';
$txt['core_settings_item_sp'] = '��������� �������';
$txt['core_settings_item_sp_desc'] = '����������� ����������� ���������� ��������� ������ �� ������.';
$txt['core_settings_item_w'] = '������� ��������������';
$txt['core_settings_item_w_desc'] = '����������� �������� ������������� ��������������, � ���������� �������������� ������������ ��������� ���� �������������, � ����������� �� ���������� ������ �������� �� ��������������. �������� ��������: ������� &laquo;������������ ���������&raquo; ������ ���� ��������.';
$txt['core_settings_switch_on'] = '������� ��� ���������';
$txt['core_settings_switch_off'] = '������� ��� ����������';
$txt['core_settings_enabled'] = '��������';
$txt['core_settings_disabled'] = '���������';

$txt['languages_lang_name'] = '�������� �����';
$txt['languages_locale'] = '������';
$txt['languages_default'] = '������';
$txt['languages_character_set'] = '���������';
$txt['languages_users'] = '�������������';
$txt['language_settings_writable'] = '��������������: Settings.php �� �������� ��� ������, ��������� ����� �� ��������� �� ����� ���������.';
$txt['edit_languages'] = '�������� �����';
$txt['lang_file_not_writable'] = '<strong>��������������:</strong> ������� �������� ���� (%1$s) �� �������� ��� ������. �� ������ ������� ��� ������������ �� �������� ���������.';
$txt['lang_entries_not_writable'] = '<strong>��������������:</strong> �������� ���� ������� �� ��������� �������� (%1$s) �� �������� ��� ������. �� ������ ������� ��� ������������ �� �������� ���������.';
$txt['languages_ltr'] = '������ ������';

$txt['add_language'] = '�������� ����';
$txt['add_language_smf'] = '��������� � Simple Machines';
$txt['add_language_smf_browse'] = '�������� �������� ����� ��� ������ ��� �������� ������ ��� ����������� ���� ���������';
$txt['add_language_smf_install'] = '����������';
$txt['add_language_smf_found'] = '��������� ����� ���� �������. ������� �� ������ "����������" ��� ��������� ������������ �����, ����� ���� �������������� ���������� ������� ��� ���������.';
$txt['add_language_error_no_response'] = '���� Simple Machines �� ��������. ����������, ���������� �����.';
$txt['add_language_error_no_files'] = '������ �� �������.';
$txt['add_language_smf_desc'] = '��������';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = '������';

$txt['edit_language_entries_primary'] = '���� ��������� ��������� ��� �������� �����. ����� ��������� ���������� ������ &mdash; ��� Linux-��������, ������, ru_RU.CP1251 ��� ru_RU.UTF8';
$txt['edit_language_entries'] = '�������� �������� ����������';
$txt['edit_language_entries_file'] = '�������� ���������� ��� ���������';
$txt['languages_dictionary'] = '�������';
$txt['languages_spelling'] = '�������� ����������';
$txt['languages_for_pspell'] = '��� ��� <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> &mdash; ���� �����������';
$txt['languages_rtl'] = '�������� ����� &quot;������ ������&quot;';

$txt['lang_file_desc_index'] = '����� ������';
$txt['lang_file_desc_EmailTemplates'] = '������� ���������';

$txt['languages_download'] = '������� �������� �����';
$txt['languages_download_note'] = '��� �������� �������� ������ ���� ������, ������� ���������� � �������� ������, � ��������� �������� ���������� � ������ �� ���. ��� ���������� ����� ����� �����������.';
$txt['languages_download_info'] = '<strong>�������� ��������:</strong> ���� ����� ����� ������ &laquo;��������������&raquo;, ��� ��������, ��� SMF �� ��������� �� � �����, ���� ��� ��� �� ����� ����������� ��������������� ����� �� ������.<br />
   ���������� � ������ ������ ���������� ��������� ������ SMF, ��� ������� ���� ������� ����������. ���� ��������� ������� &mdash; ��� ��������, ��� ������� ������ �����, ��� ������������� �� ����� ������. ���� ��������� �������, �� ������������� ������ �����.<br />
   ���� ���� ��� ���������� �� ������ ������, � ������� &quot;��� ����������&quot; ����� ���� �� ��������. &quot;����������&quot; &mdash; ���� ��� ���������� � ���������� ���� � �������������� ��� �������������. &quot;������&quot; &mdash; ���������� �������� � ���������� �������� ����������� ��������.';

$txt['languages_download_main_files'] = '������� �����';
$txt['languages_download_theme_files'] = '����� ���� ����������';
$txt['languages_download_filename'] = '��� �����';
$txt['languages_download_dest'] = '����';
$txt['languages_download_writable'] = '������������';
$txt['languages_download_version'] = '������';
$txt['languages_download_older'] = '������������� ������ ������ �����, ���������� �� �������������.';
$txt['languages_download_exists'] = '��� ����������';
$txt['languages_download_exists_same'] = '����������';
$txt['languages_download_exists_different'] = '������';
$txt['languages_download_copy'] = '����������';
$txt['languages_download_not_chmod'] = '�� �� ������ ���������� ������� ���������, ���� ���������� ����� �� ������ �������������.';
$txt['languages_download_illegal_paths'] = '����� �������� �������� ���� ���������. ����������, ��������� � Simple Machines';
$txt['languages_download_complete'] = '��������� ���������';
$txt['languages_download_complete_desc'] = '�������� ����� ������� ����������. ����������, ������� <a href="%1$s">����</a> ��� �������� �� �������� ������';
$txt['languages_delete_confirm'] = '�� ������������� ������ ������� ���� �������� �����?';

?>