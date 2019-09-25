<?php /* Smarty version 3.1.24, created on 2019-07-13 09:30:36
         compiled from "/home/pegasuswings/public_html/admin/templates/default/change_password.html" */ ?>
<?php
/*%%SmartyHeaderCode:14368665075d29a4bc673c82_42186347%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '822ebdc99cf968474494dae523886790e2c62900' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/change_password.html',
      1 => 1455216872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14368665075d29a4bc673c82_42186347',
  'variables' => 
  array (
    'live_site' => 0,
    'id' => 0,
    'lng' => 0,
    'settings' => 0,
    'username' => 0,
    'useremail' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d29a4bc6c3c26_30722598',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d29a4bc6c3c26_30722598')) {
function content_5d29a4bc6c3c26_30722598 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14368665075d29a4bc673c82_42186347';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.form.js"><?php echo '</script'; ?>
>

<div class="page_title"><?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <a href="users_list.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users_list'];?>
</a> <?php } else {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['security'];
}?> > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['change_password'];
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?> <?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['for'];?>
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['username']->value;
} else {
echo $_smarty_tpl->tpl_vars['useremail']->value;
}
}?></div>

<div class="p30">
<form name="change_password" id="change_password" method="post" action="change_password.php?post=1<?php if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>">

<div class="form_container">

<div class="error" style="display: none"></div>
<div class="info" style="display: none"></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['password'];?>
</div>
	<div class="right_form"><input type="password" name="password"  id="password" size="30" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['repeat_password'];?>
</div>
	<div class="right_form"><input type="password" name="password1"  id="password1" size="30" /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 

</form>
</div>




<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[

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
				$(".error").hide();
				$(".form2").slideUp();
				$(".overlay-bottom-bg").hide();
				return;

			}

			// user change password
			if(ret.error.constructor === Array) {

				// response = 0 -> there are errors
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
				return;
			}

			// admin change password
			$(".info").hide();
			$(".error").html("<p>"+ret.error+"</p>");
			$(".error").show();

} 

 $('#change_password').ajaxForm(options);

});

//]]>
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>