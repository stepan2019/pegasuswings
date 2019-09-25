<?php /* Smarty version 3.1.24, created on 2019-06-14 10:50:11
         compiled from "/home/pegasuswings/public_html/admin/templates/default/extra_visibility_options.html" */ ?>
<?php
/*%%SmartyHeaderCode:7534686695d037be392ed08_01097261%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1e131b5cbed0e67b96ff3e2d092d341ffb307ae' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/extra_visibility_options.html',
      1 => 1552744082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7534686695d037be392ed08_01097261',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'error' => 0,
    'successful' => 0,
    'template_path' => 0,
    'ads_settings' => 0,
    'languages' => 0,
    'v' => 0,
    'featured_error' => 0,
    'tmp_fp' => 0,
    'appearance' => 0,
    'demo' => 0,
    'array_featured_plans' => 0,
    'no_featured_plans' => 0,
    'priorities_error' => 0,
    'tmp' => 0,
    'array_priorities' => 0,
    'no_priorities' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d037be3a7b417_90326766',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d037be3a7b417_90326766')) {
function content_5d037be3a7b417_90326766 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '7534686695d037be392ed08_01097261';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/css/colorpicker.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/eye.js"><?php echo '</script'; ?>
>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['extra_visibility_options'];?>
</div>

<div class="p30">
<form name="settings" method="post" action="extra_visibility_options.php" enctype="multipart/form-data">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['successful']->value) && $_smarty_tpl->tpl_vars['successful']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['settings_saved'];?>
</div><?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['listings_options']," ","&nbsp;");?>
</strong></div></div>

<fieldset class="bordered">
  <legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['featured'];?>
</legend>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_featured'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_featured'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_featured" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['no_featured'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['no_featured'];?>
</div>
	<div class="right_form"><input type="text" name="no_featured" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['no_featured'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['no_featured_on_row'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['no_featured_on_row'];?>
</div>
	<div class="right_form"><input type="text" name="no_featured_on_row" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['no_featured_on_row'];?>
" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['featured_autoscroll'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['featured_autoscroll'];?>
</div>
	<div class="right_form"><input type="checkbox" name="featured_autoscroll" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['featured_autoscroll'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['prioritize_featured'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['prioritize_featured'];?>
</div>
	<div class="right_form"><input type="checkbox" name="prioritize_featured" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['prioritize_featured'] == 1) {?>checked="checked"<?php }?> /></div>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['description'];?>
</div>
	<div class="right_form"><input type="text" name="featured_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=70 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['featured_description'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_example'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['example_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="featured_example" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['featured_example'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['featured_example'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['featured_example'] != '') {?>&nbsp;&nbsp;<a href="extra_visibility_options.php?delete=featured"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

<br/>

<div class="form_subtitle_bg"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['featured_plans_info'];?>
" />&nbsp;<div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['featured_plans']," ","&nbsp;");?>
</strong></div>&nbsp;<img id="add_fp" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" style="margin-bottom: -7px;" /></div>

<?php if (isset($_smarty_tpl->tpl_vars['featured_error']->value) && $_smarty_tpl->tpl_vars['featured_error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['featured_error']->value;?>
</div><?php }?>

<div id="add_featured_plans" <?php if (!isset($_smarty_tpl->tpl_vars['featured_error']->value) && !$_smarty_tpl->tpl_vars['featured_error']->value) {?>style="display: none;"<?php }?>>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['price'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="fp_amount" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp_fp']->value['amount'])) {
echo $_smarty_tpl->tpl_vars['tmp_fp']->value['amount'];
}?>" maxlength="20" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['featured_expires'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['featured_expires'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="fp_no_days" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp_fp']->value['no_days'])) {
echo $_smarty_tpl->tpl_vars['tmp_fp']->value['no_days'];
}?>" maxlength="20" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Add_fp" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div>

<table cellpadding="0" cellspacing="0" align="center" width="80%" class="datatable">
<tr id="theading">
	<th width="70" class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['days'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['price'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="60" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_featured_plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_fp'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_fp']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
	<td><span id="span_no_days<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['no_days'];?>
</span>
	</td>
	<td><span id="span_amount<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['amount'];?>
</span><?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
</td>
	<td>
		<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_fp']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_fp']->value['index'] : null) != 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveUp(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'fp')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png">
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveDown(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'fp')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?>
	</td>
	<td>
		<a href="edit_featured_plan.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete']);?>
','fp');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_featured_plans']->value == 0) {?>
	<tr class="nicetablerow_even">
	<td colspan=4><?php echo $_smarty_tpl->tpl_vars['lng']->value['no_items'];?>
</td></tr>
<?php }?>
</table>

</fieldset>

<fieldset class="bordered">
  <legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['highlited'];?>
</legend>

<div class="clearfix mt20">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_highlited'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_highlited'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_highlited" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['highlited_color'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['highlited_color'];?>
</div>
	<div class="right_form"><input type="text" id="highlited_color" name="highlited_color" maxlength="7" size="10" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_color'];?>
" />
	<div id="colorSelector" style="display: inline;"><div style="background-color: <?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_color'];?>
"></div></div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

	(function($){

	var initLayout = function() {

		$('#colorSelector').ColorPicker({


			color: '#<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_color'];?>
',


			onShow: function (colpkr) {

				$(colpkr).fadeIn(500);

				return false;

			},

			onHide: function (colpkr) {

				$(colpkr).fadeOut(500);

				return false;

			},

			onChange: function (hsb, hex, rgb) {

				$('#colorSelector > div').css('backgroundColor', '#' + hex);

				$('#highlited_color').val("#"+hex);
			}

		});

	};

	EYE.register(initLayout, 'init');

})(jQuery)


$(document).ready(function() {

	$("#add_pri").click(function() {
		if($("#add_priorities").is(":visible")==false) $("#add_priorities").show();
		else $("#add_priorities").hide();
	});

	$("#add_fp").click(function() {
		if($("#add_featured_plans").is(":visible")==false) $("#add_featured_plans").show();
		else $("#add_featured_plans").hide();
	});

	$("a.imgfield").fancybox();

});



<?php echo '</script'; ?>
>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['highlited_expires'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['highlited_expires'];?>
</div>
	<div class="right_form"><input type="text" name="highlited_expires" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_expires'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['until_ad_expires'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['highlited_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['highlited_price'];?>
</div>
	<div class="right_form"><input type="text" name="highlited_price" size="4" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['description'];?>
</div>
	<div class="right_form"><input type="text" name="highlited_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=70 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_description'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_example'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['example_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="highlited_example" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['highlited_example'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['highlited_example'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['highlited_example'] != '') {?>&nbsp;&nbsp;<a href="extra_visibility_options.php?delete=highlited"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

</fieldset>

<fieldset class="bordered">
  <legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['priority'];?>
</legend>

<div class="clearfix mt20">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_priorities'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_priorities'];?>
</div>
	<div class="right_form"><input type="checkbox" class="noborder" name="enable_priorities" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['random_priorities'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['random_priorities'];?>
</div>
	<div class="right_form"><input type="checkbox" name="random_priorities" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['random_priorities'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['priorities_expires'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['priorities_expires'];?>
</div>
	<div class="right_form"><input type="text" name="priorities_expires" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['priorities_expires'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['until_ad_expires'];?>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['description'];?>
</div>
	<div class="right_form"><input type="text" name="priorities_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=70 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['priorities_description'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_example'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['example_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="priorities_example" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['priorities_example'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['priorities_example'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['priorities_example'] != '') {?>&nbsp;&nbsp;<a href="extra_visibility_options.php?delete=priorities"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

<br/>

<div class="form_subtitle_bg"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['priorities_info'];?>
" />&nbsp;<div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['priorities_list']," ","&nbsp;");?>
</strong></div>&nbsp;<img id="add_pri" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" style="margin-bottom: -7px;" /></div>

<?php if (isset($_smarty_tpl->tpl_vars['priorities_error']->value) && $_smarty_tpl->tpl_vars['priorities_error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['priorities_error']->value;?>
</div><?php }?>

<div id="add_priorities" <?php if (isset($_smarty_tpl->tpl_vars['priorities_error']->value) && !$_smarty_tpl->tpl_vars['priorities_error']->value) {?>style="display: none;"<?php }?>>

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
echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['name'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="name_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['name'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['price'];?>
<span class="mandatory"> *</span></div>
	<div class="right_form"><input type="text" name="price" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['price'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['price'];
}?>" maxlength="20" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Add" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="70" class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['name'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['price'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="60" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_priorities']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_pri'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_pri']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
	<td><span id="span_name<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
	</td>
	<td><span id="span_price<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span><?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
</td>
	<td>
		<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_pri']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_pri']->value['index'] : null) != 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveUp(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'pri')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png">
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveDown(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'pri')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?>
	</td>
	<td>
		<a href="edit_priority.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['priorities']['confirm_delete']);?>
','pri');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_priorities']->value == 0) {?>
	<tr class="nicetablerow_even">
	<td colspan=4><?php echo $_smarty_tpl->tpl_vars['lng']->value['priorities']['no_priorities'];?>
</td></tr>
<?php }?>
</table>

</fieldset>

<fieldset class="bordered">
  <legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['urgent'];?>
</legend>

<div class="clearfix mt20">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_urgent'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_urgent'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_urgent" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['urgent_expires'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['urgent_expires'];?>
</div>
	<div class="right_form"><input type="text" name="urgent_expires" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['urgent_expires'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['until_ad_expires'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['urgent_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['urgent_price'];?>
</div>
	<div class="right_form"><input type="text" name="urgent_price" size="4" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['urgent_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['description'];?>
</div>
	<div class="right_form"><input type="text" name="urgent_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=70 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['urgent_description'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_example'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['example_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="urgent_example" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['urgent_example'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['urgent_example'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['urgent_example'] != '') {?>&nbsp;&nbsp;<a href="extra_visibility_options.php?delete=urgent"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

</fieldset>


<fieldset class="bordered">
  <legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['video'];?>
</legend>

<div class="clearfix mt20">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_video'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_video'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_video" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_video'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['video_expires'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['video_expires'];?>
</div>
	<div class="right_form"><input type="text" name="video_expires" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['video_expires'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['until_ad_expires'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['video_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['video_price'];?>
</div>
	<div class="right_form"><input type="text" name="video_price" size="4" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['video_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['description'];?>
</div>
	<div class="right_form"><input type="text" name="video_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=70 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['video_description'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_example'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['example_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="video_example" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['video_example'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['video_example'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['video_example'] != '') {?>&nbsp;&nbsp;<a href="extra_visibility_options.php?delete=video"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

</fieldset>

<fieldset class="bordered">
  <legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['url'];?>
</legend>

<div class="clearfix mt20">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['enable_url'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_url'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_url" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_url'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['url_expires'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['url_expires'];?>
</div>
	<div class="right_form"><input type="text" name="url_expires" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['url_expires'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['until_ad_expires'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['url_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['url_price'];?>
</div>
	<div class="right_form"><input type="text" name="url_price" size="4" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['url_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_description'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['description'];?>
</div>
	<div class="right_form"><input type="text" name="url_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=70 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['url_description'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['option_example'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['example_image'];?>
</div>
	<div class="right_form">
		<input type="file" name="url_example" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['url_example'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['url_example'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['url_example'] != '') {?>&nbsp;&nbsp;<a href="extra_visibility_options.php?delete=url"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

</fieldset>

<br/>
<br/>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['account_options']," ","&nbsp;");?>
</strong></div></div>


<fieldset class="bordered">
  <legend><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['store'];?>
</legend>
<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['store_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['store_price'];?>
</div>
	<div class="right_form"><input type="text" name="store_price" size="4" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['store_price'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['store_availability'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['store_availability'];?>
</div>
	<div class="right_form"><input type="text" maxlength="50" name="store_availability" size=10 value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['store_availability'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['image_resizing'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['store_image_resizing'];?>
</div>
	<div class="right_form">
		<input type="checkbox" class="noborder" name="resize_store_image" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['resize_store_image']) {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['resize_store_image'];?>
&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['resize_width'];?>
&nbsp;<input type="text" name="resize_store_width" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['resize_store_width'];?>
" />&nbsp;px&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['resize_height'];?>
&nbsp;<input type="text" name="resize_store_height" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['resize_store_height'];?>
" />&nbsp;px
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['store_subdomain'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['store_subdomain'];?>
</div>
	<div class="right_form"><input type="checkbox" name="dealer_subdomain" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['dealer_subdomain']) {?>checked<?php }?> /></div>
</div>
</fieldset>

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

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>