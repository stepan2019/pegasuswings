<?php /* Smarty version 3.1.24, created on 2019-06-11 17:08:01
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/show.html" */ ?>
<?php
/*%%SmartyHeaderCode:671357805cffdff1b06909_48429052%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d861257fbaba3973b14ae3d412ee259f4fbd85' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/show.html',
      1 => 1544468816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '671357805cffdff1b06909_48429052',
  'variables' => 
  array (
    'pages_link' => 0,
    'show' => 0,
    'lng_su' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdff1b0a7a0_68518170',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdff1b0a7a0_68518170')) {
function content_5cffdff1b0a7a0_68518170 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '671357805cffdff1b06909_48429052';
?>
<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=suspended'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "suspended") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng_su']->value['show_suspended'];?>
</option>
<?php }
}
?>