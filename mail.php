<?php
////////////////////////
// PHPMailer example
// heiko@hostinger.com
////////////////////////

// Login credentials
$server_smtp = "smtp.hostinger.com";
$server_imap = "imap.hostinger.com";
$email_account = "apv@lsebucuresti.org";
$email_password = "Apv123#$";

// Recipient
$recipient = "miloiuc4@gmail.com";

use PHPMailer\PHPMailer\PHPMailer;
require "./phpmailer/autoload.php";
$mail = new PHPMailer;
$mail->SMTPDebug = 2;

$mail->Host = $server_smtp;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Username = $email_account;
$mail->Password = $email_password;

$mail->setFrom($email_account, "");
$mail->addReplyTo($email_account, "");
$mail->addAddress($recipient, "");
$mail->Subject = "This means that emails work fine.";
$mail->msgHTML("<h1>Salut</h1>");

if (!$mail->send()) {
	echo "error: ".$mail->ErrorInfo;
} else {
	echo "Message sent";
	if(!empty($server_imap)) {
		// Add the message to the IMAP.Sent mailbox
		$mail_string = $mail->getSentMIMEMessage();
		$imap_stream = imap_open("{".$server_imap."}", $email_account, $email_password);
		imap_append($imap_stream, "{".$server_imap."}INBOX.Sent", $mail_string);
	}
}
