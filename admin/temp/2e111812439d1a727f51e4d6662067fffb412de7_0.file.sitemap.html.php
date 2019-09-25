<?php /* Smarty version 3.1.24, created on 2019-06-11 19:01:39
         compiled from "/home/pegasuswings/public_html/admin/templates/default/sitemap.html" */ ?>
<?php
/*%%SmartyHeaderCode:18940794145cfffa93c416a5_99366112%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e111812439d1a727f51e4d6662067fffb412de7' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/sitemap.html',
      1 => 1493976572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18940794145cfffa93c416a5_99366112',
  'variables' => 
  array (
    'lng' => 0,
    'error' => 0,
    'info' => 0,
    'sitemap_settings' => 0,
    'freq' => 0,
    'k' => 0,
    'v' => 0,
    'sitemap_link' => 0,
    'auto_freq' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cfffa93c95af0_86646558',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cfffa93c95af0_86646558')) {
function content_5cfffa93c95af0_86646558 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '18940794145cfffa93c416a5_99366112';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['google_sitemap'];?>
</div>

<div class="p30">
<form name="sitemap" method="post" action="sitemap.php" enctype="multipart/form-data">

<div class="form_container" style="padding-top: 0px !important">

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['sitemap']['sitemap_general']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enabled" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['enabled'] == 1) {?> checked <?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['priority'];?>
</div>
	<div class="right_form"><input type="text" size="10" name="priority" value="<?php echo $_smarty_tpl->tpl_vars['sitemap_settings']->value['priority'];?>
" />&nbsp;&nbsp;<span class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['info']['priority'];?>
</span></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['changefreq'];?>
</div>
	<div class="right_form">
		<select name="changefreq">
			<?php
$_from = $_smarty_tpl->tpl_vars['freq']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['changefreq'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><?php echo $_smarty_tpl->tpl_vars['sitemap_link']->value;?>
</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['sitemap']['sitemap_categories']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="write_categories" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['write_categories'] == 1) {?> checked <?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['priority'];?>
</div>
	<div class="right_form"><input type="text" size="10" name="categories_priority" value="<?php echo $_smarty_tpl->tpl_vars['sitemap_settings']->value['categories_priority'];?>
" />&nbsp;&nbsp;<span class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['info']['priority'];?>
</span></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['changefreq'];?>
</div>
	<div class="right_form">
		<select name="categories_changefreq">
			<?php
$_from = $_smarty_tpl->tpl_vars['freq']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['categories_changefreq'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['sitemap']['sitemap_listings']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="write_listings" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['write_listings'] == 1) {?> checked <?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['priority'];?>
</div>
	<div class="right_form"><input type="text" size="10" name="listings_priority" value="<?php echo $_smarty_tpl->tpl_vars['sitemap_settings']->value['listings_priority'];?>
" />&nbsp;&nbsp;<span class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['info']['priority'];?>
</span></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['changefreq'];?>
</div>
	<div class="right_form">
		<select name="listings_changefreq">
			<?php
$_from = $_smarty_tpl->tpl_vars['freq']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['listings_changefreq'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['listings_no'];?>
</div>
	<div class="right_form"><input type="text" size="10" name="listings_no" value="<?php echo $_smarty_tpl->tpl_vars['sitemap_settings']->value['listings_no'];?>
" /></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['sitemap']['sitemap_custom_pages']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
</div>
	<div class="right_form"><input type="checkbox" name="write_custom_pages" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['write_custom_pages'] == 1) {?> checked <?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['priority'];?>
</div>
	<div class="right_form"><input type="text" size="10" name="cp_priority" value="<?php echo $_smarty_tpl->tpl_vars['sitemap_settings']->value['cp_priority'];?>
" />&nbsp;&nbsp;<span class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['info']['priority'];?>
</span></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['changefreq'];?>
</div>
	<div class="right_form">
		<select name="cp_changefreq">
			<?php
$_from = $_smarty_tpl->tpl_vars['freq']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['cp_changefreq'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['sitemap']['extra_entries']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['info']['extra_entries'];?>
</div>
	<div class="right_form"><textarea rows="5" cols="90" name="extra_entries" /><?php echo $_smarty_tpl->tpl_vars['sitemap_settings']->value['extra_entries'];?>
</textarea></div>
</div>


<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['sitemap']['auto_generate']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['changefreq'];?>
</div>
	<div class="right_form">
		<select name="auto_write_freq">
			<?php
$_from = $_smarty_tpl->tpl_vars['auto_freq']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['auto_write_freq'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>


<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

<div style="padding: 20px; background: #dee6ea;" class="center">
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Generate" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['sitemap']['generate_now'];?>
" /></span>
	</div>
</div>

</div> 
</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>