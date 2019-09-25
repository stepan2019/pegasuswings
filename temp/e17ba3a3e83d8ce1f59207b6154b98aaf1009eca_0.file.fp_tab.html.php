<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/latest_auctions/fp_tab.html" */ ?>
<?php
/*%%SmartyHeaderCode:1180860695d8956e78707b6_24720847%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e17ba3a3e83d8ce1f59207b6154b98aaf1009eca' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/latest_auctions/fp_tab.html',
      1 => 1487496062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1180860695d8956e78707b6_24720847',
  'variables' => 
  array (
    'crt_lang' => 0,
    'ck' => 0,
    'title_field' => 0,
    'la_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e7875589_51153914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e7875589_51153914')) {
function content_5d8956e7875589_51153914 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1180860695d8956e78707b6_24720847';
$_smarty_tpl->_capture_stack[0][] = array('some_content', 'title_field', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['crt_lang']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<input id="tab_latest_auctions" type="radio" name="tabs" <?php if (!$_smarty_tpl->tpl_vars['ck']->value) {?>checked<?php }?>>
	<label for="tab_latest_auctions"><?php echo $_smarty_tpl->tpl_vars['la_settings']->value[$_smarty_tpl->tpl_vars['title_field']->value];?>
</label>
	<?php }
}
?>