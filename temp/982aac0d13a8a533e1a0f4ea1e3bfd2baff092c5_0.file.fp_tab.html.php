<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/browse_location/fp_tab.html" */ ?>
<?php
/*%%SmartyHeaderCode:10992797815d8956e79b42c7_72136069%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '982aac0d13a8a533e1a0f4ea1e3bfd2baff092c5' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/browse_location/fp_tab.html',
      1 => 1486663098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10992797815d8956e79b42c7_72136069',
  'variables' => 
  array (
    'crt_lang' => 0,
    'ck' => 0,
    'title_field' => 0,
    'browse_location_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e79b9622_42980283',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e79b9622_42980283')) {
function content_5d8956e79b9622_42980283 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10992797815d8956e79b42c7_72136069';
$_smarty_tpl->_capture_stack[0][] = array('some_content', 'title_field', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['crt_lang']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<input id="tab_browse_location" type="radio" name="tabs2" <?php if (!$_smarty_tpl->tpl_vars['ck']->value) {?>checked<?php }?>>
	<label for="tab_browse_location"><?php echo $_smarty_tpl->tpl_vars['browse_location_settings']->value[$_smarty_tpl->tpl_vars['title_field']->value];?>
</label>
<?php }
}
?>