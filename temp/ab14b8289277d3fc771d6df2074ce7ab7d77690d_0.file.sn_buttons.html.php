<?php /* Smarty version 3.1.24, created on 2019-09-24 00:07:21
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/social_networks/sn_buttons.html" */ ?>
<?php
/*%%SmartyHeaderCode:13301148315d8934098a5434_56940893%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab14b8289277d3fc771d6df2074ce7ab7d77690d' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/social_networks/sn_buttons.html',
      1 => 1490542004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13301148315d8934098a5434_56940893',
  'variables' => 
  array (
    'sn_settings' => 0,
    'template_path' => 0,
    'lng_sn' => 0,
    'no_rss' => 0,
    'rss_array' => 0,
    'live_site' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8934098b5c48_13378446',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8934098b5c48_13378446')) {
function content_5d8934098b5c48_13378446 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13301148315d8934098a5434_56940893';
?>
<div class="sn_buttons">

<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['facebook_page_link']) {?><!--
--><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['facebook_page_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_facebook.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['facebook'];?>
" /></a><!--
--><?php }?><!--

--><?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['twitter_account']) {?><!--
--><a href="https://www.twitter.com/<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['twitter_account'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_twitter.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['twitter'];?>
" /></a><!--
--><?php }?><!--

--><?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['gplus_page_link']) {?><!--
--><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['gplus_page_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_gplus.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['gplus'];?>
" /></a><!--
--><?php }?><!--

--><?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['youtube_link']) {?><!--
--><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['youtube_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_youtube.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['youtube'];?>
" /></a><!--
--><?php }?><!--

--><?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['pinterest_link']) {?><!--
--><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['pinterest_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_pinterest.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['pinterest'];?>
" /></a><!--
--><?php }?><!--

--><?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['instagram_link']) {?><!--
--><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['instagram_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_instagram.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['instagram'];?>
" /></a><!--
--><?php }?><!--

--><?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['linkedin_link']) {?><!--
--><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['linkedin_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_linkedin.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng_sn']->value['linkedin'];?>
" /></a><!--
--><?php }?><!--

--><?php if (isset($_smarty_tpl->tpl_vars['no_rss']->value) && $_smarty_tpl->tpl_vars['no_rss']->value == 1) {?><!--
--><a target="_blank" href="<?php if ($_smarty_tpl->tpl_vars['rss_array']->value[0]['feedburner']) {
echo $_smarty_tpl->tpl_vars['rss_array']->value[0]['feedburner'];
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/feed.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/social_networks/images/sn_rss.png" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['navbar']['rss'];?>
" /></a><!--
--><?php }?>

</div><?php }
}
?>