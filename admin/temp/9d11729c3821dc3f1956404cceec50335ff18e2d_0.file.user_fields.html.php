<?php /* Smarty version 3.1.24, created on 2019-06-11 17:08:11
         compiled from "/home/pegasuswings/public_html/admin/templates/default/user_fields.html" */ ?>
<?php
/*%%SmartyHeaderCode:2665651685cffdffbdf1b75_93584969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d11729c3821dc3f1956404cceec50335ff18e2d' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/user_fields.html',
      1 => 1486074816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2665651685cffdffbdf1b75_93584969',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'demo' => 0,
    'group' => 0,
    'array_groups' => 0,
    'v' => 0,
    'self' => 0,
    'fset' => 0,
    'array_fields' => 0,
    'default_fields_types' => 0,
    'settings' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdffbe5a2b0_94108131',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdffbe5a2b0_94108131')) {
function content_5cffdffbe5a2b0_94108131 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2665651685cffdffbdf1b75_93584969';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['user_fields'];?>
</div>

<div class="p30">
<form name="fields" id="fields" method="post" action="user_fields.php">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">
<a href="add_user_field.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteAll('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['custom_fields']['confirm_delete_all']);?>
','uf')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt=""></a>
</div>

<div class="lfloat">
<select name="group" onchange="doSel(this)">
	<option value="location.href='user_fields.php'"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_groups'];?>
</option>
	<option value="location.href='?group=-1'" <?php if ($_smarty_tpl->tpl_vars['group']->value == -1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['not_logged_in'];?>
</option>
<?php
$_from = $_smarty_tpl->tpl_vars['array_groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="location.href='?group=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'" <?php if ($_smarty_tpl->tpl_vars['group']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
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
?fix=1<?php if (isset($_smarty_tpl->tpl_vars['fset']->value) && $_smarty_tpl->tpl_vars['fset']->value) {?>&fset=<?php echo $_smarty_tpl->tpl_vars['fset']->value;
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
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['database_field'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['details'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
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
" class="noborder<?php if ($_smarty_tpl->tpl_vars['v']->value['read_only'] == 1) {?> sc3<?php }
if (!$_smarty_tpl->tpl_vars['v']->value['active']) {?> inactive<?php }?>">
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
&type=uf"><div class="edit-depending-button"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['edit_values'];?>
</div></a>
		<?php }?>
	</td>
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
<br><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption2'];
if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3 && $_smarty_tpl->tpl_vars['v']->value['depending']['caption3']) {?><br><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption3'];
}
if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4 && $_smarty_tpl->tpl_vars['v']->value['depending']['caption4']) {?><br><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption4'];
}
if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5 && $_smarty_tpl->tpl_vars['v']->value['depending']['caption5']) {?><br><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['caption5'];
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
	<?php if ($_smarty_tpl->tpl_vars['v']->value['public']) {?><div class="mid-btn publicbutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['public'];?>
</div><?php } else { ?><div class="mid-btn privatebutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['not_public'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['caption'] == $_smarty_tpl->tpl_vars['settings']->value['contact_name_field']) {?><div class="mid-btn contactbutton change_contact_name" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['contact_name_field'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['unique']) {?><div class="mid-btn privatebutton"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['unique'];?>
</div><?php }?>
	
	<div style="display: none;"><div id="data<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div></div>
	</td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onFieldMove(<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
, 'up', 'uf',0)<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt="" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png" />
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['last'] == 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onFieldMove(<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
, 'down', 'uf',0)<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt="" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png" />
		<?php }?>
	</td>
	<td id="action<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" class="laligned">

		<a href="#data<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="inline"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['details'];?>
" /></a>

		<a href="edit_user_field.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "password" || $_smarty_tpl->tpl_vars['v']->value['type'] == "user_email") {?>
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" onclick="<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 'password') {?>alert('You cannot disable the password field!')<?php } else { ?>alert('You cannot disable the email address field!')<?php }?>">
		<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','uf');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="" />
			</a>
		<?php } else { ?>
			<a href="javascript:;" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onclick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');"<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['caption'] == $_smarty_tpl->tpl_vars['settings']->value['contact_name_field']) {?>class="disable_contact_name"<?php } else { ?>onclick="<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "username") {?>alert('You disabled the username field, from now on users will login with their email addresses! As administrator you can login with either administrator username or email!');<?php }?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','uf');"<?php }?>>
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="" />
			</a>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['read_only'] == 0) {?><a href="javascript:;"  <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onclick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');"<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['caption'] == $_smarty_tpl->tpl_vars['settings']->value['contact_name_field']) {?>class="delete_contact_name"<?php } else { ?>onclick="onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['custom_fields']['confirm_delete']);?>
','uf');"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_off.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""><?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

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

$(".disable_contact_name").fancybox({
	'width'         		: 630,
	'height'        		: 400,
	'transitionIn'		: 'none',
	'transitionOut'		: 'none',
	'margin'		: '0',
	'padding'		: '0',
	'titleShow'		: false,
	'type'			: 'iframe',
	'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/change_contact_name.php?disable=1',
	'onClosed': function() {
			parent.location.reload(true);
	}
});

$(".delete_contact_name").fancybox({
	'width'         		: 630,
	'height'        		: 400,
	'transitionIn'		: 'none',
	'transitionOut'		: 'none',
	'margin'		: '0',
	'padding'		: '0',
	'titleShow'		: false,
	'type'			: 'iframe',
	'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/change_contact_name.php?delete=1',
	'onClosed': function() {
			parent.location.reload(true);
	}
});

$(".change_contact_name").fancybox({
	'width'         		: 630,
	'height'        		: 400,
	'transitionIn'		: 'none',
	'transitionOut'		: 'none',
	'margin'		: '0',
	'padding'		: '0',
	'titleShow'		: false,
	'type'			: 'iframe',
	'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/change_contact_name.php',
	'onClosed': function() {
			parent.location.reload(true);
	}
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