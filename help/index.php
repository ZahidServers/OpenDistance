<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$myfile = fopen("../installation/installation.txt", "r") or die("Unable to open file!");
$zahid=fread($myfile,filesize("../installation/installation.txt"));
fclose($myfile);
if($zahid=='0')
{
	echo"<script>window.location.href='installed.php';</script>";
}
?>
<!doctype html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<html oncontextmenu="return showcontextmenu(event);" >
<?php include '../contextmenu.php'?>
<head>
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<title><?php include '../sitetitle.php'?>|help</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include '../styleindex.css'?>
</head>
<body contenteditable="false">
  <?php include './header.php'; ?>
  <nav>
  <div id="navbar">
  <a href="../">Home</a>
  <a href="../#pricing">Pricing</a>
  <a href="../#alumini">Alumini</a>
  <a href="../contact/">Contact-US</a>
  <a href="../about" onclick="changeabout()">About US</a>
  <a href="../blog" onclick="changeabout()">Blogs</a>
<div id="notlogin" name="notlogin">
<?php 
  if(isset($_SESSION["logined"])){
  $a=$_SESSION["logined"];
  
  if($a == "a")
  {
    echo "<a href='../login/logout.php'>LogOut</a><br>";
  
  }
  else
  {
    echo "<a href='../login/'>LogIn</a><br>";
  }
  }
  else{
	echo "<a href='../login/'>LogIn</a><br>";
  }
  ?>
</div>
</div>
</nav>
<div class="content">
<?php include '../message/mpopup2.php';?>
<style>
iframe{
	height: 800px;
}
</style>
<?php
if(!isset($_GET['searchbar']))
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
$resultf=mysql_query("SELECT *FROM help WHERE id<'4'");
while($rowf=mysql_fetch_array($resultf))
{
	echo "<b><a style='color:white;' href='./pages?pno=".$rowf['link']."'><h5 style='font-weight:bold;padding-left:20px;' >".$rowf['title']."<br>"."</h5></a></b>";
}
}
if(isset($_GET['searchbar']))
{
$k=$_GET['searchbar'];

$terms=explode(" ",$k);
$query="SELECT *FROM help WHERE";
error_reporting(E_ALL & ~E_NOTICE);
foreach($terms as $each)
{
    $i++;
	if($i==1)
	{
		$query.=" link LIKE '%$each%'";
	}
	else
	{
		$query.="OR link LIKE '%$each%'";
	}
}
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
$query=mysql_query($query);
$numrows=mysql_num_rows($query);
if($numrows>0)
{
	echo"<h1>Search Results</h1>";
	echo"<h6> &nbsp;You Searched For '$k'</h6>";
while($rowfz=mysql_fetch_array($query))
{
	echo "
	<b><a style='color:white;' href='./pages?pno=".$rowfz['link']."'><h5 style='font-weight:bold;padding-left:20px;' >".$rowfz['title']."<br>"."</h5></a></b>";
}
}
else{
	echo "No Results found for \"<b>$k</b>\"";
}
}
?>
<?php include '../footer4.php';?>
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>