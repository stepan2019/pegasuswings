<?php /* Smarty version 3.1.24, created on 2019-06-11 18:06:57
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/price_extra/custom_fields_form_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:11725081515cffedc17aeee8_08517466%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccfd1a7b683d9324309f58c3ea28605fb1ff1ce6' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/price_extra/custom_fields_form_list.html',
      1 => 1536269172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11725081515cffedc17aeee8_08517466',
  'variables' => 
  array (
    'v' => 0,
    'values_array' => 0,
    'fieldset' => 0,
    'pe_settings' => 0,
    'crt_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffedc17d9019_98353359',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffedc17d9019_98353359')) {
function content_5cffedc17d9019_98353359 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11725081515cffedc17aeee8_08517466';
?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form">
	  <?php if ($_smarty_tpl->tpl_vars['values_array']->value['price'] > 0 || ($_smarty_tpl->tpl_vars['values_array']->value['price'] == 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_free'] == 0)) {?>
	  
	  <?php echo $_smarty_tpl->tpl_vars['values_array']->value['price_curr'];?>

	  <?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_negotiable'] == 1 && $_smarty_tpl->tpl_vars['values_array']->value['negotiable'] == 1) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['negotiable'];
}?>
	  <?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_extra_option1'] == 1 && $_smarty_tpl->tpl_vars['values_array']->value['extra_option1'] == 1) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option1'];
}?>
	  <?php if ($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_extra_option2'] == 1 && $_smarty_tpl->tpl_vars['values_array']->value['extra_option2'] == 1) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['extra_option2'];
}?>

	  <?php } elseif ($_smarty_tpl->tpl_vars['values_array']->value['price'] == 0 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_free'] == 1) {?>
	  
	  <?php echo $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['lang'][$_smarty_tpl->tpl_vars['crt_lang']->value]['free'];?>

	  
	  <?php } elseif ($_smarty_tpl->tpl_vars['values_array']->value['price'] == -1 && $_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]['use_tags'] == 1) {?>

	  <?php echo $_smarty_tpl->tpl_vars['values_array']->value['price_tag'];?>

	  
	  <?php } else { ?>
	  -
	  <?php }?>
	</div>
</div>
<?php }
}
?>