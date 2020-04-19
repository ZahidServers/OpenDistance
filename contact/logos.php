<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<style>
			.headerz{
				width:100%;
				height:80px;
				background-color:#E6E6FA;
			}
			body{
				margin:0px;
				padding:0px;
			}
			.logo{
				color:#663399;
				font-size:25px;
				font-family:verdana;
				text-align:left;
				margin-top:5px;
				float:left;
				margin:0px;
				line-height:50px;
				padding-left:9px;
			}
			/* unvisited link */
            .logoscj:link {
                color:#663399;
				font-size:25px;
				font-family:verdana;
				text-align:left;
				margin-top:5px;
				float:left;
				margin:0px;
				line-height:50px;
				padding-left:9px;
                text-decoration:none;
				}

            /* visited link */
            .logoscj:visited {
                color:#663399;
				font-size:25px;
				font-family:verdana;
				text-align:left;
				margin-top:5px;
				float:left;
				margin:0px;
				line-height:50px;
				padding-left:9px;
				text-decoration:none;
                      }

            /* mouse over link */
            .logoscj:hover {
                color:#845BAD;
				font-size:25px;
				font-family:verdana;
				text-align:left;
				margin-top:5px;
				float:left;
				margin:0px;
				line-height:50px;
				padding-left:9px;
				text-decoration:none;
                    }

            /* selected link */
            .logoscj:active {
                color:#663399;
				font-size:25px;
				font-family:verdana;
				text-align:left;
				margin-top:5px;
				float:left;
				margin:0px;
				line-height:50px;
				padding-left:9px;
                text-decoration:none;
                     }
			.nonetitle:hover{
				color:#845BAD;
				text-align:left;
				margin-top:5px;
				float:left;
				margin:0px;
			}
		</style>
	</head>
	<body>
		<div class="headerz">
		<header>
		<div style="background-color:red;color:yellow;font-size: 15px;font-weight: bold;">
		<marquee width="120%" direction="left" height="15px" scrollamount="10" >Announcements:<?php include '../marquee/marquee.txt';?></marquee>
		</div><br>
			<h1 class="logo"><a href="./" class="logoscj"><?php include '../sitetitle.php'?>-Distant Learning</a></h1>
			<h5 class='nonetitle' style='color:#663399;padding-bottom:5px;text-align:left;margin-top:5px;float:left;margin:0px;' ><a href='../' style='color:purple;text-decoration:none'><?php include '../sitetitle.php'?>-Distant Learning</a></br></h5>
			<form method='get' action='../course/' style="float:right;display:inline-block;line-height:52px;padding-right:14px; width:30%;">
				<input type="text" autocomplete="off" class='search' name="k" placeholder="search.." style="width:70%;box-sizing: border-box;border: 2px solid #ccc;border-radius: 4px;font-size: 16px;background-color: white;background-image: url('searchicon.png');background-position: 10px 10px;background-repeat: no-repeat;padding: 12px 20px 12px 40px;"><input class='search' type="submit" style="width:25%;background-color: #4CAF50;border: none;color: white;padding: 15px 6px;text-decoration: none;margin: 4px 2px;cursor: pointer;" value="Search"></input>
			</form>
		</header>
		</div>
	</body>