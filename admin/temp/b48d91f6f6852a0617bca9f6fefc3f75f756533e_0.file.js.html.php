<?php /* Smarty version 3.1.24, created on 2019-06-11 17:08:01
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/js.html" */ ?>
<?php
/*%%SmartyHeaderCode:1424413755cffdff1b42de8_84834925%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b48d91f6f6852a0617bca9f6fefc3f75f756533e' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/js.html',
      1 => 1544315290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1424413755cffdff1b42de8_84834925',
  'variables' => 
  array (
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdff1b453f0_55365964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdff1b453f0_55365964')) {
function content_5cffdff1b453f0_55365964 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1424413755cffdff1b42de8_84834925';
?>
<?php echo '<script'; ?>
>
	function onSuspend(id, days) {

		var url_str="modules/suspend_user/actions.php?action=suspend&id="+id+"&days="+days;

		$.get( url_str, function( data ) {
			location.reload(true);
		});

	}
	function onUnsuspend(id) {

		var url_str="modules/suspend_user/actions.php?action=unsuspend&id="+id;

		$.get( url_str, function( data ) {
			location.reload(true);
		});

	}
	function onBan(id) {

		var url_str="modules/suspend_user/actions.php?action=ban&id="+id;

		$.get( url_str, function( data ) {
			location.reload(true);
		});

	}
	jQuery(document).ready(function() {

	$(document).on("click", "a.suspend", function(){

		var user_id = $(this).attr("id").substr(7);
		$(".suspend_days_div").hide();
		$("#suspend_days"+user_id).show();
	
	}); // end suspend click

	$(document).on("click", "div.suspend_days", function(){

		var live_site = '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
';
		var user_id = $(this).attr("id").substr(12);
		var days = $("#days"+user_id).val();

		onSuspend(user_id, days);
	
	}); // end suspend_days click

	$(document).on("click", "div.ban", function(){

		var live_site = '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
';
		var user_id = $(this).attr("id").substr(3);

		onBan(user_id);
	
	}); // end ban click

	$(document).on("click", ".remove_days", function(){

		$(".suspend_days_div").hide();
	
	}); // end suspend click
	
	$(document).on("click", "a.suspend_all", function(){

		$("#suspend_days_div").show();
	
	}); // end suspend click
	
	}); // end document ready
	
<?php echo '</script'; ?>
>
<?php }
}
?>