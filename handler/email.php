<?php
include 'conn.php';
// echo "<pre>";print_r($_POST);die();
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP(); // Set mailer to use SMTP

$mail->Host = 'smtp.hostinger.com'; // Specify main and backup SMTP servers

$mail->SMTPAuth = true; // Enable SMTP authentication

$mail->Username = 'greetings@digielvestech.in'; // SMTP username

$mail->Password = 'June@2023'; // SMTP password

$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted

// $mail->SMTPDebug = 2;

$mail->Port = 465; // TCP port to connect to

$body = explode('||', $_POST['body']);
$inner_body = '';
foreach ($body as $key => $value) {
	$inner_body .= '<a href="'.$value.'">Submit '.strtoupper(explode('/', explode('.php', $value)[0])[5]).' Form</a><br>';
}

// echo $inner_body;die();
$mail->Body = $inner_body;

$mail->From = 'greetings@digielvestech.in';

$mail->FromName = $_POST['name'];

// foreach ($_POST['to'] as $key => $value) {
	$mail->addAddress($_POST['to']);
// }

// $mail->addAddress('ansariyazil03@gmail.com');

// $mail->SetFrom($email_id, $name);

//$mail->WordWrap = 50;

$mail->isHTML(true);

// $mail->addAttachment($_POST['temp']);

$mail->Subject = $_POST['subject'];
// die('000');
// echo $subject;die;

if($mail->send()) {
	// if ($_POST['subject'] === "Anniversary" or $_POST['subject'] === "Birthday Wishes") {
		header('Location: ../doctor_list.php?msg=Mail Sent');
	// } else {
	// 	header('Location: ../emailer-temp.php?msg=Mail Sent');
	// }
} else {
	// if ($_POST['subject'] === "Anniversary" or $_POST['subject'] === "Birthday Wishes") {
		header('Location: ../doctor_list.php?msg=Error Mail Sent');
	// } else {
	// 	header('Location: ../emailer-temp.php?msg=Error Mail Sent');
	// }
}
