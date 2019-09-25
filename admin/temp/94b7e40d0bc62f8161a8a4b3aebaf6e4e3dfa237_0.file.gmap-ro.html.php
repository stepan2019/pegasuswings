<?php /* Smarty version 3.1.24, created on 2019-06-11 17:49:34
         compiled from "/home/pegasuswings/public_html/admin/templates/default/data/gmap-ro.html" */ ?>
<?php
/*%%SmartyHeaderCode:12549029905cffe9aebe4394_11255996%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b7e40d0bc62f8161a8a4b3aebaf6e4e3dfa237' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/data/gmap-ro.html',
      1 => 1442945816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12549029905cffe9aebe4394_11255996',
  'variables' => 
  array (
    'gmf_prefix' => 0,
    'v' => 0,
    'tmp' => 0,
    'settings' => 0,
    'gm_prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe9aec368b6_62951767',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe9aec368b6_62951767')) {
function content_5cffe9aec368b6_62951767 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12549029905cffe9aebe4394_11255996';
?>

function init_gmap<?php if (isset($_smarty_tpl->tpl_vars['gmf_prefix']->value) && $_smarty_tpl->tpl_vars['gmf_prefix']->value) {
echo $_smarty_tpl->tpl_vars['gmf_prefix']->value;
}?>() {


	old=new Array();
	<?php if ($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>old = splitMapsCoord('<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
');<?php }?>
	
	if (old.length>0) {
	
		var lat = parseFloat(old[0]);
		var long = parseFloat(old[1]);
		var h = parseInt(old[2]);
	
	} else {
	
		var lat = <?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_lat'];?>
;
		var long = <?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_long'];?>
;
		var h = <?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_height'];?>
;
	
	}
	var p = new google.maps.LatLng( lat,long );
	var myOptions = {
		zoom: h,
		center: p,
		panControl: true,
		zoomControl: true,
		scaleControl: true,
		mapTypeControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	

	map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];
if (isset($_smarty_tpl->tpl_vars['gm_prefix']->value) && $_smarty_tpl->tpl_vars['gm_prefix']->value) {
echo $_smarty_tpl->tpl_vars['gm_prefix']->value;
}?> = new google.maps.Map(document.getElementById("gm_ro_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];
if (isset($_smarty_tpl->tpl_vars['gm_prefix']->value) && $_smarty_tpl->tpl_vars['gm_prefix']->value) {
echo $_smarty_tpl->tpl_vars['gm_prefix']->value;
}?>"), myOptions);

	
	var marker = new google.maps.Marker({
		position: p,
		map:	map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];
if (isset($_smarty_tpl->tpl_vars['gm_prefix']->value) && $_smarty_tpl->tpl_vars['gm_prefix']->value) {
echo $_smarty_tpl->tpl_vars['gm_prefix']->value;
}?>
	});
	
	<?php if (isset($_smarty_tpl->tpl_vars['v']->value['address']) && $_smarty_tpl->tpl_vars['v']->value['address']) {?>
	
	var infowindow = new google.maps.InfoWindow({
		
		content: "<?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
"
		
	});
	
	infowindow.open(map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];
if (isset($_smarty_tpl->tpl_vars['gm_prefix']->value) && $_smarty_tpl->tpl_vars['gm_prefix']->value) {
echo $_smarty_tpl->tpl_vars['gm_prefix']->value;
}?>, marker);
	<?php }?>

} // end init_gmap
<?php }
}
?>