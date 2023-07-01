
	<?php 
		
			require 'PHPMailerAutoload.php';

			$mail = new PHPMailer;

			 $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'almakhdoom078692@gmail.com';                 // SMTP username
			$mail->Password = '123@Aftab';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('almakhdoom078692@gmail.com', 'ICS');
			$mail->addAddress($email);     // Add a recipient

			//$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			$mail->addAttachment('../../invite.ics', 'ICS FILE');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Subject';
			$mail->Body    = '<div style="border:2px solid red;">Dear Delegate,

Thank you for registering for "Update in Cardio Vascular Diseases, 2021"

Please click on the link: https://ucd2021.envisageideas.tv/login.html to join the Virtual Conference scheduled on 31st July, 2021 Saturday and 01st August, 2021 Sunday, between 11.45 to 07:30 pm (IST).

We look forward to have your active participation for a meaningful and interesting discussion

Warm Regards,
Team UCD</div>';
			$mail->AltBody = 'alt Body';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
		
	 ?>
