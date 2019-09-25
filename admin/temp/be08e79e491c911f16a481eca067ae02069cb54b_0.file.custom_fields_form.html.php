<?php /* Smarty version 3.1.24, created on 2019-06-11 17:38:06
         compiled from "/home/pegasuswings/public_html/admin/templates/default/custom_fields_form.html" */ ?>
<?php
/*%%SmartyHeaderCode:2956373885cffe6fec81925_04408274%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be08e79e491c911f16a481eca067ae02069cb54b' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/custom_fields_form.html',
      1 => 1538041434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2956373885cffe6fec81925_04408274',
  'variables' => 
  array (
    'fields_array' => 0,
    'v' => 0,
    'edit' => 0,
    'template_path' => 0,
    'tmp' => 0,
    'gmaps_unique' => 0,
    'gmaps_fields' => 0,
    'appearance' => 0,
    'live_site' => 0,
    'lng' => 0,
    'id' => 0,
    'type' => 0,
    't' => 0,
    'default_fields_types' => 0,
    'modules_array' => 0,
    'uc_array' => 0,
    'pub_field' => 0,
    'ads_settings' => 0,
    'fieldset' => 0,
    'pe_settings' => 0,
    'currencies' => 0,
    'c' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe6fee1cae6_24724101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe6fee1cae6_24724101')) {
function content_5cffe6fee1cae6_24724101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2956373885cffe6fec81925_04408274';
?>
<!-- Custom Fields -->
<?php
$_from = $_smarty_tpl->tpl_vars['fields_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_custom'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_custom']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

<div class="clearfix">

<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] != "depending" && $_smarty_tpl->tpl_vars['v']->value['type'] != "terms" && ($_smarty_tpl->tpl_vars['v']->value['type'] != "password" || !isset($_smarty_tpl->tpl_vars['edit']->value) || !$_smarty_tpl->tpl_vars['edit']->value)) {?>
	<div class="left_form"><?php if ($_smarty_tpl->tpl_vars['v']->value['info_message']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['info_message'];?>
" />&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['v']->value['name'];
if ($_smarty_tpl->tpl_vars['v']->value['required'] == 1) {?><span class="mandatory"> *</span><?php }?></div>
	<div class="right_form">
<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "password" && (!isset($_smarty_tpl->tpl_vars['edit']->value) || !$_smarty_tpl->tpl_vars['edit']->value)) {?>
			<input name="password" id="password" type="password" size="25" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['password'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['password'];
}?>" />
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox" || $_smarty_tpl->tpl_vars['v']->value['type'] == "url" || $_smarty_tpl->tpl_vars['v']->value['type'] == "email" || $_smarty_tpl->tpl_vars['v']->value['type'] == "user_email" || $_smarty_tpl->tpl_vars['v']->value['type'] == "username" || $_smarty_tpl->tpl_vars['v']->value['type'] == "phone" || $_smarty_tpl->tpl_vars['v']->value['type'] == "whatsapp" || $_smarty_tpl->tpl_vars['v']->value['type'] == "twitter") {?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
} else {
if ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '') {
echo $_smarty_tpl->tpl_vars['v']->value['default_val'];
}
}?>" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
();"<?php }?> />
			<?php if (($_smarty_tpl->tpl_vars['v']->value['type'] == "phone" || $_smarty_tpl->tpl_vars['v']->value['type'] == "whatsapp") && $_smarty_tpl->tpl_vars['v']->value['ext1'] == 1) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_hidden" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_hidden" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
}?>" /><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textbox") {?>

			<?php if ($_smarty_tpl->tpl_vars['v']->value['is_numeric']) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
			
			$('#<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
').number( true, '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_decimals'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_point'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_separator'];?>
' );
			
			<?php echo '</script'; ?>
>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['v']->value['validation_type'] == "numeric") {?>
			<?php echo '<script'; ?>
 type="text/javascript">
			
			$('#<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
').number( true, '<?php echo $_smarty_tpl->tpl_vars['appearance']->value['number_format_decimals'];?>
', '<?php echo $_smarty_tpl->tpl_vars['appearance']->value['number_format_point'];?>
', '<?php echo $_smarty_tpl->tpl_vars['appearance']->value['number_format_separator'];?>
' );
			
			<?php echo '</script'; ?>
>
			<?php }?>
			
			<?php }?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "file" || $_smarty_tpl->tpl_vars['v']->value['type'] == "image" || $_smarty_tpl->tpl_vars['v']->value['type'] == "video" || $_smarty_tpl->tpl_vars['v']->value['type'] == "audio") {?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="file" />
			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "file" || $_smarty_tpl->tpl_vars['v']->value['type'] == "video" || $_smarty_tpl->tpl_vars['v']->value['type'] == "audio") {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/download.png" class="tooltip" alt="" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['download'];?>
"/></a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "image") {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" class="imgfield"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
			<?php }?>
			<a href="javascript:;" onclick="deleteFile('<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
', '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" /></a>
			<?php }?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "textarea") {?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<textarea name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" rows="<?php echo $_smarty_tpl->tpl_vars['v']->value['rows'];?>
" cols="<?php echo $_smarty_tpl->tpl_vars['v']->value['cols'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
();"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
} else {
if ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '') {
echo $_smarty_tpl->tpl_vars['v']->value['default_val'];
}
}?></textarea>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "htmlarea") {?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<textarea name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" rows="<?php echo $_smarty_tpl->tpl_vars['v']->value['rows'];?>
" cols="<?php echo $_smarty_tpl->tpl_vars['v']->value['cols'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
();"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
} else {
if ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '') {
echo $_smarty_tpl->tpl_vars['v']->value['default_val'];
}
}?></textarea>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "menu") {?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<select style="float: left !important" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>onchange="checkOther(this.form.<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
, '<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
');"<?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
();"<?php }?>>
				<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['top_str'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?><option value="-1" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] && !in_array($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],$_smarty_tpl->tpl_vars['v']->value['elements_array'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
</option><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?><option value="all" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == "all") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
</option><?php }?>
				<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] != '') {
if ($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == $_smarty_tpl->tpl_vars['t']->value) {?>selected="selected"<?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '' && $_smarty_tpl->tpl_vars['v']->value['default_val'] == $_smarty_tpl->tpl_vars['t']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
				<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			</select>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] != "all" && !in_array($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],$_smarty_tpl->tpl_vars['v']->value['elements_array'])) {?>
			<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_other_val"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_other_val" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_other_val" value="<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" /></span>
			<?php } else { ?>
			<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_other_val" style="display: none;"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_other_val" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_other_val" /></span>
			<?php }?>
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "multiselect") {?>
			<select name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" multiple size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" class="mselect">
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] && in_array($_smarty_tpl->tpl_vars['t']->value,$_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		</select>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "radio") {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
				<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="radio" class="noborder" value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] != '') {?> <?php if ($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == $_smarty_tpl->tpl_vars['t']->value) {?> checked="checked"<?php }?> <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '' && $_smarty_tpl->tpl_vars['v']->value['default_val'] == $_smarty_tpl->tpl_vars['t']->value) {?> checked="checked" <?php }?> />&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
				<?php echo $_smarty_tpl->tpl_vars['t']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
				
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "radio_group") {?>
		<fieldset>
			<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_rad'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_rad']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
				<td width="30%" height=25>
				<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] != '' && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == $_smarty_tpl->tpl_vars['t']->value) {?> checked="checked" <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '' && $_smarty_tpl->tpl_vars['v']->value['default_val'] == $_smarty_tpl->tpl_vars['t']->value) {?> checked="checked" <?php }
}?> />&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
				<?php echo $_smarty_tpl->tpl_vars['t']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
				</td>
				<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_rad']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_rad']->value['index'] : null) != 0 && (isset($_smarty_tpl->tpl_vars['__foreach_rad']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_rad']->value['index'] : null)%3 == 2) {?></tr><tr><?php }?>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			</tr>
			</table>
		</fieldset>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "checkbox") {?>
			<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] != '' && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == 1) {?> checked="checked" <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['v']->value['default_val'] == 1) {?> checked="checked" <?php }
}?> />
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "checkbox_group") {?>
			<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['extra_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_check'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_check']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
				<td width="30%" height=25>
				<input name="<?php echo $_smarty_tpl->tpl_vars['t']->value['input_name'];?>
" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] && in_array($_smarty_tpl->tpl_vars['t']->value['name'],$_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {?> checked="checked"<?php }?> />&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
				<?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>

				<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
				</td>
				<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_check']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_check']->value['index'] : null) != 0 && (isset($_smarty_tpl->tpl_vars['__foreach_check']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_check']->value['index'] : null)%3 == 2) {?></tr><tr><?php }?>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			</tr>
			</table>
		</fieldset>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "date") {?>

			<?php echo $_smarty_tpl->getSubTemplate ("data/date.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_vis" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_vis" <?php if ($_smarty_tpl->tpl_vars['v']->value['size']) {?>size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
"<?php }?> type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['vis'][$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value['vis'][$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo $_smarty_tpl->tpl_vars['tmp']->value['vis'][$_smarty_tpl->tpl_vars['v']->value['caption']];
} else {
if ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '') {
echo $_smarty_tpl->tpl_vars['v']->value['default_val'];
}
}?>" onchange="checkDeleteData('<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_vis', '<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
')"/> 
			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
} else {
if ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '') {
echo $_smarty_tpl->tpl_vars['v']->value['default_val'];
}
}?>" />
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "youtube") {?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
			<textarea name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" rows="<?php echo $_smarty_tpl->tpl_vars['v']->value['rows'];?>
" cols="<?php echo $_smarty_tpl->tpl_vars['v']->value['cols'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
}?></textarea>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "google_maps") {?>

			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
}?>" />
			<div id="gm_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" class="map"></div>

		<?php }?>

		<?php if (!in_array($_smarty_tpl->tpl_vars['v']->value['type'],$_smarty_tpl->tpl_vars['default_fields_types']->value) && in_array($_smarty_tpl->tpl_vars['v']->value['type'],$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ("modules/".((string)$_smarty_tpl->tpl_vars['v']->value['type'])."/form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }?>

		<?php $_smarty_tpl->tpl_vars['uc_array'] = new Smarty_Variable(array("textbox","textarea","htmlarea","menu","url","email","user_email","phone","whatsapp","date"), null, 0);?>

		<?php if ($_smarty_tpl->tpl_vars['type']->value == "user" && in_array($_smarty_tpl->tpl_vars['v']->value['type'],$_smarty_tpl->tpl_vars['uc_array']->value) && $_smarty_tpl->tpl_vars['v']->value['public'] == 2) {?> 

		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'pub_field', null); ob_start(); ?>pb_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		&nbsp;<input type="checkbox" name="pb_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="pb_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (!isset($_smarty_tpl->tpl_vars['edit']->value) || !$_smarty_tpl->tpl_vars['edit']->value || ($_smarty_tpl->tpl_vars['edit']->value && isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['pub_field']->value]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['pub_field']->value] == 1)) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['make_public'];?>


	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "user_email" && $_smarty_tpl->tpl_vars['v']->value['ext1'] == 1 && (!isset($_smarty_tpl->tpl_vars['edit']->value) || !$_smarty_tpl->tpl_vars['edit']->value)) {?>
		</div></div>
	<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['repeat'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form">
	<input name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_repeat" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
_repeat" type="text" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" maxlength="255" value="" />
	<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] != 'depending' && $_smarty_tpl->tpl_vars['v']->value['type'] != 'price') {?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "password" && $_smarty_tpl->tpl_vars['v']->value['ext1'] == 1 && (!isset($_smarty_tpl->tpl_vars['edit']->value) || !$_smarty_tpl->tpl_vars['edit']->value)) {?>
	</div></div>
	<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['repeat_password'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input name="password_repeat" id="password_repeat" type="password" size="25" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['password_repeat'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['password_repeat'];
}?>" />
	<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 'price' && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) {?>

<!-- PRICE -->
	

	<?php if (in_array("price_extra",$_smarty_tpl->tpl_vars['modules_array']->value) && (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]) || isset($_smarty_tpl->tpl_vars['pe_settings']->value[0]))) {?>

	<?php if (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value])) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/custom_fields_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/custom_fields_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fieldset'=>0), 0);
?>

	<?php }?>


	<?php } else { ?>

	<input name="price" id="price" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['price']) && $_smarty_tpl->tpl_vars['tmp']->value['price'] >= 0) {
echo $_smarty_tpl->tpl_vars['tmp']->value['price'];
}?>" />
	<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
	<span><select name="currency" id="currency">
		<?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['currency'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['currency']) && $_smarty_tpl->tpl_vars['tmp']->value['currency'] == $_smarty_tpl->tpl_vars['c']->value['currency']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['currency'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
	</select>
	</span>
	<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['currency'];?>

	<input type="hidden" name="currency" value="<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['currency'];?>
" />
	<?php }?>
	
	<?php echo '<script'; ?>
 type="text/javascript">
	
	$('#price').number( true, '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_decimals'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_point'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_separator'];?>
' );
	
	<?php echo '</script'; ?>
>

	<?php }?> 

	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions']) {?>
	<br/>
	<div class="mt10">
	<input type="checkbox" name="enable_auction" id="enable_auction" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['auction']) && $_smarty_tpl->tpl_vars['tmp']->value['auction']['id'] > 0) {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['enable_auction'];?>
&nbsp;&nbsp;<input type="text" size="10" name="starting_price" id="starting_price" placeholder="<?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['auction_start_price'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['auction']) && $_smarty_tpl->tpl_vars['tmp']->value['auction']['id'] > 0 && $_smarty_tpl->tpl_vars['tmp']->value['auction']['starting_price_nc']) {?>value="<?php echo $_smarty_tpl->tpl_vars['tmp']->value['auction']['starting_price_nc'];?>
"<?php }?> />&nbsp;
	<select name="auction_currency">
		<?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['currency'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['auction']['currency']) && $_smarty_tpl->tpl_vars['tmp']->value['auction']['currency'] == $_smarty_tpl->tpl_vars['t']->value['currency']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['currency'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
	</select>
	</div>
	<?php }?>
	
	

	
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 'depending') {?>
	<div class="left_form"><?php if ($_smarty_tpl->tpl_vars['v']->value['info_message']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['info_message'];?>
" /><?php }
echo $_smarty_tpl->tpl_vars['v']->value['depending']['name1'];
if ($_smarty_tpl->tpl_vars['v']->value['depending']['required1'] == 1) {?><span class="mandatory"> *</span><?php }?></div>
	<div class="right_form">
	<select name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" onchange="selDepending(1, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', <?php if (isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value) {
echo $_smarty_tpl->tpl_vars['category']->value;
} else { ?>0<?php }?>, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '')" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption1'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']];?>
();"<?php }?> >
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['top_str1'];?>
</option>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?><option value="-1" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']] && !in_array($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']],$_smarty_tpl->tpl_vars['v']->value['depending']['elements'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
</option><?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?><option value="all" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']] == "all") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
</option><?php }?>
		
		<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['depending']['elements'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']] != '' && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']] == $_smarty_tpl->tpl_vars['t']->value['name']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
	</select>
	<input type="hidden" name="dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" id="dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
" value="" />
	<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']] && !in_array($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']],$_smarty_tpl->tpl_vars['v']->value['depending']['elements'])) {?>
	<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_other_val">&nbsp;<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_other_val" value="<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']];?>
"></span>
	<?php } else { ?>
	<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_other_val" style="display: none;">&nbsp;<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
_other_val"/></span>
	<?php }?>
	<?php }?>

	</div>
	</div>

	<div class="clearfix">
	<div class="left_form">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['info_message']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['info_message'];?>
" /><?php }
echo $_smarty_tpl->tpl_vars['v']->value['depending']['name2'];
if ($_smarty_tpl->tpl_vars['v']->value['depending']['required2'] == 1) {?><span class="mandatory"> *</span><?php }?></div>
	<div class="right_form">
	<select disabled='disabled' name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] > 2) {?>onchange="selDepending(2, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', 0, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', 'dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
')"<?php } else {
if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>onchange="checkOther(this.form.<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
')"<?php }
}?> <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption2'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']];?>
();"<?php }?> >
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['top_str2'];?>
</option>
	</select>
	<input type="hidden" name="dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" id="dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
" value="" />
	<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>
	<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_other_val" style="margin-left: 10px; display: none;">&nbsp;
	<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_other_val" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
_other_val" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']];
}?>"/>
	</span>
	<?php }?>
	</div>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3) {?>
	</div>

	<div class="clearfix">
	<div class="left_form">

	<?php if ($_smarty_tpl->tpl_vars['v']->value['info_message']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['info_message'];?>
" /><?php }
echo $_smarty_tpl->tpl_vars['v']->value['depending']['name3'];
if ($_smarty_tpl->tpl_vars['v']->value['depending']['required3'] == 1) {?><span class="mandatory"> *</span><?php }?>
	</div>
	<div class="right_form">
	<select disabled='disabled' name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] > 3) {?>onchange="selDepending(3, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', 0, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', 'dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
')"<?php } else {
if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>onchange="checkOther(this.form.<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
')"<?php }
}?> <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption3'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']];?>
();"<?php }?> >
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['top_str3'];?>
</option>
	</select>
	<input type="hidden" name="dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" id="dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
" value="" />
	<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>
	<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_other_val" style="margin-left: 10px; display: none;">&nbsp;
	<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_other_val" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
_other_val" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']];
}?>"/>
	</span>
	<?php }?>
	</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4) {?>
	</div>

	<div class="clearfix">
	<div class="left_form">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['info_message']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['info_message'];?>
" /><?php }
echo $_smarty_tpl->tpl_vars['v']->value['depending']['name4'];
if ($_smarty_tpl->tpl_vars['v']->value['depending']['required4'] == 1) {?><span class="mandatory"> *</span><?php }?>
	</div>
	<div class="right_form">
	<select disabled='disabled' name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] > 4) {?>onchange="selDepending(4, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
', 0, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', 'dep_id_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
')"<?php } else {
if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>onchange="checkOther(this.form.<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
')"<?php }
}?> <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption4'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']];?>
();"<?php }?> >
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['top_str4'];?>
</option>
	</select>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>
	<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_other_val" style="margin-left: 10px; display: none;">&nbsp;
	<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_other_val" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
_other_val" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']];
}?>"/>
	</span>
	<?php }?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5) {?>
	</div>

	<div class="clearfix">
	<div class="left_form">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['info_message']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['info_message'];?>
" /><?php }
echo $_smarty_tpl->tpl_vars['v']->value['depending']['name5'];
if ($_smarty_tpl->tpl_vars['v']->value['depending']['required5'] == 1) {?><span class="mandatory"> *</span><?php }?>
	</div>
	<div class="right_form">
	<select disabled='disabled' name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>onchange="checkOther(this.form.<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
')"<?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['depending']['caption5'],$_smarty_tpl->tpl_vars['gmaps_unique']->value)) {?>onblur="autoLocator_<?php echo $_smarty_tpl->tpl_vars['gmaps_fields']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']];?>
();"<?php }?> >
		<option value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['top_str5'];?>
</option>
	</select>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>
	<span id="span_<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_other_val" style="margin-left: 10px; display: none;">&nbsp;
	<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_other_val" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
_other_val" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']];
}?>"/>
	</span>
	<?php }?>

	</div>
<?php }?>

	<?php echo '<script'; ?>
 type="text/javascript">
	var old_dep<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
=<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) {?>'<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']];?>
'<?php } else { ?>0<?php }?>;
	var sec_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
=<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) {?>'<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']];?>
'<?php } else { ?>0<?php }?>;
	var third_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
=<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3 && isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) {?>'<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']];?>
'<?php } else { ?>0<?php }?>;
	var forth_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
=<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4 && isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) {?>'<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']];?>
'<?php } else { ?>0<?php }?>;
	var fifth_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
=<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] == 5 && isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) {?>'<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']];?>
'<?php } else { ?>0<?php }?>;

	if(old_dep<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
) oldDepending(1, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', <?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
, sec_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
');

	if(sec_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
 && <?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['no'];?>
>=3) oldDepending(2,'<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', <?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
, third_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
');

	if(third_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
 && <?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['no'];?>
>=4) oldDepending(3, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', <?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
, forth_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
');

	if(forth_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
 && <?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['no'];?>
==5) oldDepending(4, '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];?>
', <?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['id'];?>
, forth_val<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_custom']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_custom']->value['index'] : null);?>
, <?php if ($_smarty_tpl->tpl_vars['v']->value['other_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['other'];?>
', <?php if ($_smarty_tpl->tpl_vars['v']->value['all_val']) {?>1<?php } else { ?>0<?php }?>, '<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
', '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
');

	<?php echo '</script'; ?>
>

<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] != "depending" && ($_smarty_tpl->tpl_vars['v']->value['type'] != "password" || !isset($_smarty_tpl->tpl_vars['edit']->value) || !$_smarty_tpl->tpl_vars['edit']->value)) {?>
</div>
<?php }?>
</div>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<!-- End Custom Fields -->
<?php }
}
?>