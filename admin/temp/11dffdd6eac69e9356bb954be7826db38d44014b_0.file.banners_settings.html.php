<?php /* Smarty version 3.1.24, created on 2019-09-10 16:14:33
         compiled from "/home/pegasuswings/public_html/admin/templates/default/banners_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:11694184015d77cbe9af24a1_58207413%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11dffdd6eac69e9356bb954be7826db38d44014b' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/banners_settings.html',
      1 => 1459423530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11694184015d77cbe9af24a1_58207413',
  'variables' => 
  array (
    'lng' => 0,
    'live_site' => 0,
    'appearance' => 0,
    'array_banners' => 0,
    'v' => 0,
    'demo' => 0,
    'template_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77cbe9b2d124_79118540',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77cbe9b2d124_79118540')) {
function content_5d77cbe9b2d124_79118540 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11694184015d77cbe9af24a1_58207413';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['banners'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['banners_settings'];?>
</div>

<div class="p30">

<div class="buttonwrapper">
<div class="button3-left mr10">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['appearance']->value['template'];?>
/chart/index.html" target="_blank"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['view_chart'];?>
</span></a>
</div>

<?php if ($_smarty_tpl->tpl_vars['appearance']->value['enable_impressions_count'] == 1) {?>
<div class="button4-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/banners_settings.php?disable_impressions=1"><span class="button4-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['disable_impressions_count'];?>
</span></a>
</div>
<?php } else { ?>
<div class="button3-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/banners_settings.php?enable_impressions=1"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['enable_impressions_count'];?>
</span></a>
</div>
<?php }?>

<div class="button4-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/banners_settings.php?disable_unused=1"><span class="button4-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['disable_unused'];?>
</span></a>
</div>

</div>


<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="400" class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['position'];?>
</td>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['display_banners'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['total_banners'];?>
</th>
	<th width="50" colspan="2" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_banners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['active']) {?>inactive<?php }?>">
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
	<td>
		<span><?php echo $_smarty_tpl->tpl_vars['v']->value['no_banners'];?>
</span>
		<span>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveUp(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'banner_categ')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/up.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['increase_no'];?>
" alt=""></a>
		</span>

		<span><?php if ($_smarty_tpl->tpl_vars['v']->value['order_down'] > 0) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMoveDown(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'banner_categ')<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['banners']['decrease_no'];?>
" alt=""></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/down-off.png">
		<?php }?></span>
	</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['total_banners'];?>
</td>
	<td width=20>
	<div id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'banner_categ', '');<?php }?>">
		<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
		</a>
	<?php } else { ?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','banner_categ','');<?php }?>">
		<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
		</a>
	<?php }?>
	</div>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>

</form>
</div> 


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>