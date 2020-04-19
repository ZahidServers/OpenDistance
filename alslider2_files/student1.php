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
    Enter Caption:<br>
	Example:<br>
	Aryan:The best place to gain knowledge<br>
    <input type="text" name="aluminigrp" placeholder="Enter Alumini Caption" required><br>
    <input type="submit" name="submit" value="change">
    
  </form>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];      
      $rupload="dummy-640x310-2.jpg";

      if($file_size > 20971520) {
         $errors[]='File size must be excately 20 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"./".$rupload);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
	UPLOAD a File jpg file less then 20MB and must be 640x310px<br>
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit" value="change" />

      </form>
</div>


<?php
              
if(isset($_POST['aluminigrp']))
{
$data=$_POST['aluminigrp'];
$fp = fopen('figcap2.txt', 'w');
fwrite($fp, $data);
fclose($fp);
}
?>