<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<div id="navbar">
  <a class="active" href="./">Home</a>
  <a href="#pricing">Pricing</a>
  <a href="#alumini">Alumini</a>
  <a href="./contact/">Contact-US</a>
  <a href="./about" onclick="changeabout()">About US</a>
  <a href="./course">Courses</a>
  <a href="./blog">Blogs</a>
<div id="notlogin" name="notlogin">
  <?php 
 if(isset($_SESSION["logined"]))
 {
  $a=$_SESSION["logined"];
  
  if($a != "")
  {
    echo "<a href='./user'>User Panel</a> <a href='./login/logout.php'>LogOut</a><br>";
  
  }
  else
  {
    echo "<a href='./login/'>LogIn</a><br>";
  }
  }
  else
  {
	echo "<a href='./login/'>LogIn</a><br>";
  }
  ?>
</div>
</div>