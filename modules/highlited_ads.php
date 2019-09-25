<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 8
	* (c) 2014 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

global $modules_array;
if(!in_array("highlited_ads", $modules_array)) return;

global $config_abs_path;
require_once $config_abs_path."/modules/highlited_ads/classes/highlited_ads.php";

function highlited_listings($smarty) {

	global $smarty;
	$ha = new highlited_ads();
	$highlited_ads = $ha->getSettings();
	$smarty->assign("highlited_ads", $highlited_ads);

	$highlited = $ha->getHighlited($highlited_ads);
	$no_highlited = count($highlited);
	$smarty->assign("highlited", $highlited);
	$smarty->assign("no_highlited", $no_highlited);

}

function check_languages_highlited() {

	$ha = new highlited_ads();
	$ha->autoCheckLang();
	
}

add_action('first_page', 'highlited_listings');
add_action('add_language', 'check_languages_highlited');
add_action('delete_language', 'check_languages_highlited');

?>