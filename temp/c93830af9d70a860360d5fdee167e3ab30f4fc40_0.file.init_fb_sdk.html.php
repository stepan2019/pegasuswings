<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/social_networks/init_fb_sdk.html" */ ?>
<?php
/*%%SmartyHeaderCode:2516742795d8956e77b4509_85504158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93830af9d70a860360d5fdee167e3ab30f4fc40' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/social_networks/init_fb_sdk.html',
      1 => 1448733666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2516742795d8956e77b4509_85504158',
  'variables' => 
  array (
    'sn_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e77ba545_25402125',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e77ba545_25402125')) {
function content_5d8956e77ba545_25402125 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2516742795d8956e77b4509_85504158';
?>
<div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async=true; js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_lb_locale'];?>
/sdk.js#xfbml=1<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_appid']) {?>&appId=<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_appid'];
}?>&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
<?php }
}
?>