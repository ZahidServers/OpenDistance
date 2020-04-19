<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu='return showcontextmenu(event);' >
<link rel='icon' type='image/png' href='../../favicon.png' />
<link rel='icon' href='../../favicon2.ico' type='image/x-icon'>
<link rel='shortcut icon' href='../../favicon2.ico' type='image/vnd.microsoft.icon'>
<link rel='shortcut icon' type='image/x-icon' href='../../favicon2.ico' />
<?php 
session_start();
if(isset($_SESSION["logined"]))
{
$local = file("../../host.txt");
$host=implode(" ",$local);
$db = file("../../unam.txt");
$udb=implode(" ",$db);
$word = file("../../pass.txt");
$pass=implode(" ",$word);
$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("studentenrollment",$con);
include"../../config_expiry_date_user.php";
if(isset($_GET['iv'])&&isset($_GET['id']))
{
	$iv=$_GET['iv'];
	$ivfdr=$_GET['iv'];
	$id=$_GET['id'];
	$idm=$_GET['id'];
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
      $resultf=mysql_query("SELECT *FROM user WHERE email='$uname'");
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
}
	$uphoto="../../user/$urphoto";
}
else{
	$user="uname";
	$uphoto="a.jpg";
}
$mycourse="My Courses";
$course="Explore Courses";
$thiscourse="This Course";
$npv=5;
$npva="
  <a href='../../user'><image src='$uphoto' width='30px' height='30px' style='border-radius: 50%;'> $user</a>
  <a href='../my'>$course</a>
  <a href='../'>$mycourse</a>
  <a href='../thiscourse'>$thiscourse</a>
";

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
  <a href='../../user'><image src='$uphoto' width='30px' height='30px' style='border-radius: 50%;'> $user</a>
  <a href='../my'>$mycourse</a>
  <a href='../'>$course</a>
  <a href='../thiscourse'>$thiscourse</a>
  <a href='../mypurchases'>Purchases</a>
  <a href='../certificates'>Certificates</a>
  <a href='../../subscription/'>Subscription</a>
  <a href='../../login/logout.php'>LogOut</a>
</div>
<div align='right' class='sidenav2'>";
while($row=mysql_fetch_array($result))
{
$a=$row['part'];
$iv=$row['iv'];
$id=$row['part'];
echo "<form action='' method='get' name='form' id='form' style='display:none;'>
<input type='text' style='display:none;' value='$iv'></form>";
echo "<a href='?iv=$iv&id=$id'>Part ".$a."</a>";
}
while($row2=mysql_fetch_array($result2))
{
	$video='../storage/'.$idfdr.'zahid'.$idm.'.mp4';
	$title=$row2['title'];
	$description=$row2['description'];
	
}
echo"<head><title>"; include "../../sitetitle.php"; echo"|$title</title></head>";
echo"</div>
<div class='main'><h4>";
    $vrs=explode(' ','$enrolled');
if($enrolled!="")
{
    error_reporting(E_ALL & ~E_NOTICE);
    $mycourses=explode(" ",$enrolled);
    $flag=0;
    for($i=0;$i<=str_word_count($enrolled)+1;$i++)
    {
    $r=$mycourses[$i];
   if ($r==$iv)
    {
     $flag=1;
    }
    }
   if($flag!=1)
   {
       echo "Enroll in this course<form method='post'><input type='text' name='enroll' style='display:none;' value='$iv'><input type='submit' value='Enroll Now!'></form>"; 
   }
    else{
            $test=1;
        }
}
    else
    {
        echo "Enroll in this course<form method='post'><input type='text' name='enroll' style='display:none;' value='$iv'><input type='submit' value='Enroll Now!'></form>"; 
    }
        
    
if(isset($_POST['enroll']))
{
    $enroll=$_POST['enroll'];
    $mycourses=explode(" ",$enrolled);
if($enrolled!="")
{
      $vs="$enrolled $enroll";
        mysql_select_db('studentenrollment');
        mysql_query("UPDATE user SET enrolled='$vs' WHERE name='$uname'");
    
}
    header("Refresh:0");
}
echo "</h4><br>
";
include "../vplayer/index.php";
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
<div class='nav'><br>&nbsp;"; include'../../sitetitle.php';echo"<br><div style='color: #333;'>.</div></div>";
	echo"<center><h1>404:ERROR Not Logined Go Back To <a href='../../'>Home Page</a> and login</h1></center>";
}
?>