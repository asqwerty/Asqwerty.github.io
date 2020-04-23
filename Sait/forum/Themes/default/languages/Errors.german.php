<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Sie haben keinen Zugriff auf diesen Bereich!';
$txt['wireless_error_notyet'] = 'Diese Sektion ist momentan f�r schnurlos-Benutzer (wireless) leider nicht verf�gbar.';

$txt['mods_only'] = 'Nur Moderatoren k�nnen die direkte L�schfunktion benutzen, bitte l�schen Sie diesen Eintrag mit der \'Editieren\' Funktion.';
$txt['no_name'] = 'Sie haben das erforderliche Namensfeld nicht ausgef�llt.';
$txt['no_email'] = 'Sie haben das erforderliche E-Mail Feld nicht ausgef�llt.';
$txt['topic_locked'] = 'Das Thema ist geschlossen. �nderungen oder neue Eintr�ge sind nicht erlaubt.';
$txt['no_password'] = 'Passwortfeld ist leer';
$txt['already_a_user'] = 'Dieser Benutzername ist bereits vergeben.';
$txt['cant_move'] = 'Sie haben keine Berechtigung Themen zu verschieben.';
$txt['login_to_post'] = 'Um Beitr�ge zu schreiben, m�ssen Sie eingeloggt sein. Registrieren Sie bitte ein neues Benutzerkonto, falls Sie noch keines haben.';
$txt['passwords_dont_match'] = 'Passw�rter stimmen nicht �berein.';
$txt['register_to_use'] = 'Sie m�ssen sich erst registrieren, bevor Sie diese Funktion nutzen k�nnen.';
$txt['password_invalid_character'] = 'Ung�ltiges Zeichen im Passwort.';
$txt['name_invalid_character'] = 'Ung�ltiges Zeichen im Namen.';
$txt['email_invalid_character'] = 'Ung�ltiges Zeichen in der E-Mail-Adresse.';
$txt['username_reserved'] = 'Der Benutzername, den Sie registrieren m�chten, enth�lt einen reservierten Namen. Bitte versuchen Sie einen anderen Namen. Reservierte Namen: %1$s';
$txt['numbers_one_to_nine'] = 'Dieses Feld akzeptiert nur Zahlen von 0-9';
$txt['not_a_user'] = 'Der Benutzer, von dem sie das Profil anschauen m�chten, existiert nicht.';
$txt['not_a_topic'] = 'Dieses Thema ist im Forum nicht vorhanden.';
$txt['not_approved_topic'] = 'Dieser Beitrag wurde noch nicht genehmigt.';
$txt['email_in_use'] = 'Diese E-Mail-Adresse (%1$s) wird schon von einem registrierten Mitglied benutzt. Sollten sie das f�r einen Fehler halten, gehen sie auf die Login-Seite und benutzen sie die Funktion \'Passworterinnerung\' mit dieser Adresse.';

$txt['didnt_select_vote'] = 'Keine Umfrageoption ausgew�hlt.';
$txt['poll_error'] = 'Die Umfrage ist nicht vorhanden, geschlossen oder Sie haben versucht, zweimal abzustimmen.';
$txt['members_only'] = 'Diese Funktion steht nur Mitgliedern zur Verf�gung.';
$txt['locked_by_admin'] = 'Dieses Thema wurde von einem Administrator geschlossen. Sie k�nnen es nicht �ffnen.';
$txt['not_enough_posts_karma'] = 'Sie haben zu wenige Beitr�ge um das Karma zu �ndern, sie brauchen mind. %1$d.';
$txt['cant_change_own_karma'] = 'Sie d�rfen Ihr eigenes Karma nicht �ndern.';
$txt['karma_wait_time'] = 'Sie k�nnen diese Aktion nicht erneut ausf�hren, ohne %1$s %2$s zu warten.';
$txt['feature_disabled'] = 'Diese Funktion ist deaktiviert.';
$txt['cant_access_upload_path'] = 'Es kann auf den Upload-Pfad der Dateianh�nge nicht zugegriffen werden.';
$txt['file_too_big'] = 'Die Datei ist zu gro�. Die max. Gr��e f�r Dateianh�nge ist %1$d KB.';
$txt['attach_timeout'] = 'Fehler beim Speichern der Datei, bitte versuchen sie es noch einmal.';
$txt['filename_exists'] = 'Es existiert bereits eine Datei mit diesem Namen. Bitte die Datei umbenennen und erneut hochladen.';
$txt['bad_attachment'] = 'Your attachment has failed security checks and cannot be uploaded. Please consult the forum administrator.';
$txt['ran_out_of_space'] = 'Das Upload-Verzeichnis ist voll. Bitte versuchen Sie es mit einer kleineren Datei oder kontaktieren Sie den Administrator.';
$txt['couldnt_connect'] = 'Es konnte keine Verbindung zum Server hergestellt werden oder die Datei ist nicht vorhanden.';
$txt['no_board'] = 'Das angegebene Board existiert nicht.';
$txt['cant_split'] = 'Sie haben keine Berechtigung Themen zu teilen';
$txt['cant_merge'] = 'Sie haben keine Berechtigung Themen zusammenzuf�hren';
$txt['no_topic_id'] = 'Ung�ltige Themen ID.';
$txt['split_first_post'] = 'Sie k�nnen ein Thema nicht beim ersten Beitrag teilen.';
$txt['topic_one_post'] = 'Themen mit nur einem Beitrag k�nnen nicht geteilt werden.';
$txt['no_posts_selected'] = 'Keine Beitr�ge ausgew�hlt';
$txt['selected_all_posts'] = 'Teilen nicht m�glich. Sie haben alle Nachrichten ausgew�hlt.';
$txt['cant_find_messages'] = 'Beitr�ge nicht gefunden';
$txt['cant_find_user_email'] = 'Die E-Mail-Adresse konnte nicht gefunden werden.';
$txt['cant_insert_topic'] = 'Kann Thema nicht einf�gen';
$txt['already_a_mod'] = 'Sie haben einen Benutzernamen gew�hlt, der bereits Moderator ist. Bitte w�hlen Sie einen anderen Namen';
$txt['session_timeout'] = 'Ihre Sitzung ist w�hrend des Schreibens abgelaufen. Bitte gehen Sie zur�ck und versuchen Sie es erneut.';
$txt['session_verify_fail'] = 'Sitzungsverifizierung fehlgeschlagen. Bitte loggen Sie sich aus und danach wieder ein und versuchen Sie es erneut.';
$txt['verify_url_fail'] = 'Ung�ltige Referring Site. Bitte gehen Sie zur�ck und versuchen Sie es erneut.';
$txt['guest_vote_disabled'] = 'G�ste k�nnen in dieser Umfrage nicht abstimmen.';

$txt['cannot_access_mod_center'] = 'Sie haben nicht die Berechtigung auf den Moderations-Center zuzugreifen.';
$txt['cannot_admin_forum'] = 'Sie haben keine Administrator Rechte.';
$txt['cannot_announce_topic'] = 'Sie haben nicht die Berechtigung in diesem Board Themen anzuk�ndigen.';
$txt['cannot_approve_posts'] = 'Sie haben nicht die Berechtigung Genehmigungen zu erteilen.';
$txt['cannot_post_unapproved_attachments'] = 'Sie haben keine Berechtigung um nicht genehmigte Dateianh�nge zu erstellen.';
$txt['cannot_post_unapproved_topics'] = 'Sie haben keine Berechtigung um nicht genehmigte Themen zu erstellen.';
$txt['cannot_post_unapproved_replies_own'] = 'Sie haben keine Berechtigung um nicht genehmigte Antworten zu ihren Themen zu schreiben.';
$txt['cannot_post_unapproved_replies_any'] = 'Sie haben keine Berechtigung um nicht genehmigte Antworten zu Themen anderer Benutzer zu schreiben.';
$txt['cannot_calendar_edit_any'] = 'Sie haben nicht die Berechtigung Kalenderereignisse zu editieren.';
$txt['cannot_calendar_edit_own'] = 'Sie haben nicht die Berechtigung Ihre eigenen Ereignisse zu editieren.';
$txt['cannot_calendar_post'] = 'Sie haben nicht die Berechtigung Ereignisse zu schreiben.';
$txt['cannot_calendar_view'] = 'Sie haben nicht die Berechtigung den Kalender anzuschauen.';
$txt['cannot_remove_any'] = 'Sie haben nicht die Berechtigung jeden Beitrag zu l�schen.';
$txt['cannot_remove_own'] = 'Sie haben nicht die Berechtigung Ihre Beitr�ge in diesem Board zu l�schen.';
$txt['cannot_edit_news'] = 'Sie haben nicht die Berechtigung News zu editieren.';
$txt['cannot_pm_read'] = 'Sie haben nicht die Berechtigung Ihre Privaten Mitteilungen zu lesen.';
$txt['cannot_pm_send'] = 'Sie haben nicht die Berechtigung Private Mitteilungen zu versenden.';
$txt['cannot_karma_edit'] = 'Sie haben nicht die Berechtigung andere Benutzern zu bewerten.';
$txt['cannot_lock_any'] = 'Sie haben nicht die Berechtigung Themen zu schlie�en.';
$txt['cannot_lock_own'] = 'Sie haben nicht die Berechtigung Ihre eigenen Themen zu schlie�en.';
$txt['cannot_make_sticky'] = 'Sie haben nicht die Berechtigung das Thema zu fixieren.';
$txt['cannot_manage_attachments'] = 'Sie haben nicht die Berechtigung Dateien zu verwalten.';
$txt['cannot_manage_bans'] = 'Sie haben nicht die Berechtigung die Bann-Liste zu editieren.';
$txt['cannot_manage_boards'] = 'Sie haben nicht die Berechtigung Boards und Kategorien zu verwalten.';
$txt['cannot_manage_membergroups'] = 'Sie haben nicht die Berechtigung Mitgliedergruppen zu verwalten.';
$txt['cannot_manage_permissions'] = 'Sie haben nicht das Recht die Berechtigungen zu verwalten.';
$txt['cannot_manage_smileys'] = 'Sie haben nicht die Berechtigung Smileys oder Nachrichten-Icons zu verwalten.';
$txt['cannot_mark_any_notify'] = 'Sie haben nicht das Recht Benachrichtigungen von diesem Thema zu empfangen.';
$txt['cannot_mark_notify'] = 'Sie haben nicht die Berechtigung um Benachrichtigungen von diesem Board zu empfangen.';
$txt['cannot_merge_any'] = 'Sie haben nicht die Berechtigung Themen zusammenzuf�hren.';
$txt['cannot_moderate_forum'] = 'Sie haben nicht die Berechtigung dieses Forum zu moderieren.';
$txt['cannot_moderate_board'] = 'Sie sind nicht berechtigt dieses Board zu moderieren.';
$txt['cannot_modify_any'] = 'Sie haben nicht die Berechtigung jeden Beitrag zu editieren.';
$txt['cannot_modify_own'] = 'Sie haben nicht die Berechtigung Ihre eigenen Beitr�ge zu editieren.';
$txt['cannot_modify_replies'] = 'Sie haben nicht die Berechtigung diese Antwort zu editieren, obwohl es eine Antwort auf Ihren Beitrag ist.';
$txt['cannot_move_own'] = 'Sie haben nicht die Berechtigung Ihre Beitr�ge in dieses Board zu verschieben.';
$txt['cannot_move_any'] = 'Sie haben nicht die Berechtigung in diesem Board Themen zu verschieben.';
$txt['cannot_poll_add_own'] = 'Sie haben nicht die Berechtigung Umfragen zu Ihren Beitr�gen hinzuf�gen.';
$txt['cannot_poll_add_any'] = 'Sie haben nicht die Berechtigung Umfragen zu diesem Thema hinzuzuf�gen.';
$txt['cannot_poll_edit_own'] = 'Sie haben nicht die Berechtigung Ihre Umfrage zu editieren.';
$txt['cannot_poll_edit_any'] = 'Sie haben nicht die Berechtigung Umfragen zu editieren.';
$txt['cannot_poll_lock_own'] = 'Sie haben nicht die Berechtigung Ihre eigenen Umfragen zu schlie�en.';
$txt['cannot_poll_lock_any'] = 'Sie haben nicht die Berechtigung Umfragen zu schlie�en.';
$txt['cannot_poll_post'] = 'Sie haben nicht die Berechtigung Umfragen zu starten.';
$txt['cannot_poll_remove_own'] = 'Sie haben nicht die Berechtigung die Umfrage von Ihrem Thema zu entfernen.';
$txt['cannot_poll_remove_any'] = 'Sie d�rfen in diesem Board keine Umfragen entfernen.';
$txt['cannot_poll_view'] = 'Sie haben nicht die Berechtigung Umfragen anzuschauen.';
$txt['cannot_poll_vote'] = 'Sie haben nicht die Berechtigung in Umfragen abzustimmen.';
$txt['cannot_post_attachment'] = 'Sie haben nicht die Berechtigung Dateianh�nge zu speichern.';
$txt['cannot_post_new'] = 'Sie haben nicht die Berechtigung neue Themen zu erstellen.';
$txt['cannot_post_reply_any'] = 'Sie haben nicht die Berechtigung auf Themen zu antworten.';
$txt['cannot_post_reply_own'] = 'Sie haben nicht die Berechtigung auf Ihre eigenen Beitr�ge zu antworten.';
$txt['cannot_profile_remove_own'] = 'Sie haben nicht die Berechtigung Ihr eigenes Benutzerkonto zu l�schen.';
$txt['cannot_profile_remove_any'] = 'Sie haben nicht die Berechtigung das Benutzerkonto anderer Mitglieder zu l�schen.';
$txt['cannot_profile_extra_any'] = 'Sie haben nicht die Berechtigung das Profil zu editieren.';
$txt['cannot_profile_identity_any'] = 'Sie haben nicht die Berechtigung Kontoeinstellungen zu editieren.';
$txt['cannot_profile_title_any'] = 'Sie haben nicht die Berechtigung die pers�nlichen Titel zu �ndern.';
$txt['cannot_profile_extra_own'] = 'Sie haben nicht die Berechtigung Ihre Profildaten zu editieren.';
$txt['cannot_profile_identity_own'] = 'Sie haben nicht die Berechtigung Ihre Identit�t nicht �ndern.';
$txt['cannot_profile_title_own'] = 'Sie haben nicht die Berechtigung Ihren pers�nlichen Titel zu �ndern.';
$txt['cannot_profile_server_avatar'] = 'Sie haben nicht die Berechtigung ein Benutzerbild zu verwenden.';
$txt['cannot_profile_upload_avatar'] = 'Sie haben nicht die Berechtigung ein Benutzerbild hochzuladen.';
$txt['cannot_profile_remote_avatar'] = 'Sie haben nicht die Berechtigung ein externes Benutzerbild zu verwenden.';
$txt['cannot_profile_view_own'] = 'Sie haben nicht die Berechtigung Ihr Profil anzuschauen.';
$txt['cannot_profile_view_any'] = 'Sie haben nicht die Berechtigung Profile anzuschauen.';
$txt['cannot_delete_own'] = 'Sie haben nicht die Berechtigung Ihre Beitr�ge zu l�schen.';
$txt['cannot_delete_replies'] = 'Sie haben nicht die Berechtigung Beitr�ge zu l�schen, obwohl es Antworten auf Ihren Beitrag sind.';
$txt['cannot_delete_any'] = 'Sie haben nicht die Berechtigung Beitr�ge zu l�schen.';
$txt['cannot_report_any'] = 'Sie haben nicht die Berechtigung Beitr�ge zu melden.';
$txt['cannot_search_posts'] = 'Sie haben nicht die Berechtigung in diesem Forum Beitr�ge zu suchen.';
$txt['cannot_send_mail'] = 'Sie haben nicht die Berechtigung E-Mails an alle zu senden.';
$txt['cannot_issue_warning'] = 'Sie haben nicht die Berechtigung Verwarnung zu erteilen.';
$txt['cannot_send_topic'] = 'Sie haben nicht die Berechtigung Themen zu senden.';
$txt['cannot_split_any'] = 'Sie haben nicht die Berechtigung Themen zu teilen.';
$txt['cannot_view_attachments'] = 'Sie haben nicht die Berechtigung Dateianh�nge herunterzuladen oder anzusehen.';
$txt['cannot_view_mlist'] = 'Sie haben nicht die Berechtigung die Mitgliederliste anzuschauen.';
$txt['cannot_view_stats'] = 'Sie haben nicht die Berechtigung die Statistiken des Forums anzuschauen.';
$txt['cannot_who_view'] = 'Sie haben nicht die Berechtigung die \'Wer ist online\' Liste anzuschauen.';

$txt['no_theme'] = 'Das Theme existiert nicht.';
$txt['theme_dir_wrong'] = 'Das Standard-Themeverzeichnis ist falsch. Bitte korrigieren Sie es, indem Sie auf diesen Text klicken.';
$txt['registration_disabled'] = 'Die Registrierung ist momentan deaktiviert.';
$txt['registration_no_secret_question'] = 'Es ist keine geheime Frage f�r dieses Mitglied gespeichert.';
$txt['poll_range_error'] = 'Die Umfrage muss f�r mehr wie 0 Tage laufen.';
$txt['delFirstPost'] = 'Sie d�rfen nicht den ersten Beitrag eines Themas l�schen.<p>Wenn Sie dieses Thema l�schen m�chten, klicken Sie auf den "Thema l�schen" Button oder fragen Sie einen Moderator/Administrator, dies f�r Sie zu tun.</p>';
$txt['parent_error'] = 'Board kann nicht erstellt werden!';
$txt['login_cookie_error'] = 'Sie konnten sich nicht einloggen. Bitte �berpr�fen Sie die Cookie-Einstellungen.';
$txt['incorrect_answer'] = 'Sie haben Ihre Frage nicht richtig beantwortet. Bitte gehen Sie zur�ck und versuchen Sie es nochmal oder gehen Sie zwei Schritte zur�ck und lassen Sie sich ein neues Passwort schicken.';
$txt['no_mods'] = 'Keine Moderatoren gefunden!';
$txt['parent_not_found'] = 'Boardstruktur kaputt: �bergeordnetes Board kann nicht gefunden werden';
$txt['modify_post_time_passed'] = 'Sie k�nnen diesen Beitrag nicht editieren, da das Zeitlimit abgelaufen ist.';

$txt['calendar_off'] = 'Sie k�nnen den Kalender nicht aufrufen, weil er deaktiviert ist.';
$txt['invalid_month'] = 'Ung�ltiger Monatswert.';
$txt['invalid_year'] = 'Ung�ltiger Jahreswert.';
$txt['invalid_day'] = 'Ung�ltiger Tageswert.';
$txt['event_month_missing'] = 'Monatsangabe fehlt.';
$txt['event_year_missing'] = 'Jahresangabe fehlt.';
$txt['event_day_missing'] = 'Tagesangabe fehlt.';
$txt['event_title_missing'] = 'Ereignistitel fehlt.';
$txt['invalid_date'] = 'Ung�ltiges Datum.';
$txt['no_event_title'] = 'Ereignistitel wurde nicht angegeben.';
$txt['missing_event_id'] = 'Ereignis ID fehlt.';
$txt['cant_edit_event'] = 'Sie haben keine Berechtigung das Ereignis zu editieren.';
$txt['missing_board_id'] = 'Board ID fehlt.';
$txt['missing_topic_id'] = 'Thema ID fehlt.';
$txt['topic_doesnt_exist'] = 'Thema existiert nicht.';
$txt['not_your_topic'] = 'Sie haben das Thema nicht erstellt.';
$txt['board_doesnt_exist'] = 'Das Board existiert nicht.';
$txt['no_span'] = 'Die \'mehrere Tage\'-Funktion ist nicht aktiviert.';
$txt['invalid_days_numb'] = 'Die Anzahl der Tage ist ung�ltig.';

$txt['moveto_noboards'] = 'Es sind keine Boards vorhanden, wohin das Thema verschoben werden kann!';

$txt['already_activated'] = 'Ihr Benutzerkonto wurde schon aktiviert.';
$txt['still_awaiting_approval'] = 'Ihr Benutzerkonto wartet noch auf die Genehmigung des Administrators.';

$txt['invalid_email'] = 'Ung�ltige E-Mail-Adresse/E-Mail-Adressenbereich.<br />Beispiel einer g�ltigen E-Mail-Adresse: evil.user@badsite.com.<br />Beispiel eines g�ltigen E-Mail-Adressenbereichs: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'Ablaufdatum ist ung�ltig';
$txt['invalid_hostname'] = 'Ung�ltiger Hostname/Hostnamensbereich.<br />Beispiel eines g�ltigen Hostnamen: proxy4.badhost.com<br />Beispiel eines g�ltigen Hostnamensbereich: *.badhost.com';
$txt['invalid_ip'] = 'Ung�ltige IP/IP-Bereich.<br />Beispiel einer g�ltigen IP-Adresse: 127.0.0.1<br />Beispiel eines g�ltigen IP-Bereichs: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Falsche IP /IP-Adressbereich. <br /> Beispiele f�r eine korrekte IP: 127.0.0.1 <br /> Beispiel f�r einen korrekten IP-Adressbereich: 127.0.0.*';
$txt['invalid_username'] = 'Benutzername nicht gefunden!';
$txt['no_ban_admin'] = 'Sie k�nnen keinen Administrator bannen - Sie m�ssen ihn erst degradieren!';
$txt['no_bantype_selected'] = 'Kein Bann-Typ gew�hlt.';
$txt['ban_not_found'] = 'Bann nicht gefunden!';
$txt['ban_unknown_restriction_type'] = 'Einschr�nkung nicht bekannt.';
$txt['ban_name_empty'] = 'Bitte geben sie einen Namen f�r den Bann ein';
$txt['ban_name_exists'] = 'Der Name des Banns (%1$s) existiert schon. Bitte w�hlen sie einen anderen Namen.';
$txt['ban_trigger_already_exists'] = 'This ban trigger (%1$s) already exists in %2$s.';

$txt['recycle_no_valid_board'] = 'Kein g�ltiges Board f�r wiederherzustellende Themen gew�hlt!';

$txt['login_threshold_fail'] = 'Sie haben keine Versuche mehr. Bitte versuchen Sie es sp�ter nochmal.';
$txt['login_threshold_brute_fail'] = 'Sie haben die maximale Anzahl an Login-Versuchen verbraucht. Bitte warten Sie mindestens 30 Sekunden bevor Sie es erneut versuchen.';

$txt['who_off'] = 'Sie k�nnen die \'Who is online\' Liste nicht anschauen, da sie deaktiviert ist.';

$txt['merge_create_topic_failed'] = 'Fehler beim Erstellen des neuen Themas.';
$txt['merge_need_more_topics'] = 'Zusammenf�hren von Themen ben�tigt mind. 2 Themen.';

$txt['postWaitTime_broken'] = 'Der letzte Beitrag von ihrer IP-Adresse ist weniger als %1$d Sekunden her. Bitte versuchen sie es sp�ter noch einmal.';
$txt['registerWaitTime_broken'] = 'Sie haben sich erst vor %1$d Sekunden registriert!';
$txt['loginWaitTime_broken'] = 'Sie m�ssen %1$d Sekunden warten, bevor Sie sich wieder einloggen k�nnen.';
$txt['pmWaitTime_broken'] = 'Die letzte Private Mitteilung von ihrer IP-Adresse ist weniger als %1$d Sekunden her. Bitte versuchen sie es sp�ter noch einmal.';
$txt['reporttmWaitTime_broken'] = 'Das letzte Thema von ihrer IP-Adresse wurde vor weniger als %1$d Sekunden gemeldet. Bitte versuchen sie es sp�ter noch einmal.';
$txt['sendtopcWaitTime_broken'] = 'Das letzte Thema von ihrer IP-Adresse wurde vor weniger als %1$d Sekunden gesendet. Bitte versuchen sie es sp�ter noch einmal.';
$txt['sendmailWaitTime_broken'] = 'Die letzte E-Mail von ihrer IP-Adresse wurde vor weniger %1$d Sekunden versendet. Bitte versuchen sie es sp�ter noch einmal.';
$txt['searchWaitTime_broken'] = 'Ihre letzte Suchanfrage war vor weniger als %1$d Sekunden. Bitte versuchen Sie es sp�ter noch einmal.';

$txt['email_missing_data'] = 'Sie m�ssen im Betreff- und im Textfeld etwas eingeben.';

$txt['topic_gone'] = 'Das Thema dass Sie anschauen m�chten, existiert nicht oder ist f�r Sie nicht einsehbar.';
$txt['theme_edit_missing'] = 'Die Datei, die Sie editieren m�chten, kann nicht gefunden werden!';

$txt['attachments_no_write'] = 'Das Dateianhangsverzeichnis ist nicht beschreibbar. Ihr Dateianhang oder Benutzerbild kann nicht gespeichert werden!';
$txt['attachments_limit_per_post'] = 'Sie k�nnen nicht mehr als %1$d Anh�nge zum Beitrag hinzuf�gen';

$txt['no_dump_database'] = 'Datensicherungen k�nnen nur von Administratoren gemacht werden!';
$txt['pm_not_yours'] = 'Die Private Mitteilung, die Sie zitieren m�chten, ist nicht Ihre eigene bzw. exisitiert nicht. Bitte gehen Sie zur�ck und versuchen Sie es nochmal.';
$txt['mangled_post'] = 'Fehlende Formulardaten - bitte gehen Sie zur�ck und versuchen Sie es nochmal.';
$txt['quoted_post_deleted'] = 'Der Beitrag, den Sie zitieren m�chten, existiert nicht, wurde gel�scht oder ist f�r Sie nicht mehr einsehbar.';
$txt['pm_too_many_per_hour'] = 'Sie haben das Limit von %1$d Privaten Mitteilungen pro Stunde erreicht.';
$txt['labels_too_many'] = '%1$s Mitteilungen haben schon das Limit der Labels erreicht!';

$txt['register_only_once'] = 'Sie d�rfen nicht mehrere Benutzerkonten zur gleichen Zeit f�r den gleichen Computer registrieren.';
$txt['admin_setting_coppa_require_contact'] = 'Sie m�ssen eine Postadresse oder Faxnummer eingeben, wenn die Genehmigung durch Eltern/Erziehungsberechtigte erfordert wird.';

$txt['error_long_name'] = 'Der Name, den Sie verwenden, ist zu lang.';
$txt['error_no_name'] = 'Kein Name vorhanden.';
$txt['error_bad_name'] = 'Der Name kann nicht verwendet werden, weil er reserviert ist.';
$txt['error_no_email'] = 'Keine E-Mail-Adresse eingegeben.';
$txt['error_bad_email'] = 'Ung�ltige E-Mail-Adresse eingegeben.';
$txt['error_no_event'] = 'Kein Ereignistitel angegeben.';
$txt['error_no_subject'] = 'Kein Betreff angegeben.';
$txt['error_no_question'] = 'Frage wurde nicht angegeben.';
$txt['error_no_message'] = 'Textfeld wurde nicht ausgef�llt.';
$txt['error_long_message'] = 'Beitrag hat die max. L�nge erreicht (%s Zeichen).';
$txt['error_no_comment'] = 'Das Kommentarfeld wurde nicht ausgef�llt.';
$txt['error_session_timeout'] = 'Ihre Sitzung ist abgelaufen. Bitte senden Sie Ihren Beitrag erneut.';
$txt['error_no_to'] = 'Kein Empf�nger angegeben.';
$txt['error_bad_to'] = 'Ein oder mehrere \'An\'-Empf�nger k�nnen nicht gefunden werden.';
$txt['error_bad_bcc'] = 'Ein oder mehrere \'Bcc\'-Empf�nger k�nnen nicht gefunden werden.';
$txt['error_form_already_submitted'] = 'Sie haben den Beitrag bereits gesendet! Vielleicht haben Sie ihn aus Versehen zweimal abgesendet oder die Seite neu geladen.';
$txt['error_poll_few'] = 'Sie m�ssen mindestens 2 M�glichkeiten w�hlen!';
$txt['error_need_qr_verification'] = 'Bitte f�llen sie die �berpr�fungssektion unten aus um ihren Post abzuschlie�en.';
$txt['error_wrong_verification_code'] = 'Die Buchstaben stimmen nicht mit denen im Bild �berein.';
$txt['error_wrong_verification_answer'] = 'Sie haben die Verifizierungsfrage nicht korrekt beantwortet.';
$txt['error_need_verification_code'] = 'Bitte geben Sie den Verifizierungscode ein, um zu den Resultaten zu gelangen.';
$txt['error_bad_file'] = 'Die ausgew�hlte Datei konnte nicht ge�ffnet werden: %1$s';
$txt['error_bad_line'] = 'Die angegebene Zeile ist ung�ltig.';

$txt['smiley_not_found'] = 'Smiley nicht gefunden.';
$txt['smiley_has_no_code'] = 'F�r diesen Smiley wurde kein Code gefunden.';
$txt['smiley_has_no_filename'] = 'F�r diesen Smiley wurde kein Dateiname gefunden.';
$txt['smiley_not_unique'] = 'Ein Smiley mit diesem Code existiert bereits.';
$txt['smiley_set_already_exists'] = 'Ein Smiley-Set mit dieser URL existiert bereits.';
$txt['smiley_set_not_found'] = 'Smiley-Set nicht gefunden.';
$txt['smiley_set_path_already_used'] = 'Die URL von diesem Smiley-Set wird bereits von einem anderen Set benutzt.';
$txt['smiley_set_unable_to_import'] = 'Smiley-Set kann nicht importiert werden. Das Verzeichnis ist ung�ltig oder es kann nicht darauf zugegriffen werden.';

$txt['smileys_upload_error'] = 'Datei konnte nicht hochgeladen werden.';
$txt['smileys_upload_error_blank'] = 'Alle Smiley-Sets m�ssen mind. ein Bild haben!';
$txt['smileys_upload_error_name'] = 'Alle Smileys m�ssen den gleichen Dateinamen haben!';
$txt['smileys_upload_error_illegal'] = 'Ung�ltiger Typ.';

$txt['search_invalid_weights'] = 'Die Gewichtungen der Suchergebnisse sind nicht richtig eingestellt. Mindestens ein Wert sollte nicht auf "Null" eingestellt sein. Bitte informieren Sie den Administrator.';
$txt['unable_to_create_temporary'] = 'Die Suche konnte keine tempor�ren Tabellen erstellen. Bitte versuchen Sie es nochmal.';

$txt['package_no_file'] = 'Die Datei konnte nicht gefunden werden!';
$txt['packageget_unable'] = 'Der Server wurde nicht gefunden. Bitte benutzen Sie stattdessen <a href="%1$s" target="_blank">diesen Link</a>.';
$txt['not_on_simplemachines'] = 'Pakete k�nnen nur vom simplemachines.org Server runtergeladen werden.';
$txt['package_cant_uninstall'] = 'Dieses Paket wurde noch nie installiert oder schon deinstalliert. Deshalb k�nnen Sie es nicht deinstallieren.';
$txt['package_cant_download'] = 'Sie k�nnen keine Pakete herunterladen bzw. installieren, da das Paket-Verzeichnis oder enthaltene Dateien nicht �berschreibbar sind!';
$txt['package_upload_error_nofile'] = 'Sie haben kein Paket zum Hochladen ausgew�hlt.';
$txt['package_upload_error_failed'] = 'Konnte das Paket nicht hochladen. Bitte pr�fen Sie die Ordner-Rechte.';
$txt['package_upload_error_exists'] = 'Die Datei, die Sie hochladen m�chten, exisitiert schon auf dem Server. Bitte l�schen Sie diese zuerst und versuchen Sie es erneut.';
$txt['package_upload_error_supports'] = 'Der Paketmanager erlaubt momentan nur folgende Dateitypen: %1$s.';
$txt['package_upload_error_broken'] = 'Das Hochladen des Pakets ist aufgrund folgenden Fehlers fehlgeschlagen:<br />"%1$s"';

$txt['package_get_error_not_found'] = 'Das Paket, das sie versuchen zu installieren, konnte nicht gefunden werden. Vielleicht m�chten Sie das Paket manuell in Ihr Packages Verzeichnis hochladen.';
$txt['package_get_error_missing_xml'] = 'Das Paket, das Sie versuchen zu installieren, hat keine package-info.xml in dessen Hauptverzeichnis.';
$txt['package_get_error_is_zero'] = 'Auch wenn das Paket auf den Server heruntergeladen wurde scheint es leer zu sein. Bitte �berpr�fen sie dass der Packages Ordner und das "temp" Unterverzeichnis beschreibbar sind. Sollten sie dieses Problem weiterhin haben sollten sie versuchen das Paket auf ihrem eigenen rechner zu entpacken und in ein neues Unterverzeichnis in das Package Verzeichnis hochladen. Wenn das Paket zum Beispiel shout.tar.gt hei�t sollten sie:<br/>1) Das Paket auf ihren PC herunterladen und entpacken.<br/>2) Mit einem FTP Programm ein neues Verzeichnis im "Packages" Ordner erstellen und dieses, in unserem Beispiel, "shout" nennen.<br/>3) Laden sie alle entpackten Dateien in dieses Verzeichnis.<br/>4) Gehen sie zur�ck zum Paket Manager und pr�fen sie ob das Paket automatisch gefunden wurde (dies sollte der Fall sein).';
$txt['package_get_error_packageinfo_corrupt'] = 'Es konnte keine g�ltige Information in der package-info.xml Datei des Paketes gefunden werden. Die Modifikation k�nnte fehlerhaft sein oder das Paket ist fehlerhaft.';

$txt['no_membergroup_selected'] = 'Keine Mitgliedergruppe gew�hlt.';
$txt['membergroup_does_not_exist'] = 'Die Mitgliedergruppe existiert nicht oder ist ung�ltig.';

$txt['at_least_one_admin'] = 'Es muss mindestens ein Administrator im Forum exisitieren!';

$txt['error_functionality_not_windows'] = 'Diese Funktion steht momentan auf Windows Betriebssystemen nicht zur Verf�gung.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Dateianhang nicht gefunden.';

$txt['error_no_boards_selected'] = 'Kein g�ltiges Board ausgew�hlt!';
$txt['error_invalid_search_string'] = 'Sie haben keinen Suchbegriff eingegeben!';
$txt['error_invalid_search_string_blacklist'] = 'Ihre Suchanfrage enthielt zu triviale W�rter. Bitte versuchen Sie es mit einem anderen Suchtext erneut.';
$txt['error_search_string_small_words'] = 'Jedes Wort muss aus mindestens zwei Buchstaben bestehen.';
$txt['error_query_not_specific_enough'] = 'Ihre Suchanfrage ergab keine Ergebnisse.';
$txt['error_no_messages_in_time_frame'] = 'Keine Beitr�ge im gew�hlten Zeitrahmen gefunden';
$txt['error_no_labels_selected'] = 'Keine Labels ausgew�hlt!';
$txt['error_no_search_daemon'] = 'Auf das Suchprogramm konnte nicht zugegriffen werden';

$txt['profile_errors_occurred'] = 'Die folgenden Fehler sind w�hrend des Speicherns des Profils aufgetreten';
$txt['profile_error_bad_offset'] = 'Die Zeitverschiebung ist au�erhalb des erlaubten Bereichs';
$txt['profile_error_no_name'] = 'Das Namensfeld wurde nicht ausgef�llt';
$txt['profile_error_name_taken'] = 'Der ausgew�hlte Benutzername / Anzeigename existiert schon';
$txt['profile_error_name_too_long'] = 'Der ausgew�hlte Name ist zu lang. Er sollte nicht l�nger als 60 Zeichen sein.';
$txt['profile_error_no_email'] = 'Das E-Mail Feld wurde nicht ausgef�llt';
$txt['profile_error_bad_email'] = 'Sie haben keine g�ltige E-Mail-Adresse eingegeben';
$txt['profile_error_email_taken'] = 'Ein anderer Benutzer hat sich schon mit dieser E-Mail-Adresse angemeldet';
$txt['profile_error_no_password'] = 'Sie haben Ihr Passwort nicht eingegeben';
$txt['profile_error_bad_new_password'] = 'Die neuen Passw�rter stimmen nicht �berein';
$txt['profile_error_bad_password'] = 'Das eingegebene Passwort ist nicht korrekt';
$txt['profile_error_bad_avatar'] = 'Das ausgew�hlte Benutzerbild ist zu gro�';
$txt['profile_error_password_short'] = 'Ihr Passwort muss mindestens ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' Zeichen enthalten.';
$txt['profile_error_password_restricted_words'] = 'Ihr Passwort darf nicht Ihren Benutzernamen, Ihre E-Mail-Adresse oder andere h�ufig benutzte W�rter enthalten.';
$txt['profile_error_password_chars'] = 'Ihr Passwort muss Klein- und Gro�buchstaben sowie Zahlen enthalten.';
$txt['profile_error_already_requested_group'] = 'Sie haben bereits eine Anfrage f�r diese Gruppe!';
$txt['profile_error_openid_in_use'] = 'Ein anderer Benutzer verwendet diese OpenID URL bereits';

$txt['mysql_error_space'] = ' - kontrollieren Sie den Speicherplatz f�r die Datenbank oder kontaktieren sie den Server Administrator.';

$txt['icon_not_found'] = 'Das Symbol konnte nicht im Standard-Theme gefunden werden - stellen Sie sicher, dass es hochgeladen ist und versuchen Sie es erneut.';
$txt['icon_after_itself'] = 'Das Symbol kann nicht hinter sich selbst positioniert werden!';
$txt['icon_name_too_long'] = 'Die Dateinamen von Symbolen d�rfen nicht mehr als 16 Zeichen haben';

$txt['name_censored'] = 'Der Name, den Sie benutzen m�chten - %1$s - enth�lt W�rter bzw. Buchstabenkombinationen, welche zensiert werden. Bitte geben Sie einen anderen Namen.';

$txt['poll_already_exists'] = 'Einem Thema kann nur eine Umfrage zugeordnet sein!';
$txt['poll_not_found'] = 'Diesem Thema ist keine Umfrage zugeordnet!';

$txt['error_while_adding_poll'] = 'Die folgenden Fehler sind aufgetreten, w�hrend die Umfrage hinzugef�gt worden ist';
$txt['error_while_editing_poll'] = 'Die folgenden Fehler sind aufgetreten, w�hrend die Umfrage editiert worden ist';

$txt['loadavg_search_disabled'] = 'Aufgrund der hohen Auslastung des Servers wurde die Suchfunktion deaktiviert.';
$txt['loadavg_generic_disabled'] = 'Aufgrund der hohen Auslastung des Servers ist diese Funktion momentan nicht verf�gbar.';
$txt['loadavg_allunread_disabled'] = 'Aufgrund der hohen Auslastung des Servers konnten nicht alle ungelesenen Themen gefunden werden.';
$txt['loadavg_unreadreplies_disabled'] = 'Die Auslastung des Servers ist momentan zu hoch. Bitte versuchen Sie es sp�ter nochmal.';
$txt['loadavg_show_posts_disabled'] = 'Aufgrund der hohen Auslastung des Servers konnten die Benutzerbeitr�ge nicht geladen werden. Bitte versuchen Sie es sp�ter nochmal.';
$txt['loadavg_unread_disabled'] = 'Die Serverbelastung ist momentan zu hoch, um die ungelesenen Themen anzuzeigen.';

$txt['cannot_edit_permissions_inherited'] = 'Sie k�nnen vererbte Berechtigungen nicht direkt ver�ndern. Sie m�ssen entweder die �bergeordneten Berechtigungen editieren oder die Berechtigungen der Mitgliedergruppe.';

$txt['mc_no_modreport_specified'] = 'Sie m�ssen den gew�nschten Report ausw�hlen.';
$txt['mc_no_modreport_found'] = 'Der gew�nschte Report existiert nicht oder darf von ihnen nicht erstellt werden';

$txt['st_cannot_retrieve_file'] = 'Die Datei %1$s konnte nicht abgerufen werden.';
$txt['admin_file_not_found'] = 'Die angeforderte Datei konnte nicht geladen werden: %1$s.';

$txt['themes_none_selectable'] = 'Es muss mindestens ein Theme zur Auswahl stehen.';
$txt['themes_default_selectable'] = 'Das Standard-Theme muss zur Auswahl stehen.';
$txt['ignoreboards_disallowed'] = 'Die Option f�r das Ignorieren von Boards ist nicht aktiviert.';

$txt['mboards_delete_error'] = 'Keine Kategorie ausgew�hlt!';
$txt['mboards_delete_board_error'] = 'Kein Board ausgew�hlt!';

$txt['mboards_parent_own_child_error'] = 'Sie k�nnen aus dem �bergeordneten Board keine untergeordnetes erstellen.';
$txt['mboards_board_own_child_error'] = 'Sie k�nnen das Board nicht auf sich selber kopieren.';

$txt['smileys_upload_error_notwritable'] = 'Die folgenden Smiley-Verzeichnisse sind nicht �berschreibbar: %1$s';
$txt['smileys_upload_error_types'] = 'Bilder k�nnen nur die folgenden Endungen haben: %1$s.';

$txt['change_email_success'] = 'Ihre E-Mail-Adresse hat sich ge�ndert. Es wurde Ihnen einen neue Aktivierungs E-Mail zugeschickt.';
$txt['resend_email_success'] = 'Eine neue Ank�ndigungs-E-Mail wurde erfolgreich versendet.';

$txt['custom_option_need_name'] = 'Die Profil-Option muss einen Namen erhalten!';
$txt['custom_option_not_unique'] = 'Der Name des Feldes ist nicht eindeutig!';

$txt['warning_no_reason'] = 'Sie m�ssen einen Grund f�r die Ver�nderung des Verwarnungslevels angeben.';
$txt['warning_notify_blank'] = 'Sie haben das Senden einer Benachrichtigung ausgew�hlt, aber keinen Betreff/Text angegeben.';

$txt['cannot_connect_doc_site'] = 'Das Simple Machines Online Handbuch konnte nicht geladen werden. Bitte �berpr�fen sie die Serverkonfiguration, dass externe Verbindungen erlaubt werden und versuchen sie es sp�ter noch einmal.';

$txt['movetopic_no_reason'] = 'Sie m�ssen einen Grund f�r das Verschieben des Themas angeben, oder die Option eines Weiterleitungs-Themas deaktivieren.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'Der angeforderte Identifizierungsserver hat nicht die richtigen Informationen geliefert.';
$txt['openid_return_no_mode'] = 'Der Identit�tsprovider hat nicht im OpenID-Modus geantwortet.';
$txt['openid_not_resolved'] = 'Der Identit�tsprovider konnte Ihre Anfrage nicht genehmigen.';
$txt['openid_no_assoc'] = 'Die angeforderte Zuordnung konnte mit dem Identit�tsprovider nicht gefunden werden.';
$txt['openid_sig_invalid'] = 'Die Signatur des Identit�tsproviders ist ung�ltig.';
$txt['openid_load_data'] = 'Die Daten konnten nicht geladen werden. Bitte versuchen Sie es nochmal.';
$txt['openid_not_verified'] = 'Die eingegebene OpenID-Adresse ist noch nicht verifiziert worden. Bitte loggen Sie sich ein um sie zu verifizieren.';

$txt['error_custom_field_too_long'] = 'Das "%1$s"-Feld kann nicht mehr wie %2$d Zeichen lang sein.';
$txt['error_custom_field_invalid_email'] = 'Das "%1$s" Feld muss eine g�ltige E-Mail-Adresse enthalten.';
$txt['error_custom_field_not_number'] = 'Das "%1$s" Feld muss nummerisch sein.';
$txt['error_custom_field_inproper_format'] = 'Das "%1$s" Feld hat ein ung�ltiges Format.';
$txt['error_custom_field_empty'] = 'Das "%1$s" Feld darf nicht leer sein.';

$txt['email_no_template'] = 'Das E-Mail Template "%1$s" konnte nicht gefunden werden.';

$txt['search_api_missing'] = 'Die Such-API konnte nicht gefunden werden! Bitte kontaktieren Sie den Administrator mit der Bitte zu pr�fen, ob die richtigen Dateien hochgeladen wurden.';
$txt['search_api_not_compatible'] = 'Die gew�hlte Such-API des Forums ist nicht mehr aktuell - es wird die Standard-Suche verwendet. Bitte pr�fen Sie die Datei %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Sie k�nnen den ersten Beitrag eines Themas nicht wiederherstellen.';
$txt['parent_topic_missing'] = 'Das urspr�ngliche Thema des wiederherzustellenden Beitrags wurde gel�scht.';
$txt['restored_disabled'] = 'Das Wiederherstellen von Themen wurde deaktiviert.';
$txt['restore_not_found'] = 'Die folgenden Nachrichten konnten nicht wiederhergestellt werden; das urspr�ngliche Thema wurde eventuell gel�scht: <ul style="margin-top: 0px;">%1$s</ul>Sie m�ssen diese selbst verschieben.';

$txt['error_invalid_dir'] = 'Das angegebene Verzeichnis ist ung�ltig.';

$txt['error_sqlite_optimizing'] = 'SQLite optimiert gerade die Datenbank. So lange dies andauert kann auf das Forum nicht zugegriffen werden. Bitte versuchen Sie die Seite ab und zu neu zu laden.';

?>