<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php 
  session_start();
  $a=$_SESSION["logined"];
  
  if($a != "")
  {
    $_SESSION["logined"]="";
	session_unset();
	session_destroy();
	echo "<script type='text/javascript'>location.href = '../';</script>";
  
  }
  else
  {
        $_SESSION["logined"]="a";
		echo "error";
  }
  ?>