<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html>
<head>
<link rel='icon' type='image/png' href='../favicon.ico'/>
<style>
html{
  background:#4ca3dd url('');
  background-size: auto;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
  text-shadow:8px 8px 13px black;
  color:white;
}
input[type=text] {
  width: 100%;
  padding: 5px 10px;
  margin: 4px 0;
  box-sizing: border-box;
}
input[type=date] {
  width: 100%;
  padding: 5px 10px;
  margin: 4px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 5px 10px;
  margin: 4px 0;
  box-sizing: border-box;
}
textarea {
  width: 100%;
  height: 150px;
  padding: 5px 10px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 2px;
  background-color: #f8f8f8;
  resize: none;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
table{
	  font-size: 20px;
	  font-weight: bold;
}
</style>
</head>
 <?php 
if(isset($_SESSION["logined"]))
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
 $result=mysql_query("SELECT *FROM user WHERE email='$name'");
 while($row=mysql_fetch_array($result))
{
$idfdr=$row['id'];
$email=$row['email'];
$passf=$row['pass'];
$phone=$row['phone'];
$dob=$row['dob'];
$gender=$row['gender'];
$father=$row['father'];
$mother=$row['mother'];
$city=$row['city'];
$state=$row['state'];
$pcode=$row['pcode'];
$country=$row['country'];
$fincome=$row['fincome'];
$address=$row['address'];
$yhsc=$row['yhsc'];
$hsc=$row['hsc'];
$ssc=$row['ssc'];
$yssc=$row['yssc'];
$address1=$row['address'];
$photo=$row['photo'];
$user=$row['name'];
$fnames=$row['name'];
}
if($gender=='male')
{
    $mchecked="checked";
    $fchecked=" ";
}
    elseif($gender=='female')
    {
        $mchecked=" ";
        $fchecked="checked";
    }
    else{
        $mchecked=" ";
        $fchecked=" ";
    }
 echo"
<body>
<center><h3>Your REGISTRATION FORM</h3></center>

<table align='center' cellpadding = '10'>
<tr><td>Your Photo</td><td><div style='vertical-align:top;' class='box'><div style='float:left;'><img src='./$idfdr' style='border-radius:50%;' width='100px' height='110px'></div><div>";
  echo  '<form action="./" enctype="multipart/form-data" accept="image/png" method="post">
Select image :
<input type="file" name="file" accept="image/png"><br>
<input type="submit" style="margin:none;background-color: green; width:120px; height: 10px; border:none;color: white;padding: none;text-align: center;text-decoration: none;font-size: 12px;padding-top:none;cursor: pointer;" value="Update Image" name="Submit1"></form></div>';
    if(isset($_POST['Submit1']))
{ 


$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$pname = "$idfdr";

move_uploaded_file($_FILES["file"]["tmp_name"], $pname.".".$extension);
$sql="UPDATE user SET photo='$pname.$extension' where eamil='$uname'";
if (mysql_query($sql)) 
{
echo "Image ". $_FILES["file"]["name"]." Succesfully Updated";
}
else{
    echo "Error Uploading Image";
}
}

echo"
<form action='r2.php' method='post'>
</td>
</tr>
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FULL NAME</td>
<td><input type='text' required name='name' value='$fnames' placeholder='Enter Full Name in format FirstName SirName eg:-Mohammed Zahid Wadiwale' maxlength='100'/>
</td>
</tr>

<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
<td>
<input type='date' name='dob' value='$dob' placeholder='Enter Date of birth' required>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type='text' name='email' value='$email' placeholder='Enter Your Email eg:example@example.com' maxlength='100' required/></td>
</tr>
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type='text' name='phone' value='$phone' placeholder='Enter your Mobile No' maxlength='10' required/>
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type='radio' name='gender' value='male' $mchecked required />
Female <input type='radio' name='gender' $fchecked value='female' />
</td>
</tr>
<!----- Father Name ---------------------------------------------------------->
<tr>
<td>Father Name</td>
<td><input type='text' value='$father' required name='father' placeholder='Enter Fathers Name' maxlength='100'/>
</td>
</tr>
<!----- Mother Name ---------------------------------------------------------->
<tr>
<td>Mother Name</td>
<td><input type='text' value='$mother' required name='mother' placeholder='Enter Mothers Name' maxlength='100'/>
</td>
</tr>
<!----- Family Annual Income ---------------------------------------------------------->
<tr>
<td>Family Annual Income</td>
<td><input type='text' required value='$fincome' name='fincome' placeholder='Enter Family Income i.e Annual' maxlength='100'/>
</td>
</tr>
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name='address' value='$address1' placeholder='Enter your address'  required>$address1</textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type='text' name='city' value='$city' required placeholder='Enter your City' maxlength='30' />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type='text' value='$pcode' name='pcode' placeholder='Enter your Zip Code eg:400010' maxlength='6' required/>
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type='text' value='$state' name='state' placeholder='Enter your state eg:maharashtra' maxlength='30' required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type='text' value='$country' name='country' placeholder='Enter your country eg:-india' required/></td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align='center'><b>Sl.No.</b></td>
<td align='center'><b>Examination</b></td>
<td align='center'><b>Percentage</b></td>
<td align='center'><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type='text' placeholder='enter your ssc percentage' value='$ssc' name='ssc' maxlength='30' required/></td>
<td><input type='text' placeholder='Enter Year of Passing(ssc)' value='$yssc' name='yssc' maxlength='30' required/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type='text' placeholder='enter your hsc percentage' value='$hsc' name='hsc' maxlength='30' required/></td>
<td><input type='text' placeholder='Enter Year of Passing(hsc)' value='$yhsc' name='yhsc' maxlength='30' required/></td>
</tr>
 
<tr>
<td></td>
<td></td>
<td align='center'>(decimal must not exceed 4)</td>
<td align='center'>(Year in YYYY)</td>
</tr>
</table>
 <input type='text' placeholder='enter your hsc percentage' style='display:none;' value='$passf' name='pass' maxlength='30' required/>
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan='2' align='center'>
<input type='submit' value='Update'>
<input type='reset' value='Reset'>
</td>
</tr>
</table>
 
</form>
 
</body>";}
?>
</html>