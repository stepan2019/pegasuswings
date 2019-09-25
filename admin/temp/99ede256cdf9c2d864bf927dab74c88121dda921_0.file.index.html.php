<?php /* Smarty version 3.1.24, created on 2019-06-14 11:13:18
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/connect/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:17867708045d03814e0cfdd3_44813437%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ede256cdf9c2d864bf927dab74c88121dda921' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/connect/index.html',
      1 => 1456657540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17867708045d03814e0cfdd3_44813437',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_connect' => 0,
    'error' => 0,
    'info' => 0,
    'connect_settings' => 0,
    'template_path' => 0,
    'fields' => 0,
    'v' => 0,
    'groups' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d03814e1254f5_96156842',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d03814e1254f5_96156842')) {
function content_5d03814e1254f5_96156842 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17867708045d03814e0cfdd3_44813437';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['connect'];?>
</div>

<div class="p30">
<form method="post" action="" enctype="multipart/form-data">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['enable_facebook_login'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_facebook_login" <?php if ($_smarty_tpl->tpl_vars['connect_settings']->value['enable_facebook_login']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['info']['facebook_app_id'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['facebook_app_id'];?>
</div>
	<div class="right_form"><input type="text" name="facebook_app_id" size="40" value="<?php echo $_smarty_tpl->tpl_vars['connect_settings']->value['facebook_app_id'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['enable_google_login'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_google_login" <?php if ($_smarty_tpl->tpl_vars['connect_settings']->value['enable_google_login']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['google_client_id'];?>
</div>
	<div class="right_form"><input type="text" name="google_client_id" size="70" value="<?php if (isset($_smarty_tpl->tpl_vars['connect_settings']->value['google_client_id'])) {
echo $_smarty_tpl->tpl_vars['connect_settings']->value['google_client_id'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['enable_openid_login'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_openid_login" <?php if ($_smarty_tpl->tpl_vars['connect_settings']->value['enable_openid_login']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['info']['contact_field'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['contact_field'];?>
</div>
	<div class="right_form">
		<select name="contact_field">
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
" <?php if ($_smarty_tpl->tpl_vars['connect_settings']->value['contact_field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['info']['group_id'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_connect']->value['group_id'];?>
</div>
	<div class="right_form">
		<select name="group_id">
		<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['connect_settings']->value['group_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>