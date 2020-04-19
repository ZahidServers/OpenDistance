<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<?php include 'contextmenu.php'?>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
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
mysql_select_db("studentenrollment");
if(!isset($_GET['view']))
{
	echo"<input type='button' onclick='window.location.href=\"ac.php\"' value='view completed orders'>";
	echo"<table border='1' width='100%'><tr><td></td><th>USER</th><th>ORDERID</th><th>Order Date</th><th>Address</th><th>Amount</th><th>Payment Mode</th><th>BANKTXNID</th><th>GATEWAYNAME</th><th>Delivered</th></tr>";
	$query5=mysql_query("SELECT *FROM delivery WHERE completed='no'");
	while($row50=mysql_fetch_array($query5))
	{
		$user=$row50['user'];
		$ORDERID=$row50['ORDERID'];
		$ORDERID2=$ORDERID;
		$orderDate=$row50['orderDate'];
		$PAYMENTMODE=$row50['PAYMENTMODE'];
		$BANKTXNID=$row50['BANKTXNID'];
		$GATEWAYNAME=$row50['GATEWAYNAME'];
		$BANKNAME=$row50['BANKNAME'];
		$completed=$row50['completed'];
		$payment=$row50['payment'];
		$address=$row50['address'];
		echo"
		<tr><td><form id='myForm' action='./certificates-delivery.php/?view=1' method='post'>
		<input type='hidden' value='$ORDERID' name='ord'><input type='hidden' value='$user' name='usr'></form>
		<a style='color:blue;cursor:pointer;text-decoration:underline;' onclick='document.getElementById(\"myForm\").submit();'>View</a></td>
		<td>$user</td>
		<td>$ORDERID</td>
		<td>$orderDate</td>
		<td>$address</td>
		<td>$payment</td>
		<td>$PAYMENTMODE</td>
		<td>$BANKTXNID</td>
		<td>$GATEWAYNAME</td>
		<td>$completed</td>
		</tr>";
	}
}
if(isset($_GET['view']))
{
	if(!isset($_GET['completed']))
{
	$ng=$_POST['ord'];
	$pg=$_POST['usr'];
	$rc=explode("ORDS",$ng);
	$val=$rc[1];
	$query5=mysql_query("SELECT *FROM course WHERE iv='$val'");
	while($row50=mysql_fetch_array($query5))
	{
		$iv=$row50['name'];
		$hrs=$row50['hrs'];
	}
	$query6=mysql_query("SELECT *FROM user WHERE email='$pg'");
	while($row60=mysql_fetch_array($query6))
	{
		$id=$row60['name'];
	}
	echo"<h4>Order ID:$ng User:$pg</h4><br>
	<div style='block-inline;'>
	<input type='button'
	onclick=\"window.open('../../course/certificates/certificate.php?iv=".$iv."&id=".$id."&hrs=".$hrs."&is=1&des=1&key=1','popup','height:100%,width:100%')\"
	value='Download/Print Certificate'> 
	<input type='button'
	onclick=\"window.open('../../course/certificates/marksheet.php?ism=".$val."&iv=".$iv."&id=".$pg."&hrs=".$hrs."&is=1&des=1&key=1','popup','height:100%,width:100%')\"
	value='Download/Print Marksheet'> 
	<input type='button' onclick='window.location.href=\"./certificates-delivery.php/?view=1&completed=yes&iv=".$ng."\"' value='Mark Order as Completed'>
	</div>";
}	
}
if(isset($_GET['completed']))
{
	$r=$_GET['completed'];
	$fs=$_GET['iv'];
	if($r=='yes')
	{
		if(mysql_query("UPDATE delivery SET completed='yes' WHERE ORDERID='$fs'"))
		{
			echo"<h1 style='color:red;background-color:hotpink;'>
			Delivery sucessfully marked as completed
			<a style='color:red' href='./certificates-delivery.php/?view=1&completed=no&iv=".$fs."'>To Reset Click here</a>
			</h1>";
		}
		else
		{
			echo"Error".mysql_error();
		}
	}
	if($r=='no')
	{
		if(mysql_query("UPDATE delivery SET completed='no' WHERE ORDERID='$fs'"))
		{
		echo"<h1 style='color:red;background-color:hotpink;'>Sucessfully Reset Done</h1>";
		}
		else
		{
			echo"Error".mysql_error();
		}
	}
}
?>
</table>