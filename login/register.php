<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html>
<head>
<title>Registration Form|<?php include "../sitetitle.php";?></title>
<link rel="icon" type="image/png" href="../favicon.ico"/>
<style>
html{
  background:#4ca3dd;
  background-size: auto;
  font-family: Arial, Helvetica, sans-serif;
  text-shadow:8px 8px 13px black;
  color:white;
}
body{
margin:0;
}
.rssd a{color:Green;}
.rssd a:hover{color:cyan;}
html{background-color:#4ca3dd;}
.rssd{
color:white;
font-size: 28px;
text-shadow:4px 4px 12px;
}
.nav{
overflow: hidden;
background-color: #333;
width:100%;
font-size:25px;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
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
	  font-size: 25px;
	  font-weight: bold;
}
</style>
</head>
 
<body>
<div class="rssd">
<div class="nav"><h3>&nbsp;&nbsp;<?php include '../sitetitle.php'?><center>STUDENT REGISTRATION FORM</h3></center><br></div>

<form action="r2.php" method="post">
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FULL NAME</td>
<td><input type="text" required name="name" pattern="[a-zA-Z0-9!@#%^*_]{6,25}" placeholder="Enter Full Name in format FirstName SirName eg:-Mohammed Zahid Wadiwale" maxlength="100"/>
</td>
</tr>

<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
<td>
<input type="date" name="dob" placeholder="Enter Date of birth" required>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="email" name="email" pattern="[a-zA-Z0-9!@#%^*_]{6,25}" placeholder="Enter Your Email eg:example@example.com" maxlength="100" required/></td>
</tr>
<!----- Password ---------------------------------------------------------->
<tr>
<td>Password</td>
<td><input type="password" name="pass" pattern="[a-zA-Z0-9!@#%^*_]{6,25}" placeholder="Enter Password that you want to keep for your new account" maxlength="100" required/></td>
</tr>
<!----- Password Confirmation ---------------------------------------------------------->
<tr>
<td>Re-Enter Password</td>
<td><input type="password" name="passc" pattern="[a-zA-Z0-9!@#%^*_]{6,25}" placeholder="Enter Password Again" maxlength="100" required/></td>
</tr>
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="phone" pattern="[0-9]{10,12}" placeholder="Enter your Mobile No" maxlength="10" required/>
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="gender" value="male" />
Female <input type="radio" name="gender" value="female" />
</td>
</tr>
<!----- Father Name ---------------------------------------------------------->
<tr>
<td>Father Name</td>
<td><input type="text" pattern="[a-zA-Z0-9!@#%^*_]{2,100}" required name="father" placeholder="Enter Fathers Name" maxlength="100"/>
</td>
</tr>
<!----- Mother Name ---------------------------------------------------------->
<tr>
<td>Mother Name</td>
<td><input type="text" pattern="[a-zA-Z0-9!@#%^*_]{2,100}" required name="mother" placeholder="Enter Mothers Name" maxlength="100"/>
</td>
</tr>
<!----- Family Annual Income ---------------------------------------------------------->
<tr>
<td>Family Annual Income</td>
<td><input type="text" pattern="[0-9]{3,80}" required name="fincome" placeholder="Enter Family Income i.e Annual" maxlength="100"/>
</td>
</tr>
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" pattern="[a-zA-Z0-9!@#%^*_]{6,25}" placeholder="Enter your address" rows="4" cols="30" required></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="city" pattern="[a-zA-Z0-9!@#%^*_]{3,25}" required placeholder="Enter your City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" pattern="[0-9]{3,12}" name="pcode" placeholder="Enter your Zip Code eg:400010" maxlength="6" required/>
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="state" pattern="[a-zA-Z0-9!@#%^*_]{3,40}" placeholder="Enter your state eg:maharashtra" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="country" pattern="[a-zA-Z0-9!@#%^*_]{3,40}" placeholder="Enter your country eg:-india" required/></td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="number" placeholder="enter your ssc percentage" name="ssc" maxlength="30" required/></td>
<td><input type="number" placeholder="Enter Year of Passing(ssc)" name="yssc" maxlength="30" required/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="number" placeholder="enter your hsc percentage" name="hsc" maxlength="30" required/></td>
<td><input type="number" placeholder="Enter Year of Passing(hsc)" name="yhsc" maxlength="30" required/></td>
</tr>
 
<tr>
<td></td>
<td></td>
<td align="center">(decimal must not exceed 4)</td>
<td align="center">(Year in YYYY)</td>
</tr>
</table>
 
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>
<?php
if(isset($_GET['passmismatch']))
{
	echo"<script>window.alert('You Have Entered Passwords Differently please enter both password same');</script>";
}
?>
