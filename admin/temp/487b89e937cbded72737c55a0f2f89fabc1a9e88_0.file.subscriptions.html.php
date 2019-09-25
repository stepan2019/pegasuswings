<?php /* Smarty version 3.1.24, created on 2019-09-10 12:13:03
         compiled from "/home/pegasuswings/public_html/admin/templates/default/subscriptions.html" */ ?>
<?php
/*%%SmartyHeaderCode:20926979835d77934fbb38f6_54252770%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '487b89e937cbded72737c55a0f2f89fabc1a9e88' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/subscriptions.html',
      1 => 1443016758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20926979835d77934fbb38f6_54252770',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'demo' => 0,
    'order_by_link' => 0,
    'order' => 0,
    'settings' => 0,
    'order_way_link' => 0,
    'order_way' => 0,
    'page' => 0,
    'no_per_page' => 0,
    'post_array' => 0,
    'plans' => 0,
    'v' => 0,
    'array_usr_pkg' => 0,
    'total' => 0,
    'crt_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77934fc76f53_85658529',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77934fc76f53_85658529')) {
function content_5d77934fc76f53_85658529 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '20926979835d77934fbb38f6_54252770';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users_subscriptions'];?>
</div>

<div class="p30">
<form name="search" id="search" method="post" action="subscriptions.php">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['subscriptions']['add'] == 1) {?>
	<a href="add_user_subscription.php"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/add.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['add'];?>
" alt=""></a>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['subscriptions']['delete'] == 1) {?>
	<input type="image" value="delete_selected" name="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" onClick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['subscriptions']['confirm_delete_all']);?>
')<?php }?>" style="border: 0px;" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" alt="">
	<?php }?>
</div>

<div class="lfloat">
	<select name="order" onchange="doSel(this);">

	<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','date_start');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'date_start') {?>selected="selected"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['order_by_date_start'];?>
</option>

	<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','date_end');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'date_end') {?>selected="selected"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['order_by_date_end'];?>
</option>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
	<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','username');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'username') {?>selected="selected"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['order_by_username'];?>
</option>
	<?php }?>

	<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','package_name');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'package_name') {?>selected="selected"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['order_by_package_name'];?>
</option>

	<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['order_by_link']->value,'##order##','ads_left');?>
'" <?php if ($_smarty_tpl->tpl_vars['order']->value == 'ads_left') {?>selected="selected"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['order_by_ads_left'];?>
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

<select name="package_id">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['package'];?>
</option>
<?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['package_id']) && $_smarty_tpl->tpl_vars['post_array']->value['package_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</select>

<input name="date_from_vis" id="date_from_vis" type="text" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['date_from'];?>
"/>
<input name="date_from" id="date_from" type="hidden"/>

<input name="date_to_vis" id="date_to_vis" type="text" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['date_to'];?>
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
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['user'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['package_name'];?>
</th>
	<th></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['remaining_ads'];?>
</th>
	<th></th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_usr_pkg']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['active']) {?> inactive<?php }?>">
	<td><input type="checkbox" class="noborder" name="usr_pkg<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="usr_pkg<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['settings']->value['contact_name_field']];
}?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['package_name'];?>
</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['recurring']) {?><span class="sc3"><?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['recurring'];?>
</span><br/><?php }?>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['date_start'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['date_start_nice'];?>
<br>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['date_renew'] && $_smarty_tpl->tpl_vars['v']->value['date_renew'] != "0000-00-00 00:00:00") {
echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['date_renew'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['date_renew_nice'];?>
<br><?php }?>
	<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['date_end'];?>
: <?php if ($_smarty_tpl->tpl_vars['v']->value['date_end'] && $_smarty_tpl->tpl_vars['v']->value['date_end'] != "0000-00-00 00:00:00") {
echo $_smarty_tpl->tpl_vars['v']->value['date_end_nice'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['never'];
}?>
	</td>
	<td><?php if (isset($_smarty_tpl->tpl_vars['v']->value['ads_left']) && $_smarty_tpl->tpl_vars['v']->value['ads_left'] == -1) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['unlimited'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['ads_left'];
}?></td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active']) {?>
		<div class="small-btn activebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['active'];?>
</div>
		<?php } else { ?>
		<div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['inactive'];?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['pending']) {?>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['subscriptions']['edit'] == 1) {?><a href="javascript:;" onclick="onEnable(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'usr_pkg', '')"><?php }?>
		<div class="small-btn pendingbutton icon tooltip icon"  title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['accept'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending'];?>
</div>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['subscriptions']['edit'] == 1) {?></a><?php }?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['v']->value['type']) && $_smarty_tpl->tpl_vars['v']->value['type'] == "sub" && $_smarty_tpl->tpl_vars['v']->value['expired']) {?>
		<div class="small-btn expiredbutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['expired'];?>
</div>
		<?php }?>
	</td>
	<td>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['subscriptions']['delete'] == 1) {?>
		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['subscriptions']['confirm_delete']);?>
', 'usr_pkg');<?php }?>">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['subscriptions']['edit'] == 1) {?>
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="onEnable(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 'usr_pkg', '')">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','usr_pkg','');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>
		</span>
		<?php }?>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?>
	<tr><td colspan="8"><?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['no_subscriptions'];?>
</td></tr>
<?php }?>

</table>
</form>

<?php if ($_smarty_tpl->tpl_vars['total']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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

	});

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