<!DOCTYPE html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<?php include 'contextmenu.php'?>
<head>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
  <title><?php include '../sitetitle.php'?>|Change Site Title</title>
 <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

form {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 20px;
  font-size:20px;
}
  </style>
</head>
<body>
  <form method="post">
    Enter Announcement:<br>
	Example:<br>
	Today there will be holiday, tommorow free note. Abhishiekh bachan is coming to meet us. Etc etc etc<br>
    <input type="text" name="marquee" placeholder="Enter Site Announcement" required>
    <input type="submit" name="submit" value="change">
    
  </form>

</body>
</html>


<?php
              
if(isset($_POST['marquee']))
{
$data=$_POST['marquee'];
$fp = fopen('marquee.txt', 'w');
fwrite($fp, $data);
fclose($fp);
}
?>