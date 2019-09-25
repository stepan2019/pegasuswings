<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/social_networks/sn_page_plugin.html" */ ?>
<?php
/*%%SmartyHeaderCode:20387491455d8956e7a88358_58214212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b12740e33ec72ad27be56219b9d29dc8bb6324d1' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/social_networks/sn_page_plugin.html',
      1 => 1497436550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20387491455d8956e7a88358_58214212',
  'variables' => 
  array (
    'sn_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e7a98fb1_13797330',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e7a98fb1_13797330')) {
function content_5d8956e7a98fb1_13797330 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20387491455d8956e7a88358_58214212';
if ($_smarty_tpl->tpl_vars['sn_settings']->value['enable_fb_page_plugin']) {?>

<?php if (in_array("timeline",$_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_tabs_array'])) {?>
<div class="fb-page mt20" data-width="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_width'];?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_height'];?>
" data-href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['facebook_page_link'];?>
" data-tabs="timeline" data-small-header="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_small_header']) {?>true<?php } else { ?>false<?php }?>" data-adapt-container-width="true" data-hide-cover="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cover']) {?>true<?php } else { ?>false<?php }?>" data-show-facepile="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_show_facepile']) {?>true<?php } else { ?>false<?php }?>" data-hide-cta="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cta']) {?>true<?php } else { ?>false<?php }?>"></div>
<?php }?>

<?php if (in_array("events",$_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_tabs_array'])) {?>
<div class="fb-page mt20" data-width="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_width'];?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_height'];?>
" data-href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['facebook_page_link'];?>
" data-tabs="events" data-small-header="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_small_header']) {?>true<?php } else { ?>false<?php }?>" data-adapt-container-width="true" data-hide-cover="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cover']) {?>true<?php } else { ?>false<?php }?>" data-show-facepile="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_show_facepile']) {?>true<?php } else { ?>false<?php }?>" data-hide-cta="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cta']) {?>true<?php } else { ?>false<?php }?>"></div>
<?php }?>

<?php if (in_array("messages",$_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_tabs_array'])) {?>
<div class="fb-page mt20" data-width="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_width'];?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_height'];?>
" data-href="<?php echo $_smarty_tpl->tpl_vars['sn_settings']->value['facebook_page_link'];?>
" data-tabs="messages" data-small-header="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_small_header']) {?>true<?php } else { ?>false<?php }?>" data-adapt-container-width="true" data-hide-cover="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cover']) {?>true<?php } else { ?>false<?php }?>" data-show-facepile="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_show_facepile']) {?>true<?php } else { ?>false<?php }?>" data-hide-cta="<?php if ($_smarty_tpl->tpl_vars['sn_settings']->value['fb_pp_hide_cta']) {?>true<?php } else { ?>false<?php }?>"></div>
<?php }?>

<?php }

}
}
?>