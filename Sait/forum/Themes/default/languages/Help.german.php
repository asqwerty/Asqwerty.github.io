<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Fenster schlie�en';

$helptxt['manage_boards'] = '	<b>Boards verwalten</b><br />
	Hier k�nnen Sie die "Kategorien" und "Boards" verwalten. Kategorien sind die
	oberste Ebene eines Forums. Beispiel: Wenn Sie eine Seite betreiben, die Informationen
	f�r "Sport", "Autos" und "Musik" bereitstellt, w�ren das die Kategorien,
	die Sie erstellen. Innerhalb dieser Kategorien k�nnen Sie "Boards" einf�gen.<br />
	Hier ein Beispiel:<br />
	<ul>
		<li>
			<b>Sport</b>
			&nbsp;- Eine "Kategorie"
		</li>
		<ul>
			<li>
				<b>Baseball</b>
				&nbsp;- Ein Board innerhalb der Kategorie "Sport"
			</li>
			<ul>
				<li>
					<b>Statistiken</b>
					&nbsp;- Ein untergeordnetes Board des Boards "Baseball"
				</li>
			</ul>
			<li>
				<b>Fu�ball</b>
				&nbsp;- Ein Board innerhalb der Kategorie "Sport"</li>
		</ul>
	</ul>
	Kategorien erlauben Ihnen, das Forum in verschiedene Bereiche aufzuteilen ("Autos,
	Sport"), damit die Interessen schnell zu finden sind. Die Boards erlauben eine weitere
	Unterteilung und enthalten die Beitr�ge. Wenn sich ein Benutzer f�r Porsche
	interessiert, w�rde er seinen Beitrag in das Board "Porsche" der Kategorie
	"Autos" schreiben.<br />
	Administrative Funktionen in diesem Men� sind das Hinzuf�gen von Boards in einer 
	beliebigen Kategorie, die �nderung der Reihenfolge sowie das L�schen eines Boards bzw.
	einer Kategorie.';

$helptxt['edit_news'] = '<ul class="normallist">
<li><strong>News</strong><br/>
Diese Sektion erlaubt dir den Newstext auf der Forums Hauptseite festzulegen. F�gen Sie ein beliebiges Element hinzu (z.B. "Verpassen Sie nicht die Konferenz am Dienstag").
Jede News wird zuf�llig angezeigt und sollte in eine separate Box.</li>
<li><strong>Newsletter</strong><br/>
Diese Sektion erlaubt es Ihnen Newsletter �ber E-Mail oder pers�nlicher Nachricht an Benutzer zu versenden.
Zun�chst w�hlen sie die Gruppen, an die Sie den Newsletter senden m�chten und jene, an die Sie ihn nicht senden m�chten.
Wenn Sie m�chten k�nnen Sie zus�tzlich E-Mail Adressen angeben, welche den Newsletter erhalten sollen.
Abschlie�end geben Sie die Nachricht, welche Sie versenden m�chten, ein und w�hlen, ob der Newsletter als pers�nliche Nachricht oder als E-Mail verschickt werden soll.</li>
<li><strong>Einstellungen</strong><br />
Diese Sektion enth�lt einige Einstellungen, die mit News/Neuigkeiten und Newslettern zu tun haben. Dies schlie�t auch mit ein, welche Gruppen Foren News bearbeiten und Newsletter versenden k�nnen.
Sie k�nnen au�erdem einstellen, ob News Feeds f�r das Forum aktiviert sein sollen und wie viele Zeichen einer News im News Feed angezeigt werden.</li>
</ul>
';

$helptxt['view_members'] = '
	<ul>
		<li>
			<b>Mitglieder anzeigen</b><br />
			Hier k�nnen Sie alle Mitglieder sehen, welche im Forum registriert sind. Sie k�nnen
			auf den Namen eines Mitglieds klicken, um zu dem betreffenden Profil mit weiteren Informationen 
			zu gelangen (Homepage, Alter etc.).	Als Administrator haben Sie die M�glichkeit, diese
			Angaben zu �ndern bzw. das Benutzerkonto zu l�schen.<br /><br />
		</li>
		<li>
			<b>Erwartete Genehmigungen</b><br />
			Dieser Button wird nur angezeigt, wenn Sie die Genehmigung aller neuen Registrierungen durch den Administrator aktiviert haben.
			Jeder Benutzer, der sich registriert, wird erst Mitglied des Forums sein, wenn der Administrator das Benutzerkonto genehmigt hat.
			Der Bereich listet alle Mitglieder inkl. E-Mail und IP-Adresse auf, die auf ihre Genehmigung warten. Sie k�nnen
			w�hlen, ob Sie das Mitglied genehmigen oder ablehnen m�chten, indem Sie das kleine K�stchen neben dem Mitglied
			w�hlen und im Drop-Down Menu die entsprechende Aktion aussuchen. Sollten Sie ein Mitglied ablehnen,
			k�nnen Sie es wahlweise mit oder ohne Benachrichtigung l�schen.<br /><br />
		</li>
		<li>
			<b>Erwartete Aktivierungen</b><br />
			Dieser Button wird nur angezeigt, wenn Sie die Aktivierung der Benutzerkonten eingeschaltet haben. Von hier
			aus k�nnen Sie alle Mitglieder ansehen, die Ihr Benutzerkonto noch nicht aktiviert haben. Sie haben die M�glichkeit,
			die Mitglieder zu genehmigen, abzulehnen oder an die Aktivierung zu erinnern. Wie oben schon erw�hnt, kann das
			L�schen mit oder ohne Benachrichtigung erfolgen.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<b>Mitglieder bannen</b><br />
	SMF bietet die M�glichkeit, bestimmte Mitglieder zu "bannen", weil sie aufgrund von Spam u.a. gegen die Nutzungsbedingungen
	versto�en haben. Als Administrator k�nnen Sie in jedem Beitrag die IP-Adresse des Benutzers sehen und diese einfach in die
	Bann-Liste eintragen, so dass der betreffende Benutzer nicht mehr unter dieser IP-Adresse schreiben kann.<br />Sie haben auch die
	M�glichkeit, die Benutzer durch die Eingabe ihrer E-Mail-Adresse zu bannen.';

$helptxt['featuresettings'] = '<strong>Features &amp; Optionen</strong><br />
	Hier k�nnen Sie verschiedene Einstellungen zu den einzelnen Features machen.';

$helptxt['securitysettings'] = '<b>Sicherheit &amp; Moderation</b><br />
	Hier k�nnen Sie Einstellungen bez�glich der Sicherheit und der Moderation �ndern.';

$helptxt['modsettings'] = '<b>Features &amp; Optionen</b><br />
	Hier k�nnen Sie die Einstellungen spezieller Funktionen �ndern, die in SMF integriert sind.';

$helptxt['number_format'] = '<b>Standard-Zahlenformat</b><br />
	Hier k�nnen Sie das Zahlenformat bestimmen, welches im Forum angezeigt wird. Hier ein Beispiel:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Das \'Komma\' ist das Tausender Trennzeichen, der \'Punkt\' das Dezimal Trennzeichen und abschlie�end die Anzahl der Nullen als Rundungsstellen.';

$helptxt['time_format'] = '<b>Voreingestelltes Zeitformat</b><br />
	Hier k�nnen Sie einzustellen, wie das Datum und die Zeit angezeigt werden. Die Vorgabe folgt den
	PHP-Richtlinien und ist im folgenden beschrieben (mehr Details unter <a href="http://www.php.net/manual/function.strftime.php">php.net</a>).<br />
	<br />
	Die folgenden Zeichen sind bei der Einstellung zu verwenden (Gro�-/Kleinschreibung beachten!): <br /><br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - abgek�rzter Name des Wochentags<br />
	&nbsp;&nbsp;%A - voller Name des Wochentags<br />
	&nbsp;&nbsp;%b - abgek�rzter Monatsname<br />
	&nbsp;&nbsp;%B - voller Monatsname<br />
	&nbsp;&nbsp;%d - Tag des Monats (01 bis 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - das gleiche wie %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - Tag des Monats (1 bis 31)<br />
	&nbsp;&nbsp;%H - Stunde einer 24-Stunden Uhr (von 00 bis 23) <br />
	&nbsp;&nbsp;%I - Stunde einer 12-Stunden Uhr (von 01 bis 12) <br />
	&nbsp;&nbsp;%m - aktueller Monat als Zahl (01 to 12) <br />
	&nbsp;&nbsp;%M - Minute als Zahl <br />
	&nbsp;&nbsp;%p - "am" oder "pm" zur eingestellten Zeit hinzuf�gen<br />
	&nbsp;&nbsp;%R<b>*</b> - Zeit in 24-Stunden Anzeige <br />
	&nbsp;&nbsp;%S - Sekunde als Dezimalzahl <br />
	&nbsp;&nbsp;%T<b>*</b> - aktuelle Zeit, gleichwertig zu %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2-stelliges Jahr (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4-stelliges Jahr<br />
	&nbsp;&nbsp;%Z - Zeit-Zone, Name oder Abk�rzung der Zeit-Zone <br />
	&nbsp;&nbsp;%% - ein \'%\' Zeichen <br />
	<br />
	<i>* Funktioniert nicht auf Windows basierenden Servern</i></span>';

$helptxt['live_news'] = '<b>Aktuelles von Simple Machines...</b><br />
	Diese Box zeigt aktuelle Meldungen von <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> an.
	Sie sollten hier regelm��ig wegen Updates, neuen Versionen und wichtigen Informationen vom Simple Machines Team vorbeischauen.';

$helptxt['registrations'] = '<b>Registrierungs-Management</b><br />
	Hier finden Sie alle Funktionen, die Sie zum Verwalten von neuen Mitgliedern ben�tigen. Es gibt drei Bereiche,
	welche je nach Einstellungen des Forums sichtbar sind:<br /><br />
	<ul>
		<li>
			<b>Neues Mitglied registrieren</b><br />
			Hier k�nnen Sie neue Mitglieder registrieren. Diese Funktion ist n�tzlich bei deaktivierter
			Registrierung oder wenn der Administrator ein Testkonto erstellen m�chte. Wenn die Aktivierung
			der Benutzerkonten eingeschaltet ist, erhalten die Mitglieder eine E-Mail mit dem Aktivierungslink,
			welchem sie folgen m�ssen, bevor sie sich einloggen k�nnen. Alternativ k�nnen Sie dem neuen Mitglied
			auch eine E-Mail mit dem Passwort an die angegebene Adresse schicken.<br /><br />
		</li>
		<li>
			<b>Nutzungsbedingungen editieren</b><br />
			Diese Funktion erlaubt das Editieren der Nutzungsbedingungen, welche bei einer Neuregistrierung angezeigt werden.
			Sie k�nnen zu dem Originaltext neue Bedingungen hinzuf�gen oder l�schen.
		</li>
		<li>
			<b>Reservierte Namen</b><br />
			Diese Funktion erlaubt das Hinzuf�gen von W�rtern oder Namen, die nicht von anderen Benutzern verwendet werden
			d�rfen.<br /><br />
		</li>
		<li>
			<b>Einstellungen</b><br />
			Dieser Bereich wird nur sichtbar sein, wenn Sie die Berechtigung zum Administrieren des Forums haben. Hier k�nnen
			Sie unter anderem Einstellungen zur Registrierungsmethode und der Altersbegrenzung machen.
		</li>
	</ul>';

$helptxt['modlog'] = '<b>Moderator-Protokoll</b><br />
	Hier k�nnen die Administratoren alle Aktionen der Moderatoren verfolgen. Damit Moderatoren keine Hinweise zu ihren
	Aktionen l�schen k�nnen, ist es fr�hestens nach 24 Stunden m�glich, diese Eintr�ge zu l�schen.
	Die \'Objekte\'-Spalte listet alle Details zu der betreffenden Aktion auf.';
$helptxt['adminlog'] = '<b>Administrator-Protokoll</b><br />
In dieser Sektion k�nnen Administratoren durchgef�hrte administrative Aktionen nach zu verfolgen. Damit Administratoren die Spuren ihrer Aktionen nicht verwischen/entfernen k�nnen k�nnen Eintr�ge erst nach 24 Stunden gel�scht werden.';
$helptxt['warning_enable'] = '<b>Verwarnungssystem</b><br />
	Diese Funktion erlaubt den Administratoren und Moderatoren andere Benutzer zu verwarnen und mit Hilfe des Verwarnungslevels 
	bestimmte Sanktionen zu erlassen. Nach der Aktivierung kann mit Hilfe einer Berechtigung bestimmt werden, welche Mitgliedergruppen
	Verwarnungen vergeben d�rfen. Das Verwarnungslevel kann im betreffenden Profil ge�ndert werden. Die folgenden Optionen 
	sind verf�gbar:
	<ul>
		<li>
			<b>Verwarnungslevel f�r Beobachtung des Benutzers</b><br />
			Diese Einstellung definiert den Prozentwert, ab dem der Benutzer automatisch beobachtet wird.
			Jeder beobachtete Benutzer erscheint im entsprechenden Bereich des Moderator-Center.
		</li>
		<li>
			<b>Verwarnungslevel f�r Moderation der Beitr�ge</b><br />
			Diese Einstellung definiert den Prozentwert, ab dem die Beitr�ge des Benutzers von einem Moderator genehmigt
			werden m�ssen, bevor sie im Forum erscheinen. Damit wird jede existierende Boardberechtigung �berschrieben.
		</li>
		<li>
			<b>Verwarnungslevel f�r die Stummschaltung des Benutzers</b><br />
			Diese Einstellung definiert den Prozentwert, ab dem der Benutzer mit einem Schreib-Bann belegt wird. Der Benutzer verliert damit alle 
			Rechte im Forum zu schreiben.
		</li>
		<li>
			<b>Max. Verwarnungspunkte f�r einen Benutzer pro Tag</b><br />
			Diese Einstellung limitiert die Punkteanzahl, die ein Moderator dem Benutzer pro Tag hinzuf�gen kann. Sie kann deaktiviert 
			werden, in dem Sie den Wert auf 0 setzen. Beachten Sie, dass Administratoren von dieser Einstellunge nicht betroffen sind.
		</li>
	</ul>';
$helptxt['error_log'] = '<b>Fehlerprotokoll</b><br />
	Das Fehlerprotokoll listet alle Fehler, die von Benutzern im Forum produziert worden sind, nach Datum sortiert auf. Um den neuesten Fehler
	zuerst anzuzeigen, klicken Sie auf den kleinen schwarzen Pfeil neben dem Datum. Weiterhin k�nnen Sie die Fehlermeldungen
	nach der Art des Fehlers filtern, indem Sie auf die Grafik neben der entsprechenden Angabe klicken (z.B. filtern nach Benutzernamen).
	Wenn ein Filter aktiv ist, werden nur die �bereinstimmenden Fehler angezeigt.';
$helptxt['theme_settings'] = '<b>Theme-Einstellungen</b><br />
	Hier k�nnen Sie die Einstellungen jedes einzelnen Themes ver�ndern. Die Einstellungen betreffen u.a. das Theme-Verzeichnis
	und die URL Informationen, sowie viele Einstellungen zum Layout. Die meisten Themes enthalten eine Vielzahl von konfigurierbaren Optionen,
	welche es erlauben, das Theme den pers�nlichen W�nschen anzupassen.';
$helptxt['smileys'] = '<b>Smileys &amp; Beitragssymbole</b><br />
	Hier k�nnen Sie Smileys oder Smiley-Sets hinzuf�gen oder l�schen. Beachten Sie, dass jeder Smiley aus einem Set auch in den anderen sichtbar ist, da es sonst bei Verwendung verschiedener Sets zu Verwirrungen kommen k�nnte.<br /><br />
	Sie k�nnen hier ebenfalls die Beitragssymbole ver�ndern, wenn Sie diese in den Einstellungen aktiviert haben.';
$helptxt['calendar'] = '<b>Kalender verwalten</b><br />
	Hier k�nnen Sie die Einstellungen des Kalenders ver�ndern sowie Feiertage hinzuf�gen bzw. l�schen.';

$helptxt['serversettings'] = '<b>Servereinstellungen</b><br />
	Hier k�nnen Sie die Zentral- bzw. Zusatzkonfiguration Ihres Forums einstellen. Dieser Bereich enth�lt Einstellungen zur Datenbank,
	die Verzeichnispfade sowie andere wichtige Einstellungen zu E-Mail und dem Cache. Bitte handeln Sie hier mit erh�hter Vorsicht,
	da Ihr Forum unter Umst�nden nicht mehr funktionieren kann.';
$helptxt['manage_files'] = '<ul class="normallist">
	<li>
		<b>Dateien durchsuchen</b><br />
		Durchsuchen Sie alle Anh�nge, Avatare und Thumbnails die vom SMF gespeichert wurden.<br /><br />
	</li><li>
		<b>Dateianhangs Einstellungen</b><br />
		Legen Sie fest, wo Dateianh�nge gespeichert werden und geben Sie an, welche Dateitypen erlaubt sind.<br /><br />
	</li><li>
		<b>Benutzerbild-Einstellungen</b><br />
		Legen Sie fest, wo Benutzerbilder gespeichert werden und konfigurieren Sie die Gr��enanpassung von diesen.<br /><br />
	</li><li>
		<b>Dateien warten</b><br />
		�berpr�fen und reparieren Sie Fehler im Anhangs-Verzeichnis oder l�schen sie gew�hlte Anh�nge.<br /><br />
	</li>
</ul>';

$helptxt['topicSummaryPosts'] = 'Anzahl der Beitr�ge, die beim Antwort-Bildschirm in der Zusammenfassung angezeigt werden.';
$helptxt['enableAllMessages'] = 'Stellen Sie hier die <em>maximale</em> Anzahl an Beitr�gen ein, bei denen der "Alle"-Beitr�ge Link angezeigt werden soll. Stellen Sie diesen Wert auf weniger als die "Anzahl der Beitr�ge pro Seite im Thema" ein, wird dieser Link nie angezeigt. Wird der Wert zu hoch angesetzt, kann das Forum sehr verlangsamt werden.';
$helptxt['enableStickyTopics'] = 'Fixierte Themen werden an erster Stelle im Themen-Index angezeigt werden. Sie werden meistens f�r wichtige
  Nachrichten verwendet. Nur Administratoren und Moderatoren k�nnen Themen fixieren.';
$helptxt['allow_guestAccess'] = 'Sollten Sie diese Option deaktivieren, k�nnen G�ste des Forums nur noch grundlegende Funktionen benutzen (Einloggen, Registrieren, Passworterinnerung etc.). Die Option hat nicht die gleichen Auswirkungen wie G�sten den Zugriff auf die Boards zu verbieten.';
$helptxt['userLanguage'] = 'Erm�glicht dem Benutzer die Auswahl einer individuellen Sprache im Forum. Betrifft nicht die Standardeinstellung.';
$helptxt['trackStats'] = 'Statistiken aktivieren:<br />Erlaubt den Benutzern verschiedene Statistiken zu sehen, z.B. die neuesten Eintr�ge, die meistbesuchten Themen, die neuesten Themen und vieles andere.<hr />
		Seitenaufrufe z�hlen:<br />F�gt den Statistiken eine weitere Spalte mit den Seitenaufrufen des Forums hinzu.';
$helptxt['titlesEnable'] = 'Diese Option erlaubt den Mitgliedern, sich einen frei definierbaren "Titel" zu geben, welcher unter dem Namen angezeigt
		wird.<br /><i>Beispiel:</i><br />Daniel D.<br />SMF-�bersetzer';
$helptxt['topbottomEnable'] = 'F�gt einen "Nach unten" bzw. "Nach oben" Button hinzu, welcher ein schnelles Navigieren zwischen Seitenanfang und Seitenende erm�glicht.';
$helptxt['onlineEnable'] = 'Ein Bild zeigt den Online-Status des Benutzers an (Online/Offline).';
$helptxt['todayMod'] = 'Zeigt "Heute" und/oder "Gestern" statt des Datums an.<br /><br /> <strong>Beispiele:</strong><br /><br /> <dt> <dt>deakiviert</dt> <dd>3. Oktober 2009 um 12:59:18</dd> <dt>nur Heute</dt> <dd>Heute um 12:59:18</dd> <dt>Heute und Gestern<dt> <dd>Gestern um 09:36:55</dd> </dt>';
$helptxt['disableCustomPerPage'] = 'Diese Option verhindert, dass Benutzer die Anzahl von Themen oder Beitr�gen pro Seite selbst festlegen k�nnen.';
$helptxt['enablePreviousNext'] = 'Zeigt einen Link zum n�chsten bzw. vorherigen Thema an.';
$helptxt['pollMode'] = 'Aktiviert oder deaktiviert die Umfragen. Sollten Sie die Umfragen deaktivieren, werden alle existierenden
    Umfragen auf dem Themen-Index versteckt. Sollen die Themen weiterhin angezeigt werden, dann w�hlen Sie "Umfragen als
    Themen anzeigen".<br /><br />Um zu bestimmen, wer Umfragen erstellen und l�schen bzw. in ihnen abstimmen kann, stellen Sie die
    entsprechenden Berechtigungen ein. Beachten Sie dies bitte, wenn die Umfragen nicht funktionieren sollten.';
$helptxt['enableVBStyleLogin'] = 'Zeigt ein kleines Login-Feld am unteren Bildschirmrand an.';
$helptxt['enableCompressedOutput'] = 'Aktiviert die komprimierte Daten�bertragung, um Bandbreite zu sparen. Erfordert ein installiertes \'zlib\' auf dem Server.';
$helptxt['disableTemplateEval'] = 'Standardm��ig werden Templates verarbeitet statt nur inkludiert. Dies hilft dabei hilfreiche Debug Informationen anzuzeigen, wenn das Template einen Fehler enth�lt.<br/>
<br/>
Bei gro�en Foren kann dieser eigene Inkludierungs-Prozess wesentlich mehr Zeit in Anspruch nehmen. Deshalb m�chten erfahrene Benutzer dies eventuell deaktivieren.';
$helptxt['databaseSession_enable'] = 'Verwendet die Datenbank zum Speichern von Sitzungen und ist das Beste f�r eine ausgeglichene Belastung des Servers. Die Option hilft bei den sogenannten \'Timeouts\' und macht das Forum unter Umst�nden schneller.';
$helptxt['databaseSession_loose'] = 'Reduziert die Bandbreite, welche Ihr Forum ben�tigt, jedoch wird bei einem Klick auf den Zur�ck-Button im Browser die vorherige Seite nicht neu geladen, die \'Neue Beitr�ge\' Symbole und andere Werte werden daher nicht aktualisiert.';
$helptxt['databaseSession_lifetime'] = 'Anzahl der Sekunden f�r die L�nge einer Datenbanksitzung. Sollte eine Sitzung eine Zeit lang nicht gebraucht werden, wird sie als "verloren gegangen" bezeichnet. Empfohlen wird mindestens der Wert 2400.';
$helptxt['enableErrorLogging'] = 'Erfasst alle Fehlermeldungen im Forum (z.B. fehlerhafter Login etc.).';
$helptxt['enableErrorQueryLogging'] = 'Diese Option f�gt die komplette Datenbankabfrage in das Fehlerprotokoll ein - dazu muss das protokollieren von Fehlern aktiviert sein.<br /><br /><strong>Achtung: Damit geht die M�glichkeit verloren, das Fehlerprotokoll nach Fehlermeldungen zu filtern.</strong>';
$helptxt['allow_disableAnnounce'] = 'Diese Option erlaubt den Benutzern, die Benachrichtigung bei neuen Ank�ndigungen zu deaktivieren.';
$helptxt['disallow_sendBody'] = 'Verhindert das Versenden von Text aus Antworten oder neuen Beitr�gen in den Benachrichtigungs E-Mails.<br /><br />Oftmals antworten Mitglieder auf diese E-Mails, so dass der Webmaster eine Flut an E-Mails erh�lt.';
$helptxt['compactTopicPagesEnable'] = 'Zeigt nur eine bestimmte Anzahl der Seitennummern an.<br /><i>Beispiel:</i>
		"3" f�r: 1 ... 4 [5] 6 ... 9 <br />
		"5" f�r: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Zeigt am unteren Bildschirmrand die Zeit in Sekunden an, die SMF f�r das Erstellen gebraucht hat.';
$helptxt['removeNestedQuotes'] = 'Dies wird alle verschachtelten Kommentare eines Beitrags entfernen wenn man einen solchen Beitrag �ber den entsprechenden Link zitiert.';
$helptxt['simpleSearch'] = 'Zeigt eine vereinfachte Suchmaske an.';
$helptxt['max_image_width'] = 'Erlaubt die Angabe einer maximalen Bildergr��e. Bilder die kleiner sind, werden dadurch nicht beeintr�chtigt.';
$helptxt['mail_type'] = 'Diese Option erlaubt das W�hlen zwischen den Standardeinstellungen von PHP und den SMTP-Einstellungen. PHP unterst�tzt keine Authentifizierung mit SMTP (wie viele Hosts es heutzutage erfordern), so dass Sie nur SMTP aktivieren m�ssen, wenn Sie es benutzen m�chten. SMTP kann in der Nutzung langsamer sein und manche Server nehmen keine Benutzernamen und Kennw�rter an.<br /><br />Sie m�ssen keine SMTP Daten eingeben, wenn Sie den PHP-Standard benutzen.';
$helptxt['attachment_manager_settings'] = 'Dateianh�nge sind Dateien, die von den Benutzern hochgeladen und an den Beitrag angeh�ngt werden k�nnen.<br /><br />
		<b>Dateitypen pr�fen:</b><br /> Pr�ft die verwendeten Dateiendungen.<br />
		<b>Erlaubte Dateitypen:</b><br /> Hier k�nnen Sie die erlaubten Dateiendungen angeben, die verwendet werden d�rfen.<br />
		<b>Upload-Pfad f�r Dateianh�nge:</b><br /> Der Pfad zu Ihrem Dateianhangsverzeichnis.<br />(Beispiel: /home/ihre/seite/www/forum/attachments)<br />
		<b>Max. Gr��e des Verzeichnisses (in KB):</b><br /> W�hlen Sie die max. Gr��e des Dateianhangsverzeichnisses aus.<br />
		<b>Max. Gr��e der Dateianh�nge pro Beitrag (in KB):</b><br /> W�hlen Sie die max. Gr��e aller Dateianh�nge aus, die einem Beitrag angeh�ngt werden k�nnen.<br />
		<b>Max. Gr��e pro Dateianhang (in KB):</b><br /> W�hlt die max. Gr��e eines Dateianhangs aus.<br />
		<b>Max. Anzahl der Dateianh�nge pro Beitrag:</b><br /> W�hlt die Anzahl der Dateianh�nge, die ein Benutzer pro Beitrag anh�ngen kann.<br />
		<b>Dateianhang als Bild im Beitrag anzeigen:</b><br /> Wenn die hochgeladene Datei ein Bild ist, wird es unterhalb des Beitrags angezeigt.<br />
		<b>Bilder verkleinern, wenn sie im Beitrag angezeigt werden:</b><br /> Wenn die vorherige Option aktiviert ist, wird ein seperates (kleineres) Vorschaubild gespeichert, um Bandbreite zu sparen.<br />
		<b>Max. Breite und H�he der Vorschaubilder:</b><br /> Wird in Verbindung mit der Option "Bilder verkleinern, wenn sie im Beitrag angezeigt werden" benutzt und gibt die max. Breite bzw. H�he der Vorschaubilder an. Diese werden proportional verkleinert.';
$helptxt['attachment_image_paranoid'] = 'Bei Auswahl dieser Option erfolgt eine strenge Sicherheitskontrolle der Bild Anh�nge. Warnung! Diese umfangreiche Sicherheitskontrolle kann eine gro�e Zahl von abgelehnten Anh�ngen verursachen. Es wird dringend empfohlen, diese Option nur zusammen mit Bild Neukodierung zu verwenden, wo SMF die Bilder neu Kodiert. Ist die Bild Neukodierung nicht aktiviert, werden die Bild Anh�nge �berpr�ft und gegebenenfalls zur�ckgewiesen.
';
$helptxt['attachment_image_reencode'] = 'Bei Auswahl dieser Option wird versucht, hochgeladene Bild neu zu kodieren. Die Bild Neukodierung bietet mehr Sicherheit. Beachten Sie jedoch, dass die Bild Neukodierung alle animierte Bilder statisch macht.<br />Diese Funktion ist nur anwendbar, wenn das GD Modul auf dem Server installiert ist.
';
$helptxt['avatar_paranoid'] = 'Bei Auswahl dieser Option erfolgt eine strenge Sicherheitskontrolle der Benutzerbilder. Warnung! Diese umfangreiche Sicherheitskontrolle kann eine gro�e Zahl von abgelehnten Bildern verursachen. Es wird dringend empfohlen, diese Option nur zusammen mit Bild Neukodierung zu verwenden, wo SMF die Bilder neu Kodiert. Ist die Bild Neukodierung nicht aktiviert, werden die Benutzerbilder �berpr�ft und gegebenenfalls zur�ckgewiesen.';
$helptxt['avatar_reencode'] = 'Bei Auswahl dieser Option wird versucht, hochgeladene Benutzerbilder neu zu kodieren. Die Bild Neukodierung bietet mehr Sicherheit. Beachten Sie jedoch, dass die Bild Neukodierung alle animierte Benutzerbilder statisch macht.<br />Diese Funktion ist nur anwendbar, wenn das GD Modul auf dem Server installiert ist.';
$helptxt['karmaMode'] = 'Karma zeigt die Beliebtheit eines Mitglieds im Forum an. Sie k�nnen die Anzahl der Beitr�ge festlegen, ab der Karma genutzt werden darf,
		die Zeit zwischen zwei Abstimmungen und ob der Administrator auch von diesem Zeitlimit erfasst werden soll.';
$helptxt['cal_enabled'] = 'Der Kalender kann benutzt werden, um Geburtstage oder andere Ereignisse anzuzeigen.<hr />
		<b>Datum als Link f�r neues Ereignis:</b><br />Erstellt ein neues Ereignis, wenn der Benutzer auf die aktuelle Datumszahl klickt.<br />
		<b>Wochennummer anzeigen:</b><br />Zeigt im Kalender "Woche X" an.<br />
		<b>Max. Anzahl der zuk�nftigen Tage auf dem Board-Index:</b><br />Bestimmt die Anzahl der zuk�nftigen Tage, die auf dem Board-Index unter "Zuk�nftige Ereignisse" angezeigt werden.<br />
		<b>Feiertage anzeigen:</b><br />Zeigt die Feiertage im Kalender und/oder auf dem Board-Index an.<br />
		<b>Geburtstage anzeigen:</b><br />Zeigt die Geburtstage im Kalender und/oder auf dem Board-Index an.<br />
		<b>Ereignisse anzeigen:</b><br />Zeigt die Ereignisse im Kalender und/oder auf dem Board-Index an.<br />
		<b>Board f�r Kalenderereignisse:</b><br />W�hlen Sie das Board, in welchem die Ereignisse erstellt werden sollen.<br />
		<b>Ereignisse ohne Beitragslink erlauben:</b><br />Erlaubt das Erstellen von Ereignissen ohne dazugeh�riges Thema.<br />
		<b>Verlinkte Ereignisse im Thema anzeigen:</b><br />Zeigt einen Link zum zugeh�rigen Ereignis im Thema an.<br />
		<b>Min. Jahr:</b><br />Bestimmt das "erste" Jahr im Kalender.<br />
		<b>Max. Jahr:</b><br />Bestimmt das "letzte" Jahr im Kalender.<br />
		<b>Ereignisse d�rfen �ber mehrere Tage gehen:</b><br />Aktivieren Sie diese Option, um Ereignisse �ber mehrere Tage laufen zu lassen.<br />
		<b>Max. Ereignisdauer:</b><br />Bestimmt die Anzahl der Tage, die ein Ereignis maximal dauern kann.<br />';
$helptxt['localCookies'] = 'SMF benutzt Cookies, um die Login-Informationen auf dem Computer zu speichern.
	Cookies k�nnen global (meineseite.de) oder lokal (meineseite.de/pfad/zum/forum) gespeichert werden.<br />
	Aktivieren Sie diese Option, wenn Sie automatisch ausgeloggt werden.<hr />
	Global gespeicherte Cookies sind weniger sicher, wenn sie auf auf einem Shared-Server benutzt werden (z.B. Tripod).<hr />
	Lokal gespeicherte Cookies funktionieren nicht au�erhalb des Forum-Verzeichnis. Wenn das Forum unter www.meineseite.de/forum liegt, k�nnen Dateien wie www.meineseite.de/index.php nicht auf die Cookie Informationen zugreifen.
	Wenn Sie die Datei SSI.php benutzen, werden globale Cookies zwingend (!) ben�tigt.';
$helptxt['enableBBC'] = 'Erlaubt den Mitgliedern die Benutzung von Bulletin Board Code (BBC) im Forum, welcher den Text formatiert, Bilder einf�gt und vieles mehr.';
$helptxt['time_offset'] = 'Nicht immer ist die Serverzeit gleich der Zeit, die vom Forum genutzt werden soll. Hier k�nnen Sie die Zeitdifferenz in Stunden eintragen (positive/negative Zahl), welche den Unterschied zwischen dem Server und der Zeit im Forum macht.';
$helptxt['default_timezone'] = 'Die Server Zeitzone teilt PHP mit, in welcher Zeitzone der Server steht.
Sie sollten sicher gehen, das dies korrekt eingestellt ist, wahrscheinlich mit der Zeitzone des Landes/der Stadt in der der Server steht.
Mehr Informationen finden sie auf der <a href="http://www.php.net/manual/de/timezones.php" target="_blank">PHP Seite</a>.';
$helptxt['spamWaitTime'] = 'Tragen Sie hier ein Zeitintervall ein, das ein Benutzer zwischen zwei Beitr�gen einhalten muss. Dies kann zum Verhindern des sogenannten "Spammens" beitragen.';

$helptxt['enablePostHTML'] = 'Erlaubt das Benutzen von h�ufigen HTML Befehlen:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=""&gt;</li>
		<li>&lt;img src="" alt="" /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Hier k�nnen Sie das Standard- bzw. G�ste-Theme w�hlen, Verzeichnisse f�r die Themes �ndern, Themes editieren sowie individuelle Theme-Optionen einstellen.';
$helptxt['theme_install'] = 'Hier k�nnen Sie neue Themes installieren, indem Sie ein schon vorhandenes Verzeichnis benutzen, ein Zip-Paket hochladen oder das vorhandene Theme kopieren.<br /><br />Beachten Sie, dass das Verzeichnis bzw. das Zip-Paket die Datei <tt>theme_info.xml</tt> enthalten muss.';
$helptxt['enableEmbeddedFlash'] = 'Diese Option erlaubt den Benutzern, Flash-Filme in ihren Beitr�gen zu nutzen. Das kann ein Sicherheitsrisiko darstellen! DIE BENUTZUNG ERFOLGT AUF EIGENE GEFAHR!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Diese Option erlaubt den Benutzern, zu den <a href="%s?action=.xml;sa=news">Letzten Neuigkeiten</a> zu verlinken. Es wird empfohlen, die Gr��e der Neuesten Beitr�ge/News zu begrenzen, da es zu falschen Darstellungen in manchen Programmen wie Trillian kommen kann.';
$helptxt['hotTopicPosts'] = '�ndert die Zahl der Beitr�ge, nach denen ein Thema den Status "Hei�" oder "Sehr hei�" erh�lt.';
$helptxt['globalCookies'] = 'Erm�glicht die Nutzung von Subdomains unabh�ngigen Cookies. Ein Beispiel:<br />
	Ihre Seite hat die Domain http://www.simplemachines.org,<br />
	Ihr Forum hat die Domain http://forum.simplemachines.org,<br />
	Diese Einstellung erm�glicht es, auf die Forum-Cookies Ihrer Seite zuzugreifen. <b>Aktivieren Sie diese Einstellung nicht, wenn es noch andere Subdomains gibt, die nicht unter Ihrer Kontrolle sind!!</b>';
$helptxt['secureCookies'] = 'Wenn diese Option aktiviert ist wird erzwungen, dass die Cookies, die f�r die Benutzer des Forums erstellt werden als sicher markiert werden.
Aktivieren sie diese Option nur, wenn sie HTTPS auf ihrer gesamten Seite verwenden, da die Cookies sonst besch�digt werden!';
$helptxt['securityDisable'] = '<i>Deaktiviert</i> die erneute Passwort�berpr�fung f�r den Administratorbereich. NICHT EMPFEHLENSWERT!';
$helptxt['securityDisable_why'] = 'Das ist Ihr aktuelles Passwort (dasselbe, was Sie f�r das Einloggen benutzen).<br /><br />Warum Sie es eingeben sollten ? Damit Sie sich im Klaren dar�ber sind, dass <b>Sie</b> die �nderungen im Administrator-Center machen und daf�r verantwortlich sind.';
$helptxt['emailmembers'] = 'In dieser Nachricht k�nnen Sie folgende Variablen benutzen:<br />
	{\\$board_url} - URL zu Ihrem Forum.<br />
	{\\$current_time} - Die aktuelle Zeit.<br />
	{\\$member.email} - Die aktuelle E-Mail-Adresse des Mitglieds.<br />
	{\\$member.link} - Den aktuellen Link zum betreffenden Mitglied.<br />
	{\\$member.id} - Die aktuelle Benutzer ID.<br />
	{\\$member.name} - Den aktuellen Mitgliedsnamen (f�r Private Mitteilungen).<br />
	{\\$latest_member.link} - Den Link zum neuesten Mitglied.<br />
	{\\$latest_member.id} - Die ID des neuesten Mitglieds.<br />
	{\\$latest_member.name} - Der Name des neuesten Mitglieds.';
$helptxt['attachmentEncryptFilenames'] = 'Verschl�sselte Dateinamen erlauben die Nutzung eines gleichen Dateinamens, sicheres Hochladen einer .php Datei und erh�ht die allgemeine Sicherheit. Andererseits macht es das Wiederherstellen der Datenbank nach einem gro�en Crash schwieriger.';

$helptxt['failed_login_threshold'] = 'Geben Sie die Anzahl der erfolglosen Login-Versuche an, bevor der Benutzer zum Bildschirm \'Passwort vergessen?\' weitergeleitet wird.';
$helptxt['oldTopicDays'] = 'Ist diese Option aktiviert, wird dem Benutzer eine Warnung ausgegeben, wenn er in einem Thema schreiben m�chte, in welchem seit der eigestellten Zeit (in Tagen) keiner mehr geantwortet hat. Setzen Sie den Wert auf 0, um die Funktion zu deaktivieren.';
$helptxt['edit_wait_time'] = 'Anzahl in Sekunden, bevor das Datum des letzten Editierens gespeichert wird.';
$helptxt['edit_disable_time'] = 'Anzahl in Minuten, nach denen ein Benutzer seine eigenen Beitr�ge noch editieren darf. Setzen Sie den Wert auf 0, um die Funktion zu deaktivieren.<br /><br /><i>Beachten Sie: Diese Option hat keinen Effekt auf die Benutzer, welche Beitr�ge anderer Mitglieder editieren d�rfen!</i>';
$helptxt['posts_require_captcha'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor der Beitrag ver�ffentlicht wird. Dies betrifft nur die Benutzer, welche unter die angegebene Anzahl fallen und soll das Spammen durch automatische Skripte verhindern.';
$helptxt['enableSpellChecking'] = 'Aktiviert die Rechtschreibepr�fung. Sie M�SSEN die pspell Bibliothek auf dem Server installiert haben und PHP muss so konfiguriert sein, dass es selbige auch benutzt. Ihr Server ' . (function_exists('pspell_new') ? 'HAT' : 'HAT NICHT') . ' diese Funktion.';
$helptxt['disable_wysiwyg'] = 'Diese Option verhindert die Benutzung des WYSIWYG-Editors ("What You See Is What You Get" - Was Sie sehen ist was Sie bekommen) auf der Antwortseite.';
$helptxt['lastActive'] = 'Gibt die Anzahl in Minuten an, in welcher die Besucher auf dem Board-Index als aktiv gekennzeichnet werden. Standard sind 15 Minuten.';

$helptxt['customoptions'] = 'Dieser Bereich definiert die Optionen, die ein Benutzer aus einem Drop-Down Men� w�hlen kann. Hier m�ssen ein paar Punkte beachtet werden:
	<ul>
		<li><b>Standardoption:</b> Das durch den Radio Button ausgew�hlte Textfeld ist die aktivierte Standardoption, wenn der Benutzer zum ersten Mal sein Profil anschaut.</li>
		<li><b>Optionen l�schen:</b> Um eine Option zu l�schen, entfernen Sie einfach den Text aus dem betreffenden Textfeld. Bei allen Benutzer, die diese Option gew�hlt hatten, wird sie zur�ckgesetzt.</li>
		<li><b>Optionen neu ordnen:</b> Sie k�nnen die Optionen neu ordnen, in dem Sie den Text von einem Textfeld in ein anderes schreiben. Seien Sie aber absolut sicher, dass Sie den Text <b>nicht</b> ver�ndern, da sonst alle Benutzerdaten verlorengehen.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Diese Funktion optimiert die Datenbank alle angegebenen Tage. Geben Sie 1 ein, um die Datenbank t�glich zu optimieren. Sie k�nnen ebenfalls eine max. Zahl von Benutzern angeben, die online sein d�rfen, damit es keine Probleme mit der Geschwindigkeit gibt.';
$helptxt['autoFixDatabase'] = 'Diese Funktion repariert automatisch auftretende Fehler, wobei die Benutzer nichts davon merken werden. Das kann sinnvoll sein, andererseits ist das Forum bei Fehlern so lange funktionsunt�chtig, bis Sie selbst darauf aufmerksam werden. Ihnen wird in diesem Fall eine E-Mail zugesendet.';

$helptxt['enableParticipation'] = 'Zeigt ein ver�ndertes Symbol vor den Themen, in denen man selbst geantwortet hat.';

$helptxt['db_persist'] = 'Erh�ht die Geschwindigkeit zur Datenbank, indem eine Verbindung dauerhaft aufrecht erhalten wird. Wenn Sie einen dedizierten Server benutzen, k�nnte es Probleme mit Ihrem Serveranbieter geben.';
$helptxt['ssi_db_user'] = 'Diese Einstellung erlaubt das Benutzen eines anderen Benutzernamens bzw. Passwortes f�r die Datenbank, wenn mit der Datei SSI.php gearbeitet wird.';

$helptxt['queryless_urls'] = 'Ver�ndert das Format der URLs ein bisschen, so dass Suchmaschinen sie besser verarbeiten k�nnen.
Diese sehen dann zum Beispiel so aus: index.php/topic,1.0.html.

Diese Option funktioniert ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'nicht') . ' mit Ihrem Server.';
$helptxt['countChildPosts'] = 'Aktivieren Sie diese Option, um die Beitr�ge und Themen der untergeordneten Boards zum Gesamtwert auf dem Board-Index zu addieren.<br /><br />Diese Funktion macht die Anzeige merklich langsamer, zeigt aber keine Boards mehr mit \'0\' an, wenn diese untergeordnete Boards mit Beitr�gen enthalten.';
$helptxt['fixLongWords'] = 'Diese Option verk�rzt W�rter einer bestimmten L�nge (Autolenkrad = Autol...), so dass diese nicht das Layout des Forums zerst�ren.';
$helptxt['allow_ignore_boards'] = 'Diese Option erlaubt den Benutzern bestimmte Boards zu ignorieren.';

$helptxt['who_enabled'] = 'Aktiviert die \'Wer ist online\' Funktion, welche dem Benutzer anzeigt, wer online ist und was der Benutzer gerade macht.';

$helptxt['recycle_enable'] = '"Wiederherstellung" von gel�schten Themen und Beitr�gen in die entsprechenden Boards.';

$helptxt['enableReportPM'] = 'Diese Option erlaubt den Benutzern das Melden von Privaten Mitteilungen an die Administratoren. Sie soll helfen, Mi�br�uche des Privaten Mitteilungen Systems zu verfolgen bzw. zu verhindern.';
$helptxt['max_pm_recipients'] = 'Diese Option erlaubt die Vergabe einer max. Anzahl von Empf�ngern, die ein Benutzer beim Schreiben einer Privaten Mitteilung eingeben kann. Dies soll helfen, dass sogenannte Spammen im Forum zu vermeiden. Benutzer mit der Berechtigung zum Senden von Newslettern sind von dieser Beschr�nkung ausgeschlossen. Geben Sie 0 f�r kein Limit ein.';
$helptxt['pm_posts_verification'] = 'Diese Option zwingt den Benutzer, einen Code von einem Bild einzugeben, bevor die Private Mitteilung versendet wird. Dies betrifft nur die Benutzer, welche unter die angegebene Anzahl fallen und soll das Spammen durch automatische Skripte verhindern.';
$helptxt['pm_posts_per_hour'] = 'Diese Einstellung limitiert die Anzahl der Privaten Mitteilungen, die von einem Benutzer in einer Stunde versendet werden k�nnen. Sie betrifft nicht Administratoren oder Moderatoren.';

$helptxt['default_personal_text'] = 'Gibt den Text an, den ein Benutzer als "pers�nlichen Text" standardm��ig hat.';

$helptxt['modlog_enabled'] = '�berwacht alle Aktionen der Moderatoren.';

$helptxt['guest_hideContacts'] = 'Diese Option versteckt die E-Mail-Adresse und die Messenger Angaben aller Mitglieder vor G�sten.';

$helptxt['registration_method'] = 'Diese Option stellt verschiedene M�glichkeiten der Registrierung zur Verf�gung. Sie k�nnen aus folgenden w�hlen:<br /><br />
	<ul class="normallist">
		<li>
			<b>Sofortige Registrierung</b><br />
				Neue Mitglieder k�nnen sich sofort einloggen und Beitr�ge schreiben, nachdem Sie sich registriert haben.<br />
		</li><li>
			<b>Neue Mitglieder aktivieren</b><br />
				Nach der Registrierung erhalten neue Mitglieder eine E-Mail mit einem Aktivierungslink, welchen Sie anklicken m�ssen, bevor sie das Forum nutzen k�nnen.<br />
		</li><li>
			<b>Neue Mitglieder genehmigen</b><br />
				Alle neuen Mitglieder m�ssen zuerst vom Administrator genehmigt werden, bevor sie das Forum nutzen k�nnen.
		</li><li>
				<b>Registrierung deaktivieren:</b><br />
				Deaktiviert die Registrierung, so dass sich keine neuen Mitglieder im Forum registrieren k�nnen.<br />
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Authentifizierung mit OpenID</b><br />
	OpenID ist ein Verfahren ein Benutzerkonto auf mehreren Webseiten zu verwenden. Um ein OpenID Konto zu verwenden, m�ssen Sie zun�chst eines erstellen - Eine Liste verf�gbarer Anbieter findet sich auf der <a href="http://openid.net/" target="_blank">offiziellen OpenID Seite</a>.<br /><br />
	Wenn Sie ein OpenID Konto haben, geben Sie einfach die eindeutige URL in das OpenID Eingabefeld ein und senden das Formular ab. Sie werden dann zu der Seite ihres Anbieters weitergeleitet um sich zu authentifizieren, um anschlie�end wieder hier hin zur�ck geleitet zu werden.<br /><br />
	Bei ihrem ersten Besuch auf dieser Seite werden sie nach einigen Details gefragt, bevor sie erkannt werden und sich einloggen k�nnen und ihre Profildetails �ndern k�nnen.<br /><br />
	F�r mehr Informationen besuchen Sie die <a href="http://openid.net/" target="_blank">offizielle OpenID Seite</a>';

$helptxt['send_validation_onChange'] = 'Alle Mitglieder m�ssen bei einer �nderung der E-Mail-Adresse diese best�tigen, bevor sie ihr Benutzerkonto wieder nutzen k�nnen..';
$helptxt['send_welcomeEmail'] = 'Diese Option versendet allen neuen Mitgliedern eine Willkommens E-Mail, wenn diese sich im Forum registrieren.';
$helptxt['password_strength'] = 'Diese Einstellung bestimmt die "Qualit�t" der Passw�rter aller Benutzer. Je komplexer das Passwort, desto schwieriger ist es zu erraten.
	Die verf�gbaren Optionen sind:
	<ul>
		<li><b>Niedrig:</b> Das Passwort muss aus mindestens vier Zeichen bestehen.</li>
		<li><b>Mittel:</b> Das Passwort muss mindestens acht Zeichen haben und darf nicht aus Teilen des Benutzernamens oder der E-Mail-Adresse bestehen.</li>
		<li><b>Hoch:</b> Gleiche Voraussetzungen wie Mittel, das Passwort muss au�erdem einen Mix aus Gro�- und Kleinbuchstaben sowie mindestens eine Zahl enthalten.</li>
	</ul>';

$helptxt['coppaAge'] = 'Dieser Wert gibt das Mindestalter an, welches ein neues Mitglied haben muss, damit es sich im Forum registrieren darf.
	W�hrend der Registrierung muss angegeben werden, ob der Benutzer �lter oder j�nger als das Mindestalter ist. Die Registrierung wird je nach Einstellung abgelehnt oder suspendiert, bis die Genehmigung der Eltern vorhanden ist.
	Sollten Sie einen Wert von 0 eingeben, werden alle Funktionen bez�glich der Alterbeschr�nkung deaktiviert.';
$helptxt['coppaType'] = 'Sollte die Altersbeschr�nkung aktiviert sein, bestimmt diese Option, was mit den Registrierungen der Benutzer passiert, die j�nger als das Mindestalter sind. Es gibt die folgenden zwei M�glichkeiten:
	<ul>
		<li>
			<b>Registrierung anlehnen:</b><br />
				Die Registrierung neuer Mitglieder unterhalb des Mindestalters wird sofort abgelehnt.<br />
		</li><li>
			<b>Erfordert Genehmigung von Eltern/Erziehungsberechtigten</b><br />
				Die Benutzerkonten neuer Mitglieder unterhalb des Mindestalters werden auf "Erwarte Genehmigung" gesetzt und es wird ein Formular angezeigt, mit dem die Eltern die Genehmigung f�r die Mitgliedschaft im Forum erteilen m�ssen.
				Ihnen werden ebenso die Kontaktm�glichkeiten angezeigt, mit denen das Formular an den Administrator geschickt werden kann (per Post oder per Fax).
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Die Textfelder mit den Kontaktangaben sind erforderlich, damit das Formular an den Administrator geschickt werden kann. Die Angaben werden allen neuen Mitgliedern angezeigt, die das Mindestalter noch nicht erreicht haben und sind f�r die Genehmigung durch Eltern/Erziehungsberechtigte unbedingt notwendig. Es sollte mindestens eine Postadresse oder eine Faxnummer angegeben werden.';

$helptxt['allow_hideOnline'] = 'Aktivieren Sie diese Option, k�nnen alle Mitglieder ihren Online-Status verstecken (au�er vor Administratoren). Wenn Sie diese Option deaktivieren, k�nnen nur Mitglieder den Status verstecken, welche die M�glichkeit haben, das Forum zu administrieren. Das Deaktivieren �ndert keinen Status eines Mitglieds, es verhindert nur das Verstecken des Status in der Zukunft.';
$helptxt['make_email_viewable'] = 'Aktivieren Sie diese Option, um alle E-Mail-Adressen im Forum sichtbar zu machen. Dies setzt die Benutzer einer hohen Gefahr aus, Opfer von Spam-Attacken zu werden. Diese Option ordnet sich aber der Einstellung im Profil aller Benutzer bez�glich des Versteckens der E-Mail-Adresse gegen�ber anderen Mitgliedern unter. <b>Eine Aktivierung wird nicht empfohlen!</b>';
$helptxt['meta_keywords'] = 'Diese Schl�sselw�rter werden auf jeder Seite eingebunden um Suchmaschinen (usw.) mit zu teilen, was f�r Inhalt auf ihrer Seite zu finden ist.
Es muss eine Komma-geteilte Liste von W�rtern sein und sie darf kein HTML enthalten.';

$helptxt['latest_support'] = 'Dieser Bereich zeigt die h�ufigsten Probleme und Fragen zur Ihrer Serverkonfiguration. Diese Informationen werden nicht gespeichert.<br /><br />Sollte es bei "Lade Support Informationen..." stehen bleiben, kann Ihr Server <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> wahrscheinlich nicht kontaktieren.';
$helptxt['latest_packages'] = 'Hier k�nnen Sie ein paar der beliebtesten und zuf�llig ausgew�hlten Modifikationen bzw. Pakete sehen, welche leicht und schnell zu installieren sind.<br /><br />Wenn dieser Bereich nicht sichtbar ist, kann Ihr Server <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> wahrscheinlich nicht kontaktieren.';
$helptxt['latest_themes'] = 'Dieser Bereich zeigt die neuesten und beliebtesten Themes von<a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> an. Sollte er nicht sichtbar sein, kann Ihr Server <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> wahrscheinlich nicht kontaktieren.';

$helptxt['secret_why_blank'] = 'Zu Ihrer Sicherheit wird die Antwort (genauso wie Ihr Passwort) zu Ihrer Frage verschl�sselt, so dass SMF Ihnen nur sagen kann, ob es richtig ist oder nicht. Die Antwort oder das Passwort selbst nennen kann SMF dagegen nicht!';
$helptxt['moderator_why_missing'] = 'Da die Moderatoren von Board zu Board ausgew�hlt werden, m�ssen Sie diese im Bereich <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">Boards verwalten</a> eintragen.';

$helptxt['permissions'] = 'Berechtigungen haben die Funktion, bestimmten Gruppen Aktionen zu erlauben oder zu verbieten<br /><br />Sie k�nnen mit Hilfe der Checkboxen mehrere Boards gleichzeitig �ndern oder die Berechtigungen einer bestimmten Gruppe �ndern, in dem Sie auf \'�ndern\' klicken.';
$helptxt['permissions_board'] = 'Wenn ein Board auf \'Global\' gesetzt ist, hat es keine speziellen Berechtigungen. \'Lokal\' dagegen hat eigene Berechtigungen, welche sich von anderen Boards unterscheiden und somit unterschiedliche Berechtigungen zwischen den Boards erlaubt.';
$helptxt['permissions_quickgroups'] = 'Erlaubt das Verwenden der "vordefinierten" Berechtigungen - Standard bedeutet \'nichts spezielles\', Beschr�nkt bedutet \'wie ein Gast\', Moderator vergibt Rechte \'wie einem Moderator\' und \'Wartungsmodus\' bedeutet, dass die Berechtigungen einem Administrator sehr nahe kommen.';
$helptxt['permissions_deny'] = 'Das Verbieten von Berechtigungen erlaubt es Ihnen, bestimmte Funktionen gew�hlten Mitgliedergruppen zu entziehen. Dazu erstellen Sie z.B. eine Mitgliedergruppe und verbieten dieser eine bestimmte Berechtigung.<br /><br />Benutzen Sie diese Option mit gro�er Vorsicht, da verbotene Berechtigungen den Mitgliedern nicht mehr zur Verf�gung stehen, selbst wenn die Berechtigungen in einer anderen Gruppe erlaubt sind, der dieses Mitglied angeh�rt.';
$helptxt['permissions_postgroups'] = 'Das Aktivieren der Berechtigungen f�r beitragsbasierende Gruppen erlaubt das Zuweisen von Berechtigungen an Mitglieder mit einer bestimmten Beitragszahl. Diese Berechtigungen werden zu den bereits vorhanden <em>addiert</em>.';
$helptxt['membergroup_guests'] = 'Die Mitgliedergruppe "G�ste" enth�lt alle Benutzer, die nicht eingeloggt sind.';
$helptxt['membergroup_regular_members'] = 'Die Mitgliedergruppe "Normale Mitglieder" bezeichnet alle Benutzer die eingeloggt sind, jedoch keiner prim�re Mitgliedergruppe zugeordnet sind.';
$helptxt['membergroup_administrator'] = 'Der Administrator kann alles im Forum machen und jedes Board ansehen. Es gibt keine Berechtigungseinstellungen f�r den Administrator.';
$helptxt['membergroup_moderator'] = 'Die Mitgliedergruppe "Moderator" ist eine spezielle Gruppe. Die zugewiesenen Berechtigungen und Einstellungen gelten <em>nur in den Boards, wo die betreffenden Mitglieder moderieren</em>. Au�erhalb dieser Boards werden sie wie normale Benutzer behandelt.';
$helptxt['membergroups'] = 'In SMF gibt es zwei Arten von Gruppen, denen die Mitglieder zugeteilt sind:
	<ul>
		<li><b>Regul�re Gruppen:</b> In eine regul�re Gruppe werden Mitglieder nicht automatisch eingeteilt. Um ein Mitglied einer dieser Gruppen zuzuordnen, gehen Sie in das Profil des Benutzers und klicken auf "Benutzerkonto". Von hier aus k�nnen Sie nun das Mitglied verschiedenen Gruppen zuordnen.</li>
		<li><b>Beitragsbasierende Gruppen:</b> Im Gegenteil zu regul�ren Gruppen k�nnen Sie beitragsabh�ngige Gruppen nicht zuordnen. Stattdessen werden Mitglieder diesen automatisch zugeordnet, wenn sie eine bestimmte Zahl an Beitr�gen geschrieben haben.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Sie k�nnen die Ereignisse editieren, indem Sie auf den roten Stern (*) neben dem Namen klicken.';

$helptxt['maintenance_backup'] = 'Dieser Bereich erlaubt eine Sicherung von allen Beitr�gen, Einstellungen, Mitgliedern und anderen Informationen Ihres Forums in einer (wom�glich sehr gro�en) Datei.<br /><br />Es ist empfehlenswert, die Daten regelm��ig zu sichern - am besten w�chentlich -, um die Datensicherheit zu erh�hen.';
$helptxt['maintenance_rot'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> L�schen alter Themen. Es ist <b>sehr empfehlenswert</b>, davor eine Sicherung Ihrer Daten zu machen f�r den Fall, dass Sie etwas l�schen, was Sie nicht wollten.<br /><br />Benutzen Sie diese Funktion mit Vorsicht!';
$helptxt['maintenance_members'] = 'Diese Funktion erlaubt das <b>komplette</b> und <b>unwiderrufliche</b> L�schen von Benutzerkonten aus dem Forum. Es ist <b>sehr empfehlenswert</b>, davor eine Sicherung Ihrer Daten zu machen f�r den Fall, dass Sie etwas l�schen, was Sie nicht wollten.<br /><br />Benutzen Sie diese Funktion mit Vorsicht!';

$helptxt['avatar_server_stored'] = 'Erlaubt den betreffenden Mitgliedern, Benutzerbilder von Ihrem Server auszuw�hlen. Diese Bilder befinden sich im Unterordner \'avatars\' des SMF-Verzeichnisses.<br />Ein Tipp: Wenn Sie Unterordner in Verzeichnis \'avatars\' anlegen, k�nnen Sie verschiedenen Kategorien unter den Benutzerbildern einrichten.';
$helptxt['avatar_external'] = 'Erlaubt den betreffenden Mitgliedern, ihre Benutzerbilder von anderen Servern zu verlinken. Der Nachteil ist, dass Bilder verlinkt werden k�nnen, die nicht im Forum gew�nscht sind (pornografische/gewaltt�tige Inhalte).';
$helptxt['avatar_download_external'] = 'Aktivieren Sie diese Option, um das externe Benutzerbild herunterzuladen. Sollte das erfolgreich sein, wird es danach wie ein hochgeladenes Benutzerbild behandelt.';
$helptxt['avatar_upload'] = 'Diese Option gleicht dem externen Benutzerbild, hat aber den Vorteil, dass Sie mehr Kontrolle �ber die Benutzerbilder haben und die Mitglieder keine M�glichkeit brauchen, ihre Benutzerbilder selbst hochzuladen.<br /><br />Der Nachteil ist, dass Sie ensprechend mehr Platz auf Ihrem Server bereitstellen m�ssen.';
$helptxt['avatar_download_png'] = 'PNGs sind gr��er, bieten aber eine bessere Kompression (und damit Qualit�t). Sollte dies nicht aktiviert sein, werden stattdessen JPEG Bilder benutzt - welche meistens kleiner in der Gr��e sind, jedoch eine schlechtere Qualit�t bieten.';

$helptxt['disableHostnameLookup'] = 'Deaktiviert die Suche nach den Hostnamen, was manche Server sehr langsam macht. Beachten Sie, dass dies das Bannen von Mitgliedern uneffektiver macht.';

$helptxt['search_weight_frequency'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Ver�ndern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel ben�tigt eine hohe Gewichtung auf \'Alter der neuesten �bereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor z�hlt die Anzahl der �bereinstimmenden Beitr�ge und teilt sie durch die gesamte Zahl der Beitr�ge innerhalb eines Themas.';
$helptxt['search_weight_age'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Ver�ndern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel ben�tigt eine hohe Gewichtung auf \'Alter der neuesten �bereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor bewertet das Alter der neuesten �bereinstimmung innerhalb eines Themas. Je neuer der Beitrag, desto h�her ist die Bewertung.';
$helptxt['search_weight_length'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Ver�ndern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel ben�tigt eine hohe Gewichtung auf \'Alter der neuesten �bereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor basiert auf der Themengr��e. Je mehr Beitr�ge innerhalb eines Themas, desto h�her ist die Bewertung.';
$helptxt['search_weight_subject'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Ver�ndern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel ben�tigt eine hohe Gewichtung auf \'Alter der neuesten �bereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor schaut nach dem Vorhandensein einer Suchanfrage innerhalb des Betreffs eines Themas.';
$helptxt['search_weight_first_message'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Ver�ndern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel ben�tigt eine hohe Gewichtung auf \'Alter der neuesten �bereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor schaut nach der �bereinstimmung des Suchbegriffs im ersten Beitrag eines Themas.';
$helptxt['search_weight_sticky'] = 'Gewichtungsfaktoren werden benutzt, um die Relevanz eines Suchresultates zu bestimmen. Ver�ndern Sie diese Gewichtungen, um die Resultate auf Ihr Forum abzustimmen. Das Forum einer News-Seite zum Beispiel ben�tigt eine hohe Gewichtung auf \'Alter der neuesten �bereinstimmung\'. Alle Werte sind relativ zueinander und sollten positive Zahlen sein.<br /><br />Dieser Faktor kontrolliert, ob das gefundene Theme fixiert ist und weist ihm bei Bedarf eine h�here Relevanz zu.';
$helptxt['search'] = 'Hier k�nnen Sie die Einstellungen f�r die Suche ver�ndern.';
$helptxt['search_why_use_index'] = 'Ein Such-Index kann die Geschwindigkeit der Suche im Forum merklich erh�hen. Gerade bei einer gro�en Anzahl an Beitr�gen kann die Suche ohne einen Index sehr lange dauern und die Datenbank stark belasten. Wenn Ihr Forum mehr wie 50.000 Beitr�ge enthalten, sollten Sie die Erstellung eines Index in Erw�gung ziehen, um hohe Belastungsspitzen zu vermeiden.<br /><br />Beachten Sie bitte, dass ein Index unter Umst�nden einiges an Platz einnehmen kann. Der Volltext-Index ist ein integrierter Index von MySQL, welcher relativ kompakt ist (ungef�hr die gleiche Gr��e wie die Beitragstabelle), einige W�rter jedoch nicht indiziert und durchaus langsame Abfragen produzieren kann. Der benutzerdefinierte Index ist meistens gr��er (je nach Konfiguration bis zur 3-fachen Gr��e der Beitragstabelle), hat jedoch Geschwindigkeitsvorteile und ist relativ stabil.';

$helptxt['see_admin_ip'] = 'IP-Adressen werden Administratoren und Moderatoren zur besseren Moderation bzw. Verfolgung angezeigt. Beachten Sie, dass IP-Adressen einen Benutzer nicht eindeutig identifizieren und bei den meisten Leuten nach einiger Zeit wechseln.<br /><br />Mitglieder k�nnen Ihre eigenen IP-Adressen sehen.';
$helptxt['see_member_ip'] = 'Ihre IP-Adresse wird nur Ihnen und Moderatoren angezeigt. Beachten Sie, dass diese Daten nicht die Person identifizieren, da IP-Adressen h�ufig nach einer gewissen Zeit wechseln.<br /><br />Sie k�nnen keine IP-Adressen anderer Benutzer sehen und diese k�nnen Ihre nicht sehen.';
$helptxt['whytwoip'] = 'SMF benutzt mehrere Methoden, um die IP-Adressen zu bestimmen. Normalerweise finden beide Methoden ein und dieselbe Adresse. In manchen F�llen werden jedoch zwei Adressen gefunden, welche SMF beide protokolliert und beide zum Kontrollieren eines Banns etc. benutzt. Sie k�nnen auf eine der beiden Adressen klicken, um diese zu verfolgen und ggf. zu bannen.';

$helptxt['ban_cannot_post'] = 'Die \'Kann nicht schreiben\' Einschr�nkung erlaubt dem gebannten Benutzer nur noch das Lesen des Forums. Er kann keine neuen Themen erstellen oder auf existierende antworten, Pers�nliche Mitteilungen versenden oder bei Umfragen abstimmen. Der Benutzer kann aber weiterhin die Themen und Pers�nlichen Mitteilungen lesen.<br /><br />Dem gebannten Benutzer wird eine Warnmeldung angezeigt.';

$helptxt['posts_and_topics'] = '
	<ul>
		<li>
			<b>Beitrags-Einstellungen</b><br />
			Hier k�nnen Sie die Einstellungen bez�glich des Schreibens und der Ansicht von Beitr�gen �ndern. Auch die Rechtschreibepr�fung l�sst sich hier aktivieren.
		</li><li>
			<b>Bulletin Board Code</b><br />
			De-/Aktivieren Sie hier die Code-Tags f�r das Schreiben von Beitr�gen. W�hlen Sie weiterhin, welche Codes erlaubt sind und welche nicht.
		</li><li>
			<b>Zensierte W�rter</b>
			Um die Ausdr�cke in Ihrem Forum unter Kontrolle zu halten, k�nnen Sie bestimmte W�rter zensieren. Diese Funktion ersetzt das betroffene Wort mit einer - von Ihnen gew�hlten - vern�nftigen Variante.
		</li><li>
			<b>Themen-Einstellungen</b>
			Hier k�nnen Sie Einstellungen bez�glich der Themen ver�ndern: Anzahl der Themen pro Seite, fixierte Themen de-/aktivieren, Anzahl der Beitr�ge ab der ein Thema hei� oder sehr hei� ist etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Wenn ein Gast als Suchmaschine erkannt wird und einer Gruppe zugeordnet wird, k�nnen Sie den Umfang des Zugriffs bequem �ber die Berechtigungen steuern. So k�nnen Sie Suchmaschinen einen erweiterten Zugriff erm�glichen wie normalen G�sten. Sie k�nnen z.B. eine neue Gruppe mit dem Namen "Bots" erstellen und diese hier ausw�hlen. Danach entziehen Sie dieser Gruppe die Berechtigung Profile anzuschauen, um die Benutzerdaten zu sch�tzen.<br />Achtung: Das Erkennen der Suchmaschinen arbeitet nie perfekt und kann von anderen Benutzern simuliert werden, um trotzdem einen erweiterten Zugriff (wenn eingestellt) wie normale G�ste zu bekommen.';
$helptxt['show_spider_online'] = 'Diese Einstellung erlaubt Ihnen zu w�hlen, ob "Spiders" (Bots, die z.B. ihre Seiten f�r Suchmaschinen indexieren) in der Wer ist online Liste auf der Forums Hauptseite und "Wer ist online" Seite angezeigt werden.
Die Optionen sind:
<ul class="normallist">
<li>
<b>�berhaupt nicht</b><br />
Spider erscheinen als G�ste.</li>
<li><b>Zeige Spider Anzahl</b><br />
Die Forums Hauptseite zeigt die Anzahl der zur Zeit im Forum aktiven Spider.</li>
<li><b>Zeige Spider Namen</b><br />
Jeder Spider Name wird angezeigt, so dass jeder Benutzer sehen kann, wie viele von jedem Spider gerade das Forum besucht. Dies gilt sowohl f�r die Forums Hauptseite, wie auch f�r die Wer Ist Online Seite.</li>
<li><b>Zeige Spider Namen - Nur Administratoren</b><br />
Wie oben, nur dass lediglich Administratoren den Spider Status sehen k�nnen - alle anderen sehen sie als G�ste.</li>
</ul>';

$helptxt['birthday_email'] = 'W�hlen Sie die Vorlage f�r die Geburtstagsnachricht. Eine Vorschau wird in den Feldern E-Mail Betreff und E-Mail Text angezeigt.<br /><strong>Achtung:</strong> Das Ausw�hlen dieser Option aktiviert nicht automatisch den Versand der Geburtstagsnachricht. Um den Versand zu starten, benutzen Sie bitte die Seite <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Geplante Aufgaben</a> und aktivieren die Aufgabe "Geburtstagsnachricht senden".';
$helptxt['pm_bcc'] = 'Wenn Sie eine Private Mitteilung versenden m�chten, k�nnen Sie einen weiteren Empf�nger als BCC bzw. "Blind Carbon Copy" hinzuf�gen. Die Identit�t des BCC Empf�nger wird den anderen Empf�ngern nicht mitgeteilt, er erh�lt die Mitteilungen anonym und ohne Wissen der anderen.';

$helptxt['move_topics_maintenance'] = 'Diese Funktion erlaubt es, alle Beitr�ge aus einem Board in ein anderes Board zu verschieben.';
$helptxt['maintain_reattribute_posts'] = 'Diese Funktion ordnet Beitr�ge von G�sten registrierten Mitgliedern zu. Das ist sinnvoll, wenn ein Mitglied das Benutzerkonto aus Versehen gel�scht hat und nach einer erneuten Registrierung die Beitr�ge zur�ckhaben m�chte.';
$helptxt['chmod_flags'] = 'Sie k�nnen die Dateiberechtigungen auf einen selbst bestimmten Wert setzen. Geben Sie dazu einen numerischen CHMOD-Wert an. Beachten Sie - diese Einstellung hat keine Auswirkungen auf Mircosoft Windows Betriebssysteme.';

$helptxt['postmod'] = 'Diese Sektion erlaubt es Mitgliedern des Moderatoren-Teams (mit ausreichenden Berechtigungen) Beitr�ge und Themen zu akzeptieren bevor diese angezeigt werden.';

$helptxt['field_show_enclosed'] = 'Umschlie�t die Benutzereingaben mit Text oder HTML. Dies erlaubt es Ihnen weitere Sofortnachrichtenquellen, Bilder, Einbettungen oder �hnliches hinzuzuf�gen. Beispielsweise:<br/><br/>
&lt;a href="http://webseite.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />Beachten Sie, dass Sie folgende Variablen verwenden k�nnen:<br /> <ul class="normallist"> <li>{INPUT} - Die Eingabe des Benutzers.</li> <li>{SCRIPTURL} - Web-Adresse des Forums.</li> <li>{IMAGES_URL} - URL zum Bilder-Verzeichnis des vom Benutzer aktuell verwendeten Themes.</li> <li>{DEFAULT_IMAGES_URL} - URL zum Bilder-Verzeichnis des Standard-Themes.</li> </ul>';

$helptxt['custom_mask'] = 'Die Eingabemaske ist f�r die Forumssicherheit wichtig. Das Validieren der Benutzereingaben stellt sicher, dass Daten nicht in einer Weise genutzt werden, die Sie nicht erwarten. Wir haben einige einfache regul�re Ausdr�cke als Hinweise gegeben.<br /><br /> <div class="smalltext" style="margin: 0 2em"> &quot;[A-Za-z]+&quot; - Trifft auf alle Gro�- und Kleinbuchstaben des Alphabets zu.<br /> &quot;[0-9]+&quot; - Trifft auf alle numerischen Ziffern zu.<br /> &quot;[A-Za-z0-9]{7}&quot;  - Trifft auf alle Gro�- und Kleinbuchstaben des Alphabets sowie numerischen Ziffern in einer L�nge von 7 Zeichen zu.<br /> &quot;[^0-9]?&quot; - Schlie�e alle numerischen Ziffern aus.<br /> &quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Erlaube nur 3 oder 6 Hex-Ziffern.<br /> </div><br /><br /> Zus�tzlich k�nnen spezielle Meta-Zeichen wie  ?+*^$ und {xx} definiert werden. <div class="smalltext" style="margin: 0 2em"> ? - Ein oder kein Zutreffen des letzten Ausdrucks.<br /> + - Ein oder mehrere Vorkommnisse des vorigen Ausdrucks.<br /> * - Kein oder mehr Vorkommnisse des vorigen Ausdrucks.<br /> {xx} - Eine bestimmte Anzahl (xx) an aufeinander folgenden Vorkommnissen des vorigen Ausdrucks.<br /> {xx,} - Eine bestimmte Anzahl oder mehr Vorkommnisse des vorigen Ausdrucks.<br /> {,xx} - Eine bestimmte Anzahl oder weniger an aufeinanderfolgenden Vorkommnissen des vorigen Ausdrucks.<br /> {xx,yy} - Eine Anzahl an aufeinanderfolgenden Vorkommnissen zwischen den beiden Zahlen des vorigen Ausdrucks.<br /> ^ - Start des Textes.<br /> $ - Ende des Textes.<br /> \\ - Escapet das n�chste Zeichen.<br /> </div><br /><br /> Weitere Informationen und Techniken k�nnen im Internet nachgelesen werden.';

?>