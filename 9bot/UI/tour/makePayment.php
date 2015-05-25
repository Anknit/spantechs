<?php

function getReceiptFormat($dataArray){
	ob_start();
	require_once("receiptFormat.php");
	$html = ob_get_contents();
	ob_clean();
	return $html;
}

if(isset($_POST['payment_Confirm']) && $_POST['payment_Confirm'] != '' && $_POST['payment_Confirm'] == 'Confirm'){
	require_once '../../../Common/php/PaypalModule/PaypalConfirm.php';
	$str	=	getReceiptFormat($dataArray);
	echo $str;
	unset($_SESSION);
	//session_start();
?>
<br />
<div align ="center">
    <button id='getPayPalDetails' onclick='window.print();'>Print</button>
    <button id='' onclick='location.href = "../../index.html";'>Go back to 9botitalia.com</button>
</div>
<?php 
}
else{
	echo 'Payment failure. Please contact ninebot regarding the issue';
}
?>