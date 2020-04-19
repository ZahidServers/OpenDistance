<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!DOCTYPE html>
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<?php include 'contextmenu.php'?>
<head>
    <script type="application/javascript" src="rpie.js"></script>
	<style>
	</style>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
</head>
<body>
<center>

<div class="false-For-Bottom-Text">
       <div class="inlinezahid">
<table align="center">	
        <tr>
        <td>
		<div class="mypiechart">	
			<canvas id="myCanvas" width="300" align="center" height="300"></canvas>
		</div>
		</td>
        <td>
		<div class="mypiechart">	
			<canvas id="myCanvas8" width="300" height="300"></canvas>			
		</div>
		</td>
		<td>
		<div class="mypiechart" >	
			<canvas id="myCanvas9" width="300" height="300"></canvas>			
		</div>
		</td>
        </tr>
		<tr>
		<td align="center">		
		Male Female Ratio on your site
        </td>
		<td align="center" class="zahidrpietable">
		Percentage of female users
		</td>
		<td align="center" class="zahidrpietable">
		Percentage of male users
		</td>
		</tr>
</table>
<hr/>
Pink indicates Number of Females and Blue indicates no of males
		</div>
	</div>
	<?php
	$local = file("../../host.txt");
$host=implode(" ",$local);
$db = file("../../unam.txt");
$udb=implode(" ",$db);
$word = file("../../pass.txt");
$pass=implode(" ",$word);
	$male=0;
	$female=0;
	$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
		mysql_select_db("studentenrollment",$con);
 $resultfdm=mysql_query("SELECT *FROM user WHERE gender='male'");
 $resultfdn=mysql_query("SELECT *FROM user WHERE gender='female'");
 while($z1=mysql_fetch_array($resultfdm))
{
	$male=$male+1;
}
 while($z2=mysql_fetch_array($resultfdn))
{
	$female=$female+1;
}
echo"
</center>
	<script type='text/javascript'>
		var b=$male;
		var a=$female;
		var c=a+b;
		var d=b/c;
		var per1=d*100;
		var e=a/c;
		var per2=e*100;
		var obj = {
						values: [a,b],
						colors: ['#1E90FF', '#ff33a0'],
						animation: true, // Takes boolean value & default behavious is false
						animationSpeed: 50, // Time in miliisecond & default animation speed is 20ms
						fillTextData: true, // Takes boolean value & text is not generate by default 
						fillTextColor: '#fff', // For Text colour & default colour is #fff (White)
						fillTextAlign: 1.30, // for alignment of inner text position i.e. higher values gives closer view to center & default text alignment is 1.85 i.e closer to center
						fillTextPosition: 'inner', // 'horizontal' or 'vertical' or 'inner' & default text position is 'horizontal' position i.e. outside the canvas
						doughnutHoleSize: 50, // Percentage of doughnut size within the canvas & default doughnut size is null
						doughnutHoleColor: '#fff', // For doughnut colour & default colour is #fff (White)
						offset: 1, // Offeset between two segments & default value is null
						pie: 'normal', // if the pie graph is single stroke then we will add the object key as 'stroke' & default is normal as simple as pie graph
						isStrokePie: { 
							stroke: 20, // Define the stroke of pie graph. It takes number value & default value is 20
							overlayStroke: true, // Define the background stroke within pie graph. It takes boolean value & default value is false
							overlayStrokeColor: '#eee', // Define the background stroke colour within pie graph & default value is #eee (Grey)
							strokeStartEndPoints: 'Yes', // Define the start and end point of pie graph & default value is No
							strokeAnimation: true, // Used for animation. It takes boolean value & default value is true
							strokeAnimationSpeed: 50, // Used for animation speed in miliisecond. It takes number & default value is 20ms
							fontSize: '60px', // Used to define text font size & default value is 60px
							textAlignement: 'center', // Used for position of text within the pie graph & default value is 'center'
							fontFamily: 'Arial', // Define the text font family & the default value is 'Arial'
							fontWeight: 'bold' //  Define the font weight of the text & the default value is 'bold'
						}
					  };
	    var obj8 = {
						pie: 'stroke',
						values: [per1],
						colors: ['#E91E63'],
						isStrokePie: {
							stroke: 20,
							overlayStroke: true,
							overlayStrokeColor: '#eee',
							strokeStartEndPoints: 'Yes',
							strokeAnimation: true,
							strokeAnimationSpeed: 40,
							fontSize: '60px',
							textAlignement: 'center',
							fontFamily: 'Arial',
							fontWeight: 'bold'
						}
					  };
		var obj9 = {
						pie: 'stroke',
						values: [per2],
						colors: ['#1E90FF'],
						isStrokePie: {
							stroke: 20,
							overlayStroke: true,
							overlayStrokeColor: '#eee',
							strokeStartEndPoints: 'Yes',
							strokeAnimation: true,
							strokeAnimationSpeed: 40,
							fontSize: '60px',
							textAlignement: 'center',
							fontFamily: 'Arial',
							fontWeight: 'bold'
						}
					  };
		
		//Generate myCanvas		
		generatePieGraph('myCanvas', obj);
		generatePieGraph('myCanvas8', obj8);
		generatePieGraph('myCanvas9', obj9);		
		
		
	</script>";
?>
</body>
</html>
	 


