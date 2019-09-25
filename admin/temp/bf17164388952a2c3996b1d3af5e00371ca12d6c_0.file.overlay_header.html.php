<?php /* Smarty version 3.1.24, created on 2019-09-08 16:40:52
         compiled from "/home/pegasuswings/public_html/admin/templates/default/overlay_header.html" */ ?>
<?php
/*%%SmartyHeaderCode:9524015595d752f142b0e16_97330233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf17164388952a2c3996b1d3af5e00371ca12d6c' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/overlay_header.html',
      1 => 1422608782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9524015595d752f142b0e16_97330233',
  'variables' => 
  array (
    'appearance' => 0,
    'lng' => 0,
    'template_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d752f142b6c58_16148592',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d752f142b6c58_16148592')) {
function content_5d752f142b6c58_16148592 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9524015595d752f142b0e16_97330233';
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="<?php echo $_smarty_tpl->tpl_vars['appearance']->value['charset'];?>
">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1">

<title><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['admin_panel'];?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
css/style.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
css/style-sage.css">

</head>
<body style="background: #fff;">
<?php }
}
?>