<?php /* Smarty version 3.1.24, created on 2019-06-12 17:08:38
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_category.html" */ ?>
<?php
/*%%SmartyHeaderCode:18852432915d0131966376d7_24170901%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a699b9c9a7c93da85a465ce7cc2de8e3f5f830ca' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_category.html',
      1 => 1514648120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18852432915d0131966376d7_24170901',
  'variables' => 
  array (
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'languages' => 0,
    'v' => 0,
    'live_site' => 0,
    'tmp' => 0,
    'template_path' => 0,
    'slug' => 0,
    'array_categories' => 0,
    'array_sets' => 0,
    'groups_list' => 0,
    'settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d0131966cfdf4_65988484',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d0131966cfdf4_65988484')) {
function content_5d0131966cfdf4_65988484 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18852432915d0131966376d7_24170901';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <a href="manage_categories.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_categories'];?>
</a> > <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['categories']['edit_category'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['categories']['add_category'];
}?></div>

<div class="p30">
<form name="addcateg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" enctype="multipart/form-data">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
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
echo $_smarty_tpl->tpl_vars['lng']->value['categories']['name'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" name="name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['default']) {?>id="categ_name"<?php }?> size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']];
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
echo $_smarty_tpl->tpl_vars['lng']->value['categories']['description'];?>
</div>
	<div class="right_form"><textarea name="description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="3" cols="90"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['description'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['info']['category_slug'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['slug'];?>
</div>
	<div class="right_form"><input type="text" size="40" name="slug" id="slug" value="<?php if (isset($_smarty_tpl->tpl_vars['slug']->value) && $_smarty_tpl->tpl_vars['slug']->value) {
echo $_smarty_tpl->tpl_vars['slug']->value;
}?>" />
	<span class="ok hidden" id="slug_ok"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['info']['slug_ok'];?>
</span><span class="not-ok hidden" id="slug_error"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['error']['slug_exists'];?>
</span>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['picture'];?>
</div>
	<div class="right_form">
	<input type="file" name="picture" />
	<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value && isset($_smarty_tpl->tpl_vars['tmp']->value['picture']) && $_smarty_tpl->tpl_vars['tmp']->value['picture']) {?>
	&nbsp;
	<img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/categories/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['picture'];?>
" />
	&nbsp;<a href="edit_category.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&delete_picture=1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
	<?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['icon'];?>
</div>
	<div class="right_form">
	<input type="file" name="icon" />
	<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value && isset($_smarty_tpl->tpl_vars['tmp']->value['icon']) && $_smarty_tpl->tpl_vars['tmp']->value['icon']) {?>
	&nbsp;
	<img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/categories/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['icon'];?>
" />
	&nbsp;<a href="edit_category.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&delete_icon=1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
	<?php }?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['parent_category'];?>
</div>
	<div class="right_form">
	<select name="parent_id">
	<option value="0"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['no_parent'];?>
</option>
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
		<?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || ($_smarty_tpl->tpl_vars['id']->value != $_smarty_tpl->tpl_vars['v']->value['id'] && $_smarty_tpl->tpl_vars['v']->value['parent_id'] != $_smarty_tpl->tpl_vars['id']->value)) {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['parent_id']) && $_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['tmp']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php } else { ?>
		<optgroup label="<?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['set'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
	<select name="fieldset">
	<?php
$_from = $_smarty_tpl->tpl_vars['array_sets']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['fieldset']) && $_smarty_tpl->tpl_vars['tmp']->value['fieldset'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
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
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['categories']['page_title'];?>
</div>
	<div class="right_form"><input name="page_title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" type="text" size="50" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['page_title'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['page_title'][$_smarty_tpl->tpl_vars['v']->value['id']];
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
echo $_smarty_tpl->tpl_vars['lng']->value['categories']['meta_keywords'];?>
</div>
	<div class="right_form"><textarea name="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=6 cols=50><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_keywords'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_keywords'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
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
echo $_smarty_tpl->tpl_vars['lng']->value['categories']['meta_description'];?>
</div>
	<div class="right_form"><textarea name="meta_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=6 cols=50><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_description'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_description'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['categories']['allow_to_post'];?>
</div>
	<div class="right_form">
		<input type="radio" name="choose_group" id="choose_group1" value="all" <?php if (!isset($_smarty_tpl->tpl_vars['tmp']->value['choose_group']) || $_smarty_tpl->tpl_vars['tmp']->value['choose_group'] != "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onclick="onChooseGroup(this.form)" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_groups'];?>
&nbsp;&nbsp;
		<input type="radio" name="choose_group" id="choose_group2" value="choose" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['choose_group']) && $_smarty_tpl->tpl_vars['tmp']->value['choose_group'] == "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onclick="onChooseGroup(this.form)"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['choose_groups'];?>

	</div>
</div>

<div class="clearfix" id="div_groups" style="display: none">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><select multiple="multiple" size=8 name="groups[]" id="groups" class="mselect">
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
		</select></div>
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
>

var old_group_val="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['groups'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['groups'];
}?>";
if(old_group_val!=0) chooseGroup(document.forms["addcateg"], old_group_val);

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
jQuery(document).ready(function() {

	$("#categ_name").focusout(function() {
	
		$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/actions.php?object=slug&action=make&str="+$("#categ_name").val(),
		data		: $(this).serializeArray(),
		success: function(data) {

				$("#slug").val(data);
				
				// if id
				id_str='';
				<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
				id_str='&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';
				<?php }?>
				
				// check if slug exists
				$.ajax({
				type		: "GET",
				cache		: false,
				url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/actions.php?object=slug&action=exists&slug="+data+id_str,
				data		: $(this).serializeArray(),
				success: function(data) {
					if(data==1) {
						$("#slug_ok").hide();
						$("#slug_error").show();
					}
					else {
						$("#slug_ok").show();
						$("#slug_error").hide();
					}
				} // end success
				
				}); // end ajax
				
			} // end data
		});// end ajax

	});// end focustout

}); // end document ready

<?php }?>

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>