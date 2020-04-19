<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
if(isset($_GET['pno']))
{
	$irt=$_GET['pno'];
}
else
{
	echo"<script>window.location.href='../../404.php'</script>";
}
?>
<!doctype html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<html oncontextmenu="return showcontextmenu(event);" >
<?php include '../../contextmenu.php'?>
<head>
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<title><?php include '../../sitetitle.php'?>|Blogs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include '../../styleindex.css'?>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight +160+ 'px';
  }
</script>
</head>
<body contenteditable="false">
  <?php include './header.php'; ?>
  <nav>
  <div class='nav' id="navbar">
  <a href="../../">Home</a>
  <a href="../../#pricing">Pricing</a>
  <a href="../../#alumini">Alumini</a>
  <a href="../../contact/">Contact-US</a>
  <a href="../../about" onclick="changeabout()">About US</a>
<div id="notlogin" name="notlogin">
<?php 
  if(isset($_SESSION["logined"])){
  $a=$_SESSION["logined"];
    echo "<a href='../../login/logout.php'>LogOut</a><br>";
  }
  else{
	echo "<a href='../../login/'>LogIn</a><br>";
  }
  ?>
</div>
</div>
</nav>
<div class="content">
<?php include '../../message/mpopup2.php';?>
<style>
html, body, iframe, embed { width:100%; }
</style>
<div class='iframe'>
<iframe style='z-index:0;' src="fetch.php?v=<?php echo $irt; ?>" frameborder="0" scrolling="no" onload="resizeIframe(this)" />
</div>
<?php include '../../footer3.php';?>
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
<script type="application/javascript">

</script>
