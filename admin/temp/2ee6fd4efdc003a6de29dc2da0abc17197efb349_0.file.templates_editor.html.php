<?php /* Smarty version 3.1.24, created on 2019-06-12 15:09:37
         compiled from "/home/pegasuswings/public_html/admin/templates/default/templates_editor.html" */ ?>
<?php
/*%%SmartyHeaderCode:17496299215d0115b1ed9652_31898336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ee6fd4efdc003a6de29dc2da0abc17197efb349' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/templates_editor.html',
      1 => 1449782058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17496299215d0115b1ed9652_31898336',
  'variables' => 
  array (
    'lng' => 0,
    'mobile' => 0,
    'live_site' => 0,
    'crt_template' => 0,
    'crt_file' => 0,
    'error' => 0,
    'array_templates' => 0,
    'v' => 0,
    'array_files' => 0,
    'warning' => 0,
    'content' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d0115b1f10548_56369946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d0115b1f10548_56369946')) {
function content_5d0115b1f10548_56369946 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17496299215d0115b1ed9652_31898336';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title">

<div class="lfloat" width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['templates'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['templates_editor'];?>
</div>

<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="<?php if ($_smarty_tpl->tpl_vars['mobile']->value == 0) {?>tab1-left<?php } else { ?>tab2-left<?php }?>">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/templates_editor.php?mobile=0"><span class="<?php if ($_smarty_tpl->tpl_vars['mobile']->value == 0) {?>tab1-right<?php } else { ?>tab2-right<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['templates']['full_size_templates'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="<?php if ($_smarty_tpl->tpl_vars['mobile']->value == 1) {?>tab1-left<?php } else { ?>tab2-left<?php }?>">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/templates_editor.php?mobile=1"><span class="<?php if ($_smarty_tpl->tpl_vars['mobile']->value == 1) {?>tab1-right<?php } else { ?>tab2-right<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['templates']['mobile_templates'];?>
</span></a>
	</div></div>

</div>

</div>

<div class="p30">
<form name="templates" method="post" action="templates_editor.php<?php if ($_smarty_tpl->tpl_vars['mobile']->value) {?>?mobile=1<?php }
if ($_smarty_tpl->tpl_vars['crt_template']->value) {
if ($_smarty_tpl->tpl_vars['mobile']->value) {?>&<?php } else { ?>?<?php }?>template=<?php echo $_smarty_tpl->tpl_vars['crt_template']->value;
}
if ($_smarty_tpl->tpl_vars['crt_file']->value) {?>&file=<?php echo $_smarty_tpl->tpl_vars['crt_file']->value;
}?>">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['templates']['select_template'];?>
</div>
	<div class="right_form">
		<select name="template" onchange="doSel(this);">
			<?php
$_from = $_smarty_tpl->tpl_vars['array_templates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="location.href='?template=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&mobile=<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
'" <?php if ($_smarty_tpl->tpl_vars['crt_template']->value == $_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['templates']['select_file'];?>
</div>
	<div class="right_form">
		<select name="template_file" onchange="doSel(this);">
			<?php
$_from = $_smarty_tpl->tpl_vars['array_files']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="location.href='?template=<?php echo $_smarty_tpl->tpl_vars['crt_template']->value;?>
&file=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&mobile=<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
'" <?php if ($_smarty_tpl->tpl_vars['crt_file']->value == $_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><span class="warning" style="margin: 0 !important;"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</span></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><textarea name="content" rows=40 cols=90><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Save" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

<?php }?>

</div> 
</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>