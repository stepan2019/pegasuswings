<?php /* Smarty version 3.1.24, created on 2019-09-08 16:40:47
         compiled from "/home/pegasuswings/public_html/admin/templates/default/order_history.html" */ ?>
<?php
/*%%SmartyHeaderCode:1561636845d752f0f758ff2_93280461%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd587f3a6be6bb7f9abc66259192307697fa5b8eb' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/order_history.html',
      1 => 1512375706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1561636845d752f0f758ff2_93280461',
  'variables' => 
  array (
    'lng' => 0,
    'no_per_page' => 0,
    'page' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'demo' => 0,
    'order_by_link' => 0,
    'order' => 0,
    'order_way_link' => 0,
    'order_way' => 0,
    'post_array' => 0,
    'settings' => 0,
    'processors' => 0,
    'v' => 0,
    'actions_array' => 0,
    'live_site' => 0,
    'no_actions' => 0,
    'crt_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d752f0f7c2f20_50176367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d752f0f7c2f20_50176367')) {
function content_5d752f0f7c2f20_50176367 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1561636845d752f0f758ff2_93280461';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['orders'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['order_history'];?>
</div>

<div class="p30">
<form name="search" id="search" method="post" action="order_history.php?no_per_page=<?php echo $_smarty_tpl->tpl_vars['no_per_page']->value;
if ($_smarty_tpl->tpl_vars['page']->value) {?>&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['orders']['delete'] == 1) {?>
	<input type="image" value="delete_selected" name="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" class="tooltip icon" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['order_history']['confirm_delete_all']);?>
')<?php }?>" style="border: 0px;">
	<?php }?>
</div>
<div class="lfloat">
	<select name="order" onchange="doSel(this);">

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','date');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'date') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['order_by_date'];?>
</option>

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','amount');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'amount') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['order_by_amount'];?>
</option>

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','user_id');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'user_id') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['order_by_user'];?>
</option>

		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','processor');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'processor') {?>selected="selected"<?php }?>>
		<?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['order_by_processor'];?>
</option>

	</select>

	<select name="order_way" onchange="doSel(this);">
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_way_link']->value,'##order_way##','desc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'desc') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['desc'];?>
</option>
		<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_way_link']->value,'##order_way##','asc');?>
'" <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'asc') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['asc'];?>
</option>
	</select>

</div>
<div class="buttonwrapper lfloat ml10"><div class="button3-left">

	<a href="javascript:;" id="add_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-down-arrow.png" /></span></a>

	<a href="javascript:;" id="remove_search"><span class="button3-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/gray-up-arrow.png" /></span></a>

</div></div>

</div> 

<div class="rfloat">
<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<div class="clearfix"></div>

<div id="search_box" style="display: none;">

<input type="hidden" name="page" value = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<input type="hidden" name="order" value = "<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" />
<input type="hidden" name="order_way" value = "<?php echo $_smarty_tpl->tpl_vars['order_way']->value;?>
" />
<input type="hidden" name="no_per_page" value = "<?php echo $_smarty_tpl->tpl_vars['no_per_page']->value;?>
" />

<input type="text" name="id" size="6" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['id'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['id'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['id'];
}?>"/>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
<input type="text" name="username" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['username'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['username'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['username'];
}?>" />
<?php }?>

<input type="text" name="email" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['email'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['email'];
}?>" />

<input type="text" name="amount_from" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['amount_from'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['amount_from'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['amount_from'];
}?>" />

<input type="text" name="amount_to" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['amount_to'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['amount_to'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['amount_to'];
}?>" />

<select name="processor">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['processor'];?>
</option>
<?php
$_from = $_smarty_tpl->tpl_vars['processors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['processor_code'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['processor']) && $_smarty_tpl->tpl_vars['post_array']->value['processor'] == $_smarty_tpl->tpl_vars['v']->value['processor_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['processor_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</select>

<input name="date_from_vis" id="date_from_vis" type="text" size="15" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['date_from'];?>
"/>
<input name="date_from" id="date_from" type="hidden"/>

<input name="date_to_vis" id="date_to_vis" type="text" size="15" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['date_to'];?>
" />
<input name="date_to" id="date_to" type="hidden" />

<div class="buttons">
	<strong><input type="submit" name="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></strong>
</div>

</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width="30"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['processor'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['amount'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['user'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['status'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['details'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['date'];?>
</th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['actions_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['completed']) {?> inactive<?php }?>">
	<td><input type="checkbox" class="noborder" name="act<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
" id="act<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
"></td>
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['processor_title'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['amount_nice'];
if ($_smarty_tpl->tpl_vars['v']->value['tax']) {?><br/><span class="sc4"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['tax'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['tax_nice'];?>
</span><?php }?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['user_id']) {?><a href="javascript:;" class="usrinfo" id="info<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['email'];
}?></a><?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
}?></td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['completed']) {?><div class="small-btn activebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['completed'];?>
</div><?php } else { ?><div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['not_completed'];?>
</div><?php }?>
	</td>
	<td class="laligned"><?php echo $_smarty_tpl->tpl_vars['v']->value['action_str'];
if ($_smarty_tpl->tpl_vars['v']->value['invoice_id']) {
echo $_smarty_tpl->tpl_vars['lng']->value['invoice']['invoice'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/include/generate_invoice.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice_id'];?>
" class="blue">#<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice_id'];?>
</a><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</td>
	<td>

		<a href="javascript:;" class="ordinfo" id="ord<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['info'];?>
" alt="">
		</a>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['orders']['delete'] == 1) {?>
		<a href="javascript:;" onclick="onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['order_history']['confirm_delete']);?>
', 'order');">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="">
		</a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['orders']['edit'] == 1) {?>
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['completed'] == 0) {?>
			<?php if (count($_smarty_tpl->tpl_vars['v']->value['pending_actions']) > 1) {?>
			<a href="javascript:;" class="invoice" id="inv<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['accept'];?>
" alt=""></a>
			<?php } else { ?>
			<a href="javascript:;" onclick="onEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
', 'order', '');">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt=""></a>
			<?php }?>
			

			<?php } else { ?>
			<a href="javascript:;" onclick="onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
', 'order','');">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['invoice'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt=""></a>

			<?php }?>
		</span>
		<?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_actions']->value == 0) {?>
	<tr><td colspan="10"><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['no_actions'];?>
</td></tr>
<?php }?>

</table>
</form>

<?php if ($_smarty_tpl->tpl_vars['no_actions']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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

		$("#check_all").click(function()
		{

			if ($('#check_all').is(':checked')) checkAll(document);
			else uncheckAll(document);

		});


$("a.invoice").click(function(event){
	var invoice_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 630,
		'height'        		: 500,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/selective_invoice_accept.php?id='+invoice_id+'&type=invoice',
		'onClosed': function(){ location.reload(true); }
	});
});
$("a.usrinfo").click(function(event){
	var user_id = jQuery(this).attr("id").substr(4);
	$.fancybox({
		'width'         		: 730,
		'height'        		: 700,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/info_user.php?id='+user_id
	});
});

$("a.ordinfo").click(function(event){
	var ord_id = jQuery(this).attr("id").substr(3);
	$.fancybox({
		'width'         		: 730,
		'height'        		: 700,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/info_order.php?id='+ord_id
	});
});

}); // end document ready

	$(function() {
		$('#date_from_vis').datepicker({
			dateFormat: "M dd yy",
			changeMonth: true,
			changeYear: true,
			altField: '#date_from', altFormat: 'yy-mm-dd'
		});

		$('#date_to_vis').datepicker({
			dateFormat: "M dd yy",
			changeMonth: true,
			changeYear: true,
			altField: '#date_to', altFormat: 'yy-mm-dd'
		});
	});



<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>