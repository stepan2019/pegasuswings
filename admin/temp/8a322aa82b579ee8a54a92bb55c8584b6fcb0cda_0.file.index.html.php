<?php /* Smarty version 3.1.24, created on 2019-06-11 17:01:33
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/extra_visits/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:14819769515cffde6dc0e917_48590647%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a322aa82b579ee8a54a92bb55c8584b6fcb0cda' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/extra_visits/index.html',
      1 => 1457626264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14819769515cffde6dc0e917_48590647',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_ev' => 0,
    'error' => 0,
    'ev_settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffde6dc3f446_99625881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffde6dc3f446_99625881')) {
function content_5cffde6dc3f446_99625881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14819769515cffde6dc0e917_48590647';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_ev']->value['extra_visits'];?>
</div>

<div class="p30">
<form name="ev_settings" method="post" enctype="multipart/form-data" action="">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ev']->value['no'];?>
</div>
	<div class="right_form">
		<input type="text" size="6" name="no" id="no" value="<?php if (isset($_smarty_tpl->tpl_vars['ev_settings']->value['no']) && $_smarty_tpl->tpl_vars['ev_settings']->value['no']) {
echo $_smarty_tpl->tpl_vars['ev_settings']->value['no'];
}?>" />
		<div class="information"><?php echo $_smarty_tpl->tpl_vars['lng_ev']->value['info']['no'];?>
</div>
	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php }?>'>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>