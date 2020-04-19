<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html>
<head>
<title>Admin Panel|<?php include "../sitetitle.php";?></title>
<link rel="icon" type="image/png" href="../favicon.ico"/>
<style>
html{
  background:#4ca3dd;
  background-size: auto;
  font-family: Arial, Helvetica, sans-serif;
  text-shadow:8px 8px 13px black;
  color:white;
}
body{
margin:0;
}
.rssd a{color:Green;}
.rssd a:hover{color:cyan;}
html{background-color:#4ca3dd;}
.rssd{
color:white;
font-size: 28px;
text-shadow:4px 4px 12px;
}
.nav{
overflow: hidden;
background-color: #333;
width:100%;
font-size:25px;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=button], input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  text-shadow: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=button], input[type=submit]:hover{
  background-color: green;
  border: green;
  color: white;
  padding: 16px 32px;
  font-weight:bold;
  text-shadow:8px 8px 12px;
  margin: 4px 2px;
  cursor: pointer;
}
table{
	  font-size: 25px;
	  font-weight: bold;
}
</style>
</head>
 
<body>
<div class="rssd">
    <div class="nav"><h3>&nbsp;&nbsp;<?php include '../sitetitle.php'?><center>Login To Admin Panel</center></h3><br></div>

<form action="" method="post">
<table align="center" cellpadding = "10">
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="email" name="email" style="width:500px;" placeholder="Enter Your Email eg:example@example.com" maxlength="100" required/></td>
</tr>

<!----- Password ---------------------------------------------------------->
<tr>
<td>Password</td>
<td><input type="password" required name="pass" style="width:500px;" placeholder="Enter Password" maxlength="100"/>
</td>
</tr>
    
<!----- Submit and Reset ------------------------------------------------->
<tr>
    <td></td>
<td colspan="2" align="center">
<input type="submit" value="Login" style="width:500px;">
</td>
</tr>
</table>
 
</form>
    </div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$email=$_POST["email"];
$passf=$_POST["pass"];
$local = file("../host.txt");
$host=implode(" ",$local);
$db = file("../unam.txt");
$udb=implode(" ",$db);
$word = file("../pass.txt");
$pass=implode(" ",$word);
$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("studentenrollment",$con);
$result=mysql_query("SELECT *FROM admin");
mysql_select_db("studentenrollment",$con);
$result2=mysql_query("SELECT *FROM admin WHERE email='$email'");
while($row=mysql_fetch_array($result))
{
$a=$row['email'];
$b=$row['pass'];
if($email==$a && $passf==$b)
{
if($result2 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
while($row=mysql_fetch_array($result2))
{
	$uname=$row['name'];
}
$_SESSION["logined1"] = "$uname";
echo $a." ".$b."".$uname."<br>";
echo "Session is " . $_SESSION["logined1"] . ".<br><br>";
echo "<script type='text/javascript'>location.href = './';</script>";
}
else
{
	echo "<center><h1>Error Invalid Email or Password</h1></center>";
}
}
}
?>