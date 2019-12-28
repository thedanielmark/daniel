<?php
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2;

include "mailConfig.php";

$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Contact form from danielmarkd.com";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
{
  $mail->Body = "Name: ".$_POST['name']."<br>Email: ".$_POST['email']."<br>Subject: ".$_POST['subject']."<br>Message: ".$_POST['message'];
}

header("Location: contact-post.html");

// Format the way the details appear in the inbox using HTML.

if($mail->Send()) {
   header("Location: contact-post.html");
}
else {echo "Send mail failed.";}
?>
