<?php

require_once 'PaypalAPI.php';
if(isset($_POST['paypal_payment_amount']))
{
	//var_dump($_POST);
	$_SESSION['paypal_payment_amount'] = $_POST['paypal_payment_amount'];
	$_SESSION['selectedDateForTour']   = $_POST['selectedDateForTour'];
	$_SESSION['bookingUserName']   	= $_POST['bookingUserName'];
	$_SESSION['bookingUserEmail']   = $_POST['bookingUserEmail'];
	$_SESSION['bookingUserPhone']   = $_POST['bookingUserPhone'];
	$_SESSION['packageSelect']   	= $_POST['packageSelect'];
	$_SESSION['selectedPackageDescription']   = $_POST['selectedPackageDescription'];
	$_SESSION['PersonCount']   = $_POST['PersonCount'];

	$paymentAmount	=	$_SESSION['paypal_payment_amount'];
	global $returnURL , $cancelURL, $currencyCodeType, $paymentType;
	$resArray = InitiateExpressCheckout($paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL);
}

?>