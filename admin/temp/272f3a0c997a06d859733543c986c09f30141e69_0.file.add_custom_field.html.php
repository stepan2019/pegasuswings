<?php /* Smarty version 3.1.24, created on 2019-06-11 17:10:02
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_custom_field.html" */ ?>
<?php
/*%%SmartyHeaderCode:9601808645cffe06a3ebd86_98986389%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '272f3a0c997a06d859733543c986c09f30141e69' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_custom_field.html',
      1 => 1545922124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9601808645cffe06a3ebd86_98986389',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'type' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'fields' => 0,
    'fileds' => 0,
    'array_fieldsets' => 0,
    'v' => 0,
    'fields_types' => 0,
    'extra_fields_types' => 0,
    'template_path' => 0,
    'languages' => 0,
    'fields_array' => 0,
    'uc_array' => 0,
    'settings' => 0,
    'groups_list' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe06a5f06d0_13243144',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe06a5f06d0_13243144')) {
function content_5cffe06a5f06d0_13243144 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '9601808645cffe06a3ebd86_98986389';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/js/cf.js"><?php echo '</script'; ?>
>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 ><?php if ($_smarty_tpl->tpl_vars['type']->value == "cf") {?><a href="manage_custom_fields.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_fields'];?>
</a><?php } else { ?><a href="user_fields.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['user_fields'];?>
</a><?php }?> > <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['edit_custom_field'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['add_custom_field'];
}?></div>

<div class="p30">
<form name="add_cf" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['fields']->value['type'] == "depending") {?>
<div class="clearfix" style="background-color: #f0f0f0; padding: 10px; margin-bottom: 10px;">
<div class="rfloat">
<a href="edit_depending_field.php?id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['dep_id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><div class="edit-depending-button"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['edit_values'];?>
</div></a>
</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "cf") {?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['fieldset'];?>
</div>
	<div class="right_form">
	<input type="radio" name="all_fieldsets" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['fields']->value['id']) || !$_smarty_tpl->tpl_vars['fields']->value['id'] || !isset($_smarty_tpl->tpl_vars['fileds']->value['fielset']) || $_smarty_tpl->tpl_vars['fileds']->value['fielset'] == 0) {?>checked="checked"<?php }?>>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_fieldsets'];?>

	&nbsp;&nbsp;<input type="radio" name="all_fieldsets" value="0" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['fieldset']) && $_smarty_tpl->tpl_vars['fields']->value['fieldset'] != 0) {?>checked="checked"<?php }?>>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['choose_fieldsets'];?>

	&nbsp;&nbsp;
	<select multiple="multiple" name="fieldset[]" id="fieldset" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['array_fieldsets']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['fieldset']) && in_array($_smarty_tpl->tpl_vars['v']->value['id'],explode(',',$_smarty_tpl->tpl_vars['fields']->value['fieldset']))) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
</div>
<?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
		<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>

		<?php } else { ?>
			<select name="type" id="type" onchange="selectCFType(0,'<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')">
			<?php
$_from = $_smarty_tpl->tpl_vars['fields_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
				<?php if (!$_smarty_tpl->tpl_vars['v']->value['default'] && ($_smarty_tpl->tpl_vars['type']->value == "uf" || $_smarty_tpl->tpl_vars['v']->value['name'] != "terms")) {?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type'] == $_smarty_tpl->tpl_vars['v']->value['name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields'][$_smarty_tpl->tpl_vars['v']->value['name']];?>
</option>
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			<?php
$_from = $_smarty_tpl->tpl_vars['extra_fields_types']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type'] == $_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
		<?php }?>
	</div>
</div>

<div class="clearfix f_options" id="div_depending_no" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_no_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_no'];?>
</div>
	<div class="right_form">
		<input type="hidden" id="depending_no" name="depending_no" value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['no']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['no']) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['no'];
} else { ?>2<?php }?>" />
		<select name="depending_no_var" onchange="this.form.depending_no.value = this.value; selectCFType('depending','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'); ">
		<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['no']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['no'] == 2) {?>selected = "selected"<?php }?>>2</option>
		<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['no']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['no'] == 3) {?>selected = "selected"<?php }?>>3</option>
		<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['no']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['no'] == 4) {?>selected = "selected"<?php }?>>4</option>
		<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['no']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['no'] == 5) {?>selected = "selected"<?php }?>>5</option>
		</select>
	</div>
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
echo $_smarty_tpl->tpl_vars['lng']->value['general']['name'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" maxlength="200" name="name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['fields']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']],'"','&quot;');
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="f_options" id="div_error" style="display: block">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['error_message'];?>
</div>
	<div class="right_form"><input type="text" maxlength="500" name="error_message_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  id="error_message_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['error_message'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['fields']->value['error_message'][$_smarty_tpl->tpl_vars['v']->value['id']],'"','&quot;');
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_info" style="display: block">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info_message'];?>
</div>
	<div class="right_form"><input type="text" maxlength="500" name="info_message_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="info_message_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['info_message'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['fields']->value['info_message'][$_smarty_tpl->tpl_vars['v']->value['id']],'"','&quot;');
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_top_str" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['top_str'];?>
</div>
	<div class="right_form"><input type="text" maxlength="200" name="top_str_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="top_str_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['top_str'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['fields']->value['top_str'][$_smarty_tpl->tpl_vars['v']->value['id']],'"','&quot;');
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>


<div class="clearfix f_options" id="div_is_numeric" style="display: block">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['is_numeric'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['is_numeric'];?>
</div>
	<div class="right_form"><input type="checkbox" name="is_numeric" id="is_numeric" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['is_numeric']) && $_smarty_tpl->tpl_vars['fields']->value['is_numeric']) {?>checked="checked"<?php }?>  onClick="onEnableSearch(<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type']) {?>'<?php echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>
'<?php } else { ?>0<?php }?>); onEnableNumeric()"/></div>
</div>

<div class="clearfix f_options" id="div_number_format" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['number_format'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['decimals'];?>
&nbsp;<input type="text" size="5" name="format_decimals"  id="format_decimals" value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['format_decimals']) && $_smarty_tpl->tpl_vars['fields']->value['format_decimals']) {
echo $_smarty_tpl->tpl_vars['fields']->value['format_decimals'];
} else { ?>0<?php }?>"/>&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['decimals_point'];?>
&nbsp;<input type="text" size="5" name="format_point" id="format_point" value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['format_point']) && $_smarty_tpl->tpl_vars['fields']->value['format_point']) {
echo $_smarty_tpl->tpl_vars['fields']->value['format_point'];
} else { ?>.<?php }?>" />&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['thousands_separator'];?>
&nbsp;<input type="text" size="5" name="format_separator" id="format_separator" value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['format_separator']) && $_smarty_tpl->tpl_vars['fields']->value['format_separator']) {
echo $_smarty_tpl->tpl_vars['fields']->value['format_separator'];
}?>" />
	</div>
</div>


<div class="clearfix f_options" id="div_validation" style="display: block">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['validation_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['validation_type'];?>
</div>
	<div class="right_form"><input type="text" name="validation_type" id="validation_type"  size=20  value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['validation_type'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['validation_type'];
}?>" /></div>
</div>

<div class="clearfix f_options" id="div_length" style="display: block">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['length_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['length'];?>
</div>
	<div class="right_form"><input maxlength="10" type="text" name="size" id="size" size=10  value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['size'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['size'];
}?>" /></div>
</div>

<div class="clearfix f_options" id="div_min" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['minimum'];?>
</div>
	<div class="right_form"><input maxlength="10" type="text" name="min" id="min" size=10  value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['min'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['min'];
}?>" /></div>
</div>

<div class="clearfix f_options" id="div_max" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['maximum'];?>
</div>
	<div class="right_form"><input maxlength="10" type="text" name="max" id="max" size=10 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['max'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['max'];
}?>"  /></div>
</div>

<div class="clearfix f_options" id="div_min_selections" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['minimum_selections'];?>
</div>
	<div class="right_form"><input maxlength="10" type="text" name="min" id="min_selections" size=10  value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['min'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['min'];
}?>" disabled="disabled" /></div>
</div>

<div class="clearfix f_options" id="div_max_selections" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['maximum_selections'];?>
</div>
	<div class="right_form"><input maxlength="10" type="text" name="max" id="max_selections" size=10 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['max'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['max'];
}?>" disabled="disabled" /></div>
</div>

<div class="f_options" id="div_default_textbox" style="display: block">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['default_val'];?>
</div>
	<div class="right_form"><input maxlength="200" type="text" name="default_textbox_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="default_textbox_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['default_val'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['fields']->value['default_val'][$_smarty_tpl->tpl_vars['v']->value['id']],'"','&quot;');
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_default_textarea" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['default_val'];?>
</div>
	<div class="right_form"><textarea maxlength="500" name="default_textarea_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="default_textarea_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=3 cols=30><?php if (isset($_smarty_tpl->tpl_vars['fields']->value['default_val'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['default_val'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="clearfix f_options" id="div_default_checkbox" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['default'];?>
</div>
	<div class="right_form">
		<select name="default_checkbox" id="default_checkbox">
			<option value="0"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['not_selected'];?>
</option>
			<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['default_checkbox']) && $_smarty_tpl->tpl_vars['fields']->value['default_checkbox'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['selected'];?>
</option>
		</select>
	</div>
</div>

<div class="f_options" id="div_prefix" style="display: block">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['prefix'];?>
</div>
	<div class="right_form"><input maxlength="64" type="text" name="prefix_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="prefix_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=10 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['prefix'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['prefix'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_postfix" style="display: block">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['postfix'];?>
</div>
	<div class="right_form"><input maxlength="64" type="text" name="postfix_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="postfix_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=10 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['postfix'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['postfix'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_date_format" style="display: none">
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
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['date_format_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['date_format'];?>
</div>
	<div class="right_form"><input maxlength="64" type="text" name="date_format_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="date_format_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=10 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['date_format'][$_smarty_tpl->tpl_vars['v']->value['id']]) && $_smarty_tpl->tpl_vars['fields']->value['date_format'][$_smarty_tpl->tpl_vars['v']->value['id']]) {
echo $_smarty_tpl->tpl_vars['fields']->value['date_format'][$_smarty_tpl->tpl_vars['v']->value['id']];
} else { ?>dd/mm/yy<?php }?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="clearfix f_options" id="div_uploaded" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['max_uploaded_size'];?>
</div>
	<div class="right_form"><input maxlength="10" type="text" name="max_uploaded_size" id="max_uploaded_size" size=10 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['max_uploaded_size'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['max_uploaded_size'];
}?>" />&nbsp;Mb</div>
</div>

<div class="clearfix f_options" id="div_extensions" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['extensions_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['extensions'];?>
</div>
	<div class="right_form"><input maxlength="64" type="text" name="extensions" size=40 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['extensions'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['extensions'];
}?>" /></div>
</div>

<div class="clearfix f_options" id="div_resize" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['image_resize_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['image_resize'];?>
</div>
	<div class="right_form"><input maxlength="10" type="text" name="image_resize" size=10  value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['image_resize'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['image_resize'];
}?>" /></div>
</div>

<div  id="div_elements" style="display: none">
<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elem'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elem']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['elements_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['elements'];?>
</div>
	<div class="right_form"><textarea name="elements_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=7 cols=40><?php if (isset($_smarty_tpl->tpl_vars['fields']->value['elements'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['elements'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "uf") {?>
<div class="f_options" id="div_terms" style="display: none">
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
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['terms_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['terms'];?>
</div>
	<div class="right_form"><textarea name="terms_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=40 cols=75><?php if (isset($_smarty_tpl->tpl_vars['fields']->value['default_val'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['default_val'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>
<?php }?>

<div class=" f_optionsclearfix" id="div_other_val" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['other_val'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['other_val'];?>
</div>
	<div class="right_form"><input type="checkbox" name="other_val" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['other_val']) && $_smarty_tpl->tpl_vars['fields']->value['other_val'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class=" f_optionsclearfix" id="div_all_val" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['all'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all'];?>
</div>
	<div class="right_form"><input type="checkbox" name="all_val" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['all_val']) && $_smarty_tpl->tpl_vars['fields']->value['all_val'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="f_options" id="div_dep1" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_field'];?>
1</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_name1_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name1'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name1'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep2" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_field'];?>
2</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_name2_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name2'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name2'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep3" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_field'];?>
3</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_name3_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name3'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name3'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep4" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_field'];?>
4</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_name4_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name4'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name4'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep5" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_field'];?>
5</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_name5_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name5'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_name5'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_top_str1" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['top_str'];?>
1</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_top_str1_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str1'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str1'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_top_str2" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['top_str'];?>
2</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_top_str2_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str2'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str2'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_top_str3" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['top_str'];?>
3</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_top_str3_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str3'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str3'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_top_str4" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['top_str'];?>
4</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_top_str4_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str4'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str4'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_top_str5" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['top_str'];?>
5</div>
	<div class="right_form"><input type="text" maxlength="200" name="dep_top_str5_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str5'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_top_str5'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep_error1" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_error'];?>
1</div>
	<div class="right_form"><input type="text" maxlength="500" name="dep_error_message1_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message1'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message1'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep_error2" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_error'];?>
2</div>
	<div class="right_form"><input type="text" maxlength="500" name="dep_error_message2_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message2'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message2'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep_error3" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_error'];?>
3</div>
	<div class="right_form"><input type="text" maxlength="500" name="dep_error_message3_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message3'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message3'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep_error4" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_error'];?>
4</div>
	<div class="right_form"><input type="text" maxlength="500" name="dep_error_message4_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message4'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message4'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="f_options" id="div_dep_error5" style="display: none">
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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_error'];?>
5</div>
	<div class="right_form"><input type="text" maxlength="500" name="dep_error_message5_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message5'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_error_message5'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<div class="clearfix f_options" id="div_location_fields" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['auto_locate_fields'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['auto_locate_fields'];?>
</div>
	<div class="right_form">
		<select id="auto_locate_fields" name="auto_locate_fields[]" multiple="multiple" size="6" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['fields_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['caption'] != "username" && $_smarty_tpl->tpl_vars['v']->value['caption'] != "email" && $_smarty_tpl->tpl_vars['v']->value['caption'] != "password" && $_smarty_tpl->tpl_vars['v']->value['caption'] != $_smarty_tpl->tpl_vars['fields']->value['caption']) {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type'] && $_smarty_tpl->tpl_vars['fields']->value['type'] == "google_maps" && in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['fields']->value['extensions_array'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>

	</div>
</div>

<div class="clearfix f_options" id="div_dep_required1" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_required1'];?>
</div>
	<div class="right_form"><input type="checkbox" name="dep_required1" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required1']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required1'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix f_options" id="div_dep_required2" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_required2'];?>
</div>
	<div class="right_form"><input type="checkbox" name="dep_required2" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required2']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required2'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix f_options" id="div_dep_required3" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_required3'];?>
</div>
	<div class="right_form"><input type="checkbox" name="dep_required3" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required3']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required3'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix f_options" id="div_dep_required4" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_required4'];?>
</div>
	<div class="right_form"><input type="checkbox" name="dep_required4" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required4']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required4'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix f_options" id="div_dep_required5" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['depending_required5'];?>
</div>
	<div class="right_form"><input type="checkbox" name="dep_required5" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required5']) && $_smarty_tpl->tpl_vars['fields']->value['depending']['dep_required5'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<!-- end depending -->

<?php if ($_smarty_tpl->tpl_vars['type']->value == "cf") {?>

<div class="clearfix f_options" id="div_advanced_search" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['advanced_search'];?>
</div>
	<div class="right_form"><input type="checkbox" name="advanced_search" id="advanced_search" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['advanced_search']) && $_smarty_tpl->tpl_vars['fields']->value['advanced_search'] == 1) {?>checked="checked"<?php }?> onClick="onEnableSearch(<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type']) {?>'<?php echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>
'<?php } else { ?>0<?php }?>)" /></div>
</div>

<div class="clearfix f_options" id="div_quick_search" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['quick_search'];?>
</div>
	<div class="right_form"><input type="checkbox" name="quick_search" id="quick_search" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['quick_search']) && $_smarty_tpl->tpl_vars['fields']->value['quick_search'] == 1) {?>checked="checked"<?php }?> onClick="onEnableSearch(<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type']) {?>'<?php echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>
'<?php } else { ?>0<?php }?>)" /></div>
</div>

<div class="clearfix f_options" id="div_search_type" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['search_type'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['search_type'];?>
</div>
	<div class="right_form">
		<input type="radio" name="search_type" value="1" checked="checked" onClick="onEnableSearch(<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type']) {?>'<?php echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>
'<?php } else { ?>0<?php }?>)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['exact_match'];?>
<br/>
		<span id="span_search_interval"><input id="search_interval" type="radio" name="search_type" value="2" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['search_type']) && $_smarty_tpl->tpl_vars['fields']->value['search_type'] == 2) {?>checked="checked"<?php }?> onClick="onEnableSearch(<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type']) {?>'<?php echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>
'<?php } else { ?>0<?php }?>)"&nbsp;>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['interval'];?>
<br/></span>
		<input type="radio" name="search_type" value="3" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['search_type']) && $_smarty_tpl->tpl_vars['fields']->value['search_type'] == 3) {?>checked="checked"<?php }?> onClick="onEnableSearch( <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type']) {?>'<?php echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>
'<?php } else { ?>0<?php }?>)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['search_keyword'];?>

	</div>
</div>

<div class="f_options" id="div_search_interval" style="display: none">
<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_elem'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_elem']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['search_values'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['elements_info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['search_values'];?>
</div>
	<div class="right_form">
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1 && (isset($_smarty_tpl->tpl_vars['__foreach_elem']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_elem']->value['index'] : null) == 0) {?><span class="note"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['elements_multilanguage'];?>
</span><br/><?php }?>
		<textarea name="search_elements_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=7 cols=40><?php if (isset($_smarty_tpl->tpl_vars['fields']->value['search_elements'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['fields']->value['search_elements'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea>
	</div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>

<?php }?>

<div class="clearfix f_options" id="div_required" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['required'];?>
</div>
	<div class="right_form"><input type="checkbox" name="required" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['required']) && $_smarty_tpl->tpl_vars['fields']->value['required'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix f_options" id="div_editable" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['editable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="editable" <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['editable']) && $_smarty_tpl->tpl_vars['fields']->value['editable'] == 1) || !isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {?>checked="checked"<?php }?> /></div>
</div>

<div id="div_unique" class="f_options" style="display: block;">
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['unique'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['unique'];?>
</div>
	<div class="right_form"><input type="checkbox" name="unique" id="unique" <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['unique']) && $_smarty_tpl->tpl_vars['fields']->value['unique'] == 1)) {?>checked="checked"<?php }?> onchange="onUnique()" /></div>
</div>

<div id="div_unique_error" style="display: none;">

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
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['unique_error_message'];?>
</div>
	<div class="right_form"><input type="text" maxlength="500" name="error_message2_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  id="error_message2_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['error_message2'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['fields']->value['error_message2'][$_smarty_tpl->tpl_vars['v']->value['id']],'"','&quot;');
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

</div> 
</div> 


<div class="clearfix f_options" id="div_active" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['active'];?>
</div>
	<div class="right_form"><input type="checkbox" name="active" <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['active']) && $_smarty_tpl->tpl_vars['fields']->value['active'] == 1) || !isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {?>checked="checked"<?php }?> /></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "uf") {?>
<div class="clearfix f_options" id="div_public" style="display: block">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['public'];?>
" alt="">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['public'];?>
</div>
	<div class="right_form">
		<input type="radio" name="public" value="1" <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['public']) && $_smarty_tpl->tpl_vars['fields']->value['public'] == 1) || !isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];?>
&nbsp;&nbsp;
		<input type="radio" name="public" value="0" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['public']) && $_smarty_tpl->tpl_vars['fields']->value['public'] == 0) {?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];?>
&nbsp;&nbsp;
		<?php $_smarty_tpl->tpl_vars['uc_array'] = new Smarty_Variable(array("textbox","textarea","htmlarea","menu","url","email","phone","date","user_email","twitter"), null, 0);?>
		<?php if (!isset($_smarty_tpl->tpl_vars['fields']->value['type']) || (isset($_smarty_tpl->tpl_vars['fields']->value['type']) && in_array($_smarty_tpl->tpl_vars['fields']->value['type'],$_smarty_tpl->tpl_vars['uc_array']->value))) {?>
		<span id="uc">
		<input type="radio" name="public" value="2" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['public']) && $_smarty_tpl->tpl_vars['fields']->value['public'] == 2) {?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['user_choice'];?>

		</span>
		<?php }?>

</div>
</div>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_enabled']) {?>
<div class="clearfix f_options" id="div_not_logged_in" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['not_logged_in'];?>
</div>
	<div class="right_form"><input type="checkbox" name="not_logged_in" id="not_logged_in" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['groups']) && $_smarty_tpl->tpl_vars['fields']->value['groups'] == -1) {?>checked="checked"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['read_only']) && $_smarty_tpl->tpl_vars['fields']->value['read_only'] == 1) || (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value)) {?>disabled="disabled"<?php }?> onClick="onEnableNotLoggedIn()" /></div>
</div>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['fields']->value['read_only']) || $_smarty_tpl->tpl_vars['fields']->value['read_only'] == 0) {?>
<div class="clearfix f_options" id="div_choose_groups" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['use_field_for'];?>
</div>
	<div class="right_form">
		<input type="radio" name="choose_group" id="choose_group1" value="all" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['choose_group']) && $_smarty_tpl->tpl_vars['fields']->value['choose_group'] != "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onClick="onChooseGroup(this.form)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_groups'];?>

		&nbsp;<input type="radio" name="choose_group" id="choose_group2" value="choose" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['choose_group']) && $_smarty_tpl->tpl_vars['fields']->value['choose_group'] == "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onClick="onChooseGroup(this.form)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['choose_groups'];?>

	</div>
</div>

<div class="clearfix f_options" id="div_groups" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['choose_groups_info'];?>
" /></div>
	<div class="right_form">
		<select multiple="multiple" size=8 name="groups[]" id="groups" class="mselect">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>
<?php }?>

<div class="clearfix" id="div_repeat" <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['fields']->value['type'] != "password" && $_smarty_tpl->tpl_vars['fields']->value['type'] != "user_email")) {?>style="display: none;"<?php }?>>
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['double_verification'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['double_verification'];?>
</div>
	<div class="right_form"><input type="checkbox" name="double_verification" id="double_verification" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['ext1']) && $_smarty_tpl->tpl_vars['fields']->value['ext1'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<?php }?> 

<div class="f_options" id="div_phone_extra" <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['fields']->value['type'] != "phone")) {?>style="display: none;"<?php }?>>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['international_format'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['international_format'];?>
</div>
	<div class="right_form"><input type="checkbox" name="international_format" id="international_format" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['ext1']) && $_smarty_tpl->tpl_vars['fields']->value['ext1'] == 1) {?>checked="checked"<?php }?> onClick="onEnableInternationalFormat()" /></div>
</div>

<div class="clearfix" id="div_only_countries" <?php if (!isset($_smarty_tpl->tpl_vars['fields']->value['ext1']) || $_smarty_tpl->tpl_vars['fields']->value['ext1'] == 0) {?>style="display: none;"<?php }?>>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['only_countries'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['only_countries'];?>
</div>
	<div class="right_form"><input type="text" size="40" name="only_countries" id="only_countries" value="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['extensions']) && $_smarty_tpl->tpl_vars['fields']->value['extensions']) {
echo $_smarty_tpl->tpl_vars['fields']->value['extensions'];
}?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['only_countries2'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['info']['country_autodetect'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['country_autodetect'];?>
</div>
	<div class="right_form"><input type="checkbox" name="country_autodetect" id="country_autodetect" <?php if (isset($_smarty_tpl->tpl_vars['fields']->value['other_val']) && $_smarty_tpl->tpl_vars['fields']->value['other_val'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

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

var old_field="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['type'];
}?>";
var old_numeric="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['is_numeric'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['is_numeric'];
}?>";
<?php if ($_smarty_tpl->tpl_vars['type']->value == "uf") {?>var old_group_val="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['groups'])) {
echo $_smarty_tpl->tpl_vars['fields']->value['groups'];
}?>";<?php }?>
if(old_field) selectCFType(old_field,'<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');
<?php if ($_smarty_tpl->tpl_vars['type']->value == "uf" && isset($_smarty_tpl->tpl_vars['fields']->value['read_only']) && $_smarty_tpl->tpl_vars['fields']->value['read_only'] == 0) {?>if(old_group_val==-1) onEnableNotLoggedIn(); else if(old_group_val!="0") chooseGroup(document.forms["add_cf"], old_group_val);<?php }?>
<?php if ($_smarty_tpl->tpl_vars['type']->value == "cf" && isset($_smarty_tpl->tpl_vars['fields']->value['type']) && $_smarty_tpl->tpl_vars['fields']->value['type']) {?>onEnableSearch(<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['type'])) {?>'<?php echo $_smarty_tpl->tpl_vars['fields']->value['type'];?>
'<?php } else { ?>0<?php }?>);<?php }?>
onEnableNumeric();

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>