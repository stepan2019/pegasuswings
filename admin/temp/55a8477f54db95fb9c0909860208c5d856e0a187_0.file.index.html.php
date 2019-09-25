<?php /* Smarty version 3.1.24, created on 2019-06-11 17:06:53
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:17031812585cffdfad405e89_39919555%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a8477f54db95fb9c0909860208c5d856e0a187' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/index.html',
      1 => 1537948478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17031812585cffdfad405e89_39919555',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_su' => 0,
    'error' => 0,
    'su_settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdfad446485_23053991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdfad446485_23053991')) {
function content_5cffdfad446485_23053991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17031812585cffdfad405e89_39919555';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_su']->value['title'];?>
</div>

<div class="p30">
<form name="su_settings" method="post" enctype="multipart/form-data" action="">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form1"><?php echo $_smarty_tpl->tpl_vars['lng_su']->value['default_days'];?>
</div>
	<div class="right_form1">
		<input type="text" id="days" name="days" size="6" value="<?php echo $_smarty_tpl->tpl_vars['su_settings']->value['days'];?>
" />
	</div>
</div>

<div class="clearfix">
	<div class="left_form1">&nbsp;</div>
	<div class="right_form1"><div class="lfloat information ml20"><?php echo $_smarty_tpl->tpl_vars['lng_su']->value['info']['suspend_user'];?>
</div></div>
</div>


<div class="form_footer">
	<div class="buttons rfloat" onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php }?>'>
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