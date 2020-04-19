<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
echo "<center><h1>Completed Course</h1></center>";
echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.box{display: inline-block;width:250px;padding-top:none;margin-top:none;vertical-align:top;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	</style>";
$mycourses2=explode(" ",$completed);
if($completed!="")
{
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
		echo "<div class='box'>
		<h3><a href='../video/?iv=$iv&id=$id'><img width='210px;' height='120px;' border='4' src='../iv/$src' alt='$title'></img><br>$title</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div>
		<div class='time'>This course is of $hrs hours category:$type:$subtype</div></div>";
	}
    }
}
}
else {
    echo "<center><h5>Not Completed Any Course</h5></center>";
}
echo "<center><h1>Enrolled Course</h1></center>";
$mycourses=explode(" ",$enrolled);
if($enrolled!="")
{
for($i=0;$i<=str_word_count($enrolled)+1;$i++)
{
    error_reporting(E_ALL & ~E_NOTICE);
    $r=$mycourses[$i];
    $ivs=$r;
    $query5=mysql_query("SELECT *FROM course WHERE iv=$ivs");
    error_reporting(E_ERROR | E_PARSE);
	while($rowsz=mysql_fetch_array($query5))
	{
		$iv=$rowsz['iv'];
		$title=$rowsz['name'];
		$description=$rowsz['description'];
		$keywords=$rowsz['keywords'];
		$type=$rowsz['type'];
		$subtype=$rowsz['subtype'];
		$hrs=$rowsz['hrs'];
		$src="$iv.png";
		echo "<div class='box'>
		<h3><a href='../video/?iv=$iv&id=$id'><img width='210px;' height='120px;' border='4' src='../iv/$src' alt='$title'></img><br>$title</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div>
		<div class='time'>This course is of $hrs hours category:$type:$subtype</div></div>";
	}
}
}
else{
    echo"<center><h5>Not Enrolled in Any Course</h5></center>";
}
?>