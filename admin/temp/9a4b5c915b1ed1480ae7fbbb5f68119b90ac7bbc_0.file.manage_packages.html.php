<?php /* Smarty version 3.1.24, created on 2019-06-11 19:02:08
         compiled from "/home/pegasuswings/public_html/admin/templates/default/manage_packages.html" */ ?>
<?php
/*%%SmartyHeaderCode:17775440025cfffab0f28247_24633876%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4b5c915b1ed1480ae7fbbb5f68119b90ac7bbc' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/manage_packages.html',
      1 => 1552733214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17775440025cfffab0f28247_24633876',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_packages' => 0,
    'v' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfffab1044a03_00829066',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfffab1044a03_00829066')) {
function content_5cfffab1044a03_00829066 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17775440025cfffab0f28247_24633876';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_packages'];?>
</div>

<div class="p30">

<div>
<a href="add_package.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAll('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['packages']['confirm_delete_all']);?>
','pkg')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>
</div>


<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width="20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['name'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['amount'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['groups'];?>
</th>

	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['description'];?>
</th>
	<th width="40"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['ads_no'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_packages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['active']) {?> inactive<?php }?>">
	<td class="nobborder"><input type="checkbox" class="noborder" name="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td class="nobborder">#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td class="nobborder"><div id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</div></td>
	<td class="laligned nobborder"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
	<td class="nobborder"><?php echo $_smarty_tpl->tpl_vars['v']->value['price_curr'];?>
</td>
	<td class="nobborder"><?php echo $_smarty_tpl->tpl_vars['v']->value['groups_formatted'];?>
</td>

	<td class="laligned nobborder"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</td>
	<td class="nobborder"><a class="sc1 underline" href="manage_listings.php?package_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['total_ads'];?>
</a></td>
	<td class="nobborder">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveUp(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'pkg')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt="">
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['last'] == 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveDown(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'pkg')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt="">
		<?php }?>
	</td>
	<td class="nobborder">
		<a href="edit_package.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<?php if (count($_smarty_tpl->tpl_vars['array_packages']->value) == 1) {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['cannot_delete_last_package'];?>
')">
		<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['total_ads'] > 0 && !$_smarty_tpl->tpl_vars['demo']->value) {?>
		<a href="javascript:;" class="delplan" id="del<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php } else { ?>	
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['packages']['confirm_delete']);?>
','pkg');<?php }?>">
		<?php }?>

		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php }?>
		
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'pkg', '');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'pkg', '');<?php }?>">
			
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>
		</span>	

	</td>
</tr>

<tr>
<td colspan="10" class="laligned sc1">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "ad") {
echo $_smarty_tpl->tpl_vars['lng']->value['packages']['ad_based'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['packages']['subscription_based'];
}?>&nbsp;|&nbsp;
	<i><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['words'];?>
</i>: <?php if ($_smarty_tpl->tpl_vars['v']->value['no_words'] == 0) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['unlimited'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['no_words'];
}?>&nbsp;|&nbsp;
	<i><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['days'];?>
</i>: <?php if ($_smarty_tpl->tpl_vars['v']->value['no_days'] == 0) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['unlimited'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['no_days'];
}?>&nbsp;|&nbsp;
	<i><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['pictures'];?>
</i>: <?php echo $_smarty_tpl->tpl_vars['v']->value['no_pictures'];?>
&nbsp;|&nbsp;
	<i><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['ads'];?>
</i>: <?php if ($_smarty_tpl->tpl_vars['v']->value['no_ads'] == 0) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['unlimited'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['no_ads'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['no_ads'] != 1 && $_smarty_tpl->tpl_vars['v']->value['type'] == "sub") {?>
	&nbsp;|&nbsp;<i><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['subscription_time'];?>
:</i>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['subscription_time']) {
echo $_smarty_tpl->tpl_vars['v']->value['subscription_time'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['days'];
}?>
		<?php if (!$_smarty_tpl->tpl_vars['v']->value['subscription_time']) {
echo $_smarty_tpl->tpl_vars['lng']->value['packages']['unlimited'];
}?>
		
	<?php }?>
	<span class="sc3">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['featured']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['featured'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['highlited']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['highlited'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['priority']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['priority_name'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['urgent']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['urgent'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['video']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['video'];
}?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['url']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['url'];
}?>
	</span>
	</td>
</tr>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>

</div> 


<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

$("a.delplan").click(function(event){
	var pkg_id = jQuery(this).attr("id").substr(3);
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
/admin/delete_plan.php?id='+pkg_id,
		'onClosed': function(){ location.reload(true); }
	});
});

$("a.disableplan").click(function(event){
	var pkg_id = jQuery(this).attr("id").substr(7);
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
/admin/disable_plan.php?id='+pkg_id,
		'onClosed': function(){ location.reload(true); }
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