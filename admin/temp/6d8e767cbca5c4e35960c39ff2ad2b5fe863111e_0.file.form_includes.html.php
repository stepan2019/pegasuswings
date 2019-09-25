<?php /* Smarty version 3.1.24, created on 2019-06-11 17:38:06
         compiled from "/home/pegasuswings/public_html/admin/templates/default/data/form_includes.html" */ ?>
<?php
/*%%SmartyHeaderCode:3655630885cffe6febc57d0_15060325%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d8e767cbca5c4e35960c39ff2ad2b5fe863111e' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/data/form_includes.html',
      1 => 1467012276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3655630885cffe6febc57d0_15060325',
  'variables' => 
  array (
    'gmaps' => 0,
    'v' => 0,
    'fields_array' => 0,
    'phone_index' => 0,
    'phone_exists' => 0,
    'phonearr' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe6fec4e910_27761220',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe6fec4e910_27761220')) {
function content_5cffe6fec4e910_27761220 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3655630885cffe6febc57d0_15060325';
?>
<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[

<?php
$_from = $_smarty_tpl->tpl_vars['gmaps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("data/gmap.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

	
$(document).ready(function() {
	

<?php $_smarty_tpl->tpl_vars["phone_index"] = new Smarty_Variable("0", null, 0);?>
	
<?php
$_from = $_smarty_tpl->tpl_vars['fields_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 'htmlarea') {?>
		<?php $_smarty_tpl->tpl_vars["htmlarea_exists"] = new Smarty_Variable("1", null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/htmlarea.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 'phone' && $_smarty_tpl->tpl_vars['v']->value['ext1'] == 1) {?>
		<?php $_smarty_tpl->tpl_vars["phone_exists"] = new Smarty_Variable("1", null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/phone.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['caption'];
$_tmp1=ob_get_clean();
$_smarty_tpl->createLocalArrayVariable('phonearr', null, 0);
$_smarty_tpl->tpl_vars['phonearr']->value[$_smarty_tpl->tpl_vars['phone_index']->value] = $_tmp1;?>
		<?php $_smarty_tpl->tpl_vars['phone_index'] = new Smarty_Variable($_smarty_tpl->tpl_vars['phone_index']->value+1, null, 0);?>
	<?php }?>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


});


function recheckIntlPhone() {
var arr_invalid_phones=[], index=0;

<?php if (isset($_smarty_tpl->tpl_vars['phone_exists']->value) && $_smarty_tpl->tpl_vars['phone_exists']->value) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['phonearr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
	if($("#<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
").val() && !$("#<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
").intlTelInput("isValidNumber")) {
 		arr_invalid_phones[index]='<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
';
		index++;
	}
<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
<?php }?>
return arr_invalid_phones;
} //end recheckIntlPhone()


<?php if (isset($_smarty_tpl->tpl_vars['gmaps']->value) && $_smarty_tpl->tpl_vars['gmaps']->value) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['gmaps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ("data/gmap-autolocator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php }?>

//]]>
<?php echo '</script'; ?>
>
<?php }
}
?>