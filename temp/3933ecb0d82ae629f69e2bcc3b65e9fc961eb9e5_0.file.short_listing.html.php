<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/short_listing.html" */ ?>
<?php
/*%%SmartyHeaderCode:1513388055d89340977afd6_21153856%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3933ecb0d82ae629f69e2bcc3b65e9fc961eb9e5' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/short_listing.html',
      1 => 1552937338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513388055d89340977afd6_21153856',
  'variables' => 
  array (
    'seo_settings' => 0,
    'v' => 0,
    'post_array' => 0,
    'live_site' => 0,
    'details_url' => 0,
    'lng' => 0,
    'ads_settings' => 0,
    'self_noext' => 0,
    'appearance' => 0,
    'modules_array' => 0,
    'ratings_settings' => 0,
    'category' => 0,
    'template_path' => 0,
    'pe_settings' => 0,
    'fav_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8934097a80a4_13880133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8934097a80a4_13880133')) {
function content_5d8934097a80a4_13880133 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_mb_truncate')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.mb_truncate.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '1513388055d89340977afd6_21153856';
$_smarty_tpl->_capture_stack[0][] = array('some_content', 'details_url', null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['v']->value['title'],$_smarty_tpl->tpl_vars['post_array']->value['search_id'],$_smarty_tpl->tpl_vars['v']->value['category_id'],$_smarty_tpl->tpl_vars['v']->value['slug']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
if (isset($_smarty_tpl->tpl_vars['post_array']->value['search_id'])) {?>&search_id=<?php echo $_smarty_tpl->tpl_vars['post_array']->value['search_id'];
}
}?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="classified">

	<div class="lfloat gallery-img-bg smallimg sl-image">

	<a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
" name="listing<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
	<img class="cpic" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" alt="<?php if ($_smarty_tpl->tpl_vars['v']->value['image_id']) {
echo substr(strip_tags($_smarty_tpl->tpl_vars['v']->value['title']),0,100);
}?>" />
	</a> 
	<?php if ($_smarty_tpl->tpl_vars['v']->value['sold']) {?><div class="ribbon ribbon_sold"><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['sold'];?>
</span></div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['rented']) {?><div class="ribbon ribbon_rented"><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['rented'];?>
</span></div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['featured'] && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured'] && $_smarty_tpl->tpl_vars['self_noext']->value != "featured_ads" && !$_smarty_tpl->tpl_vars['v']->value['sold'] && !$_smarty_tpl->tpl_vars['v']->value['rented']) {?><div class="ribbon ribbon_featured"><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['featured'];?>
</span></div><?php }?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['no_pictures']) {?><div class="images-no"><?php echo $_smarty_tpl->tpl_vars['v']->value['no_pictures'];?>
</div><?php }?>

	</div> 

	<div class="rclass fba<?php if ($_smarty_tpl->tpl_vars['v']->value['highlited'] && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited']) {?> highlited<?php }?>">
		
		<div class="fbac">

		<div class="title">

		<a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value['priority']) {?> class="tooltip prioritized" alt="priority<?php echo $_smarty_tpl->tpl_vars['v']->value['priority'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['priority_name'];?>
"<?php }?>><h3 <?php if ($_smarty_tpl->tpl_vars['v']->value['priority']) {?>class="priority"<?php }?>><?php if ($_smarty_tpl->tpl_vars['appearance']->value['charset'] == "UTF-8") {
echo smarty_modifier_mb_truncate($_smarty_tpl->tpl_vars['v']->value['title'],100,"...","UTF-8");
} else {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],100,"...",false);
}?></h3></a>
		
		</div>

		

		<?php if (in_array("ratings",$_smarty_tpl->tpl_vars['modules_array']->value) && $_smarty_tpl->tpl_vars['ratings_settings']->value['rate_listings']) {?>
		<div class="ratings">
		<?php echo $_smarty_tpl->getSubTemplate ("modules/ratings/stars.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
		<?php }?>

		

		<?php if ($_smarty_tpl->tpl_vars['v']->value['location_str']) {?><div class="sl-loc"><?php echo $_smarty_tpl->tpl_vars['v']->value['location_str'];?>
</div><?php }?>

		<p><?php if ($_smarty_tpl->tpl_vars['appearance']->value['charset'] == "UTF-8") {
echo smarty_modifier_mb_truncate($_smarty_tpl->tpl_vars['v']->value['description'],150,"...","UTF-8");
} else {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],150,"...",false);
}?></p>

		<div class="small-light">
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['show_ad_date_for_everybody'] == 1) {?>
			<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['added_on'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['posted'];?>

		<?php }?>
		&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['to'];?>
&nbsp;<a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchCategoryLink($_smarty_tpl->tpl_vars['v']->value['category_id'],$_smarty_tpl->tpl_vars['category']->value);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?category=<?php echo $_smarty_tpl->tpl_vars['v']->value['category_id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['category'];?>
</a>
		
		<?php if ($_smarty_tpl->tpl_vars['v']->value['video'] && $_smarty_tpl->tpl_vars['v']->value['enable_video'] && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_video']) {?><div class="inline video sq-btn sq-btn1"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/video.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['short_video'];?>
</div><?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['urgent'] && $_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent']) {?>&nbsp;<span class="urgent sq-btn sq-btn1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['urgent'];?>
</span><?php }?>
		

		</div>

		</div> 
		
		<div class="fbav sl-right"> 
		
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_price'] && !$_smarty_tpl->tpl_vars['v']->value['auction']) {?>
		
		<?php if (in_array("price_extra",$_smarty_tpl->tpl_vars['modules_array']->value) && (isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['v']->value['fieldset']]) || isset($_smarty_tpl->tpl_vars['pe_settings']->value[0]))) {?>
	
		<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/short_listing.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
		<?php } else { ?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['price'] >= 0) {?><div class="fbavr price sl-price"><?php echo $_smarty_tpl->tpl_vars['v']->value['price_curr'];?>
</div><?php }?>
 
		<?php }?>
			
		<?php }?> 
		<?php if ($_smarty_tpl->tpl_vars['v']->value['auction']) {?>
		<div class="fbavr sl-price sq-btn sq-btn2"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['auction'];?>
</div>
		<?php }?>

		<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp11=ob_get_clean();
if ($_smarty_tpl->tpl_vars['self_noext']->value != "favorites" && !in_array($_tmp11,$_smarty_tpl->tpl_vars['fav_array']->value)) {?>
		<a href="javascript:;" class="addtofav fbavr tooltip" id="fav<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['add_to_favourites'];?>
"><div class="starfav sl-make-fav"></div></a>
		<?php } else { ?>
		<a href="javascript:;" class="remfav fbavr tooltip" id="fav<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['remove_favourite'];?>
"><div class="starfav sl-rem-fav"></div></a>
		<?php }?>

		</div> 

	</div> 
	<div class="clearfix"></div>

</div> <?php }
}
?>