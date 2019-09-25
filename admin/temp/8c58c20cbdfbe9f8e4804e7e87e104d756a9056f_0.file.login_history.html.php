<?php /* Smarty version 3.1.24, created on 2019-09-10 15:31:47
         compiled from "/home/pegasuswings/public_html/admin/templates/default/login_history.html" */ ?>
<?php
/*%%SmartyHeaderCode:17274011425d77c1e38bafa6_84915978%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c58c20cbdfbe9f8e4804e7e87e104d756a9056f' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/login_history.html',
      1 => 1483812028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17274011425d77c1e38bafa6_84915978',
  'variables' => 
  array (
    'lng' => 0,
    'settings' => 0,
    'array_users' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c1e390f057_14900789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c1e390f057_14900789')) {
function content_5d77c1e390f057_14900789 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17274011425d77c1e38bafa6_84915978';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['security'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['login_history'];?>
</div>

<div class="p30">
<form name="search" method="post" action="login_history.php">

<div class="lfloat" style="width: 600px;">

	<input type="text" name="search" size=15 />
	<div class="buttons">
		<strong><input type="submit" name="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></strong>
	</div>
</div>
<div class="rfloat">
<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<div class="clearfix"></div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft"><?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['lng']->value['users']['username'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];
}?></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['login_history']['last_login_date'];?>
</th>
	<th class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['login_history']['last_login_ip'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
	<td><?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?><a href="login_history_user.php?user=<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
" class="sc1"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a><?php } else { ?><a href="login_history_user.php?user=<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
" class="sc1"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</a><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['login_info']['date_login_nice'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['login_info']['ip'];?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>
</form>

<?php if (count($_smarty_tpl->tpl_vars['array_users']->value)) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div><?php }?>
<div class="clearfix"></div>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>