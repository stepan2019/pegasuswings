<?php /* Smarty version 3.1.24, created on 2019-06-11 16:29:50
         compiled from "/home/pegasuswings/public_html/admin/templates/default/settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:9295643735cffd6fe728be5_97765156%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f917fdce68be0e009e46e2564e1df817c8bf6792' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/settings.html',
      1 => 1531553220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9295643735cffd6fe728be5_97765156',
  'variables' => 
  array (
    'lng' => 0,
    'error' => 0,
    'successful' => 0,
    'languages' => 0,
    'v' => 0,
    'live_site' => 0,
    'settings' => 0,
    'template_path' => 0,
    'abs_path' => 0,
    'display' => 0,
    'hide' => 0,
    'fields' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd6fe7a9b05_91029972',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd6fe7a9b05_91029972')) {
function content_5cffd6fe7a9b05_91029972 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '9295643735cffd6fe728be5_97765156';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['general_settings'];?>
</div>

<div class="p30">
<form name="settings" id="settings" method="post" action="settings.php" enctype="multipart/form-data">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['successful']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['settings_saved'];?>
</div><?php }?>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['admin_name'];?>
</div>
	<div class="right_form"><input type="text" maxlength="50" name="admin_name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['admin_name'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['admin_username'];?>
</div>
	<div class="right_form"><input type="text" maxlength="50" name="admin_username" size="30" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['admin_username'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['admin_email'];?>
</div>
	<div class="right_form"><input type="text" maxlength="50" name="admin_email" size="30" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['admin_email'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['contact_email'];?>
</div>
	<div class="right_form"><input type="text" maxlength="50" name="contact_email" size="30" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['contact_email'];?>
" /></div>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['site_name'];?>
</div>
	<div class="right_form"><input type="text" maxlength="250" name="site_name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="50" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_verification_images'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="register_captcha" <?php if ($_smarty_tpl->tpl_vars['settings']->value['register_captcha'] == 1) {?> checked="checked" <?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['register'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="contact_captcha" <?php if ($_smarty_tpl->tpl_vars['settings']->value['contact_captcha'] == 1) {?> checked="checked" <?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['contact'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="login_captcha" <?php if ($_smarty_tpl->tpl_vars['settings']->value['login_captcha'] == 1) {?> checked="checked" <?php }?>>&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['login'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_recaptcha'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_recaptcha'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="enable_recaptcha" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_recaptcha'] == 1) {?> checked="checked" <?php }?> />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['recaptcha_public_key'];?>
&nbsp;&nbsp;
		<input type="text" name="recaptcha_public_key" size="25" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['recaptcha_public_key'];?>
" />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['recaptcha_private_key'];?>
&nbsp;&nbsp;
		<input type="text" name="recaptcha_private_key" size="25" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['recaptcha_private_key'];?>
" />
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['users_can'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="users_delete_ads" <?php if ($_smarty_tpl->tpl_vars['settings']->value['users_delete_ads'] == 1) {?> checked="checked" <?php }?> />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['delete_ads'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="users_feature_ads" <?php if ($_smarty_tpl->tpl_vars['settings']->value['users_feature_ads'] == 1) {?> checked="checked" <?php }?> />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['feature_ads'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="users_can_ask_account_removal" <?php if ($_smarty_tpl->tpl_vars['settings']->value['users_can_ask_account_removal'] == 1) {?> checked="checked" <?php }?> />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['request_removal'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['internal_messaging'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['internal_messaging'];?>
</div>
	<div class="right_form"><input type="checkbox" name="internal_messaging" <?php if ($_smarty_tpl->tpl_vars['settings']->value['internal_messaging'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['contact_messages_pending'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['contact_messages_pending'];?>
</div>
	<div class="right_form"><input type="checkbox" name="contact_messages_pending" <?php if ($_smarty_tpl->tpl_vars['settings']->value['contact_messages_pending'] == 1) {?> checked="checked" <?php }?> /></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['post_without_login']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['post_without_login'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_post_without_login'];?>
</div>
	<div class="right_form"><input type="checkbox" name="nologin_enabled" <?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_enabled'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['nologin']['info']['activate_account'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['activate_listing'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['via_email'];?>
</div>
	<div class="right_form">
	<input type="checkbox" name="nologin_activate_via_email" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['nologin_activate_via_email']) && $_smarty_tpl->tpl_vars['settings']->value['nologin_activate_via_email'] == 1) {?>checked="checked"<?php }?> />
	</div>
</div>	
	
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['nologin']['info']['sms_activate_account'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['activate_listing'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['via_sms'];?>
</div>
	<div class="right_form">
	<input type="checkbox" name="nologin_activate_via_sms" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['nologin_activate_via_sms']) && $_smarty_tpl->tpl_vars['settings']->value['nologin_activate_via_sms'] == 1) {?>checked="checked"<?php }?> />
	</div>
</div>	

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['pending_listing'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['pending_listing'];?>
</div>
	<div class="right_form"><input type="checkbox" name="nologin_pending_listing" <?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_pending_listing'] == 1) {?> checked="checked" <?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['nologin_allow_edit'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['nologin_allow_edit'];?>
</div>
	<div class="right_form"><input type="checkbox" name="nologin_allow_edit" <?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_allow_edit'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['nologin_allow_delete'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['nologin_allow_delete'];?>
</div>
	<div class="right_form"><input type="checkbox" name="nologin_allow_delete" <?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_allow_delete'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['nologin_extra_options'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['nologin_extra_options'];?>
</div>
	<div class="right_form"><input type="checkbox" name="nologin_extra_options" <?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_extra_options'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['nologin_image_verification'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['nologin_image_verification'];?>
</div>
	<div class="right_form"><input type="checkbox" name="nologin_image_verification" <?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_image_verification'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['affiliate_accounts']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_affiliate_accounts'];?>
</div>
	<div class="right_form">
		<div class="lfloat"><input type="checkbox" name="enable_affiliates" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_affiliates'] == 1) {?> checked="checked" <?php }?>/></div>
		<div class="lfloat information ml20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_affiliate_accounts'];?>
</div>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['periodic_operations']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['cron_simulator'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['cron_simulator'];?>
</div>
	<div class="right_form">
		<div class="lfloat"><input type="checkbox" name="cron_simulator" <?php if ($_smarty_tpl->tpl_vars['settings']->value['cron_simulator'] == 1) {?> checked="checked" <?php }?>/></div>
		<div class="lfloat information ml20"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['cron_simulator_info'],'::CONFIG_ABS_PATH::',$_smarty_tpl->tpl_vars['abs_path']->value);?>
</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['delete_auth_info_older_than'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['delete_auth_info_older_than'];?>
</div>
	<div class="right_form"><input type="text" maxlength="50" name="delete_login_older_than" size="4" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['delete_login_older_than'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['delete_expired'];?>
</div>
	<div class="right_form">
		<input type="radio" name="delete_expired" value="never" <?php if ($_smarty_tpl->tpl_vars['settings']->value['delete_expired'] == 0) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['never'];?>
&nbsp;&nbsp;
		<input type="radio" name="delete_expired" value="immediately" <?php if ($_smarty_tpl->tpl_vars['settings']->value['delete_expired'] == 1 && $_smarty_tpl->tpl_vars['settings']->value['days_del_expired'] == 0) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['immediately'];?>
&nbsp;&nbsp;
		<input type="radio" name="delete_expired" value="after" <?php if ($_smarty_tpl->tpl_vars['settings']->value['delete_expired'] == 1 && $_smarty_tpl->tpl_vars['settings']->value['days_del_expired'] > 0) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['after'];?>
&nbsp;&nbsp;
		<input type="text" name="days_del_expired" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['days_del_expired'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>

	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['notifications']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['admin_send_notifications'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="send_mail_to_admin_when_pending" <?php if ($_smarty_tpl->tpl_vars['settings']->value['send_mail_to_admin_when_pending'] == 1) {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['when_pending_listing'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="send_mail_to_admin_when_registeres" <?php if ($_smarty_tpl->tpl_vars['settings']->value['send_mail_to_admin_when_registeres'] == 1) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['when_user_registeres'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="send_mail_to_admin_when_new_ad" <?php if ($_smarty_tpl->tpl_vars['settings']->value['send_mail_to_admin_when_new_ad'] == 1) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['when_new_ad'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['user_send_notifications'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="send_mail_to_user_when_posting_ads" <?php if ($_smarty_tpl->tpl_vars['settings']->value['send_mail_to_user_when_posting_ads'] == 1) {?> checked="checked" <?php }?> />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['when_listing_posted'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="send_mail_to_user_when_expired" <?php if ($_smarty_tpl->tpl_vars['settings']->value['send_mail_to_user_when_expired'] == 1) {?> checked="checked" <?php }?> />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['when_listing_expired'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="send_mail_to_user_before_expires" <?php if ($_smarty_tpl->tpl_vars['settings']->value['send_mail_to_user_before_expires'] > 0) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['before_listing_expires'];?>
&nbsp;&nbsp;
		<input type="text" name="days_notify" maxlength="4" size="4" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value['send_mail_to_user_before_expires'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['settings']->value['days_notify'];?>
 <?php }?>"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>

	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['google_maps']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['google_maps_api_key'];?>
</div>
	<div class="right_form"><input type="text" name="google_maps_api_key" size=50 value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_api_key'];?>
"></br><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['google_maps_api_key'];?>
</div>
</div>

<input type="hidden" name="google_maps_default_long" id="google_maps_default_long" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_long'];?>
">
<input type="hidden" name="google_maps_default_lat" id="google_maps_default_lat" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_lat'];?>
">
<input type="hidden" name="google_maps_default_height" id="google_maps_default_height" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_height'];?>
">

<?php $_smarty_tpl->_capture_stack[0][] = array('display', 'display', null); ob_start(); ?><div class=btn2><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['display_map']," ","&nbsp;");?>
</strong></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('hide', 'hide', null); ob_start(); ?><div class=btn2><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['hide_map']," ","&nbsp;");?>
</strong></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['google_maps_default_location'];?>
</div>
	<div class="right_form">
		<div id="display_map"><a href="javascript:;" <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_maps_api_key']) {?>onclick="mapStatus('<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['hide']->value;?>
')"<?php } else { ?>onclick='alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['errors']['google_maps_api_key_missing'];?>
");'<?php }?>><div class="btn2"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['display_map']," ","&nbsp;");?>
</strong></div></a><br/><br/></div>
		<div id="google_maps_location" style="display: none">
		<div id="map" class="map"></div>
		</div>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['locations']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_locations'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_locations'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_locations" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

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
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['settings']->value['array_location_fields'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="location_fields" name="location_fields" value="" />
		<div class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_subdomains'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_subdomains'];?>
</div>
	<div class="right_form">
		<div class="lfloat"><input type="checkbox" name="enable_subdomains" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_subdomains'] == 1) {?> checked="checked" <?php }?>/></div>
		<div class="lfloat information ml20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['important']['enable_subdomains'];?>
</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['subdomain_field'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['subdomain_field'];?>
</div>
	<div class="right_form">
		<select id="subdomain_field" name="subdomain_field">
		<option value=""></option>
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
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['subdomain_field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat"  onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php } else { ?>return checkSettings();<?php }?>'>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 


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
<?php echo '<script'; ?>
 type="text/javascript">


	$(function(){
		$('#location_fields_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
	});


	function init_gmap(){

	var height=2;

	var p = new google.maps.LatLng(0,0);

	

	<?php if (($_smarty_tpl->tpl_vars['settings']->value['google_maps_default_lat'] && $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_long'])) {?>

	height=<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_height'];?>
;

	p = new google.maps.LatLng( <?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_lat'];?>
 , <?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_long'];?>
 );

	<?php }?>

	


	var myOptions = {
  		zoom: height,

  		center: p,

		panControl: true,
		zoomControl: true,
		scaleControl: true,
		mapTypeControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	

	var map = new google.maps.Map(document.getElementById("map"), myOptions);

	

	// get click coordinates
	google.maps.event.addListener(map, 'click', function(event) 
	{
		if (event.latLng) {
			map.panTo(event.latLng);

			var lat = event.latLng.lat();
			var long = event.latLng.lng();
			var h = map.getZoom();

			document.getElementById("google_maps_default_lat").value = lat;
			document.getElementById("google_maps_default_long").value = long;
			document.getElementById("google_maps_default_height").value = h;
		}

	});

	google.maps.event.addListener(map, 'mouseup', function(event) 
	{
		var newcenter = map.getCenter();
		if (newcenter) {
			var lat = newcenter.lat();
			var long = newcenter.lng();

			document.getElementById("google_maps_default_lat").value = lat;
			document.getElementById("google_maps_default_long").value = long;
		}

	});


	google.maps.event.addListener(map, 'zoom_changed', function() {
		zoomLevel = map.getZoom();
		
		document.getElementById("google_maps_default_height").value=zoomLevel;
		
	});

	} // end display map

	$(document).ready(function() {
	// initialize google maps
	load_gmaps();

	});



<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>