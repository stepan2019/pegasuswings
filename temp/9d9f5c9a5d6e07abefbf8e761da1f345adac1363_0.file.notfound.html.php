<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:15
         compiled from "/home/pegasuswings/public_html/templates/flux/notfound.html" */ ?>
<?php
/*%%SmartyHeaderCode:962189435d8956ef051226_11426062%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9f5c9a5d6e07abefbf8e761da1f345adac1363' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/notfound.html',
      1 => 1488108764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962189435d8956ef051226_11426062',
  'variables' => 
  array (
    'lng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956ef062e46_27684664',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956ef062e46_27684664')) {
function content_5d8956ef062e46_27684664 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '962189435d8956ef051226_11426062';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_bounds">
	<div class="pt30">
	<div class="error"><p><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['not_found'];?>
</p></div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>