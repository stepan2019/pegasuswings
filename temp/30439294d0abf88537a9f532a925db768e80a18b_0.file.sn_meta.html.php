<?php /* Smarty version 3.1.24, created on 2019-09-24 17:12:36
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/social_networks/sn_meta.html" */ ?>
<?php
/*%%SmartyHeaderCode:17603012565d8a24544e9a93_56528161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30439294d0abf88537a9f532a925db768e80a18b' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/social_networks/sn_meta.html',
      1 => 1522053430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17603012565d8a24544e9a93_56528161',
  'variables' => 
  array (
    'sn_settings' => 0,
    'listing' => 0,
    'seo_settings' => 0,
    'live_site' => 0,
    'settings' => 0,
    'page_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8a24544fa9e4_89737932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8a24544fa9e4_89737932')) {
function content_5d8a24544fa9e4_89737932 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '17603012565d8a24544e9a93_56528161';
if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_like_button'] && count($_smarty_tpl->tpl_vars['listing']->value['images']) > 0) {?>
<meta property="og:title" content="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['listing']->value['title'],'"','');?>
" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['listing']->value['id'],$_smarty_tpl->tpl_vars['listing']->value['title']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];
}?>" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/listings/<?php if ($_smarty_tpl->tpl_vars['listing']->value['images'][0]['folder']) {
echo $_smarty_tpl->tpl_vars['listing']->value['images'][0]['folder'];?>
/<?php }?>bigThmb/<?php echo $_smarty_tpl->tpl_vars['listing']->value['images'][0]['picture'];?>
"/> 
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
" />
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['meta_description'];?>
"/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['tweet_ads']) {?>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['twitter_account'];?>
" />
<meta name="twitter:title" content="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['listing']->value['title'],'"','');?>
" />
<meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['listing']->value['category'];?>
 / <?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['listing']->value['description'],200,"...",false),'"','');?>
" />
<?php if (count($_smarty_tpl->tpl_vars['listing']->value['images']) > 0) {?>
<meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/listings/<?php if ($_smarty_tpl->tpl_vars['listing']->value['images'][0]['folder']) {
echo $_smarty_tpl->tpl_vars['listing']->value['images'][0]['folder'];?>
/<?php }
echo $_smarty_tpl->tpl_vars['listing']->value['images'][0]['picture'];?>
" />
<?php }?>
<?php }
}
}
?>