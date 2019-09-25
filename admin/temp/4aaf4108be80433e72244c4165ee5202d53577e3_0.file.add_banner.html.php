<?php /* Smarty version 3.1.24, created on 2019-06-24 19:04:06
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_banner.html" */ ?>
<?php
/*%%SmartyHeaderCode:8480475995d111ea686c4a2_01233718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aaf4108be80433e72244c4165ee5202d53577e3' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_banner.html',
      1 => 1519561788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8480475995d111ea686c4a2_01233718',
  'variables' => 
  array (
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'banner' => 0,
    'live_site' => 0,
    'template_path' => 0,
    'array_banners_categories' => 0,
    'v' => 0,
    'extra_positions' => 0,
    'x' => 0,
    'subcats' => 0,
    'sections' => 0,
    'modules_array' => 0,
    'field_name' => 0,
    'bl_menu' => 0,
    'bl_elements' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d111ea68e1b16_01761684',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d111ea68e1b16_01761684')) {
function content_5d111ea68e1b16_01761684 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8480475995d111ea686c4a2_01233718';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['banners'];?>
 > <a href="manage_banners.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_banners'];?>
</a> > <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['add_banner'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['banners']['edit_banner'];
}?></div>

<div class="p30">
<form name="addbanner" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" enctype="multipart/form-data">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['banner_type'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="radio" class="noborder" name="btype" value="image" <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value || (isset($_smarty_tpl->tpl_vars['banner']->value['type']) && $_smarty_tpl->tpl_vars['banner']->value['type'] == "image")) {?>checked="checked"<?php }?> onchange="activateImage()" onClick="activateImage()" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['image'];?>

	<input type="radio" class="noborder" name="btype" value="code" <?php if ((isset($_smarty_tpl->tpl_vars['banner']->value['btype']) || isset($_smarty_tpl->tpl_vars['banner']->value['type'])) && ($_smarty_tpl->tpl_vars['banner']->value['type'] == 'code' || $_smarty_tpl->tpl_vars['banner']->value['type'] == 'code')) {?>checked="checked"<?php }?> onchange="activateCode()" onClick="activateCode()" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['code'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['title'];?>
</div>
	<div class="right_form"><input name="title" type="text" size="50" value="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['title'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['title'];
}?>" /></div>
</div>

<div class="clearfix" id="div_image" style="display: block">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['image'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="file" name="image" id="image">&nbsp;(<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['image_info'];?>
)
		<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['filename']) && $_smarty_tpl->tpl_vars['banner']->value['filename'] != '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/baners/<?php echo $_smarty_tpl->tpl_vars['banner']->value['filename'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a><?php }?></div>
</div>

<div class="clearfix" id="div_code" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['code'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><textarea name="code" rows=10 cols=60><?php if (isset($_smarty_tpl->tpl_vars['banner']->value['code'])) {?> <?php echo $_smarty_tpl->tpl_vars['banner']->value['code'];
}?></textarea></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['position'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form">
	<select name="position" id="position" onchange="chooseBannerPosition(this.form)">
	<?php
$_from = $_smarty_tpl->tpl_vars['array_banners_categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['banner']->value['position']) && $_smarty_tpl->tpl_vars['banner']->value['position'] == $_smarty_tpl->tpl_vars['v']->value['name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	<?php
$_from = $_smarty_tpl->tpl_vars['extra_positions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['banner']->value['position']) && $_smarty_tpl->tpl_vars['banner']->value['position'] == $_smarty_tpl->tpl_vars['x']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</option>
	<?php
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
?>
	</select>
	</div>
</div>

<div class="clearfix" id="div_link">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['link_to'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input name="link" type="text" size="50" value="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['link'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['link'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['date_start'];?>
</div>
	<div class="right_form"><input id="date_start" name="date_start" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['date_start']) && $_smarty_tpl->tpl_vars['banner']->value['date_start'] != '0000-00-00 00:00:00') {
echo $_smarty_tpl->tpl_vars['banner']->value['date_start'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['date_end'];?>
</div>
	<div class="right_form"><input id="date_end" name="date_end" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['date_end']) && $_smarty_tpl->tpl_vars['banner']->value['date_end'] != '0000-00-00 00:00:00') {
echo $_smarty_tpl->tpl_vars['banner']->value['date_end'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['max_impressions'];?>
</div>
	<div class="right_form"><input name="max_impressions" size="10" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['max_impressions'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['max_impressions'];
}?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['max_clicks'];?>
</div>
	<div class="right_form"><input name="max_clicks" size="10" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['max_clicks'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['max_clicks'];
}?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['use_banner_for'];?>
</div>
	<div class="right_form">
	<input type="radio" class="noborder" name="choose_categ" value="all" checked="checked" onchange="onChooseCateg(this.form)" onClick="onChooseCateg(this.form)" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['all_categories'];?>

	<input type="radio" class="noborder" name="choose_categ" value="choose" onchange="onChooseCateg(this.form)" onClick="onChooseCateg(this.form)" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['choose_categories'];?>

	</div>
</div>

<div class="clearfix" id="div_categories" style="display: none">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['choose_categories_info'];?>
" /></div>
	<div class="right_form">
	<select multiple="multiple" name="categories[]" id="categories" size="20" class="mselect">
	<?php
$_from = $_smarty_tpl->tpl_vars['subcats']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['str_start'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
</div>

<div class="clearfix" id="div_choose_sections">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
	<input type="radio" class="noborder" name="choose_section" value="all" checked="checked" onchange="onChooseSection(this.form)" onClick="onChooseSection(this.form)" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['all_sections'];?>

	<input type="radio" class="noborder" name="choose_section" value="choose" onchange="onChooseSection(this.form)" onClick="onChooseSection(this.form)" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['choose_sections'];?>

	</div>
</div>

<div class="clearfix" id="div_sections" style="display: none">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
	<select multiple="multiple" name="sections[]" id="sections" size="10" class="mselect">
	<?php
$_from = $_smarty_tpl->tpl_vars['sections']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
</div>

<?php if (in_array("banners_location",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
</div>
	<div class="right_form">
	<?php if ($_smarty_tpl->tpl_vars['bl_menu']->value) {?>
	<select name="location">
		<option value=""></option>
		<?php
$_from = $_smarty_tpl->tpl_vars['bl_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['banner']->value['location']) && $_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['banner']->value['location']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	<?php } else { ?>
	<input type="text" size="40" name="location" value="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['location'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['location'];
}?>" />
	<?php }?>
	</div>
</div>
<?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['open_new'];?>
</div>
	<div class="right_form"><input type="checkbox" name="open_new" <?php if (isset($_smarty_tpl->tpl_vars['banner']->value['open_new']) && $_smarty_tpl->tpl_vars['banner']->value['open_new']) {?>checked<?php }?>></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
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

var old_type="<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['banner']->value['type'];
} else {
if (isset($_smarty_tpl->tpl_vars['banner']->value['btype'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['btype'];
}
}?>";
if(old_type=="image") activateImage(); else if(old_type=="code") activateCode();
var old_categ_val="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['categories'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['categories'];
}?>";
var old_section_val="<?php if (isset($_smarty_tpl->tpl_vars['banner']->value['sections'])) {
echo $_smarty_tpl->tpl_vars['banner']->value['sections'];
}?>";
if(old_categ_val && old_categ_val!="0") chooseCateg(document.forms["addbanner"], old_categ_val);
if(old_section_val && old_section_val!="0") chooseSection(document.forms["addbanner"], old_section_val);


	$(document).ready(function() {
		$("a.imgfield").fancybox();
	});

	$(function() {
		$('#date_start').datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true
		});
		$('#date_end').datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true
		});
	});
	
	<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>