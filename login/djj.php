<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$email=$_POST["email"];
$passf=$_POST["pass"];
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
$result=mysql_query("SELECT *FROM user");
mysql_select_db("studentenrollment",$con);
$result2=mysql_query("SELECT *FROM user WHERE email='$email'");
while($row=mysql_fetch_array($result2))
{
$a=$row['email'];
$b=$row['pass'];
if($email==$a && $passf==$b)
{
session_start();
if($result2 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
while($row=mysql_fetch_array($result2))
{
	$uname=$row['name'];
}
$_SESSION["logined"] = "$a";
echo $a." ".$b."".$uname."<br>";
echo "Session is " . $_SESSION["logined"] . ".<br><br>";
echo "<script type='text/javascript'>location.href = '../user';</script>";
}
else
{
	echo "error".mysql_error();
	echo"<script type='text/javascript'>location.href = './?invalidentry=1';</script>";
}
}
?>