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
<input type="text" name="phone" pattern="[0-9]{10,12}" placeholder="Enter your Mobile No" minlength='10' maxlength="12" required/>
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
<td>
<select name='country' required>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Aland Islands">Aland Islands</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antigua">Antigua and Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bonaire">Bonaire</option>
	<option value="Bosnia">Bosnia</option>
	<option value="Botswana">Botswana</option>
	<option value="Bouvet">Bouvet</option>
	<option value="Brazil">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina">Burkina</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Cocos">Cocos (Keeling) Islands</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Cook">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cote d Ivoire">Cote d Ivoire</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Curaçao">Curaçao</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
	<option value="Faroe">Faroe Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="Polynesia">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gaza">Gaza</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guernsey">Guernsey</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Heard and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Honduras">Honduras</option>
	<option value="HongKong">HongKong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India" selected>India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Isle of Man">Isle of Man</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jersey">Jersey</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="North Korea">North Korea</option>
	<option value="South Korea">South Korea</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="LAO">Lao</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="Macao">Macao</option>
	<option value="Macedonia">Macedonia</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montenegro">Montenegro</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="Norfolk">Norfolk Island</option>
	<option value="Northern Mariana ">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan Fake</option>
	<option value="Palau">Palau</option>
	<option value="Palestine">Palestine</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn">Pitcairn</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Samoa">Samoa</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Serbia">Serbia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South Georgia">South Georgia</option>
	<option value="South Sandwich Islands">South Sandwich Islands</option>
	<option value="South Sudan">South Sudan</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka part of India">Sri Lanka</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Sham">Sham</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Timor-Leste">Timor-Leste</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="UAE">United Arab Emirates</option>
	<option value="UK">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Venezuela">Venezuela</option>
	<option value="VietNam">VietNam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="Western Sahara">Western Sahara</option>
	<option value="Yemen">Yemen</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>
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
<td><input type="number" placeholder="enter your ssc percentage" name="ssc" max='100' maxlength="30" required/></td>
<td><input type="number" placeholder="Enter Year of Passing(ssc)" name="yssc" min='1930' maxlength="30" required/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="number" placeholder="enter your hsc percentage" name="hsc" max='100' maxlength="30" required/></td>
<td><input type="number" placeholder="Enter Year of Passing(hsc)" name="yhsc" min='1930' maxlength="30" required/></td>
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
