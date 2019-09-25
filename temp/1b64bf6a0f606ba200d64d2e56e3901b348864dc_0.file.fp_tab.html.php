<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/popular_ads/fp_tab.html" */ ?>
<?php
/*%%SmartyHeaderCode:20782125155d8956e78625b3_53029933%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b64bf6a0f606ba200d64d2e56e3901b348864dc' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/popular_ads/fp_tab.html',
      1 => 1487496050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20782125155d8956e78625b3_53029933',
  'variables' => 
  array (
    'crt_lang' => 0,
    'ck' => 0,
    'title_field' => 0,
    'popular_ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e786ab43_06138699',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e786ab43_06138699')) {
function content_5d8956e786ab43_06138699 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20782125155d8956e78625b3_53029933';
$_smarty_tpl->_capture_stack[0][] = array('some_content', 'title_field', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['crt_lang']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<input id="tab_popular" type="radio" name="tabs" <?php if (!$_smarty_tpl->tpl_vars['ck']->value) {?>checked<?php }?>>
	<label for="tab_popular"><?php echo $_smarty_tpl->tpl_vars['popular_ads']->value[$_smarty_tpl->tpl_vars['title_field']->value];?>
</label>
	<?php }
}
?>