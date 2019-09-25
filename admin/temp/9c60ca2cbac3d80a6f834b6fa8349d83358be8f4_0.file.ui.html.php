<?php /* Smarty version 3.1.24, created on 2019-06-11 17:08:01
         compiled from "/home/pegasuswings/public_html/admin/templates/default/data/ui.html" */ ?>
<?php
/*%%SmartyHeaderCode:17631938635cffdff1aee7f6_85208206%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c60ca2cbac3d80a6f834b6fa8349d83358be8f4' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/data/ui.html',
      1 => 1457631064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17631938635cffdff1aee7f6_85208206',
  'variables' => 
  array (
    'ui_included' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdff1af30f0_22045821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdff1af30f0_22045821')) {
function content_5cffdff1af30f0_22045821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17631938635cffdff1aee7f6_85208206';
if (!isset($_smarty_tpl->tpl_vars['ui_included']->value) || !$_smarty_tpl->tpl_vars['ui_included']->value) {?>
<?php $_smarty_tpl->tpl_vars["ui_included"] = new Smarty_Variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ui_included"] = clone $_smarty_tpl->tpl_vars["ui_included"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ui_included"] = clone $_smarty_tpl->tpl_vars["ui_included"];?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/jquery-ui.min.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php }

}
}
?>