<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Vous n\'�tes pas autoris� � acc�der � cette section';
$txt['wireless_error_notyet'] = 'D�sol�, cette action n\'est pas disponible en mode mobile pour l\'instant.';

$txt['mods_only'] = 'Seuls les mod�rateurs peuvent utiliser la fonction d\'effacement direct, vous pouvez effacer ce message par la fonction Modifier.';
$txt['no_name'] = 'Vous n\'avez pas rempli le champ IDENTIFIANT. Il est requis.';
$txt['no_email'] = 'Vous n\'avez pas rempli le champ e-mail. Il est requis.';
$txt['topic_locked'] = 'Ce sujet est bloqu�, vous n\'�tes pas autoris� � poster ou modifier un message ici...';
$txt['no_password'] = 'Champ MOT DE PASSE vide';
$txt['already_a_user'] = 'L\'identifiant ou pseudonyme que vous essayez d\'utiliser existe d�j�.';
$txt['cant_move'] = 'Vous n\'�tes pas autoris� � d�placer les sujets.';
$txt['login_to_post'] = 'Pour poster, vous devez �tre identifi�. Si vous n\'avez pas encore de compte, <a href="' . $scripturl . '?action=register">inscrivez-vous</a> maintenant.';
$txt['passwords_dont_match'] = 'Les mots de passe diff�rent.';
$txt['register_to_use'] = 'D�sol�, vous devez vous inscrire avant d\'utiliser cette fonction.';
$txt['password_invalid_character'] = 'Caract�re invalide dans le mot de passe.';
$txt['name_invalid_character'] = 'Caract�re invalide dans l\'identifiant / pseudonyme.';
$txt['email_invalid_character'] = 'Caract�re invalide dans l\'adresse e-mail.';
$txt['username_reserved'] = 'L\'identifiant ou pseudonyme que vous essayez d\'utiliser contient le nom r�serv� \'%1$s\'. Merci d\'essayer une autre alternative.';
$txt['numbers_one_to_nine'] = 'Ce champ n\'accepte que des chiffres de 0-9';
$txt['not_a_user'] = 'L\'utilisateur dont vous essayez de consulter le profil n\'existe pas.';
$txt['not_a_topic'] = 'Ce sujet n\'existe pas dans ce forum.';
$txt['not_approved_topic'] = 'Ce sujet n\'a pas encore �t� approuv�.';
$txt['email_in_use'] = 'Cette adresse e-mail (%1$s) est d�j� utilis�e par un membre inscrit. Si vous pensez que c\'est une erreur, allez sur la page de connexion et demandez le rappel de votre mot de passe en indiquant cette adresse.';

$txt['didnt_select_vote'] = 'Vous n\'avez pas choisi d\'option de vote.';
$txt['poll_error'] = 'Soit ce sondage n\'existe pas, soit il est bloqu�, soit vous avez essay� de voter 2 fois.';
$txt['members_only'] = 'Cette option est r�serv�e aux membres...';
$txt['locked_by_admin'] = 'Bloqu� par un administrateur. Vous ne pouvez pas le d�bloquer.';
$txt['not_enough_posts_karma'] = 'D�sol�, vous n\'avez pas assez de messages pour modifier un karma - il vous en faut au moins %1$d.';
$txt['cant_change_own_karma'] = 'D�sol�, vous ne pouvez pas modifier votre propre karma.';
$txt['karma_wait_time'] = 'D�sol�, vous ne pouvez r�p�ter une action sur le karma sans attendre %1$s %2$s.';
$txt['feature_disabled'] = 'D�sol�, cette fonction est d�sactiv�e.';
$txt['cant_access_upload_path'] = 'Impossible d\'acc�der au chemin des fichiers joints&nbsp;!';
$txt['file_too_big'] = 'Votre fichier est trop gros. La taille maximale autoris�e pour les fichiers joints est de %1$d Ko.';
$txt['attach_timeout'] = 'Votre fichier joint n\'a pu �tre transf�r�. Il est possible que son transfert ait �t� trop long, ou que le fichier soit plus gros que la limite impos�e par le serveur.<br /><br />Veuillez contacter l\'administrateur pour plus d\'informations.';
$txt['filename_exists'] = 'D�sol�&nbsp;! Ce nom de fichier joint est d�j� pris. Merci de renommer votre fichier avant de r�essayer.';
$txt['bad_attachment'] = 'Votre fichier joint a �chou� aux tests de s�curit�, et ne peut pas �tre mis en ligne. Merci de contacter l\'administrateur.';
$txt['ran_out_of_space'] = 'Le r�pertoire de destination est plein. Essayez avec un fichier moins volumineux et/ou contactez un administrateur.';
$txt['couldnt_connect'] = '�chec de la connexion au serveur, ou fichier non trouv�';
$txt['no_board'] = 'La section sp�cifi�e est introuvable';
$txt['cant_split'] = 'Vous n\'�tes pas autoris� � s�parer des sujets';
$txt['cant_merge'] = 'Vous n\'�tes pas autoris� � fusionner des sujets';
$txt['no_topic_id'] = 'ID de sujet invalide.';
$txt['split_first_post'] = 'Vous ne pouvez pas s�parer un sujet au premier message.';
$txt['topic_one_post'] = 'Ce sujet ne contient qu\'un seul message et ne peut pas �tre s�par�.';
$txt['no_posts_selected'] = 'Aucun message s�lectionn�';
$txt['selected_all_posts'] = 'Impossible de s�parer. Vous avez s�lectionn� tous les messages.';
$txt['cant_find_messages'] = 'Messages introuvables';
$txt['cant_find_user_email'] = 'Impossible de trouver l\'adresse e-mail de l\'utilisateur.';
$txt['cant_insert_topic'] = 'Impossible d\'ins�rer le sujet';
$txt['already_a_mod'] = 'Vous avez choisi l\'identifiant ou pseudonyme d\'un mod�rateur existant. Merci de choisir autre chose.';
$txt['session_timeout'] = 'Votre session s\'est termin�e pendant que vous postiez. Retournez en arri�re et r�essayez.';
$txt['session_verify_fail'] = '�chec de v�rification de session. Veuillez tenter de vous d�connecter et reconnecter, puis r�essayez.';
$txt['verify_url_fail'] = 'Impossible de v�rifier l\'adresse r�f�rente. Merci de revenir en arri�re et de r�essayer.';
$txt['guest_vote_disabled'] = 'Les invit�s ne peuvent pas participer � ce sondage.';

$txt['cannot_access_mod_center'] = 'Vous n\'avez pas la permission d\'acc�der au centre de mod�ration.';
$txt['cannot_admin_forum'] = 'Vous n\'�tes pas autoris� � administrer ce forum.';
$txt['cannot_announce_topic'] = 'Vous n\'�tes pas autoris� � annoncer vos sujets dans cette section.';
$txt['cannot_approve_posts'] = 'Vous n\'avez pas la permission d\'approuver quoi que ce soit.';
$txt['cannot_post_unapproved_attachments'] = 'Vous n\'avez pas la permission de poster des fichiers joints non approuv�s.';
$txt['cannot_post_unapproved_topics'] = 'Vous n\'avez pas la permission de poster des sujets non approuv�s.';
$txt['cannot_post_unapproved_replies_own'] = 'Vous n\'avez pas la permission de poster des r�ponses non approuv�es dans vos sujets.';
$txt['cannot_post_unapproved_replies_any'] = 'Vous n\'avez pas la permission de poster des r�ponses non approuv�es dans les sujets des autres utilisateurs.';
$txt['cannot_calendar_edit_any'] = 'Vous ne pouvez pas modifier les �v�nements du calendrier.';
$txt['cannot_calendar_edit_own'] = 'Vous n\'avez pas les privil�ges requis pour modifier vos propres �v�nements.';
$txt['cannot_calendar_post'] = 'D�sol�, l\'ajout d\'�v�nements n\'est pas autoris�.';
$txt['cannot_calendar_view'] = 'D�sol�, mais vous n\'�tes pas autoris� � voir le calendrier.';
$txt['cannot_remove_any'] = 'D�sol�, mais vous n\'avez pas les privil�ges requis pour supprimer un sujet.';
$txt['cannot_remove_own'] = 'Vous ne pouvez pas effacer vos propres sujets dans ce forum.';
$txt['cannot_edit_news'] = 'Vous n\'�tes pas autoris� � modifier les nouvelles de ce forum.';
$txt['cannot_pm_read'] = 'D�sol�, vous ne pouvez pas lire vos messages personnels.';
$txt['cannot_pm_send'] = 'Vous n\'�tes pas autoris� � envoyer des messages personnels';
$txt['cannot_karma_edit'] = 'Vous n\'�tes pas autoris� � modifier le karma des autres membres.';
$txt['cannot_lock_any'] = 'Vous n\'�tes pas autoris� � verrouiller les sujets ici.';
$txt['cannot_lock_own'] = 'D�sol�, mais vous ne pouvez pas bloquer vos propres sujets ici.';
$txt['cannot_make_sticky'] = 'Vous n\'avez pas la permission d\'�pingler ce sujet.';
$txt['cannot_manage_attachments'] = 'Vous n\'avez pas les autorisations requises pour g�rer les avatars et fichiers joints.';
$txt['cannot_manage_bans'] = 'Vous n\'avez pas les permissions n�cessaires pour modifier la liste des bannissements.';
$txt['cannot_manage_boards'] = 'Vous n\'avez pas les autorisations requises pour g�rer les sections et cat�gories.';
$txt['cannot_manage_membergroups'] = 'Vous n\'avez pas les autorisations requises pour modifier ou assigner des groupes de membres.';
$txt['cannot_manage_permissions'] = 'Vous n\'avez pas les autorisations requises pour g�rer les permissions.';
$txt['cannot_manage_smileys'] = 'Vous n\'avez pas les autorisations requises pour g�rer les smileys et les ic�nes de messages.';
$txt['cannot_mark_any_notify'] = 'Vous n\'avez pas les permissions n�cessaires pour recevoir les notifications pour ce sujet.';
$txt['cannot_mark_notify'] = 'D�sol�, vous n\'�tes pas autoris� � demander des notifications de ce forum.';
$txt['cannot_merge_any'] = 'Vous n\'�tes pas autoris� � fusionner des sujets sur une des sections s�lectionn�es.';
$txt['cannot_moderate_forum'] = 'Vous n\'�tes pas autoris� � mod�rer cette section.';
$txt['cannot_moderate_board'] = 'Vous n\'�tes pas autoris� � mod�rer cette section.';
$txt['cannot_modify_any'] = 'Vous n\'�tes autoris� � modifier un message.';
$txt['cannot_modify_own'] = 'D�sol�, mais vous n\'�tes pas autoris� � modifier vos propres messages.';
$txt['cannot_modify_replies'] = 'Bien que ce message soit une r�ponse � votre sujet, vous ne pouvez pas le modifier.';
$txt['cannot_move_own'] = 'Vous n\'�tes pas autoris� � d�placer vos propres sujets dans cette section.';
$txt['cannot_move_any'] = 'Vous n\'�tes pas autoris� � d�placer les sujets de cette section.';
$txt['cannot_poll_add_own'] = 'D�sol�, vous n\'�tes pas autoris� � ajouter des sondages � vos propres sujets dans cette section.';
$txt['cannot_poll_add_any'] = 'Vous n\'avez pas les permissions pour ajouter un sondage dans ce sujet.';
$txt['cannot_poll_edit_own'] = 'Vous ne pouvez pas modifier ce sondage, bien que ce soit le votre.';
$txt['cannot_poll_edit_any'] = 'On vous a refus� l\'acc�s � la modification des sondages dans cette section.';
$txt['cannot_poll_lock_own'] = 'Vous n\'�tes pas autoris� � bloquer vos propres sondages dans cette section.';
$txt['cannot_poll_lock_any'] = 'D�sol�, vous ne pouvez bloquer aucun sondage.';
$txt['cannot_poll_post'] = 'Vous n\'�tes pas autoris� � poster des sondages dans la section courante.';
$txt['cannot_poll_remove_own'] = 'Vous n\'�tes pas autoris� � supprimer ce sondage dans votre sujet.';
$txt['cannot_poll_remove_any'] = 'Vous ne pouvez retirer aucun sondage de cette section.';
$txt['cannot_poll_view'] = 'Vous n\'�tes pas autoris� � voir les sondages de cette section.';
$txt['cannot_poll_vote'] = 'D�sol�, mais vous ne pouvez pas voter dans les sondages de cette section.';
$txt['cannot_post_attachment'] = 'Vous n\'avez pas la permission de poster des fichiers joints ici.';
$txt['cannot_post_new'] = 'D�sol�, vous ne pouvez pas poster de nouveau sujet sur cette section.';
$txt['cannot_post_reply_any'] = 'Vous n\'�tes pas autoris� � poster des r�ponses aux sujets de cette section.';
$txt['cannot_post_reply_own'] = 'Vous n\'�tes pas autoris� � poster des r�ponses, m�me � vos propres sujets, dans cette section.';
$txt['cannot_profile_remove_own'] = 'D�sol�, mais vous n\'avez pas l\'autorisation d\'effacer votre profil.';
$txt['cannot_profile_remove_any'] = 'Vous n\'avez pas l\'autorisation de supprimer les profils des membres&nbsp;!';
$txt['cannot_profile_extra_any'] = 'Vous n\'�tes autoris� � modifier un param�tre du profil.';
$txt['cannot_profile_identity_any'] = 'Vous n\'�tes pas autoris� � modifier les param�tres relatifs au compte.';
$txt['cannot_profile_title_any'] = 'Vous ne pouvez pas modifier les pseudonymes des membres.';
$txt['cannot_profile_extra_own'] = 'D�sol�, mais vous n\'avez pas les permissions n�cessaires pour modifier votre profil.';
$txt['cannot_profile_identity_own'] = 'Vous ne pouvez pas changer votre identifiant pour l\'instant.';
$txt['cannot_profile_title_own'] = 'Vous n\'�tes pas autoris� � changer votre pseudonyme.';
$txt['cannot_profile_server_avatar'] = 'Vous n\'�tes pas autoris� � utiliser des serveurs de stockage d\'avatars.';
$txt['cannot_profile_upload_avatar'] = 'Vous n\'avez pas la permission pour transf�rer un avatar.';
$txt['cannot_profile_remote_avatar'] = 'Vous n\'avez pas les permissions n�cessaires pour utiliser un avater distant.';
$txt['cannot_profile_view_own'] = 'D�sol�, mais vous ne pouvez pas visualiser votre profil.';
$txt['cannot_profile_view_any'] = 'D�sol�, mais vous ne pouvez visualiser aucun profil.';
$txt['cannot_delete_own'] = 'Vous n\'�tes pas autoris� � effacer vos propres messages dans cette section.';
$txt['cannot_delete_replies'] = 'D�sol�, mais vous ne pouvez pas effacer ces messages, bien qu\'ils soient des r�ponses � votre sujet.';
$txt['cannot_delete_any'] = 'Effacer n\'importe quel message sur ce forum n\'est pas autoris�.';
$txt['cannot_report_any'] = 'Vous n\'�tes pas autoris� � rapporter des messages de cette section.';
$txt['cannot_search_posts'] = 'Vous n\'�tes pas autoris� � rechercher des messages dans cette section.';
$txt['cannot_send_mail'] = 'Vous n\'avez pas le privil�ge d\'envoyer des e-mails � quiconque.';
$txt['cannot_issue_warning'] = 'D�sol�, vous n\'avez pas la permission de donner des avertissements aux utilisateurs.';
$txt['cannot_send_topic'] = 'D�sol�, mais l\'administrateur a interdit l\'envoi de sujets de cette section.';
$txt['cannot_split_any'] = 'S�parer un sujet n\'est pas autoris� dans cette section.';
$txt['cannot_view_attachments'] = 'Il semble que vous n\'�tes pas autoris� � t�l�charger ou voir les fichiers joints de cette section.';
$txt['cannot_view_mlist'] = 'Vous ne pouvez pas voir la liste des membres.';
$txt['cannot_view_stats'] = 'Vous ne pouvez pas voir les statistiques du forum.';
$txt['cannot_who_view'] = 'D�sol� - vous n\'avez pas les permissions n�cessaires pour voir la liste des membres en ligne.';

$txt['no_theme'] = 'Ce th�me n\'existe pas.';
$txt['theme_dir_wrong'] = 'Le r�pertoire du th�me par d�faut est erron�, veuillez le corriger en cliquant sur ce texte.';
$txt['registration_disabled'] = 'D�sol�, l\'inscription est actuellement d�sactiv�e.';
$txt['registration_no_secret_question'] = 'D�sol�, il n\'y a aucune question secr�te programm�e par ce membre.';
$txt['poll_range_error'] = 'D�sol�, le sondage doit �tre valid� pour plus de 0 jour.';
$txt['delFirstPost'] = 'Vous n\'�tes pas autoris� � effacer le premier message d\'un sujet.<p>Si vous voulez effacer ce sujet, cliquez sur le lien Effacer le sujet, ou demandez � un mod�rateur/administrateur de le faire pour vous.</p>';
$txt['parent_error'] = 'Impossible de cr�er une section&nbsp;!';
$txt['login_cookie_error'] = 'Erreur de connexion.  Veuillez v�rifier vos r�glages pour l\'utilisation du t�moin.';
$txt['incorrect_answer'] = 'D�sol�, mais vous n\'avez pas r�pondu correctement � votre question.  Veuillez cliquer sur \'Retour\' et r�essayer, ou cliquez Retour 2 fois afin d\'utiliser la m�thode par d�faut pour retrouver votre mot de passe.';
$txt['no_mods'] = 'Aucun mod�rateur trouv�&nbsp;!';
$txt['parent_not_found'] = 'La structure de la section est corrompue&nbsp;: impossible de trouver la section parente';
$txt['modify_post_time_passed'] = 'Vous ne pouvez pas modifier ce message puisque le temps limite pour les modifications est d�pass�.';

$txt['calendar_off'] = 'Vous ne pouvez pas acc�der au calendrier pour l\'instant car il est d�sactiv�.';
$txt['invalid_month'] = 'Mois invalide.';
$txt['invalid_year'] = 'Ann�e invalide.';
$txt['invalid_day'] = 'Jour invalide.';
$txt['event_month_missing'] = 'Mois de l\'�v�nement manquant.';
$txt['event_year_missing'] = 'Ann�e de l\'�v�nement manquante.';
$txt['event_day_missing'] = 'Jour de l\'�v�nement manquant.';
$txt['event_title_missing'] = 'Titre de l\'�v�nement manquant.';
$txt['invalid_date'] = 'Date invalide.';
$txt['no_event_title'] = 'Titre d\'�v�nement manquant.';
$txt['missing_event_id'] = 'ID d\'�v�nement manquant.';
$txt['cant_edit_event'] = 'Vous n\'�tes pas autoris� � modifier cet �v�nement.';
$txt['missing_board_id'] = 'ID de section manquant.';
$txt['missing_topic_id'] = 'ID de sujet manquant.';
$txt['topic_doesnt_exist'] = 'Le sujet n\'existe pas.';
$txt['not_your_topic'] = 'Ce sujet n\'est pas le v�tre.';
$txt['board_doesnt_exist'] = 'La section n\'existe pas.';
$txt['no_span'] = 'La fonction d\'�talement est d�sactiv�e.';
$txt['invalid_days_numb'] = 'Nombre de jours d\'�talement invalide.';

$txt['moveto_noboards'] = 'Il n\'y a pas de forum o� d�placer ce sujet';

$txt['already_activated'] = 'Votre compte a d�j� �t� activ�.';
$txt['still_awaiting_approval'] = 'Votre compte est encore en attente d\'approbation par un administrateur.';

$txt['invalid_email'] = 'Adresse e-mail invalide.<br />Exemple d\'une adresse e-mail valide&nbsp;: votreemail@votrefai.com.<br />Exemple d\'une plage d\'adresses e-mail valide : *@*.votrefai.com';
$txt['invalid_expiration_date'] = 'Date d\'expiration non valide';
$txt['invalid_hostname'] = 'Nom/plage de domaine invalide.<br />Exemple de domaine valide : proxy4.grosmechantloup.com<br />Exemple de plage de domaine valide&nbsp;: *.grosmechantloup.com';
$txt['invalid_ip'] = 'IP ou plage d\'IP non valide.<br />Exemple d\'une adresse IP valide : 127.0.0.1<br />Exemple d\'une plage d\'adresses IP valide : 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Adresse IP ou bloc d\'adresses IP invalide.<br />Exemple d\'adresse IP valide&nbsp;: 127.0.0.1<br />Exemple de bloc valide&nbsp;: 127.0.0.*';
$txt['invalid_username'] = 'Identifiant du membre introuvable';
$txt['no_ban_admin'] = 'Vous ne pouvez pas bannir un administrateur - vous devez d\'abord le r�trograder&nbsp;!';
$txt['no_bantype_selected'] = 'Type de bannissement non s�lectionn�';
$txt['ban_not_found'] = 'Bannissement introuvable';
$txt['ban_unknown_restriction_type'] = 'Type de restriction inconnu';
$txt['ban_name_empty'] = 'Le nom du bannissement a �t� laiss� vide';
$txt['ban_name_exists'] = 'Le nom de ce bannissement (%1$s) existe d�j�. Veuillez choisir un autre nom.';
$txt['ban_trigger_already_exists'] = 'Le d�clencheur de bannissement %1$s existe d�j� dans %2$s.';

$txt['recycle_no_valid_board'] = 'Aucune section valide n\'a �t� choisie pour stocker les sujets recycl�s';

$txt['login_threshold_fail'] = 'D�sol�, nombre de tentatives de connexion d�pass�. Revenez essayer plus tard.';
$txt['login_threshold_brute_fail'] = 'D�sol�, nombre de tentatives de connexion d�pass�. Patientez 30 secondes et r�essayez.';

$txt['who_off'] = 'La liste des membres en ligne est indisponible pour le moment.';

$txt['merge_create_topic_failed'] = 'Erreur pendant la cr�ation du nouveau sujet.';
$txt['merge_need_more_topics'] = 'Fusionner des sujets n�cessite au moins 2 sujets...';

$txt['postWaitTime_broken'] = 'Le dernier message post� depuis votre adresse IP date d\'il y a moins de %1$d secondes. Veuillez r�essayer plus tard.';
$txt['registerWaitTime_broken'] = 'Vous vous �tes d�j� inscrit il y a %1$d secondes&nbsp;!';
$txt['loginWaitTime_broken'] = 'Vous devez attendre environ %1$d secondes avant de vous reconnecter, d�sol�.';
$txt['pmWaitTime_broken'] = 'Le dernier message principal post� depuis votre adresse IP date d\'il y a moins de %1$d secondes. Veuillez r�essayer plus tard.';
$txt['reporttmWaitTime_broken'] = 'Le dernier sujet rapport� depuis votre adresse IP date d\'il y a moins de %1$d secondes. Veuillez r�essayer plus tard.';
$txt['sendtopcWaitTime_broken'] = 'Le dernier sujet envoy� depuis votre adresse IP date d\'il y a moins de %1$d secondes. Veuillez r�essayer plus tard.';
$txt['sendmailWaitTime_broken'] = 'Le dernier e-mail envoy� depuis votre adresse IP date d\'il y a moins de %1$d secondes. Veuillez r�essayer plus tard.';
$txt['searchWaitTime_broken'] = 'Votre derni�re recherche date d\'il y a moins de %1$d secondes. Veuillez r�essayer plus tard.';

$txt['email_missing_data'] = 'Vous devez entrer quelque chose � la fois dans le champ &quot;titre&quot; et la bo�te de texte.';

$txt['topic_gone'] = 'Le sujet ou la section que vous recherchez � l\'air d\'�tre manquant ou inaccessible pour vous.';
$txt['theme_edit_missing'] = 'Le fichier que vous essayez de modifier... est introuvable&nbsp;!';

$txt['attachments_no_write'] = 'Le dossier de destination des fichiers joints est en lecture seule.  Votre fichier joint ou avatar ne peut pas �tre sauvegard�.';
$txt['attachments_limit_per_post'] = 'Vous ne pouvez pas transf�rer plus de %1$d fichiers joints par message';

$txt['no_dump_database'] = 'Seul les administrateurs peuvent faire des copies de sauvegarde des bases de donn�es&nbsp;!';
$txt['pm_not_yours'] = 'Le message personnel que vous tentez de citer n\'est pas de vous ou n\'existe pas, retournez d\'o� vous venez et r�essayez.';
$txt['mangled_post'] = 'Donn�es du formulaire erron�es - veuillez retourner � la page pr�c�dente et r�essayer.';
$txt['quoted_post_deleted'] = 'Le message que vous essayez de citer, soit n\'existe pas, soit � �t� supprim�, ou n\'est plus accessible pour vous.';
$txt['pm_too_many_per_hour'] = 'Vous avez d�pass� la limite de %1$d messages personnels par heure.';
$txt['labels_too_many'] = 'D�sol�, %1$s messages ont d�j� le montant maximal de labels permis&nbsp;!';

$txt['register_only_once'] = 'D�sol�, mais vous ne pouvez pas inscrire plus d\'un compte en m�me temps depuis le m�me ordinateur.';
$txt['admin_setting_coppa_require_contact'] = 'Si l\'approbation d\'un parent/tuteur est requise, vous devez entrer un moyen de contact soit postal, soit par fax.';

$txt['error_long_name'] = 'Le pseudonyme que vous avez tent� d\'utiliser est trop long.';
$txt['error_no_name'] = 'Aucun pseudonyme n\'a �t� fourni.';
$txt['error_bad_name'] = 'Ce pseudonyme ne peut �tre utilis�, car c\'est un mot r�serv�, ou il le contient.';
$txt['error_no_email'] = 'Aucune adresse e-mail n\'a �t� indiqu�e.';
$txt['error_bad_email'] = 'Une adresse e-mail invalide a �t� indiqu�e.';
$txt['error_no_event'] = 'Aucun nom d\'�v�nement n\'a �t� donn�.';
$txt['error_no_subject'] = 'Aucun titre de sujet n\'a �t� indiqu�.';
$txt['error_no_question'] = 'Aucune question n\'a �t� pos�e pour ce sondage.';
$txt['error_no_message'] = 'Le corps du message est vide.';
$txt['error_long_message'] = 'Le message d�passe la limite de caract�res autoris�e (%1$d caract�res permis).';
$txt['error_no_comment'] = 'Le champ de commentaire est vide.';
$txt['error_session_timeout'] = 'Votre session s\'est termin�e alors que vous postiez. Veuillez tenter de resoumettre votre message.';
$txt['error_no_to'] = 'Aucun destinataire sp�cifi�.';
$txt['error_bad_to'] = 'Un ou plusieurs destinataires \'�\' n\'ont pu �tre trouv�s.';
$txt['error_bad_bcc'] = 'Un ou plusieurs destinataires \'Bcc\' n\'ont pu �tre trouv�s.';
$txt['error_form_already_submitted'] = 'Vous avez d�j� soumis ce message&nbsp;!  Vous avez sans doute accidentellement double-cliqu� sur le bouton de soumission, ou vous avez rafra�chi la page.';
$txt['error_poll_few'] = 'Vous devez avoir au moins deux (2) choix&nbsp;!';
$txt['error_need_qr_verification'] = 'Merci de remplir le formulaire de v�rification ci-dessous avant d\'envoyer votre message.';
$txt['error_wrong_verification_code'] = 'Les lettres que vous avez tap�es ne correspondent pas aux lettres montr�es sur l\'image.';
$txt['error_wrong_verification_answer'] = 'Vous n\'avez pas r�pondu aux questions de v�rification correctement.';
$txt['error_need_verification_code'] = 'Veuillez entrer le code de v�rification ci-dessous pour passer aux r�sultats.';
$txt['error_bad_file'] = 'D�sol� mais le fichier sp�cifi� n\'a pas pu �tre ouvert&nbsp;: %1$s';
$txt['error_bad_line'] = 'La ligne indiqu�e est invalide.';

$txt['smiley_not_found'] = 'Smiley introuvable.';
$txt['smiley_has_no_code'] = 'Aucun code pour ce smiley n\'a �t� donn�.';
$txt['smiley_has_no_filename'] = 'Aucun fichier pour ce smiley n\'a �t� donn�.';
$txt['smiley_not_unique'] = 'Un smiley ayant ce code existe d�j�.';
$txt['smiley_set_already_exists'] = 'Un jeu de smileys ayant cette URL existe d�j�.';
$txt['smiley_set_not_found'] = 'Jeu de smileys introuvable.';
$txt['smiley_set_path_already_used'] = 'L\'URL de ce jeu de smileys est d�j� utilis�e par un autre jeu.';
$txt['smiley_set_unable_to_import'] = 'Impossible d\'importer le jeu de smileys. Le r�pertoire est soit invalide, soit interdit d\'acc�s.';

$txt['smileys_upload_error'] = '�chec lors du chargement du fichier.';
$txt['smileys_upload_error_blank'] = 'Tous les jeux de smileys doivent avoir une image&nbsp;!';
$txt['smileys_upload_error_name'] = 'Tous les smileys doivent avoir les m�mes noms de fichier&nbsp;!';
$txt['smileys_upload_error_illegal'] = 'Format d\'image interdit.';

$txt['search_invalid_weights'] = 'La pertinence des recherches n\'est pas bien configur�e. Au moins un dispositif devrait �tre configur� afin d\'�tre diff�rent de z�ro.  Veuillez rapporter cette erreur � l\'administrateur.';
$txt['unable_to_create_temporary'] = 'L\'outil de recherche a �t� incapable de cr�er des tables temporaires.  Veuillez r�essayer.';

$txt['package_no_file'] = 'Impossible de trouver le fichier de paquet&nbsp;!';
$txt['packageget_unable'] = 'Impossible de se connecter au serveur. Veuillez r�essayer en utilisant plut�t <a href="%1$s" target="_blank" class="new_win">cette URL</a>.';
$txt['not_on_simplemachines'] = 'D�sol�, les paquets ne peuvent �tre t�l�charg�s que de cette fa�on depuis le serveur simplemachines.org.';
$txt['package_cant_uninstall'] = 'Ce paquet n\'a jamais �t� install� ou a d�j� �t� d�sinstall� - vous ne pouvez pas le d�sinstaller maintenant.';
$txt['package_cant_download'] = 'Vous ne pouvez pas installer ou t�l�charger de paquets parce que le r�pertoire /Packages ou un de ses fichiers est bloqu� en �criture&nbsp;!';
$txt['package_upload_error_nofile'] = 'Vous n\'avez pas choisi de paquet � envoyer.';
$txt['package_upload_error_failed'] = '�chec d\'envoi du paquet. Veuillez v�rifier les droits d\'acc�s du r�pertoire&nbsp;!';
$txt['package_upload_error_exists'] = 'Le fichier que vous transf�rez existe d�j� sur le serveur. Veuillez tout d\'abord le supprimer, puis r�essayer.';
$txt['package_upload_error_supports'] = 'Le gestionnaire de paquets permet actuellement uniquement ces types de fichier&nbsp;: %1$s.';
$txt['package_upload_error_broken'] = 'Le paquet n\'a pas pu �tre t�l�charg� pour la raison suivante&nbsp;:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'Impossible de trouver le paquet que vous essayez d\'installer. Essayez d\'uploader le paquet manuellement dans votre r�pertoire Packages.';
$txt['package_get_error_missing_xml'] = 'Le fichier package-info.xml est introuvable dans le paquet que vous essayez d\'installer. Il doit se trouver � la racine du r�pertoire du paquet.';
$txt['package_get_error_is_zero'] = 'Le paquet a �t� t�l�charg� avec succ�s, mais il semble �tre vide. V�rifiez que le r�pertoire Packages et son sous-r�pertoire &quot;temp&quot; sont inscriptibles. Si le probl�me persiste, essayez d\'extraire le paquet sur votre PC et d\'uploader les fichiers extraits manuellement vers un sous-r�pertoire de Packages. Par exemple, si le paquet s\'appelle shout.tar.gz, vous devriez&nbsp;:<br />1) T�l�charger le fichier sur votre machine et le d�compresser.<br />2) Utiliser un client FTP pour cr�er un nouveau r�pertoire dans le r�pertoire &quot;Packages&quot;, par exemple ici &quot;shout&quot;.<br />3) Y placer tous les fichiers du paquet extrait.<br />4) Revenir sur la page du gestionnaire de paquets, et le paquet devrait s\'y trouver automatiquement.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF n\'a pas trouv� d\'informations valables dans le fichier package-info.xml inclus dans le paquet. Le paquet comporte peut-�tre une erreur, ou il est corrompu.';

$txt['no_membergroup_selected'] = 'Aucun groupe de membre s�lectionn�';
$txt['membergroup_does_not_exist'] = 'Le groupe de membres n\'existe pas ou est invalide.';

$txt['at_least_one_admin'] = 'Il doit y avoir au moins un administrateur sur ce forum&nbsp;!';

$txt['error_functionality_not_windows'] = 'D�sol�, cette fonctionnalit� n\'est actuellement pas disponible pour les serveurs tournant sous Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Fichier joint introuvable';

$txt['error_no_boards_selected'] = 'Aucune section valide n\'a �t� s�lectionn�e&nbsp;!';
$txt['error_invalid_search_string'] = 'Avez-vous oubli� de sp�cifier quelque chose � rechercher&nbsp;?';
$txt['error_invalid_search_string_blacklist'] = 'Votre requ�te comporte des mots trop communs. R�essayez en modifiant votre requ�te.';
$txt['error_search_string_small_words'] = 'Chaque mot doit faire au moins deux caract�res de long.';
$txt['error_query_not_specific_enough'] = 'Votre requ�te n\'est pas assez pr�cise. Essayez de nouveau avec des mots ou des phrases moins vagues.';
$txt['error_no_messages_in_time_frame'] = 'Aucun message trouv� dans cet intervalle de temps.';
$txt['error_no_labels_selected'] = 'Aucune �tiquette n\'a �t� s�lectionn�e&nbsp;!';
$txt['error_no_search_daemon'] = 'Impossible d\'acc�der au daemon (processus) de recherche';

$txt['profile_errors_occurred'] = 'Les erreurs suivantes sont survenues lorsque vous tentiez de sauvegarder votre profil';
$txt['profile_error_bad_offset'] = 'Le d�calage horaire est hors normes';
$txt['profile_error_no_name'] = 'Le pseudonyme est rest� vide';
$txt['profile_error_name_taken'] = 'L\'identifiant/pseudonyme choisi est d�j� utilis�';
$txt['profile_error_name_too_long'] = 'Le nom s�lectionn� est trop long. Il ne doit pas faire plus de 60 caract�res';
$txt['profile_error_no_email'] = 'Le champ d\'adresse e-mail est rest� vide';
$txt['profile_error_bad_email'] = 'Vous n\'avez pas sp�cifi� une adresse e-mail valide';
$txt['profile_error_email_taken'] = 'Un autre utilisateur s\'est d�j� inscrit avec cette adresse e-mail';
$txt['profile_error_no_password'] = 'Vous n\'avez pas entr� votre mot de passe';
$txt['profile_error_bad_new_password'] = 'Les nouveaux mots de passe que vous avez entr�s ne correspondent pas';
$txt['profile_error_bad_password'] = 'Le mot de passe que vous avez entr� est incorrect';
$txt['profile_error_bad_avatar'] = 'L\'avatar que vous avez choisi est trop grand ou n\'est pas un avatar';
$txt['profile_error_password_short'] = 'Votre mot de passe doit contenir au moins ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' caract�res.';
$txt['profile_error_password_restricted_words'] = 'Votre mot de passe de doit pas contenir votre identifiant, adresse e-mail ou autre mot couramment utilis�.';
$txt['profile_error_password_chars'] = 'Votre mot de passe doit contenir un m�lange de lettres majuscules et minuscules, de m�me que des num�ros.';
$txt['profile_error_already_requested_group'] = 'Vous avez d�j� une demande en instance pour ce groupe&nbsp;!';
$txt['profile_error_openid_in_use'] = 'Un autre membre utilise d�j� cette URL d\'authentification OpenID';

$txt['mysql_error_space'] = ' - v�rifiez la taille de votre base de donn�es ou contactez un administrateur du serveur.';

$txt['icon_not_found'] = 'L\'ic�ne de message n\'a pu �tre trouv�e pour le th�me par d�faut - veuillez vous assurer que l\'image a bien �t� transf�r�e et essayez de nouveau.';
$txt['icon_after_itself'] = 'L\'ic�ne ne peut pas �tre positionn�e apr�s elle-m�me&nbsp;!';
$txt['icon_name_too_long'] = 'Les noms de fichier des ic�nes ne peuvent d�passer 16 caract�s de long';

$txt['name_censored'] = 'D�sol�, le nom que vous tentez d\'utiliser, %1$s, contient des mots qui ont �t� censur�s. Veuillez en choisir un autre.';

$txt['poll_already_exists'] = 'Un sujet ne peut avoir qu\'un seul sondage associ�&nbsp;!';
$txt['poll_not_found'] = 'Il n\'y a aucun sondage associ� � ce sujet&nbsp;!';

$txt['error_while_adding_poll'] = 'L\'erreur ou les erreurs suivantes sont apparues lorsque vous ajoutiez ce sondage';
$txt['error_while_editing_poll'] = 'L\'erreur ou les erreurs suivantes sont apparues lorsque vous modifiez ce sondage';

$txt['loadavg_search_disabled'] = 'D� � une charge �lev�e sur le serveur, la fonction de recherche a �t� automatiquement et temporairement d�sactiv�e. R�essayez un peu plus tard.';
$txt['loadavg_generic_disabled'] = 'D� d� � une charge �lev�e sur le serveur, cette fonction est actuellement indisponible.';
$txt['loadavg_allunread_disabled'] = 'Les ressources du serveur sont temporairement surcharg�es&nbsp;; impossible de trouver tous les sujets que vous n\'avez pas lus.';
$txt['loadavg_unreadreplies_disabled'] = 'Le serveur est actuellement sous une charge �lev�e.  Veuillez essayer de nouveau dans quelques instants.';
$txt['loadavg_show_posts_disabled'] = 'R�essayer � nouveau plus tard.  Les messages de ce membre ce sont pas disponibles actuellement du fait d\'une surcharge du serveur.';
$txt['loadavg_unread_disabled'] = 'Le serveur est temporairement trop stress� pour permettre d\'afficher les sujets non lus.';

$txt['cannot_edit_permissions_inherited'] = 'Vous ne pouvez pas modifier les permissions de type h�rit� directement. Vous devez modifier soit le groupe parent, soit l\'h�ritage du groupe de membres.';

$txt['mc_no_modreport_specified'] = 'Vous devez sp�cifier quel rapport vous voulez voir.';
$txt['mc_no_modreport_found'] = 'Le rapport sp�cifi� n\'existe pas, ou il est hors de port�e pour vous';

$txt['st_cannot_retrieve_file'] = 'Impossible de r�cup�rer le fichier %1$s.';
$txt['admin_file_not_found'] = 'Impossible de charger le fichier demand�&nbsp;: %1$s.';

$txt['themes_none_selectable'] = 'Au moins un th�me doit pouvoir �tre s�lectionn�.';
$txt['themes_default_selectable'] = 'Le th�me par d�faut global du forum doit �tre un th�me s�lectionnable.';
$txt['ignoreboards_disallowed'] = 'L\'option pour ignorer les sections n\'a pas �t� activ�e.';

$txt['mboards_delete_error'] = 'Pas de cat�gorie s�lectionn�e&nbsp;!';
$txt['mboards_delete_board_error'] = 'Pas de section s�lectionn�e&nbsp;!';

$txt['mboards_parent_own_child_error'] = 'Impossible de faire un parent de son propre enfant!';
$txt['mboards_board_own_child_error'] = 'Impossible de faire une section son propre enfant!';

$txt['smileys_upload_error_notwritable'] = 'Les r�pertoires de smileys suivants ne sont pas inscriptibles&nbsp;: %1$s';
$txt['smileys_upload_error_types'] = 'Les fichiers des smileys sont limit�s � ces extensions&nbsp;: %1$s.';

$txt['change_email_success'] = 'Votre adresse e-mail a �t� chang�e, et un nouvel e-mail d\'activation a �t� envoy�.';
$txt['resend_email_success'] = 'L\'e-mail d\'activation a �t� renvoy� avec succ�s.';

$txt['custom_option_need_name'] = 'L\'option du profil doit avoir un nom&nbsp;!';
$txt['custom_option_not_unique'] = 'Le nom du champ n\'est pas unique&nbsp;!';

$txt['warning_no_reason'] = 'Vous devez entrer une raison pour modifier l\'�tat d\'avertissement d\'un membre.';
$txt['warning_notify_blank'] = 'Vous avez choisi de notifier l\'utilisateur, mais vous n\'avez pas rempli les champs de titre/message.';

$txt['cannot_connect_doc_site'] = 'Impossible de se connecter au manuel en ligne de Simple Machines. Veuillez vous assurer que votre configuration serveur permet les connexions Internet externes et r�essayez plus tard.';

$txt['movetopic_no_reason'] = 'Vous devez pr�ciser une raison pour le d�placement du sujet, ou d�sactiver l\'option \'Poster un message de redirection\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'L\'identifiant demand� n\'a pas retourn� l\'information attendue.';
$txt['openid_return_no_mode'] = 'Le fournisseur d\'identit� n\'a pas r�pondu avec le mode OpenID.';
$txt['openid_not_resolved'] = 'Le fournisseur d\'identit� n\'a pas appouv� votre demande.';
$txt['openid_no_assoc'] = 'Impossible de trouver l\'association demand�e avec le fournisseur d\'identit�.';
$txt['openid_sig_invalid'] = 'La signature du fournisseur d\'identit� est invalide.';
$txt['openid_load_data'] = 'Impossible de charger les donn�es � partir de votre requ�te de connexion. Veuillez r�essayer.';
$txt['openid_not_verified'] = 'L\'adresse OpenID fournie n\'a pas encore �t� v�rifi�e. Veuillez vous connecter pour la v�rifier.';

$txt['error_custom_field_too_long'] = 'Le champ &quot;%1$s&quot; ne peut faire plus de %2$d caract�res.';
$txt['error_custom_field_invalid_email'] = 'Le champ &quot;%1$s&quot; doit �tre une adresse e-mail valide.';
$txt['error_custom_field_not_number'] = 'Le champ &quot;%1$s&quot; doit �tre un nombre.';
$txt['error_custom_field_inproper_format'] = 'Le format du champ &quot;%1$s&quot; est invalide.';
$txt['error_custom_field_empty'] = 'Le champ &quot;%1$s&quot; ne peut �tre laiss� vide.';

$txt['email_no_template'] = 'Le mod�le d\'e-mail &quot;%1$s&quot; est introuvable.';

$txt['search_api_missing'] = 'L\'API de recherche est introuvable&nbsp;! Veuillez contacter l\'administrateur pour v�rifier s\'ils ont mis les bons fichiers sur le serveur.';
$txt['search_api_not_compatible'] = 'L\'API de recherche s�lectionn�e n\'est pas � jour - SMF utilisera la recherche standard � la place. Veuillez v�rifier le fichier %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Vous ne pouvez restaurer le premier message d\'un sujet.';
$txt['parent_topic_missing'] = 'Le sujet auquel appartenait le message que vous essayez de restaurer a �t� supprim� entretemps.';
$txt['restored_disabled'] = 'La restauration de sujets a �t� d�sactiv�e.';
$txt['restore_not_found'] = 'Les messages suivants n\'ont pas pu �tre restaur�s; le sujet original a peut-�tre �t� supprim� entretemps&nbsp;:<ul style="margin-top: 0px;">%1$s</ul>Vous devrez les d�placer manuellement.';

$txt['error_invalid_dir'] = 'Le r�pertoire que vous avez sp�cifi� est invalide.';

$txt['error_sqlite_optimizing'] = 'Sqlite est en train d\'optimiser la base de donn�es, le forum ne sera accessible que par la suite. Merci de patienter avant de rafra�chir la page.';

?>