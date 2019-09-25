<?php /* Smarty version 3.1.24, created on 2019-06-11 21:49:17
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/ratings/settings.html" */ ?>
<?php
/*%%SmartyHeaderCode:19146923535d0021dd568ee0_36877803%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf9d30e20e25defb2b27fa3c308610f637be303f' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/ratings/settings.html',
      1 => 1456308638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19146923535d0021dd568ee0_36877803',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'lng_ratings' => 0,
    'error' => 0,
    'info' => 0,
    'rt_settings' => 0,
    'groups' => 0,
    'v' => 0,
    'template_path' => 0,
    'html_tags' => 0,
    'image_fields' => 0,
    'languages' => 0,
    'field_name' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d0021dd5e70b0_37067190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d0021dd5e70b0_37067190')) {
function content_5d0021dd5e70b0_37067190 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '19146923535d0021dd568ee0_36877803';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/css/jquery.comboselect.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.selso.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.comboselect.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	
bkLib.onDomLoaded(function() { nicEditors.allTextAreas({iconsPath : '../../../libs/nicEdit/nicEditorIcons.gif', fullPanel : true}) });

<?php echo '</script'; ?>
>


<!--[if IE]>
<style type="text/css">
select.csleft, select.csright {
	width: 100px;
}
</style>
<![endif]-->


<?php echo '<script'; ?>
 type="text/javascript">


		$(function(){
			$('#allowed_html_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
		});

		$(function(){
			$('#ar_allowed_html_box').comboselect({ sort: 'none', addbtn: '+',  rembtn: '-' });
		});


<?php echo '</script'; ?>
>

<div class="page_title">
<div class="lfloat" width="200"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['modules'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['ratings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['settings'];?>
</div>
<div class="rfloat mt5">

	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/index.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['reviews'];?>
</span></a>
	</div></div>
	
	<div class="buttonwrapper lfloat mr10"><div class="tab2-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/listing_reviews.php"><span class="tab2-right"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['ads_reviews'];?>
</span></a>
	</div></div>

	<div class="buttonwrapper lfloat mr10"><div class="tab1-left">
	<a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/modules/ratings/settings.php"><span class="tab1-right"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['settings'];?>
</span></a>
	</div></div>

</div>
</div>

<div class="p30">
<form name="settings" method="post" action="" enctype="multipart/form-data">

<div class="form_container" style="padding-top: 0px !important">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_ratings']->value['ratings']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allow'];?>
</div>
	<div class="right_form">
		<select name="allow">
			<option value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['allow'] == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allow_any'];?>
</option>
			<option value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['allow'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allow_once_per_ip'];?>
</option>
			<option value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['allow'] == 2) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allow_once_a_day'];?>
</option>
			<option value="3" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['allow'] == 3) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allow_once_a_month'];?>
</option>
			<option value="4" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['allow'] == 4) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allow_once_a_year'];?>
</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['require_login'];?>
</div>
	<div class="right_form"><input type="checkbox" name="require_login" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['require_login'] == 1) {?>checked<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['rate_listings'];?>
</div>
	<div class="right_form"><input type="checkbox" name="rate_listings" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['rate_listings'] == 1) {?>checked<?php }?>></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['rate_users'];?>
</div>
	<div class="right_form"><input type="checkbox" name="rate_users" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['rate_users'] == 1) {?>checked<?php }?>></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['cannot_rate_oneself'];?>
</div>
	<div class="right_form"><input type="checkbox" name="cannot_rate_oneself" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['cannot_rate_oneself'] == 1) {?>checked<?php }?>></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_ratings']->value['reviews']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['enable_reviews'];?>
</div>
	<div class="right_form"><input type="checkbox" name="enable_reviews" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['enable_reviews'] == 1) {?>checked<?php }?>></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_for_groups'];?>
</div>
	<div class="right_form">
		<select multiple="multiple" size=3 name="groups[]" id="groups" class="mselect">
		<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
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
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['rt_settings']->value['groups_array'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['info']['admin_verification'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['admin_verification'];?>
</div>
	<div class="right_form">
		<input type="radio" name="admin_verification" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['admin_verification'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['always'];?>
&nbsp;&nbsp;
		<input type="radio" name="admin_verification" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['admin_verification'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['never'];?>
&nbsp;&nbsp;
		<input type="radio" name="admin_verification" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['admin_verification'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['guests_only'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_captcha'];?>
</div>
	<div class="right_form">
		<input type="radio" name="captcha" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['captcha'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['always'];?>
&nbsp;&nbsp;
		<input type="radio" name="captcha" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['captcha'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['never'];?>
&nbsp;&nbsp;
		<input type="radio" name="captcha" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['captcha'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['guests_only'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_title'];?>
</div>
	<div class="right_form">
		<input type="radio" name="use_title" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_title'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['required'];?>
&nbsp;&nbsp;
		<input type="radio" name="use_title" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_title'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
&nbsp;&nbsp;
		<input type="radio" name="use_title" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_title'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['optional'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_email'];?>
</div>
	<div class="right_form">
		<input type="radio" name="use_email" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_email'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['required'];?>
&nbsp;&nbsp;
		<input type="radio" name="use_email" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_email'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
&nbsp;&nbsp;
		<input type="radio" name="use_email" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_email'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['optional'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_website'];?>
</div>
	<div class="right_form">
		<input type="radio" name="use_website" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_website'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['required'];?>
&nbsp;&nbsp;
		<input type="radio" name="use_website" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_website'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
&nbsp;&nbsp;
		<input type="radio" name="use_website" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['use_website'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['optional'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['html_editor'];?>
</div>
	<div class="right_form"><input type="checkbox" name="html_editor" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['html_editor'] == 1) {?>checked<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['badwords_check'];?>
</div>
	<div class="right_form"><input type="checkbox" name="badwords_check" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['badwords_check'] == 1) {?>checked<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allowed_html'];?>
</div>
	<div class="right_form">
		<select id="allowed_html_box" name="allowed_html_box[]" multiple="multiple" size="6" class="mselect">
			<?php
$_from = $_smarty_tpl->tpl_vars['html_tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['rt_settings']->value['array_allowed_html'])) {?>selected="selected"<?php }?>>&lt;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&gt;</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="allowed_html" name="allowed_html" value="">
		<div class="information" style="float: left;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['info']['logo_field'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['logo_field'];?>
</div>
	<div class="right_form">
		<select name="logo_field">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
</option>
			<option value="store_banner" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['logo_field'] == 'store_banner') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['store_banner'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['image_fields']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['logo_field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'field_name', null); ob_start(); ?>terms_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['info']['terms'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['terms'];?>
</div>
	<div class="right_form"><textarea name="terms_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="terms_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="4" cols="70"><?php echo $_smarty_tpl->tpl_vars['rt_settings']->value[$_smarty_tpl->tpl_vars['field_name']->value];?>
</textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['no_on_page'];?>
</div>
	<div class="right_form"><input type="text" name ="no_on_page" id ="no_on_page" value="<?php echo $_smarty_tpl->tpl_vars['rt_settings']->value['no_on_page'];?>
" size="4" /></div>
</div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng_ratings']->value['ads_reviews']," ","&nbsp;");?>
</strong></div></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['enable_reviews'];?>
</div>
	<div class="right_form"><input type="checkbox" name="ar_enable_reviews" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_enable_reviews'] == 1) {?>checked<?php }?>></div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['info']['admin_verification'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['admin_verification'];?>
</div>
	<div class="right_form">
		<input type="radio" name="ar_admin_verification" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_admin_verification'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['always'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_admin_verification" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_admin_verification'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['never'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_admin_verification" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_admin_verification'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['guests_only'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_captcha'];?>
</div>
	<div class="right_form">
		<input type="radio" name="ar_captcha" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_captcha'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['always'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_captcha" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_captcha'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['never'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_captcha" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_captcha'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['guests_only'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_title'];?>
</div>
	<div class="right_form">
		<input type="radio" name="ar_use_title" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_title'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['required'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_use_title" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_title'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_use_title" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_title'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['optional'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_email'];?>
</div>
	<div class="right_form">
		<input type="radio" name="ar_use_email" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_email'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['required'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_use_email" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_email'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_use_email" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_email'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['optional'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['use_website'];?>
</div>
	<div class="right_form">
		<input type="radio" name="ar_use_website" value="1" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_website'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['required'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_use_website" value="0" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_website'] == 0) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
&nbsp;&nbsp;
		<input type="radio" name="ar_use_website" value="2" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_use_website'] == 2) {?>checked<?php }?>/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['optional'];?>

	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['html_editor'];?>
</div>
	<div class="right_form"><input type="checkbox" name="ar_html_editor" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_html_editor'] == 1) {?>checked<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['badwords_check'];?>
</div>
	<div class="right_form"><input type="checkbox" name="ar_badwords_check" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_badwords_check'] == 1) {?>checked<?php }?> /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['allowed_html'];?>
</div>
	<div class="right_form">
		<select id="ar_allowed_html_box" name="ar_allowed_html_box[]" multiple="multiple" size="6" class="mselect">
			<?php
$_from = $_smarty_tpl->tpl_vars['html_tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['rt_settings']->value['ar_array_allowed_html'])) {?>selected="selected"<?php }?>>&lt;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&gt;</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
		<input type="hidden" id="ar_allowed_html" name="ar_allowed_html" value="">
		<div class="information" style="float: left;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['info']['comboselect'];?>
</div>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['info']['logo_field'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['logo_field'];?>
</div>
	<div class="right_form">
		<select name="ar_logo_field">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['do_not_use'];?>
</option>
			<option value="store_banner" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_logo_field'] == 'store_banner') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['store_banner'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['image_fields']->value;
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
" <?php if ($_smarty_tpl->tpl_vars['rt_settings']->value['ar_logo_field'] == $_smarty_tpl->tpl_vars['v']->value['caption']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'field_name', null); ob_start(); ?>ar_terms_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['info']['terms'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['terms'];?>
</div>
	<div class="right_form"><textarea name="ar_terms_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="ar_terms_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows="4" cols="70"><?php echo $_smarty_tpl->tpl_vars['rt_settings']->value[$_smarty_tpl->tpl_vars['field_name']->value];?>
</textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng_ratings']->value['no_on_page'];?>
</div>
	<div class="right_form"><input type="text" name ="ar_no_on_page" id ="ar_no_on_page" value="<?php echo $_smarty_tpl->tpl_vars['rt_settings']->value['ar_no_on_page'];?>
" size="4" /></div>
</div>

<div class="form_footer">
	<div class="buttons rfloat" onclick='<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert("<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
");return false;<?php } else { ?>getMultiple(document.settings.allowed_html_box_right, document.settings.allowed_html); getMultiple(document.settings.ar_allowed_html_box_right, document.settings.ar_allowed_html);<?php }?>'>
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>