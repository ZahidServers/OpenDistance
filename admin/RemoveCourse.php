<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<?php include 'contextmenu.php'?>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<style>
input[type=text]{
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
font-size: 16px;
background-color: white;
background-image: url('searchicon.png');
background-position: 10px 10px;
background-repeat: no-repeat;
padding: 12px 20px 12px 40px;}
input[type=submit]{
width:120px;
background-color: #4CAF50;
border: none;
color: white;
padding: 15px 6px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}
input[type=submit]:hover{
	background-color: green;
	font-weight:bold;
	text-shadow:8px 8px 12px;
}
</style>
<?php
echo"<center><h2>Search Courses</h2></center>";
?>
<center>
<form action="" method="get" value="">
<input type="text" name="k" value="<?php if(isset($_GET['k'])){echo $_GET['k'];}?>" placeholder="<?php if(!isset($_GET['k'])){echo "Search For Courses";}?>" size="50" autocomplete="off">
<input type="submit" value="search">
</form>
</center>
<div id="results">
<?php
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
if(isset($_GET['k']))
{
$k=$_GET['k'];

$terms=explode(" ",$k);
$query="SELECT *FROM course WHERE";
error_reporting(E_ALL & ~E_NOTICE);
foreach($terms as $each)
{
    $i++;
	if($i==1)
	{
		$query.=" keywords LIKE '%$each%'";
	}
	else
	{
		$query.="OR keywords LIKE '%$each%'";
	}
}
$query=mysql_query($query);
$numrows=mysql_num_rows($query);
if($numrows>0)
{
	echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	</style>";
	while($rowsz=mysql_fetch_assoc($query))
	{
		$iv=$rowsz['iv'];
		$title=$rowsz['name'];
		$description=$rowsz['description'];
		$keywords=$rowsz['keywords'];
		$type=$rowsz['type'];
		$subtype=$rowsz['subtype'];
		$hrs=$rowsz['hrs'];
		$src="$iv.png";
		echo "<div style='vertical-align:top;' class='box'><h3><a href='#'onclick=\"window.open('./rc.php?iv=".$iv."','Edit Course','height:800px,width:900px')\"><div style='float:left;'><img  width='210px;' height='120px;' border='4' src='../course/iv/$src' alt='$title'></img></div><div>$title</a><h3><p style='font-size:15px;'>$description</p><p style='font-size:12px;'>Type:$type <b>|</b> Sub-Type:$subtype <b>|</b> Duration:$hrs</p></div><br></div><br>";
	}
}
else{
	echo "No Results found for \"<b>$k</b>\"";
}
}
if(!isset($_GET['k']))
{
	echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.box{display: inline-block;width:250px;padding-top:none;margin-top:none;vertical-align:top;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	</style>";
	$query5=mysql_query("SELECT *FROM course");
	while($rowsz=mysql_fetch_array($query5))
	{
		$iv=$rowsz['iv'];
		$title=$rowsz['name'];
		$description=$rowsz['description'];
		$keywords=$rowsz['keywords'];
		$type=$rowsz['type'];
		$subtype=$rowsz['subtype'];
		$hrs=$rowsz['hrs'];
		$src="$iv.png";
		echo "<div class='box'>
		<h3><a href='#' onclick=\"window.open('./rc.php?iv=".$iv."','Edit Course','height:800px,width:900px,left=10,top=10,scrollbars=yes,menubar=no')\"><img width='210px;' height='120px;' border='4' src='../course/iv/$src' alt='$title'></img><br>$title</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div>
		<div class='time'>This course is of $hrs hours category:$type:$subtype</div></div>";
	}
}
?>
</div>