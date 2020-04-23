<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

########## Maintenance ##########
# Note: If $maintenance is set to 2, the forum will be unusable!  Change it to 0 to fix it.
$mtitle = 'Сход временно не доступен!';		# Title for the Maintenance Mode message.
$mmessage = 'Производится плановая уборка территории.';		# Description of why the forum is in maintenance mode.

########## Forum Info ##########
$mbname = 'Сход';		# The name of your forum.
$language = 'russian-utf8';		# The default language file set for the forum.
$boardurl = 'http://skeet.h1n.ru/forum';		# URL to your forum's folder. (without the trailing /!)
$webmaster_email = 'yoda@skeet.h1n.ru';		# Email address to send emails from. (like noreply@yourdomain.com.)
$cookiename = 'SMFCookie443';		# Name of the cookie to set for authentication.

########## Database Info ##########
$db_type = 'mysqli';
$db_server = 'localhost';
$db_name = 'olzhhuce_forum';
$db_user = 'olzhhuce_skeet';
$db_passwd = '1pUtC29jFvbS';
$ssi_db_user = '';
$ssi_db_passwd = '';
$db_prefix = '';
$db_persist = 1;
$db_error_send = 1;

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
$boarddir = '/var/www/olzhhuce/data/www/skeet.h1n.ru/forum';		# The absolute path to the forum's folder. (not just '.'!)
$sourcedir = '/var/www/olzhhuce/data/www/skeet.h1n.ru/forum/Sourcesjavascript:void(0);';		# Path to the Sources directory.
$cachedir = '/var/www/olzhhuce/data/www/skeet.h1n.ru/forum/cache';		# Path to the cache directory.

########## Error-Catching ##########
# Note: You shouldn't touch these settings.
$db_last_error = 0;

# Make sure the paths are correct... at least try to fix them.
if (!file_exists($boarddir) && file_exists(dirname(__FILE__) . '/agreement.txt'))
	$boarddir = dirname(__FILE__);
if (!file_exists($sourcedir) && file_exists($boarddir . '/Sources'))
	$sourcedir = $boarddir . '/Sources';
if (!file_exists($cachedir) && file_exists($boarddir . '/cache'))
	$cachedir = $boarddir . '/cache';

$image_proxy_secret = '69cff343bcd1273a9da2';
$maintenance = '0';
$packagesdir = '/var/www/olzhhuce/data/www/skeet.h1n.ru/forum/Packages';
$tasksdir = '/var/www/olzhhuce/data/www/skeet.h1n.ru/forum/Sources/tasks';
$image_proxy_enabled = 0;
$db_character_set = 'utf8';
$cache_enable = 1;
$cache_accelerator = 'smf';
?>