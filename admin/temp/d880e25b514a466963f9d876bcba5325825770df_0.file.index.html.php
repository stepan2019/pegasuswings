<?php /* Smarty version 3.1.24, created on 2019-06-11 17:04:31
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/qrcode/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:620370585cffdf1f1f71b1_52459524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd880e25b514a466963f9d876bcba5325825770df' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/qrcode/index.html',
      1 => 1516790236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '620370585cffdf1f1f71b1_52459524',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdf1f21a096_83121413',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdf1f21a096_83121413')) {
function content_5cffdf1f21a096_83121413 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '620370585cffdf1f1f71b1_52459524';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > QR code</div>
<br/>
<div class="info">This module does not allow any settings.</div>
<br/>
<br/>
<br/>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>