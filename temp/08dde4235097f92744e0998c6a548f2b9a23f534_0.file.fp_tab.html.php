<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/tag_cloud/fp_tab.html" */ ?>
<?php
/*%%SmartyHeaderCode:18307487395d8956e79bf718_71321971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08dde4235097f92744e0998c6a548f2b9a23f534' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/tag_cloud/fp_tab.html',
      1 => 1486903746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18307487395d8956e79bf718_71321971',
  'variables' => 
  array (
    'ck' => 0,
    'tag_cloud_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e79c2e18_57233680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e79c2e18_57233680')) {
function content_5d8956e79c2e18_57233680 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18307487395d8956e79bf718_71321971';
?>

	<input id="tab_tag_cloud" type="radio" name="tabs2" <?php if (!$_smarty_tpl->tpl_vars['ck']->value) {?>checked="checked"<?php }?>>
	<label for="tab_tag_cloud"><?php echo $_smarty_tpl->tpl_vars['tag_cloud_title']->value;?>
</label>
    <?php }
}
?>