<?php /* Smarty version 3.1.24, created on 2019-07-30 13:27:34
         compiled from "/home/pegasuswings/public_html/admin/templates/default/invoice_settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:13455164815d4045c6de98e8_16121953%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568cf739edbdec5772730b85f00dff54cce03f32' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/invoice_settings.html',
      1 => 1536067268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13455164815d4045c6de98e8_16121953',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'invoice_settings' => 0,
    'template_path' => 0,
    'ads_settings' => 0,
    'fields' => 0,
    'v' => 0,
    'f' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d4045c6e5e656_88860796',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d4045c6e5e656_88860796')) {
function content_5d4045c6e5e656_88860796 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13455164815d4045c6de98e8_16121953';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/LWMS/jquery.lwMultiSelect.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/LWMS/jquery.lwMultiSelect.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	
bkLib.onDomLoaded(function() { nicEditors.allTextAreas({iconsPath : '../libs/nicEdit/nicEditorIcons.gif', fullPanel : true}) });

<?php echo '</script'; ?>
>


<div class="page_title">
<div class="lfloat" width="200"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['settings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['invoice_settings'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="payment_settings.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['payment_processors'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="invoice_settings.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['invoice_settings'];?>
</span></a>
	</div></div>

</div>
</div>

<div class="p30">
<form name="settings" method="post" action="invoice_settings.php" enctype="multipart/form-data">

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['enable_invoices'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_invoices" id="enable_invoices" <?php if ($_smarty_tpl->tpl_vars['invoice_settings']->value['enable_invoices'] == 1) {?>checked="checked"<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['seller_details'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['seller_details'];?>
</div>
	<div class="right_form"><textarea name="seller_details" rows="4" cols="70"><?php echo $_smarty_tpl->tpl_vars['invoice_settings']->value['seller_details'];?>
</textarea></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['invoice_logo'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['invoice_logo'];?>
</div>
	<div class="right_form">
		<input type="file" name="invoice_logo" />&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['nopic'] != '') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['invoice_settings']->value['invoice_logo'];?>
" class="imgfield">
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera.png"/></a>
		<?php } else { ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/camera_off.png"/>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['invoice_settings']->value['invoice_logo'] != '') {?>&nbsp;&nbsp;<a href="invoice_settings.php?delete=logo"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/delete.png" class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['delete'];?>
" alt="" /></a><?php }?>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['invoice_filename'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['invoice_filename'];?>
</div>
	<div class="right_form"><input name="filename" value="<?php if ($_smarty_tpl->tpl_vars['invoice_settings']->value['filename']) {
echo $_smarty_tpl->tpl_vars['invoice_settings']->value['filename'];
}?>" />.pdf</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['invoice_user_fields'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['invoice_user_fields'];?>
</div>
	<div class="right_form">
		<select id="user_fields" name="user_fields" multiple="multiple">
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<select id="selected_user_fields" multiple="multiple" style="display: none">
		
		<?php
$_from = $_smarty_tpl->tpl_vars['invoice_settings']->value['array_user_fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value) {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" selected="selected"><?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
if ($_smarty_tpl->tpl_vars['f']->value['caption'] == $_smarty_tpl->tpl_vars['v']->value) {
echo $_smarty_tpl->tpl_vars['f']->value['name'];
}
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?></option>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		
		<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
		<?php if (!in_array($_smarty_tpl->tpl_vars['v']->value['caption'],$_smarty_tpl->tpl_vars['invoice_settings']->value['array_user_fields'])) {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['caption'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		
		</select>
		<input type="hidden" id="user_fields_val" name="user_fields_val" value="<?php echo $_smarty_tpl->tpl_vars['invoice_settings']->value['user_fields'];?>
"/>
		<div class="information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['custom_text'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['custom_text'];?>
</div>
	<div class="right_form"><textarea name="custom_text" id="custom_text" rows="7" cols="70"><?php echo $_smarty_tpl->tpl_vars['invoice_settings']->value['custom_text'];?>
</textarea></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['invoice']['show_vat'];?>
</div>
	<div class="right_form">
	<input type="checkbox" name="show_vat" id="show_vat" <?php if (isset($_smarty_tpl->tpl_vars['invoice_settings']->value['show_vat']) && $_smarty_tpl->tpl_vars['invoice_settings']->value['show_vat'] == 1) {?>checked="checked"<?php }?>/>
	&nbsp;&nbsp;<input type="text" size="4" name="vat_percent" id="vat_percent" value="<?php if (isset($_smarty_tpl->tpl_vars['invoice_settings']->value['vat_percent']) && $_smarty_tpl->tpl_vars['invoice_settings']->value['vat_percent']) {
echo $_smarty_tpl->tpl_vars['invoice_settings']->value['vat_percent'];
}?>" />%
	</div>
</div>

<div class="form_footer">
	<div class="buttons rfloat"  onClick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php } else { ?>return checkInvoiceSettings();<?php }?>'>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save_changes'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>


</form>
</div> 


<?php echo '<script'; ?>
 type="text/javascript">

	$(document).ready(function() {
		$("a.imgfield").fancybox();

		//initialize the element
		$('#user_fields').lwMultiSelect({
		onChange: function() { 
			//alert($('#user_fields').val());
			$('#user_fields_val').val($('#user_fields').val());
		}
		});       
		modList();
    });
    
     function modList() {
        jQuery('#user_fields').html(jQuery('#selected_user_fields').html()).data('plugin_lwMultiSelect').updateList();
      }

<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>