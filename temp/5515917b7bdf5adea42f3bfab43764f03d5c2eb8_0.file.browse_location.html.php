<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/browse_location/browse_location.html" */ ?>
<?php
/*%%SmartyHeaderCode:4287834615d8956e79ce877_04680345%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5515917b7bdf5adea42f3bfab43764f03d5c2eb8' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/browse_location/browse_location.html',
      1 => 1531385772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4287834615d8956e79ce877_04680345',
  'variables' => 
  array (
    'browse_location_settings' => 0,
    'bl_locations' => 0,
    'v' => 0,
    'no_elements' => 0,
    't' => 0,
    'settings' => 0,
    'main_domain' => 0,
    'location_fields' => 0,
    'live_site' => 0,
    'field2' => 0,
    'seo_settings' => 0,
    'no_on_col' => 0,
    'field1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e79fe261_53352835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e79fe261_53352835')) {
function content_5d8956e79fe261_53352835 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '4287834615d8956e79ce877_04680345';
?>
<section id="browse_location">
    <div class="tab_content">

    <div class="browse-tabs">
    
	<?php if ($_smarty_tpl->tpl_vars['browse_location_settings']->value['type'] != "single" && count($_smarty_tpl->tpl_vars['bl_locations']->value['values']) > 1) {?>

		<?php
$_from = $_smarty_tpl->tpl_vars['bl_locations']->value['values'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_master_loc'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_master_loc']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

		<input id="lt<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" type="radio" name="bl_tabs" class="tradio" <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_master_loc']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_master_loc']->value['index'] : null) == 0) {?>checked<?php }?>>
		<label for="lt<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="bl_label<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['name']," ","&nbsp;");?>
</label>
	
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		

	<?php }?>

	
	<?php if ($_smarty_tpl->tpl_vars['browse_location_settings']->value['type'] == "single") {?>

	<div class="browse-tab-content bltc" style="display: block">
	
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'no_elements', null); ob_start();
echo count($_smarty_tpl->tpl_vars['bl_locations']->value['elements']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php if ($_smarty_tpl->tpl_vars['no_elements']->value) {?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'no_on_col', null); ob_start();
echo ceil(($_smarty_tpl->tpl_vars['no_elements']->value/4));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['bl_locations']->value['elements'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_list'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_list']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'field2', null); ob_start();
echo $_smarty_tpl->tpl_vars['t']->value['el'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<li><a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations']) {
if ($_smarty_tpl->tpl_vars['settings']->value['enable_subdomains'] && $_smarty_tpl->tpl_vars['settings']->value['subdomain_field'] == $_smarty_tpl->tpl_vars['bl_locations']->value['caption']) {?>http://<?php echo $_smarty_tpl->tpl_vars['t']->value['encoded_el'];?>
.<?php echo $_smarty_tpl->tpl_vars['main_domain']->value;
} elseif (in_array($_smarty_tpl->tpl_vars['bl_locations']->value['caption'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['caption'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['field2']->value);?>
')<?php }
} else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeKeyValueLink($_smarty_tpl->tpl_vars['bl_locations']->value['caption'],$_smarty_tpl->tpl_vars['field2']->value);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['caption'];?>
=<?php echo $_smarty_tpl->tpl_vars['field2']->value;
}
}?>"><?php echo $_smarty_tpl->tpl_vars['t']->value['el'];?>
</a></li>
				<?php if (((isset($_smarty_tpl->tpl_vars['__foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_list']->value['index'] : null)+1)%$_smarty_tpl->tpl_vars['no_on_col']->value == 0 && (isset($_smarty_tpl->tpl_vars['__foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_list']->value['index'] : null) && (isset($_smarty_tpl->tpl_vars['__foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_list']->value['index'] : null) != $_smarty_tpl->tpl_vars['bl_locations']->value['no_elements']-1) {?>
			</ul>
			<ul>
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
		</ul>
		<?php }?> 
	</div>	
	<?php } else { ?>

		<?php
$_from = $_smarty_tpl->tpl_vars['bl_locations']->value['values'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_loc1'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_loc1']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>

		<div class="browse-tab-content bltc clearfix <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_loc1']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_loc1']->value['index'] : null) == 0) {?> first-tab-content<?php }?>" id="btc<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
		
			<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'no_elements', null); ob_start();
echo count($_smarty_tpl->tpl_vars['v']->value['elements']);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php if ($_smarty_tpl->tpl_vars['no_elements']->value) {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'no_on_col', null); ob_start();
echo ceil(($_smarty_tpl->tpl_vars['no_elements']->value/4));
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

			<ul>
			<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'field1', null); ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['name'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['elements'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_list'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_list']->value['index']++;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('sfield', 'field2', null); ob_start();
echo $_smarty_tpl->tpl_vars['t']->value['el'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<li><a href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_locations']) {
if ($_smarty_tpl->tpl_vars['settings']->value['enable_subdomains'] && $_smarty_tpl->tpl_vars['settings']->value['subdomain_field'] == $_smarty_tpl->tpl_vars['bl_locations']->value['caption']) {?>http://<?php echo $_smarty_tpl->tpl_vars['t']->value['encoded_el'];?>
.<?php echo $_smarty_tpl->tpl_vars['main_domain']->value;
} elseif (in_array($_smarty_tpl->tpl_vars['bl_locations']->value['caption'],$_smarty_tpl->tpl_vars['location_fields']->value)) {?>javascript:;" onclick="changeDoubleLocation('<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite'];?>
', '<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['master_caption'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['field1']->value);?>
,<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['caption'];?>
|<?php echo rawurlencode($_smarty_tpl->tpl_vars['field2']->value);?>
')<?php } else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeKeyValueLink($_smarty_tpl->tpl_vars['bl_locations']->value['master_caption'],$_smarty_tpl->tpl_vars['field1']->value,$_smarty_tpl->tpl_vars['bl_locations']->value['caption'],$_smarty_tpl->tpl_vars['field2']->value);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['master_caption'];?>
=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['field1']->value, 'UTF-8');?>
&amp;<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['caption'];?>
=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['field2']->value, 'UTF-8');
}
}
} else {
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeKeyValueLink($_smarty_tpl->tpl_vars['bl_locations']->value['master_caption'],$_smarty_tpl->tpl_vars['field1']->value,$_smarty_tpl->tpl_vars['bl_locations']->value['caption'],$_smarty_tpl->tpl_vars['field2']->value);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/listings.php?<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['master_caption'];?>
=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['field1']->value, 'UTF-8');?>
&amp;<?php echo $_smarty_tpl->tpl_vars['bl_locations']->value['caption'];?>
=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['field2']->value, 'UTF-8');
}
}?>"><?php echo $_smarty_tpl->tpl_vars['t']->value['el'];?>
</a></li>
				<?php if (((isset($_smarty_tpl->tpl_vars['__foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_list']->value['index'] : null)+1)%$_smarty_tpl->tpl_vars['no_on_col']->value == 0 && (isset($_smarty_tpl->tpl_vars['__foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_list']->value['index'] : null) && (isset($_smarty_tpl->tpl_vars['__foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_list']->value['index'] : null) != $_smarty_tpl->tpl_vars['v']->value['no_elements']-1) {?>
			</ul>
			<ul>
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
			</ul>
			<?php }?>
		</div> 
		
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

		
	<?php echo '<script'; ?>
>

	$(document).ready(function() {
	$(".tradio").click(function(event){

		var loc_id = jQuery(this).attr("id").substr(2);
		$('.bltc').hide();
		$("#btc"+loc_id).show();

		});
	});

	<?php echo '</script'; ?>
>
	

		
	<?php }?>                                                                                                                                                                                                                                                            
	
	<div class="clearfix"></div>
	</div> 	
		
</div>
</section>
<?php }
}
?>