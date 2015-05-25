<?php
require_once 'PaypalAPI.php';
$resArray;
$ack = MakePayment($resArray); 
if($ack == 'SUCCESS' || $ack == 'SUCCESSWITHWARNING')
{
	$dataArray['bookingUserName']				=	$_SESSION['bookingUserName'];
	$dataArray['selectedDate_Tour']				=	$_SESSION['selectedDateForTour'];
	$dataArray['bookingUserEmail']				=	$_SESSION['bookingUserEmail'];
	$dataArray['bookingUserPhone']				=	$_SESSION['bookingUserPhone'];
	$dataArray['selectedPackageDescription']   	=	$_POST['selectedPackageDescription'];
	$dataArray['personCount']					=	$_SESSION['PersonCount'];
	$dataArray['transactionId']					=	$resArray['PAYMENTINFO_0_TRANSACTIONID'];
	$dataArray['orderTime']						=	str_replace("Z","",str_replace("T"," ",$resArray['PAYMENTINFO_0_ORDERTIME'])). ' UTC';
	$dataArray['amountPaid']					=	$resArray['PAYMENTINFO_0_AMT'].'&nbsp;'. $resArray['PAYMENTINFO_0_CURRENCYCODE'];
	$dataArray['paymentStatus']					=	$resArray['PAYMENTINFO_0_PAYMENTSTATUS'];
	$dataArray['recieptNumber']					=	$_SESSION['invoicenum'];
	$dataArray['orderTime']						=	str_replace("Z","",str_replace("T"," ",$resArray['PAYMENTINFO_0_ORDERTIME'])). ' UTC';
	$dataArray['amountPaid']					=	$resArray['PAYMENTINFO_0_AMT']. $resArray['PAYMENTINFO_0_CURRENCYCODE'];
	$dataArray['paymentStatus']					=	$resArray['PAYMENTINFO_0_PAYMENTSTATUS'];
	$dataArray['recieptNumber']					=	$_SESSION['invoicenum'];
/*

	//var_dump($_SESSION);
	$paymentAmount = $_SESSION['paypal_payment_amount'];
	$bookingDate   = $_SESSION['selectedDateForTour'];
	$bookingUserName   = $_SESSION['bookingUserName'];
	$bookingUserEmail   = $_SESSION['bookingUserEmail'];
	$bookingUserPhone   = $_SESSION['bookingUserPhone'];
	$packageSelect   = $_SESSION['packageSelect'];
	$PersonCount   = $_SESSION['PersonCount'];
	
		$str = '<b><i>Congratulations!</i></b>Your payment transaction is Succesful</br>';
		$str = "Thank you : " .$bookingUserName.'</br>';
		$str = $str.'Please note the following Details </br></br>';
		$str = $str.'Transcation ID:<b>' . $resArray['PAYMENTINFO_0_TRANSACTIONID']. '</b></br>';
		$str = $str.'Order Time:<b>' . str_replace("Z","",str_replace("T"," ",$resArray['PAYMENTINFO_0_ORDERTIME'])). ' UTC</b></br>';
		$str = $str.'Amount:<b>' . $resArray['PAYMENTINFO_0_AMT']. $resArray['PAYMENTINFO_0_CURRENCYCODE'] .  '</b></br>';
		$str = $str.'Payment Status:<b>' . $resArray['PAYMENTINFO_0_PAYMENTSTATUS']. '</b></br>';
		//$str = $str.'Receipt No:<b>' . $resArray['PAYMENTINFO_0_RECEIPTID']. '</b></br>';
		$str = $str.'Invoice No:<b>' . $_SESSION['invoicenum']. '</b></br>';
		//$str = $str.'Purchase Description:<b>' . $_SESSION["purchase_descr"]. '</b></br>';
*/}

?>