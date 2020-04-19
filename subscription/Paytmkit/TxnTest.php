<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
	session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	if(!isset($_SESSION['logined']))
	{
		echo"<script>window.location.href='../../404.php';</script>";
	}
	$local = file("../../host.txt");
	$host=implode(" ",$local);
	$db = file("../../unam.txt");
	$udb=implode(" ",$db);
	$word = file("../../pass.txt");
	$pass=implode(" ",$word);
	$con = mysql_connect($host, $udb, $pass);
	if (!$con) {
    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("studentenrollment",$con);
	$uf=$_SESSION['logined'];
	$result=mysql_query("SELECT *FROM user WHERE email='$uf'");
	 while($row=mysql_fetch_array($result))
	{
		$address=$row['address'];
		$imf=$row['id'];
		$pro=$row['pro'];
	}
	$i=0;
	$result2=mysql_query("SELECT *FROM price WHERE id='1'");
	 while($row2=mysql_fetch_array($result2))
	{
		$i++;
		$price=$row2['price'];
	}
	if(isset($_POST['iv']))
	{
		$time=$_POST['iv'];
	}
	else{
		echo"<script>window.location.href='../../404.php';</script>";
	}
	if(isset($_POST['id']))
	{
		$discount=2;
	}
	else{$discount=1;}
	$pricen=($price*$time)/$discount;
	$pricef=(int)$pricen;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>	Checkout|<?php include "../../sitetitle.php"?></title>
<meta name="GENERATOR" content="Evrsoft First Page">
<style>
body{
margin:0;
}
.rssd a{color:Green;}
.rssd a:hover{color:cyan;}
html{background-color:#4ca3dd;}
.rssd{
color:white;
text-shadow:4px 4px 12px;
}
.rssd table{
	color:black;
	font-weight:bold;
	background-color:white;
	text-shadow:none;
}
.rssd table input{
	width:100%;
	font-size:20px;
}
textarea{
	width:99%;
	font-size:15px;
}
.nav{
overflow: hidden;
background-color: #333;
width:100%;
font-size:25px;
}
</style>
</head>
<body>
<?php echo "<div class='rssd'>
<div class='nav'><br>&nbsp;"; include'../../sitetitle.php';echo"|Subscription<br><div style='color: #333;'>.</div></div>";?>
	<h1 style='padding-left:25%;'>Check Out Page</h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		<table border="1" align='center' width='50%'>
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_IDs" tabindex="1" maxlength="20" size="20"
						name="" autocomplete="off"
						value="<?php $iv=$_POST['iv']; $ord= "ORDS"."$imf"."SU".$iv."SU". rand(10,99); echo $ord; ?>" readonly>
						<input type="hidden" value="<?php echo $ord;?>" name="ORDER_ID" id="ORDER_ID">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="" tabindex="2" maxlength="12" size="12"
					name="" autocomplete="off" value="CUST001<?php echo $imf;?>" readonly></td>
						<input type="hidden" value="<?php echo "CUST001".$imf;?>" name="CUST_ID" id="CUST_ID">
				</tr>
				<!--<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td>--><input type="hidden" id="INDUSTRY_TYPE_ID"
					tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
					<!--</td>
				</tr>-->
				<tr>
				<!--	<td>3</td>
					<td><label>Channel ::*</label></td>
					<td>--><input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
					<!--</td>
				</tr>-->
				<tr>
					<td>3</td>
					<td><label>Amount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name=""
						value="<?php echo $pricef; ?>" readonly>
						<input type="hidden" value="<?php echo $pricef; ?>" name="TXN_AMOUNT" id="TXN_AMOUNT">
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Address*</label></td>
					<td><textarea title="Address*" tabindex="10"
						type="text" name="Address"
						value="<?php echo $address;?>" readonly><?php echo $address;?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan='3' style='color:red; text-shadow: 2px 2px 6px;'>* - Mandatory Fields</td>
				</tr>
				<tr>
					<td colspan='3' align="right"><input value="CheckOut" style='font-weight:bold;' type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>