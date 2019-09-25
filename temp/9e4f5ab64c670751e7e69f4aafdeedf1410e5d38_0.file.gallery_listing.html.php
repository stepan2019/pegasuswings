<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/price_extra/gallery_listing.html" */ ?>
<?php
/*%%SmartyHeaderCode:5988480055d8956e78af3b9_10550220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4f5ab64c670751e7e69f4aafdeedf1410e5d38' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/price_extra/gallery_listing.html',
      1 => 1536311090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5988480055d8956e78af3b9_10550220',
  'variables' => 
  array (
    'pe_listing' => 0,
    'pe_settings' => 0,
    'pe_fieldset' => 0,
    'crt_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e78d4f05_35222957',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e78d4f05_35222957')) {
function content_5d8956e78d4f05_35222957 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '5988480055d8956e78af3b9_10550220';
if (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_listing']->value['fieldset']]) && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_listing']->value['fieldset']]) {
$_smarty_tpl->tpl_vars["pe_fieldset"] = new Smarty_Variable($_smarty_tpl->tpl_vars['pe_listing']->value['fieldset'], null, 0);
} else {
$_smarty_tpl->tpl_vars["pe_fieldset"] = new Smarty_Variable("0", null, 0);
}?>
<?php if ($_smarty_tpl->tpl_vars['pe_listing']->value['price'] > 0 || ($_smarty_tpl->tpl_vars['pe_listing']->value['price'] == 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_free'] == 0)) {?>

	<?php if ($_smarty_tpl->tpl_vars['pe_listing']->value['price'] > 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_negotiable'] == 1 && $_smarty_tpl->tpl_vars['pe_listing']->value['negotiable'] == 1) {?>
		<div class="lfloat sq-btn sq-btn1 mt5"><?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['negotiable'];?>
</div>
	<?php } else { ?>
		<div class="lprice"><?php echo $_smarty_tpl->tpl_vars['pe_listing']->value['price_curr'];?>
</div>
		<?php if ($_smarty_tpl->tpl_vars['pe_listing']->value['price'] > 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_extra_option1'] == 1 && $_smarty_tpl->tpl_vars['pe_listing']->value['extra_option1'] == 1) {?>
		<div class="lfloat sq-btn sq-btn1 mt5 space5"><?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option1'];?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pe_listing']->value['price'] > 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_extra_option2'] == 1 && $_smarty_tpl->tpl_vars['pe_listing']->value['extra_option2'] == 1) {?>
		<div class="lfloat sq-btn sq-btn1 mt5 space5"><?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option2'];?>
</div>
		<?php }?>
	<?php }?>
	
<?php } elseif ($_smarty_tpl->tpl_vars['pe_listing']->value['price'] == 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_free'] == 1) {?>
	<div class="lfloat sq-btn sq-btn2 free-btn mt5"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['free']," ","&nbsp;");?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['pe_listing']->value['price'] == -1 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['pe_fieldset']->value]['use_tags'] == 1 && $_smarty_tpl->tpl_vars['pe_listing']->value['price_tag']) {?>
	<div class="lfloat sq-btn sq-btn1 mt5"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pe_listing']->value['price_tag']," ","&nbsp;");?>
</div>
<?php }?>

<?php }
}
?>