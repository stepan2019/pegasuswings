<?php /* Smarty version 3.1.24, created on 2019-06-11 16:37:27
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/auto_renew/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:17277373695cffd8c7ec59f2_93245790%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f47a822c9b028918d64b12807273887bdbbfacad' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/auto_renew/index.html',
      1 => 1525278400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17277373695cffd8c7ec59f2_93245790',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_ar' => 0,
    'error' => 0,
    'ar_settings' => 0,
    'template_path' => 0,
    'packages' => 0,
    'v' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffd8c7f1f795_84397395',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffd8c7f1f795_84397395')) {
function content_5cffd8c7f1f795_84397395 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17277373695cffd8c7ec59f2_93245790';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_ar']->value['auto_renew'];?>
</div>

<div class="p30">
<form name="ar_settings" method="post" enctype="multipart/form-data" action="">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value != '') {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ar']->value['days'];?>
</div>
	<div class="right_form">
		<input type="text" size="6" name="days" id="days" value="<?php if (isset($_smarty_tpl->tpl_vars['ar_settings']->value['days']) && $_smarty_tpl->tpl_vars['ar_settings']->value['days']) {
echo $_smarty_tpl->tpl_vars['ar_settings']->value['days'];
}?>" />	&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['info']['categories'];?>
" /></div>
	<div class="right_form">
		<input type="radio" name="choose_plans" id="choose_plans1" value="all" <?php if (isset($_smarty_tpl->tpl_vars['ar_settings']->value['plans']) && $_smarty_tpl->tpl_vars['ar_settings']->value['plans'] == "0") {?>checked="checked"<?php }?> onchange="onChoosePlans(this.form)" onclick="onChoosePlans(this.form)"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ar']->value['all_plans'];?>

		&nbsp;&nbsp;<input type="radio" name="choose_plans" id="choose_plans2" value="choose" <?php if (isset($_smarty_tpl->tpl_vars['ar_settings']->value['plans']) && $_smarty_tpl->tpl_vars['ar_settings']->value['plans'] != "0") {?>checked="checked"<?php }?> onchange="onChoosePlans(this.form)" onclick="onChoosePlans(this.form)"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ar']->value['plans'];?>

	</div>
</div>

<div class="clearfix" id="div_plans" style="display: none">
	<div class="left_form">&nbsp;</div>
	<div class="right_form">
	<select multiple="multiple" size=7 name="plans[]" id="plans" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['packages']->value;
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
	</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ar']->value['edit_email_template'];?>
</div>
	<div class="right_form"><a href="../../mail_templates.php?template=auto_renew" class="sc1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['edit'];?>
</a></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php }?>'>
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

function onChoosePlans(fname) {

	if(fname.choose_plans[0].checked) document.getElementById("div_plans").style.display='none';
	else document.getElementById("div_plans").style.display='block';

}

function choosePlans(fname,plans_str) {

	if(plans_str=="") {
		fname.choose_plans[0].checked=true;
		document.getElementById("div_plans").style.display='none';
	} else {
		fname.choose_plans[1].checked=true;
		document.getElementById("div_plans").style.display='block';
		var split_plans=plans_str.split(",");
		var no = split_plans.length;
		var len = fname.plans.length;
		for(i=0; i<len; i++) {
			var val = fname.plans.options[i].value;
			if (split_plans.toString().indexOf(","+val+",")!==-1 || split_plans[0]==val || split_plans[no-1]==val) fname.plans.options[i].selected=true;
		}
	}
}

var old_plans_val="<?php if (isset($_smarty_tpl->tpl_vars['ar_settings']->value['plans'])) {
echo $_smarty_tpl->tpl_vars['ar_settings']->value['plans'];
}?>";
if(old_plans_val!="0") choosePlans(document.forms["ar_settings"], old_plans_val);

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>