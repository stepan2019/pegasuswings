<?php /* Smarty version 3.1.24, created on 2019-06-13 15:32:38
         compiled from "/home/pegasuswings/public_html/admin/templates/default/translate_depending.html" */ ?>
<?php
/*%%SmartyHeaderCode:581199175d026c96e58bf6_83801837%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40f85d630e4620f055f5829b35daf0f74213f9cc' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/translate_depending.html',
      1 => 1486074612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581199175d026c96e58bf6_83801837',
  'variables' => 
  array (
    'lng' => 0,
    'type' => 0,
    'field_name' => 0,
    'multiple_fsets' => 0,
    'id' => 0,
    'fieldset' => 0,
    'fieldsets' => 0,
    'v' => 0,
    'dep' => 0,
    'current1' => 0,
    'array1' => 0,
    'current2' => 0,
    'array2' => 0,
    'current3' => 0,
    'array3' => 0,
    'current4' => 0,
    'array4' => 0,
    'self' => 0,
    'dep_array' => 0,
    'live_site' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d026c96ea5f21_10677611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d026c96ea5f21_10677611')) {
function content_5d026c96ea5f21_10677611 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '581199175d026c96e58bf6_83801837';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 ><?php if ($_smarty_tpl->tpl_vars['type']->value == "cf") {?><a href="manage_custom_fields.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_fields'];?>
</a><?php } else { ?><a href="user_fields.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['user_fields'];?>
</a><?php }?> > <?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['translate_depending'];?>
: <?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
</div>

<div class="p30">
<div class="form_container">

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
<?php if (isset($_smarty_tpl->tpl_vars['multiple_fsets']->value) && $_smarty_tpl->tpl_vars['multiple_fsets']->value) {?>
	<select id="fieldset" name="fieldset" onchange="changeLoc(this, 'translate_depending.php', 'fieldset', 'id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')">
		<option value="0" <?php if ($_smarty_tpl->tpl_vars['fieldset']->value == 0) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_fieldsets'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['fieldsets']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['fieldset']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
<?php }?>
&nbsp;&nbsp;

<?php echo $_smarty_tpl->tpl_vars['dep']->value['name1'];?>

	<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
"  onchange="changeLoc(this, 'translate_depending.php', 'current1', 'id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['fieldset']->value;
}?>')">
		<?php if (!$_smarty_tpl->tpl_vars['current1']->value) {?><option value=""><?php echo $_smarty_tpl->tpl_vars['dep']->value['name1'];?>
</option><?php }?>
		<?php
$_from = $_smarty_tpl->tpl_vars['array1']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['current1']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 3) {?>
&nbsp;&nbsp;
<?php echo $_smarty_tpl->tpl_vars['dep']->value['name2'];?>

	<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
" onchange="changeLoc(this, 'translate_depending.php', 'current2', 'id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['fieldset']->value;
}?>&current1=<?php echo $_smarty_tpl->tpl_vars['current1']->value;?>
')">
		<?php if (!$_smarty_tpl->tpl_vars['current2']->value) {?><option value=""><?php echo $_smarty_tpl->tpl_vars['dep']->value['name2'];?>
</option><?php }?>
		<?php
$_from = $_smarty_tpl->tpl_vars['array2']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['current2']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 4) {?>
&nbsp;&nbsp;
	<?php echo $_smarty_tpl->tpl_vars['dep']->value['name3'];?>

	<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
" onchange="changeLoc(this, 'translate_depending.php', 'current3', 'id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['fieldset']->value;
}?>&current1=<?php echo $_smarty_tpl->tpl_vars['current1']->value;?>
&current2=<?php echo $_smarty_tpl->tpl_vars['current2']->value;?>
')">
		<?php if (!$_smarty_tpl->tpl_vars['current3']->value) {?><option value=""><?php echo $_smarty_tpl->tpl_vars['dep']->value['name3'];?>
</option><?php }?>
		<?php
$_from = $_smarty_tpl->tpl_vars['array3']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['current3']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 5) {?>
&nbsp;&nbsp;
	<?php echo $_smarty_tpl->tpl_vars['dep']->value['name4'];?>

	<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
" onchange="changeLoc(this, 'translate_depending.php', 'current4', 'id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['fieldset']->value;
}?>&current1=<?php echo $_smarty_tpl->tpl_vars['current1']->value;?>
&current2=<?php echo $_smarty_tpl->tpl_vars['current2']->value;?>
&current3=<?php echo $_smarty_tpl->tpl_vars['current3']->value;?>
')">
		<?php if (!$_smarty_tpl->tpl_vars['current4']->value) {?><option value=""><?php echo $_smarty_tpl->tpl_vars['dep']->value['name4'];?>
</option><?php }?>
		<?php
$_from = $_smarty_tpl->tpl_vars['array4']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['current4']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
<?php }?>
	</div> 
</div>

<form name="translate" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
if ($_smarty_tpl->tpl_vars['type']->value) {?>&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
}
if ($_smarty_tpl->tpl_vars['fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['fieldset']->value;
}
if ($_smarty_tpl->tpl_vars['current1']->value) {?>&current1=<?php echo $_smarty_tpl->tpl_vars['current1']->value;
}
if ($_smarty_tpl->tpl_vars['current2']->value) {?>&current2=<?php echo $_smarty_tpl->tpl_vars['current2']->value;
}
if ($_smarty_tpl->tpl_vars['current3']->value) {?>&current3=<?php echo $_smarty_tpl->tpl_vars['current3']->value;
}
if ($_smarty_tpl->tpl_vars['current4']->value) {?>&current4=<?php echo $_smarty_tpl->tpl_vars['current4']->value;
}?>">

<?php
$_from = $_smarty_tpl->tpl_vars['dep_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dep'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dep']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dep']->value) {
$_smarty_tpl->tpl_vars['dep']->_loop = true;
$foreach_dep_Sav = $_smarty_tpl->tpl_vars['dep'];
?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['dep']->value['default_val'];?>
</div>
	<div class="right_form"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['dep']->value['lang_id'];?>
" size="40" value="<?php echo $_smarty_tpl->tpl_vars['dep']->value['name'];?>
" />&nbsp;<?php if ($_smarty_tpl->tpl_vars['dep']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['dep']->value['image'];?>
" /><?php } else {
echo $_smarty_tpl->tpl_vars['dep']->value['language_name'];
}?></div>
</div>
<?php
$_smarty_tpl->tpl_vars['dep'] = $foreach_dep_Sav;
}
?>

<div class="form_footer">
	<div class="buttons rfloat"  onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php } else { ?>return checkSettings();<?php }?>'>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</form>

</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>