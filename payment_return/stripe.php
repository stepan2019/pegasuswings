<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
require_once "../include/include.php";
global $config_abs_path;
require_once $config_abs_path."/classes/mail_templates.php";
require_once $config_abs_path."/classes/mails.php";
require_once $config_abs_path."/classes/info.php";
require_once $config_abs_path."/classes/actions.php";
require_once $config_abs_path."/classes/users_packages.php";
require_once $config_abs_path."/classes/packages.php";
require_once $config_abs_path."/include/payments.php";
require_once $config_abs_path."/classes/users.php";

global $appearance_settings;
header('Content-type: text/html; charset='.$appearance_settings['charset']);

global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("lng",$lng);
$smarty->assign("section","other");

global $config_debug;
$payment = new payment("stripe");
$payment->setDebug($config_debug);

$info='';

switch($_GET['mode'])
{
	case 'process':
		$payment->process();
		$info=$payment->getInfo();
		$error=$payment->getPPError();
		$smarty->assign("info",$info);
		$smarty->assign("error",$error);
		$smarty->display('payment_return.html');
	break;
}

?>
