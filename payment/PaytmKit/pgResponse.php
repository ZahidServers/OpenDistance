<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<title><?php include '../../sitetitle.php'?>|Payment</title>
<?php
session_start();
$email=$_SESSION['logined'];
$local = file("../../host.txt");
$host=implode(" ",$local);
$db = file("../../unam.txt");
$udb=implode(" ",$db);
$word = file("../../pass.txt");
$pass=implode(" ",$word);
$con = mysql_connect($host, $udb, $pass);
mysql_select_db("studentenrollment",$con);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
echo"<style>
body{
margin:0;
}
.rssd a{color:Green;cursor: pointer;}
.rssd a:hover{color:cyan;}
.acf:hover{color:Green;}
.acf{color:cyan;cursor: pointer;}
html{background-color:#4ca3dd;}
.rssd{
color:white;
text-shadow:4px 4px 12px;
}
table{
color:white;
text-shadow:4px 4px 12px;
font-size:20px;
}
.nav{
overflow: hidden;
background-color: #333;
width:100%;
font-size:25px;
}
</style>";
echo "<div class='rssd'>
<div class='nav'><br>&nbsp;"; include'../../sitetitle.php';echo"|Payment Reciept<br><div style='color: #333;'>.</div></div>";
echo"<div style='padding:20px;'>";
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<center><h2><b>Transaction status is successful</b></h2>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<center><h2><b>Transaction status is failed</b></h2>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		echo"<h1>Thanks for Ordering <a onclick='window.print();'>Print This Reciept</a></h1>";
		if(isset($_POST['STATUS']))
    
		{
			if($_POST['STATUS']=="TXN_SUCCESS" || $_POST['TXNAMOUNT']==0)
		{
			 $result90=mysql_query("SELECT *FROM user WHERE email='$email'");
				while($row90=mysql_fetch_array($result90))
				{
					$pro=$row90['pro'];
				}
			$STATUS=$_POST['STATUS'];
			$ORDERID=$_POST['ORDERID'];
			$MID=$_POST['MID'];
			$TXNAMOUNT=$_POST['TXNAMOUNT'];
			if($pro=='no')
			{
			$TXNID=$_POST['TXNID'];
			$TXNDATE=$_POST['TXNDATE'];
			$GATEWAYNAME=$_POST['GATEWAYNAME'];
			$BANKNAME=$_POST['BANKNAME'];
			$PAYMENTMODE=$_POST['PAYMENTMODE'];
			}
			if($pro=='yes'&&$TXNAMOUNT!=0)
			{
			$TXNID=$_POST['TXNID'];
			$TXNDATE=$_POST['TXNDATE'];
			$GATEWAYNAME=$_POST['GATEWAYNAME'];
			$BANKNAME=$_POST['BANKNAME'];
			$PAYMENTMODE=$_POST['PAYMENTMODE'];
			}
			if($pro=='yes'&&$TXNAMOUNT==0)
			{
			$TXNID='pro';
			$TXNDATE=date("Y-m-d");
			$GATEWAYNAME='pro';
			$BANKNAME='pro';
			$PAYMENTMODE='pro';
			}
			$CURRENCY=$_POST['CURRENCY'];
			$RESPCODE=$_POST['RESPCODE'];
			$RESPMSG=$_POST['RESPMSG'];
			$BANKTXNID=$_POST['BANKTXNID'];
			echo"<table><tr><td>ORDERID:</td><td class='acf'>$ORDERID</td></tr>
			<tr><td>Total Amount:</td><td class='acf'>$TXNAMOUNT</td></tr>
			<tr><td>Currency:</td><td class='acf'>$CURRENCY</td></tr>
			<tr><td>Transaction Date:</td><td class='acf'>$TXNDATE</td></tr>
			";
			if(isset($_POST['STATUS']))
			{
				 $result=mysql_query("SELECT *FROM user WHERE email='$email'");
				while($row=mysql_fetch_array($result))
				{
					$Address=$row['address'];
				}
				 $result2=mysql_query("SELECT *FROM delivery");
				while($row2=mysql_fetch_array($result2))
				{
					$ids=$row2['id'];
				}
				$idsm=$ids+1;
				echo"<tr><td>Address:</td><td class='acf'>$Address</td></tr></table></center>";
				$sql="INSERT INTO delivery VALUES('$idsm','$email','$Address','$TXNAMOUNT','$TXNDATE','$CURRENCY','$ORDERID','$TXNID','$PAYMENTMODE','$MID','$STATUS','$RESPCODE','$RESPMSG','$GATEWAYNAME','$BANKTXNID','$BANKNAME','no')";
				if (mysql_query($sql)) 
				{
					echo "<br><h1><center>Your Certificate will reach this address soon through courier may take some time.</center></h1>";
				} 
				else 
				{
					echo "<h2 align='center' style='color:red;'>Error:Cant insert data into database try resubmiting the form or
					<br>Please Contact Site Administer and message your address<br>
			This is probably due change in URL done by you or some attacker on your network</h2>". mysql_error() ."";
				}
			}
			else{echo"<h2 align='center' style='color:red;'>Error: Address Is not found Please Contact Site Administer and message your address<br>
			This is probably due change in URL done by you or some attacker on your network</h2>";}
		}
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>