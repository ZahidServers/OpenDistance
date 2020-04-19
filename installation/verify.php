<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
if(!isset($_GET['host']))
{
	echo'<script>window.location.href="./"</script>';
}
$host=$_GET['host'];
$udb=$_GET['user'];
$pass=$_GET['pass'];
$sname=$_GET['sname'];
$error=0;
error_reporting(E_ERROR | E_PARSE);
$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    echo'<h1 class="w3-large w3-center" style="color:red;background-color:hotpink">Could not connect: ' . mysql_error().'</h1>';
	$error=1;
}
if($error==0)
{
$fp = fopen('../host.txt', 'w');
fwrite($fp, $host);
fclose($fp);
$fpt = fopen('../pass.txt', 'w');
fwrite($fpt, $pass);
fclose($fpt);
$fpe = fopen('../unam.txt', 'w');
fwrite($fpe, $udb);
fclose($fpe);
$fpen = fopen('../sitetitle.php', 'w');
fwrite($fpen, $sname);
fclose($fpen);
if(mysql_query("CREATE DATABASE studentenrollment")){
	$filename = '../studentenrollment.sql';
// MySQL host
$mysql_host = $host;
// MySQL username
$mysql_username = $udb;
// MySQL password
$mysql_password = $pass;
// Database name
$mysql_database = 'studentenrollment2';
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line) {
// Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

// Add this line to the current segment
    $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
        // Reset temp variable to empty
        $templine = '';
    }
}
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error()."";
	$error=2;
}
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
    <h1 class="w3-jumbo w3-animate-top">Verification</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"><?php if($error==0){echo"<a href='Admindetail.php'>Click Here To Continue</a></p>";}
	elseif($error==2){echo "Unable to create a database check if you are using shared hosting plan this web app doesnt support shared hosting.<br>Upgrade your plan or if you not using shared hosting create a db with name studentenrollment and import the sql file manually</p>";}
	else {echo "Incorrect Details Please Try Again</p>";}?>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Created By Mohammed Zahid Wadiwale
  </div>
</div>

</body>
</html>
