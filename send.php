<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['phone'];
$message = $_POST['date'];
$message = $_POST['people'];
$message = $_POST['time'];
$message = $_POST['message'];

$header = 'From: ' . $mail. " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Email send by: " . $name. " \r\n";
$message .= "Email: " . $mail. " \r\n";
$message .= "Phone: " . $_POST['phone'] . " \r\n";
$message .= "date: " . $_POST['date'] . " \r\n";
$message .= "people: " . $_POST['people'] . " \r\n";
$message .= "time: " . $_POST['time'] . " \r\n";
$message .= "Message: " . $_POST['message'] . " \r\n";
$message .= "Send date" . date('d/m/Y', time());

$para = "sistec.int@gmail.com";
$asunto = 'Resservation web site';
mail($para, $asunto, utf8_decode($message), $header);
include 'http://sistecint.com';


?>
