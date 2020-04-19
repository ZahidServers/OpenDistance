<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
if(!isset($_POST['ok']))
{
	echo"<script>window.location.href='./'</script>";
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
    <p class="w3-large w3-center"><form action='verify.php'><table style='font-weight:bold;'><tr>
	<td>Enter DB_HOST</td><td><input type='text' name='host' placeholder='Enter DB_HOST'></td></tr><tr>
	<td>Enter DB_USER</td><td><input type='text' name='user' placeholder='Enter DB_USER'></td></tr><tr>
	<td>Enter DB_Password</td><td><input type='text' name='pass' placeholder='Enter DB_Password'></td></tr><tr>
	<td>Site Name</td><td><input type='text' name='sname' placeholder='Enter Site Name'></td></tr><tr>
	<td><input type='submit' value='next'></td></tr><tr>
	</table></form>
	</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Created By Mohammed Zahid Wadiwale
  </div>
</div>

</body>
</html>
