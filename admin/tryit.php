<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<?php
if(isset($_GET['fs']))
{
 $fs=$_GET["fs"];
 echo $fs;
}
?>
<form method='get'>
<textarea type='text' name='fs'></textarea>
<input type='submit'>
</form>