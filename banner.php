<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/*Banner style code- Coded by Mohammed Zahid Wadiwale © Zahid Servers*/
/*banner background css*/
#banners {
  margin:0px;
  padding:0px;
  margin-top:0px;
  padding-top:0px;
  width: 100%;
  height: 450px;
  background-image: url('img_banner.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  border: none;
}
/*Centers text*/
.centered {
	margin:0px;
	padding:0px;
	position:relative;
  top: 62%;
  left: 52%;
  transform: translate(-50%, -50%);
  color: white;
  /*text shadow*/
  text-shadow:5px 5px 10px black;
}
/*This button class is created by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers © Zahid Servers*/
/*button property*/
.zahid-fa-button-23 {
	/*button shadow*/
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
    /*button Gradient*/
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	/*button color*/
	background-color:#007dc1;
	/*button border*/
	border-radius:3px;
	border:1px solid #124d77;
	/*button Display*/
	display:inline-block;
	/*button Cursor*/
	cursor:pointer;
	/*button Font*/
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	font-style:italic;
	/*button fa fa*/
	padding:12px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
/*button property onhover*/
.zahid-fa-button-23:hover {
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	background-color:#0061a7;
}
/*button property onclick*/
.zahid-fa-button-23:active {
	position:relative;
	top:1px;
}
@media(max-width:770px)
{
	.centered h1{
		font-size:30px;
	}
	.centered h2{
		font-size:25px;
	}
}
</style>
<div name="banners" class="banners" id="banners">
<div class="centered">
<h1><?php include './banner/bannertxt1.txt';?></h1>
<h2><?php include './banner/bannertxt2.txt';?></h2>
<?php  if(isset($_SESSION["logined"]))
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
	echo "$b Join Now !!!";
  }
  }
  else
  {
	echo "<a href='../registration.php' class='zahid-fa-button-23'>Join Now !!!";
  }
?></a>
</div>
</div>