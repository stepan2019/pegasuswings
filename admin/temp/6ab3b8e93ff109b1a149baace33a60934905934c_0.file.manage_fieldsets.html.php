<?php /* Smarty version 3.1.24, created on 2019-06-11 18:49:39
         compiled from "/home/pegasuswings/public_html/admin/templates/default/manage_fieldsets.html" */ ?>
<?php
/*%%SmartyHeaderCode:6570122365cfff7c35d2f01_30337137%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ab3b8e93ff109b1a149baace33a60934905934c' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/manage_fieldsets.html',
      1 => 1422622950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6570122365cfff7c35d2f01_30337137',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_fieldsets' => 0,
    'v' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfff7c3617443_01155811',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfff7c3617443_01155811')) {
function content_5cfff7c3617443_01155811 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6570122365cfff7c35d2f01_30337137';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['fieldsets'];?>
</div>

<div class="p30">

<div>
<a href="add_fieldset.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""/></a>
<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAll('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['fieldsets']['confirm_delete_all']);?>
','fieldset')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>
</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="40" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width="40"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['name'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['description'];?>
</th>
	<th width="80" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_fieldsets']->value;
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
	<td id="checkbox<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><input type="checkbox" class="noborder" name="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><a href="manage_custom_fields.php?fset=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</td>
	<td>
		<a href="javascript:;" class="cats" id="cats<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['fieldsets']['categories_list'];?>
"></a>

		<a href="edit_fieldset.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<?php if (count($_smarty_tpl->tpl_vars['array_fieldsets']->value) == 1) {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['fieldsets']['cannot_delete_last_fieldset'];?>
')">
		<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['categories'] > 0 && !$_smarty_tpl->tpl_vars['demo']->value) {?>
		<a href="javascript:;" class="delfset" id="del<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php } else { ?>	
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['fieldsets']['confirm_delete']);?>
','fieldset');<?php }?>">
		<?php }?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if (count($_smarty_tpl->tpl_vars['array_fieldsets']->value) == 0) {?>
	<tr><td colspan="4"><?php echo $_smarty_tpl->tpl_vars['lng']->value['fieldsets']['no_fieldset'];?>
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


$("a.delfset").click(function(event){
	var fset_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 500,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/delete_fieldset.php?id='+fset_id,
		'onClosed': function(){ location.reload(true); }
	});
});

$("a.cats").click(function(event){
	var fset_id = jQuery(this).attr("id").substr(4);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 500,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/fset_categories_list.php?id='+fset_id,
	});
});

});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>