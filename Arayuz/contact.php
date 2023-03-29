<?php
	if( !isset( $_POST['data']) ) {
		echo 'something is wrong! Please try agian';
		die();
	}
    parse_str($_POST['data'],$data);
	$email_from = $data['email'];
	$email_message = "Please find below a message submitted by ".stripslashes($data['name'])."\n\n";
	$email_message .=" on ".date("d/m/Y")." at ".date("H:i")."\n\n";
	$email_message .= stripslashes($data['message']);

	$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n" ;
	mail('info@muratterzi.com.tr',$email_from,$email_message,$headers);

	echo "Thanks for contacting us.";

	die();
?>
