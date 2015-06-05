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