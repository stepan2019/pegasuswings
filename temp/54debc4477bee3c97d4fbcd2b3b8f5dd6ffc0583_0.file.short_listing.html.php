<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/price_extra/short_listing.html" */ ?>
<?php
/*%%SmartyHeaderCode:3923522165d8934097bf3d9_33421033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54debc4477bee3c97d4fbcd2b3b8f5dd6ffc0583' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/price_extra/short_listing.html',
      1 => 1536311166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3923522165d8934097bf3d9_33421033',
  'variables' => 
  array (
    'v' => 0,
    'pe_settings' => 0,
    'pe_fieldset' => 0,
    'crt_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8934097d24c6_68117030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8934097d24c6_68117030')) {
function content_5d8934097d24c6_68117030 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '3923522165d8934097bf3d9_33421033';
if (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['v']->value['fieldset']]) && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['v']->value['fieldset']]) {
$_smarty_tpl->tpl_vars["pe_fieldset"] = new Smarty_Variable($_smarty_tpl->tpl_vars['v']->value['fieldset'], null, 0);
} else {
$_smarty_tpl->tpl_vars["pe_fieldset"] = new Smarty_Variable("0", null, 0);
}?>
<div class="fbavr price sl-price">
<?php if ($_smarty_tpl->tpl_vars['v']->value['price'] > 0 || ($_smarty_tpl->tpl_vars['v']->value['price'] == 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_free'] == 0)) {?>
	<?php echo $_smarty_tpl->tpl_vars['v']->value['price_curr'];?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['price'] > 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_negotiable'] == 1 && $_smarty_tpl->tpl_vars['v']->value['negotiable'] == 1) {?>
		<div class="rfloat"><div class="sq-btn sq-btn1"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['negotiable']," ","&nbsp;");?>
</div></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['price'] > 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_extra_option1'] == 1 && $_smarty_tpl->tpl_vars['v']->value['extra_option1'] == 1) {?>
		<div class="rfloat"><div class="sq-btn sq-btn1"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option1']," ","&nbsp;");?>
</div></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['price'] > 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_extra_option2'] == 1 && $_smarty_tpl->tpl_vars['v']->value['extra_option2'] == 1) {?>
		<div class="rfloat"><div class="sq-btn sq-btn1"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option2']," ","&nbsp;");?>
</div></div>
	<?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['price'] == 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_free'] == 1) {?>
	<div class="rfloat"><div class="sq-btn sq-btn2 free-btn"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['free']," ","&nbsp;");?>
</div></div>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['price'] == -1 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_tags'] == 1 && $_smarty_tpl->tpl_vars['v']->value['price_tag']) {?>
	<div class="rfloat"><div class="sq-btn sq-btn1"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['price_tag']," ","&nbsp;");?>
</div></div>
<?php }?>
</div><?php }
}
?>