<?php /* Smarty version 3.1.24, created on 2019-09-24 17:12:36
         compiled from "/home/pegasuswings/public_html/templates/flux/details.html" */ ?>
<?php
/*%%SmartyHeaderCode:8523025265d8a2454350019_89091183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de30b89b6b5ca48f3fbcbcc4ca9df44ac805406e' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/details.html',
      1 => 1560288995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8523025265d8a2454350019_89091183',
  'variables' => 
  array (
    'info' => 0,
    'live_site' => 0,
    'lng' => 0,
    'category_path' => 0,
    'seo_settings' => 0,
    'listing' => 0,
    'ads_settings' => 0,
    'modules_array' => 0,
    'pe_settings' => 0,
    'ratings_settings' => 0,
    'crt_usr' => 0,
    'banners_positions' => 0,
    'section' => 0,
    'cat' => 0,
    'bloc' => 0,
    'array_banners' => 0,
    'special_listing_fields' => 0,
    'logo' => 0,
    'phone' => 0,
    'whatsapp' => 0,
    'twitter' => 0,
    'fields_array' => 0,
    'v' => 0,
    't' => 0,
    'default_fields_types' => 0,
    'key' => 0,
    'ad_options' => 0,
    'settings' => 0,
    'logged_in' => 0,
    'is_admin' => 0,
    'special_user_fields' => 0,
    'email' => 0,
    'pb' => 0,
    'is_phone' => 0,
    'url' => 0,
    'sef_links' => 0,
    'login_link' => 0,
    'fav_array' => 0,
    'cmp' => 0,
    'lng_compare' => 0,
    'map_field' => 0,
    'video_field' => 0,
    'no_latest_visited' => 0,
    'details_bottom_inclusions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8a24544d93e9_65796284',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8a24544d93e9_65796284')) {
function content_5d8a24544d93e9_65796284 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '8523025265d8a2454350019_89091183';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if (!$_smarty_tpl->tpl_vars['info']->value) {?>

<div class="wait"></div>

<div id="top_details_section">

<div class="page_bounds">
<div class="details-top">

	<div class="cat-path dtl">

	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['home'];?>
</a>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['name'] = 'catpath';
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category_path']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['catpath']['total']);
?>
	&nbsp;&raquo;
	<a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchCategoryLink($_smarty_tpl->tpl_vars['category_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['catpath']['index']]['id'],$_smarty_tpl->tpl_vars['category_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['catpath']['index']]['name']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?category=<?php echo $_smarty_tpl->tpl_vars['category_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['catpath']['index']]['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['category_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['catpath']['index']]['name'];?>
</a>
	<?php endfor; endif; ?>
	&nbsp;&raquo;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['listing'];?>
&nbsp;#<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>

	</div> 

	<div class="dtr details-price">
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && $_smarty_tpl->tpl_vars['listing']->value['auction']['active']) {?>

		<?php echo $_smarty_tpl->getSubTemplate ("auction.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<?php } elseif ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) {?>

		<?php if (in_array("price_extra",$_smarty_tpl->tpl_vars['modules_array']->value) && (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['listing']->value['fieldset']]) || isset($_smarty_tpl->tpl_vars['pe_settings']->value[0]))) {?>
	
		<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
		<?php } else { ?>

			<?php if ($_smarty_tpl->tpl_vars['listing']->value['price'] >= 0) {?>
			<div class="dt-price price">
			<?php if (in_array("multicurrency",$_smarty_tpl->tpl_vars['modules_array']->value)) {
echo $_smarty_tpl->getSubTemplate ("modules/multicurrency/details-price.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
} else {
echo $_smarty_tpl->tpl_vars['listing']->value['price_curr'];
}?>
			</div>
			<?php }?>
 
		<?php }?>
	
	<?php }?> 
	</div> 
	
	<div class="clearfix"></div>
	
	<div class="dtl">
	
		<h1<?php if ($_smarty_tpl->tpl_vars['listing']->value['sold']) {?> class="sold_title"<?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['rented']) {?> class="rented_title"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listing']->value['title'];
if ($_smarty_tpl->tpl_vars['listing']->value['sold']) {?><div class="sold_button"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['sold'];?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['rented']) {?><div class="rented_button"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['rented'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['listing']->value['urgent'] && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent']) {?><div class="urgent_button"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['urgent'];?>
</div><?php }?></h1>
		
		<?php if (in_array("ratings",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['ratings_settings']->value['rate_listings']) {?>
		<div class="inline">
		<?php echo $_smarty_tpl->getSubTemplate ("modules/ratings/rating.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('v'=>$_smarty_tpl->tpl_vars['listing']->value), 0);
?>

		</div>
		<?php }?>
		<div class="clearfix"></div>
		<div class="small-light"><?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['show_ad_date_for_everybody'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['added_on'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['listing']->value['date_nice'];?>
 | <?php }
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['views'];?>
: <?php echo $_smarty_tpl->tpl_vars['listing']->value['viewed'];?>
</div>
		
	</div>
	
	<div class="dtr">
	
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && $_smarty_tpl->tpl_vars['listing']->value['auction']['active']) {?>

			<?php echo $_smarty_tpl->getSubTemplate ("bid-btn.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			
		<?php }?>
		
		
		<?php if (in_array("price_drop_alert",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['listing']->value['price'] > 0 && ($_smarty_tpl->tpl_vars['listing']->value['user_id'] == 0 || $_smarty_tpl->tpl_vars['crt_usr']->value != $_smarty_tpl->tpl_vars['listing']->value['user_id']) && !($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && $_smarty_tpl->tpl_vars['listing']->value['auction']['active'])) {?>
	
			<?php echo $_smarty_tpl->getSubTemplate ("modules/price_drop_alert/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
		<?php }?>
		
	
	</div> 
	<div class="clearfix"></div>

</div> 
</div> 

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && $_smarty_tpl->tpl_vars['listing']->value['auction']['active']) {?>

	<?php echo $_smarty_tpl->getSubTemplate ("auction-details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }?>


<?php if (in_array("price_drop_alert",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	
	<?php echo $_smarty_tpl->getSubTemplate ("modules/price_drop_alert/add_alert.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
<?php }?>



</div> 


<div class="details-content">
<div class="page_bounds">


<?php if (in_array('details1',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('details1',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="center mtm10 mb10"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btype728"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php }?>



<div class="dc-left col-7 col-m-6">


<?php if (in_array('details2',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('details2',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="vert_banners"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btypeldp_rc"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php }?>



<section id="listing_details_section">

<?php echo $_smarty_tpl->getSubTemplate ("listing_gallery.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="listing-details" class="mb20">

	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_listing_fields']->value['logo'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['logo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
$foreach_logo_Sav = $_smarty_tpl->tpl_vars['logo'];
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['logo']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['logo']->value['caption']])) {?>
	<div class="mb10"><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['logo']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['logo']->value['caption']];?>
" /></div>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['logo'] = $foreach_logo_Sav;
}
?>

	<?php
$_from = $_smarty_tpl->tpl_vars['special_listing_fields']->value['phone'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['phone'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['phone']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->_loop = true;
$foreach_phone_Sav = $_smarty_tpl->tpl_vars['phone'];
?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['phone']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['phone']->value['caption']]) {?>
	<div class="clearfix mb10">
	<div class="phone_icon"></div><span class="span_phone" id="span_<?php echo $_smarty_tpl->tpl_vars['phone']->value['caption'];?>
"><?php echo substr($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['phone']->value['caption']],0,2);?>
********</span><a class="ml20 med-btn btn2 show_l_phone" href="javascript:;" id="show_<?php echo $_smarty_tpl->tpl_vars['phone']->value['caption'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['show_phone'];?>
</a>
	</div>
	<?php }?>
	
	<?php
$_smarty_tpl->tpl_vars['phone'] = $foreach_phone_Sav;
}
?>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_listing_fields']->value['whatsapp'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['whatsapp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['whatsapp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['whatsapp']->value) {
$_smarty_tpl->tpl_vars['whatsapp']->_loop = true;
$foreach_whatsapp_Sav = $_smarty_tpl->tpl_vars['whatsapp'];
?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['whatsapp']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['whatsapp']->value['caption']]) {?>
	<div class="clearfix mb10">
	<div class="whatsapp_icon"></div><span class="span_phone" id="span_<?php echo $_smarty_tpl->tpl_vars['whatsapp']->value['caption'];?>
"><?php echo substr($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['whatsapp']->value['caption']],0,2);?>
********</span><a class="ml20 med-btn btn-green show_l_phone" href="javascript:;" id="show_<?php echo $_smarty_tpl->tpl_vars['whatsapp']->value['caption'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['show_whatsapp'];?>
</a>
	</div>
	<?php }?>
	
	<?php
$_smarty_tpl->tpl_vars['whatsapp'] = $foreach_whatsapp_Sav;
}
?>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_listing_fields']->value['twitter'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['twitter'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['twitter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['twitter']->value) {
$_smarty_tpl->tpl_vars['twitter']->_loop = true;
$foreach_twitter_Sav = $_smarty_tpl->tpl_vars['twitter'];
?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['twitter']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['twitter']->value['caption']]) {?>
	<div class="clearfix mb10">
	<div class="twitter_icon"></div><span class="span_phone"><a href="https://twitter.com/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['twitter']->value['caption']],'@','');?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['twitter']->value['caption']];?>
</a></span>
	</div>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['twitter'] = $foreach_twitter_Sav;
}
?>

	<?php $_smarty_tpl->tpl_vars["map_field"] = new Smarty_Variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars["video_field"] = new Smarty_Variable('', null, 0);?>

	<?php
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

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "google_maps") {
$_smarty_tpl->tpl_vars["map_field"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['v']->value['caption']), null, 0);
}?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "youtube") {
$_smarty_tpl->tpl_vars["video_field"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['v']->value['caption']), null, 0);
}?>
		
	<?php if (((isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) || $_smarty_tpl->tpl_vars['v']->value['type'] == "checkbox" || (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']]) || (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) || (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) || (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) || (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']])) && $_smarty_tpl->tpl_vars['v']->value['type'] != 'price' && $_smarty_tpl->tpl_vars['v']->value['type'] != 'youtube' && $_smarty_tpl->tpl_vars['v']->value['type'] != "google_maps" && $_smarty_tpl->tpl_vars['v']->value['type'] != "checkbox_group" && $_smarty_tpl->tpl_vars['v']->value['type'] != "video" && $_smarty_tpl->tpl_vars['v']->value['type'] != "audio" && $_smarty_tpl->tpl_vars['v']->value['type'] != "phone" && $_smarty_tpl->tpl_vars['v']->value['type'] != "whatsapp" && $_smarty_tpl->tpl_vars['v']->value['type'] != "twitter" && $_smarty_tpl->tpl_vars['v']->value['type'] != "logo") {?>
		
		<div class="fdesc ld">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "depending") {?>
			<span><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name1'];?>
:</span>
		<?php } else { ?>
			<span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
:</span>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 'url') {?><a href="<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" target="_blank" rel="nofollow"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['prefix']) {
echo $_smarty_tpl->tpl_vars['v']->value['prefix'];
}?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "date") {?>
		<?php echo $_smarty_tpl->tpl_vars['listing']->value['vis'][$_smarty_tpl->tpl_vars['v']->value['caption']];?>


		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "textarea" || $_smarty_tpl->tpl_vars['v']->value['type'] == "htmlarea") {?>
		<?php echo $_smarty_tpl->tpl_vars['listing']->value['formatted'][$_smarty_tpl->tpl_vars['v']->value['caption']];?>


		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "file") {?>
		<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" class="download tooltip mbm7" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['download'];?>
">&nbsp;</a><?php }?>

		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "image") {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" class="view_image imgfield">&nbsp;</a>

		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "multiselect") {?>
		<?php echo implode($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']],', ');?>


		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "checkbox") {?>
		<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['Yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['No'];
}?>

		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == "depending") {?> 

			<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']] == "all" && $_smarty_tpl->tpl_vars['v']->value['all_val']) {?>
			<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>

			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption1']];?>

			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']]) {?>
			</div>

			<div class="fdesc ld">
				<span><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name2'];?>
:</span>

				<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']] == "all" && $_smarty_tpl->tpl_vars['v']->value['all_val']) {?>
				<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption2']];?>

				<?php }?>
				
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']]) {?>
			</div>

			<div class="fdesc ld">
				<span><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name3'];?>
:</span>
	
				<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']] == "all" && $_smarty_tpl->tpl_vars['v']->value['all_val']) {?>
				<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption3']];?>

				<?php }?>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']]) {?>
			</div>

			<div class="fdesc ld">
				<span><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name4'];?>
:</span>
				<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']] == "all" && $_smarty_tpl->tpl_vars['v']->value['all_val']) {?>
				<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption4']];?>

				<?php }?>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']]) {?>
			</div>

			<div class="fdesc ld">
				<span><?php echo $_smarty_tpl->tpl_vars['v']->value['depending']['name5'];?>
:</span>
				<?php if ($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']] == "all" && $_smarty_tpl->tpl_vars['v']->value['all_val']) {?>
				<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>

				<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['depending']['caption5']];?>

				<?php }?>
			<?php }?>

			

			

		<?php } else { ?> 
	
			<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == "menu" && $_smarty_tpl->tpl_vars['v']->value['all_val'] && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']] == "all") {?>
			<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>

			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>

			<?php }?>
	
		<?php }?> 

		<?php if ($_smarty_tpl->tpl_vars['v']->value['postfix']) {
echo $_smarty_tpl->tpl_vars['v']->value['postfix'];
}?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 'url') {?></a><?php }?>

		</div> 

		

	<?php }?> 
		
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?> 

	<div class="clearfix"></div>
	
</div> 

<div class="medium_heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['ad_description'];?>
</div>

<div class="listing-extra mb20">
<div id="pdescription" class="mb20"><?php echo $_smarty_tpl->tpl_vars['listing']->value['description_formatted'];?>
</div>
</div> 

<?php
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


<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['v']->value['type'] == 'checkbox_group') {?>

<div class="medium_heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
<div class="listing-extra mb20">

	<?php
$_from = $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
	<div class="lfloat check_on" ><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</div>
	<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
	<div class="clearfix"></div>
	
</div> 

<?php }?> 


<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['v']->value['type'] == 'video') {?>

<div class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
<div class="mb20">

	<video controls>
	<source src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" type="video/mp4">
	Your browser does not support the video tag.
	</video>
	<div class="clearfix"></div>
	
</div> 

<?php }?> 


<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']]) && $_smarty_tpl->tpl_vars['v']->value['type'] == 'audio') {?>

<div class="heading"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
<div class="mb20">

	<audio controls>
	<source src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
/<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
	<div class="clearfix"></div>
	
</div> 

<?php }?> 

<?php if (!in_array($_smarty_tpl->tpl_vars['v']->value['type'],$_smarty_tpl->tpl_vars['default_fields_types']->value) && in_array($_smarty_tpl->tpl_vars['v']->value['type'],$_smarty_tpl->tpl_vars['modules_array']->value)) {?>

	<?php echo $_smarty_tpl->getSubTemplate ("modules/".((string)$_smarty_tpl->tpl_vars['v']->value['type'])."/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
<?php }?>


<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


</section>

<section id="listing_extra1">

<?php if (in_array("social_networks",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/social_networks/sn_fb_comments.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array("comments",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/comments/comments.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>



<?php if (in_array("ratings",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['ratings_settings']->value['rate_listings'] && $_smarty_tpl->tpl_vars['ratings_settings']->value['ar_enable_reviews']) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/ratings/listing_reviews.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


</section> 



<?php if (in_array('details3',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('details3',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="center vert_banners mtm10 mb10"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btypeldp_rc"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>


</div> 

<div class="dc-right col-5 col-m-6">

<section id="listing_user_details">

<?php if (!$_smarty_tpl->tpl_vars['listing']->value['user_id'] && isset($_smarty_tpl->tpl_vars['key']->value) && $_smarty_tpl->tpl_vars['key']->value) {?>

<div class="heading"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['manage_ad'];?>
</div>

<div class="container2 mb20">

	<div class="fdesc">
		<span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['added_on'];?>
:</span>
		<?php echo $_smarty_tpl->tpl_vars['listing']->value['date_nice'];?>

	</div>

	<div class="fdesc">
		<span><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['expires'];?>
:</span>
		<?php if ($_smarty_tpl->tpl_vars['listing']->value['date_expires_nice']) {
echo $_smarty_tpl->tpl_vars['listing']->value['date_expires_nice'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['never'];
}?>
	</div>

	<div class="fdesc">
		<span><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['status'];?>
:</span>
		<?php if ($_smarty_tpl->tpl_vars['listing']->value['pending']) {
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['waiting_admin_approval'];
} elseif ($_smarty_tpl->tpl_vars['listing']->value['active']) {
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['active'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['inactive'];
}?>
	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['ad_options']->value['pending_featured']) && $_smarty_tpl->tpl_vars['ad_options']->value['pending_featured']) {?>
	<div class="lfloat small-btn pendingbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending_featured'];?>
</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['ad_options']->value['pending_highlited']) && $_smarty_tpl->tpl_vars['ad_options']->value['pending_highlited']) {?>
	<div class="lfloat small-btn pendingbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending_highlited'];?>
</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['ad_options']->value['pending_priority']) && $_smarty_tpl->tpl_vars['ad_options']->value['pending_priority']) {?>
	<div class="lfloat small-btn pendingbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending_priority_name'];?>
</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['ad_options']->value['pending_video']) && $_smarty_tpl->tpl_vars['ad_options']->value['pending_video']) {?>
	<div class="lfloat small-btn pendingbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending_video'];?>
</div>
	<?php }?>
<!--  -->
	<div class="clearfix"></div>
	
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_allow_edit'] || $_smarty_tpl->tpl_vars['settings']->value['nologin_allow_delete'] || $_smarty_tpl->tpl_vars['settings']->value['nologin_extra_options']) {?>
	<div class="cdbtns">

		<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_allow_edit']) {?>
		<a class="btnr cdbtn" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/edit_listing.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
</a>

		<a class="btnr cdbtn" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/edit_photos.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['edit_photos'];?>
</a>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_extra_options']) {?>
		<a class="btnr cdbtn" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/edit_options.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['edit_ad_options'];?>
</a>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_allow_delete']) {?>
		<a class="btnr cdbtn" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&delete=1" onclick="return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['confirm_delete']);?>
')"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
</a>
		<?php }?>

	</div>
	<?php }?>

</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['crt_usr']->value == $_smarty_tpl->tpl_vars['listing']->value['user_id'] && in_array("bump",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['listing']->value['active'] && $_smarty_tpl->tpl_vars['listing']->value['priority'] != 100) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/bump/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<div id="contact-details" class="dark-container">

<?php if (($_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['is_admin']->value || !$_smarty_tpl->tpl_vars['ads_settings']->value['hide_contact_when_not_logged'])) {?>

	<div class="contact_name">
		<h2 class="lfloat">
		<?php if ($_smarty_tpl->tpl_vars['listing']->value['user_id']) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['special_user_fields']->value['contact_name']]) && $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['special_user_fields']->value['contact_name']]) {
echo $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['special_user_fields']->value['contact_name']];
}?> 
		<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['listing']->value['user']['mgm_name']) && $_smarty_tpl->tpl_vars['listing']->value['user']['mgm_name']) {
echo $_smarty_tpl->tpl_vars['listing']->value['user']['mgm_name'];
}?> 
		<?php }?>
		</h2>
		<?php if ($_smarty_tpl->tpl_vars['listing']->value['user_id'] && in_array("ratings",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['ratings_settings']->value['rate_users']) {?>
		<div class="rfloat">
		<?php echo $_smarty_tpl->getSubTemplate ("modules/ratings/user_blind_rating.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('v'=>$_smarty_tpl->tpl_vars['listing']->value['user']), 0);
?>

		</div>
		<?php }?>
		
	</div>
	<div class="clearfix"></div>
	
	<?php if ($_smarty_tpl->tpl_vars['listing']->value['user_id'] && ($_smarty_tpl->tpl_vars['ads_settings']->value['show_more_link'] || $_smarty_tpl->tpl_vars['listing']->value['user']['store'] > 0)) {?>
	
		<div class="lfloat"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['user_since'];?>
: <?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['date_nice'];?>
</div>
	
		<a href="<?php if ($_smarty_tpl->tpl_vars['listing']->value['user']['store'] > 0) {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDealerLink($_smarty_tpl->tpl_vars['listing']->value['user_id'],$_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['settings']->value['contact_name_field']]);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/store.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['user_id'];
}
} else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeUserListingsLink($_smarty_tpl->tpl_vars['listing']->value['user_id'],$_smarty_tpl->tpl_vars['listing']->value['user']['url_name']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/user_listings.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['user_id'];
}
}?>" class="rfloat"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['see_all'];?>
</a>
		<div class="clearfix"></div>
	<?php }?>

	<hr/>

	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_user_fields']->value['logo'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['logo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
$foreach_logo_Sav = $_smarty_tpl->tpl_vars['logo'];
?>

	<?php $_smarty_tpl->_capture_stack[0][] = array('pb', 'pb', null); ob_start(); ?>pb_<?php echo $_smarty_tpl->tpl_vars['logo']->value['caption'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['logo']->value]) && $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['logo']->value])) {?>
	<div class="mb10"><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['logo']->value];?>
" /></div>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['logo'] = $foreach_logo_Sav;
}
?>

	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_user_fields']->value['email'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['email'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['email']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->_loop = true;
$foreach_email_Sav = $_smarty_tpl->tpl_vars['email'];
?>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array('pb', 'pb', null); ob_start(); ?>pb_<?php echo $_smarty_tpl->tpl_vars['email']->value['caption'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['email']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['email']->value['caption']]) && ($_smarty_tpl->tpl_vars['email']->value['public'] == 1 || $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['pb']->value] == 1)) {?>
	<div class="clearfix mb10">
	<div class="email_icon"></div><span class="span_email" id="span_<?php echo $_smarty_tpl->tpl_vars['email']->value['caption'];?>
"><?php echo substr($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['email']->value['caption']],0,2);?>
********</span><a class="rfloat med-btn btn2 show_email" href="javascript:;" id="show_<?php echo $_smarty_tpl->tpl_vars['email']->value['caption'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['show_email'];?>
</a>
	</div>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['email'] = $foreach_email_Sav;
}
?>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_user_fields']->value['phone'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['phone'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['phone']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->_loop = true;
$foreach_phone_Sav = $_smarty_tpl->tpl_vars['phone'];
?>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array('pb', 'pb', null); ob_start(); ?>pb_<?php echo $_smarty_tpl->tpl_vars['phone']->value['caption'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['phone']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['phone']->value['caption']]) && ($_smarty_tpl->tpl_vars['phone']->value['public'] == 1 || $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['pb']->value] == 1)) {?>
	<?php if (!$_smarty_tpl->tpl_vars['is_phone']->value) {?>
	<div class="clearfix mb10">
	<div class="phone_icon"></div><span class="span_phone" id="span_<?php echo $_smarty_tpl->tpl_vars['phone']->value['caption'];?>
"><?php echo substr($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['phone']->value['caption']],0,2);?>
********</span><a class="rfloat med-btn btn2 show_phone" href="javascript:;" id="show_<?php echo $_smarty_tpl->tpl_vars['phone']->value['caption'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['show_phone'];?>
</a>
	</div>
	<?php } else { ?> 
	<div class="cdbtns mb10">
	<a class="med-btn btn-green center mr10 cdbtn" href="tel:<?php echo $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['phone']->value['caption']];?>
"><div class="sphone_icon"></div><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['call'];?>
</a>
	<a class="med-btn btn-green center cdbtn" href="sms:<?php echo $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['phone']->value['caption']];?>
?body=Re:%20<?php echo urlencode($_smarty_tpl->tpl_vars['listing']->value['title']);?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['sms'];?>
</a>
	</div>
	<?php }?>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['phone'] = $foreach_phone_Sav;
}
?>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_user_fields']->value['whatsapp'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['whatsapp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['whatsapp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['whatsapp']->value) {
$_smarty_tpl->tpl_vars['whatsapp']->_loop = true;
$foreach_whatsapp_Sav = $_smarty_tpl->tpl_vars['whatsapp'];
?>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array('pb', 'pb', null); ob_start(); ?>pb_<?php echo $_smarty_tpl->tpl_vars['whatsapp']->value['caption'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['whatsapp']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['whatsapp']->value['caption']]) && ($_smarty_tpl->tpl_vars['whatsapp']->value['public'] == 1 || $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['pb']->value] == 1)) {?>
	<?php if (!$_smarty_tpl->tpl_vars['is_phone']->value) {?>
	<div class="clearfix mb10">
	<div class="whatsapp_icon"></div><span class="span_phone" id="span_<?php echo $_smarty_tpl->tpl_vars['whatsapp']->value['caption'];?>
"><?php echo substr($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['whatsapp']->value['caption']],0,2);?>
********</span><a class="rfloat med-btn btn-green show_phone" href="javascript:;" id="show_<?php echo $_smarty_tpl->tpl_vars['whatsapp']->value['caption'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['show_whatsapp'];?>
</a>
	</div>
	<?php } else { ?>
	
	<div class="cdbtns mb10">
	<a class="med-btn btn-green center cdbtn" href="https://wa.me/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['whatsapp']->value['caption']],'+','');?>
"><div class="swhatsapp_icon"></div><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['click_to_chat'];?>
</a>
	</div>
	
	<?php }?>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['whatsapp'] = $foreach_whatsapp_Sav;
}
?>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['special_user_fields']->value['twitter'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['twitter'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['twitter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['twitter']->value) {
$_smarty_tpl->tpl_vars['twitter']->_loop = true;
$foreach_twitter_Sav = $_smarty_tpl->tpl_vars['twitter'];
?>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array('pb', 'pb', null); ob_start(); ?>pb_<?php echo $_smarty_tpl->tpl_vars['twitter']->value['caption'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['twitter']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['twitter']->value['caption']]) && ($_smarty_tpl->tpl_vars['twitter']->value['public'] == 1 || $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['pb']->value] == 1)) {?>
	<div class="clearfix mb10">
	<div class="twitter_icon"></div><span class="span_phone"><a href="https://twitter.com/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['twitter']->value['caption']],'@','');?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['twitter']->value['caption']];?>
</a></span>
	</div>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['twitter'] = $foreach_twitter_Sav;
}
?>

	<?php if (isset($_smarty_tpl->tpl_vars['listing']->value['site_url']) && $_smarty_tpl->tpl_vars['listing']->value['site_url'] && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_url']) {?>
	<div class="mb10"><div class="website_icon"></div><a href="<?php echo $_smarty_tpl->tpl_vars['listing']->value['site_url'];?>
" class="ml10"><?php echo $_smarty_tpl->tpl_vars['listing']->value['site_url'];?>
</a></div>
	<?php }?>

	<?php
$_from = $_smarty_tpl->tpl_vars['special_user_fields']->value['url'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['url']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
$foreach_url_Sav = $_smarty_tpl->tpl_vars['url'];
?>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array('pb', 'pb', null); ob_start(); ?>pb_<?php echo $_smarty_tpl->tpl_vars['url']->value['caption'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['url']->value['caption']]) && $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['url']->value['caption']]) && ($_smarty_tpl->tpl_vars['url']->value['public'] == 1 || $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['pb']->value] == 1)) {?>
	<div><div class="website_icon"></div><a href="<?php echo $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['url']->value['caption']];?>
" class="ml10"><?php echo $_smarty_tpl->tpl_vars['listing']->value['user'][$_smarty_tpl->tpl_vars['url']->value['caption']];?>
</a></div>
	<?php }?>
	<?php
$_smarty_tpl->tpl_vars['url'] = $foreach_url_Sav;
}
?>
	
	<?php } else { ?> 

	<?php $_smarty_tpl->_capture_stack[0][] = array('login_link', 'login_link', null); ob_start();
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['login'];
} else { ?>login.php<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<div class="warning"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listing']['login_to_view_contact'],'::LOGIN_LINK::',$_smarty_tpl->tpl_vars['login_link']->value);?>
</div>
	
	<?php }?> 
	
	<?php echo $_smarty_tpl->getSubTemplate ("user_contact.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="cdbtns">

		<a href="javascript:;" class="btnr cdbtn fshare cf" id="share_btn"><span class="sshare"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['recommend_this'];?>
</a>

		<a href="javascript:;" class="btnr cdbtn freport cf" id="report_btn"><span class="sreport"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['report_ad'];?>
</a>

		<?php if (!isset($_smarty_tpl->tpl_vars['fav_array']->value) || !in_array($_smarty_tpl->tpl_vars['listing']->value['id'],$_smarty_tpl->tpl_vars['fav_array']->value)) {?>
		<a  href="javascript:;" id="fav<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" class="btnr cdbtn addtofav"><span class="sfav"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['favourite'];?>
</a>
		<?php }?>

		
		<?php if (in_array("listings_compare",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>

		<?php echo $_smarty_tpl->getSubTemplate ("modules/listings_compare/cmp_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


		<a href="javascript:;" class="btnr cdbtn addcmp" id="cmp<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['cmp']->value) && in_array($_smarty_tpl->tpl_vars['listing']->value['id'],$_smarty_tpl->tpl_vars['cmp']->value)) {?>style="display: none;"<?php }?>><span class="scompare"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_compare']->value['add_to_compare'];?>
</a>

		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>compare<?php } else { ?>modules/listings_compare/compare.php<?php }?>" id="compare_btn" class="btnr cdbtn" <?php if (!isset($_smarty_tpl->tpl_vars['cmp']->value) || !$_smarty_tpl->tpl_vars['cmp']->value || ($_smarty_tpl->tpl_vars['cmp']->value && !in_array($_smarty_tpl->tpl_vars['listing']->value['id'],$_smarty_tpl->tpl_vars['cmp']->value))) {?>style="display: none;"<?php }?>><span class="scompare"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_compare']->value['compare'];?>
</a>

		<?php }?>
		

	</div> 
	
	<?php echo $_smarty_tpl->getSubTemplate ("share.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
	<?php echo $_smarty_tpl->getSubTemplate ("report.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	
</div> 


<?php if (in_array("social_networks",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<div class="share">
<?php echo $_smarty_tpl->getSubTemplate ("modules/social_networks/sn_details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<div class="clearfix"></div>
<?php }?>



<?php if (!$_smarty_tpl->tpl_vars['logged_in']->value && !$_smarty_tpl->tpl_vars['listing']->value['user_id'] && in_array("claim_listing",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/claim_listing/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>



<?php if (in_array("qrcode",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/qrcode/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['map_field']->value) && $_smarty_tpl->tpl_vars['map_field']->value) {?> 

<div id="gm_<?php echo $_smarty_tpl->tpl_vars['map_field']->value;?>
" class="map mb20"></div>


<?php }?>



<?php if (in_array('details4',$_smarty_tpl->tpl_vars['banners_positions']->value)) {?>
<?php $_smarty_tpl->assign('array_banners',$_smarty_tpl->smarty->registered_objects['banner'][0]->getTemplateBanners('details4',$_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['bloc']->value));?>

<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<div class="center vert_banners"><?php echo $_smarty_tpl->getSubTemplate ("banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bclass'=>"btypeldp_rc"), 0);
?>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<div class="clearfix"></div>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['listing']->value['enable_video'] && isset($_smarty_tpl->tpl_vars['listing']->value['video']) && $_smarty_tpl->tpl_vars['listing']->value['video']) {?>
<div class="mb20"><?php echo $_smarty_tpl->tpl_vars['listing']->value['video'];?>
</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['video_field']->value) && $_smarty_tpl->tpl_vars['video_field']->value)) {?>
<div class="mb20"><?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['video_field']->value];?>
</div>
<?php }?>


</section> 

<section id="listing_extra2">


<?php if (in_array("loancalc",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("modules/loancalc/loancalc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>


<?php if (in_array("latest_visited",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['no_latest_visited']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/latest_visited/details.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

<?php if (in_array("similar_ads",$_smarty_tpl->tpl_vars['modules_array']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/similar_ads/similar_ads.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>

</section> 

</div> 

<div class="clearfix"></div>

</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("js/details_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php } else { ?>

<div class="details-content">
<div class="page_bounds">

	<div class="info"><p><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</p></div>

</div>
</div>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['details_bottom_inclusions']->value)) {?>
<?php
$_from = $_smarty_tpl->tpl_vars['details_bottom_inclusions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['v']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>