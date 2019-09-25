<?php /* Smarty version 3.1.24, created on 2019-06-11 18:03:17
         compiled from "/home/pegasuswings/public_html/admin/templates/default/manage_listings.html" */ ?>
<?php
/*%%SmartyHeaderCode:8527356265cffece561ce94_87691293%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731d0cad029342d0018aab1ec2ef66427f95dc53' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/manage_listings.html',
      1 => 1552733870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8527356265cffece561ce94_87691293',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'demo' => 0,
    'ads_settings' => 0,
    'pages_link' => 0,
    'show' => 0,
    'order_by_link' => 0,
    'order' => 0,
    'order_way_link' => 0,
    'order_way' => 0,
    'page' => 0,
    'no_per_page' => 0,
    'post_array' => 0,
    'settings' => 0,
    'categories' => 0,
    'v' => 0,
    'plans' => 0,
    'listings_array' => 0,
    'seo_settings' => 0,
    'live_site' => 0,
    'data_set' => 0,
    'modules_array' => 0,
    'pe_settings' => 0,
    'total' => 0,
    'crt_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffece57210e5_01537523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffece57210e5_01537523')) {
function content_5cffece57210e5_01537523 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_mb_wordwrap')) require_once '/home/pegasuswings/public_html/libs/plugins/shared.mb_wordwrap.php';

$_smarty_tpl->properties['nocache_hash'] = '8527356265cffece561ce94_87691293';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_listings'];?>
</div>

<div class="p30">
<form name="browse" id="browse" method="post" action="manage_listings.php">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['add'] == 1) {?>
	<a href="new_listing.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
"></a>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['delete'] == 1) {?>
	<input type="image" value="delete_selected" name="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" class="tooltip icon" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['confirm_delete_all']);?>
')<?php }?>" style="border: 0px;">
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['edit'] == 1) {?>
	<input type="image" value="activate_selected" name="activate_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/activate_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['activate_all'];?>
" class="tooltip icon" onclick="return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['confirm_activate_all']);?>
')" style="border: 0px;">

	<input type="image" value="deactivate_selected" name="deactivate_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/deactivate_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['deactivate_all'];?>
" class="tooltip icon" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['confirm_deactivate_all']);?>
')<?php }?>" style="border: 0px;">
	<?php }?>
	
	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_sold']) {?>
	<input type="image" value="sold_selected" name="sold_selected" id="sold_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mm-sold.png" style="border: 0px;" class="tooltip icon" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['mark_sold'];?>
"/>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_rented']) {?>
	<input type="image" value="rented_selected" name="rented_selected" id="rented_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mm-rented.png" style="border: 0px;" class="tooltip icon" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['mark_rented'];?>
"/>
	<?php }?>

	
</div>

<div class="lfloat">
		<select name="show" onChange="doSel(this);">

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=all'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "all") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['all'];?>
</option>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['pending_edited']) {?>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=pe'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "pe") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending_edited'];?>
</option>
		<?php }?>

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=active'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "active") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['active_listings'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=inactive'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "inactive") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['inactive_listings'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=pending'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "pending") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending_listings'];?>
</option>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=featured'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "featured") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['featured_listings'];?>
</option><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=highlited'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "highlited") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['highlited_listings'];?>
</option><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=priorities'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "priorities") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['priorities_listings'];?>
</option><?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=urgent'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "urgent") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['urgent_listings'];?>
</option><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_video']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=video'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "video") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['video_listings'];?>
</option><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_url']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=url'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "url") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['url_listings'];?>
</option><?php }?>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=expired'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "expired") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expired_listings'];?>
</option>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_sold']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=sold'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "sold") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['sold_listings'];?>
</option><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_rented']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=rented'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "rented") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['rented_listings'];?>
</option><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions']) {?><option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=auctions'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "auctions") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['listings_with_auctions'];?>
</option><?php }?>

		</select>

		<select name="order" onChange="doSel(this);">

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','date_added');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'date_added') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_date'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','price');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'price') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_price'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','title');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'title') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_title'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','viewed');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'viewed') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['order_by_views'];?>
</option>

		</select>

		<select name="order_way" onChange="doSel(this);">

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_way_link']->value,'##order_way##','desc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'desc') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_way_link']->value,'##order_way##','asc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'asc') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>

		</select>

</div>

<div class="buttonwrapper lfloat ml10"><div class="button3-left">

	<a href="javascript:;" id="add_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-down-arrow.png" /></span></a>

	<a href="javascript:;" id="remove_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-up-arrow.png" /></span></a>

</div></div>

</div>

<div class="rfloat">
<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<div class="clearfix"></div>

<div id="search_box" >

<input type="hidden" name="page" value = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<input type="hidden" name="show" value = "<?php echo $_smarty_tpl->tpl_vars['show']->value;?>
" />
<input type="hidden" name="order" value = "<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" />
<input type="hidden" name="order_way" value = "<?php echo $_smarty_tpl->tpl_vars['order_way']->value;?>
" />
<input type="hidden" name="no_per_page" value = "<?php echo $_smarty_tpl->tpl_vars['no_per_page']->value;?>
" />

<input type="text" name="id" size="6" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['id'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['id'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['id'];
}?>"/>

<input type="text" name="keyword" size="15" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['keyword'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['keyword'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['keyword'];
}?>" />

<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
<input type="text" name="username" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['username'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['username'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['username'];
}?>" />
<?php }?>

<input type="text" name="email" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['email'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['email'];
}?>" />

<input type="text" name="ip" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['ip'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['ip'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['ip'];
}?>" />

<select name="category_id">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
</option>
<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['category_id']) && $_smarty_tpl->tpl_vars['post_array']->value['category_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }
if ($_smarty_tpl->tpl_vars['v']->value['parent']) {?> class="opt_parent"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</select>

<select name="package_id">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['package'];?>
</option>
<?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['package_id']) && $_smarty_tpl->tpl_vars['post_array']->value['package_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</select>

<input name="date_from_vis" id="date_from_vis" type="text" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['date_start'];?>
"/>
<input name="date_from" id="date_from" type="hidden"/>

<input name="date_to_vis" id="date_to_vis" type="text" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['date_end'];?>
" />
<input name="date_to" id="date_to" type="hidden" />

<div class="buttons"><strong><input type="submit" name="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></strong></div>


</div> 


<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width="30"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['id'];?>
</th>
	<th width= "80"></th>
	<th class="laligned" style="padding-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['ad_information'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['posted_by'];?>
</th>
	<th width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['date'];?>
</th>
	<th width="40"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['views'];?>
</th>
	<th width="40"></th>
	<th width="80" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['listings_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['active']) {?>inactive<?php }
if ($_smarty_tpl->tpl_vars['v']->value['pending']) {?> pending<?php }?>">
	<td <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && isset($_smarty_tpl->tpl_vars['v']->value['auction']) && $_smarty_tpl->tpl_vars['v']->value['auction']) {?>rowspan="2"<?php }?>><input type="checkbox" name="ad<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="ad<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" /></td>
	<td <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && isset($_smarty_tpl->tpl_vars['v']->value['auction']) && $_smarty_tpl->tpl_vars['v']->value['auction']) {?>rowspan="2"<?php }?>>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td class="nop" <?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && isset($_smarty_tpl->tpl_vars['v']->value['auction']) && $_smarty_tpl->tpl_vars['v']->value['auction']) {?>rowspan="2"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['v']->value['title'],'',$_smarty_tpl->tpl_vars['v']->value['category_id'],$_smarty_tpl->tpl_vars['v']->value['slug']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?>"><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" alt="" /></a></td>
	<td class="laligned">
		<div><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['v']->value['title']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?>" target="_blank"><?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['v']->value['title'],40," ",true);?>
</a></div>
		<?php if ($_smarty_tpl->tpl_vars['data_set']->value == "cars") {?><div><?php if (isset($_smarty_tpl->tpl_vars['v']->value['make'])) {
echo $_smarty_tpl->tpl_vars['v']->value['make'];?>
 <?php }
if (isset($_smarty_tpl->tpl_vars['v']->value['model'])) {
echo $_smarty_tpl->tpl_vars['v']->value['model'];
}?></div><?php }?>
		<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
: <?php if (isset($_smarty_tpl->tpl_vars['v']->value['category'])) {
echo $_smarty_tpl->tpl_vars['v']->value['category'];
}?></div>
		<div><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['package'];?>
: <?php if (isset($_smarty_tpl->tpl_vars['v']->value['package'])) {
echo $_smarty_tpl->tpl_vars['v']->value['package'];
}?></div>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_price']) {?>
		
		<?php if (in_array("price_extra",$_smarty_tpl->tpl_vars['modules_array']->value) && isset($_smarty_tpl->tpl_vars['pe_settings']->value[$_smarty_tpl->tpl_vars['v']->value['fieldset']])) {?>
	
		<?php echo $_smarty_tpl->getSubTemplate ("modules/price_extra/manage_listings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
		<?php } else { ?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['price'] >= 0) {?><div><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['price'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['price_curr'];?>
</div><?php }?>
 
		<?php }?>
			
		<?php }?> 

		
		
		
		<?php if (isset($_smarty_tpl->tpl_vars['v']->value['code']) && $_smarty_tpl->tpl_vars['v']->value['code']) {
echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['coupon'];?>
: <div class="sc1"><?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
</div><?php }?>
	</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['user_id']) {?><a href="javascript:;" class="usrinfo sc1 underline" id="info<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"><?php }
if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['email'];
}
if (!$_smarty_tpl->tpl_vars['v']->value['user_id']) {?><br/><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];
}
if ($_smarty_tpl->tpl_vars['v']->value['user_id']) {?></a><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['added_on'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['expired']) {?><br /><span class="sc2"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expired_on'];?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value['date_expires_nice'];?>
</span>
	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['date_expires'] && $_smarty_tpl->tpl_vars['v']->value['date_expires'] != "0000-00-00 00:00:00") {?><br /><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expires_on'];?>
:<br /><?php echo $_smarty_tpl->tpl_vars['v']->value['date_expires_nice'];?>

	<?php } else { ?><br /><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expires_on'];?>
: <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['never'];?>

	<?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['viewed'];?>
</td>

	<td class="laligned">

		<?php if ($_smarty_tpl->tpl_vars['v']->value['active']) {?>
		<div class="small-btn activebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['active'];?>
</div>
		<?php } elseif (!$_smarty_tpl->tpl_vars['v']->value['user_approved']) {?>
		<div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['not_approved'];?>
</div>
		<?php } else { ?>
		<div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['inactive'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['pending'] || count($_smarty_tpl->tpl_vars['v']->value['pending_actions'])) {?>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['edit'] == 1) {?>
		<?php if (count($_smarty_tpl->tpl_vars['v']->value['pending_actions']) > 0) {?>
		<a href="javascript:;" class="invoice" id="inv<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php } else { ?>
		<a href="javascript:;" onclick="onAccept('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');">
		<?php }?>
		<?php }?>
		<div class="small-btn pendingbutton icon tooltip"  title="<?php echo $_smarty_tpl->tpl_vars['v']->value['pending_info'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending'];?>
</div>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['edit'] == 1) {?>
		</a>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['pending_edited'] && $_smarty_tpl->tpl_vars['v']->value['pending_edited']) {?>
		<a href="review_pending_edited.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank">
		<div class="small-btn pebutton icon tooltip"  title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending_edited'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pe'];?>
</div>
		</a>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['expired']) {?>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['edit'] == 1) {?>
		<a href="javascript:;" onclick="onRenew('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['confirm_renew']);?>
')">
		<?php }?>
		<div class="small-btn expiredbutton icon tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['renew'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expired'];?>
</div>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['edit'] == 1) {?>
		</a>
		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_sold'] && $_smarty_tpl->tpl_vars['v']->value['sold']) {?>
		<div class="small-btn soldbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['sold'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_rented'] && $_smarty_tpl->tpl_vars['v']->value['rented']) {?>
		<div class="small-btn rentedbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['rented'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured'] && $_smarty_tpl->tpl_vars['v']->value['featured']) {?>
		<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['featured'];
if (isset($_smarty_tpl->tpl_vars['v']->value['featured_no_days']) && $_smarty_tpl->tpl_vars['v']->value['featured_no_days']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['featured_no_days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['days'];
}?></div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited'] && $_smarty_tpl->tpl_vars['v']->value['highlited']) {?>
		<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['highlited'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities'] && isset($_smarty_tpl->tpl_vars['v']->value['priority_name']) && $_smarty_tpl->tpl_vars['v']->value['priority_name']) {?>
		<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['v']->value['priority_name'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent'] && $_smarty_tpl->tpl_vars['v']->value['urgent']) {?>
		<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['urgent'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_video'] && isset($_smarty_tpl->tpl_vars['v']->value['enable_video']) && $_smarty_tpl->tpl_vars['v']->value['enable_video']) {?>
		<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['short_video'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_url'] && isset($_smarty_tpl->tpl_vars['v']->value['enable_url']) && $_smarty_tpl->tpl_vars['v']->value['enable_url']) {?>
		<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['url'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['priority'] == 100) {?>
		<div class="small-btn optionsbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['bumped'];?>
</div>
		<?php }?>
		
	</td>

	<td class="laligned">

		<a href="javascript:;" class="mailto" id="mail<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mail.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['mail'];?>
"></a>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['edit'] == 1) {?>
		<span align=center><a href="edit_listing.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
"></a></span>

		<span align="center"><a href="edit_photos.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit_photos.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['edit_photos'];?>
">
		</a></span>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['delete'] == 1) {?>
		<a href="javascript:;" onclick="onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['confirm_delete']);?>
', 'listing');"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
"></a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['listings']['edit'] == 1) {?>
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
		<a href="javascript:;" onclick="onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','listing', '');"><img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
"></a>
		<?php } else { ?>
		<a href="javascript:;" onclick="onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','listing','');"><img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
"></a>
		<?php }?>
		</span>

		<a href="javascript:;" class="adsettings" id="sett<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit_options.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['modify_ad_settings'];?>
"></a>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_sold']) {?>
		<span id="div_sold<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['sold'] == 0) {?>
		<a href="javascript:;" onclick="onSold('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','listing');"><img id="sold<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mark_sold.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['mark_sold'];?>
"></a>
		<?php } else { ?>
		<a href="javascript:;" onclick="onUnsold('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','listing');"><img id="unsold<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mark_unsold.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['mark_unsold'];?>
"></a>
		<?php }?>
		</span>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_rented']) {?>
		<span id="div_rented<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['rented'] == 0) {?>
		<a href="javascript:;" onclick="onRented('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','listing');"><img id="rented<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mark_rented.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['mark_rented'];?>
"></a>
		<?php } else { ?>
		<a href="javascript:;" onclick="onUnrented('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','listing');"><img id="unrented<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/mark_unrented.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['mark_unrented'];?>
"></a>
		<?php }?>
		</span>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['expired']) {?>
		<a href="javascript:;" onclick="onRenew('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['confirm_renew']);?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/renew.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['renew'];?>
"></a>
		<?php }?>

		<span id="div_block<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<a <?php if ($_smarty_tpl->tpl_vars['v']->value['user_id']) {?>class="block" id="blk<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"<?php } else { ?>class="lblock" id="blk<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"<?php }?>>
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/block.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['block_unblock'];?>
" alt="">
		</a>
		</span>
		<?php }?> 

</tr>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_auctions'] && $_smarty_tpl->tpl_vars['v']->value['auction']) {?>
<tr><td colspan="6" class="laligned">



	<div class="lfloat">

	<b><?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['auction'];?>
</b> | 

	</div> 



	<div class="lfloat">

	<?php if ($_smarty_tpl->tpl_vars['v']->value['auction']['active']) {?>

	<div class="small-btn activebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['active'];?>
</div>
	<?php } else { ?>

	<div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['inactive'];?>
</div>
	<?php }?>

	</div>



	<div class="lfloat">

	<?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['placed_on'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['auction']['date_nice'];?>
 | <?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['auction_start_price'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['v']->value['auction']['starting_price'];?>
</b> | <?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['no_bids'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['auction']['no_bids'];?>
 <?php if ($_smarty_tpl->tpl_vars['v']->value['auction']['no_bids'] > 0) {?>| <?php echo $_smarty_tpl->tpl_vars['lng']->value['auction']['max_bid'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['v']->value['auction']['max_bid'];?>
</b><?php }?>

	</div>


</td></tr>

<?php }?>


<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>
	<tr><td colspan="9"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['no_listings'];?>
</td></tr>
<?php }?>
</table>
</form>

<?php if ($_smarty_tpl->tpl_vars['total']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div><?php }?>

<div class="mt20">
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['show'];?>

	<select name="no_per_page_sel" onchange="doSel(this);">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pg'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['name'] = 'pg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = (int) 10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] = ((int) 10) == 0 ? 1 : (int) 10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total']);
?>
		<option value="location.href='<?php echo $_smarty_tpl->tpl_vars['crt_page_link']->value;?>
&no_per_page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index'];?>
'" <?php if ($_smarty_tpl->tpl_vars['no_per_page']->value == $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index'];?>
</option>
		<?php endfor; endif; ?>
	</select>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['on_a_page'];?>

</div>

</div> 


<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {


	$("input").keypress(function(e)
	{
       		// if the key pressed is the enter key
       		if (e.which == 13)
       		{

			// delay action so the autocomplete list to fill
			setTimeout(function() { $("#search").submit();}, 200);

			return false;
       		}
	});
	$("#add_search").hide();
	//$("#search_box").hide();
	$("#add_search").click(function()
	{
		$("#remove_search").show();
		$("#add_search").hide();
		$("#search_box").slideDown('fast').show();
			
	});

	$("#remove_search").click(function()
	{
		$("#add_search").show();
		$("#remove_search").hide();
		$("#search_box").hide().slideUp('fast');
	});

	$("#check_all").click(function()
	{

		if ($('#check_all').is(':checked')) checkAll(document);
		else uncheckAll(document);

	});


$("a.invoice").click(function(event){
	var listing_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 650,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/selective_invoice_accept.php?id='+listing_id+'&type=ad',
		'onClosed': function(){ location.reload(true); }
	});
});

$("a.adsettings").click(function(event){
	var listing_id = jQuery(this).attr("id").substr(4);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 650,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/edit_ad_settings.php?id='+listing_id,
		'onClosed': function(){ location.reload(true); }
	});
});

$("a.mailto").click(function(event){
	var listing_id = jQuery(this).attr("id").substr(4);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 650,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/mailto.php?aid='+listing_id,
		'onClosed': function(){ location.reload(false); }
	});
});

$("a.block").click(function(event){
	var user_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 650,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/block_item.php?id='+user_id
	});
});

$("a.lblock").click(function(event){
	var listing_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 650,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/block_item.php?listing_id='+listing_id
	});
});

$("a.usrinfo").click(function(event){
	var user_id = jQuery(this).attr("id").substr(4);
	$.fancybox({
		'width'         		: 730,
		'height'        		: 700,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/info_user.php?id='+user_id
	});
});

}); // end document ready


	$(function() {
		$('#date_from_vis').datepicker({
			dateFormat: "M dd yy",
			changeMonth: true,
			changeYear: true,
			altField: '#date_from', altFormat: 'yy-mm-dd'
		});

		$('#date_to_vis').datepicker({
			dateFormat: "M dd yy",
			changeMonth: true,
			changeYear: true,
			altField: '#date_to', altFormat: 'yy-mm-dd'
		});
	});


<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>