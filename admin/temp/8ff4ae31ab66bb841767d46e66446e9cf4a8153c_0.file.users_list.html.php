<?php /* Smarty version 3.1.24, created on 2019-06-11 17:49:39
         compiled from "/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/users_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:18704286065cffe9b34384b3_87181968%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff4ae31ab66bb841767d46e66446e9cf4a8153c' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/modules/suspend_user/users_list.html',
      1 => 1547976542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18704286065cffe9b34384b3_87181968',
  'variables' => 
  array (
    'v' => 0,
    'demo' => 0,
    'lng' => 0,
    'template_path' => 0,
    'lng_su' => 0,
    'su_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffe9b3461fb3_30286859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffe9b3461fb3_30286859')) {
function content_5cffe9b3461fb3_30286859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18704286065cffe9b34384b3_87181968';
?>
		
		<span>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['suspended'] == 0) {?>
			<div class="relative" style="display: inline;">
			
			<a href="javascript:;" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onclick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
'); return false;"<?php } else { ?>class="suspend" id="suspend<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"<?php }?>>
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/suspend_user/images/suspend.png" class="tooltip icon" title="<?php echo $_smarty_tpl->tpl_vars['lng_su']->value['suspend_user'];?>
" >
			</a>
			
			<div style="position: absolute; width: 320px; top: 20px; right: 0; background: #f0f0f0; border: 1px solid #999; z-index: 1000; border-radius: 10px; display: none; color: #333;" id="suspend_days<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="suspend_days_div">
			
			<div style="padding: 20px; border-bottom: 1px solid #fff;">
			<img class="remove_days tooltip" src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
/images/delete.png" style="float: right; cursor: pointer;" title="Close"/>
			<div style="margin-top: 30px; ">
			<input type="text"  name="days<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="days<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['su_settings']->value['days'];?>
" size="5" style="text-align: center; border: 1px solid #555;"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['days'];?>
&nbsp;
			
			<div style="float: right; padding: 5px 20px; background: #555; text-align: center; color: #fff; cursor: pointer; border-radius: 4px;" class="suspend_days" id="suspend_days<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng_su']->value['suspend'];?>
</div>
			
			</div>
			</div>
			
			
			<div style="background-color: #ecaa8a; border-top: 1px solid #d23636; padding: 30px 0; border-radius: 0 0 10px 10px;">
			
			<div style="margin: 0 10px; padding: 5px; background: #900; text-align: center; color: #fff; cursor: pointer; font-weight: bold; border-radius: 4px;" class="ban" id="ban<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng_su']->value['ban'];?>
</div>
			
			</div> 
			
			</div> 
				
			</div>
		<?php } else { ?>
			<a href="javascript:;" onclick="<?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');<?php } else { ?>onUnsuspend('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');<?php }?>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
modules/suspend_user/images/unsuspend.png" class="tooltip icon" title="<?php if ($_smarty_tpl->tpl_vars['v']->value['banned']) {
echo $_smarty_tpl->tpl_vars['lng_su']->value['unban_user'];
} else {
echo $_smarty_tpl->tpl_vars['lng_su']->value['unsuspend_user'];
}?>" alt="">
			</a>
		<?php }?>
		</span>
<?php }
}
?>