<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$id=$_GET['id'];
$email=$_POST["email"];
$passf=$_POST["pass"];
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
$name2=$name;
$dob=$_POST["dob"];
$father=$_POST["father"];
$mother=$_POST["mother"];
$fincome=$_POST["fincome"];

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
 $result2=mysql_query("SELECT *FROM user WHERE id='$id'");
 while($row=mysql_fetch_array($result2))
{
	$i=$row['id'];
}

$sql="UPDATE user SET name='$name', email='$email' , phone='$phone', address='$address', gender='$gender', hsc=$hsc, ssc=$ssc, yssc=$yssc, yhsc=$yhsc, city='$city', pcode=$pcode, country='$country', state='$state', dob='$dob', father='$father', mother='$mother', fincome=$fincome WHERE id=$i";
if (mysql_query($sql)) 
    {
    echo "<br>Account Succesfully UPDATED. <a href='#' onclick='javascript:window.close();'>Go Back</a>";
    } 
	else 
	{
        echo "Error: " . $sql . "" . mysql_error($con);
    }
?>