<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<style>
a{color:blue;}
a:hover{color:purple;}
</style>
<?php include 'contextmenu.php'?>
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
if(isset($_GET['q'])){
	$q=$_GET['q'];
 $resultf=mysql_query("SELECT *FROM user WHERE email LIKE '%$q%' OR name LIKE '%$q%'");
 echo"<table border='1'><tr><th></th><th>ID</th><th>Full Name</th><th>Email</th><th>Gender</th><th>Phone No</th>
 <th>DOB</th><th>Father Name</th><th>Mother Name</th><th>Address</th><th>City</th><th>State</th><th>Country</th>
 <th>Pin Code</th><th>Family Income</th><th>HSC</th><th>SSC</th></tr>";
 $idfdrs=0;
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
	$idfdrs++;
	echo"<tr><th><a href='./RemoveUser.php?q=$q&delete=1&id=$idfdr'>Delete This</a></th><th>$idfdrs</th><td>$user</td><td>$email</td><td>$gender</td><td>$phone</td><td>$dob</td><td>$father</td><td>$mother</td>
	<td>$address</td><td>$city</td><td>$state</td><td>$country</td><td>$pcode</td><td>$fincome</td><td>$hsc</td><td>$ssc</td>
	</tr>";
}
if(isset($_GET['delete']))
{
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    {$link = "https";} 
else
{$link = "http"; }
$link .= "://";
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['REQUEST_URI']; 
	$utcf="$link";
	$uzee="&del=confirm";
	if(!isset($_GET['del'])){
	echo'
	<script>
	var delUrl="$utcf";
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
   document.location.href = "'.$utcf.$uzee.'";
  }
}
	window.onload=confirmDelete();
</script>
	';}
	if(isset($_GET['del'])&&$_GET['del']=="confirm"&&isset($_GET['id']))
	{
		$idsmz=$_GET['id'];
		$sqlrwe="DELETE FROM user WHERE id='$idsmz'";
		if(mysql_query($sqlrwe))
		{
			echo"<h3 style='color:red;background-color:hotpink;'>User Succefully deleted</h3>";
		}
	}
}
}
?>
<form autocomplete="off">
<input type='search' size='50' value="<?php if(isset($_GET['q'])){echo $_GET['q'];}?>" placeholder="<?php if(!isset($_GET['q'])){echo "Search For User Using Email or Name";}?>" name='q' autocomplete="off">
<input type='submit' value='search'></br>
</form>