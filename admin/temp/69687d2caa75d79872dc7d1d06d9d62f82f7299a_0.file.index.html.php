<?php /* Smarty version 3.1.24, created on 2019-06-11 16:39:44
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/dealers_page/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:13058819005cffd950ba5839_79872306%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69687d2caa75d79872dc7d1d06d9d62f82f7299a' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/dealers_page/index.html',
      1 => 1481897000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13058819005cffd950ba5839_79872306',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_dealers_page' => 0,
    'error' => 0,
    'info' => 0,
    'dp_settings' => 0,
    'groups' => 0,
    'v' => 0,
    'languages' => 0,
    'field_name' => 0,
    'fields' => 0,
    'search_fields' => 0,
    'menu_fields' => 0,
    'title_field' => 0,
    'meta_keywords_field' => 0,
    'meta_description_field' => 0,
    'template_path' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd950c172c0_47759019',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd950c172c0_47759019')) {
function content_5cffd950c172c0_47759019 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '13058819005cffd950ba5839_79872306';
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

<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['dealers_page'];?>
</div>

<div class="p30">
<form name="dealers" method="post" action="" enctype="multipart/form-data">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['all_with_store'];?>
</div>
	<div class="right_form"><input type="checkbox" name="all_with_store" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['all_with_store'] == 1) {?>checked<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['groups'];?>
</div>
	<div class="right_form">
		<select multiple="multiple" size=3 name="groups[]" id="groups" class="mselect">
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
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['dp_settings']->value['groups_array'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['link_to_navbar'];?>
</div>
	<div class="right_form"><input type="checkbox" name="link_to_navbar" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['link_to_navbar'] == 1) {?>checked<?php }?> /></div>
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
<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'field_name', null); ob_start(); ?>link_name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['link_name'];?>
</div>
	<div class="right_form"><input type="text" size="30" name="link_name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['dp_settings']->value[$_smarty_tpl->tpl_vars['field_name']->value];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['logo_field'];?>
</div>
	<div class="right_form">
		<select name="logo_field">
			<option value=""></option>
			<option value="store_banner"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['store_banner'];?>
</option>
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
		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "image") {?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['logo_field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['name_field'];?>
</div>
	<div class="right_form">
		<select name="name_field">
			<option value=""></option>
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
" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['name_field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['details_fields'];?>
</div>
	<div class="right_form">
		<select multiple="multiple" size=8 name="details_fields[]" id="details_fields" class="mselect">
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
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['dp_settings']->value['details_fields_array'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['search_fields'];?>
</div>
	<div class="right_form">
		<select multiple="multiple" size=8 name="search_fields[]" id="search_fields" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['search_fields']->value;
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
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['dp_settings']->value['search_fields_array'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['group_on_categories'];?>
</div>
	<div class="right_form"><input type="checkbox" name="group_on_categories" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['group_on_categories'] == 1) {?>checked<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['category_field'];?>
</div>
	<div class="right_form">
		<select name="category_field">
			<option value=""></option>
		<?php
$_from = $_smarty_tpl->tpl_vars['menu_fields']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['category_field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_dealers_page']->value['categories_on_row'];?>
</div>
	<div class="right_form"><input type="text" name="categories_on_row" size="4" value="<?php echo $_smarty_tpl->tpl_vars['dp_settings']->value['categories_on_row'];?>
" /></div>
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

<?php $_smarty_tpl->_capture_stack[0][] = array('title_field', 'title_field', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('meta_keywords_field', 'meta_keywords_field', null); ob_start(); ?>meta_keywords_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('meta_description_field', 'meta_description_field', null); ob_start(); ?>meta_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['page_title'];?>
</div>
	<div class="right_form"><input type="text" name="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="50" value="<?php if (isset($_smarty_tpl->tpl_vars['dp_settings']->value[$_smarty_tpl->tpl_vars['title_field']->value])) {
echo $_smarty_tpl->tpl_vars['dp_settings']->value[$_smarty_tpl->tpl_vars['title_field']->value];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['meta_keywords'];?>
</div>
	<div class="right_form"><textarea name="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="3" cols="50" /><?php if (isset($_smarty_tpl->tpl_vars['dp_settings']->value[$_smarty_tpl->tpl_vars['meta_keywords_field']->value])) {
echo $_smarty_tpl->tpl_vars['dp_settings']->value[$_smarty_tpl->tpl_vars['meta_keywords_field']->value];
}?></textarea></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['meta_description'];?>
</div>
	<div class="right_form"><textarea name="meta_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="3" cols="50" /><?php if (isset($_smarty_tpl->tpl_vars['dp_settings']->value[$_smarty_tpl->tpl_vars['meta_description_field']->value])) {
echo $_smarty_tpl->tpl_vars['dp_settings']->value[$_smarty_tpl->tpl_vars['meta_description_field']->value];
}?></textarea></div>
</div>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace("Search map"," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_map_search'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_map_search'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_map_search" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['enable_map_search'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['map_visible'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['map_visible'];?>
</div>
	<div class="right_form"><input type="checkbox" name="map_visible" <?php if ($_smarty_tpl->tpl_vars['dp_settings']->value['map_visible'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['search_location_fields'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['search_location_fields'];?>
</div>
	<div class="right_form">
		<div class="clearfix">
		<select id="search_location_fields_box" name="search_location_fields_box" multiple="multiple" size="6" class="mselect">
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
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['dp_settings']->value['array_search_location_fields'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="search_location_fields" name="search_location_fields" value="" />
		</div>

		<div class="information mb10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
		<div class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['important']['search_location_fields'];?>
</div>


	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php } else { ?>return checkDPSettings();<?php }?>'>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 


<?php echo '<script'; ?>
 type="text/javascript">

	$(function(){
		$('#search_location_fields_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
	});

	function checkDPSettings(){

	getMultiple(document.dealers.search_location_fields_box_right, document.dealers.search_location_fields);
	return true;

	}

	
<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>