<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/*Banner style code- Coded by Mohammed Zahid Wadiwale © Zahid Servers*/
/*banner background css*/
#bannersz {
  margin:0px;
  padding:0px;
  width: 100%;
  height: 450px;
  background-image: url('img_banner.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  border: none;
}
/*Centers text*/
.centeredtd {
  margin:0px;
  padding:0px;
  position:relative;
  top: 40%;
  left: 58%;
  transform: translate(-50%, -50%);
  color: white;
  /*text shadow*/
  text-shadow:5px 5px 10px black;
}
/*This button class is created by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers © Zahid Servers*/
/*button property*/
.zahid-fa-button-25 {
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
.zahid-fa-button-25:hover {
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	background-color:#0061a7;
}
/*button property onclick*/
.zahid-fa-button-25:active {
	position:relative;
	top:1px;
}
@media(max-width:770px)
{
	.centeredtd h1{
		font-size:35px;
	}
}
@media(max-width:680px)
{
	.centeredtd h1{
		font-size:20px;
	}
}
</style>
<div name="bannersz" class="bannersz" id="bannersz">
<div class="centeredtd">
<h1>Our Pricing</h1>
<?php include 'tbp.php' ?>
</div>
</div>