<?php /* Smarty version 3.1.24, created on 2019-06-13 19:23:11
         compiled from "/home/pegasuswings/public_html/admin/templates/default/mail_templates.html" */ ?>
<?php
/*%%SmartyHeaderCode:107391925d02a29fee2374_52696088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80ad97d3f1e029c9795ef77854da61cd5adf5d2' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/mail_templates.html',
      1 => 1463652208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107391925d02a29fee2374_52696088',
  'variables' => 
  array (
    'live_site' => 0,
    'lng' => 0,
    'template_code' => 0,
    'error' => 0,
    'languages' => 0,
    'crt_template' => 0,
    'array_templates' => 0,
    'v' => 0,
    'template_path' => 0,
    'crt_lang' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d02a2a00148b2_62166309',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d02a2a00148b2_62166309')) {
function content_5d02a2a00148b2_62166309 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '107391925d02a29fee2374_52696088';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/markitup/jquery.markitup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/markitup/sets/default/set.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/markitup/skins/markitup/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/markitup/sets/default/style.css" />

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['templates'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['mail_templates'];?>
</div>

<div class="p30">
<form name="templates" method="post" action="mail_templates.php<?php if ($_smarty_tpl->tpl_vars['template_code']->value) {?>?template=<?php echo $_smarty_tpl->tpl_vars['template_code']->value;
}?>">

<div class="form_container">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['mail_templates']['select_template'];?>
</div>
	<div class="right_form">
		<div style="width: 600px;" class="sc4"><?php echo $_smarty_tpl->tpl_vars['crt_template']->value[$_smarty_tpl->tpl_vars['languages']->value[0]['id']]['info'];?>
</div>
		<select name="template" size=20 onchange="doSel(this);" class="mselect">
			<?php
$_from = $_smarty_tpl->tpl_vars['array_templates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<option value="location.href='?template=<?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
'" <?php if ($_smarty_tpl->tpl_vars['template_code']->value == $_smarty_tpl->tpl_vars['v']->value['code']) {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
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
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
images/info.png"  class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['crt_template']->value[$_smarty_tpl->tpl_vars['crt_lang']->value]['info'];?>
" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['subject'];?>
</div>
	<div class="right_form"><input type="text" name="subject_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="subject_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size=50 value="<?php if (isset($_smarty_tpl->tpl_vars['crt_template']->value[$_smarty_tpl->tpl_vars['v']->value['id']]['subject'])) {
echo $_smarty_tpl->tpl_vars['crt_template']->value[$_smarty_tpl->tpl_vars['v']->value['id']]['subject'];
}?>" style="margin-top: 5px;" <?php if ($_smarty_tpl->tpl_vars['v']->value['direction'] == "rtl") {?>dir="rtl"<?php }?> /></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

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
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['mailto']['content'];?>
</div>
	<div class="right_form"><textarea name="content_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="content_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" rows=30 cols=70 <?php if ($_smarty_tpl->tpl_vars['v']->value['direction'] == "rtl") {?>dir="rtl"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['crt_template']->value[$_smarty_tpl->tpl_vars['v']->value['id']]['content'])) {
echo $_smarty_tpl->tpl_vars['crt_template']->value[$_smarty_tpl->tpl_vars['v']->value['id']]['content'];
}?></textarea></div>
</div>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<div class="form_footer">
	<div class="buttons rfloat" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Save" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['save'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 
</form>
</div> 

<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function()	{
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
	$('#content_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
').markItUp(mySettings, { 
			beforeInsert:function() {
				
			}
		}
	);
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
});

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>