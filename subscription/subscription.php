<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
session_start();
if(!isset($_SESSION['logined']))
{
	echo"<script>window.location.href='../../404.php'</script>";
}
	$uname=$_SESSION['logined'];
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
	$flagr=0;
	mysql_select_db("studentenrollment",$con);
	$f=mysql_query("SELECT *FROM subscription WHERE user='$uname'");
	while($rownz=mysql_fetch_array($f))
	{
		$uf=$rownz['user'];
		if($uf==$uname)
		{
			$flagr=1;
		}
	}
	if($flagr==1)
	{
		$fs=1;
	}
	else
	{
		$fs=2;
	}
?>
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
<H1 align='center'>SELECT THE PERIOD FOR SUBSCRIPTION<br>50% Discount For New Users Upon Renewal Prices may Double</H1>
</td></tr><tr><td>
<form action='./Paytmkit/TxnTest.php' method='post'>
	<select name="iv" style='width:100%;height:40px;'>
        <option value="3">3 Months</option>
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
      </select>
	  </td></tr>
	  <input type="hidden" name='id' value="<?php echo $fs; ?>">
	  <tr>
	  <td><input type='submit' value='Next'></td>
	  </tr>
	  </form>
	  </table>