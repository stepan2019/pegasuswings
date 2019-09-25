<?php /* Smarty version 3.1.24, created on 2019-06-16 10:22:01
         compiled from "/home/pegasuswings/public_html/admin/templates/default/mobile_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:8324392795d0618494441c3_28506537%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c191983dcee134690a85ff4e5bd6b8e23a129eeb' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/mobile_settings.html',
      1 => 1422485156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8324392795d0618494441c3_28506537',
  'variables' => 
  array (
    'lng' => 0,
    'error' => 0,
    'successful' => 0,
    'mobile_settings' => 0,
    'templates' => 0,
    'v' => 0,
    'template_path' => 0,
    'live_site' => 0,
    'ads_settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d061849510210_67990245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d061849510210_67990245')) {
function content_5d061849510210_67990245 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '8324392795d0618494441c3_28506537';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['mobile_settings'];?>
</div>

<div class="p30">
<form name="settings" method="post" action="mobile_settings.php" enctype="multipart/form-data">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['successful']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['settings_saved'];?>
</div><?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['listings_display_settings']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_mobile_templates'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_mobile_templates" <?php if ($_smarty_tpl->tpl_vars['mobile_settings']->value['enable_mobile_templates'] == 1) {?> checked="checked" <?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['template'];?>
</div>
	<div class="right_form">
		<select name="mobile_template">
		<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_template'] == $_smarty_tpl->tpl_vars['v']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info1']['enable_mobile_subdomain'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_mobile_subdomain'];?>
</div>
	<div class="right_form"><div class="lfloat"><input type="checkbox" name="enable_mobile_subdomain" <?php if ($_smarty_tpl->tpl_vars['mobile_settings']->value['enable_mobile_subdomain'] == 1) {?> checked="checked" <?php }?>></div><div class="information lfloat ml10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info2']['enable_mobile_subdomain'];?>
</div></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ads_per_page'];?>
</div>
	<div class="right_form"><input type="text" maxlength="4" name="mobile_ads_per_page" size=10 value="<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_ads_per_page'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['show_header'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['show_header'];?>
</div>
	<div class="right_form"><input type="checkbox" name="mobile_show_header" <?php if ($_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_show_header'] == 1) {?> checked="checked" <?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['img_header'];?>
</div>
	<div class="right_form">
		<input type="file" name="mobile_header_pic" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_header_pic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_header_pic'];?>
" class="imgfield"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_header_pic'] != '') {?>&nbsp;&nbsp;<a href="mobile_settings.php?delete=mobile_header_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['header_link'];?>
</div>
	<div class="right_form"><input type="text" maxlength="200" name="mobile_header_pic_link" size="50" value="<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_header_pic_link'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['small_thumb_dimmensions'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
&nbsp;<input type="text" name="mobile_thmb_width" size="5" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_thmb_width'];?>
" />&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
&nbsp;<input type="text" name="mobile_thmb_height" size="5" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_thmb_height'];?>
" />
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['big_thumb_dimmensions'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
&nbsp;<input type="text" name="mobile_big_thmb_width" size="5" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_big_thmb_width'];?>
" />&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
&nbsp;<input type="text" name="mobile_big_thmb_height" size="5" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_big_thmb_height'];?>
" />
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['default_small_image'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_small_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="mobile_nopic" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['nopic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_nopic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png" />
		<?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['default_big_image'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_big_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="mobile_big_nopic" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_big_nopic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_big_nopic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png" />
		<?php }?>
	</div>
</div>


<div class="form_footer">
	<div class="buttons rfloat"  onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
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
});
<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>