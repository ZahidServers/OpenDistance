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
mysql_select_db("studentenrollment",$con);
 $resultf=mysql_query("SELECT *FROM user");
 echo"<table border='1'><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Gender</th><th>Phone No</th>
 <th>DOB</th><th>Father Name</th><th>Mother Name</th><th>Address</th><th>City</th><th>State</th><th>Country</th>
 <th>Pin Code</th><th>Family Income</th><th>HSC</th><th>SSC</th></tr>";
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
	$user=$rowf['name'];
	echo"<tr><th>$idfdr</th><td>$user</td><td>$email</td><td>$gender</td><td>$phone</td><td>$dob</td><td>$father</td><td>$mother</td>
	<td>$address</td><td>$city</td><td>$state</td><td>$country</td><td>$pcode</td><td>$fincome</td><td>$hsc</td><td>$ssc</td>
	</tr>";
 }
?>