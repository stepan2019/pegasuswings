<?php /* Smarty version 3.1.24, created on 2019-06-11 17:01:48
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/latest_auctions/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:14774089475cffde7c46f9a9_98406412%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b815de11572c22cd6c32bcde12e4cbbec02f891f' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/latest_auctions/index.html',
      1 => 1453323234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14774089475cffde7c46f9a9_98406412',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_latest_auctions' => 0,
    'error' => 0,
    'info' => 0,
    'languages' => 0,
    'v' => 0,
    'field_name' => 0,
    'la_settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffde7c4a1c16_53595718',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffde7c4a1c16_53595718')) {
function content_5cffde7c4a1c16_53595718 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14774089475cffde7c46f9a9_98406412';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_latest_auctions']->value['latest_auctions'];?>
</div>

<div class="p30">
<form method="post" action="" enctype="multipart/form-data">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'field_name', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['title'];?>
</div>
	<div class="right_form"><input type="text" name="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['la_settings']->value[$_smarty_tpl->tpl_vars['field_name']->value];?>
" /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_latest_auctions']->value['no_ads'];?>
</div>
	<div class="right_form"><input type="text" name="no_ads" size="4" value="<?php echo $_smarty_tpl->tpl_vars['la_settings']->value['no_ads'];?>
"></div>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>