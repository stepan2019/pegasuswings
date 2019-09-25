<?php /* Smarty version 3.1.24, created on 2019-06-11 16:29:46
         compiled from "/home/pegasuswings/public_html/admin/templates/default/listings_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:13677428135cffd6fa7fdd42_29536485%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effee8481d7a1521f68a7e2e1c63886ad1b1ebd2' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/listings_settings.html',
      1 => 1546030332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13677428135cffd6fa7fdd42_29536485',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'error' => 0,
    'successful' => 0,
    'template_path' => 0,
    'ads_settings' => 0,
    'languages' => 0,
    'html_tags' => 0,
    'v' => 0,
    'fields' => 0,
    'groups_list' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd6fa8d0b52_31763153',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd6fa8d0b52_31763153')) {
function content_5cffd6fa8d0b52_31763153 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '13677428135cffd6fa7fdd42_29536485';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/css/jquery.comboselect.css" />

<!--[if IE]>
<style type="text/css">
select.csleft, select.csright {
	width: 100px;
}
</style>
<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.selso.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.comboselect.js"><?php echo '</script'; ?>
>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['listings_settings'];?>
</div>

<div class="p30">
<form name="settings" id="settings" method="post" action="listings_settings.php" enctype="multipart/form-data">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['successful']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['settings_saved'];?>
</div><?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['listings_display_settings']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_sold'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_sold'];?>
</div>
	<div class="right_form"><input type="checkbox"  name="enable_sold" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_sold'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['hide_contact_when_sold'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['hide_contact_when_sold'];?>
</div>
	<div class="right_form"><input type="checkbox" name="hide_contact_when_sold" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['hide_contact_when_sold'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_rented'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_rented'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_rented" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_rented'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['hide_contact_when_rented'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['hide_contact_when_rented'];?>
</div>
	<div class="right_form"><input type="checkbox" name="hide_contact_when_rented" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['hide_contact_when_rented'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['hide_contact_when_not_logged'];?>
</div>
	<div class="right_form"><input type="checkbox" name="hide_contact_when_not_logged" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['hide_contact_when_not_logged'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['show_stock_no'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['show_stock_no'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_stock" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_stock'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['show_more_link'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['show_more_link'];?>
</div>
	<div class="right_form"><input type="checkbox" name="show_more_link" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['show_more_link'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['show_ad_date_for_everybody'];?>
</div>
	<div class="right_form"><input type="checkbox" name="show_ad_date_for_everybody" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['show_ad_date_for_everybody'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['date_time_ago_format'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['date_time_ago_format'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="date_time_ago_format" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['date_time_ago_format'] == 1) {?> checked="checked" <?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['date_time_ago_days'];?>
&nbsp;<input type="text" maxlength="3" name="date_time_ago_days" size=3 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['date_time_ago_days'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days_old'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['days_recent'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days_recent'];?>
</div>
	<div class="right_form"><input type="text" maxlength="5" name="days_recent" size=6 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['days_recent'];?>
"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp; <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['submit_form_settings']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_badwords'];?>
</div>
	<div class="right_form">

		<input type="checkbox" id="badwords_check" name="badwords_check" onchange="onBadwordsSettings()" onClick="onBadwordsSettings()" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['badwords_check'] == 1) {?> checked="checked" <?php }?>/>&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['badwords_check'] == 1) {?>
		<div style="display: block" id="div_badwords">
		<?php } else { ?>
		<div style="display: none" id="div_badwords">
		<?php }?>
			<input type="radio" name="badwords_check_type" value="1" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['badwords_check_type'] == 1) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['badwords_block'];?>
&nbsp;&nbsp;
			<input type="radio" name="badwords_check_type" value="0" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['badwords_check_type'] == 0) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['badwords_replace'];?>

		</div>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['add_meta_with_listings'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['add_meta_with_listings'];?>
</div>
	<div class="right_form"><input type="checkbox" class="noborder" name="add_meta_with_listings" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['add_meta_with_listings']) {?>checked="checked"<?php }?>/></div>
</div>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['translate_title_description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['translate_title_description'];?>
</div>
	<div class="right_form"><input type="checkbox" name="translate_title_description" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['translate_title_description']) {?>checked="checked"<?php }?>/></div>
</div>
<?php }?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['pending_edited'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['pending_edited'];?>
</div>
	<div class="right_form"><input type="checkbox" name="pending_edited" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['pending_edited']) {?>checked="checked"<?php }?>/></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['auctions']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_auctions'];?>
</div>

	<div class="right_form"><input type="checkbox" class="noborder" name="enable_auctions" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] == 1) {?> checked="checked" <?php }?> /></div>
</div>


<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['notify_when_new_bid'];?>
</div>
	<div class="right_form"><input type="checkbox" class="noborder" name="notify_when_new_bid" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['notify_when_new_bid'] == 1) {?> checked="checked" <?php }?> /></div>

</div>



<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['latest_ads']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_latest'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_latest'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_latest" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_latest'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['no_latest'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['no_latest'];?>
</div>
	<div class="right_form"><input type="text" name="no_latest" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['no_latest'];?>
"/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['no_latest_on_row'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['no_latest_on_row'];?>
</div>
	<div class="right_form"><input type="text" name="no_latest_on_row" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['no_latest_on_row'];?>
"/></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['images']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['image_dimensions'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['image_dimensions'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
&nbsp;<input type="text" name="pic_max_width" maxlength="10" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['pic_max_width'];?>
"/>&nbsp;px&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
&nbsp;<input type="text" name="pic_max_height" maxlength="10" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['pic_max_height'];?>
"/>&nbsp;px&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['size'];?>
&nbsp;<input type="text" name="pic_max_size" maxlength="10" size="6" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['pic_max_size'];?>
"/>&nbsp;Kb
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['image_resizing'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['image_resizing'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="resize_image" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['resize_image']) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['resize_image'];?>
&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['resize_width'];?>
&nbsp;<input type="text" name="resize_width" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['resize_width'];?>
"/>&nbsp;px&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['resize_height'];?>
&nbsp;<input type="text" name="resize_height" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['resize_height'];?>
"/>&nbsp;px
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['small_thumb_dimmensions'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
&nbsp;<input type="text" name="thmb_width" size="5" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_width'];?>
"/>&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
&nbsp;<input type="text" name="thmb_height" size="5" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_height'];?>
"/>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['medium_thumb_dimmensions'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
&nbsp;<input type="text" name="med_thmb_width" size="5" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['med_thmb_width'];?>
"/>&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
&nbsp;<input type="text" name="med_thmb_height" size="5" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['med_thmb_height'];?>
"/>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['big_thumb_dimmensions'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
&nbsp;<input type="text" name="big_thmb_width" size="5" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['big_thmb_width'];?>
"/>&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
&nbsp;<input type="text" name="big_thmb_height" size="5" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['big_thmb_height'];?>
"/>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['default_small_image'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_small_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="nopic" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['nopic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['nopic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"/></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png"/>
		<?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['default_medium_image'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_medium_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="med_nopic"/>&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['med_nopic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['med_nopic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"/></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png"/>
		<?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['default_big_image'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_big_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="big_nopic"/>&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['big_nopic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['big_nopic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"/></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png"/>
		<?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['watermark'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['watermark'];?>
</div>
	<div class="right_form">
		<input type="file" name="watermark" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['watermark'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark'] != '') {?>&nbsp;&nbsp;<a href="listings_settings.php?delete=watermark"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['watermark_position'];?>
</div>
	<div class="right_form">
		<input type="radio" name="watermark_position" value="tl" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark_position'] == 'tl') {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['top_left'];?>
&nbsp;&nbsp;
		<input type="radio" name="watermark_position" value="tr" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark_position'] == 'tr') {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['top_right'];?>
&nbsp;&nbsp;
		<input type="radio" name="watermark_position" value="bl" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark_position'] == 'bl') {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['bottom_left'];?>
&nbsp;&nbsp;
		<input type="radio" name="watermark_position" value="br" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark_position'] == 'br') {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['bottom_right'];?>
&nbsp;&nbsp;
		<input type="radio" name="watermark_position" value="c" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark_position'] == 'c') {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['center'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['watermark_transparency'];?>
</div>
	<div class="right_form"><input type="text" name="watermark_transparency" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['watermark_transparency'];?>
" size="5"/>%</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['html_options']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['description_editor'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['description_editor'];?>
</div>
	<div class="right_form"><input type="checkbox" name="description_editor" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['description_editor'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['allowed_html'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['allowed_html'];?>
</div>
	<div class="right_form">
		<select id="allowed_html_box" name="allowed_html_box[]" multiple="multiple" size="6" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['html_tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['ads_settings']->value['array_allowed_html'])) {?>selected="selected"<?php }?>>&lt;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&gt;</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="allowed_html" name="allowed_html" value="" />
		<div class="lfloat information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['search_settings']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['search_in_fields'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['search_in_fields'];?>
</div>
	<div class="right_form">
		<select id="search_in_fields_box" name="search_in_fields_box" multiple="multiple" size="6" class="mselect">
		<option value="category_name" <?php if (in_array("category_name",$_smarty_tpl->tpl_vars['ads_settings']->value['array_search_in_fields'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['category'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['ads_settings']->value['array_search_in_fields'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="search_in_fields" name="search_in_fields" value="" />
		<div class="lfloat information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['count_refine_results'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['count_refine_results'];?>
</div>
	<div class="right_form"><input type="checkbox" name="count_refine_results" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['count_refine_results'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['search_type'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['search_type'];?>
</div>
	<div class="right_form">
		<input type="radio" name="search_type" value="exact" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['search_type'] == 'exact') {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['exact_search'];?>
<br/>
		<input type="radio" name="search_type" value="partial" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['search_type'] == 'partial') {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['partial_search'];?>
<br/>
		<input type="radio" name="search_type" value="all" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['search_type'] == 'all') {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['all_words'];?>
<br/>
		<input type="radio" name="search_type" value="any" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['search_type'] == 'any') {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['any_words'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_search_view'];?>
</div>
	<div class="right_form">
		<input type="radio" name="default_search_view" value="0" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['default_search_view'] == 0) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['list_view'];?>
&nbsp;&nbsp;
		<input type="radio" name="default_search_view" value="1" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['default_search_view'] == 1) {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['gallery_view'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_map_search'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_map_search'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_map_search" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_map_search'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['map_visible'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['map_visible'];?>
</div>
	<div class="right_form"><input type="checkbox" name="map_visible" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['map_visible'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['search_location_fields'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['search_location_fields'];?>
</div>
	<div class="right_form">
		<div class="clearfix">
		<select id="search_location_fields_box" name="search_location_fields_box" multiple="multiple" size="6" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['ads_settings']->value['array_search_location_fields'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="search_location_fields" name="search_location_fields" value="" />
		</div>

		<div class="information mb10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
		<div class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['important']['search_location_fields'];?>
</div>


	</div>
</div>


<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_location_autosuggest'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_location_autosuggest'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_location_autosuggest" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_location_autosuggest'] == 1) {?> checked="checked" <?php }?> onchange="checkDistanceSearch(this.form)"/></div>
</div>

<div id="div_location_autosuggest">
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['address_components'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['address_components'];?>
</div>
	<div class="right_form">
	
	 <fieldset class="bordered">
		<legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['country'];?>
</legend>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['field'];?>
: 
		<select id="la_country" name="la_country">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['none'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['country']['field']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['country']['field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['type'];?>
: 
		<select name="la_country_type" id="la_country_type">
			<option value="long_name" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['country']['type']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['country']['type'] == "long_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['long_name'];?>
</option>
			<option value="short_name" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['country']['type']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['country']['type'] == "short_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['short_name'];?>
</option>
		</select>
		
	</fieldset>
	
	 <fieldset class="bordered">
		<legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['administrative_area_level_1'];?>
</legend>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['field'];?>
: 
		<select id="la_administrative_area_level_1" name="la_administrative_area_level_1">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['none'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_1']['field']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_1']['field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['type'];?>
: 
		<select name="la_administrative_area_level_1_type" id="la_administrative_area_level_1_type">
			<option value="long_name" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_1']['type']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_1']['type'] == "long_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['long_name'];?>
</option>
			<option value="short_name" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_1']['type']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_1']['type'] == "short_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['short_name'];?>
</option>
		</select>
		
	</fieldset>

	 <fieldset class="bordered">
		<legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['administrative_area_level_2'];?>
</legend>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['field'];?>
: 
		<select id="la_administrative_area_level_2" name="la_administrative_area_level_2">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['none'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_2']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_2']['field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['type'];?>
: 
		<select name="la_administrative_area_level_2_type" id="la_administrative_area_level_2_type">
			<option value="long_name" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_2']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_2']['type'] == "long_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['long_name'];?>
</option>			<option value="short_name" <?php if (isset($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_2']) && $_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['administrative_area_level_2']['type'] == "short_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['short_name'];?>
</option>

		</select>
		
	</fieldset>

	 <fieldset class="bordered">
		<legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['locality'];?>
</legend>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['field'];?>
: 
		<select id="la_locality" name="la_locality">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['none'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['locality']['field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['type'];?>
: 
		<select name="la_locality_type" id="la_locality_type">
			<option value="long_name" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['locality']['type'] == "long_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['long_name'];?>
</option>
			<option value="short_name" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['locality']['type'] == "short_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['short_name'];?>
</option>
		</select>
		
	</fieldset>

	 <fieldset class="bordered">
		<legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['postal_code'];?>
</legend>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['field'];?>
: 
		<select id="la_postal_code" name="la_postal_code">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['none'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['postal_code']['field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['type'];?>
: 
		<select name="la_postal_code_type" id="la_postal_code_type">
			<option value="long_name" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['postal_code']['type'] == "long_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['long_name'];?>
</option>
			<option value="short_name" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['address_components']['postal_code']['type'] == "short_name") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ac']['short_name'];?>
</option>
		</select>
		
	</fieldset>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['limit_location_autosuggest'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['limit_location_autosuggest'];?>
</div>
	<div class="right_form"><input type="text" name="limit_location_autosuggest" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['limit_location_autosuggest'];?>
"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info2']['limit_location_autosuggest'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['gm_api_lang'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['gm_api_lang'];?>
</div>
	<div class="right_form"><input type="text" name="gm_api_lang" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['gm_api_lang'];?>
"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info2']['gm_api_lang'];?>
</div>
</div>

</div> 

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_distance_search'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_distance_search'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_distance_search" id="enable_distance_search" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_distance_search'] == 1) {?> checked="checked" <?php }?> onChange="checkDistanceSearch(this.form)"/></div>
</div>

<div id="div_distance_search">
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ds_measuring_unit'];?>
</div>
	<div class="right_form">
		<select name="ds_measuring_unit">
			<option value="Km" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['ds_measuring_unit'] == "Km") {?>selected="selected"<?php }?>>Km</option>
			<option value="miles" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['ds_measuring_unit'] == "miles") {?>selected="selected"<?php }?>>miles</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['ds_distances_list'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ds_distances_list'];?>
</div>
	<div class="right_form"><textarea name="ds_distances_list" rows="6" cols="20"/><?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['ds_distances_list_formatted'];?>
</textarea></div>
</div>

</div>


<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['saved_searches'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['saved_searches_enabled'];?>
</div>
	<div class="right_form"><input type="checkbox" name="saved_searches_enabled" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['saved_searches_enabled'] == 1) {?> checked="checked" <?php }?>/></div>
</div>


<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['location']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['location_fields'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['location_fields'];?>
</div>
	<div class="right_form">
		<select id="location_fields_box" name="location_fields_box" multiple="multiple" size="6" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['ads_settings']->value['array_location_fields'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="location_fields" name="location_fields" value="" />
		<div class="lfloat information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['email_alerts']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['info']['email_alerts'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="alerts_enabled" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_enabled'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['info']['ask_advanced_key'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['ask_advanced_key'];?>
</div>
	<div class="right_form"><input type="checkbox" name="alerts_ask_adv_key" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_ask_adv_key'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['info']['require_login'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['require_login'];?>
</div>
	<div class="right_form"><input type="checkbox" name="alerts_require_login" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_require_login'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['info']['alerts_activation'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['alerts_activation'];?>
</div>
	<div class="right_form">
		<input type="radio" name="alerts_activation" value="1" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_activation'] == 1) {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['activation_always'];?>
&nbsp;&nbsp;
		<input type="radio" name="alerts_activation" value="2" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_activation'] == 2) {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['when_not_logged_in'];?>
&nbsp;&nbsp;
		<input type="radio" name="alerts_activation" value="0" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['alerts_activation'] == 0) {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['activation_never'];?>
&nbsp;&nbsp;
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['info']['delete_after'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['alerts']['delete_after'];?>
</div>
	<div class="right_form"><input type="text" size="10" name="alerts_days_delete" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['alerts_days_delete'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['search_by_account_type']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['search_by_account_type'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['search_by_account_type'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="search_by_account_type" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['search_by_account_type'] == 1) {?> checked="checked" <?php }?>/>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['prof_groups'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['prof_groups'];?>
</div>
	<div class="right_form">
		<select id="prof_groups_box" name="prof_groups_box" multiple="multiple" size="6" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['groups_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['ads_settings']->value['array_prof_groups'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="prof_groups" name="prof_groups" value="" />
		<div class="lfloat information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php } else { ?>return checkAdsSettings("<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['error']['search_in_fields']);?>
");<?php }?>'>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 


<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$("a.imgfield").fancybox();
		checkDistanceSearch(document.forms["settings"]);
	});

	$(function(){
		$('#allowed_html_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
		$('#search_in_fields_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
		$('#location_fields_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
		$('#search_location_fields_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
		$('#prof_groups_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
	});

<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>