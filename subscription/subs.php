<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<style>body{background-color:#4ca3dd;color:white;text-shadow:4px 4px 12px black;}
.main a{
	color:green;
	text-shadow:4px 4px 12px green;
}
.main a:hover{
	color:cyan;
	text-shadow:4px 4px 12px cyan;
}
</style>
<?php
if($pro=='yes')
{
	 $rfidd=mysql_query("SELECT *FROM subscription WHERE user='$uname'");
	while($pros=mysql_fetch_array($rfidd))
	{
		$payment=$pros['payment'];
		$orderDate=$pros['orderDate'];
		$expdate=$pros['completed'];
		
	}
	$check=mysql_num_rows(mysql_query("SELECT *FROM subscription WHERE user='$uname'"));
	if($check==1)
	{
		echo"<h1>You purchased subscription of &#8377;$payment on $orderDate valid till $expdate</h1>";
	}
	elseif($check<1)
	{
		echo"<h1>You Renewed the subscription of &#8377;$payment on $orderDate valid till $expdate</h1>";
	}
	elseif($check=0)
	{
		echo"<h1 style='color:red;text-shadow:4px 4px 12px red;'>It seems there is no record please contact site administrator your subscription might have been cancelled.</h1>";
	}
	else{
		echo"<h1 style='color:red;text-shadow:4px 4px 12px red;'>Strange Error refresh or reload the page</h1>";
	}
}
elseif($pro=='no')
{
	echo"<h1>Become a pro member now and take its advantages<br><a href='#' onClick=\"javascript:window.open('./subscription.php','popup','width=1000px,height=600px')\">Click here</a> to buy or see the subscription plan</h1>";
}
else{
	echo"<h1 style='color:red;text-shadow:4px 4px 12px red;'>Strange Error with your DATA Records its only please contact site admin</h1>";
}
?>