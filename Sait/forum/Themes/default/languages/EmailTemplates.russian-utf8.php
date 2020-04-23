<?php
// Version: 2.1 Beta 3; EmailTemplates

global $txtBirthdayEmails;

// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it. You may
//   translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Следующие темы ожидают одобрения:';
$txt['scheduled_approval_email_msg'] = 'Следующие сообщения ожидают сообщения:';
$txt['scheduled_approval_email_attach'] = 'Следующие вложения ожидают одобрения:';
$txt['scheduled_approval_email_event'] = 'Следующие события ожидают одобрения:';

$txt['resend_activate_message_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['resend_activate_message_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин {USERNAME}. Если вы забыли свой пароль, можете изменить его по ссылке {FORGOTPASSWORDLINK}. 

Перед тем как войти на форум, вы должны активировать свою учетную запись, пройдя по ссылке: 

{ACTIVATIONLINK} 

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}". 

{REGARDS}';

$txt['resend_pending_message_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['resend_pending_message_body'] = 'Привет, {REALNAME}. Ваш запрос на регистрацию на {FORUMNAME} был получен.

Ваш логин {USERNAME}.

Перед тем, как вы сможете войти на форум, ваш запрос должен быть одобрен. Вы получите другое письмо с подтверждением с этого адреса.

{REGARDS}';

$txt['mc_group_approve_subject'] = 'Одобрение запроса на вступление в группу';
$txt['mc_group_approve_body'] = '{USERNAME},

поздравляем, ваш запрос на вступление в группу "{GROUPNAME}" на {FORUMNAME} был одобрен и ваша учетная запись обновлена и теперь содержит новую группу.

{REGARDS}';

$txt['mc_group_reject_subject'] = 'Отклонение запроса на вступление в группу';
$txt['mc_group_reject_body'] = '{USERNAME},

сожалеем, но ваш запрос на вступление в группу "{GROUPNAME}" на {FORUMNAME} был отклонен.

{REGARDS} ';

$txt['mc_group_reject_reason_subject'] = 'Отклонение запроса на вступление в группу';
$txt['mc_group_reject_reason_body'] = '{USERNAME}, 

сожалеем, но ваш запрос на вступление в группу "{GROUPNAME}" на {FORUMNAME} был отклонен.

Причина этого: {REASON}

{REGARDS}';

$txt['admin_approve_accept_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_approve_accept_body'] = 'Welcome, {NAME}

Your account has been activated manually by the admin and you can now login and post. Your username is: {USERNAME}. If you forget your password, you can change it at {FORGOTPASSWORDLINK}.

{REGARDS}';

$txt['admin_approve_activation_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_approve_activation_body'] = 'Welcome, {USERNAME}!

Your account on {FORUMNAME} has been approved by the forum administrator. Before you can login, you must first activate your account by selecting the following link:

{ACTIVATIONLINK}

Should you have any problems with the activation, please visit {ACTIVATIONLINKWITHOUTCODE} and enter the code "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_approve_reject_subject'] = 'Регистрация отклонена';
$txt['admin_approve_reject_body'] = '{USERNAME},

к сожалению, ваша заявка на регистрацию на {FORUMNAME} была отклонена.

{REGARDS}';

$txt['admin_approve_delete_subject'] = 'Удален аккаунт';
$txt['admin_approve_delete_body'] = '{USERNAME},

ваша учетная запись на {FORUMNAME} была удалена. Возможно, вы долго не активировали свою учетную запись, в этом случае зарегистрируйтесь заново.

{REGARDS} ';

$txt['admin_approve_remind_subject'] = 'Напоминание о регистрации';
$txt['admin_approve_remind_body'] = '{USERNAME},
You still have not activated your account at {FORUMNAME}.

Please use the link below to activate your account:
{ACTIVATIONLINK}

Should you have any problems with the activation, please visit {ACTIVATIONLINKWITHOUTCODE} and enter the code "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_register_activate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_register_activate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин {USERNAME} и пароль {PASSWORD}.

Перед тем как войти на форум, вы должны активировать свою учетную запись, пройдя по ссылке:

{ACTIVATIONLINK}

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS} ';

$txt['admin_register_immediate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_register_immediate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин {USERNAME} и пароль {PASSWORD}. Адрес форума: {SCRIPTURL}.

{REGARDS} ';

$txt['new_announcement_subject'] = 'Новое объявление: {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE}

Для того, чтобы отписаться от от таких уведомлений, авторизуйтесь на форуме и снимите пометку "Получать новости, объявления и важные уведомления форума по e-mail" в своем профиле.

Вы можете увидеть полный анонс по ссылке:
{TOPICLINK}

{REGARDS}';

$txt['notify_boards_once_body_subject'] = 'Новая тема: {TOPICSUBJECT} ';
$txt['notify_boards_once_body_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему 
{TOPICLINK}

Тем может быть больше, но вы не будете получать других уведомлений, пока не посетите раздел.

Текст темы:
{MESSAGE}

Отписаться от этого раздела:
{UNSUBSCRIBELINK}

{REGARDS}';

$txt['notify_boards_once_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему
{TOPICLINK}

Тем может быть больше, но вы не будете получать других уведомлений, пока не посетите раздел. 

Отписаться от этого раздела:
{UNSUBSCRIBELINK} 

{REGARDS}';

$txt['notify_boards_body_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему
{TOPICLINK}

Текст темы:
{MESSAGE}

Отписаться от этого раздела:
{UNSUBSCRIBELINK}

{REGARDS}';

$txt['notify_boards_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_body'] = 'Появилась новая тема \'{TOPICSUBJECT}\' в разделе, на который вы подписаны.

Посмотреть тему
{TOPICLINK}

Отписаться от этого раздела:
{UNSUBSCRIBELINK}

{REGARDS}';

$txt['alert_unapproved_reply_subject'] = 'Новый ответ: {SUBJECT}';
$txt['alert_unapproved_reply_body'] = 'Появился ответ от {POSTERNAME} в теме {SUBJECT}.

Прочитать ответ по ссылке
{LINK} 

{REGARDS}';

$txt['alert_unapproved_post_subject'] = 'Новое неодобренное сообщение: {SUBJECT}';
$txt['alert_unapproved_post_body'] = 'Появилось новое сообщение \'{SUBJECT}\' требующее одобрения.

Вы можете одобрить или отклонить сообщение по ссылке:

{LINK}

{REGARDS}';

$txt['alert_unapproved_topic_subject'] = 'Новая неодобренная тема: {SUBJECT}';
$txt['alert_unapproved_topic_body'] = 'Требует одобрения новая тема \'{SUBJECT}\'

Вы можете одобрить или отклонить тему по ссылке:

{LINK}

{REGARDS}';

$txt['request_membership_subject'] = 'Новый запрос на вступление в группу';
$txt['request_membership_body'] = '{RECPNAME},

{APPYNAME} подал запрос на вступление в группу "{GROUPNAME}". Пользователь указал следующую причину:

{REASON}

Вы можете одобрить или отклонить запрос по ссылке:

{MODLINK}

{REGARDS}';

$txt['paid_subscription_reminder_subject'] = 'Платная подписка на {FORUMNAME} скоро истечет';
$txt['paid_subscription_reminder_body'] = '{REALNAME},

срок платной подписки на {FORUMNAME} почти вышел. Если у вас включено автопродление, ничего делать не нужно, в противном случае вам следует продлить подписку. Детали платной подписки ниже:

Подписка: {SUBSCRIPTION}
Истекает: {END_DATE}

Для изменения своих подписок, перейдите в свой профиль:
{PROFILE_LINK}

{REGARDS}';

$txt['activate_reactivate_subject'] = 'С возвращением на {FORUMNAME}';
$txt['activate_reactivate_body'] = 'Для перепроверки e-mail адреса ваша учетная запись была деактивирована. Перейдите по ссылке, чтобы активировать ее заново:
{ACTIVATIONLINK}

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

$txt['forgot_password_subject'] = 'Новый пароль для {FORUMNAME}';
$txt['forgot_password_body'] = '{REALNAME},
вы получили это сообщение потому, что для вашей учетной записи была использована опция восстановления пароля. Чтобы установить новый пароль, перейдите по ссылке:
{REMINDLINK}

IP: {IP}
Username: {MEMBERNAME} 

{REGARDS}';

$txt['scheduled_approval_subject'] = 'Список сообщений ожидающих одобрения на {FORUMNAME}';
$txt['scheduled_approval_body'] = '{REALNAME},

Это письмо содержит список элементов ожидающих одобрения на {FORUMNAME}.

{BODY}

Авторизуйтесь на форуме для просмотра этих элементов.
{SCRIPTURL}

{REGARDS}';

$txt['send_email_subject'] = '{EMAILSUBJECT} ';
$txt['send_email_body'] = '{EMAILBODY}';

$txt['report_to_moderator_subject'] = 'Жалоба на сообщение: {TOPICSUBJECT} от {POSTERNAME} ';
$txt['report_to_moderator_body'] = 'В разделе, который вы модерируете, на сообщение "{TOPICSUBJECT}" от {POSTERNAME} поступила жалоба от {REPORTERNAME} on a board you moderate:

Тема: {TOPICLINK}
Центр модерации: {REPORTLINK}

Комментарий к жалобе:
{COMMENT}

{REGARDS}';

$txt['reply_to_moderator_subject'] = 'Перейти к сообщению: {TOPICSUBJECT} на которое пришла жалоба от {POSTERNAME} ';
$txt['reply_to_moderator_body'] = 'Previously, "{TOPICSUBJECT}" was reported to moderators.

Since then, {COMMENTERNAME} has added a comment to the report. More information can be found in the forum.

The topic: {TOPICLINK}
Moderation center: {REPORTLINK}

{REGARDS}';

$txt['report_member_profile_subject'] = 'Жалоба на профиль: {MEMBERNAME} ';
$txt['report_member_profile_body'] = 'На профиль "{MEMBERNAME}" поступила жалоба от {REPORTERNAME}.

Профиль: {PROFILELINK}
Центр модерации: {REPORTLINK}

Комментарий к жалобе:
{COMMENT}

{REGARDS}';

$txt['reply_to_member_report_subject'] = 'Перейти к профилю: {MEMBERNAME} на который пришла жалоба';
$txt['reply_to_member_report_body'] = 'Previously, the profile of {MEMBERNAME} was reported.

Since then, {COMMENTERNAME} has added a comment to the report. More information can be found in the forum.

The profile: {PROFILELINK}
Moderation center: {REPORTLINK}

{REGARDS}';

$txt['change_password_subject'] = 'Новый пароль';
$txt['change_password_body'] = '{USERNAME}

ваш логин на {FORUMNAME} был изменен и ваш пароль сброшен.

Ваш новый логин "{USERNAME}" и пароль "{PASSWORD}".

После авторизации вы можете изменить их в своем профиле или перейдя по ссылке:
{SCRIPTURL}?action=profile

{REGARDS}';

$txt['register_activate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_activate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин {USERNAME}. Если вы забыли свой пароль, можете изменить его по ссылке {FORGOTPASSWORDLINK}.

Перед тем как войти на форум, вы должны активировать свою учетную запись, пройдя по ссылке: 

{ACTIVATIONLINK}

Если возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}';

$txt['register_coppa_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_coppa_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин {USERNAME}. Если вы забыли свой пароль, можете изменить его по ссылке {FORGOTPASSWORDLINK}.

Перед тем как вы сможете войти на форум, Администратор должен получить согласие вашего родителя/опекуна. Подробности можно узнать по ссылке

{COPPALINK}.

{REGARDS}';

$txt['register_immediate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_immediate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин {USERNAME}. Если вы забыли свой пароль, можете изменить его по ссылке {FORGOTPASSWORDLINK}.

{REGARDS}';

$txt['register_pending_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_pending_body'] = 'Hello {REALNAME}, your registration request at {FORUMNAME} has been received.

The username you registered with was {USERNAME}. If you forget your password, you can change it at {FORGOTPASSWORDLINK}.

Before you can login and start using the forum, your request will be reviewed and approved. When this happens, you will receive another email from this address.

{REGARDS}';

$txt['notification_reply_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_body'] = 'Появился ответ от {POSTERNAME} в теме на которую вы подписаны.

Прочитать ответ: {TOPICLINK}

Отписаться от этой темы: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_reply_body_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_body_body'] = 'Появился ответ от {POSTERNAME} в теме на которую вы подписаны.

Прочитать ответ: {TOPICLINK}

Отписаться от этой темы: {UNSUBSCRIBELINK}

Текст ответа:
{MESSAGE}

{REGARDS}';

$txt['notification_reply_once_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_once_body'] = 'Появился ответ от {POSTERNAME} в теме на которую вы подписаны.

Прочитать ответ: {TOPICLINK}

Отписаться от этой темы: {UNSUBSCRIBELINK} 

Ответов может быть больше, но вы получаете уведомления только о первом непрочитанном

{REGARDS}';

$txt['notification_reply_body_once_subject'] = 'Новый ответ в теме: {TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = 'Появился ответ от {POSTERNAME} в теме на которую вы подписаны.

Прочитать ответ: {TOPICLINK}

Отписаться от этой темы: {UNSUBSCRIBELINK}

Текст ответа:
{MESSAGE}

Ответов может быть больше, но вы получаете уведомления только о первом непрочитанном 

{REGARDS}';

$txt['notification_sticky_subject'] = 'Тема закреплена: {TOPICSUBJECT}';
$txt['notification_sticky_body'] = 'Тема на которую вы подписаны была закреплена.

Посмотреть тему: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_lock_subject'] = 'Тема заблокирована: {TOPICSUBJECT}';
$txt['notification_lock_body'] = 'Тема на которую вы подписаны была заблокирована.

Посмотреть тему: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_unlock_subject'] = 'Тема разблокирована: {TOPICSUBJECT} ';
$txt['notification_unlock_body'] = 'Тема на которую вы подписаны была разблокирована.

Посмотреть тему: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_remove_subject'] = 'Удалена тема: {TOPICSUBJECT}';
$txt['notification_remove_body'] = 'Удалена тема на которую вы подписаны:

{REGARDS}';

$txt['notification_move_subject'] = 'Перенесена тема: {TOPICSUBJECT}';
$txt['notification_move_body'] = 'Тема на которую вы подписаны была перенесена в другой раздел.

Посмотреть тему: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_merge_subject'] = 'Объединена тема: {TOPICSUBJECT}';
$txt['notification_merge_body'] = 'Тема на которую вы подписаны была объединена с другой темой.

Посмотреть объединенную тему: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_split_subject'] = 'Разделена тема: {TOPICSUBJECT} ';
$txt['notification_split_body'] = 'Тема, на которую вы подписаны, была разделена на несколько тем.

Посмотреть остаток от темы: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['admin_notify_subject'] = 'Зарегистрирован новый пользователь';
$txt['admin_notify_body'] = '{USERNAME} зарегистрировался на форуме. Перейдите по ссылке, чтобы просмотреть его профиль.
{PROFILELINK}

{REGARDS}';

$txt['admin_notify_approval_subject'] = 'Зарегистрирован новый пользователь';
$txt['admin_notify_approval_body'] = '{USERNAME} has just signed up as a new member of your forum. Click the link below to view their profile.
{PROFILELINK}

Before this member can begin posting they must first have their account approved. Click the link below to go to the approval screen.
{APPROVALLINK}

{REGARDS}';

$txt['admin_attachments_full_subject'] = 'Внимание! Каталог вложений почти заполнен';
$txt['admin_attachments_full_body'] = '{REALNAME},

папка вложений на {FORUMNAME} почти заполнена. Посетите форум для решения проблемы.

Если размер папки достигнет максимально допустимого значения, пользователи не смогут загружать вложения и аватары.

{REGARDS}';

$txt['paid_subscription_refund_subject'] = 'Возврат по платной подписке';
$txt['paid_subscription_refund_body'] = '{REALNAME},

получил возврат по платной подписке. Ниже, детали платной подписки:

	Подписка: {NAME} 
	Пользователь: {REFUNDNAME} ({REFUNDUSER}) 
	Дата: {DATE}

Вы можете перейти в профиль пользователя по ссылке:
{PROFILELINK}

{REGARDS} ';

$txt['paid_subscription_new_subject'] = 'Новая платная подписка';
$txt['paid_subscription_new_body'] = '{REALNAME},

пользователь оплатил платную подписку. Ниже детали платной подписки:

	Подписка: {NAME}
	Пользователь: {SUBNAME} ({SUBUSER})
	E-mail пользователя: {SUBEMAIL}
	Цена: {PRICE}
	Дата: {DATE}

Вы можете перейти в профиль пользователя по ссылке:
{PROFILELINK}

{REGARDS} ';

$txt['paid_subscription_error_subject'] = 'Произошла ошибка платной подписки';
$txt['paid_subscription_error_body'] = '{REALNAME},

следующая ошибка произошла при оплате подписки
---------------------------------------------------------------
{ERROR}

{REGARDS}';

$txt['new_pm_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body'] = 'Вы получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо. 

Прочитать это личное сообщение: {READLINK}

Ответить на это личное сообщение: {REPLYLINK} ';

$txt['new_pm_body_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body_body'] = 'Вы получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо.

Текст сообщения:

{MESSAGE}

Ответить на это личное сообщение: {REPLYLINK}';

$txt['new_pm_tolist_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_tolist_body'] = 'Вы и {TOLIST} получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо.

Прочитать это личное сообщение: {READLINK}

Ответить на это личное сообщение (только отправителю): {REPLYLINK} ';

$txt['new_pm_body_tolist_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body_tolist_body'] = 'Вы и {TOLIST} получили личное сообщение от {SENDER} на {FORUMNAME}

ВНИМАНИЕ: Помните, что это только уведомление. Не отвечайте на это письмо.

Текст личного сообщения:

{MESSAGE}

Ответить на это личное сообщение (только отправителю): {REPLYLINK}';

$txt['msg_quote_subject'] = 'Вы были процитированы в сообщении: {CONTENTSUBJECT}';
$txt['msg_quote_body'] = 'Привет {MEMBERNAME},

вы были процитированы {QUOTENAME} в сообщении "{CONTENTSUBJECT}", вы можете прочитать сообщение здесь: 
{CONTENTLINK} 

{REGARDS}';

$txt['msg_mention_subject'] = 'Вы были упомянуты в сообщении: {CONTENTSUBJECT}';
$txt['msg_mention_body'] = 'Привет {MEMBERNAME},

вы были упомянуты {MENTIONNAME} в сообщении "{CONTENTSUBJECT}", вы можете прочитать сообщение здесь:
{CONTENTLINK}

{REGARDS} ';

$txtBirthdayEmails['happy_birthday_subject'] = 'Поздравление с Днем Рождения от {FORUMNAME}. ';
$txtBirthdayEmails['happy_birthday_body'] = 'Dear {REALNAME},

We here at {FORUMNAME} would like to wish you a happy birthday. May this day and the year to follow be full of joy.

{REGARDS}';
$txtBirthdayEmails['happy_birthday_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a> ';

$txtBirthdayEmails['karlbenson1_subject'] = 'В Ваш День Рождения...';
$txtBirthdayEmails['karlbenson1_body'] = 'We could have sent you a birthday card. We could have sent you some flowers or a cake.

But we didn\'t.

We could have even sent you one of those automatically generated messages to wish you happy birthday where we don\'t even have to replace INSERT NAME.

But we didn\'t

We wrote this birthday greeting just for you.

We would like to wish you a very special birthday.

{REGARDS}

//:: This message was automatically generated :://';
$txtBirthdayEmails['karlbenson1_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a> ';

$txtBirthdayEmails['nite0859_subject'] = 'С Днем Рождения!';
$txtBirthdayEmails['nite0859_body'] = 'Your friends at {FORUMNAME} would like to take a moment of your time to wish you a happy birthday, {REALNAME}. If you have not done so recently, please visit our community in order for others to have the opportunity to pass along their warm regards.

Even though today is your birthday, {REALNAME}, we would like to remind you that your membership in our community has been the best gift to us thus far.

Best Wishes,
The Staff of {FORUMNAME}';
$txtBirthdayEmails['nite0859_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a> ';

$txtBirthdayEmails['zwaldowski_subject'] = 'Поздравление с Днем Рождения для {REALNAME}';
$txtBirthdayEmails['zwaldowski_body'] = 'Dear {REALNAME},

Another year in your life has passed. We at {FORUMNAME} hope it has been filled with happiness, and wish you luck in the coming one.

{REGARDS}';
$txtBirthdayEmails['zwaldowski_author'] = '';

$txtBirthdayEmails['geezmo_subject'] = 'С Днем Рождения, {REALNAME}!';
$txtBirthdayEmails['geezmo_body'] = 'Do you know who\'s having a birthday today, {REALNAME}?

We know... YOU!

Happy birthday!

You\'re now a year older but we hope you\'re a lot happier than last year.

Enjoy your day today, {REALNAME}!

- From your {FORUMNAME} family';
$txtBirthdayEmails['geezmo_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a> ';

$txtBirthdayEmails['karlbenson2_subject'] = 'Поздравление с Днем Рождения для Вас';
$txtBirthdayEmails['karlbenson2_body'] = 'We hope your birthday is the best ever cloudy, sunny or whatever the weather.
Have lots of birthday cake and fun, and tell us what you have done.

We hope this message brought you cheer, and make it last, until same time same place, next year.

{REGARDS}';
$txtBirthdayEmails['karlbenson2_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

?>