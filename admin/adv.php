<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!--hh-->
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
$getit=$_GET['iv'];
if(!isset($_GET['id'])){
	echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.box{display: inline-block;width:250px;padding-top:none;margin-top:none;vertical-align:top;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	</style>";
	$query5=mysql_query("SELECT *FROM playlist WHERE iv='$getit'");
	$query6=mysql_query("SELECT *FROM playlist");
	while($rowsz=mysql_fetch_array($query5))
	{
		$id=$rowsz['part'];
		$iv=$rowsz['iv'];
		$title=$rowsz['title'];
		$description=$rowsz['description'];
		
		$src="$iv.png";
		echo "<div class='box'>
		<h3><a href='#'><img width='210px;' height='120px;' border='4' src='../course/iv/$src' alt='$title'></img><br>$title part $id</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div><div class='time'></div></div>";
	}
	while($rowz=mysql_fetch_array($query6))
	{
		$ism=$rowz['id'];
	}
	$id=$id+1;
	$ism=$ism+1;
echo"<h1 style='top:2px;position:fixed;'><a href='./adv.php/?iv=".$getit."&id=".$id."&ism=".$ism."'><input style='top:2px;position:fixed;' type='button' value='Click Here To Add New Video'></a></br></h1>";

}
if(isset($_GET['id']))
{
	$n=$_GET['id'];
	$d=$_GET['ism'];
	$video='../course/storage/'.$getit.'zahid'.$n;
	$exam=5;
	if(isset($_POST['title']))
	{
		
		$title=$_POST['title'];
		$description=$_POST['description'];
		if(mysql_query("INSERT INTO playlist (exam,id,iv,part,title,description) VALUES('5','$d','$getit','$n','$title','$description')"))
		{
			$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["file"]["tmp_name"], $video.".".$extension);
			echo"<h1 style='color:red;background-color:hotpink;'>Video Sucessfully Uploaded</h1>";
		}
		else{
			echo"<h1 style='color:red;background-color:hotpink;'>Error:".mysql_error()."</h1>";
		}
	}
	echo"<table>
	<form enctype='multipart/form-data' method='post'>
		<tr>
			<td>
				<label>Title</label>
			</td>
			<td>
				<input type='text' name='title' required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Description</label>
			</td>
			<td>
				<textarea name='description' required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>UPLOAD MP4 VIDEO ONLY</label>
			</td>
			<td>
				<input type='file' name='file' accept='video/*' required>
			</td>
		</tr>
		<tr>
			<td>
				<input type='submit' value='Upload'>
			</td>
		</tr>
	</form>
</table>";
}
?>