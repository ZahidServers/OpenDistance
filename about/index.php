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
<!doctype html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<html oncontextmenu="return showcontextmenu(event);" >
<?php include 'contextmenu.php'?>
<head>
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<title><?php include '../sitetitle.php'?>|About Us</title>
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
  <a href="../contact">Contact-US</a>
  <a href="../blog">Blog</a>
  <a class="active" href="./" onclick="changeabout()">About US</a>
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
<div id="frameissss">
<iframe width="100%" oncontextmenu="return showcontextmenu(event);" height="100%" src="aboute.php" frameborder="0" scrolling="no" style=" position: absolute; width:100%; height: 5200px; border: none"></iframe>
</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<BR><BR>
<div style="background-color:black;">
<br><br><br><br>
</div>
<div id="footer">
<?php include '../footer2.php'?>
</div>

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

