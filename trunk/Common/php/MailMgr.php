<?php
/*
 * Author: Aditya 
 * date: 1-AUG-2014
 * Description: This module provides method to send e-mail.
 * Passing the Recipients and mail body as content of html body, the mail can be successfully sent if only the smtp settings exists for the system.
 */

/*=====================================================SEND MAIL==============================================================*/
/*
* @access public
* @param  string $recipients. Comma separated string of email addresses, where email is to be sent.	//Mandatory
* @param  string $mailSubject. Text to be shown as mail subject.	//Optional
* @param  string $MailBody.	   content of email body. It should be paased as html of html body.		//Mandatory
*
* @return Error string if(recipients list is empty), else true/false depending on email success/failure

*/

function send_Email($recipients, $mailSubject = "", $MailBody = "", $additionalEmails	=	'',	$attachment	=	'')
{
	$mailInit	=	new init_mail();
	return $mailInit->send_Mail($recipients, $mailSubject, $MailBody, $additionalEmails	=	'',	$attachment);
}

class init_mail {
	private $sender, $headers, $default_sender	=	'Administrator', $smtp_Details =''; 

	//Initialize the parameters required to send mail
	public function init_mail()	
	{
		$smtpDetails	=	array(array(
            'smtpHostName'  =>  'smtp.gmail.com',
            'smtpPort'  =>  '465',
            'smtpUsername'  =>  '9botitaly@gmail.com',
            'smtpPassword'  =>  'moving2015',
            'sender'  =>  '9botitaly@gmail.com',
        ));
		if(count($smtpDetails) > 0)
		{
			//	$smtpDetails[0] refers to an array on whose index 0 will exist an associative array          smtpUsername
			$this->smtp_Details['Host']		=	$smtpDetails[0]['smtpHostName'];
			$this->smtp_Details['Port']		=	$smtpDetails[0]['smtpPort'];
			$this->smtp_Details['User']		=	$smtpDetails[0]['smtpUsername'];
			$this->smtp_Details['Pass']		=	$smtpDetails[0]['smtpPassword'];
			$this->smtp_Details['sender']	=	$smtpDetails[0]['sender'];
		}
	}
	
	private function get_Sender($username, $senderName	=	"")
	{
		if($senderName != "")
			$Sender = $senderName;
		elseif($username != "")
			$Sender = $username;
		else
			$Sender = $this->default_sender;
		
		return $Sender;	
	}
	
	private function get_Mail_Content($MailBody	=	"")
	{
		if($MailBody == "")
			$output	=	false;
		else
		$output	=	'<html>
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
						<title>Venera technologies</title></head>
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
	
	public function send_Mail($recipients, $mailSubject, $MailBody, $additionalEmails	=	'', $attachment	=	'')
	{
		$cwd	=	getcwd();
		chdir(__DIR__);

		if($recipients != "" && $MailBody != "")
		{
			require_once	"Mail.php";
			require_once	"Mail/mime.php";

			$headers["From"]		=	$this->get_Sender($this->smtp_Details['User'], $this->smtp_Details['sender']);
			$random_hash 			= 	md5(date('r', time())); 
			$headers["Content-Type"]= 	"multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";

			$headers["To"] 			= $recipients;
			$headers["Cc"] 			= $additionalEmails;
			$headers["Subject"] 	= $mailSubject;

			//Content of the email
			$html	=	$this->get_Mail_Content($MailBody);

			$text = ''; 
			$crlf = "\r\n";
			$mime = new Mail_mime($crlf);
			$mime->setTXTBody($text);
			$mime->setHTMLBody($html);

			// Set the attachment
			if ($attachment != '' && file_exists($attachment))
			{
				$mime->addAttachment($attachment);
			}
			
			$body 		= $mime->get();
			$headers 	= $mime->headers($headers);	

			//SMTP INFO
			$smtpinfo["host"] 		= $this->smtp_Details['Host'];
			$smtpinfo["port"] 		= $this->smtp_Details['Port'];
			if($smtpinfo["port"] == "")
				$smtpinfo["port"] = "25";
			if($this->smtp_Details['User'] != "" && $this->smtp_Details['Pass'] != "")
			{
				$smtpinfo["auth"] 		= true;
				$smtpinfo["username"]	= $this->smtp_Details['User'];
				$smtpinfo["password"] 	= $this->smtp_Details['Pass'];	
			}
			else
				$smtpinfo["auth"] 		= false;

			$mail_object = Mail::factory("smtp", $smtpinfo);
			$sendMail	=	$mail_object->send($recipients, $headers, $body);
			if (PEAR::isError($sendMail)) {
				$mailError	=	$sendMail->getMessage();
				$output	=	false;
			} else {
				$output	=	true;
			}
		}
		else
		{
			$output	=	'Recipients list empty';
		}
		
		chdir($cwd);
		return $output;
	}
};
?>