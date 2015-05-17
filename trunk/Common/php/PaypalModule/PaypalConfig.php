<?php

if (session_id() == "")
	session_start();
$PROXY_HOST = '127.0.0.1';
$PROXY_PORT = '808';
$SandboxFlag = true; //false ;//true;
$USE_PROXY = false;
$baseURL = 'http://localhost/Web_Project_Workspace/Web_Projects'; 

//' PayPal API Credentials
//' Replace <API_USERNAME> with your API Username
//' Replace <API_PASSWORD> with your API Password
//' Replace <API_SIGNATURE> with your Signature
//'------------------------------------

if($SandboxFlag == false)
{
	$API_UserName="info_api1.ninebotitalia.com";
	$API_Password="RGLPV7AMBALX7ALA";
	$API_Signature="AFcWxV21C7fd0v3bYYYRCpSSRl31AyubJiov.uLxR7R4oYaR6B3csjg7";
}
else
{
	$API_UserName="info-facilitator_api1.ninebotitalia.com";
	$API_Password="1406798335";
	$API_Signature="ALUpZfVx2UTbv.TXZ3C90Ns7fynvABO-cGgFdHpKpRtQHVLYQFMe0ORw";
                
}

/* for nbox testung 

*/
if (session_id() == "")
	session_start();

// BN Code 	is only applicable for partners
//$sBNCode = "PP-ECWizard";


/*
 ' Define the PayPal Redirect URLs.
' 	This is the URL that the buyer is first sent to do authorize payment with their paypal account
' 	change the URL depending if you are testing on the sandbox or the live PayPal site
'
' For the sandbox, the URL is       https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=
' For the live site, the URL is        https://www.paypal.com/webscr&cmd=_express-checkout&token=
*/

if ($SandboxFlag == true)
{
	$API_Endpoint = "https://api-3t.sandbox.paypal.com/nvp";
	$PAYPAL_URL = "https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=";
}
else
{
	$API_Endpoint = "https://api-3t.paypal.com/nvp";
	$PAYPAL_URL = "https://www.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=";
}

$version="93";
$returnURL = 'http://'.$_SERVER['HTTP_HOST'].'/9bot/UI/tour/postVerification.php';
$cancelURL = 'http://'.$_SERVER['HTTP_HOST'].'/9bot/UI/tour/paymentCancelled.php';
$currencyCodeType = "EUR";
$paymentType = "Order";
$purchaseDescription = "ninebot tours booking"; 
$brandName = 'Ninebot tours';
$companyLogoURL = 'http://9botitalia.com/9bot/images/icons/ninebot_paypal.png'; 
?>
