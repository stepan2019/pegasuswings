<?php /* Smarty version 3.1.24, created on 2019-06-11 18:03:19
         compiled from "/home/pegasuswings/public_html/admin/templates/default/new_listing.html" */ ?>
<?php
/*%%SmartyHeaderCode:14345563985cffece73feb58_42837399%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f792ff69173af209ca6b138ca988dd2d3ecc6106' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/new_listing.html',
      1 => 1552256966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14345563985cffece73feb58_42837399',
  'variables' => 
  array (
    'step' => 0,
    'live_site' => 0,
    'lng' => 0,
    'short_categories' => 0,
    'v' => 0,
    'plans_array' => 0,
    'no_users' => 0,
    'users_array' => 0,
    'tmp' => 0,
    'settings' => 0,
    'ads_settings' => 0,
    'languages' => 0,
    'title_field' => 0,
    'desc_field' => 0,
    'fields' => 0,
    'template_path' => 0,
    'no_photos' => 0,
    'crt_photos' => 0,
    'plan_name' => 0,
    'featured' => 0,
    'featured_plans' => 0,
    'options' => 0,
    'highlited' => 0,
    'priority' => 0,
    'priorities' => 0,
    'urgent' => 0,
    'video' => 0,
    'url' => 0,
    'gmaps' => 0,
    'seo_settings' => 0,
    'id' => 0,
    'fields_array' => 0,
    'gmap_on' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5cffece74a3488_67433898',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5cffece74a3488_67433898')) {
function content_5cffece74a3488_67433898 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_mb_wordwrap')) require_once '/home/pegasuswings/public_html/libs/plugins/shared.mb_wordwrap.php';
if (!is_callable('smarty_modifier_regex_replace')) require_once '/home/pegasuswings/public_html/libs/plugins/modifier.regex_replace.php';

$_smarty_tpl->properties['nocache_hash'] = '14345563985cffece73feb58_42837399';
if ($_smarty_tpl->tpl_vars['step']->value <= 1) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/fancybox.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="wait"></div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/fileuploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/jquery.number.min.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/intlTelInput/intlTelInput.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/jQuery/plugins/intlTelInput/intlTelInput.min.js"><?php echo '</script'; ?>
>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['listings'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['newad'];?>
</div>

<div class="p30">
<form name="newad" id="newad" method="post" action="new_listing.php?step=3" enctype="multipart/form-data">

<div id="newad_form">
<div class="form_container">

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
		<select id="category" name="category">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['short_categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_cat'] = new Smarty_Variable(array('iteration' => 0, 'index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_cat']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_cat']->value['index']++;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['parent'] == 1) {?>
				<optgroup label="<?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
				<?php } else { ?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['str'];
echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
				<?php if (((isset($_smarty_tpl->tpl_vars['__foreach_cat']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_cat']->value['index'] : null) != count($_smarty_tpl->tpl_vars['short_categories']->value)-1 && $_smarty_tpl->tpl_vars['v']->value['parent_id'] != $_smarty_tpl->tpl_vars['short_categories']->value[(isset($_smarty_tpl->tpl_vars['__foreach_cat']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_cat']->value['iteration'] : null)]['parent_id']) || ((isset($_smarty_tpl->tpl_vars['__foreach_cat']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_cat']->value['index'] : null) == count($_smarty_tpl->tpl_vars['short_categories']->value) && $_smarty_tpl->tpl_vars['v']->value['parent_id'] != 0)) {?>
				</optgroup>
				<?php }?>
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
		</select>
	</div>
</div>


<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['package'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
	<select id="package" name="package">
		<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['package'];?>
</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['plans_array']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['user'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
	<?php if ($_smarty_tpl->tpl_vars['no_users']->value <= 100) {?>

	<select id="user_id" name="user_id">
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['user'];?>
</option>
	<?php
$_from = $_smarty_tpl->tpl_vars['users_array']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['user_id']) && $_smarty_tpl->tpl_vars['tmp']->value['user_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</select>

	<?php } else { ?>

	<?php echo $_smarty_tpl->getSubTemplate ("data/ui.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<input type="hidden" name="user_id" id="user_id" />

	<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_username']) {?>
	<input type="text" name="username" id="username" onblur="userChecker();" />
	<?php } else { ?>
	<input type="text" name="email" id="email" onblur="userChecker();" />
	<?php }?>

	&nbsp;<span class="ok_msg" style="display: none;"></span>
	<span class="nok_msg" style="display: none;"></span>

	<?php }?>

	</div>
</div>

<div class="form_footer2" id="next_div">

	<div class="buttons rfloat">
		<span class="positive"><a href="javascript:;" id="next"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['next'];?>
</a></span>
	</div>
	<div class="clearfix"></div>

</div>


<div id="newad_details"></div>
</div> 
</div> 
</form>

<div id="listing"></div>
</div> 

<?php echo '<script'; ?>
 type="text/javascript">


function userChecker() {

	$.post("<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/user_checker.php", $( "#newad" ).serialize() , function(data){ 

		data_split = data.split("|");
		var error = data_split[0];
		var info = data_split[1];
		var user_id = data_split[2];

		if(info) {
			$(".ok_msg").html(info);
			$(".ok_msg").show();
			$(".nok_msg").hide();
			$("#user_id").val(user_id);

		}
		else if(error) {
			$(".nok_msg").html(error);
			$(".nok_msg").show();
			$(".ok_msg").hide();
		}

	});

}


<?php if ($_smarty_tpl->tpl_vars['no_users']->value > 10) {?>

        $(function() {
                $( "#username" ).autocomplete({
                        source: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=user_ac",
                        minLength: 1
                });

                $( "#email" ).autocomplete({
                        source: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/get_info.php?type=user_ac",
                        minLength: 1
                });
        });

<?php }?>



$(document).ready(function() {


var options = { 
       // target:        '#output1',   // target element(s) to be updated with server response 
	beforeSerialize: beforeSerialize,
        beforeSubmit:  beforeSubmit,  // pre-submit callback 
        success:       successResponse  // post-submit callback 
 
        // other available options: 
        //url:       url         // override for form's 'action' attribute 
        //type:      type        // 'get' or 'post', override for form's 'method' attribute 
        //dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
        //clearForm: true        // clear all form fields after successful submit 
        //resetForm: true        // reset the form after successful submit 
 
        // $.ajax options can be used here too, for example: 
        //timeout:   3000 
    }; 

function beforeSerialize(jqForm, options) {

	$("body").addClass("loading"); 

	<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['description_editor']) {?>

	// capturing nicEditor content
	for(var i=0;i<myNicEditor.nicInstances.length;i++){myNicEditor.nicInstances[i].saveContent();}

	
	<?php }?>
	

	if (typeof data_htmlarea !== 'undefined')
	for(var i=0;i<data_htmlarea.nicInstances.length;i++){ data_htmlarea.nicInstances[i].saveContent(); }

	// international phones errors
	var extra_phone_error = recheckIntlPhone();
	if(extra_phone_error.length>0) {

		// clean all fields possible err class
		$(".err").removeClass("err");
		// remove all err_labels
		$(".err_label").remove();
			
		for (var i = 0, len = extra_phone_error.length; i < len; i++) {

			$("#"+extra_phone_error[i]).addClass("err");
			// add as child to first right_form
			$("#"+extra_phone_error[i]).closest( ".right_form").prepend('<label class="err_label"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['errors']['invalid_phone'];?>
</label>');
			
		}

		$("body").removeClass("loading");

		// move the page to the first err_label element
		$('html,body').animate({scrollTop:$(".err:first").offset().top-60}, 'slow');

		return false;
			
	} // end international phone error

	// return false to cancel submit

}

// pre-submit callback 
function beforeSubmit(formData, jqForm, options) { 

    // formData is an array; here we use $.param to convert it to a string to display it 
    // but the form plugin does this for you automatically when it submits the data 
    var queryString = $.param(formData); 
 
    // jqForm is a jQuery object encapsulating the form element.  To access the 
    // DOM element for the form do this: 
    // var formElement = jqForm[0]; 
 
    //alert('About to submit: \n\n' + queryString); 
 
    // here we could return false to prevent the form from being submitted; 
    // returning anything other than false will allow the form submit to continue 
    return true; 
} 

// post-submit callback 
function successResponse(responseText, statusText, xhr, $form)  { 

    // for normal html responses, the first argument to the success callback 
    // is the XMLHttpRequest object's responseText property 
 
    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'xml' then the first argument to the success callback 
    // is the XMLHttpRequest object's responseXML property 
 
    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'json' then the first argument to the success callback 
    // is the json data object returned by the server 
 
    //alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
    //    '\n\nThe output div should have already been updated with the responseText.'); 

//alert(responseText);
			var ret = JSON.parse(responseText);

			$("body").removeClass("loading"); 

			if(ret.response==1) {

				// show ad details
				$.ajax({
					type		: "GET",
					cache		: false,
					url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/new_listing.php?step=4&ad_id="+ret.ad_id,
					data		: $(this).serializeArray(),
					success: function(data) {

						$("#newad_form").hide();
						$("#listing").html(data);
			
					}// end data
				}); // end ajax

				return;
			}

			// response = 0 -> there are errors in submit ad process 
			var no_err = ret.error.length;
			var err_field, err_string;

			// clean all fields possible err class
			$(".err").removeClass("err");
			// remove all err_labels
			$(".err_label").remove();

			// mark each field with error 
			for (var idx=0;idx<no_err;idx++) { 

				err_field = ret.error[idx].field;
				err_string = ret.error[idx].error;
				$("#"+err_field).addClass("err");

				// nicEditor fix
				if(err_field.match("description[a-z0-9_]*")) $("#"+err_field+"_elm").addClass("err");
				$("#"+err_field).before('<label class="err_label">'+err_string+'</label>');

			}
			
			// move the page to the first err_label element
			$('html,body').animate({scrollTop:$(".err_label:first").offset().top}, 'slow');

} 

$(document).on("click", "#next", function(){ 

	loadAdDetailsForm();

}); // end #next click


$(document).on("change", "#category", function(){ 

	loadAdDetailsForm();

}); // end #next click

$(document).on("change", "#package", function(){ 

	loadAdDetailsForm();

}); // end #next click

//initialize the AJAX form for submit ad
 $('#newad').ajaxForm(options);

}); // end document ready

function onVideo() {

	if($('#video').is(':checked')) $("#video_div").slideDown(); 
	else $("#video_div").slideUp();
}
function onUrl() {

	if($('#url').is(':checked')) $("#url_div").slideDown(); 
	else $("#url_div").slideUp();
}

function loadAdDetailsForm() {

	// clean all fields possible err class
	$(".err").removeClass("err");

	var err = 0;
	if(!$("#category").val()) { $("#category").addClass("err"); err = 1; }
	if(!$("#package").val()) { $("#package").addClass("err"); err = 1; }
	if(!$("#user_id").val()) $("#user_id").addClass("err");
	if(!$("#username").val()) $("#username").addClass("err");
	if(!$("#email").val()) $("#email").addClass("err");
	if(!$("#user_id").val() && !$("#username").val() && !$("#email").val()) err = 1;

	if(!err) {

	// get custom fields, images and extra options boxes
	$.ajax({
		type		: "GET",
		cache		: false,
		url		: "<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/new_listing.php?step=2&category="+$("#category").val()+"&plan="+$("#package").val(),
		data		: $(this).serializeArray(),
		success: function(data) {

			$("#newad_details").html(data);
			createUploader();
			$("#next_div").hide();
			
		}// end data
	}); // end ajax
	} // end if not err

}


<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?> 



<?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['ad_description']," ","&nbsp;");?>
</strong></div></div>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1 && $_smarty_tpl->tpl_vars['ads_settings']->value['translate_title_description'] == 1) {?>

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

    <?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'title_field', null); ob_start(); ?>title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('some_content', 'desc_field', null); ob_start(); ?>description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	
<!-- TITLE -->
<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['title'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
	<input type="text" name="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="70" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['title_field']->value])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['title_field']->value];
}?>"
	 onKeyDown="CountTitleLeft(document.newad.title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,150);" onKeyUp="CountTitleLeft(document.newad.title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,150);" 
	onPaste="CountTitleLeft(document.newad.title_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 150);" />
	</div>
</div>

<!-- DESCRIPTION -->

<div class="clearfix">
	<div class="left_form"><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
if ($_smarty_tpl->tpl_vars['v']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/languages/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php } else { ?><span class="small">( <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 )</span><?php }?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['lng']->value['listings']['description'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><textarea name="description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" cols="75" rows="10" id="description_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['desc_field']->value])) {
echo $_smarty_tpl->tpl_vars['tmp']->value[$_smarty_tpl->tpl_vars['desc_field']->value];
}?></textarea>
	</div>
</div>

<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php } else { ?>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['title'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
	<input type="text" name="title" id="title" size="70" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['title'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['title'];
}?>"
	 onKeyDown="CountTitleLeft(document.newad.title,150);" onKeyUp="CountTitleLeft(document.newad.title,150);" 
	onPaste="CountTitleLeft(document.newad.title, 150);" />
	</div>
</div>

<!-- DESCRIPTION -->

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['description'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><textarea name="description" cols="75" rows="10" id="description" ><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['description'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['description'];
}?></textarea>
	</div>
</div>

<?php }?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['ad_information']," ","&nbsp;");?>
</strong></div></div>

<?php echo $_smarty_tpl->getSubTemplate ("data/description_editor.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("data/form_includes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields_array'=>$_smarty_tpl->tpl_vars['fields']->value), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("custom_fields_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields_array'=>$_smarty_tpl->tpl_vars['fields']->value,'type'=>"listing"), 0);
?>





<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['add_meta_with_listings']) {?>
<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['meta_info']," ","&nbsp;");?>
</strong></div></div>

<!-- META_KEYWORDS -->
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['meta_keywords'];?>
</div>
	<div class="right_form"><textarea name="meta_keywords" cols="50" rows="3"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_keywords'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_keywords'];
}?></textarea></div>
</div>

<!-- META_DESCRIPTION -->
<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['meta_description'];?>
</div>
	<div class="right_form"><textarea name="meta_description" cols="50" rows="3"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_description'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_description'];
}?></textarea></div>
</div>

<?php }?>

<!-- PHOTOS -->

<link href="<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
css/style-uploader.css" rel="stylesheet" type="text/css"/>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['enter_photos']," ","&nbsp;");?>
</strong></div></div>

	<div id="file-uploader">
		<noscript>
		<p>Please enable JavaScript to use file uploader.</p>
		</noscript>
	</div>
	
	
	<?php echo '<script'; ?>
>
	function createUploader(){
		var uploader = new qq.FileUploader({
			element: document.getElementById('file-uploader'),
			action: '../include/upload.php',
			max_photos: '<?php echo $_smarty_tpl->tpl_vars['no_photos']->value;?>
',
			crt_photos: '<?php if (isset($_smarty_tpl->tpl_vars['crt_photos']->value)) {
echo $_smarty_tpl->tpl_vars['crt_photos']->value;
}?>',
			order_up: '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['order_up']);?>
',
			order_down: '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['order_down']);?>
',
			delete_file: '<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['general']['delete']);?>
',
			template_path: '<?php echo $_smarty_tpl->tpl_vars['template_path']->value;?>
',
			files_uploaded: "<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['files_uploaded']);?>
",
			allowed: "<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['allowed']);?>
",
			limit_reached: "<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['limit_reached']);?>
",
			click_to_upload: "<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['listings']['click_to_upload']);?>
",
			
			messages: { 
			failed_message: "<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['login_history']['failed']);?>
",
			typeError: "<?php echo addslashes($_smarty_tpl->tpl_vars['lng']->value['images']['errors']['file_type_not_accepted']);?>
" 
			},
			params: {
        			max_photos: '<?php echo $_smarty_tpl->tpl_vars['no_photos']->value;?>
'
    			},
			allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
			debug: false
 	});
        }
	<?php echo '</script'; ?>
>
	

	<div id="maincol"></div>

	<div class="clearfix"></div>

<!-- EXTRA OPTIONS -->
<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['extra_options']," ","&nbsp;");?>
</strong></div></div>

<div class="options">

<div class="option clearfix">
	<div class="option_left"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['package'];?>
</div>
	<div class="option_right"><?php echo $_smarty_tpl->tpl_vars['plan_name']->value;?>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured']) {?>
<div class="option clearfix">
	<div class="option_left"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['featured'];?>
</div>
	<div class="option_right">
		<input type="radio" class="noborder" name="featured" value="" <?php if (!isset($_smarty_tpl->tpl_vars['featured']->value) || !$_smarty_tpl->tpl_vars['featured']->value) {?>checked="checked"<?php }?> />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['none'];?>
 <br>
		<?php
$_from = $_smarty_tpl->tpl_vars['featured_plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<input type="radio" class="noborder" name="featured" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['featured']->value == $_smarty_tpl->tpl_vars['v']->value['id'] || (isset($_smarty_tpl->tpl_vars['options']->value['featured']) && $_smarty_tpl->tpl_vars['options']->value['featured'] == $_smarty_tpl->tpl_vars['v']->value['id'])) {?>checked="checked"<?php }?>/>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['no_days'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['days'];?>
<br>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited']) {?>
<div class="option clearfix">
	<div class="option_left"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['highlited'];?>
</div>
	<div class="option_right"><input type="checkbox" class="noborder" name="highlited" id="highlited" <?php if ($_smarty_tpl->tpl_vars['highlited']->value) {?> checked<?php }?>/></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities']) {?>
<div class="option clearfix">
	<div class="option_left"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['priority'];?>
</div>
	<div class="option_right">
		<input type="radio" class="noborder" name="priority" value="" <?php if (!isset($_smarty_tpl->tpl_vars['priority']->value) || !$_smarty_tpl->tpl_vars['priority']->value) {?>checked="checked"<?php }?> />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['none'];?>
 <br>
		<?php
$_from = $_smarty_tpl->tpl_vars['priorities']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<input type="radio" class="noborder" name="priority" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
" <?php if ($_smarty_tpl->tpl_vars['priority']->value == $_smarty_tpl->tpl_vars['v']->value['order_no'] || (isset($_smarty_tpl->tpl_vars['options']->value['priority']) && $_smarty_tpl->tpl_vars['options']->value['priority'] == $_smarty_tpl->tpl_vars['v']->value['order_no'])) {?>checked="checked"<?php }?>/>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<br>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent']) {?>
<div class="option clearfix">
	<div class="option_left"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['urgent'];?>
</div>
	<div class="option_right"><input type="checkbox" class="noborder" name="urgent" id="urgent" <?php if ($_smarty_tpl->tpl_vars['urgent']->value) {?> checked<?php }?> /></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_video']) {?>
<div class="option clearfix">
	<div class="option_left"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['video'];?>
</div>
	<div class="option_right">
		<input type="checkbox" class="noborder" name="video" id="video" <?php if ((isset($_smarty_tpl->tpl_vars['video']->value) && $_smarty_tpl->tpl_vars['video']->value) || (isset($_smarty_tpl->tpl_vars['options']->value['video']) && $_smarty_tpl->tpl_vars['options']->value['video']['value'])) {?>checked="checked"<?php }?> onclick="onVideo();" />

		<div id="video_div" style="display: none;">
		<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['video_code'];?>
</label>
		<textarea name="video_code" id="video_code" cols="30" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['video_code'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['video_code'];
}?></textarea>
		</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_url']) {?>
<div class="option clearfix">
	<div class="option_left"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['url'];?>
</div>
	<div class="option_right">
		<input type="checkbox" class="noborder" name="url" id="url" <?php if ((isset($_smarty_tpl->tpl_vars['url']->value) && $_smarty_tpl->tpl_vars['url']->value) || (isset($_smarty_tpl->tpl_vars['options']->value['url']) && $_smarty_tpl->tpl_vars['options']->value['url']['value'])) {?>checked="checked"<?php }?> onclick="onUrl();" />

		<div id="url_div" style="display: none;">
		<label><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['site_url'];?>
</label>
		<input name="site_url" id="site_url" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['site_url'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['site_url'];
}?>"/>
		</div>
	</div>
</div>
<?php }?>

</div> 


	<div class="form_footer">
	<div class="buttons rfloat">
		<span class="positive"><input type="submit" name="Submit" id="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['submit'];?>
" /></span>
	</div>
	<div class="clearfix"></div>
	</div>


<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {

var gmaps_on = <?php if ($_smarty_tpl->tpl_vars['gmaps']->value) {?>1<?php } else { ?>0<?php }?>;
// initialize google maps
if (gmaps_on) load_gmaps();

});
<?php echo '</script'; ?>
>



<?php }?> 


<?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?>

<div class="form_container" style="padding-top: 0 !important;">

<div class="form_footer2">

	<div class="buttons rfloat">
		<span class="positive"><a href="manage_listings.php"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['manage_listings'];?>
</a></span>

		<span class="positive"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['tmp']->value['title']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['ad_details'];?>
</a></span>

	</div>
	<div class="clearfix"></div>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[

<?php $_smarty_tpl->tpl_vars["gmap_on"] = new Smarty_Variable("0", null, 0);?>

<?php
$_from = $_smarty_tpl->tpl_vars['fields_array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 'google_maps') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("data/gmap-ro.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php $_smarty_tpl->tpl_vars["gmap_on"] = new Smarty_Variable("1", null, 0);?>
	<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

<?php if ($_smarty_tpl->tpl_vars['gmap_on']->value) {?>

$(document).ready(function() {
init_gmap();
});

<?php }?>
//]]>
<?php echo '</script'; ?>
>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['category'];?>
:</div>	
	<div class="right_form"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['category'];?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['title'];?>
:</div>	
	<div class="right_form"><?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['tmp']->value['title'],70," ",true);?>
</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['description'];?>
:</div>	
	<div class="right_form"><?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['tmp']->value['description_formatted'],70," ",true);?>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("custom_fields_form_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields_array'=>$_smarty_tpl->tpl_vars['fields_array']->value,'values_array'=>$_smarty_tpl->tpl_vars['tmp']->value), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['tmp']->value['enable_video'] && isset($_smarty_tpl->tpl_vars['tmp']->value['video']) && $_smarty_tpl->tpl_vars['tmp']->value['video']) {?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['video']," ","&nbsp;");?>
</strong></div></div>

<div class="center"><?php echo smarty_modifier_regex_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['tmp']->value['video'],'/ width="[0-9]+"/',' width="500"'),'/ height="[0-9]+"/',' height="388"');?>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tmp']->value['enable_url'] && isset($_smarty_tpl->tpl_vars['tmp']->value['site_url']) && $_smarty_tpl->tpl_vars['tmp']->value['site_url']) {?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['site_url']," ","&nbsp;");?>
</strong></div></div>

<div class="center"><a href="<?php echo $_smarty_tpl->tpl_vars['tmp']->value['site_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['site_url'];?>
</a></div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['add_meta_with_listings']) {?>

	<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['meta_info']," ","&nbsp;");?>
</strong></div></div>

	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['meta_keywords'];?>
:</div>	
		<div class="right_form"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_keywords']) && $_smarty_tpl->tpl_vars['tmp']->value['meta_keywords']) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_keywords'];
} else { ?>-<?php }?></div>
	</div>

	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['meta_description'];?>
:</div>	
		<div class="right_form"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['meta_description']) && $_smarty_tpl->tpl_vars['tmp']->value['meta_description']) {
echo $_smarty_tpl->tpl_vars['tmp']->value['meta_description'];
} else { ?>-<?php }?></div>
	</div>

<?php }?>

<div class="form_footer2">

	<div class="buttons rfloat">
		<span class="positive"><a href="<?php if ($_smarty_tpl->tpl_vars['seo_settings']->value['enable_mod_rewrite']) {
echo $_smarty_tpl->smarty->registered_objects['seo'][0]->makeDetailsLink($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['tmp']->value['title']);
} else {
echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/details.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['view'];?>
</a></span>

		<span class="positive"><a id="editad" href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/edit_listing.php?id=<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['edit_listing'];?>
</a></span>

	</div>
	<div class="clearfix"></div>

</div>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured'] || $_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited'] || $_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities'] || $_smarty_tpl->tpl_vars['ads_settings']->value['enable_video'] || $_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent'] || $_smarty_tpl->tpl_vars['ads_settings']->value['enable_url']) {?>

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['extra_options']," ","&nbsp;");?>
</strong></div></div>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_featured']) {?>
	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['featured'];?>
:</div>	
		<div class="right_form"><?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value['featured']) && $_smarty_tpl->tpl_vars['tmp']->value['featured']) || $_smarty_tpl->tpl_vars['options']->value['featured']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_highlited']) {?>
	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['highlited'];?>
:</div>	
		<div class="right_form"><?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value['highlited']) && $_smarty_tpl->tpl_vars['tmp']->value['highlited']) || $_smarty_tpl->tpl_vars['options']->value['highlited']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_priorities']) {?>
	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['priority'];?>
:</div>	
		<div class="right_form"><?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['priority']) && $_smarty_tpl->tpl_vars['tmp']->value['priority'] > 0) {
echo $_smarty_tpl->tpl_vars['tmp']->value['priority_name'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_urgent']) {?>
	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['urgent'];?>
:</div>	
		<div class="right_form"><?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value['urgent']) && $_smarty_tpl->tpl_vars['tmp']->value['urgent']) || $_smarty_tpl->tpl_vars['options']->value['urgent']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_video']) {?>
	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['video'];?>
:</div>	
		<div class="right_form"><?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value['video']) && $_smarty_tpl->tpl_vars['tmp']->value['video']) || $_smarty_tpl->tpl_vars['options']->value['video']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ads_settings']->value['enable_url']) {?>
	<div class="clearfix">
		<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['packages']['url'];?>
:</div>	
		<div class="right_form"><?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value['url']) && $_smarty_tpl->tpl_vars['tmp']->value['url']) || $_smarty_tpl->tpl_vars['options']->value['url']) {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['yes'];
} else {
echo $_smarty_tpl->tpl_vars['lng']->value['general']['no'];
}?></div>
	</div>
<?php }?>

<div class="form_footer2">

	<div class="buttons rfloat">
		<span class="positive"><a  class="adsettings" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['edit_options'];?>
</a></span>
	</div>
	<div class="clearfix"></div>

</div>

<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function() {

$("a.adsettings").click(function(event){

	$.fancybox({
		'width'         		: 630,
		'height'        		: 600,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'margin'		: '0',
		'padding'		: '0',
		'titleShow'		: false,
		'type'			: 'iframe',
		'href'			: '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/edit_ad_settings.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'
	});

});

});

<?php echo '</script'; ?>
>
<?php }?> 

<div class="form_subtitle_bg"><div class="btn1"><strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lng']->value['listings']['ad_photos']," ","&nbsp;");?>
</strong></div></div>

<ul id="ul_files">
<?php
$_from = $_smarty_tpl->tpl_vars['tmp']->value['images'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/images/listings<?php if ($_smarty_tpl->tpl_vars['v']->value['folder']) {?>/<?php echo $_smarty_tpl->tpl_vars['v']->value['folder'];
}?>/thmb/<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
"></li>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</ul>


<div class="form_footer2">

	<div class="buttons rfloat">
		<span class="positive"><a  href="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/edit_photos.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lng']->value['listings']['edit_photos'];?>
</a></span>
	</div>
	<div class="clearfix"></div>

</div>

<div class="wait"></div>

</div> 
<?php }?> 
<?php }
}
?>