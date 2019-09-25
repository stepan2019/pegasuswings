<?php /* Smarty version 3.1.24, created on 2019-06-11 17:04:04
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/price_extra/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:12103473085cffdf04033209_39520787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf929af972293b6861da283262d89506b78dfb97' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/price_extra/index.html',
      1 => 1536266692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12103473085cffdf04033209_39520787',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_pe' => 0,
    'unique_configuration' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_pe' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdf040a0e54_11393242',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdf040a0e54_11393242')) {
function content_5cffdf040a0e54_11393242 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12103473085cffdf04033209_39520787';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/price_extra/js/price_extra.js"><?php echo '</script'; ?>
>

<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['price_extra'];?>
</div>

<div class="p30">

<div class="lfloat" style="width: 600px;">
<a <?php if (!$_smarty_tpl->tpl_vars['unique_configuration']->value) {?>href="add.php"<?php } else { ?>href="javascript:;" onclick='alert("<?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['info']['unique_configuration'];?>
")'<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAllPe('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete_all']);?>
')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>
</div>

<div class="clearfix"></div>

<div class="information mb10"><?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['info']['usage'];?>
</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width="30%"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['fieldsets'];?>
</th>
	<th></th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_pe']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr id="row<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
	<td><input type="checkbox" class="noborder" name="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['fieldset_names'];?>
</td>
	<td>
	  <?php if ($_smarty_tpl->tpl_vars['v']->value['use_negotiable']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['use_negotiable'];?>
&nbsp;<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['v']->value['use_free']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['use_free'];?>
&nbsp;<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['v']->value['use_tags']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['use_tags'];?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['tags'];
}?>
	  <?php if ($_smarty_tpl->tpl_vars['v']->value['use_extra_option1']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['use_extra_option1'];?>
&nbsp;<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['v']->value['use_extra_option2']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_pe']->value['use_extra_option2'];?>
&nbsp;<?php }?>
	</td>
	<td>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/price_extra/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeletePe('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete'];?>
');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if (!count($_smarty_tpl->tpl_vars['array_pe']->value)) {?>
<tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['lng']->value['no_items'];?>
</td></tr>
<?php }?>
</table>

</div> 

<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

	$("#check_all").click(function()
	{

		if ($('#check_all').is(':checked')) checkAll(document);
		else uncheckAll(document);

	});
}); // end document ready



<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>