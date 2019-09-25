<?php /* Smarty version 3.1.24, created on 2019-06-11 17:27:02
         compiled from "/home/pegasuswings/public_html/admin/templates/default/manage_custom_fields.html" */ ?>
<?php
/*%%SmartyHeaderCode:5701493535cffe466ea2499_52306579%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea84d91d04cd89f00eeab1d044c44a79dd05f209' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/manage_custom_fields.html',
      1 => 1486074784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5701493535cffe466ea2499_52306579',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_fieldsets' => 0,
    'v' => 0,
    'fset' => 0,
    'self' => 0,
    'array_fields' => 0,
    'default_fields_types' => 0,
    'no_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe467022307_05220317',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe467022307_05220317')) {
function content_5cffe467022307_05220317 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5701493535cffe466ea2499_52306579';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_fields'];?>
</div>

<div class="p30">
<form name="search" id="search" method="post" action="manage_saved_searches.php">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">
<a href="add_custom_field.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAll('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['custom_fields']['confirm_delete_all']);?>
','cf')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>
</div>

<div class="lfloat">
<select name="fieldset" onchange="doSel(this)">
	<option value="location.href='manage_custom_fields.php'"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_fieldsets'];?>
</option>
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
	<option value="location.href='?fset=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'" <?php if ($_smarty_tpl->tpl_vars['fset']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</select>
</div>

</div> 
<div class="rfloat">

<div class="buttonwrapper"><div class="button4-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
?fix=1<?php if ($_smarty_tpl->tpl_vars['fset']->value) {?>&fset=<?php echo $_smarty_tpl->tpl_vars['fset']->value;
}?>"><span class="button4-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['fix_order'];?>
</span></a>
</div></div>

</div>

<div class="clearfix"></div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="40" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width="40"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th width="40"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th width="300"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['name'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['fieldset'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['database_field'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['details'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="80" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr id="row<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['v']->value['read_only'] == 1) {?>sc3<?php }?>">
	<td id="checkbox<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><input type="checkbox" class="noborder" name="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="chk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td id="order<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
	<td id="name<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">
		<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "depending") {?>
		<div class="fieldsbutton"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['no'];?>
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['ie']['fields'];?>
</div>
		<a href="edit_depending_field.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['dep_id'];?>
&type=cf"><div class="edit-depending-button"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['edit_values'];?>
</div></a>
		<?php }?>
	</td>
	<td id="fieldset<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['fieldset'] == 0) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['fieldset_name'];
}?></td>
	<td id="type<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php if (in_array($_smarty_tpl->tpl_vars['v']->value['type'],$_smarty_tpl->tpl_vars['default_fields_types']->value)) {
echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields'][$_smarty_tpl->tpl_vars['v']->value['type']];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['type'];
}?></td>
	<td id="caption<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] != "depending") {
echo $_smarty_tpl->tpl_vars['v']->value['caption'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption1'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];
if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3 && $_smarty_tpl->tpl_vars['v']->value['depending']['caption3']) {?><br/><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];
}
if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4 && $_smarty_tpl->tpl_vars['v']->value['depending']['caption4']) {?><br/><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];
}
if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5 && $_smarty_tpl->tpl_vars['v']->value['depending']['caption5']) {?><br/><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];
}
}?></td>
	<td id="description<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" class="laligned">

	<?php if ($_smarty_tpl->tpl_vars['v']->value['editable']) {?><div class="mid-btn editablebutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['editable'];?>
</div><?php } else { ?><div class="mid-btn graybutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['not_editable'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['read_only']) {?><div class="mid-btn readonlybutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['read_only'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['required']) {?><div class="mid-btn requiredbutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['required'];?>
</div><?php } else { ?><div class="mid-btn graybutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['not_required'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['unique']) {?><div class="mid-btn privatebutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['unique'];?>
</div><?php }?>

	<div style="display: none;"><div id="data<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div></div>
	</td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onFieldMove(<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
,'up', 'cf', <?php if ($_smarty_tpl->tpl_vars['fset']->value) {
echo $_smarty_tpl->tpl_vars['fset']->value;
} else { ?>0<?php }?>)<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png">
		<?php }?>

		<span><?php if ($_smarty_tpl->tpl_vars['v']->value['last'] == 0) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onFieldMove(<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
, 'down', 'cf', <?php if ($_smarty_tpl->tpl_vars['fset']->value) {
echo $_smarty_tpl->tpl_vars['fset']->value;
} else { ?>0<?php }?>)<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?></span>
	</td>
	<td id="action<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" class="laligned">

		<a href="#data<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="inline"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['details'];?>
"></a>

		<a href="edit_custom_field.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['read_only'] == 0) {?><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['custom_fields']['confirm_delete']);?>
','cf');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_off.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /><?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','cf');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','cf');<?php }?>">
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

<?php if ($_smarty_tpl->tpl_vars['no_fields']->value == 0) {?>
	<tr><td colspan="9"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['no_fields'];?>
</td></tr>
<?php }?>

</table>

</form>
</div> 


<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

	$(".inline").fancybox({
		'width'         	: 630,
		'height'        	: 400,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false
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