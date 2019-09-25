<?php /* Smarty version 3.1.24, created on 2019-06-24 19:04:02
         compiled from "/home/pegasuswings/public_html/admin/templates/default/manage_banners.html" */ ?>
<?php
/*%%SmartyHeaderCode:15131492095d111ea250e517_94049427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4257bee75a70a9f63cb0ab714ffb9ca98a74d07f' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/manage_banners.html',
      1 => 1459704844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15131492095d111ea250e517_94049427',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'demo' => 0,
    'modules_array' => 0,
    'field_name' => 0,
    'array_banners' => 0,
    'v' => 0,
    'lng_banners_location' => 0,
    'no_banners' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d111ea2718195_91567550',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d111ea2718195_91567550')) {
function content_5d111ea2718195_91567550 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15131492095d111ea250e517_94049427';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['banners'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_banners'];?>
</div>

<div class="p30">

<div>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['banners']['add'] == 1) {?>
	<a href="add_banner.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['banners']['delete'] == 1) {?>
	<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAll('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['banners']['confirm_delete_all']);?>
','banners')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>
	<?php }?>
</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="40" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['title'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['type'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['position'];?>
</th>
	<?php if (in_array("banners_location",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<th><?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
</th>
	<?php }?>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['link'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['hits'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['impressions'];?>
</th>
	<th></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['date'];?>
</th>
	<th width="80" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
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
	<td><input type="checkbox" class="noborder" name="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['position'];?>
</td>
	<?php if (in_array("banners_location",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<td><?php if (!$_smarty_tpl->tpl_vars['v']->value['location']) {?> <span class="light"><?php echo $_smarty_tpl->tpl_vars['lng_banners_location']->value['any'];?>
</span> <?php }
echo $_smarty_tpl->tpl_vars['v']->value['location'];?>
</td>
	<?php }?>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
</a><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['clicks'];
if ($_smarty_tpl->tpl_vars['v']->value['max_clicks']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['of'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['max_clicks'];
}?></td>	
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['impressions'];
if ($_smarty_tpl->tpl_vars['v']->value['max_impressions']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['of'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['max_impressions'];
}?></td>	
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['filename'] && $_smarty_tpl->tpl_vars['v']->value['extension'] != 'swf') {?><a href='../images/baners/<?php echo $_smarty_tpl->tpl_vars['v']->value['filename'];?>
' class="imgfield tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
		<?php } else { ?>
		<a href="javascript:;" class="vbanner tooltip icon" id="vb<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" />
		</a>
		<?php }?>
	</td>
	<td>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['added_on'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['date_start'] != "0000-00-00 00:00:00" && $_smarty_tpl->tpl_vars['v']->value['date_start']) {?><br/><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['date_start'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['date_start_nice'];
}?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['date_end'] != "0000-00-00 00:00:00" && $_smarty_tpl->tpl_vars['v']->value['date_end']) {?><br/><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['date_end'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['date_end_nice'];
}?>
	</td>
	<td>
		<a href="javascript:;" class="cbanner" id="bc<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['categories_list'];?>
" alt=""></a>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['banners']['edit'] == 1) {?>
		<a href="edit_banner.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['banners']['delete'] == 1) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['banners']['confirm_delete']);?>
','banners');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['banners']['edit'] == 1) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onClearHits('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['banners']['confirm_clear_hits']);?>
','banners');<?php }?>">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/clear-hits.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['clear_hits'];?>
" alt=""></a>
		<?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_banners']->value == 0) {?>
	<tr class="nicetablerow_even">
	<td colspan=<?php if (in_array("banners_location",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>12<?php } else { ?>11<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['no_banners'];?>
</td></tr>
<?php }?>

</table>

</div> 


<?php echo '<script'; ?>
 type="text/javascript">

	$(document).ready(function() {
		$("a.imgfield").fancybox();
	});

	$("a.vbanner").click(function(event){
		var banner_id = jQuery(this).attr("id").substr(2);
		$.fancybox({
			'width'         		: 730,
			'height'        		: 700,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'margin'		: '0',
			'padding'		: '0',
			'titleShow'		: false,
			'type'			: 'iframe',
			'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/view_banner.php?id='+banner_id
		});
	});

	$("a.cbanner").click(function(event){
		var banner_id = jQuery(this).attr("id").substr(2);
		$.fancybox({
			'width'         		: 500,
			'height'        		: 500,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'margin'		: '0',
			'padding'		: '0',
			'titleShow'		: false,
			'type'			: 'iframe',
			'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/banners_categories_list.php?id='+banner_id
		});
	});

	$("#check_all").click(function()
	{

		if ($('#check_all').is(':checked')) checkAll(document);
		else uncheckAll(document);

	});

<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>