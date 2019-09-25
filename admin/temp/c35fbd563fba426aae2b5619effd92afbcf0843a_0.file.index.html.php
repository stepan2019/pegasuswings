<?php /* Smarty version 3.1.24, created on 2019-06-11 17:02:45
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/listings_compare/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:12629920355cffdeb52b87e3_16181232%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35fbd563fba426aae2b5619effd92afbcf0843a' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/listings_compare/index.html',
      1 => 1422856330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12629920355cffdeb52b87e3_16181232',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdeb52dbb83_63278946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdeb52dbb83_63278946')) {
function content_5cffdeb52dbb83_63278946 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12629920355cffdeb52b87e3_16181232';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > Listings compare</div>
<br/>
<div class="info">This module does not allow any settings.</div>
<br/>
<br/>
<br/>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>