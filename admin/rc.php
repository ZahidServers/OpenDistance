<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<style>red{color:red;text-shadow:1px 1px 4px;}
div {
	width:200px;
	height:80px;
  background-image: url("button.png");
    background-size: 200px 80px;
	  background-position: right bottom, left top;
  background-repeat: no-repeat, repeat;
	text-align: center;display: inline-block;
	color:white;
}
div a{text-align: center;display: inline-block;z-index:1;top:20px;}
</style>
<?php
$s=$_GET['iv'];
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
if(!isset($_GET['confirm']))
{
	echo"<h1>Do You Want To Delete This Course?<br><red>Warning:This will also Delete this course for every user who completed his/her course and he/she cant even acess the certificate; certificates generated will be no longer valid</red></h1>";
	echo"<a href='?iv=".$s."&confirm=1'><div><h1>Confirm</h1></div></a>&nbsp;";
	echo"<a href='#' onclick='javascript:window.close();'><div><h1>Cancel</h1></div></a>";
}
if(isset($_GET['confirm']))
{
	if(mysql_query("DELETE FROM course WHERE iv='$s'"))
	{
		echo"<h1 style='color:red;background-color:hotpink;'>Record Sucessfully Updated</h1>";
	}
	else{
		echo"<h1 style='color:red;background-color:hotpink;'>Error".mysql_error()."</h1>";
	}
}
?>