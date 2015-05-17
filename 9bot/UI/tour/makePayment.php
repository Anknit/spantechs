<?php
if(isset($_POST['payment_Confirm']) && $_POST['payment_Confirm'] != '' && $_POST['payment_Confirm'] == 'Confirm'){
	require_once '../../../Common/php/PaypalModule/PaypalConfirm.php';
	if(isset($str)) {
		echo $str;
	}
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