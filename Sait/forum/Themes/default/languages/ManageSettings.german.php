<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Hier k�nnen Sie die Einstellungen von speziellen Funktionen des Forums �ndern. F�r weitere Optionen schauen Sie bitte in den <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">Theme-Einstellungen</a> nach. <b>Klicken Sie auf die Hilfesymbole f�r weitere Informationen zu den Funktionen.</b>';
$txt['security_settings_desc'] = 'Hier k�nnen Sie Einstellungen bez�glich der Moderation und der Sicherheit (inkl. Anti-Spam) in Ihrem Forum �ndern.';
$txt['modification_settings_desc'] = 'Diese Seite enth�lt Einstellungen, die von Modifikationen zu Ihrem Forum hinzugef�gt wurden.';

$txt['modification_no_misc_settings'] = 'Es sind keine Modifikationen installiert, die neue Einstellungen hinzugef�gt haben.';

$txt['pollMode'] = 'Umfrage-Modus';
$txt['disable_polls'] = 'Umfragen deaktivieren';
$txt['enable_polls'] = 'Umfragen aktivieren';
$txt['polls_as_topics'] = 'Umfragen als Themen anzeigen';
$txt['allow_guestAccess'] = 'G�sten das Anschauen des Forums erlauben';
$txt['userLanguage'] = 'Individuelle Benutzersprache erlauben';
$txt['allow_editDisplayName'] = 'Benutzern erlauben, den angezeigten Namen zu �ndern?';
$txt['allow_hideOnline'] = 'Benutzern erlauben, den Online-Status zu verstecken?';
$txt['guest_hideContacts'] = 'Kontaktangaben der Mitglieder vor G�sten verstecken?';
$txt['titlesEnable'] = 'Pers�nliche Titel aktivieren';
$txt['enable_buddylist'] = 'Freunde- und Ignorieren-Liste aktivieren';
$txt['default_personal_text'] = 'Pers�nlicher Standardtext';
$txt['number_format'] = 'Standard-Zahlenformat';
$txt['time_format'] = 'Voreingestelltes Zeitformat';
$txt['setting_time_offset'] = 'Globale Zeitverschiebung <div class="smalltext">(deaktiviert die indiv. Zeitverschiebung der Benutzer)</div>';
$txt['setting_default_timezone'] = 'Zeitzone des Servers';
$txt['failed_login_threshold'] = 'Max. fehlerhafte Login-Versuche';
$txt['lastActive'] = 'Zeit der Benutzeranzeige unter \'Wer ist online\' (in Minuten)';
$txt['trackStats'] = 'Statistiken aktivieren';
$txt['hitStats'] = 'Seitenaufrufe z�hlen (setzt aktivierte Statistiken voraus)';
$txt['enableCompressedOutput'] = 'Komprimierte Ausgabe aktivieren';
$txt['disableTemplateEval'] = 'Evaluation von Templates deaktivieren';
$txt['databaseSession_enable'] = 'Datenbank gest�tzte Sitzungen benutzen';
$txt['databaseSession_loose'] = 'Browser darf Seiten zwischenspeichern';
$txt['databaseSession_lifetime'] = 'Zeit bevor eine Sitzung abl�uft (in Sekunden)';
$txt['enableErrorLogging'] = 'Fehlerprotokoll aktivieren';
$txt['enableErrorQueryLogging'] = 'Datenbankabfrage in das Fehlerprotokoll einf�gen';
$txt['pruningOptions'] = 'Bereinigen von Protokolleintr�gen aktivieren.';
$txt['pruneErrorLog'] = 'Eintr�ge aus dem Fehlerprotokoll entfernen, die �lter sind als<div class="smalltext">(0 zum deaktivieren)</div>';
$txt['pruneModLog'] = 'Eintr�ge aus dem Moderatoren-Protokoll entfernen, die �lter sind als:<div class="smalltext">(0 zum deaktivieren)</div>';
$txt['pruneBanLog'] = 'Eintr�ge aus dem Bann-Protokoll entfernen, die �lter sind als:<div class="smalltext">(0 zum deaktivieren)</div>';
$txt['pruneReportLog'] = 'Eintr�ge aus dem Meldungsprotokoll entfernen, die �lter sind als:<div class="smalltext">(0 zum deaktivieren)</div>';
$txt['pruneScheduledTaskLog'] = 'Eintr�ge aus dem Aufgabenprotokoll entfernen, die �lter sind als<div class="smalltext">(0 zum deaktivieren)</div>';
$txt['pruneSpiderHitLog'] = 'Eintr�ge aus dem Protokoll der Bots entfernen, die �lter sind als<div class="smalltext">(0 zum deaktivieren)</div>';
$txt['cookieTime'] = 'G�ltigkeitsdauer des Login-Cookies (in Minuten)';
$txt['localCookies'] = 'Lokales Speichern der Cookies aktivieren<div class="smalltext">(SSI kann Probleme verursachen, wenn diese Option aktiv ist.)</div>';
$txt['globalCookies'] = 'Subdomain unabh�ngige Cookies verwenden?<div class="smalltext">Achtung: Lokale Cookies m�ssen abgeschaltet sein!</div>';
$txt['secureCookies'] = 'Erzwinge sichere Cookies<div class="smalltext">(Dies ist nur m�glich, wenn sie HTTPS verwenden. Tun sie dies nicht w�hlen sie diese Option nicht!)</div>';
$txt['securityDisable'] = 'Sicherheitsabfrage f�r Administrator deaktivieren';
$txt['send_validation_onChange'] = 'Neues Passwort bei �nderung der E-Mail-Adresse senden?';
$txt['approveAccountDeletion'] = 'Administrator muss dem L�schen des Benutzerkontos zustimmen?';
$txt['autoOptMaxOnline'] = 'Max. Benutzer f�r Optimierung<div class="smalltext">(0 f�r keine Grenze)</div>';
$txt['autoFixDatabase'] = 'Automatisches Reparieren defekter Tabellen';
$txt['allow_disableAnnounce'] = 'Benutzer d�rfen Benachrichtigungen bei Ank�ndigungen deaktivieren?';
$txt['disallow_sendBody'] = 'Beitragstext in Benachrichtigungen verbieten?';
$txt['queryless_urls'] = 'Suchmaschinen freundliche URLs anzeigen <div class="smalltext"><strong>Nur Apache/Lighttpd Server!</strong></div>';
$txt['max_image_width'] = 'Max. Breite geposteter Bilder (0 = deaktiviert das Limit)';
$txt['max_image_height'] = 'Max. H�he geposteter Bilder (0 = deaktiviert das Limit)';
$txt['enableReportPM'] = 'Melden von Privaten Mitteilungen aktivieren';
$txt['max_pm_recipients'] = 'Max. Anzahl von Empf�ngern in einer Privaten Mitteilung<div class="smalltext">(0 f�r kein Limit, Administratoren sind ausgenommen)</div>';
$txt['pm_posts_verification'] = 'Anzahl der Beitr�ge, unter welcher die Benutzer beim Versenden von Privaten Mitteilungen einen Code eingeben m�ssen<div class="smalltext">(0 f�r kein Limit, Administratoren sind ausgenommen)</div>';
$txt['pm_posts_per_hour'] = 'Anzahl der Privaten Mitteilungen, welche die Benutzer pro Stunde versenden d�rfen<div class="smalltext">(0 f�r kein Limit, Moderatoren sind ausgenommen)</div>';
$txt['compactTopicPagesEnable'] = 'Kompakte Seitenanzeige aktivieren';
$txt['contiguous_page_display'] = 'Anzahl benachbarter Seiten anzeigen';
$txt['to_display'] = 'zeigt folgendes an';
$txt['todayMod'] = 'Heute/Gestern Anzeige aktivieren';
$txt['today_disabled'] = 'Deaktiviert';
$txt['today_only'] = 'Nur Heute';
$txt['yesterday_today'] = 'Heute &amp; Gestern';
$txt['topbottomEnable'] = 'Seitenende/Seitenanfang Buttons aktivieren';
$txt['onlineEnable'] = 'On-/Offline Status in Beitr�gen und Privaten Mitteilungen anzeigen';
$txt['enableVBStyleLogin'] = 'vB Style Login aktivieren';
$txt['defaultMaxMembers'] = 'Anzahl der Mitglieder pro Seite in der Mitgliederliste';
$txt['timeLoadPageEnable'] = 'Zeitmessung im Forum aktivieren';
$txt['disableHostnameLookup'] = 'Hostnamen-Suche deaktivieren';
$txt['who_enabled'] = '\'Wer ist online\' aktivieren?';
$txt['make_email_viewable'] = 'Sichtbare E-Mail-Adressen erlauben';
$txt['meta_keywords'] = 'Meta Stichworte, die mit diesem Forum zusammenh�ngen<div class="smalltext">F�r Suchmaschinen. Lassen Sie diese frei, dann werden die Standardwerte verwendet.</div>';

$txt['karmaMode'] = 'Karma-Modus';
$txt['karma_options'] = 'Karma deaktivieren|Karma Gesamtzahl aktivieren|Karma Positiv/Negativ aktivieren';
$txt['karmaMinPosts'] = 'Min. Anzahl an Beitr�gen um Karma �ndern zu d�rfen';
$txt['karmaWaitTime'] = 'Wartezeit (in Stunden)';
$txt['karmaTimeRestrictAdmins'] = 'Administratoren auf Wartezeit beschr�nken';
$txt['karmaLabel'] = 'Karma: Anzeigenname';
$txt['karmaApplaudLabel'] = 'Karma: positive Stimme';
$txt['karmaSmiteLabel'] = 'Karma: negative Stimme';

$txt['caching_information'] = '<div class="aligncenter underline">

<strong>Wichtig! Lesen Sie diesen Abschnitt, bevor Sie eine dieser Funktionen aktiviern.</strong>
</div>
<br />

	SMF unterst�tzt das zwischenspeichern durch die Benutzung von folgende Programmen:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (nicht Zend Optimizer)</li>
		<li>XCache</li>
	</ul>


	Das Zwischenspeichern funktioniert am besten, wenn PHP mit einem der genannten Beschleunigern kompiliert wurde oder memcache verf�gbar ist.
	Wenn Sie keinen Beschleuniger installiert haben wird SMF dateibasiertes Zwischenspeichern anwenden.<br />
	<br />



	SMF verwendet das Zwischenspeichern auf verschiedenen Ebenen.
	Je h�her das Level, desto mehr Prozessorzeit wird zum abfragen zwischengespeicherter Daten verwendet.
	Wenn das Zwischenspeichern auf Ihrem Server m�glich ist sollten Sie versuchen mit Level 1 zu beginnen.<br />
	<br />


	Sollten Sie MemCached verwenden m�ssen Sie die Server Details in den Einstellungen weiter unten eintragen.
	Diese sollten als Komma-getrennte Liste eingegeben werden, wie das folgende Beispiel zeigt:<br />
	"server1,server2,server3:port,server4"<br />
	<br />

	Sollte kein Port angegeben sein, verwendet SMF den Port 11211.
	SMF wird versuchen die Auslastung grob/zuf�llig auf alle Server zu verteilen.<br />
	<br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF konnte keinen kompatiblen Beschleuniger auf Ihrem Server finden.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF hat APC auf Ihrem Server gefunden.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF hat eAccelerator auf Ihrem Server gefunden.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF hat MMCache auf Ihrem Server gefunden.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF hat Zend auf Ihrem Server gefunden.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">SMF hat MemCache auf Ihrem Server gefunden.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF hat festgestellt, dass XCache auf dem Server installiert ist.</strong>';

$txt['cache_enable'] = 'Cache-Level';
$txt['cache_off'] = 'Kein Cache';
$txt['cache_level1'] = 'Level 1 Cache';
$txt['cache_level2'] = 'Level 2 Cache (nicht empfehlenswert)';
$txt['cache_level3'] = 'Level 3 Cache (nicht empfehlenswert)';
$txt['cache_memcached'] = 'MemCache-Einstellungen';

$txt['loadavg_warning'] = '<span class="error">Hinweis: Die folgenden Einstellungen sind mit Vorsicht zu �ndern. Wenn eine Einstellung zu niedrig gew�hlt ist k�nnte das <strong>Forum unbenutzbar</strong> sein!</span> Die aktuelle Auslastung ist <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Aktiviere die Lastverteilung nach Durchschnittslast';
$txt['loadavg_auto_opt'] = 'Schwelle f�r die Deaktivierung automatischer Datenbankoptimierungen';
$txt['loadavg_search'] = 'Schwelle zum Deaktivieren der Suche';
$txt['loadavg_allunread'] = 'Schwelle f�r das Deaktivieren von ungelesenen Themen';
$txt['loadavg_unreadreplies'] = 'Schwelle f�r das Deaktivieren ungelesener Antworten';
$txt['loadavg_show_posts'] = 'Schwelle zum Deaktivieren der Anzeige von Benutzerbeitr�gen';
$txt['loadavg_forum'] = 'Schwelle zum <strong>vollst�ndigen</strong> Deaktivieren des Forums';
$txt['loadavg_disabled_windows'] = '<span class="error">Der Lastausgleich ist f�r Windows nicht verf�gbar.</span> ';
$txt['loadavg_disabled_conf'] = '<span class="error">Der Lastausgleich ist durch deine Host Konfiguration gesperrt.</span>';

$txt['setting_password_strength'] = 'Ben�tigte St�rke des Passwortes';
$txt['setting_password_strength_low'] = 'Niedrig - mind. 4 Zeichen';
$txt['setting_password_strength_medium'] = 'Mittel - darf keinen Benutzernamen enthalten';
$txt['setting_password_strength_high'] = 'Hoch - Mischung aus Buchstaben und Zahlen';

$txt['antispam_Settings'] = 'Anti-Spam Verifizierung';
$txt['antispam_Settings_desc'] = 'Hier k�nnen Sie die Einstellungen der Verifizierungsfunktionen �ndern und damit sicherstellen, dass der Benutzer ein Mensch und kein Bot ist.';
$txt['setting_reg_verification'] = 'Ben�tigt Verifizierung bei der Registrierung';
$txt['posts_require_captcha'] = 'Mindestanzahl der Beitr�ge, unter welcher die Benutzer Ihren Beitrag verifizieren m�ssen';
$txt['posts_require_captcha_desc'] = '(0 f�r kein Limit, Moderatoren sind ausgenommen)';
$txt['search_enable_captcha'] = 'Ben�tigt Verifizierung bei Suchanfragen von G�sten';
$txt['setting_guests_require_captcha'] = 'Beitr�ge von G�sten m�ssen verifiziert werden';
$txt['setting_guests_require_captcha_desc'] = '(Automatisch aktiv, wenn eine Mindestanzahl von Beitr�gen eingestellt wurde)';
$txt['guests_report_require_captcha'] = 'G�ste m�ssen bei der Berichterstattung verifiziert werden';

$txt['configure_verification_means'] = 'Verifizierungsmethode konfigurieren';
$txt['setting_qa_verification_number'] = 'Anzahl der Verifizierungsfragen, die ein Benutzer beantworten muss';
$txt['setting_qa_verification_number_desc'] = '(0 zum deaktivieren; Fragen werden unten eingegeben)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Hier k�nnen Sie einstellen, welche Anti-Spam Funktionen bei einer Verifizierungsabfrage benutzt werden sollen. Beachten Sie, dass der Benutzer <em>alle</em> Abfragen erfolgreich absolvieren muss, um fortzufahren.</span>';
$txt['setting_visual_verification_type'] = 'Visuelles Verifizierungsbild';
$txt['setting_visual_verification_type_desc'] = ' Je komplexer das Bild, desto schwieriger k�nnen Bots die Verifizierung umgehen.';
$txt['setting_image_verification_off'] = 'Keine';
$txt['setting_image_verification_vsimple'] = 'Sehr einfach - nur Text auf dem Bild';
$txt['setting_image_verification_simple'] = 'Einfach - Bunte, �berlappende Buchstaben, kein Rauschen';
$txt['setting_image_verification_medium'] = 'Mittel - Bunte, �berlappende Buchstaben, mit Rauschen';
$txt['setting_image_verification_high'] = 'Hoch - Verdrehte Buchstaben, starkes Rauschen';
$txt['setting_image_verification_extreme'] = 'Extrem – Gedrehte Buchstaben, Rauschen, Linien und Bl�cke';
$txt['setting_image_verification_sample'] = 'Beispiel';
$txt['setting_image_verification_nogd'] = '<strong>Achtung:</strong> Da dieser Server die GD Bibliothek nicht installiert hat, haben die verschiedenen Einstellungen keine Auswirkung.';
$txt['setup_verification_questions'] = 'Verifizierungsfragen';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Geben Sie in der folgenden Tabelle eine oder mehrere Fragen ein, wenn Sie diese zur Vermeidung von Spam von den Benutzern beantworten lassen wollen. Sie sollten relativ einfache Fragen w�hlen, die Antworten unterscheiden keine Gro�- und Kleinschreibung. Um eine Frage zu entfernen, l�schen Sie einfach den Inhalt der kompletten Zeile.</span>';
$txt['setup_verification_question'] = 'Frage';
$txt['setup_verification_answer'] = 'Antwort';
$txt['setup_verification_add_more'] = 'Weitere Frage hinzuf�gen';

$txt['moderation_settings'] = 'Moderationseinstellungen';
$txt['setting_warning_enable'] = 'Benutzer-Verwarnung aktivieren';
$txt['setting_warning_watch'] = 'Verwarnungslevel f�r Beobachtung des Benutzers<div class="smalltext">Verwarnungslevel, ab dem der Benutzer beobachtet wird - 0 zum deaktivieren.</div>';
$txt['setting_warning_moderate'] = 'Verwarnungslevel f�r Moderation der Beitr�ge<div class="smalltext">Verwarnungslevel, ab dem alle Beitr�ge des Benutzers moderiert werden - 0 zum deaktivieren.</div>';
$txt['setting_warning_mute'] = 'Verwarnungslevel f�r die Stummschaltung des Benutzers<div class="smalltext">Verwarnungslevel, ab dem der Benutzer keine Beitr�ge mehr schreiben kann - 0 zum deaktivieren.</div>';
$txt['setting_user_limit'] = 'Max. Verwarnungspunkte f�r einen Benutzer pro Tag<div class="smalltext">Max. Anzahl an Punkten, die ein einzelner Moderator einem Benutzer in 24 Stunden geben kann - 0 f�r kein Limit.</div>';
$txt['setting_warning_decrement'] = 'Anzahl der Verwarnungspunkte, die alle 24 Stunden abgezogen werden sollen<div class="smalltext">Z�hlt nur f�r Benutzer, die in den letzten 24 Stunden nicht verwarnt worden sind - 0 zum deaktivieren.</div>';
$txt['setting_warning_show'] = 'Benutzer, welche den Warnungsstatus sehen k�nnen<div class="smalltext">Gibt an, wer den Warnungslevel von Nutzern in diesem Forum sehen kann.</div>';
$txt['setting_warning_show_mods'] = 'Nur Moderatoren';
$txt['setting_warning_show_user'] = 'Moderatoren und Verwarnte Benutzer';
$txt['setting_warning_show_all'] = 'Alle Benutzer';

$txt['signature_settings'] = 'Signatureinstellungen';
$txt['signature_settings_desc'] = 'Hier k�nnen sie die Einstellungen f�r die Benutzersignaturen in SMF bestimmen.';
$txt['signature_settings_warning'] = 'Beachten sie, dass sich �nderungen nicht automatisch auf existierende Signaturen auswirkt. Klicken sie <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">hier</a> um die �nderungen auf alle Signaturen anzuwenden.';
$txt['signature_enable'] = 'Signaturen aktivieren';
$txt['signature_max_length'] = 'Max. erlaubte Zeichen<div class="smalltext">(0 f�r kein Limit)</div>';
$txt['signature_max_lines'] = 'Max. erlaubte Zeilen<div class="smalltext">(0 f�r kein Limit)</div>';
$txt['signature_max_images'] = 'Max. Anzahl der Bilder<div class="smalltext">(0 f�r kein Limit - ohne Smileys)</div>';
$txt['signature_allow_smileys'] = 'Erlaube Smileys in Signaturen';
$txt['signature_max_smileys'] = 'Max. Anzahl an Smileys<div class="smalltext">(0 f�r kein Limit)</div>';
$txt['signature_max_image_width'] = 'Max. Breite der Bilder in der Signatur (Pixel)<div class="smalltext">(0 f�r kein Limit)</div>';
$txt['signature_max_image_height'] = 'Max. H�he der Bilder in der Signatur (Pixel)<div class="smalltext">(0 f�r kein Limit)</div>';
$txt['signature_max_font_size'] = 'Max. Schriftgr��e in der Signatur<div class="smalltext">(0 f�r kein Limit)</div>';
$txt['signature_bbc'] = 'Aktivierte BBC Tags';

$txt['custom_profile_title'] = 'Benutzerdefinierte Profilfelder';
$txt['custom_profile_desc'] = 'Hier k�nnen sie ihre eigenen Profilfelder f�r ihr Forum erstellen';
$txt['custom_profile_active'] = 'Aktiv';
$txt['custom_profile_fieldname'] = 'Feldname';
$txt['custom_profile_fieldtype'] = 'Feldtyp';
$txt['custom_profile_make_new'] = 'Neues Feld';
$txt['custom_profile_none'] = 'Sie haben noch keine benutzerdefinierten Profilfelder erstellt!';
$txt['custom_profile_icon'] = 'Symbol';

$txt['custom_profile_type_text'] = 'Text';
$txt['custom_profile_type_textarea'] = 'Langer Text';
$txt['custom_profile_type_select'] = 'Auswahlbox';
$txt['custom_profile_type_radio'] = 'Radio Button';
$txt['custom_profile_type_check'] = 'Auswahlbox';

$txt['custom_add_title'] = 'Profilfeld hinzuf�gen';
$txt['custom_edit_title'] = 'Profilfeld editieren';
$txt['custom_edit_general'] = 'Anzeigeeinstellungen';
$txt['custom_edit_input'] = 'Eingabeeinstellungen';
$txt['custom_edit_advanced'] = 'Erweiterte Einstellungen';
$txt['custom_edit_name'] = 'Name';
$txt['custom_edit_desc'] = 'Beschreibung';
$txt['custom_edit_profile'] = 'Profilabschnitt';
$txt['custom_edit_profile_desc'] = 'Wird im gew�hlten Abschnitt des Profils hinzugef�gt.';
$txt['custom_edit_profile_none'] = 'Kein';
$txt['custom_edit_registration'] = 'Bei der Registrierung anzeigen';
$txt['custom_edit_registration_disable'] = 'Nein';
$txt['custom_edit_registration_allow'] = 'Ja';
$txt['custom_edit_registration_require'] = 'Ja, erfordert Eingabe';
$txt['custom_edit_display'] = 'In der Themenansicht anzeigen';
$txt['custom_edit_picktype'] = 'Feldtyp';

$txt['custom_edit_max_length'] = 'Max. L�nge';
$txt['custom_edit_max_length_desc'] = '(0 f�r kein Limit)';
$txt['custom_edit_dimension'] = 'Gr��e';
$txt['custom_edit_dimension_row'] = 'Reihen';
$txt['custom_edit_dimension_col'] = 'Spalten';
$txt['custom_edit_bbc'] = 'BBC erlauben?';
$txt['custom_edit_options'] = 'Optionen';
$txt['custom_edit_options_desc'] = 'Textfeld leer lassen, um es zu entfernen. Auswahl markiert den Standard.';
$txt['custom_edit_options_more'] = 'Mehr';
$txt['custom_edit_default'] = 'Standard-Status';
$txt['custom_edit_active'] = 'Aktiv';
$txt['custom_edit_active_desc'] = 'Wenn diese Option nicht aktiviert ist, wird das Feld keinem Benutzer angezeigt.';
$txt['custom_edit_privacy'] = 'Privatsph�re';
$txt['custom_edit_privacy_desc'] = 'Bestimmt, wer das Feld sehen und editieren kann.';
$txt['custom_edit_privacy_all'] = 'Benutzer kann das Feld sehen; Inhaber kann es editieren';
$txt['custom_edit_privacy_see'] = 'Benutzer kann das Feld sehen; Administrator kann es editieren';
$txt['custom_edit_privacy_owner'] = 'Benutzer k�nnen dieses Feld nicht sehen; Inhaber und Administratoren k�nnen es bearbeiten.';
$txt['custom_edit_privacy_none'] = 'Das Feld ist nur f�r Administratoren sichtbar';
$txt['custom_edit_can_search'] = 'Durchsuchbar';
$txt['custom_edit_can_search_desc'] = 'Das Feld kann von der Mitgliederliste aus durchsucht werden.';
$txt['custom_edit_mask'] = 'Eingabemaske';
$txt['custom_edit_mask_desc'] = 'F�r Textfelder kann eine Eingabemaske gew�hlt werden, um die Daten zu �berpr�fen.';
$txt['custom_edit_mask_email'] = 'G�ltige E-Mail-Adresse';
$txt['custom_edit_mask_number'] = 'Numerisch';
$txt['custom_edit_mask_nohtml'] = 'kein HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Erweitert)';
$txt['custom_edit_enclose'] = 'Zeige Eingeschlossen durch Text';
$txt['custom_edit_enclose_desc'] = 'Wir empfehlen <strong>dringendst</strong> die Verwendung einer Eingabemaske zum Validieren der Eingaben von Benutzern.';

$txt['custom_edit_placement'] = 'Platzierung';
$txt['custom_edit_placement_standard'] = 'Standard (mit Titel)';
$txt['custom_edit_placement_withicons'] = 'bei den Symbolen';
$txt['custom_edit_placement_abovesignature'] = '�ber der Signatur';
$txt['custom_profile_placement'] = 'Platzierung';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'bei den Symbolen';
$txt['custom_profile_placement_abovesignature'] = '�ber der Signatur';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Sind sie sicher, dass sie dieses Feld l�schen m�chten - alle relevanten Benutzerdaten werden verloren gehen!';

$txt['standard_profile_title'] = 'Standard Profilfelder';
$txt['standard_profile_field'] = 'Feld';

$txt['core_settings_welcome_msg'] = 'Willkommen in Ihrem neuen Forum';
$txt['core_settings_welcome_msg_desc'] = 'Um einen Anfang zu finden, empfehlen wir Ihnen die Aktivierung einiger Kernfunktionen von SMF. Bitte aktivieren Sie anfangs nur die Funktionen, die Sie brauchen, um eine �berflutung mit Einstellm�glichkeiten zu verhindern!';
$txt['core_settings_item_cd'] = 'Kalender';
$txt['core_settings_item_cd_desc'] = 'Wenn Sie diese Funktion aktivieren, k�nnen die Mitglieder den Kalender anschauen, neue Ereignisse hinzuf�gen bzw. vorhandene Ereignisse editieren, die Geburtstage anderer Benutzer sehen und vieles mehr.';
$txt['core_settings_item_cp'] = 'Benutzerdefinierte Profilfelder';
$txt['core_settings_item_cp_desc'] = 'Diese Funktion erlaubt das Verstecken von Standard Profilfeldern, das Hinzuf�gen von neuen Feldern zur Registrierung bzw. dem Benutzerprofil.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma zeigt die Beliebtheit eines Mitglieds im Forum an. Mitglieder k�nnen, wenn erlaubt, andere Benutzer \'positiv\' oder \'negativ\' bewerten, was Auswirkungen auf deren Beliebtheit im Forum hat.';
$txt['core_settings_item_ml'] = 'Moderator-Protokoll';
$txt['core_settings_item_ml_desc'] = 'Aktivieren Sie das Moderator-Protokoll, um einen �berblick �ber die durchgef�hrten Aktionen der Moderatoren zu erhalten.';
$txt['core_settings_item_pm'] = 'Beitragsmoderation';
$txt['core_settings_item_pm_desc'] = 'Die Beitragsmoderation erlaubt Ihnen bestimmte Gruppen oder Boards anzugeben, in denen alle Beitr�ge genehmigt werden m�ssen, bevor sie ver�ffentlicht werden. Nachdem Sie diese Funktion aktiviert haben, sollten Sie die entsprechenden Berechtigungen setzen.';
$txt['core_settings_item_ps'] = 'Bezahlte Abonnements';
$txt['core_settings_item_ps_desc'] = 'Bezahlte Abonnements erlauben den Benutzern in eine andere Mitgliedergruppe zu wechseln und ihre Rechte zu erweitern.';
$txt['core_settings_item_rg'] = 'Berichte erstellen';
$txt['core_settings_item_rg_desc'] = 'Diese Funktion erlaubt das Erstellen von verschiedenen (druckbaren) Berichten, welche die Konfiguration des Forums oder die Vergabe der Berechtigungen einfach veranschaulicht - sehr hilfreich bei gro�en Foren.';
$txt['core_settings_item_sp'] = 'Verfolgung von Suchmaschinen';
$txt['core_settings_item_sp_desc'] = 'Wenn Sie diese Funktion aktivieren, k�nnen Sie als Administrator Suchmaschinen verfolgen, die Ihr Forum indexieren.';
$txt['core_settings_item_w'] = 'Verwarnungssystem';
$txt['core_settings_item_w_desc'] = 'Diese Funktion erlaubt den Administratoren und Moderatoren des Forums bestimmte Benutzer zu verwarnen und ihnen mit steigendem Verwarnungslevel verschiedene Berechtigungen zu entziehen. Um die volle Funktion zu gew�hrleisten, empfehlen wir das Aktivieren der "Beitragsmoderation".';
$txt['core_settings_switch_on'] = 'Zum Aktivieren klicken';
$txt['core_settings_switch_off'] = 'Zum Deaktivieren klicken';
$txt['core_settings_enabled'] = 'Aktiviert';
$txt['core_settings_disabled'] = 'Deaktiviert';

$txt['languages_lang_name'] = 'Name der Sprache';
$txt['languages_locale'] = 'K�rzel';
$txt['languages_default'] = 'Standard';
$txt['languages_character_set'] = 'Zeichen Set';
$txt['languages_users'] = 'Benutzer';
$txt['language_settings_writable'] = 'Achtung: Settings.php kann nicht �berschrieben werden! Daher kann die Standardsprache nicht gespeichert werden.';
$txt['edit_languages'] = 'Sprache editieren';
$txt['lang_file_not_writable'] = '<strong>Achtung:</strong> Die prim�re Sprachdatei (%1$s) kann nicht �berschrieben werden. Sie m�ssen erst den Schreibschutz entfernen, bevor Sie irgendwelche �nderungen machen k�nnen.';
$txt['lang_entries_not_writable'] = '<strong>Achtung:</strong> Die Sprachdatei (%1$s), die Sie editieren m�chten, kann nicht �berschrieben werden! Sie m�ssen erst den Schreibschutz entfernen, bevor Sie irgendwelche �nderungen machen k�nnen.';
$txt['languages_ltr'] = 'Rechts nach Links';

$txt['add_language'] = 'Sprache hinzuf�gen';
$txt['add_language_smf'] = 'Download von Simple Machines';
$txt['add_language_smf_browse'] = 'Geben Sie den Namen der zu suchenden Sprache ein oder lassen Sie das Feld leer, um nach allen Sprachen zu suchen.';
$txt['add_language_smf_install'] = 'Installieren';
$txt['add_language_smf_found'] = 'Folgende Sprachen wurden gefunden. Klicken Sie auf \'Installieren\' um die Sprache zu installieren. Sie werden danach zum Paketmanager weitergeleitet.';
$txt['add_language_error_no_response'] = 'Die Simple Machines Seite reagiert nicht. Bitte versuchen Sie es sp�ter wieder.';
$txt['add_language_error_no_files'] = 'Keine Dateien gefunden.';
$txt['add_language_smf_desc'] = 'Beschreibung';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Hier sind die prim�ren Einstellungen f�r dieses Sprachpaket.';
$txt['edit_language_entries'] = 'Spracheintr�ge editieren';
$txt['edit_language_entries_file'] = 'Eintr�ge zum Editieren ausw�hlen';
$txt['languages_dictionary'] = 'W�rterbuch';
$txt['languages_spelling'] = 'Rechtschreibung';
$txt['languages_for_pspell'] = 'Das ist f�r <a href="http://www.php.net/function.pspell-new" alt="*" target="_blank">pSpell</a> - wenn installiert';
$txt['languages_rtl'] = '"Rechts nach Links"-Modus aktivieren';

$txt['lang_file_desc_index'] = 'Generelle Spracheintr�ge';
$txt['lang_file_desc_EmailTemplates'] = 'E-Mail Vorlagen';

$txt['languages_download'] = 'Sprachpaket herunterladen';
$txt['languages_download_note'] = 'Diese Seite listet alle Dateien des Sprachpaketes mit zus�tzlichen Informationen auf. Alle markierten Dateien werden kopiert.';
$txt['languages_download_info'] = '<strong>Hinweis:</strong>
<ul class="normallist">
	<li>Alle Dateien mit dem Status "Nicht beschreibbar" k�nnen vom SMF nicht in das Verzeichnis kopiert werden. Bitte machen Sie das Ziel mit einem FTP-Programm beschreibbar oder tragen Sie die Daten unten ein.</li>
	<li>Die Versionsinformation jeder Datei zeigt die SMF-Version an, f�r die sie als letztes aktualisiert wurde. Sollte diese Angabe in gr�n erscheinen, ist die Datei neuer als die zurzeit installierte Version. Gelb signalisiert eine gleiche Version, Rot zeigt an, dass bereits eine neuere Version der Datei vorhanden ist als die die im Paket vorhanden ist.</li>
	<li>Wenn eine Datei in Ihrem Forum bereits existiert hat die Spalte "Existiert bereits" einen von zwei Werten. "Identisch" zeigt an, dass die Datei gleich ist und nicht �berschrieben werden muss. "Unterschiedlich" sagt aus, dass die Datei sich unterscheidet und ein �berschreiben hier wahrscheinlich die beste L�sung ist.</li>
</ul>';

$txt['languages_download_main_files'] = 'Prim�re Dateien';
$txt['languages_download_theme_files'] = 'Theme-zugeh�rige Dateien';
$txt['languages_download_filename'] = 'Dateiname';
$txt['languages_download_dest'] = 'Ziel';
$txt['languages_download_writable'] = '�berschreibbar';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'Sie haben eine neuere Version dieser Datei installiert! Das �berschreiben der Datei wird nicht empfohlen.';
$txt['languages_download_exists'] = 'Bereits vorhanden';
$txt['languages_download_exists_same'] = 'Identisch';
$txt['languages_download_exists_different'] = 'Verschieden';
$txt['languages_download_copy'] = 'Kopie';
$txt['languages_download_not_chmod'] = 'Sie k�nnen mit der Installation nicht fortfahren, bis alle markierten Dateien �berschreibbar sind.';
$txt['languages_download_illegal_paths'] = 'Das Paket enth�lt einen ung�ltigen Pfad - bitte kontaktieren Sie Simple Machines';
$txt['languages_download_complete'] = 'Installation komplett';
$txt['languages_download_complete_desc'] = 'Sprachpaket wurde erfolgreich installiert. Bitte klicken Sie <a href="%1$s">hier</a> um zur Sprachseite zur�ckzukehren.';
$txt['languages_delete_confirm'] = 'Sind Sie sicher, dass Sie diese Sprache l�schen m�chten?';

?>