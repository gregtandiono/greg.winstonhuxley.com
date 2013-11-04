<?php
$varName = $_POST['cf_name'];
$varEmail = $_POST['cf_email'];
$varServices = $_POST['cf_services'];

$mail_to = 'gregorytandiono@yahoo.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$varName."\n";
$body_message .= 'E-mail: '.$varEmail."\n";
$body_message .= 'He/She is interested in this service: '.$varServices;

$headers = 'From: '.$varEmail."\r\n";
$headers .= 'Reply-To: '.$varEmail."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'success.html#main';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please try again');
		window.location = 'http://greg.winstonhuxley.com';
	</script>
<?php
}
?>