<?php /* Smarty version 3.1.24, created on 2019-06-11 19:48:05
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_rss.html" */ ?>
<?php
/*%%SmartyHeaderCode:7813817835d0005756b85d6_09893671%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7ac8fa213275034a3d90402564aea496b12596' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_rss.html',
      1 => 1483812750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7813817835d0005756b85d6_09893671',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'tmp' => 0,
    'languages' => 0,
    'v' => 0,
    'template_path' => 0,
    'categories' => 0,
    'packages' => 0,
    'groups' => 0,
    'settings' => 0,
    'fields' => 0,
    'logo_fields' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d000575737b92_53019260',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d000575737b92_53019260')) {
function content_5d000575737b92_53019260 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7813817835d0005756b85d6_09893671';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/css/jquery.comboselect.css" />

<!--[if IE]>
<style type="text/css">
select.csleft, select.csright {
	width: 100px;
}
</style>
<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.selso.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.comboselect.js"><?php echo '</script'; ?>
>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <a href="rss.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['rss'];?>
</a> > <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['rss']['add_rss'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['rss']['edit_rss'];
}?></div>

<div class="p30">
<form name="addrss" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" enctype="multipart/form-data">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enabled'];?>
</div>
	<div class="right_form"><input type="checkbox" class="noborder" name="enabled" checked = "checked" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</div>
	<div class="right_form"><input type="radio" name="type" value="1" <?php if (!isset($_smarty_tpl->tpl_vars['tmp']->value['type']) || $_smarty_tpl->tpl_vars['tmp']->value['type'] == 1) {?>checked = "checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
&nbsp;&nbsp;<input type="radio" name="type" value="2" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['type']) && $_smarty_tpl->tpl_vars['tmp']->value['type'] == 2) {?>checked = "checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
</div>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['info']['short_title'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['short_title'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" name="short_title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=20 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['short_title'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['short_title'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['info']['title'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['title'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" name="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=50 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['title'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['title'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['info']['description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['description'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><textarea name="description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=3 cols=40><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['info']['feedburner_link'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['feedburner_link'];?>
</div>
	<div class="right_form"><input type="text" name="feedburner" size=50 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['feedburner'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['feedburner'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['link'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" name="link" size=50 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['link'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['link'];
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['info']['language'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['language'];?>
</div>
	<div class="right_form"><input type="text" name="language" size=10 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['language'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['language'];
}?>" /></div>
</div>

<div id="div_listings" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['type']) && $_smarty_tpl->tpl_vars['tmp']->value['type'] == 2) {?>style="display: none"<?php }?>>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['parameters'];?>
</div>
	<div class="right_form">
		<table>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['package'];?>
</td></tr>
		<tr>
		<td><select name="category[]" id="category" multiple="multiple" size=6 class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['category_id']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['category_id'] && in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['tmp']->value['param']['category_id'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select></td>

		<td><select name="package[]" id="package" multiple="multiple" size=6 class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['packages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['package_id']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['package_id'] && in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['tmp']->value['param']['package_id'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select></td>
	</tr></table>

	</div>
</div>
</div> 

<div id="div_users" <?php if (!isset($_smarty_tpl->tpl_vars['tmp']->value['type']) || $_smarty_tpl->tpl_vars['tmp']->value['type'] == 1) {?>style="display: none"<?php }?>>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['parameters'];?>
</div>
	<div class="right_form">
		<table>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['user_groups'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_by'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order_way'];?>
</td></tr>
		<tr>
		<td valign="top"><select name="group[]" id="group" multiple="multiple" size=3 class="mselect">
			<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['group']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['group'] && in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['tmp']->value['param']['group'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			<option value="-1" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['store']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['store'][0] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['stats']['users_with_store'];?>
</option>
		</select></td>

		<td valign="top"><select name="order_by">
			<option value="registration_date" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['order_by']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['order_by'][0] == "registration_date") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_date'];?>
</option>
			<option value="username" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['order_by']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['order_by'][0] == "username") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_username'];?>
</option>
			<option value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['contact_name_field'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['order_by']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['order_by'][0] == $_smarty_tpl->tpl_vars['settings']->value['contact_name_field']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_contact_name'];?>
</option>
			<option value="listings" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['order_by']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['order_by'][0] == "listings") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_listings'];?>
</option>
			<option value="group" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['order_by']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['order_by'] == "group") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['order_by_group'];?>
</option>
		</select></td>
		<td valign="top"><select name="order_way">
			<option value="desc" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['order_way']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['order_way'][0] == "desc") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
			<option value="asc" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['param']['order_way']) && $_smarty_tpl->tpl_vars['tmp']->value['param']['order_way'][0] == "asc") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
		</select>
		</td>
	</tr></table>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['show_fields'];?>
</div>
	<div class="right_form">
		<select id="show_fields_box" name="show_fields_box" multiple="multiple" size="6" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['array_show_fields']) && in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['tmp']->value['array_show_fields'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="show_fields" name="show_fields" value="" />
		<div class="lfloat information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['logo_field'];?>
</div>
	<div class="right_form">
		<select id="logo_field" name="logo_field" class="mselect" size="6" style="width: 100px;">
		<?php
$_from = $_smarty_tpl->tpl_vars['logo_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['logo_field']) && $_smarty_tpl->tpl_vars['v']->value['caption'] == $_smarty_tpl->tpl_vars['tmp']->value['logo_field']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

</div> 

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['info']['no_items'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['no_items'];?>
</div>
	<div class="right_form"><input type="text" name="no_items" size=5 value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['no_items'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['no_items'];
} else { ?>100<?php }?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php } else { ?>onclick="getMultiple(document.addrss.show_fields_box_right, document.addrss.show_fields);";<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];
}?>" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 

</form>
</div>


<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function() {

$('input[type=radio][name=type]').change(function() {
        if (this.value == '1') {
            $("#div_listings").show();
            $("#div_users").hide();
        }
        else if (this.value == '2') {
            $("#div_listings").hide();
            $("#div_users").show();
        }
    });
});

$(function(){
	$('#show_fields_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
});

	<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>