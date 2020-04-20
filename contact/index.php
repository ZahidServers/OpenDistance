<!doctype html>
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
<html oncontextmenu="return showcontextmenu(event);" >
<?php include '../contextmenu.php'?>
<head>
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<title><?php include '../sitetitle.php'?>|Contact Us</title>
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
  <a class="active" href="./">Contact-US</a>
  <a href="../about" onclick="changeabout()">About US</a>
    <a href="../blog">Blog</a>
<div id="notlogin" name="notlogin">
<?php 
  if(isset($_SESSION["logined"])){
  $a=$_SESSION["logined"];
    echo "<a href='../login/logout.php'>LogOut</a><br>";
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
<iframe width="100%" height='100%' id='myIframe' src="Contact2.php" onmouseenter="hidecontextmenu();" oncontextmenu="return showcontextmenu(event);" frameborder="0" scrolling="no" style=" position: absolute; width:100%; border: none"></iframe>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br>
<?php include '../footer2.php';?>
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
