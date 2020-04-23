<?php
// Version: 2.0.10; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = '������ ��� ($)';
$txt['eur'] = '���� (&euro;)';
$txt['gbp'] = '���������� ���� ���������� (&pound;)';
$txt['other'] = '������';

$txt['paid_username'] = '��� ������������';

$txt['paid_subscriptions_desc'] = '� ������ ������� ����� ��������, ������� ��� �������� ������ ������� �������� �� ������ ������.';
$txt['paid_subs_settings'] = '���������';
$txt['paid_subs_settings_desc'] = '����� ����� �������� ������ ������ ��� ����� �������������.';
$txt['paid_subs_view'] = '�������� ��������';
$txt['paid_subs_view_desc'] = '����� ����� ����������� ��� ��������� ��������.';

// Setting type strings.
$txt['paid_enabled'] = '��������� ������� ��������';
$txt['paid_enabled_desc'] = '��� ������������� ������� �������� �� ���� ������ ������ ������� ������ ���� ��������.';
$txt['paid_email'] = '�������� �����������';
$txt['paid_email_desc'] = '������������� �������������� ��� ��������� ��������.';
$txt['paid_email_to'] = 'E-mail ��� ���������';
$txt['paid_email_to_desc'] = '������ �������, ����������� �������� &mdash; �� ��� ������ ����� ����������� �����������.';
$txt['paidsubs_test'] = '��������� �������� �����';
$txt['paidsubs_test_desc'] = '������� ���� �������� � &quot;��������&quot; �����, � ������� ��� ������ ����� ������������� � ��������� PayPal. �� ������� ��������, ���� �� ������, ��� �������!';
$txt['paidsubs_test_confirm'] = '�� ������������� ������ �������� ����� ������������?';
$txt['paid_email_no'] = '�� ���������� ������� �����������';
$txt['paid_email_error'] = '�������� �� ������� ��������';
$txt['paid_email_all'] = '���������� ��� ���� ���������� ��������';
$txt['paid_currency'] = '����� ������ (��� ������ ������� ������)';
$txt['paid_currency_code'] = '��� ������';
$txt['paid_currency_code_desc'] = '������������ ��� ��� ������ (��� ������ ������� ��� RUB)';
$txt['paid_currency_symbol'] = '���������� �����������';
$txt['paid_currency_symbol_desc'] = '����������� ������ ���� \'%1.2f\', ����� ������� ������������ ����� ����� ��������� ������. ��������, $%1.2f, %1.2fDM&nbsp;�&nbsp;�.&nbsp;�. (��� ������ ������� %1.2f ���.)';
$txt['paypal_email'] = '����������� ����� PayPal';
$txt['paypal_email_desc'] = '�������� ������, ���� �� ������ ������������ PayPal.';
$txt['worldpay_id'] = 'ID ��������� WorldPay';
$txt['worldpay_id_desc'] = '������������ ID ������������ �������� WorldPay. �������� ������, ���� �� ����������� WorldPay';
$txt['worldpay_password'] = '�������� ������ WorldPay';
$txt['worldpay_password_desc'] = '���������, ��� ���� ������ �������� � �� ��������� � ������� � ������� ������ WorldPay ��� �������������� ������!';
$txt['authorize_id'] = 'ID ��������� Authorize.net';
$txt['authorize_id_desc'] = '������������ ID ������������ �������� Authorize.net. �������� ������, ���� �� ����������� Authorize.net';
$txt['authorize_transid'] = 'ID ���������� Authorize.NetD';
$txt['2co_id'] = 'ID ��������� 2co.com';
$txt['2co_id_desc'] = '������������ ID ������������ �������� 2co.com. �������� ������, ���� �� ����������� 2co.com';
$txt['2co_password'] = '��������� ����� 2co.com';
$txt['2co_password_desc'] = '���� ��������� ����� ��� ������� 2checkout.';
$txt['nochex_email'] = '����������� ����� Nochex';
$txt['nochex_email_desc'] = 'E-mail ������������ ����� � Nochex. �������� ������, ���� �� ����������� Nochex';
$txt['paid_settings_save'] = '���������';

$txt['paid_note'] = '<strong class="alert">����������:</strong>

SMF ���������� <strong>PayPal</strong> ��� ��������� ����� �� ���������.
<br><br>
	&bull; ��� ������������� �������� IPN � �������� PayPal; ���� �� �������� ��� &mdash; ������� �������� ������ ����� �������� ����������� ��� ���� �������� ���������� �� ��� ������� � ��� ����� �������� ��������� �� ������� ��� ��������, ������� �� ������� � ���������� ������.
<br>	
	&bull; �� ������ ����� Business ��� Premier ������� ��� ������������� ���������� ��������.
<br>
	&bull; �� ������ ������������ ���� �������� e-mail ����� PayPal ��� ������������� ��������.
<br><br>

���� �� ����������� ������ ��������� �����, ���������� ���������� URL-����� ����������� ��� ������� �� �������� ������. ��� ���� �������� ������ ���� URL-����� ������ ���� ����� ���:
<br>
	<strong>' . $boardurl . '/subscriptions.php</strong>
<br>
	��� ������ ��������� ������ (���� ��� �����������) ���� ����� ����� ������ � ������ �������� ����� &mdash; ������ ��� ������ "Return URL", "Callback URL" ��� "����� �����������".';

$txt['paypal_additional_emails'] = '�������� e-mail ����� PayPal';
$txt['paypal_additional_emails_desc'] = '�������, ���� ���� ������ (��� ������-��������)';

// View subscription strings.
$txt['paid_name'] = '��������';
$txt['paid_status'] = '������';
$txt['paid_cost'] = '���������';
$txt['paid_duration'] = '�����������������';
$txt['paid_active'] = '��������';
$txt['paid_pending'] = '������� ������';
$txt['paid_finished'] = '��������';
$txt['paid_total'] = '�����';
$txt['paid_is_active'] = '������������';
$txt['paid_none_yet'] = '���� ��� �� ����� ��������.';
$txt['paid_payments_pending'] = '������� � ��������';
$txt['paid_order'] = '�����';

$txt['yes'] = '��';
$txt['no'] = '���';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = '�������� ����� ��������';
$txt['paid_edit_subscription'] = '�������� ��������';
$txt['paid_delete_subscription'] = '������� ��������';

$txt['paid_mod_name'] = '�������� ��������';
$txt['paid_mod_desc'] = '��������';
$txt['paid_mod_reminder'] = '��������� �� E-mail';
$txt['paid_mod_reminder_desc'] = '�� ������� ���� �������� ����������� � ��������������� ��������. (� ����, 0 &mdash; ���������)';
$txt['paid_mod_email'] = 'E-mail ��� ���������� ��������';
$txt['paid_mod_email_desc'] = '�����������: {NAME} &mdash; ��� ������������; {FORUM} &mdash; �������� ������. ���� ��������� ������ ���� ������� � ������ ������. �������� ������ ��� ���������� �����������.';
$txt['paid_mod_cost_usd'] = '��������� (� �������� ���)';
$txt['paid_mod_cost_eur'] = '��������� (� ����)';
$txt['paid_mod_cost_gbp'] = '��������� (� ���������� ������)';
$txt['paid_mod_cost_blank'] = '�������� ���� ������, ����� �� ���������� ��� ������.';
$txt['paid_mod_span'] = '����������������� ��������';
$txt['paid_mod_span_days'] = '����';
$txt['paid_mod_span_weeks'] = '������';
$txt['paid_mod_span_months'] = '�������';
$txt['paid_mod_span_years'] = '���';
$txt['paid_mod_active'] = '������������';
$txt['paid_mod_active_desc'] = '�������� ������ ���� ������������ ��� ����� ���������������� �������������.';
$txt['paid_mod_prim_group'] = '�������� ������ ��� �����������';
$txt['paid_mod_prim_group_desc'] = '������, � ������� ������������ ������� ����� ��������.';
$txt['paid_mod_add_groups'] = '�������������� ������';
$txt['paid_mod_add_groups_desc'] = '�������������� ������ ��� ���������� ������������� ����� ��������.';
$txt['paid_mod_no_group'] = '�� ��������';
$txt['paid_mod_edit_note'] = '�������� ��������: ��������� ��� ������ � ������������� ������������ �� ����� ���� ��������!';
$txt['paid_mod_delete_warning'] = '<strong>��������������</strong><br /><br />��� �������� ���� �������� ��� ����������� �� ��� ������������ �������� ��������������� �� ��������� �����. ���� ������� � ���, ��� �������, �� ������ ��������� ��������, �� ������ ��.<br />';
$txt['paid_mod_repeatable'] = '��������� ������������� ������������� �������� ��� ��������';
$txt['paid_mod_allow_partial'] = '��������� ��������� ��������';
$txt['paid_mod_allow_partial_desc'] = '���� ��� ����� �������� � ������������ ������, ��� ����� &mdash; ��� ����� ������������� �������� �� ���������� ������ �������.';
$txt['paid_mod_fixed_price'] = '�������� � ������������� ����� � ������������������';
$txt['paid_mod_flexible_price'] = '��������� �������� ������� �� � �����������������';
$txt['paid_mod_price_breakdown'] = '������ ������������� ���';
$txt['paid_mod_price_breakdown_desc'] = '���������� ��������� �������� � ����������� �� ������� � �����������������. ��������, ��� ����� ������ 12 �������� � �����, �� ������ 100 �������� � ���. ���� �� ������ ��������� ���� �� ������������ ������ �������, ������ �������� ���� ������.';
$txt['flexible'] = 'Flexible';

$txt['paid_per_day'] = '����� �� ����';
$txt['paid_per_week'] = '����� �� ������';
$txt['paid_per_month'] = '����� �� �����';
$txt['paid_per_year'] = '����� �� ���';
$txt['day'] = '����';
$txt['week'] = '������';
$txt['month'] = '�����';
$txt['year'] = '���';

// View subscribed users.
$txt['viewing_users_subscribed'] = '�������� �������������';
$txt['view_users_subscribed'] = '�������� �������������, ����������� ��: &quot;%1$s&quot;';
$txt['no_subscribers'] = '�� ��� �������� ���� ����� �� ��������.';
$txt['add_subscriber'] = '�������� ����������';
$txt['edit_subscriber'] = '�������� ����������';
$txt['delete_selected'] = '������� ���������';
$txt['complete_selected'] = '��������� ���������';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = '�� ������������� ������ ������� ��� ������ � ��������� ���������?';
$txt['complete_are_sure'] = '�� ������������� ������ ��������� ��������� ��������?';

$txt['start_date'] = '���� ������';
$txt['end_date'] = '���� ���������';
$txt['start_date_and_time'] = '���� � ����� ������';
$txt['end_date_and_time'] = '���� � ����� ���������';
$txt['edit'] = '��������';
$txt['one_username'] = '����������, ������� ��� ������ ������ ������������.';
$txt['hour'] = '���';
$txt['minute'] = '������';
$txt['error_member_not_found'] = '��������� ������������ �� ������';
$txt['member_already_subscribed'] = '���� ������������ ��� �������� �� ������ ��������. ������������ ��� ������������ ��������.';
$txt['search_sub'] = '����� �������������';

// Make payment.
$txt['paid_confirm_payment'] = '����������� ������';
$txt['paid_confirm_desc'] = '��� ����������� ������, ����������, ��������� ������ ���� � ������� ������ &quot;��������&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = '��� ������ ����� <a href="http://www.paypal.com">PayPal</a> ������� �� ������ ����. �� ������ �������������� �� ���� PayPal ��� ������ ��������� ������.';
$txt['paid_paypal_order'] = '�������� ����� PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = '��� ������ ����� <a href="http://www.worldpay.com">WorldPay</a> ������� �� ������ ����. �� ������ �������������� �� ���� WorldPay ��� ������ ��������� ������.';
$txt['paid_worldpay_order'] = '�������� ����� WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = '��� ������ ����� <a href="http://www.nochex.com">Nochex</a> ������� �� ������ ����. �� ������ �������������� �� ���� Nochex ��� ������ ��������� ������.';
$txt['paid_nochex_order'] = '�������� ����� Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = '��� ������ ����� <a href="http://www.authorize.net">Authorize.Net</a> ������� �� ������ ����. �� ������ �������������� �� ���� Authorize.Net ��� ������ ��������� ������.';
$txt['paid_authorize_order'] = '�������� ����� Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = '��� ������ ����� <a href="http://www.2co.com">2co.com</a> ������� �� ������ ����. �� ������ �������������� �� ���� 2co.com ��� ������ ��������� ������.';
$txt['paid_2co_order'] = '�������� ����� 2co.com';
$txt['paid_done'] = '������ ��������';
$txt['paid_done_desc'] = '���������� �� ������. ����� �������� �������� �������� ����� ������������.';
$txt['paid_sub_return'] = '��������� �����';
$txt['paid_current_desc'] = '���� ����������� ��� ������� � ���������� ��������. ��� ��������� �������� ������ �������� � �� ������.';
$txt['paid_admin_add'] = '�������� ��� ��������';

$txt['paid_not_set_currency'] = '�� ���� �� ������ ������. ����������, �������� ��� � ����������, ����� ����������.';
$txt['paid_no_cost_value'] = '���������� ������� ��������� � ����������������� ��������.';
$txt['paid_all_freq_blank'] = '�� ������ ������ ��������� �� ������� ���� ������ �� ������� �������� ��������.';

// Some error strings.
$txt['paid_no_data'] = '� ������� ���� ���������� �������� ������.';

$txt['paypal_could_not_connect'] = '�� ������� ����������� � �������� PayPal';
$txt['paid_sub_not_active'] = '�� ��� �������� �� ����������� ����� ������������!';
$txt['paid_disabled'] = '� ������ ������ ��� ������� �������� ���������!';
$txt['paid_unknown_transaction_type'] = '����������� ��� ����������.';
$txt['paid_empty_member'] = '���������� �������� �� ����� ������������ ID ������������';
$txt['paid_could_not_find_member'] = '���������� �������� �� ����� ����� ������������ � ID: %1$d';
$txt['paid_count_not_find_subscription'] = '���������� �������� �� ����� ����� �������� ��� ������������ � ID: %1$s, ID ��������: %2$s';
$txt['paid_count_not_find_subscription_log'] = '���������� �������� �� ����� ����� ������ � ������� �������� ��� ������������ � ID: %1$s, ID ��������: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = '�� ������� ����� ������ � ������������ ������ �� ������������ � ID: %1$s, ID ��������: %2$s';
$txt['paid_admin_not_setup_gateway'] = '��������, �� ������������� ��� �� �������� ��������� ������� ��������. ����������, ���������� �����.';
$txt['paid_make_recurring'] = '������� ���� ������ �������������';

$txt['subscriptions'] = '��������';
$txt['subscription'] = '��������';
$txt['paid_subs_desc'] = '���� ����������� ��� ��������, ��������� �� ���� ������.';
$txt['paid_subs_none'] = '� ��������� ������ ���������� �������� ���!';

$txt['paid_current'] = '������������ ��������';
$txt['pending_payments'] = '������������� �������';
$txt['pending_payments_desc'] = '������ ������������ �������� ������ ��������� ������� �� ��������, �� ������� �� ���� �������� �������������. ���� �������, ��� ������ ��������, ������� ������ &quot;�������&quot; � ��������� ��� ��������. ���� ����� ������ ������ &quot;�������&quot; ��� ����������� ���� ������ �� ������.';
$txt['pending_payments_value'] = '��������';
$txt['pending_payments_accept'] = '�������';
$txt['pending_payments_remove'] = '�������';

?>