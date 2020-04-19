<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<?php include 'contextmenu.php'?>
<form autocomplete="off">
<input type='search' size='50' value="<?php if(isset($_GET['q'])){echo $_GET['q'];}?>" placeholder="<?php if(!isset($_GET['q'])){echo "Search For User Using Email";}?>" name='q' autocomplete="off">
<input type='submit' value='search'></br>
</form>
<?php
$local = file("../host.txt");
$host=implode(" ",$local);
$db = file("../unam.txt");
$udb=implode(" ",$db);
$word = file("../pass.txt");
$pass=implode(" ",$word);
$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
if(!isset($_GET['q'])){
mysql_select_db("studentenrollment",$con);
	$sql50="SELECT *FROM subscription ";
	$fs=mysql_query($sql50);
	echo"
		<table border='1' width='90%'><tr><th>USER</th><th>ORDERID</th><th>Order Date</th><th>Amount</th><th>Payment Mode</th><th>BANKTXNID</th><th>GATEWAYNAME</th><th>Delivered</th></tr>";
	while($row50=mysql_fetch_array($fs))
	{
		$user=$row50['user'];
		$ORDERID=$row50['ORDERID'];
		$orderDate=$row50['orderDate'];
		$PAYMENTMODE=$row50['PAYMENTMODE'];
		$BANKTXNID=$row50['BANKTXNID'];
		$GATEWAYNAME=$row50['GATEWAYNAME'];
		$BANKNAME=$row50['BANKNAME'];
		$completed=$row50['completed'];
		$payment=$row50['payment'];
		echo"
		<tr><td>$user</td>
		<td>$ORDERID</td>
		<td>$orderDate</td>
		<td>$payment</td>
		<td>$PAYMENTMODE</td>
		<td>$BANKTXNID</td>
		<td>$GATEWAYNAME</td>
		<td>$completed</td>
		</tr>";
	}
	echo"</table>";
}
if(isset($_GET['q'])){
	$q=$_GET['q'];
mysql_select_db("studentenrollment",$con);
	$sql50="SELECT *FROM subscription WHERE user LIKE '%$q%'";
	$fs=mysql_query($sql50);
	echo"
		<table border='1' width='90%'><tr><th>USER</th><th>ORDERID</th><th>Order Date</th><th>Amount</th><th>Payment Mode</th><th>BANKTXNID</th><th>GATEWAYNAME</th><th>Delivered</th></tr>";
	while($row50=mysql_fetch_array($fs))
	{
		$user=$row50['user'];
		$ORDERID=$row50['ORDERID'];
		$orderDate=$row50['orderDate'];
		$PAYMENTMODE=$row50['PAYMENTMODE'];
		$BANKTXNID=$row50['BANKTXNID'];
		$GATEWAYNAME=$row50['GATEWAYNAME'];
		$BANKNAME=$row50['BANKNAME'];
		$completed=$row50['completed'];
		$payment=$row50['payment'];
		echo"
		<tr><td>$user</td>
		<td>$ORDERID</td>
		<td>$orderDate</td>
		<td>$payment</td>
		<td>$PAYMENTMODE</td>
		<td>$BANKTXNID</td>
		<td>$GATEWAYNAME</td>
		<td>$completed</td>
		</tr>";
	}
	echo"</table>";
}
?>
