<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$myfile = fopen("../installation/installation.txt", "r") or die("Unable to open file!");
$zahid=fread($myfile,filesize("../installation/installation.txt"));
fclose($myfile);
if($zahid=='0')
{
	echo"<script>window.location.href='../installation';</script>";
}
?>
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<title><?php include '../sitetitle.php'?>|Explore Course</title>
<html oncontextmenu="return showcontextmenu(event);" >
<?php 
session_start();
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
if(isset($_GET['iv'])&&isset($_GET['id']))
{
	$iv=$_GET['iv'];
	$id=$_GET['id'];
}
else
{
	$iv=1;
	$id=1;
}
$result=mysql_query("SELECT *FROM playlist WHERE iv=$iv");
$result2=mysql_query("SELECT *FROM playlist WHERE id=$id AND iv=$iv");
 if(isset($_SESSION["logined"]))
 {
    	$uname=$_SESSION['logined'];
$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("studentenrollment",$con);
 $resultf=mysql_query("SELECT *FROM user WHERE email='$uname'");
 while($row=mysql_fetch_array($resultf))
{
$idfdr=$row['id'];
	$urphoto=$row['photo'];
	$user=$row['name'];
 }
	$uphoto="<a href='../user'><image src='../user/$urphoto' width='30px' height='30px' style='border-radius: 50%;'> $user</a>";
	$ur= "<a href='./my'>My Courses</a>
			  <a href='./mypurchases'>Purchases</a>
              <a href='./certificates'>Certificates</a>
			  <a href='../subscription/'>Subscription</a>";
}
else{
	$user="";
	$uphoto="<a href='../login'>LogIn</a>";
	$ur="";
}
$course="Explore Courses";
$thiscourse="This Course";
$npv=5;

echo "
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body {
  font-family: 'Lato', sans-serif;
}

.sidenav {
  height: 100%;
  width: 205px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 30px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 205px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

.sidenav2 {
  height: 100%;
  width: 180px;
  right:10px;
  position: fixed;
  z-index: 0;
  top: 0;
  background-color: transparent;
  overflow-x: hidden;
  padding-top: 20px;
  text-align:left;
}

.sidenav2 a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  text-align:left;
  font-size: 18px;
  color: black;
  display: block;
}

.sidenav2 a:hover {
  background-color:green;
  color: white;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .sidenav2 {padding-top: 10px;}
  .sidenav2 a {font-size: 12px;}
}
</style>
</head>
<body>

<div class='sidenav'>
  $uphoto
  <a href='../'>Home</a>
  $ur
  <a href='./'>$course</a>";
if(isset($_SESSION["logined"]))
{
      echo"<a href='../login/logout.php'>LogOut</a>";
}
echo"
</div>
<div align='right' class='sidenav2'>";
while($row=mysql_fetch_array($result))
{

}
echo"</div>
<div class='main'>
";
include "search.php";
echo" </div>";
?>
