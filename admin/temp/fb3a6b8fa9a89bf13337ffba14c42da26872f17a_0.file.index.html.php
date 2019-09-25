<?php /* Smarty version 3.1.24, created on 2019-06-11 17:06:40
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/spam_prevention/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:14365852425cffdfa0ab6af5_68482714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb3a6b8fa9a89bf13337ffba14c42da26872f17a' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/spam_prevention/index.html',
      1 => 1553329924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14365852425cffdfa0ab6af5_68482714',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_sp' => 0,
    'template_path' => 0,
    'demo' => 0,
    'page' => 0,
    'no_per_page' => 0,
    'post_array' => 0,
    'array_logs' => 0,
    'v' => 0,
    'sp_settings' => 0,
    'no_logs' => 0,
    'crt_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdfa0b0c3e2_62946939',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdfa0b0c3e2_62946939')) {
function content_5cffdfa0b0c3e2_62946939 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14365852425cffdfa0ab6af5_68482714';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/spam_prevention/js/spam_prevention.js"><?php echo '</script'; ?>
>

<div class="page_title">
<div class="lfloat" width="200"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/spam_prevention/index.php"><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['spam_prevention'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/spam_prevention/index.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['spam_log'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/spam_prevention/settings.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
</span></a>
	</div></div>

</div>
</div>

<div class="p30">

<form name="search" id="search" method="post" action="">

<div class="lfloat">

	<input type="image" value="unblock_selected" name="unblock_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/activate_all.png" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php }?>" style="border: 0px;" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['unblock_all'];?>
" alt="">

	<input type="image" value="whitelist_selected" name="whitelist_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/whitelist_all.png" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php }?>" style="border: 0px;" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['whitelist_all'];?>
" alt="">

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
<input type="text" name="email" size="30" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['email'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['email'];
}?>"/>
&nbsp;
<select name="type">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</option>
	<option value="mailto"><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['mailto'];?>
</option>
	<option value="register"><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['register'];?>
</option>
	<option value="comments"><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['comments'];?>
</option>
	<option value="reviews"><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['reviews'];?>
</option>
</select>
&nbsp;
<input type="text" name="confidence_from" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['confidence_from'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['confidence_from'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['confidence_from'];
}?>"/>
<input type="text" name="confidence_to" size="20" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['confidence_to'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['post_array']->value['confidence_to'])) {
echo $_smarty_tpl->tpl_vars['post_array']->value['confidence_to'];
}?>"/>
&nbsp;
<input name="date_from_vis" id="date_from_vis" type="text" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['date_start'];?>
"/>
<input name="date_from" id="date_from" type="hidden"/>

<input name="date_to_vis" id="date_to_vis" type="text" size="10" class="defaultText" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['subscriptions']['date_end'];?>
" />
<input name="date_to" id="date_to" type="hidden" />

<div class="buttons">
	<strong><input type="submit" name="Search" id="Search" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['search'];?>
" /></strong>
</div>

</div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th class="hleft" width="20"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['search']['ip'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['email'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['type'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value['confidence'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['date'];?>
</th>
	<th class="hright" width="70">&nbsp;</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_logs']->value;
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
	<td><input type="checkbox" class="noborder" name="sl<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="sl<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['lng_sp']->value[$_smarty_tpl->tpl_vars['v']->value['type']];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['sp_settings']->value['use_sfs'] && $_smarty_tpl->tpl_vars['v']->value['confidence_sfs'] > 0) {?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/modules/spam_prevention/images/stopforumspam.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['confidence_sfs'];
}
if ($_smarty_tpl->tpl_vars['sp_settings']->value['use_abip'] && $_smarty_tpl->tpl_vars['v']->value['confidence_abip'] > 0) {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/modules/spam_prevention/images/abuseipdb.png" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['confidence_abip'];
}?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</td>
	<td>
	<span><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onSPUnblock('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng_sp']->value['confirm_unblock']);?>
');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/unblock.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['unblock'];?>
" alt=""></a></span>

	<span><a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onSPAddWhitelist('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo addslashes($_smarty_tpl->tpl_vars['lng_sp']->value['confirm_add_whitelist']);?>
');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/whitelist.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['security']['add_to_whitelist'];?>
" alt=""></a></span>

	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


<?php if (!$_smarty_tpl->tpl_vars['no_logs']->value) {?><tr><td colspan="8"><?php echo $_smarty_tpl->tpl_vars['lng']->value['no_items'];?>
</td></tr><?php }?>

</table>

</form>

<?php if ($_smarty_tpl->tpl_vars['no_logs']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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