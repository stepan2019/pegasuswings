<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/listings_map.html" */ ?>
<?php
/*%%SmartyHeaderCode:7863946655d893409751f55_28477850%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7885532e459dc0218e38150cbc859cc15453c34' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/listings_map.html',
      1 => 1560276742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7863946655d893409751f55_28477850',
  'variables' => 
  array (
    'ads_settings' => 0,
    'settings' => 0,
    'listings_array' => 0,
    'gmap_field' => 0,
    'l' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d89340975e212_84042388',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d89340975e212_84042388')) {
function content_5d89340975e212_84042388 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7863946655d893409751f55_28477850';
echo $_smarty_tpl->getSubTemplate ("data/magnific-popup.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="listings_gm" style="<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['map_visible']) {?>width: 100%; height: 400px; border: 1px solid #aaaaaa;<?php }?>"></div>
<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[


$(document).ready(function() {

	var loaded = 0;
	$("#showMap").click(function(){

		var w1 = $(".graytab").width();

		$("#listings_gm").css("width", w1);
		$("#listings_gm").css("height", 400);
		$("#listings_gm").css("border", "1 px solid #f00"); 
		$("#listings_gm").css("margin-top", "20px");
		$("#listings_gm").css("margin-bottom", "20px");
		$("#listings_gm").css("padding", "10px");

		$("#listings_gm").slideDown(function() { 

			$("#hideMap").show();
			$("#showMap").hide();
			if(!loaded) {
				load_gmaps();
			}
		 });

	});

	$("#hideMap").click(function(){

		$("#listings_gm").hide();
		$("#showMap").show();
		$("#hideMap").hide();

	});

	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['map_visible']) {?>
		load_gmaps();
	<?php }?>
	

});

function init_gmap() {

	searchMapLoad();
	loaded = 1;

}

function searchMapLoad() {
	
	var mapHeight = 14;//<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_height'];?>
;
	var myLatlng = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_lat'];?>
, <?php echo $_smarty_tpl->tpl_vars['settings']->value['google_maps_default_long'];?>
);

	
	var myOptions = {
  		zoom: mapHeight,
  		center: myLatlng,
		panControl: true,
		zoomControl: true,
		scaleControl: true,
		mapTypeControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	listings_map = new google.maps.Map(document.getElementById("listings_gm"), myOptions);

	google.maps.event.addListenerOnce(listings_map, 'bounds_changed', function(){

		bounds = listings_map.getBounds();
		

		<?php
$_from = $_smarty_tpl->tpl_vars['listings_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>

		old=new Array();
		<?php if ($_smarty_tpl->tpl_vars['l']->value[$_smarty_tpl->tpl_vars['gmap_field']->value]) {?> old = splitMapsCoord('<?php echo $_smarty_tpl->tpl_vars['l']->value[$_smarty_tpl->tpl_vars['gmap_field']->value];?>
');<?php }?>
		var lat = 0;
		var long = 0;
		var h = mapHeight;

		

		// get coordinates from the map field
		if (old.length>0) {
			lat = parseFloat(old[0]);
			long = parseFloat(old[1]);
			h = parseInt(old[2]);
		} 
		else 
		// try to get the coordinates using geocoding
		{
			var address = "<?php echo $_smarty_tpl->tpl_vars['l']->value['search_map_location'];?>
";

			if(address) {

				$.post("<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/get_info.php?type=geocoding", { address: base64_encode(address) }, function(data){ 

 					var split_data=data.split("|");
						lat = split_data[0];
						long = split_data[1];

						if(lat && long) {
						// add the point to the map
						p = new google.maps.LatLng(lat , long);
						
						addPoint(p, '<?php echo addslashes($_smarty_tpl->tpl_vars['l']->value['title']);?>
', '<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
', bounds);
						
						bestFitWithCenter(listings_map, bounds);
						} // end if lat && long

	});	
	
			}// end if address

		}

		if(lat && long) {	
		

			p = new google.maps.LatLng( lat , long );
			addPoint(p, '<?php echo addslashes($_smarty_tpl->tpl_vars['l']->value['title']);?>
', '<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
', bounds);

		} // end if point
	
		<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

		
		bestFitWithCenter(listings_map, bounds);

	}); // end bounds_changed

}

function bestFitWithCenter(map, bounds) {

	mapCenter = bounds.getCenter();
	var swLL = bounds.getSouthWest();
	var neLL = bounds.getNorthEast();
	//leave margin each side 
	var marginRatio = 0.0001;

	var minLat = Math.min(2*mapCenter.lat() - neLL.lat(), swLL.lat());
	var maxLat = Math.max(2*mapCenter.lat() - swLL.lat(),  neLL.lat());
	var minLng = Math.min(2*mapCenter.lng() - neLL.lng(), swLL.lng());
	var maxLng = Math.max(2*mapCenter.lng() - swLL.lng(), neLL.lng());

	var minLatLng = new google.maps.LatLng(minLat-marginRatio, minLng-marginRatio);
	var maxLatLng = new google.maps.LatLng(maxLat+marginRatio, maxLng+marginRatio);

	bounds.extend(maxLatLng);
	bounds.extend(minLatLng);

	map.setCenter(mapCenter);
	map.fitBounds(bounds);

}


function addPoint(point, listing_title, listing_id, bounds) {

	bounds.extend(point);
	var marker = new google.maps.Marker({
	      position: point,
	      title: listing_title
	});
	marker.setMap(listings_map);

	google.maps.event.addListener(marker, "click", function(){

	$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/get_info.php?type=listing&id="+listing_id,
		data		: $(this).serializeArray(),
		success: function(data) {
			$.magnificPopup.open({
				items: {
				src: data,
				type: 'inline'
				}
			});
		}
	});
			
        });

}



<?php echo '</script'; ?>
><?php }
}
?>