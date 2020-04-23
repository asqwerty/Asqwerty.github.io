<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Gruppen';
$txt['viewing_groups'] = 'Mitgliedergruppen anzeigen';

$txt['membergroups_title'] = 'Mitgliedergruppen editieren';
$txt['membergroups_description'] = 'Mitgliedergruppen sind Gruppen von Benutzern, welche die gleichen Berechtigungen, Zugriffe und das gleiche Erscheinungsbild im Forum haben. Manche Gruppen basieren auf der Zahl der Beitr�ge. Sie k�nnen Mitglieder zu einer Gruppe hinzuf�gen, indem Sie ihr Profil �ffnen und die Benutzerkonto-Einstellungen �ndern.';
$txt['membergroups_modify'] = '�ndern';

$txt['membergroups_add_group'] = 'Gruppe hinzuf�gen';
$txt['membergroups_regular'] = 'Regul�re Gruppen';
$txt['membergroups_post'] = 'Beitragsbasierende Gruppen';

$txt['membergroups_group_name'] = 'Name der Mitgliedergruppe';
$txt['membergroups_new_board'] = 'Sichtbare Boards';
$txt['membergroups_new_board_desc'] = 'Boards, welche die Mitgliedergruppe sehen kann.';
$txt['membergroups_new_board_post_groups'] = '<em>Achtung: Beitragsabh�ngige Gruppen brauchen normalerweise keinen Zugriff auf die betreffenden Boards, da die Mitglieder durch ihre speziellen Benutzergruppen den Zugriff erhalten.</em>';
$txt['membergroups_new_as_inherit'] = 'Vererben von';
$txt['membergroups_new_as_type'] = 'Vom Typ';
$txt['membergroups_new_as_copy'] = 'Basierend auf';
$txt['membergroups_new_copy_none'] = '(keine)';
$txt['membergroups_can_edit_later'] = 'Sie k�nnen diese sp�ter ver�ndern.';

$txt['membergroups_edit_group'] = 'Gruppe �ndern';
$txt['membergroups_edit_name'] = 'Name der Gruppe';
$txt['membergroups_edit_inherit_permissions'] = 'Vererbte Berechtigungen';
$txt['membergroups_edit_inherit_permissions_desc'] = 'W�hlen sie "Nein" um der Gruppe ein eigenes Berechtigungprofil zuzuweisen.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Nein - benutze eigene Berechtigungen';
$txt['membergroups_edit_inherit_permissions_from'] = 'Vererbt von';
$txt['membergroups_edit_hidden'] = 'Sichtbarkeit';
$txt['membergroups_edit_hidden_no'] = 'Sichtbar';
$txt['membergroups_edit_hidden_boardindex'] = 'Sichtbar - Au�er im Gruppenschl�ssel';
$txt['membergroups_edit_hidden_all'] = 'Unsichtbar';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Sind Sie sicher, dass diese Gruppe nicht als prim�re Gruppe zugeordnet werden kann?\\n\\nWenn Sie die Einstellung t�tigen, kann diese Gruppe nur noch als zus�tzliche Mitgliedergruppe zugewiesen werden. Bei alle Benutzerkonten, die sie als prim�re Gruppe eingestellt haben, wird sie zu einer zusa�tzliche Gruppe ge�ndert.';
$txt['membergroups_edit_desc'] = 'Gruppenbeschreibung';
$txt['membergroups_edit_group_type'] = 'Gruppen-Typ';
$txt['membergroups_edit_select_group_type'] = 'Gruppen-Typ ausw�hlen';
$txt['membergroups_group_type_private'] = 'Privat <span class="smalltext">(Mitgliedschaft muss zugewiesen werden)</span>';
$txt['membergroups_group_type_protected'] = 'Gesch�tzt <span class="smalltext">(Nur Administratoren k�nnen verwalten und zuweisen)</span>';
$txt['membergroups_group_type_request'] = 'Anforderbar <span class="smalltext">(Benutzer muss die Mitgliedschaft anfordern)</span>';
$txt['membergroups_group_type_free'] = 'Frei <span class="smalltext">(Benutzer kann der Gruppe selbstst�ndig beitreten oder sie verlassen)</span>';
$txt['membergroups_group_type_post'] = 'Beitragsabh�ngig <span class="smalltext">(Mitgliedschaft basiert auf der Beitragszahl)</span>';
$txt['membergroups_min_posts'] = 'Ben�tigte Beitr�ge';
$txt['membergroups_online_color'] = 'Farbe in Onlineliste';
$txt['membergroups_star_count'] = 'Anzahl der Sterne';
$txt['membergroups_star_image'] = 'Name des Sternenbildes';
$txt['membergroups_star_image_note'] = 'Sie k�nnen \'$language\' f�r die Benutzersprache nehmen';
$txt['membergroups_max_messages'] = 'Max. Private Mitteilungen';
$txt['membergroups_max_messages_note'] = '0 = unlimitiert';
$txt['membergroups_edit_save'] = 'Speichern';
$txt['membergroups_delete'] = 'L�schen';
$txt['membergroups_confirm_delete'] = 'Sind Sie sicher, dass Sie diese Gruppe l�schen m�chten?';

$txt['membergroups_members_title'] = 'Alle Mitglieder der Gruppe anzeigen';
$txt['membergroups_members_group_members'] = 'Gruppenmitglieder';
$txt['membergroups_members_no_members'] = 'Diese Gruppe ist momentan leer';
$txt['membergroups_members_add_title'] = 'F�ge einen Benutzer zu dieser Gruppe hinzu';
$txt['membergroups_members_add_desc'] = 'Liste der hinzu zuf�genden Benutzer';
$txt['membergroups_members_add'] = 'Mitglieder hinzuf�gen';
$txt['membergroups_members_remove'] = 'Aus Gruppe entfernen';
$txt['membergroups_members_last_active'] = 'Letzter Besuch';
$txt['membergroups_members_additional_only'] = 'Nur als weitere Gruppen hinzuf�gen.';
$txt['membergroups_members_group_moderators'] = 'Gruppenmoderatoren';
$txt['membergroups_members_description'] = 'Beschreibung';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Sind Sie sicher, dass Sie sich selbst von der Gruppe der Administratoren entfernen wollen?';

$txt['membergroups_postgroups'] = 'Beitragsgruppen';
$txt['membergroups_settings'] = 'Einstellungen';
$txt['groups_manage_membergroups'] = 'Gruppen, die Mitgliedergruppen ver�ndern d�rfen';
$txt['membergroups_select_permission_type'] = 'W�hlen Sie das Berechtigungsprofil';
$txt['membergroups_images_url'] = '{Theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'Boards anzeigen';
$txt['membergroups_members_top'] = 'Mitglieder';
$txt['membergroups_name'] = 'Name';
$txt['membergroups_stars'] = 'Sterne';

$txt['admin_browse_approve'] = 'Mitglieder, deren Benutzerkonto eine Genehmigung erfordert';
$txt['admin_browse_approve_desc'] = 'Auflistung der Mitglieder, welche eine Genehmigung f�r ihr Benutzerkonto ben�tigen.';
$txt['admin_browse_activate'] = 'Mitglieder, deren Benutzerkonto aktiviert werden muss';
$txt['admin_browse_activate_desc'] = 'Auflistung aller Mitglieder, welche Ihr Benutzerkonto noch nicht aktiviert haben.';
$txt['admin_browse_awaiting_approval'] = 'Erwartete Genehmigungen (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'Erwartete Aktivierungen (%1$d)';

$txt['admin_browse_username'] = 'Benutzername';
$txt['admin_browse_email'] = 'E-Mail-Adresse';
$txt['admin_browse_ip'] = 'IP-Adresse';
$txt['admin_browse_registered'] = 'Registriert';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Mit Ausgew�hlten';
$txt['admin_browse_no_members_approval'] = 'Keine Mitglieder erwarten eine Genehmigung.';
$txt['admin_browse_no_members_activate'] = 'Keine Mitglieder m�ssen Ihr Benutzerkonto noch aktivieren';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'alle ausgew�hlten Mitglieder?';
$txt['admin_browse_outstanding_warn'] = 'alle betroffenen Mitglieder?';
$txt['admin_browse_w_approve'] = 'Stimme zu';
$txt['admin_browse_w_activate'] = 'Aktiviere';
$txt['admin_browse_w_delete'] = 'L�sche';
$txt['admin_browse_w_reject'] = 'Ablehnen';
$txt['admin_browse_w_remind'] = 'Erinnere';
$txt['admin_browse_w_approve_deletion'] = 'Genehmige (Benutzerkonto l�schen)';
$txt['admin_browse_w_email'] = 'und sende E-Mail';
$txt['admin_browse_w_approve_require_activate'] = 'Genehmige und erwarte Aktivierung';

$txt['admin_browse_filter_by'] = 'Filtern nach';
$txt['admin_browse_filter_show'] = 'Anzeigen';
$txt['admin_browse_filter_type_0'] = 'Neuen, nicht aktivierten Benutzerkonten';
$txt['admin_browse_filter_type_2'] = 'Nicht aktivierten E-Mail-Adressen';
$txt['admin_browse_filter_type_3'] = 'Neuen, nicht genehmigten Benutzerkonten';
$txt['admin_browse_filter_type_4'] = 'Nicht genehmigten, gel�schten Benutzerkonten';
$txt['admin_browse_filter_type_5'] = 'Nicht genehmigten, altersbeschr�nkten Benutzerkonten';

$txt['admin_browse_outstanding'] = 'Aussenstehende Mitglieder';
$txt['admin_browse_outstanding_days_1'] = 'Alle Mitglieder, welche l�nger registriert sind wie';
$txt['admin_browse_outstanding_days_2'] = 'Tage';
$txt['admin_browse_outstanding_perform'] = 'Folgende Aktionen ausf�hren';
$txt['admin_browse_outstanding_go'] = 'Ausf�hren';

$txt['check_for_duplicate'] = 'Nach Duplikaten suchen';
$txt['dont_check_for_duplicate'] = 'Nicht nach Duplikaten suchen';
$txt['duplicates'] = 'Duplikate';

$txt['not_activated'] = 'Deaktiviert';

?>