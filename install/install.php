<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3 - Licence Number NULLED                          # ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright ?2000-2016 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

// ######################## SET PHP ENVIRONMENT ###########################
error_reporting(E_ALL & ~E_NOTICE);

define('VB_AREA', 'Install');
define('VBINSTALL', true);
define('VB_ENTRY', 'install.php');

if (in_array($_REQUEST['version'], array('', 'install')) AND (!$_REQUEST['step'] OR $_REQUEST['step'] <= 2))
{
	define('SKIPDB', true);
}

require_once('./upgrade.php');

/*======================================================================*\
|| ####################################################################
|| # Downloaded: By Deutschland from vBulletin.com
|| # CVS: $RCSfile$ - $Revision: 39243 $
|| ####################################################################
\*======================================================================*/
