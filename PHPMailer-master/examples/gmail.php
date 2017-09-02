<?php
session_start();
$k=$_SESSION["key"];
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Kolkata');

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "phpmail25@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "pvishnuprasaath";

//Set who the message is to be sent from
$mail->setFrom('phpmail25@gmail.com', 'Bucket Network');

//Set an alternative reply-to address
$mail->addReplyTo('phpmail25@gmail.com', 'Bucket Network');

//Set who the message is to be sent to
$mail->addAddress($_SESSION["email"], $_SESSION["name"]);

//Set the subject line
$mail->Subject = "Login Notification.Key for next Login- $k ";

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));


//Replace the plain text body with one created manually
$mail->AltBody = "Your have been logged into Bucket network Securely. The secret Key for your next login is $k .";

//Attach an image file
$mail->addAttachment();

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
	header( "Location: ../../main.php" );
}
