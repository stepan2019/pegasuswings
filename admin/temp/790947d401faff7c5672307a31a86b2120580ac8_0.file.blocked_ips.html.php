<?php /* Smarty version 3.1.24, created on 2019-07-13 09:49:16
         compiled from "/home/pegasuswings/public_html/admin/templates/default/blocked_ips.html" */ ?>
<?php
/*%%SmartyHeaderCode:7494827055d29a91c0dde32_52489904%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '790947d401faff7c5672307a31a86b2120580ac8' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/blocked_ips.html',
      1 => 1549644216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7494827055d29a91c0dde32_52489904',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'demo' => 0,
    'page' => 0,
    'no_per_page' => 0,
    'post_array' => 0,
    'array_blocked_ips' => 0,
    'v' => 0,
    'no_ips' => 0,
    'crt_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d29a91c1288c3_91287557',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d29a91c1288c3_91287557')) {
function content_5d29a91c1288c3_91287557 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7494827055d29a91c0dde32_52489904';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title">
<div class="lfloat" width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['security'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['blocked_ips'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['blocked_ips']['blocked_ips'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="blocked_ips.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['blocked_ips']['blocked_ips'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="whitelist_ips.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['ip_whitelist'];?>
</span></a>
	</div></div>

</div>
</div>

<div class="p30">

<form name="search" id="search" method="post" action="blocked_ips.php">

<div class="lfloat">
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['security']['edit'] == 1) {?>
	<a href="javascript:;" id="add_ip"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>

	<input type="image" value="delete_selected" name="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete_all']);?>
')<?php }?>" style="border: 0px;" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt="">
	<?php }?>
</div>

<div class="buttonwrapper lfloat ml10"><div class="button3-left">

	<a href="javascript:;" id="add_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-down-arrow.png" /></span></a>

	<a href="javascript:;" id="remove_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-up-arrow.png" /></span></a>

</div></div>

<div class="rfloat">
<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<div class="clearfix"></div>

<div id="search_box" style="text-align: left; display: none;">

<input type="hidden" name="page" value = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<input type="hidden" name="no_per_page" value = "<?php echo $_smarty_tpl->tpl_vars['no_per_page']->value;?>
" />

<input type="text" name="ip" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['ip'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['ip'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['ip'];
}?>"/>
&nbsp;
<input type="text" name="info" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['comment'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['info'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['info'];
}?>"/>

<div class="buttons">
	<strong><input type="submit" name="Search" id="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></strong>
</div>

</div>

<div id="add_box" style="text-align: left; display: none;">
 <?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['ip'];?>
 / <?php echo $_smarty_tpl->tpl_vars['lng']->value['blocked_ips']['ips_list'];?>
:<br/>
<textarea name="bulk_ips" cols="60" rows="4"></textarea><br/>
<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['elements_info'];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['comment'];?>
:<br/>
<input type="text" name=sinfo" size="40" /><br/>
<div class="buttons">
	<span class="positive"><input type="submit" name="Add" id="Add" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" /></span>
</div>

</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft" width="20"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['ip'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['comment'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['security']['blocked_for'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['security']['block_expires'];?>
</th>
	<th class="hright" width="70">&nbsp;</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_blocked_ips']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
	<td><input type="checkbox" class="noborder" name="bi<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="bi<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 1) {
echo $_smarty_tpl->tpl_vars['lng']->value['security']['permanent'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['security']['temporary'];
}?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['blocked_for']) {
echo $_smarty_tpl->tpl_vars['v']->value['blocked_for'];
} else { ?>-<?php }?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['date_expires_nice']) {
echo $_smarty_tpl->tpl_vars['v']->value['date_expires_nice'];
} else { ?>-<?php }?></td>
	<td>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['security']['delete'] == 1) {?>
	<span><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete']);?>
','blockedip');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a></span>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['security']['edit'] == 1) {?>
	<span><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onAddWhitelist('<?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['security']['confirm_add_whitelist']);?>
');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/whitelist.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['security']['add_to_whitelist'];?>
" alt=""></a></span>
	<?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


<?php if (!$_smarty_tpl->tpl_vars['no_ips']->value) {?><tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['lng']->value['no_items'];?>
</td></tr><?php }?>

</table>

</form>

<?php if ($_smarty_tpl->tpl_vars['no_ips']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div><?php }?>

<div class="mt20">
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['show'];?>

	<select name="no_per_page_sel" onchange="doSel(this);">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pg'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['name'] = 'pg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = (int) 10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] = ((int) 10) == 0 ? 1 : (int) 10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pg']['total']);
?>
		<option value="location.href='<?php echo $_smarty_tpl->tpl_vars['crt_page_link']->value;?>
&no_per_page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index'];?>
'" <?php if ($_smarty_tpl->tpl_vars['no_per_page']->value == $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pg']['index'];?>
</option>
		<?php endfor; endif; ?>
	</select>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['on_a_page'];?>

</div>

</div> 


<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$("input").keypress(function(e)
		{
        		// if the key pressed is the enter key
        		if (e.which == 13)
        		{
				// delay action so the autocomplete list to fill
				setTimeout(function() { $("#search").submit();}, 200);

				return false;
        		}
		});
		$("#remove_search").hide();
		$("#search_box").hide();
		$("#add_box").hide();
		$("#add_search").click(function()
		{
			$("#remove_search").show();
			$("#add_search").hide();
			$("#search_box").slideDown('fast').show();
		});

		$("#remove_search").click(function()
		{
			$("#add_search").show();
			$("#remove_search").hide();
			$("#search_box").hide().slideUp('fast');
		});

		$("#add_ip").click(function()
		{
			if($("#add_box").is(":visible")) $("#add_box").slideDown('fast').hide();
			else  $("#add_box").slideDown('fast').show();
		});

		$("#check_all").click(function()
		{

			if ($('#check_all').is(':checked')) checkAll(document);
			else uncheckAll(document);

		});

	});



<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>