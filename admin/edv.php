<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!--h-->
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
	while($rowsz=mysql_fetch_array($query5))
	{
		$id=$rowsz['part'];
		$iv=$rowsz['iv'];
		$title=$rowsz['title'];
		$description=$rowsz['description'];
		$ism=$rowsz['id'];
		$src="$iv.png";
		echo "<div class='box'>
		<h3><a href='./edv.php/?iv=".$getit."&id=".$id."&ism=".$ism."'><img width='210px;' height='120px;' border='4' src='../course/iv/$src' alt='$title'></img><br>$title part $id</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div><div class='time'></div></div>";
	}
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
		if(mysql_query("UPDATE playlist SET exam='5', title='$title', description='$description' WHERE id='$d'"))
		{
			$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["file"]["tmp_name"], $video.".".$extension);
			echo"<h1 style='color:red;background-color:hotpink;'>Video Sucessfully Updated</h1>";
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