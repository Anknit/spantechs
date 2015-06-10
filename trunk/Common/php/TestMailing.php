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

require_once 'MailMgr.php';
$recipients	=	'guptaaditya24@gmail.com';
if(isset($_GET) && isset($_GET['TO'])){
	$recipients	=	$_GET['TO'];
}
$mailSubject=	'Testing mail services by godaddy';
$MailBody	=	'Is it working fine?';
$additionalEmails	=	'';
if(isset($_GET) && isset($_GET['CC'])){
	$additionalEmails	=	$_GET['CC'];
}
$attachment	=	'';
$output	=	send_Email($recipients, $mailSubject, $MailBody, $additionalEmails,	$attachment);
if($output !== true){
	var_dump($output[1]);
}
else{
	echo 'sent';
}
?>