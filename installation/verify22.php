<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
if(isset($_POST['r']))
{
	$r=$_POST['r'];
	if($r=='/installation/Admindetail.php')
	{
			$name=$_SESSION["logined"];
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
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql="INSERT INTO admin VALUES('1','$email','$pass','$name')";
		if(mysql_query($sql))
		{
			$zs="fc";
				echo"<script>window.location.href='installed.php?zs=fc';</script>";
		}
		
	}
}
?>