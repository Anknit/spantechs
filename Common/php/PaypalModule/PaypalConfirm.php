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
	$dataArray['selectedPackageDescription']   	=	$_SESSION['selectedPackageDescription'];
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
}

?>