<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<form action="./upload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1">

</form>

<?php

if(isset($_POST['Submit1']))
{ 


$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$name = "i";

move_uploaded_file($_FILES["file"]["tmp_name"], $name.".".$extension);
echo "Image ". $_FILES["file"]["name"]." Succesfully Updated";

}


?>