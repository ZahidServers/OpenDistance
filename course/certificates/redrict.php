<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->

<?php
echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.box{display: inline-block;width:250px;padding-top:none;margin-top:none;vertical-align:top;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	zahid{
		font-size:18px;
		font-weight:bold;
		text-shadow:2px 2px 6px;
		background-color:#4ca3dd;
		padding-top:none;
		margin:0;
		width:100%;
	}
	.zahid{
		font-size:18px;
		font-weight:bold;
		text-shadow:2px 2px 6px;
		background-color:#4ca3dd;
		padding:none;
		margin:0;
		width:100%;	}
	zahid a{
		color:green;
	}
	zahid a:hover{
		color:cyan;
		cursor:pointer;
	}
	</style>";
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$randomcharacter=substr(str_shuffle($permitted_chars), 0, 25);
$mycourses2=explode(" ",$completed);
if($completed!="")
{
	echo"<table class='zahid' width='100%'><tr><td><zahid>To Purchase Hard Copy of Certificates and Marksheets <a target='print_popup' onclick=\"window.open('../../payment/','print_popup','width=1000,height=600');\">Click Here</a></zahid></td></tr></table>";
    echo"<center><h1>Get Certificates of Courses you Completed</h1></center>";
for($ir=0;$ir<=str_word_count($completed)+1;$ir++)
{
    $r=$mycourses2[$ir];
    $ivsm=$r;
    if($ivsm!=""){
    $query6=mysql_query("SELECT *FROM course WHERE iv=$ivsm");
    error_reporting(E_ERROR | E_PARSE);
	while($rowsz=mysql_fetch_array($query6))
	{
		$iv=$rowsz['iv'];
		$title=$rowsz['name'];
		$description=$rowsz['description'];
		$keywords=$rowsz['keywords'];
		$type=$rowsz['type'];
		$subtype=$rowsz['subtype'];
		$hrs=$rowsz['hrs'];
		$src="$iv.png";
		echo "<form id='form1' action='./certificate.php' method='post'>
        <input type='hidden' name='id' value='$user'/>
        <input type='hidden' name='iv' value='$title'/>
        <div class='box'>
		<h3><a href='./certificate.php?is=$randomcharacter&des=$description&rfg=certificate&rmn=12ef$subtype+$randomcharacter&iv=$title&hrs=$hrs&key=$keywords&id=$user&sub=$subtype' >
		<img width='210px;' height='120px;' border='4' src='../iv/$src' alt='$title'></img><br>$title</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div>
		<div class='time'>This course is of $hrs hours category:$type:$subtype</div></div></form>";
	}
    }
}
}
else {
    echo "<center><h5>Not Completed Any Course</h5></center>";
}
if($completed!="")
{
    echo"<center><h1>Get Marksheets of Courses you Completed</h1></center>";
for($ir=0;$ir<=str_word_count($completed)+1;$ir++)
{
    $r=$mycourses2[$ir];
    $ivsm=$r;
    if($ivsm!=""){
    $query6=mysql_query("SELECT *FROM course WHERE iv=$ivsm");
    error_reporting(E_ERROR | E_PARSE);
	while($rowsz=mysql_fetch_array($query6))
	{
		$iv=$rowsz['iv'];
		$title=$rowsz['name'];
		$description=$rowsz['description'];
		$keywords=$rowsz['keywords'];
		$type=$rowsz['type'];
		$subtype=$rowsz['subtype'];
		$hrs=$rowsz['hrs'];
		$src="$iv.png";
		echo "<form id='form1' action='./certificate.php' method='post'>
        <input type='hidden' name='id' value='$user'/>
        <input type='hidden' name='iv' value='$title'/>
        <div class='box'>
		<h3><a href='./marksheet.php?is=$randomcharacter&des=$description&ism=$iv&rfg=marksheet&rmn=12ef$subtype+$randomcharacter&iv=$title&mbts=afg&hrs=$hrs&key=$keywords&id=$uname&sub=$subtype' >
		<img width='210px;' height='120px;' border='4' src='../iv/$src' alt='$title'></img><br>$title</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div>
		<div class='time'>This course is of $hrs hours category:$type:$subtype</div></div></form>";
	}
    }
}
}
else {
    echo "<center><h5>Not Completed Any Course</h5></center>";
}
?>