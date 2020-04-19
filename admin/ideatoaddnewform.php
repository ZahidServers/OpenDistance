<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<!DOCTYPE html>
<html>
<head>
<script>
var a=1;
function r()
{    
if(a==1)
document.querySelector("div").style.display = "block";
else
document.querySelector("div").style.display = "none";
}
</script>
</head>
<body>
<div style="display:none;">blah blah blah</div>
<button onclick="r()">Show</button>

</body>
</html>
