<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
echo"<center><h2>Search Courses</h2></center>";
?>
<center>
<form action="" method="get" value="">
<input type="text" name="k" value="<?php if(isset($_GET['k'])){echo $_GET['k'];}?>" placeholder="<?php if(!isset($_GET['k'])){echo "Search For Courses";}?>" size="50">
<input type="submit" value="search">
</form>
</center>
<div id="results">
<?php
$k=$_GET['k'];
$terms=explode(" ",$k);
$query="SELECT *FROM course WHERE";
foreach($terms as $each)
{
	$i++;
	if($i==1)
	{
		$query.=" keywords LIKE '$each'";
	}
	else
	{
		$query.="OR keywords LIKE '$each'";
	}
}
mysql_connect("localhost","root","");
mysql_select_db("studentenrollment");
$query=mysql_query($query);
$numrows=mysql_num_rows($query);
if($numrows>0)
{
	while($rowsz=mysql_fetch_assoc($query))
	{
		$iv=$rowsz['iv'];
		$title=$rowsz['name'];
		$description=$rowsz['description'];
		$keywords=$rowsz['keywords'];
		$type=$rowsz['type'];
		$subtype=$rowsz['subtype'];
		$hrs=$rowsz['hrs'];
		echo "<h3><a href='./video/?iv=$iv&id=1'>$title</a><h3><pre>$description</pre><br>";
	}
}
else{
	echo "No Results found for \"<b>$k</b>\"";
}
?>
</div>