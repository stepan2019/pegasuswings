<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/categories.html" */ ?>
<?php
/*%%SmartyHeaderCode:10276098015d8956e77c05d8_05429723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22666d65baf75fa00e7246383e4411ad652d7e29' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/categories.html',
      1 => 1514997244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10276098015d8956e77c05d8_05429723',
  'variables' => 
  array (
    'categories' => 0,
    'v' => 0,
    'seo_settings' => 0,
    'live_site' => 0,
    'in' => 0,
    'appearance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e77cac89_47167721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e77cac89_47167721')) {
function content_5d8956e77cac89_47167721 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10276098015d8956e77c05d8_05429723';
?>
<div class="categories page_bounds">
<?php $_smarty_tpl->tpl_vars["in"] = new Smarty_Variable("1", null, 0);?>
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
		<?php if ($_smarty_tpl->tpl_vars['v']->value['level'] == 1) {?>
		<a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeSearchCategoryLink($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['v']->value['name'],$_smarty_tpl->tpl_vars['v']->value['slug']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?category=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?>" class="main_cat">
			<div class="cat_title"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['description']) {?><div class="cat_desc"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div><?php }?>
		</a>
		<?php if ($_smarty_tpl->tpl_vars['in']->value%$_smarty_tpl->tpl_vars['appearance']->value['max_cat_per_row'] == 0) {?>
		</div><div class="categories page_bounds">
		<?php }?>
		
		<?php $_smarty_tpl->tpl_vars["in"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['in']->value+1), null, 0);?>
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

</div><?php }
}
?>