<?php

require_once("../vendor/autoload.php");

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "../tpl/",
    "cache_dir"     => "../cache/"
);
Tpl::configure( $config );

$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Flavio Gomes" );
$tpl->assign( "version", PHP_VERSION );
// draw the template
$html = $tpl->draw( "index", true );

$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

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
$mail->Username = "flaviogomee@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "flavio2207";

//Set who the message is to be sent from
$mail->setFrom('flaviogomee@gmail.com', 'Curso PHP 7');

//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('flavinhoyt@hotmail.com', 'Flavio Gomes');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>