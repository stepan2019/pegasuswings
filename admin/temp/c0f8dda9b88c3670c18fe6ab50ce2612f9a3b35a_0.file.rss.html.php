<?php /* Smarty version 3.1.24, created on 2019-06-11 19:48:02
         compiled from "/home/pegasuswings/public_html/admin/templates/default/rss.html" */ ?>
<?php
/*%%SmartyHeaderCode:1633779225d000572e127b2_20662421%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0f8dda9b88c3670c18fe6ab50ce2612f9a3b35a' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/rss.html',
      1 => 1453378374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1633779225d000572e127b2_20662421',
  'variables' => 
  array (
    'lng' => 0,
    'template_path' => 0,
    'rss_array' => 0,
    'v' => 0,
    'demo' => 0,
    'no_rss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d000572e8c8a9_83096631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d000572e8c8a9_83096631')) {
function content_5d000572e8c8a9_83096631 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1633779225d000572e127b2_20662421';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['rss'];?>
</div>

<div class="p30">
<form name="sitemap" method="post" action="sitemap.php" enctype="multipart/form-data">

<div>
<a href="add_rss.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['short_title'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['language'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['feed_link'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['no_items'];?>
</th>
	<th width="80" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['rss_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!isset($_smarty_tpl->tpl_vars['v']->value['active']) || !$_smarty_tpl->tpl_vars['v']->value['active']) {?>inactive<?php }?>">
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['short_title'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];
}?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['language'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['rss_link'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['no_items']) {
echo $_smarty_tpl->tpl_vars['v']->value['no_items'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['unlimited'];
}?></td>	
	<td>
		<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['rss_link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
" alt=""></a>

		<a href="edit_rss.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['rss']['confirm_delete']);?>
','rss');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>

		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['enabled'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'rss', '');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'rss', '');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>
		</span>	
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_rss']->value == 0) {?>
	<tr><td colspan="6"><?php echo $_smarty_tpl->tpl_vars['lng']->value['rss']['no_rss'];?>
</td></tr>
<?php }?>

</table>

</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>