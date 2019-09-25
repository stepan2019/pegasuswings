<?php /* Smarty version 3.1.24, created on 2019-06-11 17:37:55
         compiled from "/home/pegasuswings/public_html/admin/templates/default/adduser.html" */ ?>
<?php
/*%%SmartyHeaderCode:346403325cffe6f387be27_05221079%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0562ab79119b5103969b2ea7b630913b6b68f23' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/adduser.html',
      1 => 1531313666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346403325cffe6f387be27_05221079',
  'variables' => 
  array (
    'id' => 0,
    'step' => 0,
    'live_site' => 0,
    'lng' => 0,
    'crt_page' => 0,
    'groups_array' => 0,
    'v' => 0,
    'group' => 0,
    'credits_enabled' => 0,
    'group_settings' => 0,
    'tmp' => 0,
    'fields' => 0,
    'template_path' => 0,
    'is_admin' => 0,
    'demo' => 0,
    'gmaps' => 0,
    'gmap_on' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe6f3a39ab7_70568458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe6f3a39ab7_70568458')) {
function content_5cffe6f3a39ab7_70568458 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '346403325cffe6f387be27_05221079';
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars["crt_page"] = new Smarty_Variable("edituser.php", null, 0);
} else {
$_smarty_tpl->tpl_vars["crt_page"] = new Smarty_Variable("adduser.php", null, 0);
}?>

<?php if ($_smarty_tpl->tpl_vars['step']->value <= 1) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/fileuploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.number.min.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/intlTelInput/intlTelInput.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/intlTelInput/intlTelInput.min.js"><?php echo '</script'; ?>
>


<div class="page_title">
	<div class="lfloat" width="200">
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <a href="users_list.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
</a> > <?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['edit_user'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['add_user'];
}?>
	</div>
</div>

<div id="user_form" class="p30">
<div class="form_container">

<form name="users_form" id="users_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['crt_page']->value;?>
?step=3<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" enctype="multipart/form-data">

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['group'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
	<select name="group" id="group">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['choose_group'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['groups_array']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['group']->value) && $_smarty_tpl->tpl_vars['group']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
</div>

<div id="user_details"></div>

</form>
</div> 
</div> 

<div id="user"></div>


<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {



<?php if (isset($_smarty_tpl->tpl_vars['group']->value) && $_smarty_tpl->tpl_vars['group']->value) {?>
loadUserDetailsForm();
<?php }?>


$(document).on("click", "#next", function(){ 

	loadUserDetailsForm();

}); // end #next click


$(document).on("change", "#group", function(){ 

	loadUserDetailsForm();

}); // end #group change

}); // end document ready

function loadUserDetailsForm() {

	// clean all fields possible err class
	$(".err").removeClass("err");

	var err = 0;
	if(!$("#group").val()) { $("#group").addClass("err"); err = 1;  }

	if(!err) {

	// get custom fields
	$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['crt_page']->value;?>
?step=2&group="+$("#group").val()<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>+"&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>,
		data		: $(this).serializeArray(),
		success: function(data) {

			$("#user_details").html(data);
			
		}// end data
	}); // end ajax
	} // end if not err

}


<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?> 


<?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>

<div class="wait"></div>

<?php if ($_smarty_tpl->tpl_vars['credits_enabled']->value && $_smarty_tpl->tpl_vars['group_settings']->value['post_ads']) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['credits']['credits'];?>
</div>
	<div class="right_form"><input type="text" name="no_credits" type="no_credits" size="10" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['no_credits'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['no_credits'];
} else {
echo $_smarty_tpl->tpl_vars['group_settings']->value['default_credits'];
}?>" /></div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['group_settings']->value['affiliates']) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['affiliate_paypal_email'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" size="30" name="affiliate_paypal_email" id="affiliate_paypal_email"  value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['affiliate_paypal_email'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['affiliate_paypal_email'];
}?>" /></div>
</div>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("data/form_includes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields_array'=>$_smarty_tpl->tpl_vars['fields']->value), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("custom_fields_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields_array'=>$_smarty_tpl->tpl_vars['fields']->value,'type'=>"user"), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['group_settings']->value['store'] == 2 || (isset($_smarty_tpl->tpl_vars['tmp']->value['store']) && $_smarty_tpl->tpl_vars['tmp']->value['store'])) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['store_banner'];?>
</div>
	<div class="right_form">
		<input type="file" name="store_banner">
		<?php if ($_smarty_tpl->tpl_vars['tmp']->value['store_banner']) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/store/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['store_banner'];?>
" class="imgfield"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>edituser.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&<?php } else { ?>adduser.php?<?php }?>delete=store_banner"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php }?>
	</div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['info']['moderator'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['moderator'];?>
</div>
	<div class="right_form"><input type="checkbox" name="moderator" id="moderator" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['moderator']) && $_smarty_tpl->tpl_vars['tmp']->value['moderator']) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix" id="div_moderator" style="display: none">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['sections'];?>
</div>
	<div class="right_form">


	<table cellpadding="10" cellspacing="10">

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="listings_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['view']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="listings_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['add']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="listings_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="listings_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="users_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['view']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="users_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['add']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="users_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="users_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users_subscriptions'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="subscriptions_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['view']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="subscriptions_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['add']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="subscriptions_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="subscriptions_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['saved_searches'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="searches_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['view']) {?>checked="checked"<?php }?> /></td>
		<td></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="searches_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['email_alerts'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="alerts_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['view']) {?>checked="checked"<?php }?> /></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="alerts_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="alerts_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['messages'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="messages_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['view']) {?>checked="checked"<?php }?> /></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="messages_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="messages_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['orders'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="orders_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['view']) {?>checked="checked"<?php }?> /></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="orders_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="orders_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['security'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="security_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['view']) {?>checked="checked"<?php }?> /></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="security_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="security_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['banners'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="banners_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['view']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="banners_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['add']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="banners_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="banners_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_pages'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="custom_pages_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['view']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="custom_pages_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['add']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="custom_pages_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="custom_pages_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['news'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<input type="checkbox" name="news_view" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['view']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="news_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['add']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="news_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['edit']) {?>checked="checked"<?php }?> /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<input type="checkbox" name="news_delete" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['delete']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['send_bulk_emails'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="bulk_emails_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['bulk_emails']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['bulk_emails']['add']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['import_export'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<input type="checkbox" name="import_export_add" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['import_export']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['import_export']['add']) {?>checked="checked"<?php }?> /></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['multicurrency'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<input type="checkbox" name="multicurrency_edit" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['multicurrency']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['multicurrency']['edit']) {?>checked="checked"<?php }?> /></td>
		</tr>
		
	</table>
	</div>
</div>


<?php }?> 

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>



<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {


var gmaps_on = <?php if (isset($_smarty_tpl->tpl_vars['gmaps']->value) && $_smarty_tpl->tpl_vars['gmaps']->value) {?>1<?php } else { ?>0<?php }?>;
// initialize google maps
if (gmaps_on) load_gmaps();


var options = { 
       // target:        '#output1',   // target element(s) to be updated with server response 
	beforeSerialize: beforeSerialize,
        beforeSubmit:  beforeSubmit,  // pre-submit callback 
        success:       successResponse  // post-submit callback 
 
        // other available options: 
        //url:       url         // override for form's 'action' attribute 
        //type:      type        // 'get' or 'post', override for form's 'method' attribute 
        //dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
        //clearForm: true        // clear all form fields after successful submit 
        //resetForm: true        // reset the form after successful submit 
 
        // $.ajax options can be used here too, for example: 
        //timeout:   3000 
    }; 

function beforeSerialize(jqForm, options) {

	$("body").addClass("loading"); 

	if (typeof data_htmlarea !== 'undefined')
	for(var i=0;i<data_htmlarea.nicInstances.length;i++){ data_htmlarea.nicInstances[i].saveContent(); }

	// international phones errors
	var extra_phone_error = recheckIntlPhone();
	if(extra_phone_error.length>0) {

		// clean all fields possible err class
		$(".err").removeClass("err");
		// remove all err_labels
		$(".err_label").remove();
			
		for (var i = 0, len = extra_phone_error.length; i < len; i++) {

			$("#"+extra_phone_error[i]).addClass("err");
			// add as child to first right_form
			$("#"+extra_phone_error[i]).closest( ".right_form").prepend('<label class="err_label"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['errors']['invalid_phone'];?>
</label>');
			
		}

		$("body").removeClass("loading"); 

		// move the page to the first err_label element
		$('html,body').animate({scrollTop:$(".err:first").offset().top-60}, 'slow');

		return false;
			
	} // end international phone error

	
	// return false to cancel submit

}

// pre-submit callback 
function beforeSubmit(formData, jqForm, options) { 

    // formData is an array; here we use $.param to convert it to a string to display it 
    // but the form plugin does this for you automatically when it submits the data 
    var queryString = $.param(formData); 
 
    // jqForm is a jQuery object encapsulating the form element.  To access the 
    // DOM element for the form do this: 
    // var formElement = jqForm[0]; 
 
    //alert('About to submit: \n\n' + queryString); 
 
    // here we could return false to prevent the form from being submitted; 
    // returning anything other than false will allow the form submit to continue 
    return true; 
} 

// post-submit callback 
function successResponse(responseText, statusText, xhr, $form)  { 

    // for normal html responses, the first argument to the success callback 
    // is the XMLHttpRequest object's responseText property 
 
    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'xml' then the first argument to the success callback 
    // is the XMLHttpRequest object's responseXML property 
 
    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'json' then the first argument to the success callback 
    // is the json data object returned by the server 
 
    //alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
    //    '\n\nThe output div should have already been updated with the responseText.'); 

//alert(responseText);
			var ret = JSON.parse(responseText);

			$("body").removeClass("loading"); 

			if(ret.response==1) {

				// show ad details
				$.ajax({
					type		: "GET",
					cache		: false,
					url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['crt_page']->value;?>
?step=4&id="+ret.id,
					data		: $(this).serializeArray(),
					success: function(data) {

						$("#user_form").hide();
						$("#user").html(data);
			
					}// end data
				}); // end ajax

				return;
			}

			// response = 0 -> there are errors in submit ad process 
			var no_err = ret.error.length;
			var err_field, err_string;

			// clean all fields possible err class
			$(".err").removeClass("err");
			// remove all err_labels
			$(".err_label").remove();

			// mark each field with error 
			for (var idx=0;idx<no_err;idx++) { 

				err_field = ret.error[idx].field;
				err_string = ret.error[idx].error;

				$("#"+err_field).addClass("err");
				$("#"+err_field).before('<label class="err_label">'+err_string+'</label>');

			}
			
			// move the page to the first err_label element
			$('html,body').animate({scrollTop:$(".err_label:first").offset().top}, 'slow');

} 


//initialize the AJAX form for submit ad
 $('#users_form').ajaxForm(options);

	var old_mod = <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['moderator']) && $_smarty_tpl->tpl_vars['tmp']->value['moderator']) {?>1<?php } else { ?>0<?php }?>;
	if(old_mod) $("#div_moderator").slideDown();

	$("a.imgfield").fancybox();
	$("#moderator").change(function() {
    		if(this.checked)
        		$("#div_moderator").slideDown();
    		else $("#div_moderator").slideUp();
	});
});
<?php echo '</script'; ?>
>


<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?>

<div class="form_container" style="padding-top: 0 !important;">

<div class="form_footer2">

	<div class="buttons rfloat">
		<span class="positive"><a href="users_list.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users_list'];?>
</a></span>
	</div>
	<div class="clearfix"></div>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[

<?php $_smarty_tpl->tpl_vars["gmap_on"] = new Smarty_Variable("0", null, 0);?>

<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 'google_maps') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/gmap-ro.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php $_smarty_tpl->tpl_vars["gmap_on"] = new Smarty_Variable("1", null, 0);?>
	<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


$(document).ready(function() {

$("a.imgfield").fancybox();



<?php if ($_smarty_tpl->tpl_vars['gmap_on']->value) {?>

init_gmap();

<?php }?>
//var gmaps_on = <?php if ($_smarty_tpl->tpl_vars['gmaps']->value) {?>1<?php } else { ?>0<?php }?>;

// initialize google maps
//if (gmaps_on) load_gmaps();


});


//]]>
<?php echo '</script'; ?>
>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['group'];?>
:</div>	
	<div class="right_form"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['group_name'];?>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['credits_enabled']->value && $_smarty_tpl->tpl_vars['group_settings']->value['post_ads']) {?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['credits']['credits'];?>
:</div>	
	<div class="right_form"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['no_credits'];?>
</div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['group_settings']->value['affiliates']) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['affiliate_paypal_email'];?>
:</div>	
	<div class="right_form"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['affiliate_paypal_email'];?>
</div>
</div>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("custom_fields_form_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields_array'=>$_smarty_tpl->tpl_vars['fields']->value,'values_array'=>$_smarty_tpl->tpl_vars['tmp']->value), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['group_settings']->value['store'] == 2 || (isset($_smarty_tpl->tpl_vars['tmp']->value['store']) && $_smarty_tpl->tpl_vars['tmp']->value['store'])) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['store_banner'];?>
</div>
	<div class="right_form">
		<?php if ($_smarty_tpl->tpl_vars['tmp']->value['store_banner']) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/store/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['store_banner'];?>
" class="imgfield"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"></a>
		<?php } else { ?>-
		<?php }?>
	</div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['moderator'];?>
</div>
	<div class="right_form"><?php if ($_smarty_tpl->tpl_vars['tmp']->value['moderator'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
</div>

<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['moderator']) && $_smarty_tpl->tpl_vars['tmp']->value['moderator']) {?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['moderator'];?>
</div>
	<div class="right_form">

	<table cellpadding=10 cellspacing=10>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['listings']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['users']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users_subscriptions'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['subscriptions']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['saved_searches'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['searches']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['email_alerts'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['alerts']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['messages'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['messages']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['orders'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['orders']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['security'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['security']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['banners'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['banners']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['custom_pages'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['custom_pages']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['news'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['view']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['view']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['delete']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['news']['delete']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['send_bulk_emails'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['bulk_emails']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['bulk_emails']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['import_export'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['import_export']['add']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['import_export']['add']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>

		<tr><td><b><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['multicurrency'];?>
:</b></td>
		<td><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['modify'];?>
&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['sections']['multicurrency']['edit']) && $_smarty_tpl->tpl_vars['tmp']->value['sections']['multicurrency']['edit']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_on.png" /><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/checkbox_off.png" /><?php }?></td>
		</tr>
		
		</table>
	</div>
</div>
<?php }?> 

<div class="form_footer2">

	<div class="buttons rfloat">
		<span class="positive"><a  href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/edituser.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['edit_user'];?>
</a></span>
	</div>
	<div class="clearfix"></div>

</div>

</div> 

<?php }?> 
<?php }
}
?>