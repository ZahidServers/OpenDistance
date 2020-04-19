<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
if (strnatcmp(phpversion(),'5.3.0') >= 0 && strnatcmp(phpversion(),'5.4.0') <= 0)
{
  $version= '5.3';
}
else
{
  $version= 'not 5.3';
}
$myfile = fopen("installation.txt", "r") or die("Unable to open file!");
$zahid=fread($myfile,filesize("installation.txt"));
fclose($myfile);
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
    <h1 class="w3-jumbo w3-animate-top">Requirements</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"><?php if($version=='5.3'){echo'PHP 5.3 &#10004;';}else{echo'&#x274C;PHP 5.3';}?>
	</br><?php if($version=='5.3') {echo"<form action='SelectDB.php' method='post'><input style='display:none;' type='hidden' value='5.3' name='ok'><a href='#' onclick=\"this.closest('form').submit();return false;\">Click Here To Continue</a></form>";}else{echo"<a href=''>Please Install PHP 5.3 this software doesn't work in other php versions</a>";}?></p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Created By Mohammed Zahid Wadiwale
  </div>
</div>

</body>
</html>
