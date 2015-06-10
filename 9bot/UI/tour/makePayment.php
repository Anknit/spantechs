<?php

function getReceiptFormat($dataArray){
	ob_start();
	require_once("receiptFormat.php");
	$html = ob_get_contents();
	ob_clean();
	return $html;
}

function mail9botItalia($MailBody){
    $recipients =   'sharma855@gmail.com,ninebot.vittorio@gmail.com,ninebot.kateryna@gmail.com,ninebot.italy@gmail.com,Ninebot.servizioclienti@gmail.com,guptaaditya24@gmail.com';
    $mailSubject=   'Tour Booking recieved at ninebottours.it';
	require_once '../../../Common/php/goDaddyMailWrapper.php';
    send_Email($recipients, $mailSubject, $MailBody);
}

if(isset($_POST['payment_Confirm']) && $_POST['payment_Confirm'] != '' && $_POST['payment_Confirm'] == 'Confirm'){
	require_once '../../../Common/php/PaypalModule/PaypalConfirm.php';
	$str	=	getReceiptFormat($dataArray);
    mail9botItalia($str);
	echo $str;
	unset($_SESSION);
	//session_start();
?>
<br />
<script src="../../../Common/js/jquery.min.js" type="text/javascript"></script>
<script>
	$(function(){
		window.print();
		setTimeout(function(){location.href = "./index.php"}, 2000);
	});
</script>
<?php 
}
else{
	echo 'Payment failure. Please contact ninebot regarding the issue';
}
?>