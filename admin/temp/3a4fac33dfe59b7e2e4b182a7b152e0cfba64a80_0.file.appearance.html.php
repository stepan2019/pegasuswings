<?php /* Smarty version 3.1.24, created on 2019-06-11 16:31:55
         compiled from "/home/pegasuswings/public_html/admin/templates/default/appearance.html" */ ?>
<?php
/*%%SmartyHeaderCode:6724889845cffd77b879c60_15219305%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4fac33dfe59b7e2e4b182a7b152e0cfba64a80' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/appearance.html',
      1 => 1457820160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6724889845cffd77b879c60_15219305',
  'variables' => 
  array (
    'lng' => 0,
    'error' => 0,
    'successful' => 0,
    'templates' => 0,
    'v' => 0,
    'appearance_array' => 0,
    'admin_templates' => 0,
    'admin_languages' => 0,
    'template_path' => 0,
    'live_site' => 0,
    'languages' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd77b8ccbd4_99221115',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd77b8ccbd4_99221115')) {
function content_5cffd77b8ccbd4_99221115 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6724889845cffd77b879c60_15219305';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['site_appearance'];?>
</div>

<div class="p30">
<form name="settings" method="post" action="appearance.php" enctype="multipart/form-data">

<div class="form_container">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['successful']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['settings_saved'];?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['template'];?>
</div>
	<div class="right_form">
		<div class="lfloat">
		<select name="template" id="template">
		<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['template'] == $_smarty_tpl->tpl_vars['v']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		</div>
		<div style="display: none;" class="lfloat" id="div_colorschemes">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['colorscheme'];?>
:&nbsp;<select name="template_colorscheme" id="template_colorscheme"></select>
		</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['admin_template'];?>
</div>
	<div class="right_form">
		<select name="admin_template">
		<?php
$_from = $_smarty_tpl->tpl_vars['admin_templates']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['admin_template'] == $_smarty_tpl->tpl_vars['v']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['admin_language'];?>
</div>
	<div class="right_form">
		<select name="admin_language">
			<?php
$_from = $_smarty_tpl->tpl_vars['admin_languages']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['admin_language'] == $_smarty_tpl->tpl_vars['v']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['show_header'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['show_header'];?>
</div>
	<div class="right_form"><input type="checkbox" name="show_header" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['show_header'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['img_header'];?>
</div>
	<div class="right_form">
		<input type="file" name="header_pic" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['header_pic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['header_pic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['header_pic'] != '') {?>&nbsp;&nbsp;<a href="appearance.php?delete=header_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a><?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['small_img_header'];?>
" />&nbsp<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['small_img_header'];?>
</div>
	<div class="right_form">
		<input type="file" name="small_header_pic" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['small_header_pic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['small_header_pic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['small_header_pic'] != '') {?>&nbsp;&nbsp;<a href="appearance.php?delete=small_header_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a><?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['header_link'];?>
</div>
	<div class="right_form"><input type="text" maxlength="200" name="header_pic_link" size=50 value="<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['header_pic_link'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['show_footer'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['show_footer'];?>
</div>
	<div class="right_form"><input type="checkbox" name="show_footer" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['show_footer'] == 1) {?> checked="checked" <?php }?>/></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['img_footer'];?>
</div>
	<div class="right_form">
		<input type="file" name="footer_pic"/>&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['footer_pic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['footer_pic'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png" /></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['footer_pic'] != '') {?>&nbsp;&nbsp;<a href="appearance.php?delete=footer_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a><?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['footer_link'];?>
</div>
	<div class="right_form"><input type="text" maxlength="200" name="footer_pic_link" size=50 value="<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['footer_pic_link'];?>
"></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['show_footer_categories'];?>
</div>
	<div class="right_form"><input type="checkbox" name="show_footer_categ" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['show_footer_categ'] == 1) {?> checked="checked" <?php }?>/></div>
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
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['footer_text'];?>
</div>
	<div class="right_form">
		<input type="text" maxlength="255" name="footer_text_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=60 value="<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['footer_text'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" />
	</div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['site_width'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['site_width'];?>
</div>
	<div class="right_form"><input type="text" maxlength="4" name="outer_table" size=10 value="<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['outer_table'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['first_page_type'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['first_page_type'];?>
</div>
	<div class="right_form">
		<input type="radio" name="first_page_type" value="1" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['first_page_type'] == 1) {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['browse_categories'];?>
&nbsp;&nbsp;
		<input type="radio" name="first_page_type" value="2" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['first_page_type'] == 2) {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['tree_categories'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['categs_per_row'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['categs_per_row'];?>
</div>
	<div class="right_form"><input type="text" maxlength="4" name="max_cat_per_row" size="10" value="<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['max_cat_per_row'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['categ_count_ads'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['categ_count_ads'];?>
</div>
	<div class="right_form"><input type="checkbox" name="categ_count_ads" <?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['categ_count_ads']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['ads_per_page'];?>
</div>
	<div class="right_form"><input type="text" maxlength="4" name="ads_per_page" size="10" value="<?php echo $_smarty_tpl->tpl_vars['appearance_array']->value['ads_per_page'];?>
" /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 



<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
	$("a.imgfield").fancybox();
	getTemplates();

	$("#template").on('change',function(){

		getTemplates();

	});


});

function getTemplates() {

		var current = '<?php if ($_smarty_tpl->tpl_vars['appearance_array']->value['template_colorscheme']) {
echo $_smarty_tpl->tpl_vars['appearance_array']->value['template_colorscheme'];
}?>';

		$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=tpl&tpl="+$("#template").val(),
		data		: $(this).serializeArray(),
		success: function(data) {

			if(data==0) { $("#div_colorschemes").hide(); return; }

			$("#template_colorscheme").empty();
			// colorschemes exist
			var split_cs=data.split("|");
			var no = split_cs.length;

			for (var j=0;j<no;j++) {

				if(current==split_cs[j])
					option = $('<option></option>').attr("value", split_cs[j]).text(split_cs[j]).attr('selected', 'selected');
				else 
					option = $('<option></option>').attr("value", split_cs[j]).text(split_cs[j]);
				$("#template_colorscheme").append(option);
				$("#div_colorschemes").show();

			}

			} // end data
 		});// end ajax

}

<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>