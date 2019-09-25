<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/highlited_ads/highlited_ads.html" */ ?>
<?php
/*%%SmartyHeaderCode:14398137015d8956e798ef55_69944637%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8f83799bad3c365d59d280c6ac28ada955cfaa' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/highlited_ads/highlited_ads.html',
      1 => 1560275760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14398137015d8956e798ef55_69944637',
  'variables' => 
  array (
    'live_site' => 0,
    'crt_lang' => 0,
    'title_field' => 0,
    'highlited_ads' => 0,
    'no_highlited' => 0,
    'seo_settings' => 0,
    'highlited' => 0,
    'details_url' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e7999787_42169163',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e7999787_42169163')) {
function content_5d8956e7999787_42169163 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14398137015d8956e798ef55_69944637';
?>
<!-- HIGHLITED ADS -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jR3DCarousel.js"><?php echo '</script'; ?>
>
<div id="highlited">
	<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'title_field', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['crt_lang']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<div class="heading heading_large heading1"><?php echo $_smarty_tpl->tpl_vars['highlited_ads']->value[$_smarty_tpl->tpl_vars['title_field']->value];?>
</div>
	
	<div class="border_1 margin_bottom">
         <div class="vert-box"> 
		 <div class="heading_large_under heading1-under"></div>
		 <div class="highlited">
			<?php if ($_smarty_tpl->tpl_vars['no_highlited']->value) {?>

			<div class="jR3DCarouselGallery">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['no_highlited']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['highlited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'],$_smarty_tpl->tpl_vars['highlited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['highlited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			
			<div class="jR3DCarouselCustomSlide"><a href="<?php echo $_smarty_tpl->tpl_vars['details_url']->value;?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/listings/<?php if ($_smarty_tpl->tpl_vars['highlited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['picture_folder']) {?>/<?php echo $_smarty_tpl->tpl_vars['highlited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['picture_folder'];
}?>/bigThmb/<?php echo $_smarty_tpl->tpl_vars['highlited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['picture'];?>
" /></a><div class="price-pop center mt10" style="width: 100%; font-size: 1.2em;"><div class="small-dark-gray"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['price'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['highlited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['price_curr'];?>
</div></div></div>
		
			<?php endfor; endif; ?>

			</div>

			<?php }?>
		</div>
	</div>
</div>
	</div>
<!-- END HIGHLITED ADS -->

<?php echo '<script'; ?>
 type="text/javascript">

$('.jR3DCarouselGallery').jR3DCarousel({

	// width of the carousel
	width : 400,
	// height of the carousel
	height: 300,
	// an array of images
	slides : [], 
	// contain | fill | cover
	slideLayout : 'fill',
	// perspective | default dynamic perpendicular
	perspective: 0,      
	// slide | slide3D | scroll | scroll3D | fade
	animation: 'slide3D',
	// ease | ease-in | ease-out | ease-in-out | linear | bezier
	animationCurve: 'ease',
	// animation duration
	animationDuration: 700,
	// animation interval
	animationInterval: 2000,
	// enable autoplay
	autoplay: true,
	// display controls
	controls: true,
	// circles | squares
	navigation: 'circles',  
	// callback
	onSlideShow: function(){},
	slideClass: 'jR3DCarouselCustomSlide',
	});

<?php echo '</script'; ?>
>
<?php }
}
?>