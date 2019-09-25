<?php /* Smarty version 3.1.24, created on 2019-06-11 16:29:28
         compiled from "/home/pegasuswings/public_html/admin/templates/default/data/fancybox.html" */ ?>
<?php
/*%%SmartyHeaderCode:15173116825cffd6e8b967a5_45519644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e95a6689fc9c36c42c1349642547fae9b51a5f8' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/data/fancybox.html',
      1 => 1307821476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15173116825cffd6e8b967a5_45519644',
  'variables' => 
  array (
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd6e8b97807_57106542',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd6e8b97807_57106542')) {
function content_5cffd6e8b97807_57106542 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15173116825cffd6e8b967a5_45519644';
?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/fancybox/jquery.fancybox-1.3.4.pack.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/fancybox/jquery.fancybox-1.3.4.min.css" type="text/css" media="screen" />
<?php }
}
?>