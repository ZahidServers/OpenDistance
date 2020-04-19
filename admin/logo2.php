<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$f=$_GET['iv'];
if(isset($_POST['Submit1']))
{ 


$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$pname = "../course/iv/"."$f";

move_uploaded_file($_FILES["file"]["tmp_name"], $pname.".".$extension);
echo"<h1 style='color:red;background-color:hotpink;'>Sucessfully image updated</h1>";
}?>
<form enctype="multipart/form-data" accept="image/png" method="post">
Select image in PNG Format :
<input type="file" name="file" accept="image/png"><br>
<input type="submit" value="Update Image" name="Submit1"></form></div>
