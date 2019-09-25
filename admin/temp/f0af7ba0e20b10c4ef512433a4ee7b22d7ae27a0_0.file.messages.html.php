<?php /* Smarty version 3.1.24, created on 2019-09-10 15:29:49
         compiled from "/home/pegasuswings/public_html/admin/templates/default/messages.html" */ ?>
<?php
/*%%SmartyHeaderCode:17295861535d77c16da820a3_33259979%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0af7ba0e20b10c4ef512433a4ee7b22d7ae27a0' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/messages.html',
      1 => 1490991276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17295861535d77c16da820a3_33259979',
  'variables' => 
  array (
    'lng' => 0,
    'is_mod' => 0,
    'mod_sections' => 0,
    'template_path' => 0,
    'pages_link' => 0,
    'show' => 0,
    'page' => 0,
    'order' => 0,
    'order_way' => 0,
    'no_per_page' => 0,
    'post_array' => 0,
    'settings' => 0,
    'messages_array' => 0,
    'v' => 0,
    'seo_settings' => 0,
    'live_site' => 0,
    'demo' => 0,
    'no_messages' => 0,
    'crt_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c16dadc0a1_41321073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c16dadc0a1_41321073')) {
function content_5d77c16dadc0a1_41321073 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '17295861535d77c16da820a3_33259979';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['messages'];?>
</div>

<div class="p30">
<form name="search" id="search" method="post" action="messages.php">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['messages']['delete'] == 1) {?>
	<input type="image" value="delete_selected" name="delete_selected" id="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" onclick="return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['messages']['confirm_delete_all']);?>
')" style="border: 0px;" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
"/>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['messages']['edit'] == 1) {?>
	<input type="image" value="activate_selected" name="activate_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/activate_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['send_all_messages'];?>
" class="tooltip icon" onclick="return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['messages']['confirm_send_all']);?>
')" style="border: 0px;">
	<?php }?>
</div>

<div class="lfloat">
<select name="show" onChange="doSel(this);">
	<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=all'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "all") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['all'];?>
</option>
	<option value="location.href='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pages_link']->value,'##page##',1);?>
&show=pending'" <?php if ($_smarty_tpl->tpl_vars['show']->value == "pending") {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['pending'];?>
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
<input type="hidden" name="show" value = "<?php echo $_smarty_tpl->tpl_vars['show']->value;?>
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

<input type="text" name="keyword" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['keyword'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['id'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['keyword'];
}?>" />
<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
<input type="text" name="username" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['username'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['username'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['username'];
}?>"/>
<?php }?>
<input type="text" name="name" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['name'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['name'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['name'];
}?>"/>

<input type="text" name="email" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['email'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['email'];
}?>"/>

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
	<th width="20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th></th>
	<th width="70" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['messages_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if ($_smarty_tpl->tpl_vars['v']->value['report'] == 1) {?> spam<?php }
if ($_smarty_tpl->tpl_vars['v']->value['pending']) {?> pending<?php }?>">

	<td><input type="checkbox" class="noborder" name="msg<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
" id="msg<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
" /></td>
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
<br/><?php if ($_smarty_tpl->tpl_vars['v']->value['report'] == 1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/spam.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['reported_as_spam'];?>
" /><?php }?></td>
	<td class="laligned">
	<span class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['from'];?>
: <span class="underline"><?php if ($_smarty_tpl->tpl_vars['v']->value['from'] && $_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['from_email'];
}?></span> <?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['to'];?>
: <span class="underline"><?php if ($_smarty_tpl->tpl_vars['v']->value['to'] && $_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['to_username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['to_email'];
}?></span> <?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['on'];?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</span><?php if ($_smarty_tpl->tpl_vars['v']->value['pending']) {?><div class="small-btn pendingbutton icon" style="display: inline-block;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['pending'];?>
</div><?php }?>
	<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['message'],400,"...",false);?>
</p>

	<div class="rfloat">
	<?php if ($_smarty_tpl->tpl_vars['v']->value['starting']) {?><a href="message_history.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['starting'];?>
">
	<div class="buttonwrapper"><div class="rbutton1-left"><span class="rbutton1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['view_thread'];?>
</span></div></div>
	</a><?php }?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['ad_id']) {?><div class="small"><?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['started_for_listing'];?>
: <a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['v']->value['ad_id'],$_smarty_tpl->tpl_vars['v']->value['title']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];
}?>" class="sc1" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></div><?php }?>

	<div class="lfloat"><a href="view_message.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
">
	<div class="buttonwrapper"><div class="rbutton1-left"><span class="rbutton1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['view_complete_message'];?>
</span></div></div>
	</a></div>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['pending']) {?>
	<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['messages']['edit'] == 1) {?>
	<div class="lfloat ml10" id="div_msg<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
"><a href="javascript:;" class="send_message" id="msg<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
">
	<div class="buttonwrapper"><div class="button4-left"><span class="button4-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['send_message'];?>
</span></div></div>
 	</a></div>
	<?php }?>
	<?php }?>

	</td>

	<td>
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['messages']['edit'] == 1) {?>
		<a href="edit_message.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" />
		</a>
		<?php }?>

	
		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['messages']['delete'] == 1) {?>
		<a href="javascript:;" onclick="onDelete('<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete']);?>
', 'msg');">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" />
		</a>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['is_mod']->value || $_smarty_tpl->tpl_vars['mod_sections']->value['messages']['edit'] == 1) {?>
		<span id="div_block<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['blocked'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMsgBlock('<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['block_ip']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip']);?>
');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/block.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['block_ip'];?>
" alt="">
			</a>
			<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onMsgUnblock('<?php echo $_smarty_tpl->tpl_vars['v']->value['msg_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['block_ip']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip']);?>
');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/unblock.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip'];?>
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

<?php if ($_smarty_tpl->tpl_vars['no_messages']->value == 0) {?>
	<tr><td colspan="4"><?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['no_messages'];?>
</td></tr>
<?php }?>
</table>
</form>

<?php if ($_smarty_tpl->tpl_vars['no_messages']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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

		$(".send_message").click(function()
		{
			var msg_id = jQuery(this).attr("id").substr(3);
			$.ajax({
				type		: "GET",
				cache		: false,
				url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/actions.php?action=send&object=msg&id="+msg_id+"",
				success: function(data) {
					$("#div_msg"+msg_id).hide();
				} // end data
			});// end ajax

		})

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