<!DOCTYPE html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" >
<?php include 'contextmenu.php'?>
<head>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
  <title><?php include '../Email.php'?>|Change Email</title>
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
    Enter Your Site Email:<br>
	Example:<br>
    example@yoursite.com<br>
    <input type="text" name="Email" placeholder="Enter Your Site Email" required>
    <input type="submit" name="submit" value="change">
    
  </form>

</body>
</html>


<?php
              
if(isset($_POST['Email']))
{
$data=$_POST['Email'];
$fp = fopen('Email.txt', 'w');
fwrite($fp, $data);
fclose($fp);
}
?>