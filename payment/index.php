<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<title>Select Course of which you want to order Certificate and marksheet</title>
<?php

echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.box{display: inline-block;width:250px;padding-top:none;margin-top:none;vertical-align:top;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	zahid{
		font-size:18px;
		font-weight:bold;
		text-shadow:2px 2px 6px;
		background-color:#4ca3dd;
		padding-top:none;
		margin:0;
		width:100%;
	}
	.zahid{
		font-size:18px;
		font-weight:bold;
		text-shadow:2px 2px 6px;
		background-color:#4ca3dd;
		padding:none;
		margin:0;
		width:100%;	}
	zahid a{
		color:green;
	}
	zahid a:hover{
		color:cyan;
	}
	</style>";
session_start();
if(isset($_SESSION['logined']))
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
}
}

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$randomcharacter=substr(str_shuffle($permitted_chars), 0, 25);
$mycourses2=explode(" ",$completed);
if($completed!="")
{
    echo"<center><h1>Buy HardCopy Certificates and Marksheets of Courses you Completed</h1></center>";
for($ir=0;$ir<=str_word_count($completed)+1;$ir++)
{
    $r=$mycourses2[$ir];
    $ivsm=$r;
    if($ivsm!=""){
    $query6=mysql_query("SELECT *FROM course WHERE iv=$ivsm");
    error_reporting(E_ERROR | E_PARSE);
	while($rowsz=mysql_fetch_array($query6))
	{
		$iv=$rowsz['iv'];
		$title=$rowsz['name'];
		$description=$rowsz['description'];
		$keywords=$rowsz['keywords'];
		$type=$rowsz['type'];
		$subtype=$rowsz['subtype'];
		$hrs=$rowsz['hrs'];
		$src="$iv.png";
		echo "<form id='form1' action='./certificate.php' method='post'>
        <input type='hidden' name='id' value='$user'/>
        <input type='hidden' name='iv' value='$title'/>
        <div class='box'>
		<h3><a href='./delivery.php?iv=$iv' >
		<img width='210px;' height='120px;' border='4' src='../course/iv/$src' alt='$title'></img><br>$title</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div>
		<div class='time'>This course is of $hrs hours category:$type:$subtype</div></div></form>";
	}
    }
}
}
else {
    echo "<center><h5>Not Completed Any Course</h5></center>";
}
?>