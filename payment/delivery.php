<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
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
	mysql_select_db("studentenrollment",$con);
	$i=0;
	$result2=mysql_query("SELECT *FROM tdelivery where id='1' && type='normal'");
	 while($row2=mysql_fetch_array($result2))
	{
		$i++;
		$price=$row2['price'];
	}
	$result3=mysql_query("SELECT *FROM tdelivery where id='2' && type='express'");
	 while($row3=mysql_fetch_array($result3))
	{
		$i++;
		$price2=$row3['price'];
	}
	$result4=mysql_query("SELECT *FROM tdelivery where id='3' && type='super express'");
	 while($row4=mysql_fetch_array($result4))
	{
		$i++;
		$price3=$row4['price'];
	}
	if(!isset($_GET['iv']))
	{
		echo"<script>window.location.href='../404.php';</script>";
	}
	$fs=$_GET['iv'];
	?>
	<head>
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
<title>	Delivery|<?php include "../sitetitle.php"?></title>
	</head><body>
	
<?php echo "<div class='rssd'>
<div class='nav'><br>&nbsp;"; include'../sitetitle.php';echo"|Delivery<br><div style='color: #333;'>.</div></div>";?><br>
<table width='50%' height='50%' align='center' bgcolor='red'><tr><td>
<H1 align='center'>SELECT THE DELIVERY METHOD</H1>
</td></tr><tr><td>
<form action='./PaytmKit/TxnTest.php' method='post'>
	<select name="type" style='width:100%;height:40px;'>
        <option name="type" value="normal">Normal Delivery|&#8377 <?php echo $price;?> | Free for pro Users</option>
        <option name="type" value="express">Express Delivery|&#8377 <?php echo $price2;?> </option>
        <option name="type" value="super express">Super Express Delivery|&#8377 <?php echo $price3;?> </option>
      </select>
	  </td></tr>
	  <input type="hidden" name='iv' value="<?php echo $fs; ?>">
	  <tr>
	  <td><input type='submit' value='Next'></td>
	  </tr>
	  </form>
	  </table>