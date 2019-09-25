<?php /* Smarty version 3.1.24, created on 2019-06-11 17:38:06
         compiled from "/home/pegasuswings/public_html/admin/templates/default/data/gmap.html" */ ?>
<?php
/*%%SmartyHeaderCode:4653170595cffe6fec552f4_46425899%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e36fe3211d771dcf59c8aa413847c50078ab2be' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/data/gmap.html',
      1 => 1522154792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4653170595cffe6fec552f4_46425899',
  'variables' => 
  array (
    'v' => 0,
    'tmp' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe6fec6fab7_17817033',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe6fec6fab7_17817033')) {
function content_5cffe6fec6fab7_17817033 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4653170595cffe6fec552f4_46425899';
?>

function init_gmap() {

	markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
 = [];

	// get address value
	address = '';
	address_html = '';
	var loc = "<?php if (isset($_smarty_tpl->tpl_vars['v']->value['extensions'])) {
echo $_smarty_tpl->tpl_vars['v']->value['extensions'];
}?>";


	if(loc) {
	var location_fields = loc.split(",");

	for(i=0; i<location_fields.length; i++) {
		var f = location_fields[i];
		if(!f) continue;
		
		if ($('#'+f).length == 0) continue;

		var t = document.getElementById(f).type;
		if(t=="text" || t=="textarea")
			var l = document.getElementById(f).value;
		else {
			var selected_index = document.getElementById(f).selectedIndex;
			var l = document.getElementById(f).options[selected_index].value;	
		}
		if(!l) continue;
		if(address!='') { 
			address = address + ', ';
			address_html = address_html + '<br/>';
		}
		address = address + l;
		address_html = address_html + "<b>" + l + "</b>";
	}
	} // end if loc



	old=new Array();
	<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>old = splitMapsCoord('<?php echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
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

	

	map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
 = new google.maps.Map(document.getElementById("gm_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
"), myOptions);

	<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?>
	
	var marker = new google.maps.Marker({
		position: p,
		map:	map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>

	});
	
	markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.push(marker);
	
	if(address_html) {
		var infowindow = new google.maps.InfoWindow({
		content: address_html
		});
		infowindow.open(map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
, marker);
	}
	
	<?php }?>

	// get click coordinates
	google.maps.event.addListener(map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
, 'click', function(event) 
	
	{
		if (event.latLng) {
	
		map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.panTo(event.latLng);
		if (markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
) 
		
		{
			for (i in markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
) {
			markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
[i].setMap(null);
			}
			markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.length = 0;
		}

		marker = new google.maps.Marker({
			position: event.latLng,
			map:	map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>

		});

	
		markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.push(marker);
	

		if(address_html) {
			var infowindow = new google.maps.InfoWindow({
    				content: address_html
			});
			infowindow.open(map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
, marker);
		}

		var lat = event.latLng.lat();
		var long = event.latLng.lng();
		
		var h = map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.getZoom();
		if(IsNumeric(lat) && IsNumeric(long) && IsNumeric(h)) document.getElementById("<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
").value=lat+","+long+","+h;
	
	}

     });

	google.maps.event.addListener(map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
, 'zoomend', function(oldLevel, newLevel){
	
		var old_val = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
").value;
		
		if(old_val) {
		
			var arr = old_val.split(",");
			document.getElementById("<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
").value=arr[0]+","+arr[1]+","+newLevel;
		
		}

     });

} // end init_gmap
<?php }
}
?>