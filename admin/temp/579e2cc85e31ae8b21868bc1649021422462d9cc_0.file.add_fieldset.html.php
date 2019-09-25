<?php /* Smarty version 3.1.24, created on 2019-06-11 18:50:30
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_fieldset.html" */ ?>
<?php
/*%%SmartyHeaderCode:18985086325cfff7f60f20d4_18663337%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '579e2cc85e31ae8b21868bc1649021422462d9cc' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_fieldset.html',
      1 => 1443357820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18985086325cfff7f60f20d4_18663337',
  'variables' => 
  array (
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'tmp' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfff7f613ba78_50986721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfff7f613ba78_50986721')) {
function content_5cfff7f613ba78_50986721 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18985086325cfff7f60f20d4_18663337';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <a href="manage_fieldsets.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['fieldsets'];?>
</a> > <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['fieldsets']['edit_fieldset'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['fieldsets']['add_fieldset'];
}?></div>

<div class="p30">
<form name="add_fset" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['name'];?>
</div>
	<div class="right_form"><input type="text" maxlength="200" name="fieldset_name" size=30 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['name'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['name'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['description'];?>
</div>
	<div class="right_form"><input type="text" maxlength="500" name="description" size=60 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['description'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['description'];
}?>" /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 

</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>