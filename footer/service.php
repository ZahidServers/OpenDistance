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
  <title><?php include '../service.php'?>|Change Service in footer</title>
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
    Enter The service you offer<br>
	Example:<br>
    Free<br>
	Pro<br>
    <input type="text" name="service1" placeholder="Enter Your Office service1" required>
    <input type="text" name="service2" placeholder="Enter Your Office service2" required>
    <input type="submit" name="submit" value="change">
    
  </form>

</body>
</html>


<?php
              
if(isset($_POST['service'])&&isset($_POST['service']))
{
$data=$_POST['service1'];
$fp = fopen('service1.txt', 'w');
fwrite($fp, $data);
fclose($fp);
$data=$_POST['service2'];
$fp = fopen('service2.txt', 'w');
fwrite($fp, $data);
fclose($fp);
}
?>