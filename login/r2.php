<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<html oncontextmenu="return showcontextmenu(event);" >
<?php include '../contextmenu.php'?>
<title><?php include '../sitetitle.php'?>|Registration Form</title>
<style>
body{
margin:0;
}
.rssd a{color:Green;}
.rssd a:hover{color:cyan;}
html{background-color:#4ca3dd;}
.rssd{
color:white;
text-shadow:4px 4px 12px;
}
.nav{
overflow: hidden;
background-color: #333;
width:100%;
font-size:25px;
}

</style>
<div class="rssd">
<div class="nav"><br><?php include '../sitetitle.php'?><br><div style="color: #333;">.</div></div>
<?php
$email=$_POST["email"];
$passf=$_POST["pass"];
$passcf=$_POST["passc"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pcode=$_POST["pcode"];
$country=$_POST["country"];
$ssc=$_POST["ssc"];
$hsc=$_POST["hsc"];
$yhsc=$_POST["yhsc"];
$yssc=$_POST["yssc"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$father=$_POST["father"];
$mother=$_POST["mother"];
$fincome=$_POST["fincome"];
if($passf!=$passcf)
{
  echo "<center><h1><br>Error Password Dont Match You Entered two different Passwords<a href='./register.php' >Go Back</a><br></h1></center>";
}
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
$result=mysql_query("SELECT *FROM user");
$i=mysql_num_rows($result);
$result8=mysql_query("SELECT *FROM user  WHERE email='$email'");
if(mysql_num_rows($result8) > 0)
	{
  	  echo "<center><h1><br>Error this email is already registered <a href='./register.php' >Go Back</a><br></h1></center>";
  	}
else{
while($row=mysql_fetch_array($result))
{
$email_error="success";
$a=$row['email'];
$total = $row[$i];
$rs = $i+1;
}
	$sql = "INSERT INTO user VALUES($rs,'$name','$email','$passf','$phone','no','$address','$gender',$hsc,$ssc,$yssc,$yhsc,'$city',$pcode,'$country','$state','$dob','$father','$mother',$fincome)";        
  if (mysql_query($sql)) 
    {
    echo "<br><h1><center><br>New Account Succesfully Created. Now you can login using<a href='./index.php'>Login Page</a></center></h1>";
    } 
	else 
	{
        echo "<h2>Error:Cant insert data into database go back and try resubmiting the form </h2>";
    }
}
?>
</div>
