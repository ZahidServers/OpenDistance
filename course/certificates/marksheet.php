<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php 
session_start();
if(!isset($_SESSION['logined']))
	{
		if(!isset($_SESSION['logined1']))
	{
		echo"<script>window.location.href='../../404.php';</script>";
	}
	}
?>
<html>
<head>
<title><?php include "../../sitetitle.php"?>|Marksheet</title>
<script>
function myFunction() {
  window.print();
}
</script>
<style>
img {
  background: transparent;
}
h1{
	  font-size: 60px;
}
.nav{
	background-color:black;
	padding-top:9px;
	padding-bottom:9px;
	padding-left:0;
	padding-right:0;
	width:100%;
	margin-bottom:none;
}
body{
	padding:0;
	margin:0;
}
table{
	padding:0;
	margin:none;
	background-image:url(marksheet.jpg);
	border: 10px solid transparent;
	padding: 15px;
	border-image: url(mborder.png) 30 round;
}
table th, td{
  border: 2px solid black;
}
@media print {
    #printbtn {
        display :  none;
}
.nav {
        display :  none;
}
}
</style></head>
<body>
<div class='nav'>
&nbsp;&nbsp;&nbsp;<input type="button" id="printbtn" value="Print Marksheet" onclick="window.print();" />
&nbsp;&nbsp;<input type="button" id="printbtn" onclick="window.location.href ='./'" value="goback" />
&nbsp;&nbsp;<input type="button" id="printbtn" onclick="window.location.href ='../../user'" value="User Panel" />
&nbsp;&nbsp;<input type="button" id="printbtn" onclick="window.location.href ='../../'" value="Home" />
&nbsp;&nbsp;<input type="button" id="printbtn" onclick="window.location.href ='../'" value="Explore Courses" />
&nbsp;&nbsp;<input type="button" id="printbtn" onclick="window.location.href ='../my'" value="My Courses" />
</div>
<table border='1' width='100%'>
<?php
         $name="abc";
         $id="123";
         $fullname=$_GET['id'];
         $course=$_GET['iv'];
         $ism=$_GET['ism'];
         $hrs=$_GET['hrs'];
         $getdate=date("Y/m/d");
         $signataire = "Certificate Generated on $getdate";
		 $lines = file("../../sitetitle.php");
		 $sitetitle=implode(" ",$lines);
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
 $resultf=mysql_query("SELECT *FROM user WHERE email='$fullname'");
 while($rowf=mysql_fetch_array($resultf))
{
    $idfdr=$rowf['id'];
	$urphoto=$rowf['photo'];
    $enrolled=$rowf['enrolled'];
    $completed=$rowf['completed'];
    $email=$rowf['email'];
    $phone=$rowf['phone'];
    $dob=$rowf['dob'];
    $gender=$rowf['gender'];
    $father=$rowf['father'];
    $mother=$rowf['mother'];
    $city=$rowf['city'];
    $state=$rowf['state'];
    $pcode=$rowf['pcode'];
    $country=$rowf['country'];
    $fincome=$rowf['fincome'];
    $address=$rowf['address'];
    $yhsc=$rowf['yhsc'];
    $hsc=$rowf['hsc'];
    $ssc=$rowf['ssc'];
    $yssc=$rowf['yssc'];
	$name=$rowf['name'];
 }
echo"<tr><th colspan='2'><br><h1><img src='../../favicon.png' style='background: transparent;' width='50px' height='50px'>
$sitetitle - Marksheet</h1></th></tr>";
echo"<tr><th colspan='2'>Marksheet of the course $course</th></tr>
<tr><th><img src='../../user/$idfdr.png' width='100px' height='100px'><br>Student Photo</th><th >Student Name:$name</th></tr>
<tr><th>Student Mother Name:$mother</th><th>Student Email Id:$email</th></tr>
<tr><th>Student Father Name:$father</th><th>Student Gender:$gender</th></tr>
<tr><th>Student Date Of Birth:$dob</th><th>Student Phone No:$phone</th></tr>
<tr><th>Student SSC Percentage:$ssc</th><th>Student Year of Passing:$yssc</th></tr>
<tr><th>Student HSC Percentage:$hsc</th><th>Student Year of Passing:$yhsc</th></tr>
<tr><th colspan='2'>Address: $address $city $state $country $pcode</th></tr>
<tr><th colspan='2'>Percentage of the course $course</th></tr>
<tr><th>Part</th><th>Percentage</th></tr>";
 $resultn=mysql_query("SELECT *FROM uid WHERE user='$fullname' AND course='$ism' ORDER BY part");
 while($rowf=mysql_fetch_array($resultn))
{
	$partz=$rowf['part'];
	echo "<tr><th>Part :{$rowf['part']} Test</th>".
         "<td>Percentage: {$rowf['marks']}%</td></tr>";
}
$query = "SELECT SUM(marks) FROM uid WHERE user='$fullname' AND course='$ism' ORDER BY part"; 
$rf=mysql_query($query);
while($rowto = mysql_fetch_array($rf)){
	echo "<th>Total Percentage</th>"."<th>".$rowto['SUM(marks)']/$partz."</th>";
	echo "<br />";
}
?>
</table>
</body>
</html>