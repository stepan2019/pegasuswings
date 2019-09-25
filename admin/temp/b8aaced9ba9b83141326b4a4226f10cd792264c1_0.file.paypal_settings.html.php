<?php /* Smarty version 3.1.24, created on 2019-07-30 13:27:23
         compiled from "/home/pegasuswings/public_html/admin/templates/default/paypal_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:13782684555d4045bba3c644_04430695%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8aaced9ba9b83141326b4a4226f10cd792264c1' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/paypal_settings.html',
      1 => 1546030916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13782684555d4045bba3c644_04430695',
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
    'lng' => 0,
    'processor_settings' => 0,
    'other_paypal_currency' => 0,
    'paypal_currencies' => 0,
    'c' => 0,
    'template_path' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d4045bba911d5_91465648',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d4045bba911d5_91465648')) {
function content_5d4045bba911d5_91465648 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13782684555d4045bba3c644_04430695';
?>
<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['info']->value != '') {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['paypal_email'];?>
</div>
	<div class="right_form"><input type="text" maxlength="100" size="40" name="paypal_email" id="paypal_email" value="<?php echo $_smarty_tpl->tpl_vars['processor_settings']->value['paypal_email'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['paypal_title'];?>
</div>
	<div class="right_form"><input type="text" maxlength="200" size="40" name="paypal_pay_title" id="paypal_pay_title" value="<?php echo $_smarty_tpl->tpl_vars['processor_settings']->value['paypal_pay_title'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['paypal_currency'];?>
</div>
	<div class="right_form">
		<select name="paypal_currency" id="paypal_currency" onchange="onPaypalCurrency(this.form);">
		<option value="other" <?php if ($_smarty_tpl->tpl_vars['other_paypal_currency']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['other'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['paypal_currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['processor_settings']->value['paypal_currency'] == $_smarty_tpl->tpl_vars['c']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
		</select>&nbsp;
		<div id="div_currency" <?php if (!$_smarty_tpl->tpl_vars['other_paypal_currency']->value) {?>style="display:none;"<?php }?>><input type="text" name="other_paypal_currency" size="4" value="<?php echo $_smarty_tpl->tpl_vars['processor_settings']->value['paypal_currency'];?>
" /></div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['paypal_lc'];?>
</div>
	<div class="right_form"><input type="text" size="4" name="paypal_lc" id="paypal_lc" value="<?php echo $_smarty_tpl->tpl_vars['processor_settings']->value['paypal_lc'];?>
"></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['paypal_demo'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['paypal_demo'];?>
</div>
	<div class="right_form"><input type="checkbox" name="paypal_demo" id="paypal_demo" <?php if ($_smarty_tpl->tpl_vars['processor_settings']->value['paypal_demo'] == 1) {?> checked="checked"<?php }?> /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit_paypal" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> <?php }
}
?>