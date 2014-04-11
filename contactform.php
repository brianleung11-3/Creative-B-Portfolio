<?php
$field_name = $_POST['element_1'];
$field_email = $_POST['element_2'];
$field_message = $_POST['element_3'];

$to = 'brian@creativeb.ca';
$subject = 'Message from Creative B visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

 mail('brian@creativeb.ca', $subject, $body_message, $headers);

if ($mail_status) { ?>

	   <script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to brian@creativeb.ca');
		window.location = 'http://creativeb.ca';
	</script>

<?php
}
else { ?>
<script language="javascript" type="text/javascript">
		window.location = 'http://creativeb.ca/thank-you';
	</script>


    
 
	
<?php
}
?>

