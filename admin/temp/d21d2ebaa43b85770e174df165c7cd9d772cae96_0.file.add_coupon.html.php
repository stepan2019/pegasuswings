<?php /* Smarty version 3.1.24, created on 2019-07-21 10:10:22
         compiled from "/home/pegasuswings/public_html/admin/templates/default/add_coupon.html" */ ?>
<?php
/*%%SmartyHeaderCode:6159180355d343a0e9dca91_12815178%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd21d2ebaa43b85770e174df165c7cd9d772cae96' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/add_coupon.html',
      1 => 1443002370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6159180355d343a0e9dca91_12815178',
  'variables' => 
  array (
    'lng' => 0,
    'id' => 0,
    'self' => 0,
    'error' => 0,
    'tmp' => 0,
    'appearance' => 0,
    'template_path' => 0,
    'settings' => 0,
    'groups_list' => 0,
    'v' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d343a0ea1f907_91601923',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d343a0ea1f907_91601923')) {
function content_5d343a0ea1f907_91601923 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6159180355d343a0e9dca91_12815178';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
 > <a href="coupons.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['coupons'];?>
</a> > <?php if (!isset($_smarty_tpl->tpl_vars['id']->value) || !$_smarty_tpl->tpl_vars['id']->value) {
echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['add_coupon'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['edit_coupon'];
}?></div>

<div class="p30">
<form name="addcoupon" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['code'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" name="code" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['code'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['code'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['type'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
		<input type="radio" name="type" value="fixed" <?php if (!isset($_smarty_tpl->tpl_vars['tmp']->value['type']) || (isset($_smarty_tpl->tpl_vars['tmp']->value['type']) && ($_smarty_tpl->tpl_vars['tmp']->value['type'] == "fixed"))) {?>checked<?php }?> onchange="changeCouponType(this.form, '<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
')"> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['fixed'];?>
&nbsp;&nbsp;
		<input type="radio" name="type" value="percent" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['type']) && $_smarty_tpl->tpl_vars['tmp']->value['type'] == "percent") {?>checked<?php }?> onchange="changeCouponType(this.form, '<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
')"> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['percent'];?>


	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['discount'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input type="text" name="discount" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['discount'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['discount'];
}?>" size=5 maxlength="20" />&nbsp;&nbsp;<span id="postfix"><?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
</span></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['available_for'];?>
</div>
	<div class="right_form">
		<input type="checkbox" name="ads" <?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value['ads']) && $_smarty_tpl->tpl_vars['tmp']->value['ads']) || !isset($_smarty_tpl->tpl_vars['id']->value)) {?>checked<?php }?>>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['ads'];?>
&nbsp;&nbsp;
		<input type="checkbox" name="store" <?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value['store']) && $_smarty_tpl->tpl_vars['tmp']->value['store']) || !isset($_smarty_tpl->tpl_vars['id']->value)) {?>checked<?php }?>>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['store'];?>
&nbsp;&nbsp;
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['info']['use_by'];?>
" alt="">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['use_by'];?>
</div>
	<div class="right_form">
		<input type="radio" name="choose_group" id="choose_group1" value="all" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['choose_group']) && $_smarty_tpl->tpl_vars['tmp']->value['choose_group'] != "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onClick="onChooseGroup(this.form)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['all_groups'];?>

		&nbsp;&nbsp;<input type="radio" name="choose_group" id="choose_group2" value="choose" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['choose_group']) && $_smarty_tpl->tpl_vars['tmp']->value['choose_group'] == "choose") {?>checked="checked"<?php }?> onchange="onChooseGroup(this.form)" onClick="onChooseGroup(this.form)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['custom_fields']['choose_groups'];?>

	</div>
</div>


<div class="clearfix" id="div_groups" style="display: none;">
	<div class="left_form">&nbsp;</div>
	<div class="right_form"><select multiple="multiple" size=8 name="groups[]" id="groups" class="mselect">
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['nologin_enabled']) {?><option value="0"><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['not_logged_in'];?>
</option><?php }?>
		<?php
$_from = $_smarty_tpl->tpl_vars['groups_list']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['allow_usage'];?>
</div>
	<div class="right_form"><input type="text" size="4" name="allow" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['allow'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['allow'];
}?>" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['coupons']['times'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info_days_unlimited'];?>
</div>
</div>


<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>


</div> 

</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

var old_type_val="<?php echo $_smarty_tpl->tpl_vars['appearance']->value['default_currency'];?>
";
if(old_type_val!="0") changeCouponType(document.forms["addcoupon"], old_type_val);

var old_group_val="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['groups'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['groups'];
}?>";
if(old_group_val!="-1") chooseGroup(document.forms["addcoupon"], old_group_val);

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>