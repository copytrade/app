<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-light-green" style="background-color:#f4f9f8;font-size:14px;font-family:'Palatino Linotype','Book Antiqua',Palatino,serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Auto Copy Trade Binary.Com</h2></div>
	<div class="element-password<?php frmd_add_class("password"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="password" value="" placeholder="Token Master"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Leverage"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Token Copy Trade"></textarea><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea1"); ?>"><label class="title"></label><div class="item-cont"><textarea class="small" name="textarea1" cols="20" rows="5" placeholder="Monitoring Result"></textarea><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>"><label class="title">Controller</label>		<div class="column column3"><label><input type="radio" name="radio" value="Start Monitor" /><span>Start Monitor</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="radio" value="Stop Connect" /><span>Stop Connect</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="radio" value="Restarting" /><span>Restarting</span></label></div><span class="clearfix"></span>
</div>
<div class="submit"><input type="submit" value="Account CR123456 USD 100 Server 00:00:00"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-light-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>