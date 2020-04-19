<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php 
  session_start();
if(isset($_SESSION["logined1"])){
  $a=$_SESSION["logined1"];
  if($a != "")
  {
    $_SESSION["logined1"]="";
	session_unset();
	session_destroy();
	echo "<script type='text/javascript'>location.href = './';</script>";
  
  }
  else
  {
        $_SESSION["logined1"]="a";
		echo "error";
  }
}
  ?>