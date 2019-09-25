<?php /* Smarty version 3.1.24, created on 2019-06-15 16:15:43
         compiled from "/home/pegasuswings/public_html/admin/templates/default/overlay_header.html" */ ?>
<?php
/*%%SmartyHeaderCode:14400179005d0519af1629f4_08660521%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a8d31ab88e40e8ef482a25e39de38b25d47ea3' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/overlay_header.html',
      1 => 1422608782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14400179005d0519af1629f4_08660521',
  'variables' => 
  array (
    'appearance' => 0,
    'lng' => 0,
    'template_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d0519af166de1_18919551',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d0519af166de1_18919551')) {
function content_5d0519af166de1_18919551 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14400179005d0519af1629f4_08660521';
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