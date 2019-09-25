<?php /* Smarty version 3.1.24, created on 2019-06-11 18:03:26
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/price_extra/custom_fields_form.html" */ ?>
<?php
/*%%SmartyHeaderCode:11881919845cffecee62fbe6_96247978%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb5c36ee834d3ba2e76967da7dc2a9ba5cebd88' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/price_extra/custom_fields_form.html',
      1 => 1536269262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11881919845cffecee62fbe6_96247978',
  'variables' => 
  array (
    'fieldset' => 0,
    'pe_settings' => 0,
    'tmp' => 0,
    'v' => 0,
    'currencies' => 0,
    't' => 0,
    'crt_lang' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffecee64aa92_89969874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffecee64aa92_89969874')) {
function content_5cffecee64aa92_89969874 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11881919845cffecee62fbe6_96247978';
?>
	<div><?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_free'] || $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_tags']) {?><input type="radio" name="price_type" id="price_type" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['tmp']->value['price']) || (isset($_smarty_tpl->tpl_vars['tmp']->value['price']) && ($_smarty_tpl->tpl_vars['tmp']->value['price'] > 0 || ($_smarty_tpl->tpl_vars['tmp']->value['price'] == 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_free'] == 0)))) {?>checked="checked"<?php }?> /><?php } else { ?><input type="hidden" name="price_type" id="price_type" value="1" /><?php }?>
	<input type="text" name="price" id="price" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['price']) && $_smarty_tpl->tpl_vars['tmp']->value['price'] > 0) {
echo $_smarty_tpl->tpl_vars['tmp']->value['price'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['default_val'] != '') {
echo $_smarty_tpl->tpl_vars['v']->value['default_val'];
}?>" size="<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
" />
	<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
	<span><select name="currency" style="float: none !important;">
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
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['currency']) && $_smarty_tpl->tpl_vars['tmp']->value['currency'] == $_smarty_tpl->tpl_vars['t']->value['currency']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['currency'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
	</select>
	</span>
	<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['currency'];?>

	<input type="hidden" name="currency" value="<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['currency'];?>
"/>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_negotiable'] == 1) {?>&nbsp;<input type="checkbox" name="negotiable" id="negotiable" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['negotiable']) && $_smarty_tpl->tpl_vars['tmp']->value['negotiable'] == 1) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['negotiable'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_extra_option1'] == 1) {?>&nbsp;<input type="checkbox" name="extra_option1" id="extra_option1" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['extra_option1']) && $_smarty_tpl->tpl_vars['tmp']->value['extra_option1'] == 1) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option1'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_extra_option2'] == 1) {?>&nbsp;<input type="checkbox" name="extra_option2" id="extra_option2" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['extra_option2']) && $_smarty_tpl->tpl_vars['tmp']->value['extra_option2'] == 1) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option2'];
}?>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_free']) {?><div><input type="radio" name="price_type" id="price_type" value="2" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['price']) && $_smarty_tpl->tpl_vars['tmp']->value['price'] == 0) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['free'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_tags']) {?>
	<?php
$_from = $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['tags_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$foreach_tag_Sav = $_smarty_tpl->tpl_vars['tag'];
?>
	<div><input type="radio" name="price_type" id="price_type" value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['price']) && $_smarty_tpl->tpl_vars['tmp']->value['price'] == -1 && (isset($_smarty_tpl->tpl_vars['tmp']->value['price_tag']) && $_smarty_tpl->tpl_vars['tmp']->value['price_tag'] == $_smarty_tpl->tpl_vars['tag']->value)) {?>checked="checked"<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</div>
	<?php
$_smarty_tpl->tpl_vars['tag'] = $foreach_tag_Sav;
}
?>
	<?php }?>
	
	<?php echo '<script'; ?>
 type="text/javascript">
	
	$('#price').number( true, '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_decimals'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_point'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['format_separator'];?>
' );
	
	<?php echo '</script'; ?>
>
<?php }
}
?>