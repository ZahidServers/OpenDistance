<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html>
<head>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<title>PHP Reanme image example</title>
</head>
<body>

<form action="./try.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
Enter image name :<input type="text" name="filename"><br/>
<input type="submit" value="Upload" name="Submit1">

</form>

<?php

if(isset($_POST['Submit1']))
{ 


$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$name = $_POST["filename"];

move_uploaded_file($_FILES["file"]["tmp_name"], $name.".".$extension);
echo "Old Image Name = ". $_FILES["file"]["name"]."<br/>";
echo "New Image Name = " . $name.".".$extension;

}


?>
</body>
</html>