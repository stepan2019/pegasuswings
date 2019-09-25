<?php /* Smarty version 3.1.24, created on 2019-06-11 17:08:01
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/suspend_all.html" */ ?>
<?php
/*%%SmartyHeaderCode:14939355185cffdff1af88d6_96547486%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8590fc63a7833d8fee4f93702fd6f560f476a4bd' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/suspend_all.html',
      1 => 1547976518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14939355185cffdff1af88d6_96547486',
  'variables' => 
  array (
    'demo' => 0,
    'lng' => 0,
    'template_path' => 0,
    'lng_su' => 0,
    'su_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffdff1affda1_57089109',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffdff1affda1_57089109')) {
function content_5cffdff1affda1_57089109 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14939355185cffdff1af88d6_96547486';
?>
	<div class="relative" style="display: inline;">

		<a href="javascript:;" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onclick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;"<?php } else { ?>class="suspend_all" id="suspend_all"<?php }?>>
		<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/suspend_user/images/suspend_all.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_su']->value['suspend_all'];?>
" >
		</a>

		<input type="image" value="unsuspend_all" name="unsuspend_all" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/suspend_user/images/unsuspend_all.png" title="<?php echo $_smarty_tpl->tpl_vars['lng_su']->value['unsuspend_all'];?>
" class="tooltip icon" style="border: 0px;">

		<div style="position: absolute; width: 400px; top: 20px; left: 0; background: #f0f0f0; border: 1px solid #999; z-index: 1000; border-radius: 10px; display: none; color: #333;" id="suspend_days_div" class="suspend_days_div">
			
		<div style="padding: 20px; border-bottom: 1px solid #fff;">
		<img class="remove_days tooltip" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/delete.png" style="float: right; cursor: pointer;" title="Close"/>
		<div style="margin-top: 30px; ">
		<input type="text"  name="suspend_all_days" id="suspend_all_days" value="<?php echo $_smarty_tpl->tpl_vars['su_settings']->value['days'];?>
" size="5" style="text-align: center; border: 1px solid #555;"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;

		<input type="submit" name="suspend_selected" value="<?php echo $_smarty_tpl->tpl_vars['lng_su']->value['suspend_all_selected'];?>
" style="float: right; padding: 7px 20px; background: #555; text-align: center; color: #fff; cursor: pointer; border-radius: 4px; border: 0" />

		</div>
		</div>
			
		
		<div style="background-color: #ecaa8a; border-top: 1px solid #d23636; padding: 30px 0; border-radius: 0 0 10px 10px; text-align: center;">

		<input type="submit" name="ban_selected" value="<?php echo $_smarty_tpl->tpl_vars['lng_su']->value['ban_all_selected'];?>
" style="padding: 7px; background: #900; text-align: center; color: #fff; cursor: pointer; font-weight: bold; border-radius: 4px; border: 0; width: 90%;" />
			
		</div> 
			
		</div> 
				
	</div><?php }
}
?>