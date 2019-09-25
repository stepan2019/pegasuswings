<?php /* Smarty version 3.1.24, created on 2019-06-11 17:06:24
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/social_networks/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:192269985cffdf9079df05_84692112%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924897be46775e14c6e7de7064ac421d0edf8fec' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/social_networks/index.html',
      1 => 1497436654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192269985cffdf9079df05_84692112',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_sn' => 0,
    'error' => 0,
    'info' => 0,
    'sn_settings' => 0,
    'array_locales' => 0,
    'v' => 0,
    'template_path' => 0,
    'token_expired' => 0,
    'gplus_languages' => 0,
    'k' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdf908365c0_01176225',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdf908365c0_01176225')) {
function content_5cffdf908365c0_01176225 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '192269985cffdf9079df05_84692112';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['social_networks'];?>
</div>

<div class="p30">
<form method="post" action="" enctype="multipart/form-data">

<div class="form_container" style="padding-top: 0px !important">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['panel']['settings']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['facebook_page_link'];?>
</div>
	<div class="right_form"><input type="text" name="facebook_page_link" size="50" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['facebook_page_link'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['appid'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" name="fb_appid" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_appid'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_locale'];?>
</div>
	<div class="right_form">
		<select name="fb_lb_locale">
		<?php
$_from = $_smarty_tpl->tpl_vars['array_locales']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_locale'] == $_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['twitter_account'];?>
</div>
	<div class="right_form"><input type="text" name="twitter_account" size="20" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['twitter_account'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['gplus_page_link'];?>
</div>
	<div class="right_form"><input type="text" name="gplus_page_link" size="50" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['gplus_page_link'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['youtube_link'];?>
</div>
	<div class="right_form"><input type="text" name="youtube_link" size="50" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['youtube_link'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['pinterest_link'];?>
</div>
	<div class="right_form"><input type="text" name="pinterest_link" size="50" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['pinterest_link'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['instagram_link'];?>
</div>
	<div class="right_form"><input type="text" name="instagram_link" size="50" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['instagram_link'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['linkedin_link'];?>
</div>
	<div class="right_form"><input type="text" name="linkedin_link" size="50" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['linkedin_link'];?>
" /></div>
</div>


<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['fb_like_button']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_fb_like_button" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_like_button']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_width'];?>
</div>
	<div class="right_form"><input type="text" name="fb_lb_width" size="4" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_width'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_layout'];?>
</div>
	<div class="right_form">
		<select name="fb_lb_layout">
		<option value="standard" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_layout'] == 'standard') {?>selected="selected"<?php }?>>standard</option>
		<option value="button_count" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_layout'] == 'button_count') {?>selected="selected"<?php }?>>button_count</option>
		<option value="box_count" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_layout'] == 'box_count') {?>selected="selected"<?php }?>>box_count</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['info']['fb_lb_show_faces'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_show_faces'];?>
</div>
	<div class="right_form"><input type="checkbox" name="fb_lb_show_faces" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_show_faces']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_action'];?>
</div>
	<div class="right_form">
		<select name="fb_lb_action">
		<option value="like" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_action'] == 'like') {?>selected="selected"<?php }?>>like</option>
		<option value="recommend" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_action'] == 'recommend') {?>selected="selected"<?php }?>>recommend</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_color'];?>
</div>
	<div class="right_form">
		<select name="fb_lb_color">
		<option value="light" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_color'] == 'light') {?>selected="selected"<?php }?>>light</option>
		<option value="dark" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_color'] == 'dark') {?>selected="selected"<?php }?>>dark</option>
		</select>
	</div>
</div>


<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['fb_share_button']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_fb_share_button" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_share_button']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_layout'];?>
</div>
	<div class="right_form">
		<select name="fb_sb_layout">
		<option value="box_count" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_sb_layout'] == 'box_count') {?>selected="selected"<?php }?>>box_count</option>
		<option value="button_count" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_sb_layout'] == 'button_count') {?>selected="selected"<?php }?>>button_count</option>
		<option value="button" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_sb_layout'] == 'button') {?>selected="selected"<?php }?>>button</option>
		<option value="icon_link" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_sb_layout'] == 'icon_link') {?>selected="selected"<?php }?>>icon_link</option>
		<option value="icon" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_sb_layout'] == 'icon') {?>selected="selected"<?php }?>>icon</option>
		<option value="link" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_sb_layout'] == 'link') {?>selected="selected"<?php }?>>link</option>
		</select>
	</div>
</div>


<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['comments']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_fb_comments" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_comments']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['comments_no_posts'];?>
</div>
	<div class="right_form"><input type="text" name="fb_comments_posts" size="4" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_comments_posts'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_ra_color'];?>
</div>
	<div class="right_form">
		<select name="fb_comments_color">
		<option value="light" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_comments_color'] == 'light') {?>selected="selected"<?php }?>>light</option>
		<option value="dark" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_comments_color'] == 'dark') {?>selected="selected"<?php }?>>dark</option>
		</select>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['fb_page_plugin']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_fb_page_plugin" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_page_plugin']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_pp_tabs'];?>
</div>
	<div class="right_form">
	<select multiple="multiple" size=3 name="fb_pp_tabs[]" id="fb_pp_tabs" class="mselect">
		<option value="timeline" <?php if (in_array("timeline",$_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_tabs_array'])) {?>selected="selected"<?php }?>>timeline</option>
		<option value="events" <?php if (in_array("events",$_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_tabs_array'])) {?>selected="selected"<?php }?>>events</option>
		<option value="messages" <?php if (in_array("messages",$_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_tabs_array'])) {?>selected="selected"<?php }?>>messages</option>
	</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_lb_width'];?>
</div>
	<div class="right_form"><input type="text" name="fb_pp_width" size="4" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_width'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_height'];?>
</div>
	<div class="right_form"><input type="text" name="fb_pp_height" size="4" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_height'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_pp_hide_cover'];?>
</div>
	<div class="right_form"><input type="checkbox" name="fb_pp_hide_cover" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cover']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_pp_show_facepile'];?>
</div>
	<div class="right_form"><input type="checkbox" name="fb_pp_show_facepile" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_show_facepile']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_pp_hide_cta'];?>
</div>
	<div class="right_form"><input type="checkbox" name="fb_pp_hide_cta" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cta']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_pp_small_header'];?>
</div>
	<div class="right_form"><input type="checkbox" name="fb_pp_small_header" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_small_header']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['enable_fb_post_ads']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="fb_post_ads" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_post_ads']) {?>checked="checked"<?php }?> onClick="checkFBPostAds()" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_secret'];?>
</div>
	<div class="right_form"><input type="text" name="fb_secret" size="60" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_secret'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_access_token'];?>
</div>
	<div class="right_form clearfix">
		<textarea name="fb_access_token" rows="4" cols="70" /><?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_access_token'];?>
</textarea>
		<br/>
		<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_access_token'] && $_smarty_tpl->tpl_vars['sn_settings']->value['fb_access_token_expires']) {
if (isset($_smarty_tpl->tpl_vars['token_expired']->value) && $_smarty_tpl->tpl_vars['token_expired']->value) {?><div class="warning"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expired_on'];?>
: <?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_access_token_expires_nice'];?>
</div><?php } else { ?><div class="status"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expires_on'];?>
: <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_access_token_expires'] != '0000-00-00 00:00:00') {
echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_access_token_expires_nice'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['never'];
}?></div><?php }
}?>


	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['info']['pageid'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['pageid'];?>
</div>
	<div class="right_form clearfix">
		<input type="text" name="fb_pageid" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pageid'];?>
" />
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['fb_page_access_token'];?>
</div>
	<div class="right_form clearfix">
		<textarea name="fb_page_access_token" rows="4" cols="70" /><?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_page_access_token'];?>
</textarea>

	</div>
</div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form clearfix">
		<div class="buttons pl10 mt10">
			<span class="positive"><a href="fb_access_token_helper.php" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['get_fb_access_token'];?>
</a></span>
		</div>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['tweet_button']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_tweet_button" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_tweet_button']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['tw_data_count'];?>
</div>
	<div class="right_form">
		<select name="tw_data_count">
		<option value="vertical" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['tw_data_count'] == 'vertical') {?>selected="selected"<?php }?>>vertical</option>
		<option value="horizontal" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['tw_data_count'] == 'horizontal') {?>selected="selected"<?php }?>>horizontal</option>
		<option value="none" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['tw_data_count'] == 'none') {?>selected="selected"<?php }?>>none</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['info']['tw_data_text'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['tw_data_text'];?>
</div>
	<div class="right_form"><textarea name="tw_data_text" rows="3" cols="30"><?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['tw_data_text'];?>
</textarea></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['tweet_ads']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="tweet_ads" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['tweet_ads']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['tw_consumer_key'];?>
</div>
	<div class="right_form"><input type="text" name="tw_consumer_key" size="60" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['tw_consumer_key'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['tw_consumer_secret'];?>
</div>
	<div class="right_form"><input type="text" name="tw_consumer_secret" size="60" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['tw_consumer_secret'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['tw_access_token'];?>
</div>
	<div class="right_form"><input type="text" name="tw_access_token" size="60" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['tw_access_token'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['tw_access_token_secret'];?>
</div>
	<div class="right_form"><input type="text" name="tw_access_token_secret" size="60" value="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['tw_access_token_secret'];?>
" /></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_sn']->value['gplus_button']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_gplus_button" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_gplus_button']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['gplus_size'];?>
</div>
	<div class="right_form">
		<select name="gplus_size">
		<option value="small" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['gplus_size'] == 'small') {?>selected="selected"<?php }?>>Small</option>
		<option value="medium" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['gplus_size'] == 'medium') {?>selected="selected"<?php }?>>Medium</option>
		<option value="standard" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['gplus_size'] == 'standard') {?>selected="selected"<?php }?>>Standard</option>
		<option value="tall" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['gplus_size'] == 'tall') {?>selected="selected"<?php }?>>Tall</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['gplus_language'];?>
</div>
	<div class="right_form">
		<select name="gplus_language">
		<?php
$_from = $_smarty_tpl->tpl_vars['gplus_languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['gplus_language'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 



<?php echo '<script'; ?>
 type="text/javascript">

function checkFBPostAds() {

}

<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>