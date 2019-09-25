<?php /* Smarty version 3.1.24, created on 2019-06-11 18:03:26
         compiled from "/home/pegasuswings/public_html/admin/templates/default/data/description_editor.html" */ ?>
<?php
/*%%SmartyHeaderCode:15926120275cffecee5ed4a2_86426401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6544e3910170f5d797c549d655aa4c750788530a' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/data/description_editor.html',
      1 => 1449161666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15926120275cffecee5ed4a2_86426401',
  'variables' => 
  array (
    'ads_settings' => 0,
    'languages' => 0,
    'no_words' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffecee61ea17_19224451',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffecee61ea17_19224451')) {
function content_5cffecee61ea17_19224451 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15926120275cffecee5ed4a2_86426401';
?>
<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[


$(document).ready(function() {


<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['description_editor']) {?>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1 && $_smarty_tpl->tpl_vars['ads_settings']->value['translate_title_description'] == 1) {?>


$(document).ready(function () {

	myNicEditor = new nicEditor({iconsPath : '../libs/nicEdit/nicEditorIcons.gif', buttonList : ['bold','italic','underline', 'left', 'center', 'right', 'justify', 'ul', 'ol', 'indent', 'outdent', 'forecolor', 'bgcolor', 'hr','link','unlink', 'fontSize', 'fontFormat'], countTextLeft: <?php if (isset($_smarty_tpl->tpl_vars['no_words']->value) && $_smarty_tpl->tpl_vars['no_words']->value) {?>1<?php } else { ?>0<?php }?>, count_input: 'count_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'});



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

myNicEditor.panelInstance('description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>


	});


<?php } else { ?>

	$(document).ready(function () {
	myNicEditor = new nicEditor({iconsPath : '../libs/nicEdit/nicEditorIcons.gif', buttonList : ['bold','italic','underline', 'left', 'center', 'right', 'justify', 'ul', 'ol', 'indent', 'outdent', 'forecolor', 'bgcolor', 'hr','link','unlink', 'fontSize', 'fontFormat'], countTextLeft: <?php if (isset($_smarty_tpl->tpl_vars['no_words']->value) && $_smarty_tpl->tpl_vars['no_words']->value) {?>1<?php } else { ?>0<?php }?>, count_input: 'count'}).panelInstance('description');
	});


<?php }?>
<?php }?>


});


//]]>
<?php echo '</script'; ?>
><?php }
}
?>