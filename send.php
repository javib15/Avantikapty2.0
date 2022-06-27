<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $mail. " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Email send by: " . $name. " \r\n";
$message .= "Email: " . $mail. " \r\n";
$message .= "Message: " . $_POST['message'] . " \r\n";
$message .= "Fue enviado... " . date('d/m/Y', time());

$para = "dcastillero@castlegalabogados.com";
$asunto = 'Contacto desde web';
mail($para, $asunto, utf8_decode($message), $header);
include 'http://castlegalabogados.com';


?>
