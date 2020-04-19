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
  <title><?php include '../phoneno.php'?>|Change PhoneNo</title>
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
    Enter Your Phone No:<br>
	Example:<br>
    +918675112257<br>
    <input type="text" name="phoneno1" placeholder="Enter Your Office phoneno1" required>
    <input type="text" name="phoneno2" placeholder="Enter Your Office phoneno2" required>
    <input type="submit" name="submit" value="change">
    
  </form>

</body>
</html>


<?php
              
if(isset($_POST['phoneno'])&&isset($_POST['phoneno']))
{
$data=$_POST['phoneno1'];
$fp = fopen('phoneno1.txt', 'w');
fwrite($fp, $data);
fclose($fp);
$data=$_POST['phoneno2'];
$fp = fopen('phoneno2.txt', 'w');
fwrite($fp, $data);
fclose($fp);
}
?>