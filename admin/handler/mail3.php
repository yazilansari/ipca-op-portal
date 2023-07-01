<?php
 use PHPMailer\PHPMailer\PHPMailer;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions


if (isset($_POST['submit'])) {
    $rep=$_POST['rplmail'];
    $msg=$_POST['msg'];
    $sub=$_POST['sub'];


        $mail = new PHPMailer;
        $mail->isSMTP(); // Set mailer to use SMTP
        
        $mail->SMTPDebug = 2;

        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers

        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->setFrom('events@envisageideas.tv', 'CSI ODISHA 2021');
        $mail->Username = 'events@envisageideas.tv'; // SMTP username

        $mail->Password = 'Asia@2021'; // SMTP password

        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted

        $mail->Port = 587; 
        // TCP port to connect to                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
   // $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($rep);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment("invite.ics");         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $sub;
    $mail->Body    = $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()) {
        session_start();
        $_SESSION['msg']="Successfully Sent to : ".$rep;
    header("Location: ../pages/charts/questions_answers.php");
    }else{
    header("Location: ../pages/charts/questions_answers.php");
    }




}
   ?>