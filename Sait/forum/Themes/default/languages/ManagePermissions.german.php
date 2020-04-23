<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Berechtigungen editieren';
$txt['permissions_modify'] = '�ndern';
$txt['permissions_view'] = 'Anschauen';
$txt['permissions_allowed'] = 'Erlaubt';
$txt['permissions_denied'] = 'Verboten';
$txt['permission_cannot_edit'] = '<strong>Achtung:</strong> Sie k�nnen dieses Berechtigungsprofil nicht editieren, da es ein vordefiniertes Profil ist, welches standardm��ig in SMF integriert ist. Wenn Sie es ver�ndern m�chten, m�ssen Sie zuerst eine Kopie des Profils erstellen. Sie k�nnen den Vorgang starten, in dem Sie <a href="%1$s">hier</a> klicken.';

$txt['permissions_for_profile'] = 'Berechtigungen f�r das Profil';
$txt['permissions_boards_desc'] = 'Die folgende Liste zeigt eine Zusammenstellung von Berechtigungen, die zu den einzelnen Boards Ihres Forums zugeordnet sind. Sie k�nnen das zugeordnete Berechtigungsprofil �ndern, in dem Sie auf den Boardnamen klicken oder "Alle editieren" am Ende der Seite w�hlen. Um das Profil selbst zu �ndern, klicken Sie einfach auf den Profilnamen.';
$txt['permissions_board_all'] = 'Alle bearbeiten';
$txt['permission_profile'] = 'Berechtigungsprofil';
$txt['permission_profile_desc'] = '<a href="%1$s">Berechtigungsprofil</a>, welches das Board benutzen soll.';
$txt['permission_profile_inherit'] = 'Von Elternforum erben';

$txt['permissions_profile'] = 'Profil';
$txt['permissions_profiles_desc'] = 'Berechtigungsprofile k�nnen den einzelnen Boards zugeordnet werden, um die Sicherheitseinstellungen einfach zu verwalten. Hier k�nnen Sie die Profile erstellen, editieren und l�schen.';
$txt['permissions_profiles_change_for_board'] = 'Editiere Berechtigungsprofil f�r: "%1$s"';
$txt['permissions_profile_default'] = 'Standard';
$txt['permissions_profile_no_polls'] = 'Keine Umfragen';
$txt['permissions_profile_reply_only'] = 'Nur Antworten';
$txt['permissions_profile_read_only'] = 'Nur Lesen';

$txt['permissions_profile_rename'] = 'Umbenennen';
$txt['permissions_profile_edit'] = 'Profile �ndern';
$txt['permissions_profile_new'] = 'Neues Profil';
$txt['permissions_profile_new_create'] = 'Erstellen';
$txt['permissions_profile_name'] = 'Profilname';
$txt['permissions_profile_used_by'] = 'Benutzt von';
$txt['permissions_profile_used_by_one'] = 'Einem Board';
$txt['permissions_profile_used_by_many'] = '%1$d Boards';
$txt['permissions_profile_used_by_none'] = 'Keine Boards';
$txt['permissions_profile_do_edit'] = 'Bearbeiten';
$txt['permissions_profile_do_delete'] = 'L�schen';
$txt['permissions_profile_copy_from'] = 'Berechtigungen kopieren von';

$txt['permissions_includes_inherited'] = 'Vererbte Gruppen';

$txt['permissions_all'] = 'alle';
$txt['permissions_none'] = 'keine';
$txt['permissions_set_permissions'] = 'Berechtigungen speichern';

$txt['permissions_advanced_options'] = 'Erweiterte Optionen';
$txt['permissions_with_selection'] = 'Mit der Auswahl';
$txt['permissions_apply_pre_defined'] = 'Definiertes Berechtigungsprofil verwenden';
$txt['permissions_select_pre_defined'] = 'W�hle ein vordefiniertes Profil';
$txt['permissions_copy_from_board'] = 'Berechtigungen von diesem Board kopieren';
$txt['permissions_select_board'] = 'W�hlen Sie ein Board';
$txt['permissions_like_group'] = 'Setze Berechtigung wie diese Gruppe';
$txt['permissions_select_membergroup'] = 'W�hle Mitgliedergruppe';
$txt['permissions_add'] = 'F�ge Berechtigung hinzu';
$txt['permissions_remove'] = 'L�sche Berechtigung';
$txt['permissions_deny'] = 'Verbiete Berechtigung';
$txt['permissions_select_permission'] = 'W�hlen Sie eine Berechtigung';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Sie k�nnen nur eine Aktion zum editieren der Berechtigung w�hlen';
$txt['permissions_no_action'] = 'Keine Aktion ausgew�hlt';
$txt['permissions_deny_dangerous'] = 'Sie verbieten eine oder mehrere Berechtigungen.\\nDies kann unter Umst�nden unvorhergesehene Folgen nach sich ziehen, wenn Sie nicht kontrolliert haben, ob ein Mitglied \\"f�lschlicherweise\\" in der betreffenden Gruppe ist.\\n\\nSind Sie sicher, dass Sie fortfahren m�chten?';

$txt['permissions_modify_group'] = 'Gruppe �ndern';
$txt['permissions_general'] = 'Generelle Berechtigungen';
$txt['permissions_board'] = 'Globale Board Berechtigungen';
$txt['permissions_board_desc'] = 'Bitte beachten Sie, dass �nderungen am "Standard"-Profil s�mtliche Boards betreffen, welche dieses Profil verwenden.';
$txt['permissions_commit'] = '�nderungen speichern';
$txt['permissions_on'] = 'im Profil';
$txt['permissions_local_for'] = 'Lokale Berechtigungen f�r die Gruppe';
$txt['permissions_option_on'] = 'E';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'V';
$txt['permissions_option_desc'] = 'F�r jede Berechtigung k�nnen Sie \'Erlauben\' (E), \'Nicht erlauben\' (X) oder <span style="color: red;">\'Verbieten\' (V)</span> ausw�hlen.<br /><br />Beachten Sie: Wenn Sie eine Berechtigung verbieten, kann kein Mitglied - weder Moderator noch andere - in dieser Gruppe die betreffende Funktion nutzen.<br />Deshalb benutzen Sie diese Option mit gr��ter Sorgfalt und nur wenn es <strong>n�tig</strong> ist. \'Nicht erlauben\' verbietet nur so lange, bis es an anderer Stelle erlaubt wird.';
$txt['permissions_change_view'] = 'Ansicht wechseln';
$txt['permissions_view_simple'] = 'Einfach';
$txt['permissions_view_classic'] = 'Klassisch';

$txt['permissiongroup_general'] = 'Generell';
$txt['permissionname_view_stats'] = 'Forumstatistiken anschauen';
$txt['permissionhelp_view_stats'] = 'Die Forumstatistiken fassen alle Statistiken wie Mitgliederanzahl, t�glich geschriebene Beitr�ge und mehrere Top 10 Statistiken zusammen. Wenn Sie diese Berechtigung aktivieren, wird der Link (\'Weitere Statistiken\') im unteren Teil des Board-Index hinzugef�gt.';
$txt['permissionname_view_mlist'] = 'Mitgliederliste und Gruppen anzeigen';
$txt['permissionhelp_view_mlist'] = 'Die Mitgliederliste zeigt alle Mitglieder des Forums an. Sie kann sortiert und durchsucht werden und ist vom Board-Index und innerhalb der Statistiken verlinkt, wenn Sie dort auf die Mitgliederanzahl klicken. Sie gilt au�erdem f�r die Gruppen-Seite, welche eine Mini-Mitgliederliste mit Benutzern dieser Gruppe darstellt.';
$txt['permissionname_who_view'] = '\'Wer ist online\' anschauen';
$txt['permissionhelp_who_view'] = '\'Wer ist online\' zeigt alle Mitglieder, die aktuell online sind und was sie gerade machen. Diese Berechtigung funktioniert nur, wenn Sie die Funktion in den \'Forumeinstellungen\' aktiviert haben. Sie k�nnen die Aktionen anschauen, wenn Sie auf den Link \'Wer ist online\' im Board-Index klicken.';
$txt['permissionname_search_posts'] = 'Nach Beitr�gen und Themen suchen';
$txt['permissionhelp_search_posts'] = 'Die Berechtigung \'Suche\' erlaubt dem Benutzer alle Boards zu durchsuchen, auf die er zugreifen darf. Wenn diese Berechtigung aktiviert ist, befindet sich der \'Suchen\' Button in der Menuleiste.';
$txt['permissionname_karma_edit'] = 'Karma anderer Benutzer ver�ndern';
$txt['permissionhelp_karma_edit'] = 'Karma ist eine Funktion, die den Beliebtheitsgrad eines Benutzers anzeigt. Um sie benutzen zu k�nnen, m�ssen Sie es in den \'Forumeinstellungen\' aktiviert haben. Diese Berechtigung erlaubt es einer Mitgliedergruppe eine Wertung abzugeben und steht G�sten nicht zur Verf�gung.';

$txt['permissiongroup_pm'] = 'Private Mitteilungen';
$txt['permissionname_pm_read'] = 'Private Mitteilungen lesen';
$txt['permissionhelp_pm_read'] = 'Diese Berechtigung erlaubt dem Benutzer seine Privaten Mitteilungen zu lesen. Ohne diese Berechtigung kann er nicht auf diesen Bereich zugreifen.';
$txt['permissionname_pm_send'] = 'Private Mitteilungen senden';
$txt['permissionhelp_pm_send'] = 'Diese Berechtigung erlaubt dem Benutzer das Senden von Privaten Mitteilungen. Ben�tigt \'Private Mitteilungen lesen\'.';

$txt['permissiongroup_calendar'] = 'Kalender';
$txt['permissionname_calendar_view'] = 'Kalender anschauen';
$txt['permissionhelp_calendar_view'] = 'Der Kalender zeigt f�r jeden Monat die Geburtstage, Ereignisse und Feiertage an. Diese Berechtigung erlaubt den Zugriff auf den Kalender, blendet den entsprechenden Button in der Men�leiste ein und zeigt im Board-Index eine Liste mit den aktuellen und kommenden Geburtstagen, Ereignissen und Feiertagen. Der Kalender muss dazu unter \'Konfiguration - Kalender\' aktiviert werden.';
$txt['permissionname_calendar_post'] = 'Ereignisse im Kalender erstellen';
$txt['permissionhelp_calendar_post'] = 'Ereignisse sind Themen, die zu einem bestimmten Tag oder Zeitraum verlinkt werden. Ereignisse k�nnen nur im Kalender erstellt werden, wenn der Benutzer die Berechtigung hat, neue Beitr�ge zu erstellen.';
$txt['permissionname_calendar_edit'] = 'Ereignisse editieren';
$txt['permissionhelp_calendar_edit'] = 'Ereignisse sind Themen, die zu einem bestimmten Tag oder Zeitraum verlinkt werden. Sie k�nnen editiert werden, indem man auf den kleinen Stern (*) neben dem Ereignistitel im Kalender klickt. Um sie editieren zu k�nnen, ben�tigt der Benutzer ausreichend Rechte zum �ndern des ersten Beitrags des betreffenden Themas.';
$txt['permissionname_calendar_edit_own'] = 'Eigene Ereignisse';
$txt['permissionname_calendar_edit_any'] = 'Jedes Ereignis';

$txt['permissiongroup_maintenance'] = 'Forum Administration';
$txt['permissionname_admin_forum'] = 'Forum und Datenbank administrieren';
$txt['permissionhelp_admin_forum'] = 'Diese Berechtigung erlaubt dem Benutzer das:<ul class="normallist"><li>�ndern der Einstellungen des Forums, der Datenbank und der Themes</li><li>Verwalten von Paketen</li><li>Benutzen der Wartungsfunktionen</li><li>Anschauen der Fehler- bzw. Moderator-Protokollen</li></ul> Benutzen Sie diese Berechtigung mit Vorsicht, da sie sehr m�chtig ist.';
$txt['permissionname_manage_boards'] = 'Boards und Kategorien verwalten';
$txt['permissionhelp_manage_boards'] = 'Diese Berechtigung erlaubt das Erstellen, �ndern und L�schen von Boards oder Kategorien.';
$txt['permissionname_manage_attachments'] = 'Anh�nge und Benutzerbilder verwalten';
$txt['permissionhelp_manage_attachments'] = 'Diese Berechtigung erlaubt den Zugriff auf die Verwaltung der Dateianh�nge, wo alle Anh�nge und Benutzerbilder aufgelistet und entfernt werden k�nnen.';
$txt['permissionname_manage_smileys'] = 'Smileys und Nachrichtenicons verwalten';
$txt['permissionhelp_manage_smileys'] = 'Diese Berechtigung erlaubt den Zugriff auf die Smiley Verwaltung, wo Sie Smileys bzw. Smiley-Sets hinzuf�gen, �ndern und l�schen k�nnen. Wenn pers�nliche Beitragssymbole aktiviert sind, k�nnen diese ebenfalls mit dieser Berechtigung bearbeitet werden.';
$txt['permissionname_edit_news'] = 'News �ndern';
$txt['permissionhelp_edit_news'] = 'Diese Berechtigung erlaubt das �ndern der News-Meldungen. Um sie zu benutzen, muss die News Funktion in den Einstellungen aktiviert sein.';
$txt['permissionname_access_mod_center'] = 'Zugriff auf Moderator-Center';
$txt['permissionhelp_access_mod_center'] = 'Diese Berechtigung erlaubt den Mitgliedern den Zugang zum Moderator-Center. Dort haben sie Zugriff auf Funktionen, die das Moderieren im Forum vereinfach, jedoch keine weiteren Moderatorberechtigungen erhalten.';

$txt['permissiongroup_member_admin'] = 'Mitglieder Administration';
$txt['permissionname_moderate_forum'] = 'Mitglieder verwalten';
$txt['permissionhelp_moderate_forum'] = 'Diese Berechtigung beinhaltet alle wichtigen Funktionen der Mitgliederverwaltung:<ul><li>Zugriff auf die Registrierungsverwaltung</li><li>Zugriff auf den Mitglieder anzeigen/l�schen Bereich</li><li>erweiterte Profil Informationen, inkl. IP/Benutzer beobachten und (versteckten) Online Status</li><li>Aktivierung von Zug�ngen</li><li>Benachrichtigungen �ber Zustimmungen erhalten und aktivieren von Zug�ngen</li><li>immun gegen Ignorierfunktion der Privaten Mitteilungen</li><li>weitere kleine Funktionen</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Mitgliedergruppen verwalten und zuordnen';
$txt['permissionhelp_manage_membergroups'] = 'Diese Berechtigung erlaubt das Editieren von Mitgliedergruppen und zuordnen von Benutzern zu anderen Mitgliedergruppen.';
$txt['permissionname_manage_permissions'] = 'Berechtigungen verwalten';
$txt['permissionhelp_manage_permissions'] = 'Diese Berechtigung erlaubt das �ndern aller Berechtigungen einer Mitgliedergruppe bzw. eines Boards (global und lokal).';
$txt['permissionname_manage_bans'] = 'Bann-Liste verwalten';
$txt['permissionhelp_manage_bans'] = 'Diese Berechtigung erlaubt das Hinzuf�gen oder L�schen von Benutzernamen, IP-Adressen, Hostnamen und E-Mail-Adressen zu einer Liste von gebannten Benutzern. Sie erlaubt weiterhin das Anschauen bzw. L�schen von Protokolleintr�gen der gebannten Benutzer, die probieren sich wieder einzuloggen.';
$txt['permissionname_send_mail'] = 'Newsletter versenden';
$txt['permissionhelp_send_mail'] = 'Sendet eine E-Mail oder wahlweise eine Private Mitteilung an alle Mitglieder oder an eine bestimmte Gruppe. Ben�tigt die Berechtigung \'Private Mitteilungen senden\'.';
$txt['permissionname_issue_warning'] = 'Verwarnung erteilen';
$txt['permissionhelp_issue_warning'] = 'Verteilt eine Warnung an Benutzer und ver�ndert deren Verwarnungslevel. Das Verwarnungssystem muss aktiviert sein.';

$txt['permissiongroup_profile'] = 'Benutzerprofile';
$txt['permissionname_profile_view'] = 'Profil und Statistiken anschauen';
$txt['permissionhelp_profile_view'] = 'Diese Berechtigung erlaubt das Anklicken des Benutzernamens und somit das Betrachten des Profils, der Statistiken und den Beitr�gen des Benutzers.';
$txt['permissionname_profile_view_own'] = 'Eigenes Profil';
$txt['permissionname_profile_view_any'] = 'Alle Profile';
$txt['permissionname_profile_identity'] = 'Benutzerkonto-Einstellungen';
$txt['permissionhelp_profile_identity'] = 'Benutzerkonto-Einstellungen sind die einfachsten Einstellungen im Profil des Benutzers wie Passwort, E-Mail, Mitgliedergruppe und bevorzugte Sprache.';
$txt['permissionname_profile_identity_own'] = 'Eigenes Profil';
$txt['permissionname_profile_identity_any'] = 'Alle Profile';
$txt['permissionname_profile_extra'] = 'Erweiterte Profileinstellungen';
$txt['permissionhelp_profile_extra'] = 'Erweiterte Profileinstellungen inklusive Optionen f�r das Benutzerbild, Theme-Einstellungen, Benachrichtigungen und Private Mitteilungen.';
$txt['permissionname_profile_extra_own'] = 'Eigenes Profil';
$txt['permissionname_profile_extra_any'] = 'Alle Profile';
$txt['permissionname_profile_title'] = 'Pers�nlichen Titel �ndern';
$txt['permissionhelp_profile_title'] = 'Der pers�nliche Titel wird im Beitrag unterhalb des Namens angezeigt (wenn f�r diesen Benutzer vorhanden).';
$txt['permissionname_profile_title_own'] = 'Eigenes Profil';
$txt['permissionname_profile_title_any'] = 'Alle Profile';
$txt['permissionname_profile_remove'] = 'Benutzerkonto l�schen';
$txt['permissionhelp_profile_remove'] = 'Diese Berechtigung erlaubt dem Benutzer sein Benutzerkonto zu l�schen, wenn sie auf \'Eigenes Profil\' gestellt ist.';
$txt['permissionname_profile_remove_own'] = 'Eigenes Benutzerkonto';
$txt['permissionname_profile_remove_any'] = 'Jedes Benutzerkonto';
$txt['permissionname_profile_server_avatar'] = 'W�hlen Sie ein Benutzerbild vom Server';
$txt['permissionhelp_profile_server_avatar'] = 'Aktivieren Sie die Option, um den Benutzern die M�glichkeit zu geben, ein auf diesem Server gespeichertes Benutzerbild auszuw�hlen.';
$txt['permissionname_profile_upload_avatar'] = 'Benutzerbild auf diesen Server hochladen';
$txt['permissionhelp_profile_upload_avatar'] = 'Erlaubt den Benutzern das Hochladen ihrer eigenen Benutzerbilder auf diesen Server.';
$txt['permissionname_profile_remote_avatar'] = 'Externes Benutzerbild w�hlen';
$txt['permissionhelp_profile_remote_avatar'] = 'Externe Benutzerbilder k�nnen die Geschwindigkeit des Forums herabsetzen, so dass es sinnvoll ist, bestimmten Gruppen dieses Recht zu entziehen. ';

$txt['permissiongroup_general_board'] = 'Generell';
$txt['permissionname_moderate_board'] = 'Board moderieren';
$txt['permissionhelp_moderate_board'] = 'Diese Berechtigung gibt dem Moderator weitere Funktionen, die ihn zu einem richtigen Moderator zu machen. Das umfasst die M�glichkeit auf geschlossene Themen zu antworten, die Ablaufzeit von Umfragen zu �ndern und die Umfragenergebnisse jederzeit einzusehen.';

$txt['permissiongroup_topic'] = 'Themen';
$txt['permissionname_post_new'] = 'Neues Thema erstellen';
$txt['permissionhelp_post_new'] = 'Diese Berechtigung erlaubt dem Benutzer neue Themen zu starten. Sie erlaubt jedoch nicht, auf Themen zu antworten.';
$txt['permissionname_merge_any'] = 'Themen zusammenf�hren';
$txt['permissionhelp_merge_any'] = 'F�hrt zwei oder mehr Themen zusammen. Die Reihenfolge der Beitr�ge basiert auf der Zeit, wann diese geschrieben worden sind, d.h. der �lteste Beitrag ist am Schluss des neuen Themas. Der Benutzer kann nur Themen in Boards zusammenf�hren, zu denen er auch Zugriff hat. Um gleichzeitig mehrere Themen zusammen zu f�hren, muss die Funktion Schnellmoderation im Profil aktiviert sein.';
$txt['permissionname_split_any'] = 'Thema teilen';
$txt['permissionhelp_split_any'] = 'Teilt ein Thema in zwei einzelne Themen.';
$txt['permissionname_send_topic'] = 'Thema an ein Freund senden';
$txt['permissionhelp_send_topic'] = 'Diese Berechtigung erlaubt es dem Benutzer, einem Freund einen Hinweis auf ein Thema per E-Mail zu senden. Dazu muss er die E-Mail-Adresse eingeben und kann einen Nachricht dazu verfassen.';
$txt['permissionname_make_sticky'] = 'Fixiertes Thema erstellen';
$txt['permissionhelp_make_sticky'] = 'Fixierte Themen werden immer als erste Themen in einem Board angezeigt. Sie sind n�tzlich f�r Ank�ndigungen oder wichtige Hinweise.';
$txt['permissionname_move'] = 'Thema verschieben';
$txt['permissionhelp_move'] = 'Verschiebt ein Thema von einem Board in ein anderes. Die Benutzer k�nnen nur die Boards als Ziel w�hlen, auf welche sie Zugriff haben.';
$txt['permissionname_move_own'] = 'Eigenes Thema';
$txt['permissionname_move_any'] = 'Jedes Thema';
$txt['permissionname_lock'] = 'Themen schlie�en';
$txt['permissionhelp_lock'] = 'Diese Berechtigung erlaubt dem Benutzer das Schlie�en von Themen. Danach kann kein Benutzer mehr auf das Thema antworten, au�er Benutzer mit \'Moderator\' Rechten.';
$txt['permissionname_lock_own'] = 'Eigene Themen';
$txt['permissionname_lock_any'] = 'Alle Themen';
$txt['permissionname_remove'] = 'Themen l�schen';
$txt['permissionhelp_remove'] = 'Diese Berechtigung erlaubt das L�schen ganzer Themen. Bitte beachten Sie, dass mit dieser Funktion keine einzelnen Beitr�ge gel�scht werden d�rfen!';
$txt['permissionname_remove_own'] = 'Eigene Themen';
$txt['permissionname_remove_any'] = 'Alle Themen';
$txt['permissionname_post_reply'] = 'Antworten auf Themen schreiben';
$txt['permissionhelp_post_reply'] = 'Diese Berechtigung erlaubt das Antworten auf Themen.';
$txt['permissionname_post_reply_own'] = 'Eigene Themen';
$txt['permissionname_post_reply_any'] = 'Alle Themen';
$txt['permissionname_modify_replies'] = 'Antworten auf eigene Themen �ndern';
$txt['permissionhelp_modify_replies'] = 'Diese Berechtigung erlaubt das nachtr�gliche �ndern aller Beitr�ge in einem vom ihm erstellten Themen.';
$txt['permissionname_delete_replies'] = 'Antworten auf eigene Themen l�schen';
$txt['permissionhelp_delete_replies'] = 'Diese Berechtigung erlaubt es dem Benutzer, alle Antworten auf ein von ihm erstelltes Thema zu l�schen.';
$txt['permissionname_announce_topic'] = 'Thema ank�ndigen';
$txt['permissionhelp_announce_topic'] = 'Diese Berechtigung erlaubt das Senden einer Ank�ndigungs-E-Mail �ber ein Thema an alle Mitglieder oder an bestimmte Mitgliedergruppen.';

$txt['permissiongroup_post'] = 'Beitr�ge';
$txt['permissionname_delete'] = 'Beitr�ge l�schen';
$txt['permissionhelp_delete'] = 'Erlaubt dem Benutzer Beitr�ge zu l�schen, erlaubt jedoch nicht, den ersten Beitrag eines Themas zu l�schen.';
$txt['permissionname_delete_own'] = 'Eigener Beitrag';
$txt['permissionname_delete_any'] = 'Alle Beitr�ge';
$txt['permissionname_modify'] = 'Beitr�ge editieren';
$txt['permissionhelp_modify'] = 'Erlaubt das Editieren von Beitr�gen';
$txt['permissionname_modify_own'] = 'Eigener Beitrag';
$txt['permissionname_modify_any'] = 'Alle Beitr�ge';
$txt['permissionname_report_any'] = 'Beitr�ge dem Moderator melden';
$txt['permissionhelp_report_any'] = 'Diese Berechtigung f�gt einen Link zu jedem Beitrag hinzu, welcher es dem Benutzer erlaubt, diesen einem Moderator zu melden. Bei einer Meldung erhalten alle Moderatoren des Boards diese Nachricht mit einer Beschreibung des Benutzers und dem Link zum entsprechenden Beitrag.';

$txt['permissiongroup_poll'] = 'Umfragen';
$txt['permissionname_poll_view'] = 'Umfrage anschauen';
$txt['permissionhelp_poll_view'] = 'Diese Berechtigung erlaubt dem Benutzer das Anschauen einer Umfrage. Ohne diese Berechtigung sieht der Benutzer nur das Thema ohne die Umfrage.';
$txt['permissionname_poll_vote'] = 'Abstimmen in Umfragen';
$txt['permissionhelp_poll_vote'] = 'Diese Berechtigung erlaubt einem registrierten Benutzer das Abgeben einer Stimme bei Umfragen. Die Funktion gilt nicht f�r G�ste.';
$txt['permissionname_poll_post'] = 'Umfragen erstellen';
$txt['permissionhelp_poll_post'] = 'Diese Berechtigung erlaubt dem Benutzer eine neue Umfrage zu erstellen. Er ben�tigt aber zus�tzlich die "neue Themen erstellen" Berechtigung.';
$txt['permissionname_poll_add'] = 'Umfragen zu Themen hinzuf�gen';
$txt['permissionhelp_poll_add'] = 'F�gt einen Umfrage zu einem existierenden Thema hinzu. Diese Berechtigung erfordert die M�glichkeit, den ersten Beitrag eines Themas zu �ndern.';
$txt['permissionname_poll_add_own'] = 'Eigene Themen';
$txt['permissionname_poll_add_any'] = 'Alle Themen';
$txt['permissionname_poll_edit'] = 'Umfragen editieren';
$txt['permissionhelp_poll_edit'] = 'Diese Berechtigung erlaubt die �nderung einer bestehenden Umfrage sowie das Zur�cksetzen der Stimmen auf Null. Um die Anzahl der max. abzugebenen Stimmen und die Laufzeit der Umfrage zu �ndern, muss der Benutzer \'Moderator\' Rechte besitzen.';
$txt['permissionname_poll_edit_own'] = 'Eigene Umfrage';
$txt['permissionname_poll_edit_any'] = 'Alle Umfragen';
$txt['permissionname_poll_lock'] = 'Umfragen schlie�en';
$txt['permissionhelp_poll_lock'] = 'Verhindert das weitere Abstimmen in der betreffenden Umfrage.';
$txt['permissionname_poll_lock_own'] = 'Eigene Umfragen';
$txt['permissionname_poll_lock_any'] = 'Alle Umfragen';
$txt['permissionname_poll_remove'] = 'Umfragen l�schen';
$txt['permissionhelp_poll_remove'] = 'Diese Berechtigung erlaubt das L�schen einer Umfrage.';
$txt['permissionname_poll_remove_own'] = 'Eigene Umfrage';
$txt['permissionname_poll_remove_any'] = 'Alle Umfragen';

$txt['permissiongroup_approval'] = 'Beitragsmoderation';
$txt['permissionname_approve_posts'] = 'Ausstehende Moderationspunkte genehmigen';
$txt['permissionhelp_approve_posts'] = 'Diese Berechtigung erlaubt dem Benutzer alle noch nicht genehmigten Moderationspunkte im Forum zu genehmigen.';
$txt['permissionname_post_unapproved_replies'] = 'Zu genehmigende Antwort schreiben';
$txt['permissionhelp_post_unapproved_replies'] = 'Diese Berechtigung erlaubt dem Benutzer eine Antwort zu schreiben, die nicht angezeigt wird, bevor ein Moderator sie genehmigt hat.';
$txt['permissionname_post_unapproved_replies_own'] = 'Eigene Themen';
$txt['permissionname_post_unapproved_replies_any'] = 'Alle Themen';
$txt['permissionname_post_unapproved_topics'] = 'Zu genehmigendes Thema erstellen';
$txt['permissionhelp_post_unapproved_topics'] = 'Diese Berechtigung erlaubt dem Benutzer ein Thema zu erstellen, das nicht angezeigt wird, bevor ein Moderator es genehmigt hat.';
$txt['permissionname_post_unapproved_attachments'] = 'Zu genehmigenden Dateianhang hinzuf�gen';
$txt['permissionhelp_post_unapproved_attachments'] = 'Diese Berechtigung erlaubt dem Benutzer einen Dateianhang hinzuzuf�gen. Dieser wird erst f�r alle Mitglieder angezeigt wenn ein Moderator ihn genehmigt hat.';

$txt['permissiongroup_notification'] = 'Benachrichtigungen';
$txt['permissionname_mark_any_notify'] = 'Benachrichtigung bei neuen Antworten';
$txt['permissionhelp_mark_any_notify'] = 'Diese Berechtigung erlaubt das Einstellen von Benachrichtigungen f�r gew�nschte Themen.';
$txt['permissionname_mark_notify'] = 'Benachrichtigung bei neuen Themen';
$txt['permissionhelp_mark_notify'] = 'Diese Berechtigung erlaubt das Aktivieren von Benachrichtigungen bei Boards, sobald ein neues Thema in diesem geschrieben wurde.';

$txt['permissiongroup_attachment'] = 'Dateianh�nge';
$txt['permissionname_view_attachments'] = 'Dateianh�nge anschauen';
$txt['permissionhelp_view_attachments'] = 'Dateianh�nge sind Dateien, die an einen Beitrag angef�gt worden sind. Diese Funktion kann im Bereich \'Dateien verwalten\' aktiviert und eingestellt werden. Dateianh�nge sind nicht direkt anw�hlbar und k�nnen f�r die Benutzer blockiert werden, die diese Berechtigung nicht besitzen.';
$txt['permissionname_post_attachment'] = 'Dateianh�nge erstellen';
$txt['permissionhelp_post_attachment'] = 'Dateianh�nge sind Dateien, die an einen Beitrag angef�gt worden sind. Ein Beitrag kann mehrere Dateianh�nge enthalten.';

$txt['permissiongroup_simple_view_basic_info'] = 'Grundlegende Funktionen benutzen';
$txt['permissiongroup_simple_use_pm_system'] = 'Mitglieder mit Privaten Mitteilungen kontaktieren';
$txt['permissiongroup_simple_post_calendar'] = 'Ereignisse im Kalender erstellen';
$txt['permissiongroup_simple_edit_profile'] = 'Profil bearbeiten';
$txt['permissiongroup_simple_delete_account'] = 'Profil l�schen';
$txt['permissiongroup_simple_use_avatar'] = 'Benutzerbild ausw�hlen oder hochladen';
$txt['permissiongroup_simple_moderate_general'] = 'Gesamtes Forum moderieren';
$txt['permissiongroup_simple_administrate'] = 'Administrative Aufgaben ausf�hren';

$txt['permissionname_simple_calendar_edit_own'] = 'Eigene Kalenderereignisse editieren';
$txt['permissionname_simple_calendar_edit_any'] = 'Alle Kalenderereignisse editieren';
$txt['permissionname_simple_profile_view_own'] = 'Eigenes Profil anschauen';
$txt['permissionname_simple_profile_view_any'] = 'Alle Profile anschauen';
$txt['permissionname_simple_profile_identity_own'] = 'Eigenes Benutzerkonto editieren';
$txt['permissionname_simple_profile_identity_any'] = 'Alle Benutzerkonten editieren';
$txt['permissionname_simple_profile_extra_own'] = 'Eigene erweiterte Einstellungen editieren';
$txt['permissionname_simple_profile_extra_any'] = 'Alle erweiterten Einstellungen editieren';
$txt['permissionname_simple_profile_title_own'] = 'Eigenen pers�nlichen Titel editieren';
$txt['permissionname_simple_profile_title_any'] = 'Alle pers�nlichen Titel editieren';
$txt['permissionname_simple_profile_remove_own'] = 'Eigenes Profil l�schen';
$txt['permissionname_simple_profile_remove_any'] = 'Alle Profile l�schen';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Themen und Antworten ohne Genehmigung erstellen';
$txt['permissiongroup_simple_make_posts'] = 'Themen und Antworten erstellen';
$txt['permissiongroup_simple_post_polls'] = 'Neue Umfragen erstellen';
$txt['permissiongroup_simple_participate'] = 'Erweiterten Inhalt anschauen';
$txt['permissiongroup_simple_modify'] = 'Eigene Beitr�ge editieren';
$txt['permissiongroup_simple_notification'] = 'Benachrichtigungen anfordern';
$txt['permissiongroup_simple_attach'] = 'Dateianh�nge erstellen';
$txt['permissiongroup_simple_moderate'] = 'Gesamtes Forum moderieren';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Antworten ohne Genehmigung zu selbst erstellten Themen schreiben';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Antworten ohne Genehmigung zu allen Themen schreiben';
$txt['permissionname_simple_post_reply_own'] = 'Antworten zu selbst erstellten Themen schreiben';
$txt['permissionname_simple_post_reply_any'] = 'Antworten zu allen Themen schreiben';
$txt['permissionname_simple_move_own'] = 'Eigene Themen verschieben';
$txt['permissionname_simple_move_any'] = 'Alle Themen verschieben';
$txt['permissionname_simple_lock_own'] = 'Eigene Themen schlie�en';
$txt['permissionname_simple_lock_any'] = 'Alle Themen schlie�en';
$txt['permissionname_simple_remove_own'] = 'Eigene Themen l�schen';
$txt['permissionname_simple_remove_any'] = 'Alle Themen l�schen';
$txt['permissionname_simple_delete_own'] = 'Eigene Beitr�ge l�schen';
$txt['permissionname_simple_delete_any'] = 'Alle Beitr�ge l�schen';
$txt['permissionname_simple_modify_own'] = 'Eigene Beitr�ge editieren';
$txt['permissionname_simple_modify_any'] = 'Alle Beitr�ge editieren';
$txt['permissionname_simple_poll_add_own'] = 'Umfrage zu selbst erstellten Themen hinzuf�gen';
$txt['permissionname_simple_poll_add_any'] = 'Umfrage zu allen Themen hinzuf�gen';
$txt['permissionname_simple_poll_edit_own'] = 'Eigene Umfrage editieren';
$txt['permissionname_simple_poll_edit_any'] = 'Alle Umfagen editieren';
$txt['permissionname_simple_poll_lock_own'] = 'Eigene Umfragen schlie�en';
$txt['permissionname_simple_poll_lock_any'] = 'Alle Umfragen schlie�en';
$txt['permissionname_simple_poll_remove_own'] = 'Eigene Umfragen l�schen';
$txt['permissionname_simple_poll_remove_any'] = 'Alle Umfragen l�schen';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Einstellungen';
$txt['groups_manage_permissions'] = 'Gruppen, die Berechtigungen verwalten d�rfen';
$txt['permission_settings_submit'] = 'Speichern';
$txt['permission_settings_enable_deny'] = 'Verbieten von Berechtigungen aktivieren';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Das Deaktivieren dieser Option �ndert die \\\'Verboten\\\'-Berechtigung in \\\'Nicht erlauben\\\'.';
$txt['permission_by_board_desc'] = 'Hier k�nnen Sie einstellen, ob ein Board die globalen Berechtigungen benutzt oder ein eigenes Schema verwendet. Sollten Sie lokale Berechtigungen verwenden, k�nnen Sie im betreffenden Board f�r jede Mitgliedergruppe individuelle Berechtigungen angeben.';
$txt['permission_settings_desc'] = 'W�hlen Sie hier, wer die Erlaubnis zum �ndern der Berechtigungen hat und wie komplex das Berechtigungssystem sein soll.';
$txt['permission_settings_enable_postgroups'] = 'Berechtigungen f�r beitragsbasierende Gruppen aktivieren';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Das Deaktivieren dieser Option entfernt die gesetzten Berechtigungen der beitragsbasierenden Gruppen.';

$txt['permissions_post_moderation_desc'] = 'Hier k�nnen Sie bestimmen, welche Gruppen Ihre Beitr�ge in bestimmten Berechtigungsprofilen genehmigen lassen m�ssen.';
$txt['permissions_post_moderation_deny_note'] = 'Sollten Sie die erweiterten Berechtigungen aktiviert haben, k�nnen Sie von dieser Seite aus keine Berechtigung "Verbieten (V)". Bitte editieren Sie die betreffende Berechtigung direkt, um sie zu verbieten.';
$txt['permissions_post_moderation_select'] = 'Profil ausw�hlen';
$txt['permissions_post_moderation_new_topics'] = 'Neue Themen';
$txt['permissions_post_moderation_replies_own'] = 'Eigene Antworten';
$txt['permissions_post_moderation_replies_any'] = 'Alle Antworten';
$txt['permissions_post_moderation_attachments'] = 'Dateianh�nge';
$txt['permissions_post_moderation_legend'] = 'Legende';
$txt['permissions_post_moderation_allow'] = 'Kann erstellen';
$txt['permissions_post_moderation_moderate'] = 'Kann mit Genehmigung erstellen';
$txt['permissions_post_moderation_disallow'] = 'Kann nicht erstellen';
$txt['permissions_post_moderation_group'] = 'Gruppe';

$txt['auto_approve_topics'] = 'Themen automatisch genehmigen';
$txt['auto_approve_replies'] = 'Antworten automatisch genehmigen';
$txt['auto_approve_attachments'] = 'Dateianh�nge automatisch genehmigen';

?>