<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$dfdateroor=$_SESSION['logined'];
$currentdate=date("Y-m-d");
$rfdgetdate=mysql_query("SELECT *FROM user WHERE email='$dfdateroor'");
while($dateerror=mysql_fetch_array($rfdgetdate))
{
	$DateError1=$dateerror['pro'];
}
if($DateError1=='yes')
{
	$GetDated=mysql_query("SELECT *FROM subscription WHERE user='$dfdateroor'");
	while($faker=mysql_fetch_array($GetDated))
	{
		$confogame2=$faker['completed'];
		if($confogame2==$currentdate)
		{
			mysql_query("UPDATE user SET pro='no' WHERE email='$dfdateroor'");
		}
	}
}
?>