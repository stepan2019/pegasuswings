<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/quick-search.html" */ ?>
<?php
/*%%SmartyHeaderCode:13105138975d8934093c3396_15990746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86befc7e3e38d7ba23ce226d315545913b8324e0' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/quick-search.html',
      1 => 1560289382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13105138975d8934093c3396_15990746',
  'variables' => 
  array (
    'self_noext' => 0,
    'live_site' => 0,
    'lng' => 0,
    'categories' => 0,
    'v' => 0,
    'post_array' => 0,
    'keyword_name' => 0,
    'ads_settings' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8934093df939_71254749',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8934093df939_71254749')) {
function content_5d8934093df939_71254749 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13105138975d8934093c3396_15990746';
?>
<div id="quick-search" <?php if ($_smarty_tpl->tpl_vars['self_noext']->value == "index") {?>class="first-page-quick-search"<?php }?>>
<div class="page_bounds">
<form name="qsearch" id="qsearch" method="post" action="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php">
<div id="qs_container">
<div class="home-button"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['home'];?>
</a></div>
	
	<div class="qs_category qsf">
		<select name="qs_category" id="qs_category">
				<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['all_categories'];?>
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
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['category']) && $_smarty_tpl->tpl_vars['post_array']->value['category'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
				<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
			</select>
	</div>
	
	<div class="qs_keyword qsf relative">
	<input type="text" name="qs_<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['keyword_name']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['search_for'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value];
}?>"/>
	<a href="javascript:;" id="remove_qs_keyword" class="close qs_delete<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) || !$_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['keyword_name']->value]) {?> hidden<?php }?>" ></a>
	</div>
	
	<div class="qs_location qsf relative">
	<input type="text" name="qs_location" id="qs_location" placeholder="<?php echo $_smarty_tpl->tpl_vars['lng']->value['quick_search']['location'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['location']) && $_smarty_tpl->tpl_vars['post_array']->value['location']) {
echo $_smarty_tpl->tpl_vars['post_array']->value['location'];
}?>"/>
	<a href="javascript:;" id="remove_qs_location" class="close qs_delete<?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value['location']) || !$_smarty_tpl->tpl_vars['post_array']->value['location']) {?> hidden<?php }?>" ></a>
	
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_distance_search']) {?>
	<div class="qs_distance_search qsf">
		<select name="qs_dist" id="qs_dist" <?php if (!isset($_smarty_tpl->tpl_vars['post_array']->value['location']) || !$_smarty_tpl->tpl_vars['post_array']->value['location']) {?>disabled<?php }?>>
			<option value="0">+&nbsp;0&nbsp;<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['ds_measuring_unit'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['ads_settings']->value['array_ds_distances_list'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['dist']) && $_smarty_tpl->tpl_vars['post_array']->value['dist'] == $_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>>+&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['ds_measuring_unit'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_location_autosuggest']) {?>
	<?php
$_from = $_smarty_tpl->tpl_vars['ads_settings']->value['address_components'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
	<?php if ($_smarty_tpl->tpl_vars['c']->value['field']) {?><input type="hidden" name="qs_<?php echo $_smarty_tpl->tpl_vars['c']->value['field'];?>
" id="qs_<?php echo $_smarty_tpl->tpl_vars['c']->value['field'];?>
" class="location_ac_field" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['c']->value['field']]) && $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['c']->value['field']]) {
echo $_smarty_tpl->tpl_vars['post_array']->value[$_smarty_tpl->tpl_vars['c']->value['field']];
}?>"><?php }?>
	<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_distance_search']) {?>
	<input type="hidden" name="qs_lat" id="qs_lat" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['lat']) && $_smarty_tpl->tpl_vars['post_array']->value['lat']) {
echo $_smarty_tpl->tpl_vars['post_array']->value['lat'];
}?>">

	
	<input type="hidden" name="qs_long" id="qs_long" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['long']) && $_smarty_tpl->tpl_vars['post_array']->value['long']) {
echo $_smarty_tpl->tpl_vars['post_array']->value['long'];
}?>">
	


	<?php }?>
<input type="text" name="id" size="6" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['id'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['id'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['id'];
}?>"/>
	<div class="search-button qsf"><input type="submit" name="Search" id="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
"/></div>
</div>

<div class="clearfix"></div>
	<input type="hidden" name="order" value="date_added" />
	<input type="hidden" name="order_way" value="desc" />

</form>
</div>
</div>
<?php }
}
?>