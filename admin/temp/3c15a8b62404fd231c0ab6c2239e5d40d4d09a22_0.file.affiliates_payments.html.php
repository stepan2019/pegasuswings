<?php /* Smarty version 3.1.24, created on 2019-09-10 15:29:28
         compiled from "/home/pegasuswings/public_html/admin/templates/default/affiliates_payments.html" */ ?>
<?php
/*%%SmartyHeaderCode:12622607425d77c1583381c2_02232367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c15a8b62404fd231c0ab6c2239e5d40d4d09a22' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/affiliates_payments.html',
      1 => 1531209360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12622607425d77c1583381c2_02232367',
  'variables' => 
  array (
    'lng' => 0,
    'no_per_page' => 0,
    'page' => 0,
    'order_by_link' => 0,
    'order' => 0,
    'order_way_link' => 0,
    'order_way' => 0,
    'template_path' => 0,
    'post_array' => 0,
    'settings' => 0,
    'payments_array' => 0,
    'v' => 0,
    'live_site' => 0,
    'no_payments' => 0,
    'crt_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77c158387c81_14793265',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77c158387c81_14793265')) {
function content_5d77c158387c81_14793265 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '12622607425d77c1583381c2_02232367';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title">
	<div class="lfloat" width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['payments_history'];?>
	</div>

	<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="affiliates_revenues.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['revenues'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="affiliates_payments.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['payments_history'];?>
</span></a>
	</div></div>

	</div>

</div>


<div class="p30">
<form name="search" id="search" method="post" action="affiliates_payments.php?no_per_page=<?php echo $_smarty_tpl->tpl_vars['no_per_page']->value;
if ($_smarty_tpl->tpl_vars['page']->value) {?>&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">

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
	<th width="30" class="hleft"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['user'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['amount'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['order_history']['date'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['paid_to'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['status'];?>
</th>
	<th width="80" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['payments_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr class="<?php if (!$_smarty_tpl->tpl_vars['v']->value['completed']) {?>inactive<?php }?>">
	<td>#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	<td><a href="affiliates_payments.php?affiliate_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['affiliate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['affiliate_id'];?>
</a></td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['user_id']) {?><a href="javascript:;" class="usrinfo" id="info<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['email'];
}?></a><?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
}?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['amount_nice'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['affiliate_paypal_email'];?>
</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['completed']) {?><div class="small-btn orangebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['paid'];?>
</div><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/pay_affiliate.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><div class="small-btn inactivebutton pay tooltip" id="pay<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['pay'];?>
" ><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['not_paid'];?>
</div></a><?php }?></td>
	<td>

		<?php if ($_smarty_tpl->tpl_vars['v']->value['completed']) {?> 
		<a href="javascript:;" onclick="markPaid('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 0)"><div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['unmark_paid'];?>
</div></a>
		<?php } else { ?>
		<a href="javascript:;" onclick="markPaid('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 1)"><div class="small-btn inactivebutton icon"><?php echo $_smarty_tpl->tpl_vars['lng']->value['affiliates']['mark_paid'];?>
</div></a>
		<?php }?>

	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['no_payments']->value == 0) {?>
	<tr><td colspan="9"><?php echo $_smarty_tpl->tpl_vars['lng']->value['no_items'];?>
</td></tr>
<?php }?>

</table>
</form>

<?php if ($_smarty_tpl->tpl_vars['no_payments']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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

});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>