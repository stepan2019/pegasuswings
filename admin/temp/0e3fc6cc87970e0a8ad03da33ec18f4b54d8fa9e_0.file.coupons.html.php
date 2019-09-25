<?php /* Smarty version 3.1.24, created on 2019-07-21 10:10:14
         compiled from "/home/pegasuswings/public_html/admin/templates/default/coupons.html" */ ?>
<?php
/*%%SmartyHeaderCode:7543354995d343a069d5883_05903928%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3fc6cc87970e0a8ad03da33ec18f4b54d8fa9e' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/coupons.html',
      1 => 1443002088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7543354995d343a069d5883_05903928',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'array_coupons' => 0,
    'v' => 0,
    'appearance' => 0,
    'demo' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d343a06a1b7e4_65590682',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d343a06a1b7e4_65590682')) {
function content_5d343a06a1b7e4_65590682 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7543354995d343a069d5883_05903928';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['coupons'];?>
</div>

<div class="p30">

<div><a href="add_coupon.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a></div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="20" class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['code'];?>
</th>
	<th width=250><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['discount'];?>
</th>
	<th width=250><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['use_by'];?>
</th>
	<th width=250><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['available_for'];?>
</th>
	<th width=250><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['allow_usage'];?>
</th>
	<th width="50" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_coupons']->value;
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
	<td><div id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</div></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "fixed") {
echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];
}
echo $_smarty_tpl->tpl_vars['v']->value['discount'];
if ($_smarty_tpl->tpl_vars['v']->value['type'] == "percent") {?>%<?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['groups_list'];?>
</td>
	<td><?php if (isset($_smarty_tpl->tpl_vars['v']->value['ads']) && $_smarty_tpl->tpl_vars['v']->value['ads']) {?>[ <?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['ads'];?>
 ] <?php }?>  <?php if (isset($_smarty_tpl->tpl_vars['v']->value['subscriptions']) && $_smarty_tpl->tpl_vars['v']->value['subscriptions']) {?>[ <?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['subscriptions'];?>
 ]<?php }?> 
	 <?php if (isset($_smarty_tpl->tpl_vars['v']->value['options']) && $_smarty_tpl->tpl_vars['v']->value['options']) {?>[ <?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['options'];?>
 ]<?php }?>  <?php if (isset($_smarty_tpl->tpl_vars['v']->value['store']) && $_smarty_tpl->tpl_vars['v']->value['store']) {?>[ <?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['store'];?>
 ]<?php }?></td>
	<td><?php if (isset($_smarty_tpl->tpl_vars['v']->value['allow']) && $_smarty_tpl->tpl_vars['v']->value['allow']) {
echo $_smarty_tpl->tpl_vars['v']->value['allow'];?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['v']->value['allow'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['time'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['times'];
}
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['unlimited'];
}?></td>
	<td>
		<span><a href="edit_coupon.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a></span>

		<span><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['confirm_delete'];?>
','coupon');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a></span>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if (!$_smarty_tpl->tpl_vars['no']->value) {?>
<tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['no_coupons'];?>
</td></tr>
<?php }?>

</table>

</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>