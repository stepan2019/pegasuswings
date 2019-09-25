<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/multicurrency/search_currencies.html" */ ?>
<?php
/*%%SmartyHeaderCode:6939816265d893409738f72_67275086%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392fa50a44c2b3d0fa807c033b0b0e63e6df00da' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/multicurrency/search_currencies.html',
      1 => 1490104498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6939816265d893409738f72_67275086',
  'variables' => 
  array (
    'post_array' => 0,
    'seo_settings' => 0,
    'page' => 0,
    'live_site' => 0,
    'x' => 0,
    'k' => 0,
    'settings' => 0,
    'location_fields' => 0,
    'separator' => 0,
    'lng' => 0,
    'currencies' => 0,
    'v' => 0,
    'mc_default_currency' => 0,
    'constructed_url' => 0,
    'sfield' => 0,
    'field_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d89340974e912_81616555',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d89340974e912_81616555')) {
function content_5d89340974e912_81616555 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '6939816265d893409738f72_67275086';
?>

<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value) || !$_smarty_tpl->tpl_vars['post_array']->value) {
$_smarty_tpl->tpl_vars['post_array'] = new Smarty_Variable(array(), null, 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'sfield', null); ob_start(); ?>##currency##/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->assign('constructed_url',$_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchLink($_smarty_tpl->tpl_vars['post_array']->value,$_smarty_tpl->tpl_vars['page']->value,"page|category",'currency'));?>

<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["separator"] = new Smarty_Variable("&amp;", null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'constructed_url', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?page=1<?php
$_from = $_smarty_tpl->tpl_vars['post_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
if ($_smarty_tpl->tpl_vars['x']->value != '' && $_smarty_tpl->tpl_vars['k']->value != "currency" && $_smarty_tpl->tpl_vars['k']->value != "page" && $_smarty_tpl->tpl_vars['k']->value != "show" && (!$_smarty_tpl->tpl_vars['settings']->value['enable_locations'] || (!in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['location_fields']->value) && $_smarty_tpl->tpl_vars['k']->value != "crt_city"))) {
echo $_smarty_tpl->tpl_vars['separator']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['x']->value,'/','_');
}
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['currency'];?>
:&nbsp;
<?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('field_string', 'field_string', null); ob_start(); ?>currency-<?php echo $_smarty_tpl->tpl_vars['v']->value['currency'];?>
/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (((!isset($_smarty_tpl->tpl_vars['post_array']->value['currency']) || !$_smarty_tpl->tpl_vars['post_array']->value['currency']) && $_smarty_tpl->tpl_vars['mc_default_currency']->value != $_smarty_tpl->tpl_vars['v']->value['currency']) || (isset($_smarty_tpl->tpl_vars['post_array']->value['currency']) && $_smarty_tpl->tpl_vars['post_array']->value['currency'] && $_smarty_tpl->tpl_vars['v']->value['currency'] != $_smarty_tpl->tpl_vars['post_array']->value['currency'])) {?><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['constructed_url']->value,$_smarty_tpl->tpl_vars['sfield']->value,$_smarty_tpl->tpl_vars['field_string']->value);
} else {
echo $_smarty_tpl->tpl_vars['constructed_url']->value;
echo $_smarty_tpl->tpl_vars['separator']->value;?>
currency=<?php echo $_smarty_tpl->tpl_vars['v']->value['currency'];
}?>" class="special"><?php } else { ?><span><?php }
echo $_smarty_tpl->tpl_vars['v']->value['currency'];
if (((!isset($_smarty_tpl->tpl_vars['post_array']->value['currency']) || !$_smarty_tpl->tpl_vars['post_array']->value['currency']) && $_smarty_tpl->tpl_vars['mc_default_currency']->value != $_smarty_tpl->tpl_vars['v']->value['currency']) || (isset($_smarty_tpl->tpl_vars['post_array']->value['currency']) && $_smarty_tpl->tpl_vars['post_array']->value['currency'] && $_smarty_tpl->tpl_vars['v']->value['currency'] != $_smarty_tpl->tpl_vars['post_array']->value['currency'])) {?></a><?php } else { ?></span><?php }?>&nbsp;&nbsp;
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php }
}
?>