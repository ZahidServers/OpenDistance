<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<style>
         .footer{
			 background-color:black;
			   font-size: 15px;
		 }
         .footer td{
            color:white;
			text-align:center;
			  font-size: 15px;
		 }
		 .footer th{
            color:white;
			  font-size: 15px;

		 }
		 .social-icons {
            text-align: center;
			background-color:black;
			margin:0px;
			padding:10px;
         }  
         .social-icons li {
            display:inline-block;
			background-color:black;
            list-style-type:none;
            -webkit-user-select:none;
            -moz-user-select:none;
         }
         .social-icons li a {
            border-bottom: none;
         }
         .social-icons li img {
            width:20px;
            height:20px;
            margin-right: 20px;
}
         .footerlink:link {
            text-decoration: none;
            color:white;
}

         .footerlink:visited {
           text-decoration: none;
           color:white;

}

         .footerlink:hover {
           text-decoration: underline;
           color:white;

}

         .footerlink:active {
           text-decoration: underline;
           color:white;

}
</style>
<div class="footer" bgcolor="black">
<footer bgcolor="black">
<br><br>
<ul class="social-icons">
    <li><a href="http://www.facebook.com/<?php include '../footer/path/facebook.txt';?>"><img src='../footer/CircleGrey/Facebook_1.png' /></a></li>
    <li><a href="http://www.twitter.com/<?php include '../footer/path/twitter.txt';?>"><img src='../footer/CircleGrey/Twitter_1.png' /></a></li>
    <li><a href="http://www.youtube.com/<?php include '../footer/path/youtube.txt';?>"><img src='../footer/CircleGrey/Youtube_1.png' /></a></li>
</ul>
<br><br><br>
<hr/>
<table class="footer" bgcolor="black" width="100%" align="center">
<tr>
<th>Contact Us</th>
<th>Services</th>
<th>Company</th>
<th>Terms</th>
</tr>
<tr>
<td>Phone No1:-<?php include 'footer/phoneno1.txt';?></td>
<td>Free</td>
<td><a class="footerlink" href="<?php include '../contactus.txt';?>">Contact Us</a></td>
<td style="text-align:left;width:35%;">All prices include VAT.</td>
</tr>
<tr>
<td>Phone No2:-<?php include 'footer/phoneno2.txt';?></td>
<td>Pro</td>
<td><a class="footerlink" href="<?php include '../abu.txt';?>">About Us</a></td>
<td style="text-align:left;width:35%;">* Prices are valid for signup only, upon renewal the prices might change depending upon market and inflation.</td>
</tr>
<tr>
<td>Email:<?php include 'footer/Email.txt';?></td>
<td><a class='footerlink' href='../help'>Help</a></td>
<td><a class="footerlink" href="<?php include '../alumini.txt'?>">Alumini</a></td>
<td style="text-align:left;width:36%;">Copyright © <?php include 'sitetitle.php';?> owned and managed by <?php include 'companyname.txt';?>.</td>
</tr>
<tr>
<td style="text-align:center;width:30%;">Address:<?php include 'footer/address.txt';?></td>
<td></td>
<td><a class="footerlink" href="<?php include '../prc.txt';?>";>Pricing</a></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td><?php 
 if(isset($_SESSION["logined"]))
 {
  $a=$_SESSION["logined"];
  
  if($a != "")
  {
    echo "<a class='footerlink' class='footerlink' href='../login/logout.php'>LogOut</a><br>";
  
  }
  else
  {
    echo "<a class='footerlink' href='../login/'>LogIn</a><br>";
  }
  }
  else
  {
	echo "<a class='footerlink' href='../login/'>LogIn</a><br>";
  }
  ?></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td><?php 
 if(isset($_SESSION["logined"]))
 {
  $a=$_SESSION["logined"];
  
  if($a != "")
  {
    echo "";
  
  }
  else
  {
    echo "<a class='footerlink' href='../login/register.php'>Register</a><br>";
  }
  }
  else
  {
	echo "<a class='footerlink' href='../login/register.php'>Register</a><br>";
  }
  ?></td>
<td></td>
</tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</footer>
</div>