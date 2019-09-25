<?php /* Smarty version 3.1.24, created on 2019-06-11 19:10:34
         compiled from "/home/pegasuswings/public_html/admin/templates/default/payment_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:5121312065cfffcaa3fb958_78734728%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f986c6b2d48e3b3315dca9e15ac5b301d49010' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/payment_settings.html',
      1 => 1486031952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5121312065cfffcaa3fb958_78734728',
  'variables' => 
  array (
    'lng' => 0,
    'processor' => 0,
    'processor_name' => 0,
    'array_processors' => 0,
    'v' => 0,
    'template_path' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfffcaa44ad45_51372824',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfffcaa44ad45_51372824')) {
function content_5cfffcaa44ad45_51372824 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '5121312065cfffcaa3fb958_78734728';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title">
<div class="lfloat" width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php if ($_smarty_tpl->tpl_vars['processor']->value) {?><a href="payment_settings.php"><?php }
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['payment_settings'];
if ($_smarty_tpl->tpl_vars['processor']->value) {?></a> > <?php echo $_smarty_tpl->tpl_vars['processor_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];
}?></div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="payment_settings.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['payment_processors'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="invoice_settings.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['invoice_settings'];?>
</span></a>
	</div></div>

</div>
</div>

<div class="p30">
<form name="settings" method="post" action="payment_settings.php<?php if ($_smarty_tpl->tpl_vars['processor']->value) {?>?processor=<?php echo $_smarty_tpl->tpl_vars['processor']->value;
}?>" enctype="multipart/form-data">

<?php if (!$_smarty_tpl->tpl_vars['processor']->value) {?>
<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['payment_processor'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['payment_processor_title'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['payment_processor_recurring'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['tax'];?>
</th>
	<th width="20"></th>
	<th colspan="3" width="300" class="hright"></th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_processors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['processor_name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['processor_title'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['recurring'] == -1) {?>-<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['recurring'] == 0) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['disabled'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['recurring'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['recur_all_subscriptions'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['recurring'] == 2) {
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['choose_recur_subscriptions'];
}?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['tax_str']) {
echo $_smarty_tpl->tpl_vars['v']->value['tax_str'];
} else { ?>-<?php }?></td>

	<td><a href="edit_processor.php?processor=<?php echo $_smarty_tpl->tpl_vars['v']->value['processor_code'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a></td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['enabled']) {?>
	<?php if (!$_smarty_tpl->tpl_vars['v']->value['free'] || $_smarty_tpl->tpl_vars['v']->value['processor_code'] == "credits") {?>
	<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['processor_code'];?>
', 'payment', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_disable_processor'];?>
')<?php }?>">
	<?php }?>
	<div class="small-btn activebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enabled'];?>
</div>
	<?php if (!$_smarty_tpl->tpl_vars['v']->value['free'] || $_smarty_tpl->tpl_vars['v']->value['processor_code'] == "credits") {?></a><?php }?>
	<?php } else { ?>
	<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnablePayment('<?php echo $_smarty_tpl->tpl_vars['v']->value['processor_code'];?>
', 'payment')<?php }?>"><div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disabled'];?>
</div></a>
	<?php }?>
	</td>

	<td>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['pending']) {?>
	<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onPaymentNotPending('<?php echo $_smarty_tpl->tpl_vars['v']->value['processor_code'];?>
');<?php }?>">
	<div class="small-btn pendingbutton icon"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['general']['pending']," ","&nbsp;");?>
</div>
	</a>
	<?php } else { ?>

	<a  href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onPaymentPending('<?php echo $_smarty_tpl->tpl_vars['v']->value['processor_code'];?>
');<?php }?>">
	<div class="small-btn optionsbutton icon"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['general']['not_pending']," ","&nbsp;");?>
</div>
	</a>

	<?php }?>
	</td>
	<td>
	<?php if ((!$_smarty_tpl->tpl_vars['v']->value['free'] && !$_smarty_tpl->tpl_vars['v']->value['manual']) || $_smarty_tpl->tpl_vars['v']->value['processor_code'] == "credits") {?>
	<a href="payment_settings.php?processor=<?php echo $_smarty_tpl->tpl_vars['v']->value['processor_code'];?>
"><div class="small-btn inactivebutton icon"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['edit_settings']," ","&nbsp;");?>
</div></a>
	<?php }?>
	</td>
</tr>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>

<?php } else { ?> 

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['processor']->value)."_settings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }?>
</form>
</div> 


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>