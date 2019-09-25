<?php /* Smarty version 3.1.24, created on 2019-06-11 21:49:15
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/ratings/listing_reviews.html" */ ?>
<?php
/*%%SmartyHeaderCode:9444265d0021dbc91bc1_49405855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e29286c0a41a9ee4736842100bb0cae0890ebf' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/ratings/listing_reviews.html',
      1 => 1456308628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9444265d0021dbc91bc1_49405855',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_ratings' => 0,
    'template_path' => 0,
    'demo' => 0,
    'array_ratings' => 0,
    'v' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d0021dbd20787_52934935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d0021dbd20787_52934935')) {
function content_5d0021dbd20787_52934935 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9444265d0021dbc91bc1_49405855';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/js/ratings.js"><?php echo '</script'; ?>
>

<div class="page_title">
<div class="lfloat" width="200"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['ratings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['ads_reviews'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/index.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['reviews'];?>
</span></a>
	</div></div>
	
	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/listing_reviews.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['ads_reviews'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/settings.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['settings'];?>
</span></a>
	</div></div>

</div>
</div>


<div class="p30">
<form name="reviews" id="reviews" method="post" action="">

<div class="lfloat" style="width: 600px;">

<div class="lfloat mr10">
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
	<th><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['review'];?>
</th>
	<th width="100"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['user'];?>
</th>
	<th width="100"><?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['date'];?>
</th>
	<th width="50" class="hright"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['action'];?>
</th>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['array_ratings']->value;
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
	<td><input type="checkbox" class="noborder" name="rw<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="rw<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
	<td><div id="id<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</div></td>
	<td class="laligned">
		<div class="lfloat">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/modules/ratings/css/images/star<?php if (round($_smarty_tpl->tpl_vars['v']->value['rating']) >= ($_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1)) {?>_on<?php } else { ?>_off<?php }?>.gif" />
		<?php endfor; endif; ?>
		</div>
		<div class="lfloat">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
		<div class="clearfix"></div>

		<div><span class="cursive"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['content'];?>
:</span> <?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
		<div><span class="cursive"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['review_for'];?>
:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_title'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['posted_on'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
<br/>
		<span class="cursive"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['user'];?>
:</span> <?php if ($_smarty_tpl->tpl_vars['v']->value['name']) {
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['v']->value['email']) {?>&nbsp;|&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];
}
if ($_smarty_tpl->tpl_vars['v']->value['website']) {?>&nbsp;|&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['website'];?>
</a><?php }?></div>
	</td>
	<td><?php if ($_smarty_tpl->tpl_vars['v']->value['poster_id']) {
echo $_smarty_tpl->tpl_vars['v']->value['poster_username'];
} else {
echo $_smarty_tpl->tpl_vars['lng_ratings']->value['guest'];
}?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</td>
	<td>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/edit_ad_review.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/edit.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
" alt=""></a>

		<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onDeleteReview('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['confirm_delete'];?>
', 'ad');<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt=""></a>
		
		<span id="div_active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['v']->value['active'] == 0) {?>
			<a href="javascript:;" onclick="onReviewEnable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
', 'ad');">
			<img id="active<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/enable.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['enable'];?>
" alt="">
			</a>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onReviewDisable('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['enable']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['disable']);?>
', 'ad');<?php }?>">
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
');<?php } else { ?>onReviewBlock('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['block_ip']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip']);?>
', 'ad');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/block.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['block_ip'];?>
" alt="">
			</a>
			<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onReviewUnblock('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['block_ip']);?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['users']['unblock_ip']);?>
', 'ad');<?php }?>">
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
<tr><td colspan=6>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['no_reviews'];?>
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

}
}
?>