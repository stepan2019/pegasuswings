<?php /* Smarty version 3.1.24, created on 2019-06-11 17:03:11
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/news/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:19215911825cffdecf164625_65608842%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f296d19147c3a06e1d483db1906d2f1039efecca' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/news/index.html',
      1 => 1517053802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19215911825cffdecf164625_65608842',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_news' => 0,
    'is_admin' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_news' => 0,
    'v' => 0,
    'languages' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdecf1b1841_14267696',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdecf1b1841_14267696')) {
function content_5cffdecf1b1841_14267696 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19215911825cffdecf164625_65608842';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/news/js/news.js"><?php echo '</script'; ?>
>

<div class="page_title">
<div class="lfloat" width="200"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_news']->value['news'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng_news']->value['news_list'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/news/index.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng_news']->value['news'];?>
</span></a>
	</div></div>
	<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/news/settings.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng_news']->value['settings'];?>
</span></a>
	</div></div>
	<?php }?>

</div>
</div>

<div class="p30">

<div class="lfloat" style="width: 600px;">
<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['news']['add'] == 1) {?>
<a href="add.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['news']['delete'] == 1) {?>
<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAllNews('<?php echo addslashes($_smarty_tpl->tpl_vars['lng_news']->value['confirm_delete_all']);?>
')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>
<?php }?>
</div>

<div class="rfloat">
<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<div class="clearfix"></div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width=20><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th width=20><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width=100><?php echo $_smarty_tpl->tpl_vars['lng_news']->value['image'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng_news']->value['title'];?>
</th>
	<th width=100><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['date'];?>
</th>
	<th width=50><?php echo $_smarty_tpl->tpl_vars['lng_news']->value['language'];?>
</th>
	<th></th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_news']->value;
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
	<td><div id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</div></td>
	<td><div id="order<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</div></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/modules/news/images/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" /><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</td>
	<td><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['v']->value['language_image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['language_image'];?>
" /><?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['name'];
}
}?></td>
	<td>
		<span>
		<a href="javascript:;" class="ou<?php if (!$_smarty_tpl->tpl_vars['v']->value['order_up']) {?> disabled<?php }?>" id="ou<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		</span>

		<span>
		<a href="javascript:;" class="od<?php if (!$_smarty_tpl->tpl_vars['v']->value['order_down']) {?> disabled<?php }?>" id="od<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		</span>

	</td>
	<td>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['news']['edit'] == 1) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/news/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['news']['delete'] == 1) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteNews('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lng_news']->value['confirm_delete'];?>
');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php }?>
		
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['news']['edit'] == 1) {?>
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="onNewsEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng_news']->value['publish']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng_news']->value['unpublish']);?>
');">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng_news']->value['publish'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onNewsDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng_news']->value['publish']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng_news']->value['unpublish']);?>
');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng_news']->value['unpublish'];?>
" alt="">
			</a>
		<?php }?>
		</span>	
		<?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if (!$_smarty_tpl->tpl_vars['no']->value) {?>
<tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['lng_news']->value['no_news'];?>
</td></tr>
<?php }?>
</table>

<?php if ($_smarty_tpl->tpl_vars['no']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div><div class="clearfix"></div><?php }?>

</div> 

<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

	$("#check_all").click(function()
	{

		if ($('#check_all').is(':checked')) checkAll(document);
		else uncheckAll(document);

	});
	
	$(".od").click(function()
	{
		if ($(this).hasClass('disabled'))
		return false;
    
		var id = $(this).attr("id").substr(2);
		var crt_row = $(this).closest('tr').attr("id");
		
		$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/news/actions.php?action=order_down&id="+id,
		success: function(data) {

				var row = $("#"+crt_row);
				row.next().insertBefore(row);
				
				// data = new_order_no|exchanged_with_id
				// change the order no and the order arrows if the case
				var arr=data.split("|");
				new_order = arr[0];
				exchanged_with=arr[1];
				
				var old_order = $("#order"+id).html();
				var ou_disabled = $("#ou"+id).hasClass('disabled');
				var od_disabled = $("#od"+exchanged_with).hasClass('disabled');
				
				$("#order"+id).html(new_order);
				$("#order"+exchanged_with).html(old_order);
				
				$("#ou"+id).removeClass('disabled');
				$("#od"+exchanged_with).removeClass('disabled');
				
				if(ou_disabled) $("#ou"+exchanged_with).addClass('disabled');
				if(od_disabled) $("#od"+id).addClass('disabled');

			} // end data
		});// end ajax

	});
	
	$(".ou").click(function()
	{

		if ($(this).hasClass('disabled'))
		return false;

		var id = $(this).attr("id").substr(2);
		var crt_row = $(this).closest('tr').attr("id");
		
		$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/news/actions.php?action=order_up&id="+id,
		success: function(data) {

				var row = $("#"+crt_row);
				row.prev().insertAfter(row);
				
				// data = new_order_no|exchanged_with_id
				// change the order no and the order arrows if the case
				var arr=data.split("|");
				new_order = arr[0];
				exchanged_with=arr[1];
				
				var old_order = $("#order"+id).html();
				var ou_disabled = $("#ou"+exchanged_with).hasClass('disabled');
				var od_disabled = $("#od"+id).hasClass('disabled');

				$("#order"+id).html(new_order);
				$("#order"+exchanged_with).html(old_order);

				$("#ou"+exchanged_with).removeClass('disabled');
				$("#od"+id).removeClass('disabled');
				
				if(ou_disabled) $("#ou"+id).addClass('disabled');
				if(od_disabled) $("#od"+exchanged_with).addClass('disabled');

			} // end data
		});// end ajax

	});
	
}); // end document ready



<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>