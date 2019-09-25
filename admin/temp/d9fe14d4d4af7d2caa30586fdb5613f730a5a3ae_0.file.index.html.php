<?php /* Smarty version 3.1.24, created on 2019-06-11 17:03:46
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/price_drop_alert/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:20430244695cffdef2b4eba4_35731895%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9fe14d4d4af7d2caa30586fdb5613f730a5a3ae' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/price_drop_alert/index.html',
      1 => 1467022462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20430244695cffdef2b4eba4_35731895',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_price_drop_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdef2b72d58_70583633',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdef2b72d58_70583633')) {
function content_5cffdef2b72d58_70583633 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20430244695cffdef2b4eba4_35731895';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > Price drop alert</div>
<div class="p30">

<div class="form_container">

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_price_drop_alert']->value['edit_email_template'];?>
</div>
	<div class="right_form"><a href="../../mail_templates.php?template=price_drop_alert" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
</a></div>
</div>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>