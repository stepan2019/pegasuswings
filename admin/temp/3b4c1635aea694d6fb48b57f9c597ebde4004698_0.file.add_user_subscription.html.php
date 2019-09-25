<?php /* Smarty version 3.1.24, created on 2019-09-10 15:26:56
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_user_subscription.html" */ ?>
<?php
/*%%SmartyHeaderCode:14989635485d77c0c0c2a513_60145819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b4c1635aea694d6fb48b57f9c597ebde4004698' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_user_subscription.html',
      1 => 1443016870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14989635485d77c0c0c2a513_60145819',
  'variables' => 
  array (
    'lng' => 0,
    'self' => 0,
    'id' => 0,
    'error' => 0,
    'no_users' => 0,
    'users' => 0,
    'v' => 0,
    'tmp' => 0,
    'settings' => 0,
    'subscriptions' => 0,
    'demo' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c0c0c869e8_08127503',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c0c0c869e8_08127503')) {
function content_5d77c0c0c869e8_08127503 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14989635485d77c0c0c2a513_60145819';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <a href="subscriptions.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users_subscriptions'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['add_subscription'];?>
</div>

<div class="p30">
<form name="address" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
</div>
	<div class="right_form">
	<?php if ($_smarty_tpl->tpl_vars['no_users']->value <= 100) {?>
	<select id="user" name="user">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['user'];?>
</option>
	<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['user_id']) && $_smarty_tpl->tpl_vars['tmp']->value['user_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
	<input type="text" name="username" id="username" />
	<?php } else { ?>
	<input type="text" name="email" id="email" />
	<?php }?>
	<?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['package'];?>
</div>
	<div class="right_form">
	<select name="package">
	<?php if (!count($_smarty_tpl->tpl_vars['subscriptions']->value)) {?>
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['no_subscriptions'];?>
</option>
	<?php } else { ?>
	<?php
$_from = $_smarty_tpl->tpl_vars['subscriptions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	<?php }?>
	</select>
	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];
}?>" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 

</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

        $(function() {
                $( "#username" ).autocomplete({
                        source: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=user_ac",
                        minLength: 1
                });
                $( "#email" ).autocomplete({
                        source: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=user_ac",
                        minLength: 1
                });
        });

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>