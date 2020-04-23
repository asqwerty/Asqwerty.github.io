<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Date';
$txt['modlog_member'] = 'Membre';
$txt['modlog_position'] = 'Rang';
$txt['modlog_action'] = 'Action';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'R�sultats de la recherche';
$txt['modlog_total_entries'] = 'Total des actions';
$txt['modlog_ac_approve_topic'] = 'Sujet &quot;{topic}&quot; approuv� par &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Message &quot;{subject}&quot; approuv� dans &quot;{topic}&quot; par &quot;{member}&quot;';
$txt['modlog_ac_lock'] = '&quot;{topic}&quot; verrouill�';
$txt['modlog_ac_warning'] = '{member} averti concernant &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = '&quot;{topic}&quot; d�bloqu�';
$txt['modlog_ac_sticky'] = '&quot;{topic}&quot; �pingl�';
$txt['modlog_ac_unsticky'] = '&quot;{topic}&quot; d�pingl�';
$txt['modlog_ac_delete'] = '&quot;{subject}&quot; effac� de &quot;{topic}&quot; par &quot;{member}&quot;';
$txt['modlog_ac_delete_member'] = 'Membre &quot;{name}&quot; supprim�';
$txt['modlog_ac_remove'] = 'Sujet &quot;{topic}&quot; effac� de &quot;{board}&quot;';
$txt['modlog_ac_modify'] = '&quot;{message}&quot; modifi� par &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Sujets fusionn�s pour cr�er &quot;{topic}&quot;';
$txt['modlog_ac_split'] = '&quot;{topic}&quot; s�par� en deux pour cr�er &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = '&quot;{topic}&quot; d�plac� de &quot;{board_from}&quot; � &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Profil de &quot;{member}&quot; modifi�';
$txt['modlog_ac_pruned'] = 'Messages vieux de plus de {days} jours purg�s';
$txt['modlog_ac_news'] = 'Nouvelles mises � jour';
$txt['modlog_enter_comment'] = 'Entrer un commentaire de mod�ration';
$txt['modlog_moderation_log'] = 'Journal de Mod�ration';
$txt['modlog_moderation_log_desc'] = 'Voici la liste des actions de mod�ration faites par les mod�rateurs du forum.<br /><strong>Veuillez noter</strong> que les entr�es ne peuvent �tre supprim�es de ce journal avant un d�lai de 24h.';
$txt['modlog_no_entries_found'] = 'Aucune entr�e pour le moment dans le journal de mod�ration.';
$txt['modlog_remove'] = 'Supprimer';
$txt['modlog_removeall'] = 'Tout supprimer';
$txt['modlog_go'] = 'Allons-y';
$txt['modlog_add'] = 'Ajouter';
$txt['modlog_search'] = 'Recherche Rapide';
$txt['modlog_by'] = 'Par';
$txt['modlog_id'] = '<em>Supprim� - (ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = 'Mod�le d\'avertissement ajout�&nbsp;: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = 'Mod�le d\'avertissement modifi�&nbsp;: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Mod�le d\'avertissement supprim�&nbsp;: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Crit�res de bannissement ajout�s&nbsp;:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Membre</em>&nbsp;: {member}';
$txt['modlog_ac_ban_trigger_email'] = ' <em>E-mail</em>&nbsp;: {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = ' <em>IP</em>&nbsp;: {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Nom d\'h�te</em>&nbsp;: {hostname}';

$txt['modlog_admin_log'] = 'Journal d\'Administration';
$txt['modlog_admin_log_desc'] = 'Voici la liste des actions d\'administration effectu�es sur votre forum.<br /><strong>Veuillez noter</strong> que les entr�es ne peuvent �tre supprim�es de ce journal avant un d�lai de 24h.';
$txt['modlog_admin_log_no_entries_found'] = 'Aucune entr�e pour le moment dans le journal d\'administration.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Forum mis � jour en version {version}';
$txt['modlog_ac_install'] = 'Version {version} install�e';
$txt['modlog_ac_add_board'] = 'Nouvelle section cr��e&nbsp;: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Section &quot;{board}&quot; modifi�e';
$txt['modlog_ac_delete_board'] = 'Section &quot;{boardname}&quot; supprim�e';
$txt['modlog_ac_add_cat'] = 'Nouvelle cat�gorie cr��e&nbsp;: &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Cat�gorie &quot;{catname}&quot; modifi�e';
$txt['modlog_ac_delete_cat'] = 'Cat�gorie &quot;{catname}&quot; supprim�e';

$txt['modlog_ac_delete_group'] = 'Groupe &quot;{group}&quot; supprim�';
$txt['modlog_ac_add_group'] = 'Groupe &quot;{group}&quot; cr��';
$txt['modlog_ac_edited_group'] = 'Groupe &quot;{group}&quot; modifi�';
$txt['modlog_ac_added_to_group'] = '&quot;{member}&quot; ajout� au groupe &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = '&quot;{member}&quot; retir� du groupe &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = '&quot;{member}&quot; retir� de tous les groupes';

$txt['modlog_ac_remind_member'] = 'Rappel envoy� � &quot;{member}&quot; pour l\'activation de son compte';
$txt['modlog_ac_approve_member'] = 'Compte de &quot;{member}&quot; approuv�/activ�';
$txt['modlog_ac_newsletter'] = 'Infolettre envoy�e';

$txt['modlog_ac_install_package'] = 'Nouveau paquet install�&nbsp;: &quot;{package}&quot;, version {version} ';
$txt['modlog_ac_upgrade_package'] = 'Paquet mis � jour&nbsp;: &quot;{package}&quot; � la version {version} ';
$txt['modlog_ac_uninstall_package'] = 'Paquet d�sinstall�&nbsp;: &quot;{package}&quot;, version {version} ';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Sujet &quot;{topic}&quot; restaur� � partir de &quot;{board}&quot; vers la section &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Messages restaur�s � partir de &quot;{subject}&quot; vers le sujet &quot;{topic}&quot; dans la section &quot;{board}&quot;';

$txt['modlog_parameter_guest'] = '<em>Invit�</em>';

?>