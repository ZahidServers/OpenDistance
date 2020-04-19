<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<style>
input[type=text] {
  width: 500px;
  padding: 2px 5px;
  margin: 4px 0;
  box-sizing: border-box;
}
input[type=number] {
  width: 100%;
  padding: 2px 5px;
  margin: 4px 0;
  box-sizing: border-box;
}
input[type=date] {
  width: 100%;
  padding: 5px 10px;
  margin: 4px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 5px 10px;
  margin: 4px 0;
  box-sizing: border-box;
}
textarea {
  width: 100%;
  height: 120px;
  padding: 5px 10px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 2px;
  background-color: #f8f8f8;
  resize: auto;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
table{
	  font-weight: bold;
}
</style>
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
if(isset($_POST['name']))
{
	$id=1;
	$result=mysql_query("SELECT *FROM course");
	while($row=mysql_fetch_array($result))
	{
		$idz=$row['id'];
		$id++;
	}
	$name=$_POST['name'];
	$playlist=$_POST['playlist'];
	$keywords=$_POST['keywords'];
	$type=$_POST['type'];
	$subtype=$_POST['subtype'];
	$hrs=$_POST['hrs'];
	$difficulty=$_POST['difficulty'];
	$exams=$_POST['exams'];
	$description=$_POST['description'];
	if(mysql_query("INSERT INTO course (id,iv,mexam,name,playlist,keywords,type,subtype,hrs,difficulty,exams,description)
		VALUES('$id','$id','v','$name','$playlist','$keywords','$type','$subtype','$hrs','$difficulty','$exams','$description')"))
		{
			echo"<h1 style='color:red;background-color:hotpink;'>Record Sucessfully Updated</h1>";
		}
	else
	{
		echo"<h1 style='color:red;background-color:hotpink;'>Error:".mysql_error()."</h1>";
	}
}

?>
<table width='100%'>
<form method='post'><tr><td>
<label>Enter Title/Name of The Course</label></td><td>
<input type='text' name='name' placeholder='Enter Title/Name of The Course' required></br></td></tr><tr><td>
<label>Enter Playlist Details</label></td><td>
<input type='text' name='playlist' placeholder='Enter Playlist Details' required></td></tr><tr><td>
<br><label>Enter Keywords with spaces no commas or special characters</label></td><td>
<textarea type='text' name='keywords' placeholder='Enter Keywords with spaces no commas or special characters' required></textarea></td></tr><tr><td>
<br><label>Enter the type</label></td><td>
<input type='text' name='type' placeholder='Enter the type' required></td></tr><tr><td>
<br><label>Enter the subtype</label></td><td>
<input type='text' name='subtype' placeholder='Enter the subtype' required></td></tr><tr><td>
<br><label>Select total no of hrs of course</label></td><td>
<input type='number' name='hrs' placeholder='Select total no of hrs of course' min="0" required></td></tr><tr><td>
<br><label>Select Difficulty Level</label></td><td>
<input type='number' name='difficulty' placeholder='Select Difficulty Level'min="0" required> </td></tr><tr><td>
<br><label>Select no of exams</label></td><td>
<input type='number' name='exams' placeholder='Select no of exams' min="0" required></td></tr><tr><td>
<br><label>Enter Description</label></td><td>
<textarea type='text' name='description' placeholder='Enter Course Description' required></textarea></td></tr></table>
<input type='submit' value='create'>
</form>