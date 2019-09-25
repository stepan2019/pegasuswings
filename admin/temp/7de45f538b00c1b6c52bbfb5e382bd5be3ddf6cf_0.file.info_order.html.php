<?php /* Smarty version 3.1.24, created on 2019-09-08 16:40:52
         compiled from "/home/pegasuswings/public_html/admin/templates/default/info_order.html" */ ?>
<?php
/*%%SmartyHeaderCode:5067000055d752f14250a29_35205114%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de45f538b00c1b6c52bbfb5e382bd5be3ddf6cf' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/info_order.html',
      1 => 1479378624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5067000055d752f14250a29_35205114',
  'variables' => 
  array (
    'lng' => 0,
    'id' => 0,
    'payment_array' => 0,
    'k' => 0,
    'v' => 0,
    'invoice' => 0,
    'live_site' => 0,
    'template_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d752f142abd56_94194850',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d752f142abd56_94194850')) {
function content_5d752f142abd56_94194850 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5067000055d752f14250a29_35205114';
echo $_smarty_tpl->getSubTemplate ("overlay_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="overlay-top-bg"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['invoice'];?>
: #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</div>


<table cellpadding="0" cellspacing="0" align="center" class="centered datatable" width="90%">
<?php
$_from = $_smarty_tpl->tpl_vars['payment_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr><td class="raligned"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td class="laligned"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td></tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['invoice']->value) {?>
<tr><td class="raligned"><?php echo $_smarty_tpl->tpl_vars['lng']->value['invoice']['invoice'];?>
</td><td class="laligned">#<?php echo $_smarty_tpl->tpl_vars['invoice']->value;?>
&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/generate_invoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/download-db.png" /></a></td></tr>
<?php }?>

</table>

<?php echo $_smarty_tpl->getSubTemplate ("overlay_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>