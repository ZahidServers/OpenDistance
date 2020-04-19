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
  <title><?php include '../aluminigrp.php'?>|Change Alumini</title>
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

.form {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 20px;
  font-size:15px;
  font-weight:bold;
}
  </style>
</head>
<body>
<div class="form">
  <form method="post">
    Enter key:<br>
    <input type="text" name="key" placeholder="Enter Key" required><br>
	Enter MID:<br>
    <input type="text" name="mid" placeholder="Enter MID" required><br>
	Enter Website:<br>
    <input type="text" name="website" placeholder="Enter Website" required><br>
	Select Mode:<br>
	<select name='mode' >
	<option value="PROD">PROD</option>
	<option value="TEST">TEST</option>
	</select>
    <input type="submit" name="submit" value="change">
    
  </form>
</div>


<?php
              
if(isset($_POST['key']))
{
$data=$_POST['key'];
$fp = fopen('../payment/PaytmKit/lib/key.txt', 'w');
fwrite($fp, $data);
fclose($fp);
$fpo = fopen('../subscription/Paytmkit/lib/key.txt', 'w');
fwrite($fpo, $data);
fclose($fpo);
$data2=$_POST['mid'];
$sp = fopen('../payment/PaytmKit/lib/mid.txt', 'w');
fwrite($sp, $data2);
fclose($sp);
$spo = fopen('../subscription/Paytmkit/lib/mid.txt', 'w');
fwrite($spo, $data2);
fclose($spo);
$data3=$_POST['website'];
$tp = fopen('../payment/PaytmKit/lib/website.txt', 'w');
fwrite($tp, $data3);
fclose($tp);
$tpo = fopen('../subscription/Paytmkit/lib/website.txt', 'w');
fwrite($tpo, $data3);
fclose($tpo);
$data4=$_POST['mode'];
$dp = fopen('../payment/PaytmKit/lib/mode.txt', 'w');
fwrite($dp, $data4);
fclose($dp);
$dpo = fopen('../subscription/Paytmkit/lib/mode.txt', 'w');
fwrite($dpo, $data4);
fclose($dpo);
}
?>