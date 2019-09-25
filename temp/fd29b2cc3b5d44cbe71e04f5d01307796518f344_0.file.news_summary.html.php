<?php /* Smarty version 3.1.24, created on 2019-09-24 02:36:07
         compiled from "/home/pegasuswings/public_html/templates/flux/modules/news/news_summary.html" */ ?>
<?php
/*%%SmartyHeaderCode:3749370535d8956e7a72421_52504430%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd29b2cc3b5d44cbe71e04f5d01307796518f344' => 
    array (
      0 => '/home/pegasuswings/public_html/templates/flux/modules/news/news_summary.html',
      1 => 1517167354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3749370535d8956e7a72421_52504430',
  'variables' => 
  array (
    'seo_settings' => 0,
    'crt_lang' => 0,
    'field_name' => 0,
    'news_settings' => 0,
    'news' => 0,
    'live_site' => 0,
    'news_url' => 0,
    'v' => 0,
    'lng' => 0,
    'lng_news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d8956e7a7c992_77900291',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d8956e7a7c992_77900291')) {
function content_5d8956e7a7c992_77900291 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3749370535d8956e7a72421_52504430';
?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('news_url', 'news_url', null); ob_start();
if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {?>/news<?php } else { ?>/modules/news/news.php<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<div class="left_tabs">
	<?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'field_name', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['crt_lang']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<h2><span><?php echo $_smarty_tpl->tpl_vars['news_settings']->value[$_smarty_tpl->tpl_vars['field_name']->value];?>
</span></h2>
		<div class="tab_content clearfix" id="news">
		
			<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<div class="article">
			
			<h3><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;
echo $_smarty_tpl->tpl_vars['news_url']->value;?>
" class="news_title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>

			<p><?php if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;
echo $_smarty_tpl->tpl_vars['news_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/modules/news/images/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" class="lfloat mr10 mb10" /></a><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['v']->value['summary'];?>
</p>
	
			<div class="small lfloat"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['added_on'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['date_nice'];?>
</div>
			<div class="more rfloat"><a href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;
echo $_smarty_tpl->tpl_vars['news_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng_news']->value['read_more'];?>
</a></div>
			
			</div>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

		</div> 

	</div> 
<?php }
}
?>