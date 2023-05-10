<?php
$idmail = $_POST['direcmail'];



$email_form = 'yavelwork@gmail.com';
$email_subject = "Nueva Subscripcion YavelArt ES";
$email_body = "Recibiste una nueva subscripcion de: $idmail".

$to = "yavelwork@gmail.com";
$headers = "From: $email_form \r\n";

mail($to,$email_subject,$email_body,$headers);

	print" <script languaje='JavaScript'>
	alert('Subscripto! Recibiras notificaciones al mail ingresado.');
	window.location.href='https://yavelrico.github.io/YavelArt/';
	</script>";
?>