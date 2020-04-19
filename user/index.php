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
<html oncontextmenu='return showcontextmenu(event);' >
<link rel='icon' type='image/png' href='../favicon.png' />
<link rel='icon' href='../favicon2.ico' type='image/x-icon'>
<link rel='shortcut icon' href='../favicon2.ico' type='image/vnd.microsoft.icon'>
<link rel='shortcut icon' type='image/x-icon' href='../favicon2.ico' />
<?php 
session_start();
if(isset($_SESSION["logined"]))
{
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
include"../config_expiry_date_user.php";
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
$result2=mysql_query("SELECT *FROM playlist WHERE part=$id AND iv=$iv");
 if(isset($_SESSION["logined"]))
 {
	$uname=$_SESSION['logined'];
	$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("studentenrollment",$con);
 $result=mysql_query("SELECT *FROM user WHERE email='$uname'");
 while($row=mysql_fetch_array($result))
{
$idfdr=$row['id'];
	$uphoto=$row['photo'];
	$fnames=$row['name'];
 }
}
else{
	$user="uname";
	$uphoto="a.jpg";
}
$mycourse="My Courses";
$course="Explore Courses";
$thiscourse="This Course";
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
  <a href='./'><image src='./$uphoto' width='30px' height='30px' style='border-radius: 50%;'> $fnames</a>
  <a href='../'>Home</a>
  <a href='../course/my'>$mycourse</a>
  <a href='../course'>$course</a>
  <a href='../course/mypurchases'>Purchases</a>
  <a href='../subscription/'>Subscription</a>
  <a href='../login/logout.php'>LogOut</a>
</div>";
echo"<head><title>"; include "../sitetitle.php"; echo"|User Panel</title></head>";
echo"</div>
<div class='main'>
";
include "./form.php";
echo" </div>";
}
else{
		echo"<style>
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
.nav{
overflow: hidden;
background-color: #333;
width:100%;
font-size:25px;
}
</style>";
echo "<div class='rssd'>
<div class='nav'><br>&nbsp;"; include'../sitetitle.php';echo"<br><div style='color: #333;'>.</div></div>";
	echo"<center><h1>404:ERROR Not Logined Go Back To <a href='../'>Home Page</a> and login</h1></center>";
}
?>
