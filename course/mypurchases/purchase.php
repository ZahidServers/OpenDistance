<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
if(isset($_SESSION['logined']))
{
	$email50=$_SESSION['logined'];
	$sql50="SELECT *FROM delivery WHERE user='$email50'";
	$fs=mysql_query($sql50);
	echo"
		<table border='1' width='90%'><tr><th>ORDERID</th><th>Order Date</th><th>Amount</th><th>Payment Mode</th><th>BANKTXNID</th><th>GATEWAYNAME</th><th>Delivered</th></tr>";
	while($row50=mysql_fetch_array($fs))
	{
		$ORDERID=$row50['ORDERID'];
		$orderDate=$row50['orderDate'];
		$PAYMENTMODE=$row50['PAYMENTMODE'];
		$BANKTXNID=$row50['BANKTXNID'];
		$GATEWAYNAME=$row50['GATEWAYNAME'];
		$BANKNAME=$row50['BANKNAME'];
		$completed=$row50['completed'];
		$payment=$row50['payment'];
		echo"
		<tr><td>$ORDERID</td>
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
else
{
	echo"<script>window.location.href='../../404.php';</script>";
}
?>