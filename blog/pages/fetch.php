<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >

<?php include '../../contextmenu.php'?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../w3.css">
<link rel='stylesheet' href='../roboto.css'>
<link rel="stylesheet" href="../font-awesome.min.css">
<link rel="stylesheet" href="../blog/w3.css">
<link rel='stylesheet' href='../blog/roboto.css'>
<link rel="stylesheet" href="../blog/font-awesome.min.css">
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<style>
.bgimg-1zahiddefaulttemplatecompanydescription {
  background-position: center;
  background-size: cover;
  background-image: url("../templates/mac.jpg");
  min-height: 5%;
}
html{
	background-color:white;
}
.endfooter{
	background-color:black;
	height:100%
}
</style>
</head>
<?php
if(isset($_GET['v'])){
$LINKER=strtolower($_GET['v']);
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
$flag=0;
$resultfn=mysql_query("SELECT *FROM blog");
while($rowfn=mysql_fetch_array($resultfn))
{
	$a=$rowfn['link'];
	if($a==$LINKER)
	{
		$flag=1;
	}
}
if($flag==0)
{
	echo"<script>window.parent.location='../../404.php'</script>";
}
$resultf=mysql_query("SELECT *FROM blog WHERE link='$LINKER'");
while($rowf=mysql_fetch_array($resultf))
{
	echo "<b><h1 style='font-weight:bold;' align='center'>".$rowf['title']."<br>"."</h1></b>";
	echo $rowf['body'];
}
}
?>
</br>
<div class='endfooter'>
<?php include '../../footer3.php';?>
</div>
