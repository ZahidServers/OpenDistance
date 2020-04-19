<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$myfile = fopen("installation.txt", "r") or die("Unable to open file!");
$zahid=fread($myfile,filesize("installation.txt"));
fclose($myfile);
if($zahid=='0')
{
	$fp = fopen('installation.txt', 'w');
	$nt='1';
	fwrite($fp, $nt);
}
if($zahid=='1')
{
	echo"<script>window.location.href='installed.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<title>OpenDistance|Installation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href='../blog/roboto.css'>
    <link rel="stylesheet" href='../blog/w3.css'>
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('forestbridge.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
OpenDistance
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">Set Up Connection</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"><form method='post' action='verify22.php'><table style='font-weight:bold;'><tr>
	<td>Enter Your Name</td><td><input type='text' name='name' placeholder='Enter Your Name' required></td></tr><tr>
	<td>Enter Your Email</td><td><input type='email' name='email' placeholder='Enter Your Email' required></td></tr><tr>
	<td>Set a New Password</td><td><input type='password' name='pass' placeholder='Set a New Password' required></td></tr><tr>
	<td><input type='submit' value='next'></td></tr>
	</table><input type='hidden' style='display:none' name='r' value='<?php echo $_SERVER['REQUEST_URI']; ?>'></form>
	</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Created By Mohammed Zahid Wadiwale
  </div>
</div>

</body>
</html>
