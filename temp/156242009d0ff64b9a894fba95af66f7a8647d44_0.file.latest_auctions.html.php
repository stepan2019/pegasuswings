<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/latest_auctions/latest_auctions.html" */ ?>
<?php
/*%%SmartyHeaderCode:13314319055d8956e79457f9_96458354%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '156242009d0ff64b9a894fba95af66f7a8647d44' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/latest_auctions/latest_auctions.html',
      1 => 1514844414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13314319055d8956e79457f9_96458354',
  'variables' => 
  array (
    'no_auctions' => 0,
    'seo_settings' => 0,
    'auctions' => 0,
    'live_site' => 0,
    'details_url' => 0,
    'lng' => 0,
    'modules_array' => 0,
    'ac_settings' => 0,
    'data_set' => 0,
    'appearance' => 0,
    'sef_links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e795bfd6_29997738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e795bfd6_29997738')) {
function content_5d8956e795bfd6_29997738 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_mb_truncate')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.mb_truncate.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '13314319055d8956e79457f9_96458354';
?>
<!-- LATEST AUCTIONS -->
<section id="latest_auctions">
    <div class="tab_content fbr_inv" id="la_tab_content">

			<div>

    		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['no_auctions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

			<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'details_url', null); ob_start();
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'],$_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'],'',$_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['category_id'],$_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['slug']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

			<div class="box-container">
			<div class="fbox box clearfix">

				<a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"><img id="fpic<?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['medImage'];?>
" alt="<?php if ($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['image_id']) {
echo substr(strip_tags($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']),0,100);
}?>" /></a>

				<?php if ($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['sold']) {?><div class="ribbon ribbon_sold"><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['sold'];?>
</span></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['rented']) {?><div class="ribbon ribbon_rented"><span><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['rented'];?>
</span></div><?php }?>

				<?php if (in_array("acategories",$_smarty_tpl->tpl_vars['modules_array']->value) && in_array($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['category_id'],$_smarty_tpl->tpl_vars['ac_settings']->value['array_categories_list'])) {?>
				<div id="ac<?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" class="ac_over"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['click_to_view'];?>
</div>
				<?php }?>

				<div class="ltitle"><?php if ($_smarty_tpl->tpl_vars['data_set']->value == "cars" && ((isset($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['loop']['index']]['make']) && $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['make']) || (isset($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['loop']['index']]['model']) && $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['model']))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['make'];?>
 <?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['model'];?>
</a><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['appearance']->value['charset'] == "UTF-8") {
echo smarty_modifier_mb_truncate($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'],30,"...","UTF-8");
} else {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'],30,"...",false);
}?></a><?php }?></div>

				<div class="lloc"><?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['location_str'];?>
</div>

				<div class="lfloat mt5"><?php echo $_smarty_tpl->tpl_vars['lng']->value['useraccount']['starts_at'];?>
:&nbsp;&nbsp;</div><div class="lprice"><?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['auction']['starting_price'];?>
</div>
				
				<a href="javascript:;" class="addtofav" id="fav<?php echo $_smarty_tpl->tpl_vars['auctions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
"><div class="starfav make-fav"></div></a>
			</div>
			</div>
		<?php endfor; endif; ?>
		<div class="clearfix"></div>
		</div>

    </div>
	<?php if ($_smarty_tpl->tpl_vars['no_auctions']->value) {?>
		<div><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->tpl_vars['sef_links']->value['auctions'];
} else { ?>auctions.php<?php }?>"><h2 class="view_more"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['view_all_auctions'];?>
</h2></a></div>
		<div class="clearfix"></div>
	<?php }?>
    <hr/>
</section>


<?php echo '<script'; ?>
>
//<![CDATA[
jQuery(document).ready(function() {

	if($('#tab_latest_auctions').is(':checked')) {
		$('#la_tab_content').imagesLoaded( function() {
			startMasonryLAuctions();
			});
	}
	
});

$('input:radio[name="tabs"]').change(function() { if ($(this).attr("id") == 'tab_latest_auctions') startMasonryLAuctions(); });


function startMasonryLAuctions() {

$('#la_tab_content').masonry({
  // options
  itemSelector: '.box-container'
});

}

//]]>
<?php echo '</script'; ?>
>
<?php }
}
?>