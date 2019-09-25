<?php /* Smarty version 3.1.24, created on 2019-06-11 16:38:26
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/browse_make/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:13397266495cffd902dbb501_30952863%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec470a2fe942d8558550322f7176a1e1f8a239a1' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/browse_make/index.html',
      1 => 1443279634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13397266495cffd902dbb501_30952863',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_browse_make' => 0,
    'error' => 0,
    'info' => 0,
    'languages' => 0,
    'v' => 0,
    'field_name' => 0,
    'bm_settings' => 0,
    'lng_browse_location' => 0,
    'fields' => 0,
    'depending_fields' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd902df70a8_02688781',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd902df70a8_02688781')) {
function content_5cffd902df70a8_02688781 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13397266495cffd902dbb501_30952863';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_browse_make']->value['browse_make'];?>
</div>

<div class="p30">
<form method="post" action="" enctype="multipart/form-data">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
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
<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'field_name', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng_browse_make']->value['title'];?>
</div>
	<div class="right_form"><input type="text" name="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['bm_settings']->value[$_smarty_tpl->tpl_vars['field_name']->value];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_browse_make']->value['no_rows'];?>
</div>
	<div class="right_form"><input type="text" name="no_rows" size="4" value="<?php echo $_smarty_tpl->tpl_vars['bm_settings']->value['no_rows'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_browse_location']->value['type'];?>
</div>
	<div class="right_form">
	<input type="radio" name="type" value="single" <?php if ($_smarty_tpl->tpl_vars['bm_settings']->value['type'] == "single") {?>checked="checked"<?php }?> onclick="onSingle()" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_browse_location']->value['single'];?>
&nbsp;&nbsp;
	<input type="radio" name="type" value="double" <?php if ($_smarty_tpl->tpl_vars['bm_settings']->value['type'] == "double") {?>checked="checked"<?php }?> onClick="onDouble()" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_browse_location']->value['double'];?>

	</div>
</div>

<div class="clearfix" id="div_single" <?php if ($_smarty_tpl->tpl_vars['bm_settings']->value['type'] != "single") {?>style="display: none"<?php }?>>
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_browse_make']->value['make_field'];?>
</div>
	<div class="right_form">
		<select name="make_field">
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['bm_settings']->value['field_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix" id="div_double" <?php if ($_smarty_tpl->tpl_vars['bm_settings']->value['type'] != "double") {?>style="display: none"<?php }?>>
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_browse_make']->value['make_field'];?>
</div>
	<div class="right_form">
		<select name="make_fields">
			<option value=""></option>
			<?php
$_from = $_smarty_tpl->tpl_vars['depending_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['dep_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['bm_settings']->value['field_id'] == $_smarty_tpl->tpl_vars['v']->value['dep_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
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

function onSingle() {

	document.getElementById("div_single").style.display="block";
	document.getElementById("div_double").style.display="none";

}

function onDouble() {

	document.getElementById("div_single").style.display="none";
	document.getElementById("div_double").style.display="block";

}

<?php echo '</script'; ?>
>



<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>