<!DOCTYPE html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();'>
<?php include 'contextmenu.php'?>
<head>
  <title><?php include '../sitetitle.php'?>|Change CountDown Date</title>
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
    Enter New Date and Time in Following Format:<br>
	Month date,Year hrs:mins:seconds<br>
	Example:<br>
	Jan 5, 2028 15:37:25<br>
    <input type="text" name="jscount" placeholder="Enter date and time" required>
    <input type="submit" name="submit" value="change">
    
  </form>

</body>
</html>


<?php
              
if(isset($_POST['jscount']))
{
$data=$_POST['jscount'];
$fp = fopen('data.txt', 'w');
fwrite($fp, $data);
fclose($fp);
}
?>