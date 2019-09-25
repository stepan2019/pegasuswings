<?php /* Smarty version 3.1.24, created on 2019-09-10 16:35:01
         compiled from "/home/pegasuswings/public_html/admin/templates/default/seo_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:17240792165d77d0b5268aa1_91552425%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153d7cd93107ec46d603983fdd742a0a2203b568' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/seo_settings.html',
      1 => 1551723608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17240792165d77d0b5268aa1_91552425',
  'variables' => 
  array (
    'lng' => 0,
    'error' => 0,
    'successful' => 0,
    'seo_settings' => 0,
    'template_path' => 0,
    'demo' => 0,
    'seo_pages' => 0,
    'v' => 0,
    'languages' => 0,
    'l' => 0,
    'live_site' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77d0b5466942_46756273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77d0b5466942_46756273')) {
function content_5d77d0b5466942_46756273 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17240792165d77d0b5268aa1_91552425';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['seo_settings'];?>
</div>

<div class="p30">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value != '') {?> <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['successful']->value) && $_smarty_tpl->tpl_vars['successful']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['settings_saved'];?>
</div><?php }?>
<div class="wait"></div>

<form name="settings" method="post" action="">
<div class="form_container">

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_mod_rewrite'];?>
</div>
	<div class="right_form">
		<div class="lfloat"><input type="checkbox" name="enable_mod_rewrite" id="enable_mod_rewrite" <?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>checked="checked"<?php }?> /></div>
		<div class="ml10 lfloat information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['mod_rewrite'];?>
</div>	
	</div>
</div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
	<fieldset>
		<legend><a href="javascript:;" id="edit_structure"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['edit_links_structure'];?>
 [<span class="plus">+</span><span class="minus hidden">-</span>]</a></legend>
		<div id="links_structure" class="hidden">
		
		<div><span>Search page:</span> /&nbsp;<input name="listings" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['listings'];?>
" />&nbsp;/category_slug/</div>
		<div><span>User listings page:</span> /&nbsp;<input name="user_listings" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['user_listings'];?>
" />&nbsp;/user_slug/</div>
		<div><span>Dealers page:</span> /&nbsp;<input name="store" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['store'];?>
" />&nbsp;/store_slug/</div>
		<div><span>Content page:</span> /&nbsp;<input name="content" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['content'];?>
" />&nbsp;/content_slug/</div>
		<div><span>Affiliate page:</span> /&nbsp;<input name="affiliate" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['affiliate'];?>
" />&nbsp;/affiliate_slug/</div>
		<div><span>Recent ads page:</span> /&nbsp;<input name="recent_ads" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['recent_ads'];?>
" /></div>
		<div><span>Featured ads page:</span> /&nbsp;<input name="featured_ads" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['featured_ads'];?>
" /></div>
		<div><span>Auctions page:</span> /&nbsp;<input name="auctions" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['auctions'];?>
" /></div>
		<div><span>Login page:</span> /&nbsp;<input name="login" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['login'];?>
" />&nbsp;</div>
		<div><span>Register page:</span> /&nbsp;<input name="register" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['register'];?>
" /></div>
		<div><span>Logout page:</span> /&nbsp;<input name="logout" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['logout'];?>
" /></div>
		<div><span>Favorites page:</span> /&nbsp;<input name="favorites" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['favorites'];?>
" /></div>
		<div><span>Contact page:</span> /&nbsp;<input name="contact" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['contact'];?>
" /></div>
		<div><span>Pre-submit page:</span> /&nbsp;<input name="pre_submit" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['pre_submit'];?>
" /></div>
		<div><span>Refine page:</span> /&nbsp;<input name="refine" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['refine'];?>
" /></div>
		<div><span>Contact user page:</span> /&nbsp;<input name="contact_details" type="text" size="10" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['contact_details'];?>
" /></div>
		</div>
		
		<div><em><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['info']['links_structure'];?>
</em></div>
		
		
		<div id="current_links_structure" class="hidden mt20">
<textarea rows="20" cols="70" id="tcls">RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['recent_ads'];?>
 recent_ads.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['featured_ads'];?>
 featured_ads.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['auctions'];?>
 auctions.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['register'];?>
 register.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['login'];?>
 login.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['logout'];?>
 logout.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['favorites'];?>
 favorites.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['contact'];?>
 contact.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['pre_submit'];?>
 pre-submit.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['refine'];?>
 refine.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['listings'];?>
/?$ listings.php [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['listings'];?>
/([^./]+) listings.php?category_slug=$1 [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['user_listings'];?>
/([^./]+) user_listings.php?user_slug=$1 [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['store'];?>
/([^./]+) store.php?user_slug=$1 [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['contact_details'];?>
/([^./]+) contact_details.php?user_slug=$1 [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['content'];?>
/([^./]+) content.php?cp_slug=$1 [nc,qsa]
RewriteRule ^([^./]+)$ index.php?category_slug=$1 [nc,qsa]
RewriteRule ^([^./]+)/([^./]+)/?$ details.php?category_slug=$1&listing_slug=$2 [nc,qsa]
RewriteRule ^<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['sef_links']['affiliate'];?>
/([^./]+)$ index.php?aff=$1 [nc,qsa]
</textarea>
		</div>
		
	</fieldset>
	</div>
</div>

<div class="clearfix hidden" id="div_sef">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['sef_legacy_mode'];?>
</div>
	<div class="right_form">
		<div class="lfloat"><input type="checkbox" name="sef_legacy_mode" <?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['sef_legacy_mode']) {?>checked="checked"<?php }?> /></div>
		<div class="ml10 lfloat information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['info']['sef_legacy_mode'];?>
</div>	
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['info']['maximum_slug_width'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['maximum_slug_width'];?>
</div>
	<div class="right_form"><input type="text" size="6" name="maximum_slug_width" id="maximum_slug_width" value="<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['maximum_slug_width'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>

	
	&nbsp;&nbsp;<div class="buttons">
		<span class="positive"><a href="javascript:;" <?php if (!$_smarty_tpl->tpl_vars['demo']->value) {?>id="Regenerate_ls"<?php } else { ?> onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['regenerate_listing_slugs'];?>
</a></span>&nbsp;&nbsp;
		
		<span class="positive"><a href="javascript:;" <?php if (!$_smarty_tpl->tpl_vars['demo']->value) {?>id="Regenerate_us"<?php } else { ?> onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['regenerate_user_slugs'];?>
</a></span>
	</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['analytics_code'];?>
</div>
	<div class="right_form"><textarea name="analytics_code" rows="4" cols="50"><?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['analytics_code'];?>
</textarea></div>
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


<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">


<?php
$_from = $_smarty_tpl->tpl_vars['seo_pages']->value;
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
	<td style="text-align: left" class="row" id="row<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
">
		<span class="bold"><?php echo $_smarty_tpl->tpl_vars['v']->value['page_description'];?>
 </span>[<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
.php]<br/>
		<div id="sp_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
" style="display: none;">
		<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?><i><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['page_title'];
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['l']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['l']->value['image'];?>
"><?php } else {
echo $_smarty_tpl->tpl_vars['l']->value['name'];
}?>&nbsp;&nbsp;<?php }?></i>: <span id="span_title_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'][$_smarty_tpl->tpl_vars['l']->value['id']];?>
</span><br/><?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

		<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?><i><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['meta_keywords'];
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['l']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['l']->value['image'];?>
"><?php } else {
echo $_smarty_tpl->tpl_vars['l']->value['name'];
}?>&nbsp;&nbsp;<?php }?></i>: <span id="span_meta_keywords_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['meta_keywords'][$_smarty_tpl->tpl_vars['l']->value['id']];?>
</span><br/><?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

		<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?><i><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['meta_description'];
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['l']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['l']->value['image'];?>
"><?php } else {
echo $_smarty_tpl->tpl_vars['l']->value['name'];
}?>&nbsp;&nbsp;<?php }?></i>: <span id="span_meta_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['meta_description'][$_smarty_tpl->tpl_vars['l']->value['id']];?>
</span><br/><?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
		</div>

		<div id="sp_edit_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
" class="edit_page" style="display: none; background: #f9f9f9; padding: 10px;">
		<form name="settings_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
" id="settings_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
" class="save" method="post" action="">
		<input type="hidden" name="page" id="page" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
">
		<br/>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['tags']) {?><div class="clearfix" style="padding-bottom: 10px;"><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['tags'];?>
:</b> <?php
$_from = $_smarty_tpl->tpl_vars['v']->value['tags'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_tags_loop'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_tags_loop']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
if ((isset($_smarty_tpl->tpl_vars['__foreach_tags_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_tags_loop']->value['index'] : null) > 0) {?>, <?php }
echo $_smarty_tpl->tpl_vars['t']->value;
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?></div><?php }?>
		<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?><div class="left_div"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['page_title'];
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['l']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['l']->value['image'];?>
"><?php } else {
echo $_smarty_tpl->tpl_vars['l']->value['name'];
}?>&nbsp;&nbsp;<?php }?></div><div class="right_div"><textarea name="title_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" id="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" cols="120" rows="2" /><?php echo $_smarty_tpl->tpl_vars['v']->value['title'][$_smarty_tpl->tpl_vars['l']->value['id']];?>
</textarea></div><div class="clearfix"></div><?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

		<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?><div class="left_div"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['meta_keywords'];
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['l']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['l']->value['image'];?>
"><?php } else {
echo $_smarty_tpl->tpl_vars['l']->value['name'];
}?>&nbsp;&nbsp;<?php }?></div><div class="right_div"><textarea name="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" id="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" rows="2" cols="120"><?php echo $_smarty_tpl->tpl_vars['v']->value['meta_keywords'][$_smarty_tpl->tpl_vars['l']->value['id']];?>
</textarea></div><div class="clearfix"></div><?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

		<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?><div class="left_div"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['meta_description'];
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['l']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['l']->value['image'];?>
"><?php } else {
echo $_smarty_tpl->tpl_vars['l']->value['name'];
}?>&nbsp;&nbsp;<?php }?></div><div class="right_div"><textarea name="meta_description_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" id="meta_description_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" rows="3" cols="120"><?php echo $_smarty_tpl->tpl_vars['v']->value['meta_description'][$_smarty_tpl->tpl_vars['l']->value['id']];?>
</textarea></div><div class="clearfix"></div><?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
		

		<div class="left_div"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['noindex'];?>
</div><div class="right_div">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['page'] == "listings") {?>
		<input type="radio" name="noindex" value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['noindex'] == 0) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];?>
&nbsp;&nbsp;
		<input type="radio" name="noindex" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['noindex'] == 1) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];?>
&nbsp;&nbsp;
		<input type="radio" name="noindex" value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['noindex'] == 2) {?> checked="checked" <?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['seo_settings']['when_no_listings'];?>
&nbsp;&nbsp;
		<?php } else { ?>
		<input type="checkbox" name="noindex" id="noindex" <?php if ($_smarty_tpl->tpl_vars['v']->value['noindex']) {?>checked="checked"<?php }?> />&nbsp;&nbsp;<span class="information1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['noindex'];?>
</span>
		<?php }?>
		</div><div class="clearfix"></div>

		<div class="buttons dcenter"<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Save" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></spam>
		</div>
		</form>
		</div>

	</td>
	<td>
		<span><a href="javascript:;" class="edit" id="edit_<?php echo $_smarty_tpl->tpl_vars['v']->value['page'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
"></a></span>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>


</div> 


<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[

jQuery(document).ready(function() {

jQuery(document).on("submit", ".save", function(event){ 

	var page = jQuery(this).attr("id").substr(9);

	<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
	var title_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
 = jQuery("#title_"+page+"_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
").val();
	var meta_keywords_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
 = jQuery("#meta_keywords_"+page+"_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
").val();
	var meta_description_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
 = jQuery("#meta_description_"+page+"_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
").val();
	<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

	event.preventDefault();
	jQuery.post("seo_settings.php", jQuery(this).serialize(), function(data) {

		try
		{
			
			<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
			jQuery("#span_title_"+page+"_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
").html(title_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
);
			jQuery("#span_meta_keywords_"+page+"_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
").html(meta_keywords_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
);
			jQuery("#span_meta_description_"+page+"_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
").html(meta_description_<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
);
			<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
			

			//jQuery("#sp_"+page).slideDown();
			jQuery("#sp_edit_"+page).slideUp();

		}
		catch(e)
		{
		}

		
	});
	
}); 

jQuery(".edit").click(function(){ 

	var page = jQuery(this).attr("id").substr(5);
	if($("#sp_edit_"+page).is(":visible") ) {
//		jQuery("#sp_"+page).slideDown();
		jQuery("#sp_edit_"+page).slideUp();
		$('html,body').animate({scrollTop:$("#sp_edit_"+page).offset().top-60}, 'slow');

	}
	else {
		jQuery(".edit_page").slideUp();
//		jQuery("#sp_"+page).slideUp();
		jQuery("#sp_edit_"+page).slideDown();
	}

 });


jQuery(".row").mouseover(function() {
    var page = jQuery(this).attr("id").substr(3);
    jQuery(this).data('powertiptarget', 'sp_'+page);
});

// hook PowerTip to the anchors
jQuery('.row').powerTip();


if ($('#enable_mod_rewrite').attr('checked')) $("#div_sef").show();
else $("#div_sef").hide();

jQuery("#enable_mod_rewrite").change(function(){ 
	if ($('#enable_mod_rewrite').is(':checked')) $("#div_sef").show();
	else $("#div_sef").hide();
});

$("#edit_structure").click(function(){
	$("#links_structure").toggle();
	if ($('#links_structure').is(':visible')) { 
		$(".plus").hide();
		$(".minus").show();
	} else {
		$(".plus").show();
		$(".minus").hide();
	}
});

$("#show_current_links_structure").click(function(){
	$("#current_links_structure").toggle();
});

$("#tcls").click(function(){
	$("#tcls").select();
    document.execCommand('copy');
});





	$("#Regenerate_ls").click(function(){

		$("body").addClass("loading");
		genSlugs('listing', '');

	});

	$("#Regenerate_us").click(function(){

		$("body").addClass("loading");
		genSlugs('user', '');

	});

	function genSlugs(type, crt) {

		var d="type="+type;
		if(crt) d+="&crt="+crt;
		$.ajax({method: "get",
		url: "include/generate_slug.php",
		data: d,
		beforeSend: function() {  },
		complete: function() { },
		success: function(returnedData)
		{
			//alert("success"+returnedData);
			if(returnedData>0) { genSlugs(type, returnedData); }
			else $("body").removeClass("loading"); 
		}
		});
	}




});
<?php echo '</script'; ?>
>


<style>

#links_structure div { height: 40px; }
fieldset div span { display: block; float: left; width: 120px; font-weight: bold; }

</style>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>