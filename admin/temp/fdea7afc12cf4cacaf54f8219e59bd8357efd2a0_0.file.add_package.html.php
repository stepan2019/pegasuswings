<?php /* Smarty version 3.1.24, created on 2019-06-11 19:02:20
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_package.html" */ ?>
<?php
/*%%SmartyHeaderCode:10497023675cfffabc933363_63945983%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdea7afc12cf4cacaf54f8219e59bd8357efd2a0' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_package.html',
      1 => 1552733034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10497023675cfffabc933363_63945983',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'languages' => 0,
    'v' => 0,
    'package' => 0,
    'template_path' => 0,
    'appearance' => 0,
    'ads_settings' => 0,
    'array_priorities' => 0,
    'groups_list' => 0,
    'settings' => 0,
    'categories' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfffabc9a98f6_63213169',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfffabc9a98f6_63213169')) {
function content_5cfffabc9a98f6_63213169 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10497023675cfffabc933363_63945983';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	
bkLib.onDomLoaded(function() { nicEditors.allTextAreas({iconsPath : '../libs/nicEdit/nicEditorIcons.gif', fullPanel : true}) });

<?php echo '</script'; ?>
>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
 > <a href="manage_packages.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_packages'];?>
</a> > <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['packages']['create_package'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['packages']['edit_package'];
}?></div>

<div class="p30">
<form name="add_pkg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>


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
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['packages']['package_name'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['package']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']];
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
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['packages']['package_description'];?>
</div>
	<div class="right_form"><textarea name="description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="6" cols="60"><?php if (isset($_smarty_tpl->tpl_vars['package']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['package']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['package_type'];?>
</div>
	<div class="right_form">
		<input name="type" type="radio"  value="ad" <?php if (!isset($_smarty_tpl->tpl_vars['package']->value['type']) || (isset($_smarty_tpl->tpl_vars['package']->value['type']) && $_smarty_tpl->tpl_vars['package']->value['type'] == "ad")) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['ad_based'];?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['ad_based'];?>
)&nbsp;&nbsp;
		<input name="type" type="radio" value="sub" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['type']) && $_smarty_tpl->tpl_vars['package']->value['type'] == "sub") {?>checked="checked"<?php }?>  />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['subscription_based'];?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['subscription_based'];?>
)
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['amount'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['amount'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="amount" size="10" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['amount'])) {
echo $_smarty_tpl->tpl_vars['package']->value['amount'];
}?>"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
</div>
</div>

<div id="div_sub" <?php if (!isset($_smarty_tpl->tpl_vars['package']->value['type']) || (isset($_smarty_tpl->tpl_vars['package']->value['type']) && $_smarty_tpl->tpl_vars['package']->value['type'] == "ad")) {?>style="display: none"<?php }?>>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['subscription_time'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['subscription_time'];?>
</div>
	<div class="right_form">
		<input type="text" name="subscription_time" id="subscription_time" size="10" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['subscription_time']) && $_smarty_tpl->tpl_vars['package']->value['subscription_time']) {
echo $_smarty_tpl->tpl_vars['package']->value['subscription_time'];
} else { ?>0<?php }?>"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['no_ads'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['no_ads'];?>
</div>
	<div class="right_form"><input type="text" name="no_ads" id="no_ads" size="10" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['no_ads']) && $_smarty_tpl->tpl_vars['package']->value['no_ads']) {
echo $_smarty_tpl->tpl_vars['package']->value['no_ads'];
} else { ?>0<?php }?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['ads'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>

		</td></div>
</div>

</div>


<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['no_words'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['no_words'];?>
</div>
	<div class="right_form"><input type="text" name="no_words" size="10" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['no_words']) && $_smarty_tpl->tpl_vars['package']->value['no_words']) {
echo $_smarty_tpl->tpl_vars['package']->value['no_words'];
} else { ?>0<?php }?>"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['words'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['no_days'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['no_days'];?>
</div>
	<div class="right_form"><input type="text" name="no_days" size="10" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['no_days']) && $_smarty_tpl->tpl_vars['package']->value['no_days']) {
echo $_smarty_tpl->tpl_vars['package']->value['no_days'];
} else { ?>0<?php }?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['no_pictures'];?>
</div>
	<div class="right_form">
		<input type="text" name="no_pictures" size="10" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['no_pictures'])) {
echo $_smarty_tpl->tpl_vars['package']->value['no_pictures'];
}?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['pictures'];?>
&nbsp;
		<input name="photo_mandatory" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['photo_mandatory']) && $_smarty_tpl->tpl_vars['package']->value['photo_mandatory'] == 1) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['photo_mandatory'];?>

		</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['allow_usage'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['allow_usage'];?>
</div>
	<div class="right_form"><input type="text" size="4" name="allow" value="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['allow']) && $_smarty_tpl->tpl_vars['package']->value['allow']) {
echo $_smarty_tpl->tpl_vars['package']->value['allow'];
} else { ?>0<?php }?>">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['times'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured']) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['featured'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['featured'];?>
</div>
	<div class="right_form"><input name="featured" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['featured']) && $_smarty_tpl->tpl_vars['package']->value['featured'] == 1) {?> checked="checked" <?php }?>/></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited']) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['highlited'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['highlited'];?>
</div>
	<div class="right_form"><input name="highlited" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['highlited']) && $_smarty_tpl->tpl_vars['package']->value['highlited'] == 1) {?> checked="checked" <?php }?>/></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities']) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['priority'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['priority'];?>
</div>
	<div class="right_form">
		<select name="priority">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['no_priority'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['array_priorities']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['priority']) && $_smarty_tpl->tpl_vars['package']->value['priority'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent']) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['urgent'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['urgent'];?>
</div>
	<div class="right_form"><input name="urgent" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['urgent']) && $_smarty_tpl->tpl_vars['package']->value['urgent'] == 1) {?> checked="checked" <?php }?>/>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_video']) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['video'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['video'];?>
</div>
	<div class="right_form"><input name="video" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['video']) && $_smarty_tpl->tpl_vars['package']->value['video'] == 1) {?> checked="checked" <?php }?>/>
	
	
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_url']) {?>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['url'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['url'];?>
</div>
	<div class="right_form"><input name="url" type="checkbox" class="noborder" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['url']) && $_smarty_tpl->tpl_vars['package']->value['url'] == 1) {?> checked="checked" <?php }?>/>
	</div>
</div>
<?php }?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['groups'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['use_plan_for'];?>
</div>
	<div class="right_form">
		<input type="radio" name="choose_group" id="choose_group1" value="all" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['choose_group']) && $_smarty_tpl->tpl_vars['package']->value['choose_group'] != "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onclick="onChooseGroup(this.form)" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_groups'];?>

		&nbsp;&nbsp;<input type="radio" name="choose_group" id="choose_group2" value="choose" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['choose_group']) && $_smarty_tpl->tpl_vars['package']->value['choose_group'] == "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onclick="onChooseGroup(this.form)"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['choose_groups'];?>

	</div>
</div>

<div class="clearfix" id="div_groups" style="display: none">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
	<select multiple="multiple" size=8 name="groups[]" id="groups" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['groups_list']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_enabled']) {?><option value="1000"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['not_logged_in'];?>
</option><?php }?>
	</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['categories'];?>
" /></div>
	<div class="right_form">
		<input type="radio" name="choose_categ" id="choose_categ1" value="all" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['choose_categ']) && ($_smarty_tpl->tpl_vars['package']->value['choose_categ'] != "choose" || $_smarty_tpl->tpl_vars['package']->value['categories'] == 0)) {?>checked="checked"<?php }?> onchange="onChooseCateg(this.form)" onclick="onChooseCateg(this.form)" onclick="onChooseCateg(this.form)"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['all_categories'];?>

		&nbsp;&nbsp;<input type="radio" name="choose_categ" id="choose_categ2" value="choose" <?php if (isset($_smarty_tpl->tpl_vars['package']->value['choose_categ']) && $_smarty_tpl->tpl_vars['package']->value['choose_categ'] == "choose" && $_smarty_tpl->tpl_vars['package']->value['categories'] != 0) {?>checked="checked"<?php }?> onchange="onChooseCateg(this.form)" onclick="onChooseCateg(this.form)" onclick="onChooseCateg(this.form)"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['choose_categories'];?>

	</div>
</div>

<div class="clearfix" id="div_categories" style="display: none">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
	<select multiple="multiple" size=20 name="categories[]" id="categories" class="mselect">
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
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

var old_group_val="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['groups'])) {
echo $_smarty_tpl->tpl_vars['package']->value['groups'];
}?>";
if(old_group_val!="0") chooseGroup(document.forms["add_pkg"], old_group_val);


$('input[name=type]').change(function(){ 

if($('input[name=type]:checked').val()=="sub") $("#div_sub").show(); else  $("#div_sub").hide();

});


var old_categ_val="<?php if (isset($_smarty_tpl->tpl_vars['package']->value['categories'])) {
echo $_smarty_tpl->tpl_vars['package']->value['categories'];
}?>";
if(old_categ_val!="0") chooseCateg(document.forms["add_pkg"], old_categ_val);

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>