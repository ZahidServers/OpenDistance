<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!DOCTYPE html>
<html oncontextmenu='return showcontextmenu(event);'>
<?php
include 'contextmenu.php';
?>
<head>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
  <script src="../help/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="../help/tinymce/jquery.min.js"></script>
  <script>tinymce.init({selector:'textarea#fst',branding: false,  contextmenu: "link image imagetools table spellchecker",
  plugins:'code save link autoresize image media lists pageembed charmap preview contextmenu pagebreak searchreplace wordcount visualblocks table visualchars code fullscreen insertdatetime nonbreaking emoticons template paste textcolor',
  statubar: true,
    min_height: 350,
	  allow_unsafe_link_target: true,
	    keep_styles: true,
	    extended_valid_elements: 'style[type|src] head script[src|async|defer|type|charset]',
		 content_css: [
    '../help/font-awesome.min.css',
	'../help/roboto.css',
    '../help/w3.css',
    '../help/defaultcompanydescription.css',
	'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
	],
	templates : [
    {
      title: "Job Resume",
	  content:"<head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='../w3.css'><link rel='stylesheet' href='../roboto.css'><link rel='stylesheet' href='../font-awesome.min.css'><link rel='stylesheet' href='../help/w3.css'><link rel='stylesheet' href='../help/roboto.css'><link rel='stylesheet' href='../help/font-awesome.min.css'></head>",
      url: "../help/templates/job1.html",
      description: "An example of how you can create pages for your help pages"
    },
	{
      title: "Company Description",
	  content:"<head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='../w3.css'><link rel='stylesheet' href='../roboto.css'><link rel='stylesheet' href='../font-awesome.min.css'><link rel='stylesheet' href='../help/w3.css'><link rel='stylesheet' href='../help/roboto.css'><link rel='stylesheet' href='../help/font-awesome.min.css'></head>",
      url: "../help/templates/company_description.html",
      description: "An example of how you can create pages for your Faq"
    },
	]
  });
 $( document ).ready(function() {
 
  $('#buttonpost').on("click", function(){
   tinyMCE.triggerSave();
   var value = $("textarea#fst").val();  
   $("#display-post").html(value);
   $(".texteditor-container").hide();
   return false;
  });
 
 }); 
function updateIframe(){
        var myFrame = $("#fst_ifr").contents().find('body');
        var textareaValue = $("textarea").val();
        myFrame.html(textareaValue);
    } 
  </script>
  <script>
  function post() {
  document.getElementById("myForm").submit();
}
  </script>
<style>
  a{color:green;}
  a:hover{color:hotpink;}
  </style>
</head>
<body>
<?php
$a= $_SERVER['REQUEST_URI']; 
if($a=="/admin/help.php")
{echo"
<h1>Create/Edit help pages</h1>
<h3><a href='./help.php?create=1'>Click here</a> to create a new page</h3>
<h3><a href='./help.php?edit=1'>Click here</a> to Edit Existing page</h3>";
}
?>
<?php
	if(isset($_GET['k']))
{
$k=$_GET['k'];
	echo"<h1>Select the Help Page</h1>";
	echo"<center>
	<form method='get' action='./help.php'>
	<input type='text' style='width:250px;' value='$k' name='k' autocomplete='off'><input type='submit' value='Search'>
	</form></center>";
$terms=explode(" ",$k);
$query="SELECT *FROM help WHERE";
error_reporting(E_ALL & ~E_NOTICE);
foreach($terms as $each)
{
    $i++;
	if($i==1)
	{
		$query.=" title LIKE '%$each%'";
	}
	else
	{
		$query.="OR title LIKE '%$each%'";
	}
}
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
	$ist=0;
	while($rowsz=mysql_fetch_assoc($query))
	{
		$ist++;
		echo "<h4><a href='./help.php?update=".$rowz['id']."'>$ist .".$rowsz['title']."</a></h4>";
	}
}
else{
	echo "No Results found for \"<b>$k</b>\"";
}
}
?>
<?php
if(isset($_GET['edit']))
{
	 $local = file("../host.txt");
$host=implode(" ",$local);
$db = file("../unam.txt");
$udb=implode(" ",$db);
$word = file("../pass.txt");
$pass=implode(" ",$word);
$con = mysql_connect($host, $udb, $pass);
	echo"<h1>Select the Help Page</h1>";
	echo"<center>
	<form method='get' action='./help.php'>
	<input type='text' style='width:250px;' name='k' placeholder='Search For help page' autocomplete='off'><input type='submit' value='Search'>
	</form></center>";
if(!isset($_GET['k']))
{
	echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.box{display: inline-block;width:250px;padding-top:none;margin-top:none;vertical-align:top;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	</style>";
	mysql_select_db("studentenrollment");
	$query=mysql_query("SELECT *FROM help WHERE id<6");
	if($query === false){
    throw new Exception(mysql_error($con));
}
$ist=0;
	while($rowsz=mysql_fetch_array($query))
	{
		$ist++;
		echo "<h4><a href='./help.php?update=".$rowsz['id']."'>$ist .".$rowsz['title']."</a></h4>";
	}
}
}
?>
<?php
if(isset($_GET['update'])){
	$updates=$_GET['update'];
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
	$query=mysql_query("SELECT *FROM help WHERE id='$updates'");
	while($rowsz=mysql_fetch_array($query))
	{
		$title=$rowsz['title'];
		$link=$rowsz['link'];
		$body=$rowsz['body'];
	}
	echo"<h4>Update the help '$title'</h4>";
	if(isset($_POST['fs']))
{
 $fs=$_POST["fs"];
 $titlef=$_POST["title"];
 $linker = strtolower($title);  
 $rf=mysql_real_escape_string($fs);
 if(mysql_query("UPDATE help SET link='$linker',title='$title',body='$rf' WHERE id='$updates'"))
 {
	echo"<h1 style='top:0;color:red;background-color:hotpink;'>Sucessfully Database Updated</h1>";
 }
 else{
	echo"<h1 style='top:0;color:red;background-color:hotpink;'>Error:".mysql_error()."</h1>";
 }
}
	echo"<form action='./help.php?update=1' id='myForm' method='post'>
<table style='width:100%'><tr><th style='width:10%' align='left'>Page Title:</th><td>
<input name='title' style='width:98%;padding:4px 4px 4px;' type='text' value='$title' value='$title' required></td></tr></table>
<textarea name='fst' id='fst'>";if(isset($_POST['fs'])){echo $fs;}else{echo $body;} echo"</textarea>
  <input type=\"button\" id=\"buttonpost\" value=\"Save Content\"  />
<textarea style='display:none;' name='fs' id='display-post'></textarea>
<input type='submit' value='post'>
</form>
 <div id=\"\" style=\"width:700px;\" ></div>
";
}
?>
<?php
if(isset($_GET['create'])){
	$error=0;
	if(isset($_POST['fs']))
{
 $fs=$_POST["fs"];
 $title=$_POST["title"];
    $linker = strtolower($title);  
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
  $resultf=mysql_query("SELECT *FROM help");
  $flag=0;
  while($rowf=mysql_fetch_array($resultf))
  {
	$r=$rowf['link'];
	if($r==$linker)
	{
		$flag=1;
	}
  }
if($flag!=1)
{
	$rf=mysql_real_escape_string($fs);
 if(mysql_query("INSERT INTO help (link,title,body) VALUES('$linker','$title','$rf')"))
 {
	echo"<h1 style='top:0;color:red;background-color:hotpink;'>Sucessfully Database Updated</h1>";
 }
 else{
	echo"<h1 style='top:0;color:red;background-color:hotpink;'>Error:".mysql_error()."</h1>";
 }
}
else{
		echo"<h1 style='top:0;color:red;background-color:hotpink;'>Error:This help Page Already Exists</h1>";
		$error=1;
}
}
if($error==0){$fs="Design your page design here!!";$title='';}
 echo"<form action='./help.php?create=1' id='myForm' method='post'>
<table style='width:100%'><tr><th style='width:10%' align='left'>Page Title:</th><td>
<input name='title' style='width:98%;padding:4px 4px 4px;' type='text' value='$title' placeholder='Enter Page Title' required></td></tr></table>
<textarea name='fst' id='fst'>$fs</textarea>
  <input type=\"button\" id=\"buttonpost\" value=\"Save Content\"  />
<textarea style='display:none;' name='fs' id='display-post'></textarea>
<input type='submit' value='post'>
</form>
 <div id=\"\" style=\"width:700px;\" ></div>
";
}
  ?>
</body>
</html>