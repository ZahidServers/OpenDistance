<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<style>
table.darkTable {
  font-family: "Arial Black",Gadget,sans-serif;
  border: 2px solid #000000;
  background-color: #4A4A4A;
  width: 80%;
  height: 200px;
  text-align: center;
  border-collapse: collapse;
}
table.darkTable td, table.darkTable th {
  border: 1px solid #4A4A4A;
  padding: 3px 2px;
}
table.darkTable tbody td {
  font-size: 13px;
  color: #E6E6E6;
}
table.darkTable tr:nth-child(even) {
  background: #888888;
}
table.darkTable thead {
  background: #000000;
  background: -moz-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: -webkit-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: linear-gradient(to bottom, #404040 0%, #191919 66%, #000000 100%);
  border-bottom: 3px solid #000000;
}
table.darkTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #E6E6E6;
  text-align: center;
  border-left: 2px solid #4A4A4A;
}
table.darkTable thead th:first-child {
  border-left: none;
}

table.darkTable tfoot {
  font-size: 12px;
  font-weight: bold;
  color: #E6E6E6;
  background: #000000;
  background: -moz-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: -webkit-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: linear-gradient(to bottom, #404040 0%, #191919 66%, #000000 100%);
  border-top: 1px solid #4A4A4A;
}
table.darkTable tfoot td {
  font-size: 12px;
}
</style>
<table class="darkTable">
<thead>
<tr>
<th>Free</th>
<th>Pro</th>
</tr>
</thead>
<tfoot>
<tr>
<td>Price: Free</td>
<td>Price: <?php
$local = file("./host.txt");
$host=implode(" ",$local);
$db = file("./unam.txt");
$udb=implode(" ",$db);
$word = file("./pass.txt");
$pass=implode(" ",$word);
$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("studentenrollment",$con);
$fpricing=mysql_query("SELECT *FROM price");
while ($priceing = mysql_fetch_array($fpricing)) {
	$price=$priceing['price'];
}
echo$price;?> INR/mo</td>
</tr>
<td><?php  if(isset($_SESSION["logined"]))
 {
  $a=$_SESSION["logined"];
  $b='<a href="../login/registration.php" class="zahid-fa-button-23">';
  $c='<a href="../course" class="zahid-fa-button-23">';
  
  if($a != "")
  {
    echo "$c Explore Courses!!!";
  
  }
  else
  {
	echo "$b Sign Up Now !!!!!!!!!!!!!!! ";
  }
  }
  else
  {
	echo "<a href='../registration.php' class='zahid-fa-button-23'>Sign Up Now !!!!!!!!!!!!!!! ";
  }
?></a>
</td>
<td><a href="./registrations.php" class="zahid-fa-button-25">Buy this Amazing Pack Now !!!</a>
</td>
</tfoot>
<tbody>
<tr>
<td>Free access to courses</td>
<td>F<span style="display: inline !important; float: none; background-color: #4a4a4a; color: #e6e6e6; font-family: 'Arial Black',Gadget,sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">ree access to courses</span></td>
</tr>
<tr>
<td>Feedback</td>
<td>Feedback</td>
</tr>
<tr>
<td><span style="display: inline !important; float: none; background-color: #4a4a4a; color: #e6e6e6; font-family: 'Arial Black',Gadget,sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Cant Contact Professors for assistance</span></td>
<td>Contact Professors for assistance 24x7</td>
</tr>
<tr>
<td><span style="display: inline !important; float: none; background-color: #888888; color: #e6e6e6; font-family: 'Arial Black',Gadget,sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Get Certified for Course with marks</span></td>
<td>Get Certified for Course with marks</td>
</tr>
<tr>
<td>No Hardcopy of Certificate</td>
<td>Get Hardcopy of Certificate</td>
</tr>
<tr>
<td>Free SoftCopy of Certificate</td>
<td>Free Softcopy of certificate</td>
</tr>
<tr>
</tr>
</tbody>
</table>