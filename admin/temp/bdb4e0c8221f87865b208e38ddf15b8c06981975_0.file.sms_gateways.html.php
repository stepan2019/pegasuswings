<?php /* Smarty version 3.1.24, created on 2019-09-10 16:46:42
         compiled from "/home/pegasuswings/public_html/admin/templates/default/sms_gateways.html" */ ?>
<?php
/*%%SmartyHeaderCode:6920927465d77d372f02245_77575304%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb4e0c8221f87865b208e38ddf15b8c06981975' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/sms_gateways.html',
      1 => 1463425660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6920927465d77d372f02245_77575304',
  'variables' => 
  array (
    'lng' => 0,
    'processor' => 0,
    'processor_name' => 0,
    'array_processors' => 0,
    'v' => 0,
    'demo' => 0,
    'template_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77d372f3c025_35707058',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77d372f3c025_35707058')) {
function content_5d77d372f3c025_35707058 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6920927465d77d372f02245_77575304';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php if ($_smarty_tpl->tpl_vars['processor']->value) {?><a href="sms_gateways.php"><?php }
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['sms_gateways'];
if ($_smarty_tpl->tpl_vars['processor']->value) {?></a> > <?php echo $_smarty_tpl->tpl_vars['processor_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];
}?></div>

<div class="p30">
<form name="settings" method="post" action="sms_gateways.php<?php if ($_smarty_tpl->tpl_vars['processor']->value) {?>?processor=<?php echo $_smarty_tpl->tpl_vars['processor']->value;
}?>" enctype="multipart/form-data">

<?php if (!$_smarty_tpl->tpl_vars['processor']->value) {?>
<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['sms_gateway'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['title'];?>
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
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_name'];?>
</td>
	<td><span id="span_title<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_title'];?>
</span><div id="div_title<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
" style="display: none;"><input type="text" name="title<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
" id="title<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
" size="20" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_title'];?>
">&nbsp;&nbsp;&nbsp;<INPUT TYPE="Button" VALUE="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save'];?>
" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>saveSMSGatewayTitle('<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
')<?php }?>"></div></td>

	<td><a href="javascript:;" onClick="onEditSMSGatewayTitle('<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
"></a></td>
	<td width="70">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['default']) {?>
	<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['default'];?>
</div>
	<?php } else { ?>
	<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onSetDefault('<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
', 'sms_gateway', '<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_set_default'];?>
')<?php }?>"><div class="small-btn activebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['languages']['set_default'];?>
</div></a>
	<?php }?>
	</td>

	<td width="70">
	<a href="sms_gateways.php?processor=<?php echo $_smarty_tpl->tpl_vars['v']->value['gateway_code'];?>
"><div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['edit_settings'];?>
</div></a>
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