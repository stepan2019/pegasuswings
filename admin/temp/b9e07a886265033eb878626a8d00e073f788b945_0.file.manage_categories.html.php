<?php /* Smarty version 3.1.24, created on 2019-06-11 18:50:06
         compiled from "/home/pegasuswings/public_html/admin/templates/default/manage_categories.html" */ ?>
<?php
/*%%SmartyHeaderCode:14223747685cfff7de159c09_80743227%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e07a886265033eb878626a8d00e073f788b945' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/manage_categories.html',
      1 => 1515776088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14223747685cfff7de159c09_80743227',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'demo' => 0,
    'self' => 0,
    'array_categories' => 0,
    'v' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfff7de2610d5_00162237',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfff7de2610d5_00162237')) {
function content_5cfff7de2610d5_00162237 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14223747685cfff7de159c09_80743227';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_categories'];?>
</div>

<div class="p30">

<div class="lfloat" style="width: 600px;">


<div class="lfloat mr10">
<a href="add_category.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAll('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['categories']['confirm_delete_all']);?>
','categ')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>

</div>
</div>

<div class="rfloat ml10">

<div class="buttonwrapper"><div class="button3-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?fix=1"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['fix_order'];?>
</span></a>
</div></div>
</div>

<div class="rfloat">
<div class="buttonwrapper lfloat mr10"><div class="button3-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?recount=1"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['recount_ads'];?>
</span></a>
</div></div>


<div class="buttonwrapper lfloat"><div class="button3-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?slugs=1"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['regenerate_category_slugs'];?>
</span></a>
</div></div>


</div> 

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="10" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width=20><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th width=10><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th></th>
	<th></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['name'];?>
</th>
	<th width=250><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['description'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['ads_no'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['parent'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['set'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="85" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>

</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr <?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>class="inactive"<?php }?>>
	<td id="checkbox<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><input type="checkbox" class="noborder" name="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
	<td id="pic<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" width="50"><?php if ($_smarty_tpl->tpl_vars['v']->value['icon']) {?><img src="../images/categories/<?php echo $_smarty_tpl->tpl_vars['v']->value['icon'];?>
"><?php }?></td>
	<td id="pic<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" width="50"><?php if ($_smarty_tpl->tpl_vars['v']->value['picture']) {?><img src="../images/categories/<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
"><?php }?></td>
	<td id="name<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" class="level<?php if ($_smarty_tpl->tpl_vars['v']->value['level'] <= 5) {
echo $_smarty_tpl->tpl_vars['v']->value['level'];
} else { ?>5<?php }?>"><?php if ($_smarty_tpl->tpl_vars['v']->value['subcats']) {?><b><?php }
echo $_smarty_tpl->tpl_vars['v']->value['name'];
if ($_smarty_tpl->tpl_vars['v']->value['subcats']) {?></b><?php }?></td>
	<td style="text-align: left !important;" id="description<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</td>
	<td id="l<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ads'];?>
</td>
	<td id="parent<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['parent'];?>
</td>
	<td id="fset<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['set'];?>
</td>
	<td>
		<span>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_up']) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onCategMove(<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
, '<?php echo $_smarty_tpl->tpl_vars['v']->value['order_up'];?>
')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png">
		<?php }?>
		</span>

		<span><?php if ($_smarty_tpl->tpl_vars['v']->value['order_down']) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onCategMove(<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
, '<?php echo $_smarty_tpl->tpl_vars['v']->value['order_down'];?>
')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?>
		</span>

	</td>
	<td id="action<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">

		<span><a href="javascript:;" class="allowgroups" id="gr<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['allowed_groups_list'];?>
"></a></span>

		<span><a href="edit_category.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a></span>

		<span>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['ads'] > 0) {?>
		<a href="javascript:;" class="delcat" id="del<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php } else { ?>	
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['categories']['confirm_delete']);?>
','categ');<?php }?>">
		<?php }?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a></span>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','categ');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['ads'] > 0) {?>
			<a href="javascript:;" class="deactivatecat" id="deactivate<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','categ');<?php }?>">
			<?php }?>
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>

	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if (count($_smarty_tpl->tpl_vars['array_categories']->value) == 0) {?>
	<tr><td colspan="12" class="center"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['no_categories'];?>
</td></tr>
<?php }?>

</table>

</div>

<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

$("a.delcat").click(function(event){
	var cat_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 400,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/delete_category.php?id='+cat_id,
		'onClosed': function(){ location.reload(true); }
	});
});

$("a.deactivatecat").click(function(event){
	var cat_id = jQuery(this).attr("id").substr(10);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 400,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/deactivate_category.php?id='+cat_id,
		'onClosed': function(){ location.reload(true); }
	});
});

$("a.allowgroups").click(function(event){
	var cat_id = jQuery(this).attr("id").substr(2);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 400,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/cat_groups_list.php?id='+cat_id,
		'onClosed': function(){ location.reload(false); }
	});
});

	$("#check_all").click(function()
	{

		if ($('#check_all').is(':checked')) checkAll(document);
		else uncheckAll(document);

	});

});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>