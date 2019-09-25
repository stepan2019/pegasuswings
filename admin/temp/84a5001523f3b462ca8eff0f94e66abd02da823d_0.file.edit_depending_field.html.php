<?php /* Smarty version 3.1.24, created on 2019-06-11 17:27:05
         compiled from "/home/pegasuswings/public_html/admin/templates/default/edit_depending_field.html" */ ?>
<?php
/*%%SmartyHeaderCode:20564812785cffe469eae9c9_92150876%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a5001523f3b462ca8eff0f94e66abd02da823d' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/edit_depending_field.html',
      1 => 1486681698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20564812785cffe469eae9c9_92150876',
  'variables' => 
  array (
    'lng' => 0,
    'type' => 0,
    'field_name' => 0,
    'self' => 0,
    'id' => 0,
    'dep' => 0,
    'multiple_fsets' => 0,
    'current_fieldset' => 0,
    'fieldsets' => 0,
    'v' => 0,
    'demo' => 0,
    'array1' => 0,
    'languages' => 0,
    'current2' => 0,
    'array2' => 0,
    'current3' => 0,
    'array3' => 0,
    'current4' => 0,
    'array4' => 0,
    'current5' => 0,
    'array5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe469f3c855_74146255',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe469f3c855_74146255')) {
function content_5cffe469f3c855_74146255 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '20564812785cffe469eae9c9_92150876';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 ><?php if ($_smarty_tpl->tpl_vars['type']->value == "cf") {?><a href="manage_custom_fields.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_fields'];?>
</a><?php } else { ?><a href="user_fields.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['user_fields'];?>
</a><?php }?> > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['edit_depending_field'];?>
: <?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
</div>

<div class="p30">
<div class="form_container" style="padding-top: 0px;">

<form name="depending" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['dep']->value['name1']," ","&nbsp;");?>
</strong></div></div>

<div class="lfloat" style="width: 350px; margin-left: 200px;">
<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to'];?>
 <?php echo $_smarty_tpl->tpl_vars['dep']->value['name1'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
<?php if ($_smarty_tpl->tpl_vars['type']->value == "cf") {?>
	<?php if ($_smarty_tpl->tpl_vars['multiple_fsets']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['fieldset'];?>
&nbsp;&nbsp;
		<select id="fieldset" name="fieldset" onchange="changeLoc(this, 'edit_depending_field.php', 'current_fieldset' , 'id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')">
			<option value="0" <?php if ($_smarty_tpl->tpl_vars['current_fieldset']->value == 0) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_fieldsets'];?>
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
" <?php if ($_smarty_tpl->tpl_vars['current_fieldset']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	<?php } else { ?>
	<input type="hidden" name="fieldset" value="<?php echo $_smarty_tpl->tpl_vars['fieldsets']->value[0]['id'];?>
">
	<?php }?>
<?php }?>
<div><textarea name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
" rows=7 cols=35></textarea></div>

<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
	<span class="positive"><input type="submit" name="add1" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
</div>

</div> 

<div class="lfloat">
<div><?php echo $_smarty_tpl->tpl_vars['dep']->value['name1'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
<div>
<select multiple="multiple" id="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
_list" name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
_list[]" size=10 style="width: 250px" class="mselect">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</select>
</div>
<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
	<span class="positive"><input type="submit" name="delete_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" /></span>
</div>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="inline rfloat" style="margin-top: 10px;">&nbsp;&nbsp;<a href="translate_depending.php?id=<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['type']->value == 'cf' && $_smarty_tpl->tpl_vars['current_fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['current_fieldset']->value;
}?>">
	<div class="buttonwrapper lfloat"><div class="rbutton1-left"><span class="rbutton1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['translate'];?>
</span></div></div>
	</a></div>
	<?php }?>
</div>

<div class="clearfix"></div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['dep']->value['name2']," ","&nbsp;");?>
</strong></div></div>
<div class="lfloat" style="width: 350px; margin-left: 200px;">
	<div>
		<?php echo $_smarty_tpl->tpl_vars['dep']->value['name1'];?>
&nbsp;&nbsp;
		<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
" onchange="selDep(2, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption1'];?>
', '<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 2) {
echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];
}?>'); <?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] > 2) {?>selDep(3, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
');<?php }?> <?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] > 3) {?>selDep(4, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
', '<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 4) {
echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];
}?>');<?php }?> <?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] > 4) {?>selDep(5, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
', '<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 5) {
echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];
}?>');<?php }?>">
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
" <?php if ($_smarty_tpl->tpl_vars['current2']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
	<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to'];?>
 <?php echo $_smarty_tpl->tpl_vars['dep']->value['name2'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div><textarea name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
" rows=7 cols=35></textarea></div>
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="add2" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
	</div>

</div> 

<div class="lfloat">
	<div><?php echo $_smarty_tpl->tpl_vars['dep']->value['name2'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div>
		<select multiple="multiple" id="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
_list" name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
_list[]" size=10 style="width: 250px" class="mselect">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="delete_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" /></span>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="inline rfloat" style="margin-top: 10px;">&nbsp;&nbsp;<a href="translate_depending.php?id=<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['type']->value == 'cf' && $_smarty_tpl->tpl_vars['current_fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['current_fieldset']->value;
}
if ($_smarty_tpl->tpl_vars['current2']->value) {?>&current1=<?php echo $_smarty_tpl->tpl_vars['current2']->value;
}?>">
	<div class="buttonwrapper lfloat"><div class="rbutton1-left"><span class="rbutton1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['translate'];?>
</span></div></div>
	</a></div>
	<?php }?>
</div>

<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 3) {?>
<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['dep']->value['name3']," ","&nbsp;");?>
</strong></div></div>
<div class="lfloat" style="width: 350px; margin-left: 200px;">

	<div><?php echo $_smarty_tpl->tpl_vars['dep']->value['name2'];?>
&nbsp;&nbsp;
		<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
" onchange="selDep(3, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption2'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
'); <?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] > 3) {?>selDep(4, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
', '<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 4) {
echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];
}?>');<?php }?> <?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] > 4) {?>selDep(5, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
', '<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 5) {
echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];
}?>');<?php }?>">
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
" <?php if ($_smarty_tpl->tpl_vars['current3']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>

	<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to'];?>
 <?php echo $_smarty_tpl->tpl_vars['dep']->value['name3'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div><textarea name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
" rows=7 cols=35></textarea></div>
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="add3" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
	</div>

</div> 

<div class="lfloat">
	<div><?php echo $_smarty_tpl->tpl_vars['dep']->value['name3'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div>
		<select multiple="multiple" id="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
_list" name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
_list[]" size=10 style="width: 250px" class="mselect">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="delete_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" /></span>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="inline rfloat" style="margin-top: 10px;">&nbsp;&nbsp;<a href="translate_depending.php?id=<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['type']->value == 'cf' && $_smarty_tpl->tpl_vars['current_fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['current_fieldset']->value;
}
if ($_smarty_tpl->tpl_vars['current2']->value) {?>&current1=<?php echo $_smarty_tpl->tpl_vars['current2']->value;
}
if ($_smarty_tpl->tpl_vars['current3']->value) {?>&current2=<?php echo $_smarty_tpl->tpl_vars['current3']->value;
}?>">
	<div class="buttonwrapper lfloat"><div class="rbutton1-left"><span class="rbutton1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['translate'];?>
</span></div></div>
	</a></div>
	<?php }?>
</div>

<div class="clearfix"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 4) {?>
<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['dep']->value['name4']," ","&nbsp;");?>
</strong></div></div>
<div class="lfloat" style="width: 350px; margin-left: 200px;">

	<div>
	<?php echo $_smarty_tpl->tpl_vars['dep']->value['name3'];?>
&nbsp;&nbsp;
		<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
" onchange="selDep(4, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption3'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
'); <?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] > 4) {?>selDep(5, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
', '<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 5) {
echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];
}?>');<?php }?>">
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
" <?php if ($_smarty_tpl->tpl_vars['current4']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
	<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to'];?>
 <?php echo $_smarty_tpl->tpl_vars['dep']->value['name4'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div><textarea name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
" rows=7 cols=35></textarea></div>
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="add4" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
	</div>
</div> 

<div class="lfloat">
	<div><?php echo $_smarty_tpl->tpl_vars['dep']->value['name4'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div>
	<select multiple="multiple" id="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
_list" name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
_list[]" size=10 style="width: 250px" class="mselect">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
	<div class="buttons"<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="delete_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" /></span>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="inline rfloat" style="margin-top: 10px;">&nbsp;&nbsp;<a href="translate_depending.php?id=<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['type']->value == 'cf' && $_smarty_tpl->tpl_vars['current_fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['current_fieldset']->value;
}
if ($_smarty_tpl->tpl_vars['current2']->value) {?>&current1=<?php echo $_smarty_tpl->tpl_vars['current2']->value;
}
if ($_smarty_tpl->tpl_vars['current3']->value) {?>&current2=<?php echo $_smarty_tpl->tpl_vars['current3']->value;
}
if ($_smarty_tpl->tpl_vars['current4']->value) {?>&current3=<?php echo $_smarty_tpl->tpl_vars['current4']->value;
}?>">
	<div class="buttonwrapper lfloat"><div class="rbutton1-left"><span class="rbutton1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['translate'];?>
</span></div></div>
	</a></div>
	<?php }?>
</div>

<div class="clearfix"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['dep']->value['no'] >= 5) {?>
<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['dep']->value['name5']," ","&nbsp;");?>
</strong></div></div>
<div class="lfloat" style="width: 350px; margin-left: 200px;">

	<div>
	<?php echo $_smarty_tpl->tpl_vars['dep']->value['name4'];?>
&nbsp;&nbsp;
		<select id="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
" name="sel_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
" onchange="selDep(5, '<?php echo $_smarty_tpl->tpl_vars['dep']->value['no'];?>
' , '<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption4'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];?>
');">
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
" <?php if ($_smarty_tpl->tpl_vars['current5']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
	<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to'];?>
 <?php echo $_smarty_tpl->tpl_vars['dep']->value['name5'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div><textarea name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];?>
" rows=7 cols=35></textarea></div>
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="add5" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
	</div>
</div> 

<div class="lfloat">
	<div><?php echo $_smarty_tpl->tpl_vars['dep']->value['name5'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['list'];?>
</div>
	<div>
	<select multiple="multiple" id="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];?>
_list" name="<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];?>
_list[]" size=10 style="width: 250px" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['array5']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
	<div class="buttons"<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="delete_<?php echo $_smarty_tpl->tpl_vars['dep']->value['caption5'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" /></span>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="inline rfloat" style="margin-top: 10px;">&nbsp;&nbsp;<a href="translate_depending.php?id=<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['type']->value == 'cf' && $_smarty_tpl->tpl_vars['current_fieldset']->value) {?>&fieldset=<?php echo $_smarty_tpl->tpl_vars['current_fieldset']->value;
}
if ($_smarty_tpl->tpl_vars['current2']->value) {?>&current1=<?php echo $_smarty_tpl->tpl_vars['current2']->value;
}
if ($_smarty_tpl->tpl_vars['current3']->value) {?>&current2=<?php echo $_smarty_tpl->tpl_vars['current3']->value;
}
if ($_smarty_tpl->tpl_vars['current4']->value) {?>&current3=<?php echo $_smarty_tpl->tpl_vars['current4']->value;
}
if ($_smarty_tpl->tpl_vars['current5']->value) {?>&current4=<?php echo $_smarty_tpl->tpl_vars['current5']->value;
}?>">
	<div class="buttonwrapper lfloat"><div class="rbutton1-left"><span class="rbutton1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['translate'];?>
</span></div></div>
	</a></div>
	<?php }?>
</div>

<div class="clearfix"></div>
<?php }?>

<div class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['lists']['help_add_lists'];?>
</div>
</form>

</div> 

</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>