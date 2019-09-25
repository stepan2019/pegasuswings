<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 8
	* (c) 2014 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

require_once "../../include/include.php";
require_once '../../../modules/highlited_ads/classes/highlited_ads.php';


global $db;
global $lng;
$smarty = new Smarty;
$smarty = common($smarty);
$smarty->assign("tab","modules");
$smarty->assign("lng",$lng);

global $config_abs_path;
global $appearance_settings;
$al = $appearance_settings['admin_language'];
$lang_file = $config_abs_path."/admin/modules/highlited_ads/lang/$al.php";
if(!file_exists($lang_file)) $lang_file = $config_abs_path."/admin/modules/highlited_ads/lang/eng.php";
require_once $lang_file;

global $lng_popular_ads;
$smarty->assign("lng_highlited_ads",$lng_highlited_ads);

$ha = new highlited_ads();
$ha_settings = $ha->getSettings();

$info = '';
$error = '';
$ha->autoCheckLang();
if(isset($_POST['Submit'])) {
	if($ha->saveSettings()) {
		$info=$lng_highlited_ads['settings_saved'];
		$ha_settings = $ha->getSettings(1);
	} else {
		$ha_settings = $ha->getTmp();
		$error = $ha->getError();
	}
	$smarty->assign("info",$info);
	$smarty->assign("error",$error);
}

$smarty->assign("ha_settings",$ha_settings);

$db->close();
if($db->error!='') { $db_error = $db->getError(); $smarty->assign('db_error',$db_error); }

$smarty->display('modules/highlited_ads/index.html');
close();
?>