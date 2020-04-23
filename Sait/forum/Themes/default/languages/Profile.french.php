<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'Vous n\'�tes pas autoris� � modifier le profil de ce membre.';
$txt['website_title'] = 'Titre du site web';
$txt['website_url'] = 'URL du site web';
$txt['signature'] = 'Signature';
$txt['profile_posts'] = 'Messages';
$txt['change_profile'] = 'Changer le profil';
$txt['delete_user'] = 'Effacer le membre';
$txt['current_status'] = 'Statut actuel&nbsp;:';
$txt['personal_text'] = 'Texte personnel';
$txt['personal_picture'] = 'Avatar personnalis�';
$txt['no_avatar'] = 'Pas d\'avatar';
$txt['choose_avatar_gallery'] = 'Choisir un avatar dans la galerie';
$txt['picture_text'] = 'Image/texte';
$txt['reset_form'] = 'R�initialiser le formulaire';
$txt['preferred_language'] = 'Langue pr�f�r�e';
$txt['age'] = '�ge';
$txt['no_pic'] = '(pas d\'image)';
$txt['latest_posts'] = 'Derniers messages de&nbsp;: ';
$txt['additional_info'] = 'Informations suppl�mentaires';
$txt['avatar_by_url'] = 'Sp�cifiez votre propre avatar par URL. (ex&nbsp;: <em>http://www.mapage.com/monimage.gif</em>)';
$txt['my_own_pic'] = 'Sp�cifier un avatar par son URL';
$txt['date_format'] = 'Cette s�lection change le format d\'affichage des dates sur ce forum.';
$txt['time_format'] = 'Format de l\'heure';
$txt['display_name_desc'] = 'Ceci est le nom affich� sur toutes les pages du forum, celui que les visiteurs verront.';
$txt['personal_time_offset'] = 'Nombre d\'heures en +/- pour faire correspondre l\'heure affich�e avec votre heure locale.';
$txt['dob'] = 'Date de naissance';
$txt['dob_month'] = 'Mois (MM)';
$txt['dob_day'] = 'Jour (JJ)';
$txt['dob_year'] = 'Ann�e (AAAA)';
$txt['password_strength'] = 'Pour plus de s�curit�, vous devriez choisir au moins six (6) caract�res avec une combinaison de lettres, chiffres et symboles.';
$txt['include_website_url'] = 'Indispensable si vous mettez une URL ci-dessous.';
$txt['complete_url'] = 'Ceci doit �tre une URL compl�te. (http://www. ...)';
$txt['your_icq'] = 'Votre num�ro ICQ.';
$txt['your_aim'] = 'Votre identifiant pour la messagerie instantan�e AOL.';
$txt['your_yim'] = 'Votre identifiant pour Yahoo! Messenger.';
$txt['sig_info'] = 'Les signatures sont affich�es en bas de chaque message ou message personnel. Vous pouvez y inclure du BBCode et des smileys.';
$txt['max_sig_characters'] = '%1$s caract�res sont autoris�s au maximum. Il en reste&nbsp;: ';
$txt['send_member_pm'] = 'Envoyer un message personnel � ce membre';
$txt['hidden'] = 'cach�';
$txt['current_time'] = 'Heure actuelle du forum';
$txt['digits_only'] = 'La case \'nombre de messages\' ne peut contenir que des chiffres.';

$txt['language'] = 'Langue';
$txt['avatar_too_big'] = 'Cet Avatar est trop gros, merci de le redimensionner avant de r�essayer (max';
$txt['invalid_registration'] = 'Date d\'inscription invalide, exemple&nbsp;: ';
$txt['msn_email_address'] = 'Votre adresse sur MSN/Live Messenger';
$txt['current_password'] = 'Mot de passe actuel';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Pour des raisons �videntes de s�curit�, votre mot de passe actuel est n�cessaire pour modifier votre compte.';

$txt['timeoffset_autodetect'] = '(auto-d�tecter)';

$txt['secret_question'] = 'Question secr�te';
$txt['secret_desc'] = 'Pour vous aider � retrouver votre mot de passe, vous pouvez entrer ici une question et sa r�ponse dont <strong>vous seul</strong> connaissez la teneur.';
$txt['secret_desc2'] = 'Choisissez-la prudemment et �vitez que l\'on puisse deviner facilement la r�ponse&nbsp;! ';
$txt['secret_answer'] = 'R�ponse';
$txt['secret_ask'] = 'Posez-moi ma question secr�te';
$txt['cant_retrieve'] = 'Il est impossible de r�cup�rer votre mot de passe, mais vous pouvez en sp�cifier un nouveau en suivant le lien envoy� � votre adresse e-mail.  Vous avez aussi la possibilit� de sp�cifier un nouveau mot de passe en r�pondant � votre question secr�te.';
$txt['incorrect_answer'] = 'D�sol�, mais vous n\'avez pas d�fini de question secr�te/r�ponse dans votre profil.  Merci de cliquer le bouton Retour, et utilisez la m�thode par d�faut pour obtenir votre mot de passe.';
$txt['enter_new_password'] = 'Merci d\'entrer la r�ponse � votre question, et le mot de passe que vous souhaitez utiliser.  Votre mot de passe sera remplac� par celui fourni en r�pondant correctement � votre question.';
$txt['password_success'] = 'Votre mot de passe a �t� modifi� avec succ�s.<br />Cliquez <a href="' . $scripturl . '?action=login">ici</a> pour vous connecter.';
$txt['secret_why_blank'] = 'Pourquoi est-ce vide&nbsp;? ';

$txt['authentication_reminder'] = 'Rappel d\'authentification';
$txt['password_reminder_desc'] = 'Si vous avez oubli� vos d�tails de connexion, pas de souci, on peut vous aider. Pour commencer, veuillez entrer votre identifiant ou adresse e-mail ci-dessous.';
$txt['authentication_options'] = 'Veuillez choisir une des deux options ci-dessous';
$txt['authentication_openid_email'] = 'Envoyez-moi par e-mail un rappel de mon identit� OpenID';
$txt['authentication_openid_secret'] = 'Je veux r�pondre � ma &quot;question secr�te&quot; pour afficher mon identit� OpenID';
$txt['authentication_password_email'] = 'Envoyez-moi par e-mail un nouveau mot de passe';
$txt['authentication_password_secret'] = 'Je veux r�pondre � ma &quot;question secr�te&quot; pour changer de mot de passe';
$txt['openid_secret_reminder'] = 'Veuillez entrer votre r�ponse � la question ci-dessous. Si elle est correcte, votre identit� OpenID sera affich�e.';
$txt['reminder_openid_is'] = 'L\'identit� OpenID associ�e � votre compte est:<br />&nbsp;&nbsp;&nbsp;&nbsp;<strong>%1$s</strong><br /><br />Veuillez la noter pour ne plus l\'oublier.';
$txt['reminder_continue'] = 'Continuer';

$txt['current_theme'] = 'Th�me actuel';
$txt['change'] = '(changer)';
$txt['theme_preferences'] = 'Pr�f�rences de th�me';
$txt['theme_forum_default'] = 'Th�me par d�faut';
$txt['theme_forum_default_desc'] = 'Ceci est le th�me par d�faut, ce qui signifie que votre th�me changera suivant les r�glages de l\'administrateur et le forum que vous lisez.';

$txt['profileConfirm'] = 'Voulez-vous r�ellement effacer ce membre&nbsp;?';

$txt['custom_title'] = 'Titre personnel';

$txt['lastLoggedIn'] = 'Derni�re visite';

$txt['notify_settings'] = 'Param�tres de notification&nbsp;:';
$txt['notify_save'] = 'Sauvegarder les param�tres';
$txt['notify_important_email'] = 'Recevoir les lettres d\'information, les annonces du forum et les notifications importantes par e-mail.';
$txt['notify_regularity'] = 'Pour les sujets et les sections pour lesquels j\'ai demand� la notification, notifiez-moi&nbsp;';
$txt['notify_regularity_instant'] = 'Instantan�ment';
$txt['notify_regularity_first_only'] = 'Instantan�ment - mais seulement pour la premi�re r�ponse non lue';
$txt['notify_regularity_daily'] = 'Une fois par jour';
$txt['notify_regularity_weekly'] = 'Une fois par semaine';
$txt['auto_notify'] = 'Me notifier automatiquement les r�ponses quand je commence ou r�ponds � un sujet.';
$txt['notify_send_types'] = 'Pour les sujets et sections que j\'ai demand� � suivre, notifiez-moi&nbsp;';
$txt['notify_send_type_everything'] = 'De tout ce qui s\'y produit';
$txt['notify_send_type_everything_own'] = 'Des actions de mod�ration, seulement si j\'ai d�marr� le sujet';
$txt['notify_send_type_only_replies'] = 'Seulement des r�ponses';
$txt['notify_send_type_nothing'] = 'Ne me notifiez pas';
$txt['notify_send_body'] = 'Lors de l\'envoi des notifications de r�ponses � un sujet, inclure le message complet dans l\'e-mail <em>(mais veuillez ne pas r�pondre � l\'e-mail envoy�&nbsp;!)</em>';

$txt['notifications_topics'] = 'Notifications actuelles pour le sujet';
$txt['notifications_topics_list'] = 'Vous �tes avis� pour les r�ponses aux sujets suivants';
$txt['notifications_topics_none'] = 'Actuellement, vous ne recevez aucune notification.';
$txt['notifications_topics_howto'] = 'Pour recevoir des notifications d\'un sujet, cliquez le bouton &quot;Notifier&quot; dans celui-ci.';
$txt['notifications_boards'] = 'Notifications actuelles de sections';
$txt['notifications_boards_list'] = 'Vous �tes notifi� des nouveaux sujets d�marr�s dans les sections suivantes&nbsp;:';
$txt['notifications_boards_none'] = 'Actuellement, vous ne recevez aucune notification de section.';
$txt['notifications_boards_howto'] = 'Pour demander des notifications pour une section sp�cifique, cliquez le bouton &quot;Suivre&quot; � l\'index de cette section.';
$txt['notifications_update'] = 'D�sinscription';

$txt['statPanel_showStats'] = 'Statistiques utilisateur pour&nbsp;: ';
$txt['statPanel_users_votes'] = 'Nombre de votants';
$txt['statPanel_users_polls'] = 'Nombre de sondages cr��s';
$txt['statPanel_total_time_online'] = 'Temps total pass� en ligne';
$txt['statPanel_noPosts'] = 'Vous n\'avez post� aucun message&nbsp;!';
$txt['statPanel_generalStats'] = 'Statistiques g�n�rales';
$txt['statPanel_posts'] = 'messages';
$txt['statPanel_topics'] = 'Sujets';
$txt['statPanel_total_posts'] = 'Total des messages';
$txt['statPanel_total_topics'] = 'Total des sujets commenc�s';
$txt['statPanel_votes'] = 'votes';
$txt['statPanel_polls'] = 'sondages';
$txt['statPanel_topBoards'] = 'Popularit� des sections par messages';
$txt['statPanel_topBoards_posts'] = '%1$d messages sur les %2$d de cette section (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d messages sur les %2$d de ce membre (%3$01.2f%%)';
$txt['statPanel_topBoardsActivity'] = 'Popularit� des sections par activit�';
$txt['statPanel_activityTime'] = 'Activit� de postage par heure';
$txt['statPanel_activityTime_posts'] = '%1$d messages (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Heure de la journ�e';

$txt['deleteAccount_warning'] = 'Attention - Ces actions sont irr�versibles&nbsp;!';
$txt['deleteAccount_desc'] = '� partir de cette page vous pouvez supprimer le compte et les messages d\'un membre.';
$txt['deleteAccount_member'] = 'Supprimer le compte de ce membre';
$txt['deleteAccount_posts'] = 'Supprimer les messages post�s par ce membre';
$txt['deleteAccount_none'] = 'Aucun';
$txt['deleteAccount_all_posts'] = 'Tous les messages';
$txt['deleteAccount_topics'] = 'Sujets et messages';
$txt['deleteAccount_confirm'] = '�tes-vous absolument s�r de vouloir supprimer ce compte&nbsp;?';
$txt['deleteAccount_approval'] = 'Veuillez prendre note que les mod�rateurs du forum devront approuver cette suppression avant qu\'elle soit effective.';

$txt['profile_of_username'] = 'Profil de %1$s';
$txt['profileInfo'] = 'Infos du Profil';
$txt['showPosts'] = 'Voir les contributions';
$txt['showPosts_help'] = 'Cette section vous permet de consulter les contributions (messages, sujets et fichiers joints) d\'un utilisateur. Vous ne pourrez voir que les contributions des zones auxquelles vous avez acc�s.';
$txt['showMessages'] = 'Messages';
$txt['showTopics'] = 'Sujets';
$txt['showAttachments'] = 'Fichiers joints';
$txt['statPanel'] = 'Voir les statistiques';
$txt['editBuddyIgnoreLists'] = 'Amis et Ignor�s';
$txt['editBuddies'] = 'Modifier la liste d\'Amis';
$txt['editIgnoreList'] = 'Modifier la liste d\'Ignor�s';
$txt['trackUser'] = 'Suivre le membre';
$txt['trackActivity'] = 'Activit�';
$txt['trackIP'] = 'Adresse IP';

$txt['authentication'] = 'Authentification';
$txt['change_authentication'] = 'D\'ici, vous pouvez changer votre mani�re de vous connecter au forum. Vous pouvez choisir d\'utiliser soit un compte OpenID pour votre authentification, soit de basculer sur l\'utilisation d\'un identifiant avec mot de passe.';

$txt['profileEdit'] = 'Modifier le Profil';
$txt['account_info'] = 'Ceci sont vos pr�f�rences de compte. Cette page contient toutes les informations critiques qui peuvent vous identifier sur le forum. Pour des raisons de s�curit�, vous devrez entrer votre mot de passe (actuel) pour modifier ces informations.';
$txt['forumProfile_info'] = 'Vous pouvez changer vos infos personnelles sur cette page. Ces informations seront visible � travers ' . $context['forum_name_html_safe'] . '. Si vous ne d�sirez pas pr�senter certaines infos, ne remplissez pas le champ - rien n\'est obligatoire ici.';
$txt['theme'] = 'Affichage et disposition';
$txt['theme_info'] = 'Cette section vous permet de personnaliser l\'affichage et la disposition du forum.';
$txt['notification'] = 'Notifications et E-mails';
$txt['notification_info'] = 'SMF vous permet d\'�tre avis� des nouvelles r�ponses aux sujets, des nouveaux sujets et des nouvelles annonces du forum. Vous pouvez changer vos r�glages ici, ou voir les sujets et sections que vous suivez actuellement.';
$txt['groupmembership'] = 'Adh�sions aux Groupes';
$txt['groupMembership_info'] = 'Dans cette section de votre profil, vous pouvez changer le ou les groupes auxquels vous appartenez.';
$txt['ignoreboards'] = 'Ignorer des Sections';
$txt['ignoreboards_info'] = 'Cette page vous permet d\'ignorer certaines sections. Lorsqu\'une section est ignor�e, l\'indicateur de nouveaux messages ne s\'affichera pas sur l\'accueil du forum. Les nouveaux messages ne seront pas affich�s lors de l\'utilisation de la fonction "messages non lus" (la recherche des messages ignorera ces sections). Malgr� tout, les sections ignor�es appara�tront toujours sur l\'accueil du forum et les sujets mis � jour y seront signal�s si vous y p�n�trez. Enfin, la fonction "r�ponses non lues" prend en compte toutes les sections, y compris celles qui sont ignor�es.';
$txt['pmprefs'] = 'Messagerie Personnelle';

$txt['profileAction'] = 'Actions';
$txt['deleteAccount'] = 'Effacer ce compte';
$txt['profileSendIm'] = 'Envoyer un message personnel';
$txt['profile_sendpm_short'] = 'Envoyer un MP';

$txt['profileBanUser'] = 'Bannir ce membre';

$txt['display_name'] = 'Pseudonyme';
$txt['enter_ip'] = 'Entrer une IP (plage)';
$txt['errors_by'] = 'Messages d\'erreur par';
$txt['errors_desc'] = 'Ci-dessous est affich�e une liste des messages d\'erreur r�cents transmis par ce membre.';
$txt['errors_from_ip'] = 'Messages d\'erreur depuis l\'IP (plage)';
$txt['errors_from_ip_desc'] = 'Ci-dessous est affich�e une liste de toutes les erreurs g�n�r�es par cette (plage d\') IP.';
$txt['ip_address'] = 'Adresse IP';
$txt['ips_in_errors'] = 'Adresses IP utilis�es dans les messages d\'erreur';
$txt['ips_in_messages'] = 'Adresses IP utilis�es dans les derniers messages';
$txt['members_from_ip'] = 'Membres sur cette (plage d\') IP';
$txt['members_in_range'] = 'Membres possibles dans la m�me plage';
$txt['messages_from_ip'] = 'Messages envoy�s depuis cette (plage d\') IP';
$txt['messages_from_ip_desc'] = 'Ci-dessous est affich�e la liste de tous les messages post�s depuis cette (plage d\') IP.';
$txt['most_recent_ip'] = 'Adresse IP la plus r�cente';
$txt['why_two_ip_address'] = 'Pourquoi y-a-t\'il deux adresses IP list�es&nbsp;?';
$txt['no_errors_from_ip'] = 'Aucun message d\'erreur depuis cette adresse IP (plage)';
$txt['no_errors_from_user'] = 'Aucun message d\'erreur de ce membre';
$txt['no_members_from_ip'] = 'Aucun membre ayant l\'IP (plage) sp�cifi�e n\'a �t� trouv�';
$txt['no_messages_from_ip'] = 'Aucun message depuis l\'IP (plage) sp�cifi�e n\'a �t� trouv�';
$txt['none'] = 'Aucun';
$txt['own_profile_confirm'] = 'Voulez-vous r�ellement effacer votre compte&nbsp;?';
$txt['view_ips_by'] = 'Voir les IPs utilis�es par';

$txt['avatar_will_upload'] = 'Transf�rer un avatar';

$txt['activate_changed_email_title'] = 'Adresse e-mail modifi�e';
$txt['activate_changed_email_desc'] = 'Vous avez chang� votre adresse e-mail. Afin de valider cette adresse, vous allez recevoir un e-mail dans la nouvelle bo�te sp�cifi�e. Cliquez sur le lien dans cet e-mail pour r�activer votre compte.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Impossible d\'envoyer l\'e-mail de rappel.';
$txt['send_email'] = 'Envoyer un e-mail �';
$txt['to_ask_password'] = 'pour demander le mot de passe';

$txt['user_email'] = 'Identifiant/e-mail';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Nouveau mot de passe pour ' . $context['forum_name'];
$txt['reminder_mail'] = 'Cet e-mail a &#233;t&#233; envoy&#233; car la fonction "Rappel de mot de passe" a &#233;t&#233; appliqu&#233;e &#224; votre compte. Pour obtenir un nouveau mot de passe, cliquez sur le lien suivant';
$txt['reminder_sent'] = 'Un e-mail a �t� envoy� � votre adresse e-mail. Suivez le lien dans ce message pour obtenir un nouveau mot de passe.';
$txt['reminder_openid_sent'] = 'Votre identit� OpenID actuelle a �t� envoy�e � votre adresse e-mail.';
$txt['reminder_set_password'] = 'D�finir le mot de passe';
$txt['reminder_password_set'] = 'Mot de passe d�fini avec succ�s';
$txt['reminder_error'] = '%1$s n\'a pas r�ussi � r�pondre correctement � sa question secr�te en voulant retrouver un mot de passe perdu.';

$txt['registration_not_approved'] = 'Desol�, ce compte n\'a pas encore �t� approuv�. Si vous avez besoin de changer votre adresse e-mail, cliquez';
$txt['registration_not_activated'] = 'Desol�, ce compte n\'a pas encore �t� activ�. Si vous avez besoin de changer votre adresse e-mail, cliquez';

$txt['primary_membergroup'] = 'Groupe principal';
$txt['additional_membergroups'] = 'Groupes additionnels';
$txt['additional_membergroups_show'] = '[montrer les groupes additionnels]';
$txt['no_primary_membergroup'] = '(pas de groupe principal)';
$txt['deadmin_confirm'] = '�tes-vous s�r de vouloir quitter irr�vocablement votre statut d\\\'administrateur&nbsp;?';

$txt['account_activate_method_2'] = 'Le compte requiert une r�activation apr�s un changement d\'adresse e-mail';
$txt['account_activate_method_3'] = 'Le compte n\'est pas approuv�';
$txt['account_activate_method_4'] = 'Le compte est en attente d\'approbation de suppression';
$txt['account_activate_method_5'] = 'Le compte est un un compte &quot;sous l\'�ge minimum&quot; en attente d\'approbation';
$txt['account_not_activated'] = 'Ce compte n\'est pas activ� actuellement';
$txt['account_activate'] = 'activer';
$txt['account_approve'] = 'approuver';
$txt['user_is_banned'] = 'L\'utilisateur est actuellement banni';
$txt['view_ban'] = 'Voir';
$txt['user_banned_by_following'] = 'Cet utilisateur est actuellement affect� par les bannissements suivants';
$txt['user_cannot_due_to'] = 'L\'utilisateur ne peut pas %1$s, en raison de son bannissement&nbsp;: &quot;%2$s&quot;';
$txt['ban_type_post'] = 'poster';
$txt['ban_type_register'] = 's\'inscrire';
$txt['ban_type_login'] = 'se connecter';
$txt['ban_type_access'] = 'acc�der au forum';

$txt['show_online'] = 'Autoriser l\'affichage de ma pr�sence en ligne';

$txt['return_to_post'] = 'Par d�faut, retourner dans les sujets apr�s avoir post�.';
$txt['no_new_reply_warning'] = 'Ne pas aviser des nouvelles r�ponses post�es lors de la r�daction d\'un message.';
$txt['posts_apply_ignore_list'] = 'Cacher les messages post�s par les membres que j\'ignore.';
$txt['recent_posts_at_top'] = 'Voir les messages r�cents en premier.';
$txt['recent_pms_at_top'] = 'Voir les messages personnels r�cents en premier.';
$txt['wysiwyg_default'] = 'Afficher l\'�diteur WYSIWYG sur la page d\'�criture par d�faut.';

$txt['timeformat_default'] = '(Par d�faut - R�glages du forum)';
$txt['timeformat_easy1'] = 'Mois Jour, Ann�e, hh:mm:ss am/pm (sur 12 heures)';
$txt['timeformat_easy2'] = 'Mois Jour, Ann�e, hh:mm:ss (sur 24 heures)';
$txt['timeformat_easy3'] = 'AAAA-MM-JJ, hh:mm:ss';
$txt['timeformat_easy4'] = 'JJ Mois AAAA, hh:mm:ss';
$txt['timeformat_easy5'] = 'JJ-MM-AAAA, hh:mm:ss';

$txt['poster'] = 'Auteur';

$txt['board_desc_inside'] = 'Montrer les descriptions des sections dans les sections.';
$txt['show_children'] = 'Montrer les sous-sections sur chaque page des sections, pas seulement la premi�re.';
$txt['use_sidebar_menu'] = 'Montrer si possible les menus en barre verticale plut�t qu\'en menu d�roulant.';
$txt['show_no_avatars'] = 'Ne pas montrer les avatars des autres membres.';
$txt['show_no_signatures'] = 'Ne pas montrer les signatures des autres membres.';
$txt['show_no_censored'] = 'Ne pas censurer les mots.';
$txt['topics_per_page'] = 'Sujets affich�s par page:';
$txt['messages_per_page'] = 'Messages affich�s par page:';
$txt['per_page_default'] = 'Option par d�faut';
$txt['calendar_start_day'] = 'Premier jour de la semaine pour le calendrier';
$txt['display_quick_reply'] = 'Utiliser la R�ponse Rapide dans l\'affichage du sujet';
$txt['display_quick_reply1'] = 'ne pas montrer du tout';
$txt['display_quick_reply2'] = 'montrer, r�tract� par d�faut';
$txt['display_quick_reply3'] = 'montrer, d�velopp� par d�faut';
$txt['display_quick_mod'] = 'Montrer la mod�ration rapide sous forme...';
$txt['display_quick_mod_none'] = 'Ne pas montrer';
$txt['display_quick_mod_check'] = 'De bo�tes � cocher';
$txt['display_quick_mod_image'] = 'D\'ic�nes';

$txt['whois_title'] = 'Chercher cette IP sur un serveur WHOIS r�gional';
$txt['whois_afrinic'] = 'AfriNIC (Afrique)';
$txt['whois_apnic'] = 'APNIC (Asie et Pacifique)';
$txt['whois_arin'] = 'ARIN (Am�rique du Nord, une partie des Cara�bes et Afrique sub-saharienne)';
$txt['whois_lacnic'] = 'LACNIC (Am�rique Latine et Cara�bes)';
$txt['whois_ripe'] = 'RIPE (Europe, le Moyen-Orient et des parties de l\'Afrique et Asie)';

$txt['moderator_why_missing'] = 'Pourquoi n\'y a-t-il aucun mod�rateur ici&nbsp;?';
$txt['username_change'] = 'changer';
$txt['username_warning'] = 'Pour changer l\'identifiant de ce membre, le forum doit aussi r�initialiser son mot de passe, qui lui sera envoy� par e-mail avec son nouvel identifiant.';

$txt['show_member_posts'] = 'Voir les Messages du membre';
$txt['show_member_topics'] = 'Voir les Sujets du membre';
$txt['show_member_attachments'] = 'Voir les Fichiers joints du membre';
$txt['show_posts_none'] = 'Aucun message n\'a encore �t� envoy�.';
$txt['show_topics_none'] = 'Aucun sujet n\'a encore �t� post�.';
$txt['show_attachments_none'] = 'Aucun fichier joint n\'a encore �t� envoy�.';
$txt['show_attach_filename'] = 'Nom de fichier';
$txt['show_attach_downloads'] = 'T�l�chargements';
$txt['show_attach_posted'] = 'Post�';

$txt['showPermissions'] = 'Montrer les permissions';
$txt['showPermissions_status'] = 'Statut de la permission';
$txt['showPermissions_help'] = 'Cette section vous permet de voir toutes les permissions de ce membre (les permissions refus�es sont <del>barr�es</del>).';
$txt['showPermissions_given'] = 'Attribu� par';
$txt['showPermissions_denied'] = 'Interdit par';
$txt['showPermissions_permission'] = 'Permission (les permissions refus�es sont <del>barr�es</del>)';
$txt['showPermissions_none_general'] = 'Aucune permission g�n�rale n\'a �t� enregistr�e pour ce membre.';
$txt['showPermissions_none_board'] = 'Aucune permission sp�cifique n\'a �t� enregistr�e pour ce membre.';
$txt['showPermissions_all'] = 'En tant qu\'administrateur, ce membre a toutes les permissions possibles.';
$txt['showPermissions_select'] = 'Montrer les permissions pour';
$txt['showPermissions_general'] = 'Permissions g�n�rales';
$txt['showPermissions_global'] = 'Toutes les sections';
$txt['showPermissions_restricted_boards'] = 'Sections � acc�s restreint';
$txt['showPermissions_restricted_boards_desc'] = 'Les sections suivantes ne sont pas accessibles pour cet utilisateur';

$txt['local_time'] = 'Temps local';
$txt['posts_per_day'] = 'par jour';

$txt['buddy_ignore_desc'] = 'Cette section vous permet de tenir � jour vos listes d\'amis et d\'utilisateurs � ignorer sur ce forum. En ajoutant des membres � ces listes, vous pourrez contr�ler votre trafic d\'e-mails et de messages personnels selon vos pr�f�rences.';

$txt['buddy_add'] = 'Ajouter � la liste d\'amis';
$txt['buddy_remove'] = 'Enlever de la liste d\'amis';
$txt['buddy_add_button'] = 'Ajouter';
$txt['no_buddies'] = 'Votre liste actuelle d\'amis est vide';

$txt['ignore_add'] = 'Ajouter aux Ignor�s';
$txt['ignore_remove'] = 'Retirer des Ignor�s';
$txt['ignore_add_button'] = 'Ajouter';
$txt['no_ignore'] = 'Votre liste d\'Ignor�s est actuellement vide';

$txt['regular_members'] = 'Membres inscrits';
$txt['regular_members_desc'] = 'Tous les membres du forum font implicitement partie de ce groupe s\'ils ne sont pas associ�s � un groupe principal.';
$txt['group_membership_msg_free'] = 'Votre appartenance � un groupe a �t� mise � jour avec succ�s.';
$txt['group_membership_msg_request'] = 'Votre demande a �t� transmise, veuillez patienter le temps qu\'elle soit �tudi�e.';
$txt['group_membership_msg_primary'] = 'Votre groupe principal a �t� mis � jour';
$txt['current_membergroups'] = 'Groupes de membres actuels';
$txt['available_groups'] = 'Groupes disponibles';
$txt['join_group'] = 'Rejoindre ce groupe';
$txt['leave_group'] = 'Quitter ce groupe';
$txt['request_group'] = 'Demander � rejoindre ce groupe';
$txt['approval_pending'] = 'Approbations en attente';
$txt['make_primary'] = 'D�finir en tant que groupe principal';

$txt['request_group_membership'] = 'Demande d\'adh�sion � un groupe';
$txt['request_group_membership_desc'] = 'Avant de pouvoir rejoindre ce groupe, votre adh�sion doit �tre approuv�e par le mod�rateur. Merci de donner la raison pour laquelle vous voulez le rejoindre&nbsp;';
$txt['submit_request'] = 'Envoyer la demande';

$txt['profile_updated_own'] = 'Votre profil a �t� mis � jour avec succ�s';
$txt['profile_updated_else'] = 'Le profil de %1$s a �t� mis � jour avec succ�s';

$txt['profile_error_signature_max_length'] = 'Votre signature ne doit pas d�passer %1$d caract�res';
$txt['profile_error_signature_max_lines'] = 'Votre signature ne doit pas d�passer %1$d lignes';
$txt['profile_error_signature_max_image_size'] = 'Les images de votre signature ne doivent pas �tre plus grandes que %1$dx%2$d pixels';
$txt['profile_error_signature_max_image_width'] = 'Les images de votre signature ne doivent pas avoir plus de %1$d pixels de largeur';
$txt['profile_error_signature_max_image_height'] = 'Les images de votre signature ne doivent pas avoir plus de %1$d pixels de hauteur';
$txt['profile_error_signature_max_image_count'] = 'Vous ne pouvez pas avoir plus de %1$d images dans votre signature';
$txt['profile_error_signature_max_font_size'] = 'La taille de la police du texte de votre signature ne doit pas d�passer %1$d';
$txt['profile_error_signature_allow_smileys'] = 'Vous n\'avez pas l\'autorisation d\'utiliser des smileys dans votre signature';
$txt['profile_error_signature_max_smileys'] = 'Vous n\'�tes pas autoris� � utiliser plus de %1$d smileys dans votre signature';
$txt['profile_error_signature_disabled_bbc'] = 'Le code BBC suivant n\'est pas autoris� dans votre signature&nbsp;: %1$s';

$txt['profile_view_warnings'] = 'Voir les Avertissements';
$txt['profile_issue_warning'] = 'Envoyer un Avertissement';
$txt['profile_warning_level'] = 'Niveau d\'Avertissement&nbsp;';
$txt['profile_warning_desc'] = 'D\'ici, vous pouvez ajuster le niveau d\'avertissement d\'un utilisateur et lui donner une explication si n�cessaire. Vous pouvez aussi suivre son historique d\'avertissements et voir les effets de son niveau d\'avertissement actuel, tels que d�finis par l\'administrateur.';
$txt['profile_warning_name'] = 'Nom du Membre&nbsp;';
$txt['profile_warning_impact'] = 'R�sultat';
$txt['profile_warning_reason'] = 'Raison de l\'Avertissement&nbsp;';
$txt['profile_warning_reason_desc'] = 'Elle est obligatoire, et sera archiv�e.';
$txt['profile_warning_effect_none'] = 'Aucun.';
$txt['profile_warning_effect_watch'] = 'L\'utilisateur sera ajout� � la liste de surveillance des mod�rateurs.';
$txt['profile_warning_effect_own_watched'] = 'Vous �tes sur la liste de surveillance des mod�rateurs.';
$txt['profile_warning_is_watch'] = 'sous surveillance';
$txt['profile_warning_effect_moderation'] = 'Tous les messages de l\'utilisateur seront soumis � une pr�mod�ration avant publication.';
$txt['profile_warning_effect_own_moderated'] = 'Tous vos messages seront mod�r�s.';
$txt['profile_warning_is_moderation'] = 'voit ses messages mod�r�s avant publication';
$txt['profile_warning_effect_mute'] = 'L\'utilisateur n\'aura plus la possibilit� de poster.';
$txt['profile_warning_effect_own_muted'] = 'Vous ne pouvez plus poster.';
$txt['profile_warning_is_muted'] = 'ne peut pas poster';
$txt['profile_warning_effect_text'] = 'Niveau >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Envoyer une Notification&nbsp;';
$txt['profile_warning_notify_template'] = 'S�lectionner un mod�le&nbsp;:';
$txt['profile_warning_notify_subject'] = 'Titre de la Notification&nbsp;';
$txt['profile_warning_notify_body'] = 'Message de Notification&nbsp;';
$txt['profile_warning_notify_template_subject'] = 'Vous avez re�u un avertissement';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'Vous avez re&#231;u un avertissement pour %1$s. Merci de cesser ces activit&#233;s et de respecter les r&#232;gles du forum, sans quoi nous devrons prendre d\'autres mesures.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'Vous avez re&#231;u un avertissement pour %1$s en rapport avec ce message :' . "\n" . '{MESSAGE}.' . "\n\n" . 'Merci de cesser ces activit&#233;s et de respecter les r&#232;gles du forum, sans quoi nous devrons prendre d\'autres mesures.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'spam';
$txt['profile_warning_notify_title_spamming'] = 'Spam';
$txt['profile_warning_notify_for_offence'] = 'messages au contenu inappropri�';
$txt['profile_warning_notify_title_offence'] = 'Messages au contenu inappropri�';
$txt['profile_warning_notify_for_insulting'] = 'insultes envers d\'autres utilisateurs ou membres de l\'�quipe';
$txt['profile_warning_notify_title_insulting'] = 'Insultes Utilisateurs/Equipe';
$txt['profile_warning_issue'] = 'Donner un Avertissement';
$txt['profile_warning_max'] = '(Max. 100)';
$txt['profile_warning_limit_attribute'] = 'Notez que vous ne pouvez pas ajuster ce niveau d\'utilisateur plus de %1$d%% fois par p�riode de 24 heures.';
$txt['profile_warning_errors_occured'] = 'L\'avertissement n\'a pas pu �tre envoy� pour les erreurs suivantes';
$txt['profile_warning_success'] = 'Avertissement envoy� avec succ�s';
$txt['profile_warning_new_template'] = 'Nouveau Mod�le';

$txt['profile_warning_previous'] = 'Avertissements pr�c�dents';
$txt['profile_warning_previous_none'] = 'Cet utilisateur n\'a jamais re�u d\'avertissement � ce jour.';
$txt['profile_warning_previous_issued'] = 'Donn� par';
$txt['profile_warning_previous_time'] = 'Date';
$txt['profile_warning_previous_level'] = 'Points';
$txt['profile_warning_previous_reason'] = 'Raison';
$txt['profile_warning_previous_notice'] = 'Voir les remarques envoy�es au membre';

$txt['viewwarning'] = 'Voir les Avertissements';
$txt['profile_viewwarning_for_user'] = 'Avertissements pour %1$s';
$txt['profile_viewwarning_no_warnings'] = 'Aucun avertissement n\'a �t� donn�.';
$txt['profile_viewwarning_desc'] = 'Vous trouverez ci-dessous la liste des avertissements qui ont �t� donn�s par l\'�quipe de mod�ration du forum.';
$txt['profile_viewwarning_previous_warnings'] = 'Avertissements ant�rieurs';
$txt['profile_viewwarning_impact'] = 'Impact de l\'avertissement';

$txt['subscriptions'] = 'Abonnements payants';

$txt['pm_settings_desc'] = 'D\'ici, vous pouvez modifier les options pour vos messages personnels, comme leur affichage et qui peut vous en envoyer.';
$txt['email_notify'] = 'Notifier par e-mail � chaque fois que vous recevez un message personnel:';
$txt['email_notify_never'] = 'Jamais';
$txt['email_notify_buddies'] = 'Des amis uniquement';
$txt['email_notify_always'] = 'Toujours';

$txt['pm_receive_from'] = 'Recevoir des messages personnels de&nbsp;:';
$txt['pm_receive_from_everyone'] = 'Tous les membres';
$txt['pm_receive_from_ignore'] = 'Tous les membres, sauf ceux que j\'ignore';
$txt['pm_receive_from_admins'] = 'Les administrateurs seulement';
$txt['pm_receive_from_buddies'] = 'Mes amis et les administrateurs seulement';

$txt['copy_to_outbox'] = 'Sauvegarder par d�faut une copie de tous les messages personnels que j\'envoie.';
$txt['popup_messages'] = 'Afficher une fen�tre pop-up lorsque je re�ois de nouveaux messages';
$txt['pm_remove_inbox_label'] = 'Supprimer le label &quot;Bo�te de r�ception&quot; lors de l\'ajout d\'un autre label';
$txt['pm_display_mode'] = 'Afficher les messages personnels';
$txt['pm_display_mode_all'] = 'Tous � la fois';
$txt['pm_display_mode_one'] = 'Un � la fois';
$txt['pm_display_mode_linked'] = 'Tri�s par conversations';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'Pour profiter au mieux de ce param&egrave;tre, nous vous sugg&eacute;rons d\\\'activer &quot;Sauvegarder par d&eacute;faut une copie de tous les messages personnels que j\\\'envoie.&quot;\\n\\nCela vous aidera &agrave; suivre plus facilement les conversations puisque vous verrez les deux moiti&eacute;s de chaque conversation.';

$txt['tracking'] = 'Suivi';
$txt['tracking_description'] = 'Cette section vous permet de v�rifier certaines actions faites sur le profil de ce membre, mais aussi de suivre son adresse IP.';

$txt['trackEdits'] = 'Modifications du Profil';
$txt['trackEdit_deleted_member'] = 'Membre supprim�';
$txt['trackEdit_no_edits'] = 'Aucune modification n\'a �t� enregistr�e pour ce membre.';
$txt['trackEdit_action'] = 'Champ';
$txt['trackEdit_before'] = 'Valeur pr�c�dente';
$txt['trackEdit_after'] = 'Valeur suivante';
$txt['trackEdit_applicator'] = 'Chang�e par';

$txt['trackEdit_action_real_name'] = 'Nom du Membre';
$txt['trackEdit_action_usertitle'] = 'Titre personnalis�';
$txt['trackEdit_action_member_name'] = 'Identifiant';
$txt['trackEdit_action_email_address'] = 'Adresse e-mail';
$txt['trackEdit_action_id_group'] = 'Groupe de membres principal';
$txt['trackEdit_action_additional_groups'] = 'Groupes de membres additionnels';

?>