<?php
/*
* Author: Aditya
* date: 08-Aug-2014
* CSS Document 
*
*/
?>
<?php
$smtpSettings	=	array(
	'sender'	=>	'ninebot@9botitalia.com'
);
function send_Email($recipients, $mailSubject, $MailBody){
	global $smtpSettings;
	$sender = "From: ".$smtpSettings['sender']."\r\n" .	"Reply-To: webmaster@" . $_SERVER['SERVER_NAME'] . "\r\n" .	"X-Mailer: PHP/" . phpversion();
	mail($recipients, $mailSubject, $MailBody, $sender);
	return true;
}
?>