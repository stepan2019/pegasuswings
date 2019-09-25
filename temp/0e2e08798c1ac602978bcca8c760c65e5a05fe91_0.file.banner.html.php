<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/banner.html" */ ?>
<?php
/*%%SmartyHeaderCode:11412521645d8934093f8375_45037521%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e2e08798c1ac602978bcca8c760c65e5a05fe91' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/banner.html',
      1 => 1515188438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11412521645d8934093f8375_45037521',
  'variables' => 
  array (
    'v' => 0,
    'live_site' => 0,
    'bclass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d893409402d01_51512909',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d893409402d01_51512909')) {
function content_5d893409402d01_51512909 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11412521645d8934093f8375_45037521';
if ($_smarty_tpl->tpl_vars['v']->value['filename']) {?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['extension'] == 'swf') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/flash.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_name'=>$_smarty_tpl->tpl_vars['v']->value['filename'],'img_width'=>$_smarty_tpl->tpl_vars['v']->value['size'][0],'img_height'=>$_smarty_tpl->tpl_vars['v']->value['size'][1]), 0);
?>

	<?php } else { ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" onclick="clickBanner(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
');"<?php if (isset($_smarty_tpl->tpl_vars['v']->value['open_new']) && $_smarty_tpl->tpl_vars['v']->value['open_new']) {?> target="_blank"<?php }?>>
		<img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/baners/<?php echo $_smarty_tpl->tpl_vars['v']->value['filename'];?>
" alt="" <?php if (isset($_smarty_tpl->tpl_vars['bclass']->value) && $_smarty_tpl->tpl_vars['bclass']->value) {?>class="<?php echo $_smarty_tpl->tpl_vars['bclass']->value;?>
"<?php }?> />
	</a>
	<?php }?>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['bclass']->value)) {?><div class="<?php echo $_smarty_tpl->tpl_vars['bclass']->value;?>
_responsive"><?php }
echo $_smarty_tpl->tpl_vars['v']->value['code'];
if (isset($_smarty_tpl->tpl_vars['bclass']->value)) {?></div><?php }?>
<?php }
}
}
?>