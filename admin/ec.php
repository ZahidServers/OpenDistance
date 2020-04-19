<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!--hh-->
<style>
input[type=text] {
  width: 100%;
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
	  font-size: 20px;
	  font-weight: bold;
	  width:80%;
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
$f=$_GET['iv'];
if(isset($_POST['name']))
{
	$name1=$_POST['name'];
	$playlist1=$_POST['playlist'];
	$keywords1=$_POST['keywords'];
	$type1=$_POST['type'];
	$subtype1=$_POST['subtype'];
	$hrs1=$_POST['hrs'];
	$difficulty1=$_POST['difficulty'];
	$exams1=$_POST['exams'];
	$ratings1=$_POST['ratings'];
	$description1=$_POST['description'];
	$sql="UPDATE course SET name='$name1',playlist='$playlist1',keywords='$keywords1',type='$type1',subtype='$subtype1',
	hrs='$hrs1',difficulty='$difficulty1',exams='$exams1',ratings='$ratings1',description='$description1' WHERE iv=$f";
	if(mysql_query($sql))
	{
		echo"<h1 style='color:red;background-color:hotpink;'>Records Successfully updated</h1>";
	}
	else{echo"Error:".mysql_error()."";}
}
$query5=mysql_query("SELECT *FROM course WHERE iv='".$f."'");
while($rowz=mysql_fetch_array($query5))
{
	$name=$rowz['name'];
	$playlist=$rowz['playlist'];
	$keywords=$rowz['keywords'];
	$type=$rowz['type'];
	$subtype=$rowz['subtype'];
	$hrs=$rowz['hrs'];
	$difficulty=$rowz['difficulty'];
	$exams=$rowz['exams'];
	$mexams=$rowz['mexam'];
	$ratings=$rowz['ratings'];
	$description=$rowz['description'];
}

echo"
<form method='post'>
<table>
<tr>
<th>Course Name</th>
<td><input type='text' name='name' value='$name' required></td>
</tr>
<tr>
<th>playlist</th>
<td><input type='text' name='playlist' value='$playlist'></td>
</tr>
<tr>
<th>keywords</th>
<td><textarea type='text' name='keywords' required>$keywords</textarea></td>
</tr>
<tr>
<th>type</th>
<td><input type='text' name='type' value='$type' required></td>
</tr>
<tr>
<th>Sub Type</th>
<td><input type='text' name='subtype' value='$subtype' required></td>
</tr>
<tr>
<th>hours</th>
<td><input type='number' name='hrs' value='$hrs' min='0' required></td>
</tr>
<tr>
<th>Difficulty</th>
<td><input type='number' name='difficulty' value='$difficulty' min='0' required></td>
</tr>
<tr>
<th>No of Exams</th>
<td><input type='number' name='exams' value='$exams' min='0' required></td>
</tr>
<tr>
<th>Ratings</th>
<td><input type='number' name='ratings' value='$ratings' min='0' max='5'></td>
</tr>
<tr>
<th>Description</th>
<td><textarea type='text' name='description' required>$description</textarea></td>
</tr>
<tr>
<th><input value='update' type='submit'></th>
</tr>
</table>
</form>";?>