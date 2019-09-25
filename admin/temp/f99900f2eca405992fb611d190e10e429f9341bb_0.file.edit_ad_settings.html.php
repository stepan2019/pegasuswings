<?php /* Smarty version 3.1.24, created on 2019-06-15 16:15:43
         compiled from "/home/pegasuswings/public_html/admin/templates/default/edit_ad_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:4768443835d0519af0fa224_36087529%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99900f2eca405992fb611d190e10e429f9341bb' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/edit_ad_settings.html',
      1 => 1552733842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4768443835d0519af0fa224_36087529',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'seo_settings' => 0,
    'id' => 0,
    'categories' => 0,
    'v' => 0,
    'options' => 0,
    'packages' => 0,
    'ads_settings' => 0,
    'featured_plans' => 0,
    'priorities' => 0,
    'expires' => 0,
    'months_list' => 0,
    'k' => 0,
    'years_list' => 0,
    'user_id' => 0,
    'no_users' => 0,
    'users' => 0,
    'user_ac' => 0,
    'not_logged_in_fields' => 0,
    'owner_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d0519af1575b2_19626160',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d0519af1575b2_19626160')) {
function content_5d0519af1575b2_19626160 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4768443835d0519af0fa224_36087529';
echo $_smarty_tpl->getSubTemplate ("overlay_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.form.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="wait"></div>

<div class="overlay-top-bg"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['modify_ad_settings'];?>
<a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['id']->value);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" target="_blank"> #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</a></div>

<form name="ad_settings" id="ad_settings" method="post" action="edit_ad_settings.php?post=1&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

<div class="info" style="display: none"></div>

<div class="form2 lpdiv100" style="min-height: 520px;">

<ul>

<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
</label>
	<select id="category" name="category">
		<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_cat'] = new Smarty_Variable(array('iteration' => 0, 'index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_cat']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_cat']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['parent'] == 1) {?>
		<optgroup label="<?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
		<?php } else { ?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['options']->value['category_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php if (((isset($_smarty_tpl->tpl_vars['__foreach_cat']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_cat']->value['index'] : null) != count($_smarty_tpl->tpl_vars['categories']->value)-1 && $_smarty_tpl->tpl_vars['v']->value['parent_id'] != $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__foreach_cat']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_cat']->value['iteration'] : null)]['parent_id']) || ((isset($_smarty_tpl->tpl_vars['__foreach_cat']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_cat']->value['index'] : null) == count($_smarty_tpl->tpl_vars['categories']->value) && $_smarty_tpl->tpl_vars['v']->value['parent_id'] != 0)) {?>
		</optgroup>
		<?php }?>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
</li>

<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['package'];?>
</label>
	<select name="package" id="package">
		<option value=""> -- </option>
		<?php
$_from = $_smarty_tpl->tpl_vars['packages']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['options']->value['package_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
</li>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured']) {?>
<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['featured'];?>
</label>
	<select name="featured" id="featured">
		<option value="0"> -- </option>
		<option value="100" <?php if ($_smarty_tpl->tpl_vars['options']->value['featured'] == 100) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['until_expires'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['featured_plans']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['options']->value['featured'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['no_days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['days'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>

</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited']) {?>
<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['highlited'];?>
</label>
	<input name="highlited" type="checkbox" class="noborder" <?php if ($_smarty_tpl->tpl_vars['options']->value['highlited'] == 1) {?>checked<?php }?> />
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities']) {?>
<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['priority'];?>
</label>
	<select name="priority" id="priority">
		<option value="0"> -- </option>
		<?php
$_from = $_smarty_tpl->tpl_vars['priorities']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" <?php if ($_smarty_tpl->tpl_vars['options']->value['priority'] == $_smarty_tpl->tpl_vars['v']->value['order_no']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent']) {?>
<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['urgent'];?>
</label>
	<input type="checkbox" class="noborder" name="urgent" <?php if ($_smarty_tpl->tpl_vars['options']->value['urgent'] == 1) {?>checked<?php }?>>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_video']) {?>
<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['video'];?>
</label>
	<input type="checkbox" class="noborder" name="video" <?php if ($_smarty_tpl->tpl_vars['options']->value['video'] == 1) {?>checked<?php }?>>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_url']) {?>
<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['url'];?>
</label>
	<input type="checkbox" class="noborder" name="url" <?php if ($_smarty_tpl->tpl_vars['options']->value['url'] == 1) {?>checked<?php }?>>
</li>
<?php }?>

<li>
	<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expires_on'];?>
:</label>
	<input type="radio" name="expires"  value="0" <?php if (!$_smarty_tpl->tpl_vars['expires']->value['date_expires'] || $_smarty_tpl->tpl_vars['expires']->value['date_expires'] == "0000-00-00 00:00:00") {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['never'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="expires" value="1"<?php if ($_smarty_tpl->tpl_vars['expires']->value['date_expires'] && $_smarty_tpl->tpl_vars['expires']->value['date_expires'] != "0000-00-00 00:00:00") {?>checked<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['on_date'];?>

	<input type="text" name="expires_day" value="<?php echo $_smarty_tpl->tpl_vars['expires']->value['day'];?>
" style="width: 50px !important;" />
	&nbsp;
	<select name="expires_month">
		<?php
$_from = $_smarty_tpl->tpl_vars['months_list']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['expires']->value['month'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	&nbsp;
	<select name="expires_year">
		<?php
$_from = $_smarty_tpl->tpl_vars['years_list']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['expires']->value['year'] == $_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	<?php if ($_smarty_tpl->tpl_vars['expires']->value['expired']) {?>
	&nbsp;&nbsp;&nbsp;&nbsp;<font color="#ff0000"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expired_on'];?>
</font>
	<?php }?>
</li>

<li>
	<label>
		<?php if (!$_smarty_tpl->tpl_vars['user_id']->value) {?>
			<input type="radio" name="owner" value="1" />
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
:
	</label>

	<?php if ($_smarty_tpl->tpl_vars['no_users']->value <= 100) {?>
	<select name="user_id">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['user_id']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	<?php } else { ?>
	<input type="text" name="user" id="user" value="<?php if (isset($_smarty_tpl->tpl_vars['user_ac']->value)) {
echo $_smarty_tpl->tpl_vars['user_ac']->value;
}?>" />
	<?php }?>
</li>

<?php if (!$_smarty_tpl->tpl_vars['user_id']->value) {?>
<li><label>or</label><li/>
<li>
	<label><input type="radio" name="owner" value="2" <?php if (!$_smarty_tpl->tpl_vars['user_id']->value) {?>checked="checked"<?php }?> />&nbsp;Posted as guest with data:</label>
	
	
	
	<?php
$_from = $_smarty_tpl->tpl_vars['not_logged_in_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
: <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['owner_info']->value[$_smarty_tpl->tpl_vars['v']->value['caption']];?>
" /><br/>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	
	
</li>
<?php }?>

</ul>

</div> 

<div class="overlay-bottom-bg">
<div class="buttons">
	<strong><input type="submit" name="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></strong>
</div>

</div>

</form>

<?php echo '<script'; ?>
 type="text/javascript">

        $(function() {
                $( "#user" ).autocomplete({
                        source: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=user_ac",
                        minLength: 1
                });
        });


jQuery(document).ready(function() {

	$(".info").hide();

var options = { 

	beforeSerialize: function(jqForm, options){ $("body").addClass("loading") },
        beforeSubmit:  function(formData, jqForm, options) {var queryString = $.param(formData);  return true;  }, 
        success:       successResponse 
 
   }; 

function successResponse(responseText, statusText, xhr, $form)  { 

//alert(responseText);
			var ret = JSON.parse(responseText);

			$("body").removeClass("loading");

			if(ret.response==1) {

				$(".info").html("<p>"+ret.info+"</p>");
				$(".info").show();
				$(".form2").slideUp();
				$(".overlay-bottom-bg").hide();
				return;

			}

} 

 $('#ad_settings').ajaxForm(options);

});


<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("overlay_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>