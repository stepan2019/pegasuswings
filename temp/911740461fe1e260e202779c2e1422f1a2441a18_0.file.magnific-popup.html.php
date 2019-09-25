<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/data/magnific-popup.html" */ ?>
<?php
/*%%SmartyHeaderCode:7481585285d89340975ff50_68271798%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911740461fe1e260e202779c2e1422f1a2441a18' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/data/magnific-popup.html',
      1 => 1490845898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7481585285d89340975ff50_68271798',
  'variables' => 
  array (
    'mp_included' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d893409765838_84748613',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d893409765838_84748613')) {
function content_5d893409765838_84748613 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7481585285d89340975ff50_68271798';
if (!isset($_smarty_tpl->tpl_vars['mp_included']->value) || !$_smarty_tpl->tpl_vars['mp_included']->value) {?>
<?php $_smarty_tpl->tpl_vars["mp_included"] = new Smarty_Variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["mp_included"] = clone $_smarty_tpl->tpl_vars["mp_included"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["mp_included"] = clone $_smarty_tpl->tpl_vars["mp_included"];?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/mpm/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>

<?php }?>

<?php }
}
?>