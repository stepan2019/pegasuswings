<?php /* Smarty version 3.1.24, created on 2019-06-11 17:49:34
         compiled from "/home/pegasuswings/public_html/admin/templates/default/custom_fields_form_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:732870055cffe9aec3d5b4_99229943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892e745081a4eb820c9141ffb996905012089f3b' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/custom_fields_form_list.html',
      1 => 1538041472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '732870055cffe9aec3d5b4_99229943',
  'variables' => 
  array (
    'fields_array' => 0,
    'v' => 0,
    'ads_settings' => 0,
    'modules_array' => 0,
    'fieldset' => 0,
    'pe_settings' => 0,
    'values_array' => 0,
    'lng' => 0,
    'live_site' => 0,
    'template_path' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe9aeca60b8_14558633',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe9aeca60b8_14558633')) {
function content_5cffe9aeca60b8_14558633 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.regex_replace.php';

$_smarty_tpl->properties['nocache_hash'] = '732870055cffe9aec3d5b4_99229943';
$_from = $_smarty_tpl->tpl_vars['fields_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "price" && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) {?>

<?php if (in_array("price_extra",$_smarty_tpl->tpl_vars['modules_array']->value) && (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value]) || isset($_smarty_tpl->tpl_vars['pe_settings']->value[0]))) {?>

<?php if (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['fieldset']->value])) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/custom_fields_form_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/custom_fields_form_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fieldset'=>0), 0);
?>

<?php }?>

<?php } else { ?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value['price'] >= 0) {
echo $_smarty_tpl->tpl_vars['values_array']->value['price_curr'];
} else { ?>-<?php }?></div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && isset($_smarty_tpl->tpl_vars['values_array']->value['auction']) && $_smarty_tpl->tpl_vars['values_array']->value['auction']['id']) {?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['auction'];?>
:</div>	
	<div class="right_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['auction_start_price'];?>
: <?php echo $_smarty_tpl->tpl_vars['values_array']->value['auction']['starting_price'];?>
</div>
</div>
<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "image") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" class="imgfield"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a><?php } else { ?>-<?php }?></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "file") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/download.png" class="tooltip mbm7" alt="" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['download'];?>
"/></a><?php } else { ?>-<?php }?></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "video") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if (isset($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>
	<video controls width="350px">
	<source src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" type="video/mp4">
	Your browser does not support the video tag.
	</video>
	<?php } else { ?>-<?php }?></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "audio") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if (isset($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>
	<audio controls>
	<source src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
	<?php } else { ?>-<?php }?></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "multiselect") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo implode($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],', ');
} else { ?>-<?php }?></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "google_maps") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>
	<div class="right_form">
		<?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
">
		<div id="gm_ro_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" style="width: 450px; height: 400px"></div>
		<?php } else { ?>-
		<?php }?>
	</div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 'checkbox_group') {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form">

	<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['extra_elements_array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
		<div class="lfloat <?php if (in_array($_smarty_tpl->tpl_vars['t']->value['name'],$_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']])) {?>check_on<?php } else { ?>check_off<?php }?>" >
		<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['prefix'];?>
 <?php }?>
		<?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['postfix'];?>
 <?php }?>
		</div>
	<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>

	</div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "depending") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name1'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) {
echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']];
} else { ?>-<?php }?></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name2'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) {
echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']];
} else { ?>-<?php }?></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 3) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name3'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) {
echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']];
} else { ?>-<?php }?></div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 4) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name4'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) {
echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']];
} else { ?>-<?php }?></div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['depending']['no'] >= 5) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name5'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) {
echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']];
} else { ?>-<?php }?></div>
</div>

<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "checkbox") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == 1 || $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == 'On') {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "youtube") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
echo smarty_modifier_regex_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],'/ width="[0-9]+"/',' width="500"'),'/ height="[0-9]+"/',' height="388"');
} else { ?>-<?php }?></div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] != "terms" && $_smarty_tpl->tpl_vars['v']->value['type'] != "password") {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</div>	
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {
if ($_smarty_tpl->tpl_vars['v']->value['type'] == "url") {?><a href="<?php echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" target="_blank"><?php }
echo $_smarty_tpl->tpl_vars['values_array']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
if ($_smarty_tpl->tpl_vars['v']->value['type'] == "url") {?></a><?php }
} else { ?>-<?php }?></div>
</div>

<?php }?>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
}
}
?>