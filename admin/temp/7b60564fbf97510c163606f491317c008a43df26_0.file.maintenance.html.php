<?php /* Smarty version 3.1.24, created on 2019-06-12 05:09:23
         compiled from "/home/pegasuswings/public_html/admin/templates/default/maintenance.html" */ ?>
<?php
/*%%SmartyHeaderCode:14541638745d008903ee2979_78242010%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b60564fbf97510c163606f491317c008a43df26' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/maintenance.html',
      1 => 1460449508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14541638745d008903ee2979_78242010',
  'variables' => 
  array (
    'lng' => 0,
    'error' => 0,
    'info' => 0,
    'self' => 0,
    'demo' => 0,
    'template_path' => 0,
    'appearance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d008903f14f03_28087776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d008903f14f03_28087776')) {
function content_5d008903f14f03_28087776 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14541638745d008903ee2979_78242010';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['maintenance'];?>
</div>

<div class="p30">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value != '') {?> <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div> <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value != '') {?> <div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div> <?php }?>

<form name="db" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
" enctype="multipart/form-data">
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['clear_cache'];?>
</div>
	<div class="right_form">
	<div class="buttons lfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Clear_cache" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['clear_cache_now'];?>
" /></span>
	</div>
	</div>
</div>


<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['info']['maintenance_mode'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['maintenance_mode'];?>
</div>
	<div class="right_form">
	<div class="buttons lfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['appearance']->value['maintenance_mode']) {?>
		<span class="negative"><input type="submit" name="RemMaintenance" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['remove_maintenance_mode'];?>
" /></span>
		<?php } else { ?>
		<span class="positive"><input type="submit" name="Maintenance" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['set_maintenance_mode'];?>
" /></span>
		<?php }?>
	</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['info']['maintenance_ips'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['maintenance_ips'];?>
</div>
	<div class="right_form">
	<div><input type="text" size="80" name="ips" value="<?php echo $_smarty_tpl->tpl_vars['appearance']->value['maintenance_ips'];?>
"/></div>
	<div class="information mt10 mb10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['maintenance']['info']['add_maintenance_ips'];?>
</div>
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="MaintenanceIPs" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save'];?>
" /></span>
	</div>
	</div>
</div>
</form>

</div> 

</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>