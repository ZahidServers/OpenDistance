<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$myfile = fopen("./installation/installation.txt", "r") or die("Unable to open file!");
$zahid=fread($myfile,filesize("./installation/installation.txt"));
fclose($myfile);
if($zahid=='0')
{
	echo"<script>window.location.href='installed.php';</script>";
}
?>
<!doctype html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<link rel="icon" type="image/png" href="favicon.png" />
<link rel="icon" href="favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="favicon2.ico" />
<html oncontextmenu="return showcontextmenu(event);" >
<?php include 'contextmenu.php'?>
<head>
<link rel="icon" type="image/png" href="favicon.png" />
<link rel="icon" href="favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="favicon2.ico" />
<title><?php include 'sitetitle.php'?>|Welcome to Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'styleindex.css'?>
</head>
<body contenteditable="false">
  <?php include 'header.php'; ?>
<?php include 'navs.php'; ?>
<div class="content">
<?php include 'message/mpopup.php';?>
<div id="change">
<div id="homess">
<?php include 'banner.php'; ?>
</div>
<?php include 'slider.php'; ?>
<div id="pricing">
<?php include 'banner2.php' ;?>
<?php include 'jscounter\jscountup.php' ;?>
<div id="alumini" class="alumini">
<iframe height="100%" onmouseenter='hidecontextmenu();' src="alslider2.php" frameborder="0" scrolling="no" style="width:100%;position: absolute; height: 70%; border: none"></iframe> </div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
</div>
<div id="footer">
<?php include 'footer.php'?>
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



</body></html>