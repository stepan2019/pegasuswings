<?php /* Smarty version 3.1.24, created on 2019-09-10 15:33:08
         compiled from "/home/pegasuswings/public_html/admin/templates/default/forbidden_words.html" */ ?>
<?php
/*%%SmartyHeaderCode:7767911055d77c23433ee57_72787379%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf62d526c6c31b8104b72e2608670f58ba396ff3' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/forbidden_words.html',
      1 => 1422789270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7767911055d77c23433ee57_72787379',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'demo' => 0,
    'array_badwords' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c23438bcb0_64739977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c23438bcb0_64739977')) {
function content_5d77c23438bcb0_64739977 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7767911055d77c23433ee57_72787379';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['security'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['badwords_lists'];?>
</div>

<div class="p30">

<form name="lists" method="post" action="forbidden_words.php">

<div class="lfloat" style="width: 400px; margin-left: 200px;">
<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['security']['edit'] == 1) {?>
	<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['lists']['add_badwords'];?>
</div>
	<div><textarea name="badwords" cols="40" style="height: 242px;"></textarea></div>
	<div class="buttons"<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<strong><input type="submit" name="add_badwords" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></strong>
	</div>
<?php }?>
</div>

<div class="lfloat">
	<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['lists']['badwords_list'];?>
</div>
	<div>
	<select multiple="multiple" name="badwords_list[]" size="14" style="width: 300px" class="mselect">
			<?php
$_from = $_smarty_tpl->tpl_vars['array_badwords']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['security']['delete'] == 1) {?>
	<div class="buttons"<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<strong><input type="submit" name="delete_badwords" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" /></strong>
	</div>
	<?php }?>
</div>

<div class="clearfix"></div>

<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['security']['edit'] == 1) {?>
	<div class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['lists']['help_add_lists'];?>
</div>
<?php }?>


</form>

</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>