<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
session_start();
if(isset($_SESSION['logined'])||isset($_SESSION['logined1'])){
if(isset($_GET['iv'])&&isset($_GET['id'])&&isset($_GET['hrs']))
{
if(isset($_GET['is'])&&isset($_GET['des'])&&isset($_GET['key']))
{
require('fpdf.php'); 
         $name="abc";
         $id="123";
         $fullname=$_GET['id'];
         $course=$_GET['iv'];
         $hrs=$_GET['hrs'];
         $getdate=date("Y/m/d");
         $signataire = "Certificate Generated on $getdate";
		 $lines = file("../../sitetitle.php");
		 $sitetitle=implode(" ",$lines);
class PDF extends FPDF 
{ 

function Footer() 
{ 

$this->SetY(-27); 
$this->SetFont('Arial','I',8); 
$this->Cell(0,10,'This certificate has been ©  © produced by the tutor',0,0,'R'); 
} 
} 

$pdf = new FPDF('L','pt','A4'); 
$pdf->SetTitle($sitetitle.'|Certificate PDF');
//Loading data 
$pdf->SetTopMargin(0); $pdf->SetLeftMargin(0); $pdf->SetRightMargin(0); 

$pdf->AddPage(); 
//  Print the edge of
$pdf->Image("cert2.png", 0, 0, 900); 
// Print the certificate logo  
$pdf->Image("../../favicon.png", 140, 180, 180); 
// Print the title of the certificate  
$pdf->SetFont('times','B',40); 
$pdf->SetTextColor(255,255,255);
$pdf->Cell(720+10,200,"CERTIFICATE OF COMPLETION",0,0,'C'); 


$pdf->SetFont('Arial','I',34); 
$pdf->SetXY(370,220); 

$pdf->Cell(350,25,$fullname,"B",0,'C',0); 


$pdf->SetFont('Arial','B',20); 
$pdf->SetXY(350,280); 
$message = "Given by $sitetitle \nON COMPLETION OF COURSE \nON $course \n OF $hrs hours"; 
$pdf->MultiCell(350,20,$message,0,'C',0); 


$pdf->SetFont('Arial','B',16); 
$pdf->SetXY(370,470); 
$pdf->Cell(350,19,$signataire,"T",0,'C'); 

$pdf->Output(); 
}
}
}
else
{
	echo"<style>
body{
margin:0;
}
.rssd a{color:Green;}
.rssd a:hover{color:cyan;}
html{background-color:#4ca3dd;}
.rssd{
color:white;
text-shadow:4px 4px 12px;
}
.nav{
overflow: hidden;
background-color: #333;
width:100%;
font-size:25px;
}
</style>";
echo "<title>";include'../../sitetitle.php';echo"</title><div class='rssd'>
<div class='nav'><br>&nbsp;"; include'../../sitetitle.php';echo"<br><div style='color: #333;'>.</div></div>";
	echo"<center><h1>404:ERROR Not Logined Go Back To <a href='../../'>Home Page</a> and login</h1></center>";
}
?> 