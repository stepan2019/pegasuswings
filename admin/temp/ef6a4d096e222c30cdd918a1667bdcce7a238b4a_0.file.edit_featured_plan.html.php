<?php /* Smarty version 3.1.24, created on 2019-06-14 10:50:41
         compiled from "/home/pegasuswings/public_html/admin/templates/default/edit_featured_plan.html" */ ?>
<?php
/*%%SmartyHeaderCode:11040023995d037c0187c4c9_65396501%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6a4d096e222c30cdd918a1667bdcce7a238b4a' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/edit_featured_plan.html',
      1 => 1552108042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11040023995d037c0187c4c9_65396501',
  'variables' => 
  array (
    'lng' => 0,
    'self' => 0,
    'id' => 0,
    'error' => 0,
    'tmp' => 0,
    'template_path' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d037c018ba6a1_75841063',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d037c018ba6a1_75841063')) {
function content_5d037c018ba6a1_75841063 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11040023995d037c0187c4c9_65396501';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['extra_visibility_options'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['edit_featured_plan'];?>
</div>

<div class="p30">
<form name="editfp" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>


<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['price'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="fp_amount" size="30" value="<?php echo $_smarty_tpl->tpl_vars['tmp']->value['amount'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['featured_expires'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['featured_expires'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="fp_no_days" size="30" value="<?php echo $_smarty_tpl->tpl_vars['tmp']->value['no_days'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
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