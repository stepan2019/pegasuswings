<?php /* Smarty version 3.1.24, created on 2019-06-11 16:39:33
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/comments/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:3614111365cffd9457c70d6_18761432%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aed3cd3fe8d15ebcec729502abbf4e4e8a7fb538' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/comments/index.html',
      1 => 1491820294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3614111365cffd9457c70d6_18761432',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_comments' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_comments' => 0,
    'v' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd94584c598_07817002',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd94584c598_07817002')) {
function content_5cffd94584c598_07817002 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3614111365cffd9457c70d6_18761432';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/comments/js/comments.js"><?php echo '</script'; ?>
>

<div class="page_title">
<div class="lfloat" width="200"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['comments'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/comments/index.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['comments'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/comments/settings.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['settings'];?>
</span></a>
	</div></div>

</div>
</div>

<div class="p30">
<form name="comments" id="comments" method="post" action="">

<div class="lfloat" style="width: 600px;">
<input type="image" value="delete_selected" name="delete_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete_all'];?>
" class="tooltip" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php } else { ?>return myConfirm('<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['settings']['confirm_delete_all']);?>
')<?php }?>" style="border: 0px;">
<input type="image" value="activate_selected" name="activate_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/activate_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['activate_all'];?>
" class="tooltip" style="border: 0px;">
<input type="image" value="deactivate_selected" name="deactivate_selected" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/deactivate_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['deactivate_all'];?>
" class="tooltip" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;<?php }?>" style="border: 0px;">
</div>

<div class="rfloat">
<?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<div class="clearfix"></div>

<table cellpadding="0" cellspacing="0" align="center" width="100%" class="datatable">
<tr id="theading">
	<th width="30" class="hleft"><input type="checkbox" class="noborder" name="check_all" id="check_all" /></th>
	<th width="20"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['id'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['comments'];?>
</th>
	<th width="100"><?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['user'];?>
</th>
	<th width="100"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['date'];?>
</th>
	<th width="50" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<tr id="row<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
	<td><input type="checkbox" class="noborder" name="cm<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="cm<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td><div id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</div></td>
	<td class="laligned">
		<div><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
		<div><span class="cursive"><?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['comment_for'];?>
:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['listing_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['posted_on'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
<br/>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['name']) {
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['v']->value['email']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];
}
if ($_smarty_tpl->tpl_vars['v']->value['website']) {?>&nbsp;|&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['website'];?>
</a><?php }?></div>
	</td>
	<td><?php if (isset($_smarty_tpl->tpl_vars['v']->value['user_id']) && $_smarty_tpl->tpl_vars['v']->value['user_id']) {
echo $_smarty_tpl->tpl_vars['v']->value['username'];
} else {
echo $_smarty_tpl->tpl_vars['lng_comments']->value['guest'];
}?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</td>
	<td>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/comments/edit_comment.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteComment('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['confirm_delete'];?>
');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="onCommentEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
');">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onCommentDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
');<?php }?>">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/disable.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['disable'];?>
" alt="">
			</a>
		<?php }?>
		</span>	

		<span id="div_block<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['blocked'] == 0) {?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onCommentBlock('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['block_ip']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip']);?>
');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/block.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['block_ip'];?>
" alt="">
			</a>
			<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onCommentUnblock('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['block_ip']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip']);?>
');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/unblock.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip'];?>
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

<?php if (!$_smarty_tpl->tpl_vars['no']->value) {?>
<tr><td colspan="6"><?php echo $_smarty_tpl->tpl_vars['lng_comments']->value['no_comments'];?>
</td></tr>
<?php }?>
</table>
</form>

<?php if ($_smarty_tpl->tpl_vars['no']->value) {?><div class="rfloat mt20"><?php echo $_smarty_tpl->getSubTemplate ("paginator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</div><?php }?>

<div class="clearfix"></div>

</div> 

<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

	$("#check_all").click(function()
	{

		if ($('#check_all').is(':checked')) checkAll(document);
		else uncheckAll(document);

	});
}); // end document ready



<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>