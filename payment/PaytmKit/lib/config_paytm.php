<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
/*
- Use PAYTM_ENVIRONMENT as 'PROD' if you wanted to do transaction in production environment else 'TEST' for doing transaction in testing environment.
- Change the value of PAYTM_MERCHANT_KEY constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_MID constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_WEBSITE constant with details received from Paytm.
- Above details will be different for testing and production environment.
*/
$test = file("./lib/mode.txt");
$enviroment=implode(" ",$test);
$key = file("./lib/key.txt");
$merchantkey=implode(" ",$key);
$merchant = file("./lib/mid.txt");
$merchantid=implode(" ",$merchant);
$website = file("./lib/website.txt");
$mwebsite=implode(" ",$website);
define('PAYTM_ENVIRONMENT', $enviroment); // PROD
define('PAYTM_MERCHANT_KEY', $merchantkey); //Change this constant's value with Merchant key received from Paytm.
define('PAYTM_MERCHANT_MID', $merchantid); //Change this constant's value with MID (Merchant ID) received from Paytm.
define('PAYTM_MERCHANT_WEBSITE', $mwebsite); //Change this constant's value with Website name received from Paytm.
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
{$link = "https://"; }
else
{ $link = "http://"; }
$CALLBACK_URL=$link.$_SERVER['SERVER_NAME']."/payment/PaytmKit/pgResponse.php";
$PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
$PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
if (PAYTM_ENVIRONMENT == 'PROD') {
	$PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
	$PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
}

define('PAYTM_REFUND_URL', '');
define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
define('CALLBACK_URL',$CALLBACK_URL);
?>
