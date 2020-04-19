<!DOCTYPE html>
<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();'>
<?php include 'contextmenu.php'?>
<head>
  <title><?php include '../bannertext.php'?>|Change Banner Text</title>
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
    Change banner Text<br>
    Enter Banner Text 1:<br>
	Example:<br>
	Your Course to Success<br>
    <input type="text" name="bannertext" placeholder="Enter Banner Text 1" required><br>
	Enter Banner Text 2:<br>
	Example:<br>
	Build skills with courses, certificates, and degrees online from world-class universities and companies<br>
    <input type="text" name="bannertext2" placeholder="Enter Banner Text 2" required>
    <input type="submit" name="submit" value="change">
    
  </form>

</body>
</html>


<?php
              
if(isset($_POST['bannertext'])||isset($_POST['bannertext2']))
{
$data=$_POST['bannertext'];
$datas=$_POST['bannertext2'];
$fp = fopen('bannertxt1.txt', 'w');
fwrite($fp, $data);
fclose($fp);
$fa = fopen('bannertxt2.txt', 'w');
fwrite($fa, $datas);
fclose($fa);
}
?>