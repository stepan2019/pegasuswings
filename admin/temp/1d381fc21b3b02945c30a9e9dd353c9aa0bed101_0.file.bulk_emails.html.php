<?php /* Smarty version 3.1.24, created on 2019-06-11 20:03:30
         compiled from "/home/pegasuswings/public_html/admin/templates/default/bulk_emails.html" */ ?>
<?php
/*%%SmartyHeaderCode:10345771615d000912eba6e5_32758829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d381fc21b3b02945c30a9e9dd353c9aa0bed101' => 
    array (
      0 => '/home/pegasuswings/public_html/admin/templates/default/bulk_emails.html',
      1 => 1485431862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10345771615d000912eba6e5_32758829',
  'variables' => 
  array (
    'live_site' => 0,
    'mail_settings' => 0,
    'lng' => 0,
    'self' => 0,
    'id' => 0,
    'error' => 0,
    'info' => 0,
    'groups' => 0,
    'v' => 0,
    'tmp' => 0,
    'demo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5d000912ef6783_38746339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d000912ef6783_38746339')) {
function content_5d000912ef6783_38746339 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10345771615d000912eba6e5_32758829';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/encodings.min.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['mail_settings']->value['html_mails']) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEdit.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	
	$(document).ready(function () {
	myEditor = new nicEditor({iconsPath : '<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/libs/nicEdit/nicEditorIcons.gif', buttonList : ['bold','italic','underline', 'left', 'center', 'right', 'justify', 'ul', 'ol', 'indent', 'outdent', 'forecolor', 'bgcolor', 'hr', 'fontSize', 'fontFormat']}).panelInstance('message');
	});


<?php echo '</script'; ?>
>
<?php }?>

<div class="page_title"><?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['users'];?>
 > <?php echo $_smarty_tpl->tpl_vars['lng']->value['panel']['send_bulk_emails'];?>
</div>

<div class="p30">
<form name="users_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['self']->value;
if (isset($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['id']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" enctype="multipart/form-data">

<div class="form_container">

<div class="info" id="info_msg"></div>
<div class="error" id="error_msg"></div>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value) && $_smarty_tpl->tpl_vars['error']->value) {?><div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['info']->value) && $_smarty_tpl->tpl_vars['info']->value) {?><div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div><?php }?>

<div class="wait"></div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['test'];?>
</div>
	<div class="right_form"><input type="checkbox" name="test" id="test"/></div>
</div>

<div class="clearfix" id="groups_div">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['users']['group'];?>
<span class="mandatory">*</span></div>
	<div class="right_form">
		<select name="group" id="group">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['lng']->value['groups']['all_groups'];?>
</option>
			<option value="-1"><?php echo $_smarty_tpl->tpl_vars['lng']->value['tools']['all_guests'];?>
</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
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

<div class="clearfix" id="send_to_div">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['send_to'];?>
</div>
	<div class="right_form">
		<select name="send_to" id="send_to">
			<option value="all"><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['all_users'];?>
</option>
			<option value="active_users" selected><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['active_users'];?>
</option>
			<option value="active_ads"><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['active_ads_users'];?>
</option>
			<option value="active_for_sale"><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['active_for_sale'];?>
</option>
			<option value="active_for_rent"><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['active_for_rent'];?>
</option>
		</select>
	</div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['subject'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><input name="subject" id="subject" type="text" size="50" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['tmp']->value['subject'])) {
echo $_smarty_tpl->tpl_vars['tmp']->value['subject'];
}?>" /></div>
</div>

<div class="clearfix">
	<div class="left_form"><?php echo $_smarty_tpl->tpl_vars['lng']->value['messages']['message'];?>
<span class="mandatory">*</span></div>
	<div class="right_form"><textarea name="message" id="message" type="text" rows="30" cols="90"/></textarea></div>
</div>

<div class="form_footer2">
	<div class="buttons rfloat">
		<span class="positive"><a href="javascript:;" <?php if (!$_smarty_tpl->tpl_vars['demo']->value) {?>id="Submit"<?php } else { ?> onClick="alert('<?php echo $_smarty_tpl->tpl_vars['lng']->value['general']['errors']['demo'];?>
');"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['send'];?>
</a></span>
	</div>
	<div class="clearfix"></div>
</div>

</div> 

</form>
</div>


<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function() {

	$("#info_msg").hide();
	$("#error_msg").hide();

	var test = 0;
	$("#test").click(function(){
		if($("#test").is(':checked')) {
			$("#groups_div").hide();
			$("#send_to_div").hide();
			test = 1;
		}
		else {
			test = 0;
			$("#groups_div").show();
			$("#send_to_div").show();
		}
	});

	$("#Submit").click(function(){


<?php if ($_smarty_tpl->tpl_vars['mail_settings']->value['html_mails']) {?>

		for(var i=0;i<myEditor.nicInstances.length;i++){myEditor.nicInstances[i].saveContent();}

<?php }?>


		$("#info_msg").hide();
		error=0;
		if(test) { group=0; send_to=''; }
		else {
			var group = $("#group").val();
			var send_to = $("#send_to").val();
		}
		error_str = '';
		var subject = $("#subject").val();
		if(!subject) {
			error = 1;
			error_str = "<?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['subject_missing'];?>
<br/>";
			$("#error_msg").html(error_str);
			$("#error_msg").show();
			$('html,body').animate({scrollTop:$("#error_msg").offset().top-60}, 'slow');
		}
		else
			var subject_enc = base64_encode(subject);
		var message = $("#message").val();
		if(!message) {
			error = 1;
			error_str+="<?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['content_missing'];?>
";
			$("#error_msg").html(error_str);
			$("#error_msg").show();
			$('html,body').animate({scrollTop:$("#error_msg").offset().top-60}, 'slow');
		}
		else
			var message_enc = base64_encode(message);

		if(!error) {
			$("body").addClass("loading"); 
			$("#error_msg").hide();
			$("#info_msg").hide();
			var first_id = 0;
			if(group==-1) first_id='';
			sendEmail(first_id, group, send_to, subject_enc, message_enc, test);
		}
		
	});

	function sendEmail(last_id, group, send_to, subject_enc, message_enc, test, no_sent, no_failed) {

		$.post("<?php echo $_smarty_tpl->tpl_vars['live_site']->value;?>
/admin/include/send_email.php", { last_id: last_id, test: test, group: group, send_to: send_to, subject: subject_enc, message: message_enc, no_sent: no_sent, no_failed: no_failed }, function(data){ 

		if(data!=-1) {
			var arr = data.split("|");
			var sent = parseInt(arr[0]);
			var last_id = arr[1];
			no_sent = parseInt(arr[2]);
			no_failed = parseInt(arr[3]);
			if(sent==1) no_sent = no_sent+1; else no_failed = no_failed+1;
			//alert(sent+" "+no_sent+" "+no_failed);
		} else 	
			var last_id = -1;

		if(last_id>0 || (last_id!='' && last_id!='-1')) { sendEmail(last_id, group, send_to, subject_enc, message_enc, test, no_sent, no_failed); }
		else { 
			$("body").removeClass("loading"); 
			if(test) { 
				if(sent) {
					$("#info_msg").html("<?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['test_mail_sent'];?>
");
					$("#info_msg").show();
					$('html,body').animate({scrollTop:$("#info_msg").offset().top-60}, 'slow');			
				}	
				else {
					$("#error_msg").html("<?php echo $_smarty_tpl->tpl_vars['lng']->value['mailto']['sending_message_failed'];?>
");
					$("#error_msg").show();
					$('html,body').animate({scrollTop:$("#error_msg").offset().top-60}, 'slow');			
				}
			}	
			else { 
				var total = no_sent+no_failed;
				$("#info_msg").html("<?php echo $_smarty_tpl->tpl_vars['lng']->value['bulk_emails']['mails_sent'];?>
".replace("##NO_EMAILS##", total.toString()).replace("##SENT##", no_sent.toString()).replace("##FAILED##", no_failed.toString()));
				$("#info_msg").show();
				$('html,body').animate({scrollTop:$("#info_msg").offset().top-60}, 'slow');			
			}	
		}
		});
	}

});


<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>