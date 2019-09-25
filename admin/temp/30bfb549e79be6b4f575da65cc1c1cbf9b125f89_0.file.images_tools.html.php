<?php /* Smarty version 3.1.24, created on 2019-09-10 16:12:42
         compiled from "/home/pegasuswings/public_html/admin/templates/default/images_tools.html" */ ?>
<?php
/*%%SmartyHeaderCode:20497641995d77cb7a3a0343_25085546%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30bfb549e79be6b4f575da65cc1c1cbf9b125f89' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/images_tools.html',
      1 => 1487264182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20497641995d77cb7a3a0343_25085546',
  'variables' => 
  array (
    'lng' => 0,
    'self' => 0,
    'error' => 0,
    'info' => 0,
    'ads_settings' => 0,
    'mobile_settings' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d77cb7a3e3a17_26681529',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d77cb7a3e3a17_26681529')) {
function content_5d77cb7a3e3a17_26681529 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '20497641995d77cb7a3a0343_25085546';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['tools'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['images_tools'];?>
</div>

<div class="p30">
<form name="db" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;?>
">
<div class="form_container" style="padding-top: 0 !important;">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?> <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['info']->value != '') {?> <div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>
<div class="wait"></div>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['imgtools']['regenerate_thumbnails']," ","&nbsp;");?>
</strong></div></div>

<div class="p30">
<?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['regen_details'];?>
:<br/>
&nbsp;&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lng']->value['tools']['full_size_images'];?>
</b><br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['for_small_thumbnails'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_width'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
 , <b><?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['thmb_height'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['for_med_thumbnails'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['med_thmb_width'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
 , <b><?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['med_thmb_height'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['for_big_thumbnails'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['big_thmb_width'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
 , <b><?php echo $_smarty_tpl->tpl_vars['ads_settings']->value['big_thmb_height'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
<br/>
<br/>
&nbsp;&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lng']->value['tools']['mobile_images'];?>
</b><br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['for_small_thumbnails'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_thmb_width'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
 , <b><?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_thmb_height'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['for_big_thumbnails'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_big_thmb_width'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['width'];?>
 , <b><?php echo $_smarty_tpl->tpl_vars['mobile_settings']->value['mobile_big_thmb_height'];?>
px</b> <?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['height'];?>
<br/>

</div>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark']) {?>
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['settings']['watermark'];?>
</div>
	<div class="right_form"><input type="checkbox" name="watermark" id="watermark" checked="checked" /></div>
</div>
<?php }?>

<div class=" information"><?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['info']['regenerate_thumbnails'];?>
</div>

<div class="form_footer2">
	<div class="buttons rfloat">
		<span class="positive"><a href="javascript:;" <?php if (!$_smarty_tpl->tpl_vars['demo']->value) {?>id="Regenerate"<?php } else { ?> onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['regenerate_now'];?>
</a></span>
	</div>
	<div class="clearfix"></div>
</div>


<div class="form_subtitle_bg mt20"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['imgtools']['remove_unused']," ","&nbsp;");?>
</strong></div></div>

<div class="p30"><?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['info']['remove_unused'];?>
</div>

<div class="form_footer center">
	<div class="buttons" <?php if ($_smarty_tpl->tpl_vars['demo']->value) {?>onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');return false;"<?php }?>>
		<span class="positive"><input type="submit" name="Remove" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['imgtools']['remove'];?>
" /></span>
	</div>
</div>

</div> 
</form>
</div> 


<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function() {

	$("#Regenerate").click(function(){

		$("body").addClass("loading");
		var watermark=0;
		<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['watermark']) {?>
		if($("#watermark").attr("checked")) watermark=1;
		<?php }?>
		genThumbs('', watermark);

	});

	function genThumbs(im, watermark) {

		d="watermark="+watermark;
		if(im) d+="&image="+im;
		$.ajax({method: "get",
		url: "include/resize_image.php",
		data: d,
		beforeSend: function() {  },
		complete: function() { },
		success: function(returnedData)
		{
			//alert("success"+returnedData);
			if(returnedData>0) { genThumbs(returnedData, watermark); }
			else $("body").removeClass("loading"); 
		}
		});
	}

});


<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>