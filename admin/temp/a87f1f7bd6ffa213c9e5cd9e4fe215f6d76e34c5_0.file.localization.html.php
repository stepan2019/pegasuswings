<?php /* Smarty version 3.1.24, created on 2019-06-11 19:11:08
         compiled from "/home/pegasuswings/public_html/admin/templates/default/localization.html" */ ?>
<?php
/*%%SmartyHeaderCode:20447655345cfffccc8bf240_47492940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a87f1f7bd6ffa213c9e5cd9e4fe215f6d76e34c5' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/localization.html',
      1 => 1443062238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20447655345cfffccc8bf240_47492940',
  'variables' => 
  array (
    'lng' => 0,
    'error' => 0,
    'successful' => 0,
    'array_timezones' => 0,
    'v' => 0,
    'appearance_settings' => 0,
    'languages' => 0,
    'array_charsets' => 0,
    'c' => 0,
    'other' => 0,
    'live_site' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfffccc962670_70121357',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfffccc962670_70121357')) {
function content_5cfffccc962670_70121357 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '20447655345cfffccc8bf240_47492940';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['localization'];?>
</div>

<div class="p30">
<form name="settings" method="post" action="localization.php" enctype="multipart/form-data">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['successful']->value) && $_smarty_tpl->tpl_vars['successful']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['settings_saved'];?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_timezone'];?>
</div>
	<div class="right_form">
		<select name="timezone">
		<?php
$_from = $_smarty_tpl->tpl_vars['array_timezones']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['appearance_settings']->value['timezone'] == $_smarty_tpl->tpl_vars['v']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['default_timezone'];?>

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
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['charset'];?>
</div>
	<div class="right_form">
		<select name="charset_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<option value="-1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['other'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['array_charsets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['appearance_settings']->value['charset'][$_smarty_tpl->tpl_vars['v']->value['id']] == $_smarty_tpl->tpl_vars['c']->value['id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
		</select>&nbsp;	<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['other_charset'];?>
&nbsp;
		<input type="text" name="other_charset_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" maxlength="30" size=15 value="<?php if ($_smarty_tpl->tpl_vars['other']->value) {
echo $_smarty_tpl->tpl_vars['appearance_settings']->value['charset'][$_smarty_tpl->tpl_vars['v']->value['id']];
}?>" />
	</div>
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
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['short_date_format'];?>
</div>
	<div class="right_form"><input type="text" maxlength="30" name="date_format_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=20 value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['date_format'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['short_date_format'];?>
</div>
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
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['long_date_format'];?>
</div>
	<div class="right_form"><input type="text" maxlength="30" name="date_format_long_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=20 value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['date_format_long'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['long_date_format'];?>
</div>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['price_format'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['price_format'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['decimals'];?>
&nbsp;<input type="text" size="5" name="price_format_decimals_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['price_format_decimals'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
"/>&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['decimals_point'];?>
&nbsp;<input type="text" size="5" name="price_format_point_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['price_format_point'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" />&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['thousands_separator'];?>
&nbsp;<input type="text" size="5" name="price_format_separator_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['price_format_separator'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" />
	</div>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['number_format'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['number_format'];?>
</div>
	<div class="right_form">
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['decimals'];?>
&nbsp;<input type="text" size="5" name="number_format_decimals_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['number_format_decimals'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
"/>&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['decimals_point'];?>
&nbsp;
		<input type="text" size="5" name="number_format_point_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['number_format_point'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
"/>&nbsp;&nbsp;
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['thousands_separator'];?>
&nbsp;
		<input type="text" size="5" name="number_format_separator_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['number_format_separator'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
"/>
	</div>
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
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['default_currency'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['default_currency'];?>
</div>
	<div class="right_form">
		<input type="text" maxlength="20" name="default_currency_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=10 value="<?php echo $_smarty_tpl->tpl_vars['appearance_settings']->value['default_currency'][$_smarty_tpl->tpl_vars['v']->value['id']];?>
" />
	</div>
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
echo $_smarty_tpl->tpl_vars['lng']->value['settings']['currency_position'];?>
</div>
	<div class="right_form">
		<input type="radio" class="noborder" name="currency_pos_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="0" <?php if ($_smarty_tpl->tpl_vars['appearance_settings']->value['currency_pos'][$_smarty_tpl->tpl_vars['v']->value['id']] == 0) {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['left'];?>
&nbsp;&nbsp;
		<input type="radio" class="noborder" name="currency_pos_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['appearance_settings']->value['currency_pos'][$_smarty_tpl->tpl_vars['v']->value['id']] == 1) {?> checked="checked" <?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['right'];?>

	</div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 

<div class="form_subtitle_bg"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['listing_currencies'];?>
" />&nbsp;<div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['settings']['listing_currencies']," ","&nbsp;");?>
</strong></div></div>


<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['lists']['add_currency'];?>
</div>
	<div class="right_form"><input type="text" name="name" />
	<div class="buttons"<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="add_currencies" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
	</div>
	</div>
	
</div>



<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="50" class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['lists']['currency'];?>
</th>
	<th width="60"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['order'];?>
</th>
	<th width="50" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
	<td><div id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</div></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['currency'];?>
</td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['order_no'] > 1) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveUp(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'currency')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_up'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up-off.png">
		<?php }?></span>

		<span><?php if (!isset($_smarty_tpl->tpl_vars['v']->value['last']) || $_smarty_tpl->tpl_vars['v']->value['last'] == 0) {?>
		<a href="javascript:;" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveDown(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'currency')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['move_down'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?></span>
	</td>
	<td>
		<span><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['custom_fields']['confirm_delete']);?>
','currency');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a></span>
		<span>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

</table>

</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>