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
<?php
session_start();
if(isset($_SESSION['logined1']))
{
echo"<!DOCTYPE html>";
$utc=$_SERVER['REQUEST_URI'];
if(strpos($utc,'/Admin.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/admin.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/ADMIN.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/aDMIN.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/AdMIN.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/ADmIN.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/ADMiN.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/ADMIn.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/adMIN.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/aDMiN.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/aDMIn.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/ADMin.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/ADmIn.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/aDmin.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/adMin.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/admIn.php') !== false){echo"<script>window.location.href='./';</script>";}
if(strpos($utc,'/admiN.php') !== false){echo"<script>window.location.href='./';</script>";}

echo"
<html oncontextmenu='return showcontextmenu(event);'>
    <link rel='icon' type='image/png' href='../favicon.ico'/>";
include 'contextmenu.php';
echo"
<head>
<title>";include '../sitetitle.php';echo"|Admin Panel</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
body {
  font-family: \"Lato\", sans-serif;
}

.sidenav {
  height: 100%;
  width: 180px;
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
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 180px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 10px 10px;
  margin-top:0;
  padding-top:0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class='sidenav'>
  <a href='./'>Home</a>
  <a href='./logout.php'>LogOut</a>
  <a href='?contentadmin=1' onclick='zahid1()'>Content Admin</a>
  <a href='?user-management=1'>User Management</a>
  <a href='?courses=1' >Courses</a>
  <a href='?cetificates-delivery=1' >Delivery</a>
  <a href='?payment=1' >Payments</a>
  <a href='?paytm=1' >Manage Paytm</a>
  <a href='?blog=1' >Blog</a>
  <a href='?help=1' >Help</a>
  <a href='?about=1' >About Us</a>
</div>";
if(isset($_GET['contentadmin']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./Content-Admin.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:650px'></iframe>
</div>";
}
elseif(isset($_GET['user-management']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./usermanagement.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:650px'></iframe>
</div>";
}
elseif(isset($_GET['courses']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./courses.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:650px'></iframe>
</div>";
}
elseif(isset($_GET['cetificates-delivery']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./certificates-delivery.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:650px'></iframe>
</div>";
}
elseif(isset($_GET['payment']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./payment.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:650px'></iframe>
</div>";
}
elseif(isset($_GET['blog']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./blog.php' onmouseenter='hidecontextmenu();' scrolling='yes' style='width:100%;border:none;height:550px'></iframe>
</div>";
}
elseif(isset($_GET['help']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./help.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:650px'></iframe>
</div>";
}
elseif(isset($_GET['paytm']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./paytm.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:550px'></iframe>
</div>";
}
elseif(isset($_GET['about']))
{
	echo"<div class='main' id='tryit'>
<iframe src='./aboutusr.php' onmouseenter='hidecontextmenu();' scrolling='no' style='width:100%;border:none;height:650px'></iframe>
</div>";
}
else{echo"
<div class='main' id='tryit'>
  <h2>Welcome To Admin Panel</h2>
  <h3>Through this you can manage your site.</h3>
  <h4>Tips for managing your site:-</h4>
  <p>1. Add New Courses regularly.</p>
  <p>2. Post New regularly.</p>
  <p>3. Send Emails to Users Regularly.</p>
  <p>4. Add all video in 1080p format.</p>
  <p>5. Upload course trailers on youtube.</p>
  <p>6. Give Discounts.</p>
  <p>7. Conduct Exams Fairly.</p>
  <p>8. Tie up with local colleges and school.</p>
  <p>9. Tie up with some companies.</p>
  <p>10.Advertise your site in paper.</p>
  <p>11.Answer to question relating your site on forums like quora.</p>
  <p>12.Improve SEO.</p>
</div>";}
   echo"
</body>
</html> ";
}
else
{
    include 'login.php';
}
?>
