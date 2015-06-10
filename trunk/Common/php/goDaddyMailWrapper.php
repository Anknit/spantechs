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
	
function get_Mail_Content($MailBody	=	"")
{
	if($MailBody == "")
		$output	=	false;
	else
	$output	=	'<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					<title>9bot italia</title></head>
						<style type="text/css"> .internalTextNormal{
						font-family: Arial, Helvetica, sans-serif;
						font-size: 11px;
						color: #000000;
						font-weight: normal;	 
					}</style>
				</head>
				<body>'.$MailBody.'</body></html>';
				
	return $output;	
}

function send_Email($recipients, $mailSubject, $MailBody){
	$MailBody	=	get_Mail_Content($MailBody);
	global $smtpSettings;
	$sender = "From: ".$smtpSettings['sender']."\r\n" .	"Reply-To: webmaster@" . $_SERVER['SERVER_NAME'] . "\r\n" .	"X-Mailer: PHP/" . phpversion();
	mail($recipients, $mailSubject, $MailBody, $sender);
	return true;
}
?>