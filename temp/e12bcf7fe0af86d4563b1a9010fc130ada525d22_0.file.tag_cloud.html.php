<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/tag_cloud/tag_cloud.html" */ ?>
<?php
/*%%SmartyHeaderCode:2906732395d8956e79c4f26_56266969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e12bcf7fe0af86d4563b1a9010fc130ada525d22' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/tag_cloud/tag_cloud.html',
      1 => 1506924424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2906732395d8956e79c4f26_56266969',
  'variables' => 
  array (
    'tag_cloud_array' => 0,
    'v' => 0,
    'seo_settings' => 0,
    'sef_keyword' => 0,
    'live_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e79cb5b2_68136644',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e79cb5b2_68136644')) {
function content_5d8956e79cb5b2_68136644 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2906732395d8956e79c4f26_56266969';
?>
<section id="tagcloud">
    <div class="tab_content">
	<?php
$_from = $_smarty_tpl->tpl_vars['tag_cloud_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<span class="<?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeKeyValueLink($_smarty_tpl->tpl_vars['sef_keyword']->value,$_smarty_tpl->tpl_vars['v']->value['word']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?<?php echo $_smarty_tpl->tpl_vars['sef_keyword']->value;?>
=<?php echo urlencode($_smarty_tpl->tpl_vars['v']->value['word']);
}?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['word'];?>
</a></span>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div>
</section>

<?php }
}
?>