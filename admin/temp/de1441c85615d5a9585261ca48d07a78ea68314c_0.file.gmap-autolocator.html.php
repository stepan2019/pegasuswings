<?php /* Smarty version 3.1.24, created on 2019-06-11 17:38:06
         compiled from "/home/pegasuswings/public_html/admin/templates/default/data/gmap-autolocator.html" */ ?>
<?php
/*%%SmartyHeaderCode:9967982615cffe6fec73861_61777880%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de1441c85615d5a9585261ca48d07a78ea68314c' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/data/gmap-autolocator.html',
      1 => 1522154946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9967982615cffe6fec73861_61777880',
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe6fec7e913_44251317',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe6fec7e913_44251317')) {
function content_5cffe6fec7e913_44251317 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9967982615cffe6fec73861_61777880';
?>
	function autoLocator_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
() {

		var loc = "<?php if (isset($_smarty_tpl->tpl_vars['v']->value['extensions'])) {
echo $_smarty_tpl->tpl_vars['v']->value['extensions'];
}?>";
		var location_fields = loc.split(",");

		var address = '';
		var address_html = '';

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
		
		if(!address) return;
		// get coordinates by address
		geocoder = new google.maps.Geocoder();
		geocoder.geocode( { 'address': address}, function(results, status) {
      			if (status == google.maps.GeocoderStatus.OK) {


			map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.panTo(results[0].geometry.location);

			if (markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
) {
				for (i in markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
) {
				markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
[i].setMap(null);
				}
				markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.length = 0;
			}

			marker = new google.maps.Marker({
				position: results[0].geometry.location,
				map:	map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>

			});
			markersArray_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.push(marker);

			var infowindow = new google.maps.InfoWindow({
   				content: address_html
			});

			infowindow.open(map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
, marker);
			var lat = results[0].geometry.location.lat();
			var long = results[0].geometry.location.lng();

			var h = map_<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
.getZoom();
			document.getElementById("<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
").value=lat+","+long+","+h;

		}
		});
	}

<?php }
}
?>