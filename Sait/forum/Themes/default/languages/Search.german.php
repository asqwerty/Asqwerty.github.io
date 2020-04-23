<?php
// Version: 2.0; Search

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['set_parameters'] = 'Suchparameter festlegen';
$txt['choose_board'] = 'W�hlen Sie eine Kategorie aus, in welcher gesucht werden soll oder durchsuchen Sie alle';
$txt['all_words'] = '�bereinstimmung aller W�rter';
$txt['any_words'] = '�bereinstimmung eines Wortes';
$txt['by_user'] = 'Nach Benutzer';

$txt['search_post_age'] = 'Alter des Beitrags';
$txt['search_between'] = 'Zwischen';
$txt['search_and'] = 'und';
$txt['search_options'] = 'Optionen';
$txt['search_show_complete_messages'] = 'Ergebnisse als Beitr�ge anzeigen';
$txt['search_subject_only'] = 'Nur Betreff der Themen';
$txt['search_relevance'] = 'Relevanz';
$txt['search_date_posted'] = 'Erstellt am';
$txt['search_order'] = 'Suchreihenfolge';
$txt['search_orderby_relevant_first'] = 'H�chste Relevanz zuerst';
$txt['search_orderby_large_first'] = 'Gr��tes Thema zuerst';
$txt['search_orderby_small_first'] = 'Kleinstes Thema zuerst';
$txt['search_orderby_recent_first'] = 'Neuestes Thema zuerst';
$txt['search_orderby_old_first'] = '�ltestes Thema zuerst';
$txt['search_visual_verification_label'] = 'Verifizierung';
$txt['search_visual_verification_desc'] = 'Bitte geben Sie den Code aus dem Bild ein, um die Suche zu benutzen.';

$txt['search_specific_topic'] = 'Suche nur Beitr�ge im Thema';

$txt['mods_cat_search'] = 'Suche';
$txt['groups_search_posts'] = 'Mitgliedergruppen mit Zugriff auf die Suchfunktion';
$txt['simpleSearch'] = 'Einfache Suche aktivieren';
$txt['search_results_per_page'] = 'Anzahl der Suchergebnisse pro Seite';
$txt['search_weight_frequency'] = 'Relative Gewichtung f�r die Anzahl der �bereinstimmenden Beitr�ge innerhalb eines Themas';
$txt['search_weight_age'] = 'Relative Gewichtung f�r das Alter der neuesten �bereinstimmung';
$txt['search_weight_length'] = 'Relative Gewichtung der Themenl�nge';
$txt['search_weight_subject'] = 'Relative Gewichtung f�r die �bereinstimmung des Betreffs';
$txt['search_weight_first_message'] = 'Relative Gewichtung f�r die �bereinstimmung im ersten Beitrag';
$txt['search_weight_sticky'] = 'Relative Gewichtung f�r fixierte Themen';

$txt['search_settings_desc'] = 'Hier k�nnen Sie die Einstellungen der Suchfunktion ver�ndern.';
$txt['search_settings_title'] = 'Einstellungen der Suchfunktion';

$txt['search_weights_desc'] = 'Hier k�nnen Sie die Relevanz der Suchergebnisse individuell einstellen. ';
$txt['search_weights_title'] = 'Suchgewichtung';
$txt['search_weights_total'] = 'Gesamt';
$txt['search_weights_save'] = 'Speichern';

$txt['search_method_desc'] = 'Hier k�nnen Sie die Funktionsweise der Suche w�hlen.';
$txt['search_method_title'] = 'Suchmethode';
$txt['search_method_save'] = 'Speichern';
$txt['search_method_messages_table_space'] = 'Benutzter Speicher von den Beitr�gen in der Datenbank';
$txt['search_method_messages_index_space'] = 'Benutzter Speicher f�r den Beitragsindex in der Datenbank';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Volltext-Index';
$txt['search_method_no_index_exists'] = 'existiert momentan nicht';
$txt['search_method_fulltext_create'] = 'Erstelle Volltext-Index';
$txt['search_method_fulltext_cannot_create'] = 'konnte nicht erstellt werden, da die max. Beitragsl�nge gr��er als 65,535 ist';
$txt['search_method_index_already_exists'] = 'bereits erstellt';
$txt['search_method_fulltext_remove'] = 'L�sche Volltext-Index';
$txt['search_method_index_partial'] = 'teilweise erstellt';
$txt['search_index_custom_resume'] = 'fortsetzen';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Wenn Sie die Volltext-Suche benutzen m�chten, m�ssen Sie zuerst einen Volltext-Index erstellen!';

$txt['search_index'] = 'Such-Index';
$txt['search_index_none'] = 'Kein Index';
$txt['search_index_custom'] = 'Benutzerdefinierter Index';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'Sie k�nnen als Administrator nur zwischen den Such-Indexen wechseln. Um weitere Sphinx-Einstellungen zu machen, benutzen Sie bitte das sphinx_config.php Programm.';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Gr��e';
$txt['search_index_create_custom'] = 'Erstelle benutzerdefinierten Index';
$txt['search_index_custom_remove'] = 'L�sche benutzerdefinierten Index';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Wenn Sie einen benutzerdefinierten Index benutzen m�chten, m�ssen Sie zuerst einen erstellen!';

$txt['search_force_index'] = 'Benutzung des Such-Index erzwingen';
$txt['search_match_words'] = '�bereinstimmung nur f�r ganze W�rter';
$txt['search_max_results'] = 'Max. Anzahl der angezeigten Resultate';
$txt['search_max_results_disable'] = '(0: kein Limit)';
$txt['search_floodcontrol_time'] = 'Zeit zwischen zwei Suchanfragen eines Mitglieds';
$txt['search_floodcontrol_time_desc'] = '(0 f�r kein Limit, in Sekunden)';

$txt['search_create_index'] = 'Index erstellen';
$txt['search_create_index_why'] = 'Warum einen Such-Index erstellen?';
$txt['search_create_index_start'] = 'Erstellen';
$txt['search_predefined'] = 'Vordefiniertes Profil';
$txt['search_predefined_small'] = 'Kleiner Index';
$txt['search_predefined_moderate'] = 'Mittlerer Index';
$txt['search_predefined_large'] = 'Gro�er Index';
$txt['search_create_index_continue'] = 'Weiter';
$txt['search_create_index_not_ready'] = 'SMF erstellt momentan einen Such-Index Ihrer Beitr�ge. Um eine �berlastung des Servers zu vermeiden, wurde der Fortschritt kurzzeitig angehalten. Er sollte in ein paar Sekunden automatisch weiterlaufen. Wenn dies nicht passiert, klicken Sie bitte auf \'Weiter\'.';
$txt['search_create_index_progress'] = 'Fortschritt';
$txt['search_create_index_done'] = 'Benutzerdefinierter Index erstellt!';
$txt['search_create_index_done_link'] = 'Weiter';
$txt['search_double_index'] = 'Sie haben momentan zwei Indexe f�r Ihre Beitr�ge erstellt. Um die Leistung zu verbessern, sollten Sie einen der beiden Indexe l�schen.';

$txt['search_error_indexed_chars'] = 'Ung�ltige Anzahl an Zeichen. Es sollten mind. 3 Zeichen f�r einen sinnvollen Index benutzt werden.';
$txt['search_error_max_percentage'] = 'Ung�ltiger Prozentwert von zu �berspringenden W�rtern. Benutzen Sie eine Wert von mind. 5%.';
$txt['error_string_too_long'] = 'Der Suchbegriff muss weniger als %1$d Zeichen haben.';

$txt['search_adjust_query'] = 'Suchparameter ver�ndern';
$txt['search_adjust_submit'] = 'Suche wiederholen';
$txt['search_did_you_mean'] = 'Sie wollten vielleicht nach folgendem suchen';

$txt['search_example'] = '<em>z.B.</em> Computer "Spiele PC" -Absturz';

$txt['search_engines_description'] = 'Hier k�nnen Sie die Art und Weise bestimmen, in der Suchmaschinen-Bots w�hrend der Indexierung Ihres Forums verfolgt und protokolliert werden.';
$txt['spider_mode'] = 'Level f�r Suchmaschinenverfolgung<div class="smalltext">Achtung: Ein hohes Level erh�ht die ben�tigte Serverleistung.</div>';
$txt['spider_mode_off'] = 'Deaktiviert';
$txt['spider_mode_standard'] = 'Standard - Protokolliert die Bot-Aktivit�t.';
$txt['spider_mode_high'] = 'Hoch - Liefert detaillierte Statistiken.';
$txt['spider_mode_vhigh'] = 'Sehr hoch - Gleiche Funktion wie "Hoch", protokolliert jedoch alle besuchten Seiten.';
$txt['spider_settings_desc'] = 'Hier k�nnen Sie die Einstellungen f�r die Verfolgung der Bots �ndern. Wenn Sie das automatische L�schen des Trefferprotokolls aktivieren m�chten, gehen Sie zu <a href="%1$s">dieser Seite</a>.';

$txt['spider_group'] = 'Bots zu folgender Gruppe zugeordnen<div class="smalltext">Bestimmen Sie, auf welche Inhalte die Bots zugreifen d�rfen.</div>';
$txt['spider_group_none'] = 'Deaktiviert';

$txt['show_spider_online'] = 'Bots in \'Wer ist online\' Liste anzeigen';
$txt['show_spider_online_no'] = 'Nein';
$txt['show_spider_online_summary'] = 'Anzahl anzeigen';
$txt['show_spider_online_detail'] = 'Bot-Details anzeigen';
$txt['show_spider_online_detail_admin'] = 'Bot-Details anzeigen - nur dem Administrator';

$txt['spider_name'] = 'Name des Bots';
$txt['spider_last_seen'] = 'Zuletzt gesehen';
$txt['spider_last_never'] = 'Nie';
$txt['spider_agent'] = 'User Agent';
$txt['spider_ip_info'] = 'IP-Adresse';
$txt['spiders_add'] = 'Neuen Bot hinzuf�gen';
$txt['spiders_edit'] = 'Bot editieren';
$txt['spiders_remove_selected'] = 'Ausgew�hlte Bots entfernen';
$txt['spider_remove_selected_confirm'] = 'Sind Sie sicher, dass Sie diese Bots entfernen m�chten?\\n\\nAlle zugewiesenen Statistiken werden ebenfalls gel�scht!';
$txt['spiders_no_entries'] = 'Es sind momentan keine Spiders konfiguriert.';

$txt['add_spider_desc'] = 'Hier k�nnen Sie alle Parameter bearbeiten, nach denen ein Suchmaschinen-Bot kategorisiert wird. Sollte der User Agent bzw. die IP-Adresse eines Gastes diesen Parametern entsprechen, wird er als Bot erkannt und den Einstellungen entsprechend verfolgt.';
$txt['spider_name_desc'] = 'Name des Bots.';
$txt['spider_agent_desc'] = 'User Agent, welcher dem Bot zugewiesen ist.';
$txt['spider_ip_info_desc'] = 'Eine durch Kommas getrennte Liste mit IP-Adressen, zu welchen der Bot zugeordnet ist.';

$txt['spider'] = 'Bot';
$txt['spider_time'] = 'Zeit';
$txt['spider_viewing'] = 'Betrachtet';
$txt['spider_logs_empty'] = 'Es sind keine Protokolle verf�gbar.';
$txt['spider_logs_info'] = 'Beachten Sie, dass die Aktionen der Bots nur in der Einstellung "Hoch" oder "Sehr hoch" protokolliert werden. Die genauen Details jeder Aktion werden nur in der Einstellung "Sehr hoch" protokolliert.';
$txt['spider_disabled'] = 'Deaktiviert';

$txt['spider_logs_delete'] = 'Eintr�ge l�schen';
$txt['spider_logs_delete_older'] = 'Alle Eintr�ge �lter als';
$txt['spider_logs_delete_day'] = 'Tage l�schen.';
$txt['spider_logs_delete_submit'] = 'L�schen';
// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Sind Sie sicher, dass Sie alle Log Eintr�ge entfernen m�chten?';

$txt['spider_stats_select_month'] = 'Zu folgendem Monat springen';
$txt['spider_stats_page_hits'] = 'Seitentreffer';
$txt['spider_stats_no_entries'] = 'Es sind momentan keine Spider Statistiken verf�gbar.';

?>