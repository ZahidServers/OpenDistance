<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!DOCTYPE html>
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<?php include 'contextmenu.php'?>
<head>
  <title><?php include '../Home.php'?>|Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<style>
* {box-sizing: border-box}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 15%;
  height: 530px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding:15px 14px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 85%;
  border-left: none;
  height: 530px;
}
</style>
</head>
<body>

<h2>Welcome to Course Management</h2>
 <h3>Warning:Changes done here would affect the site</h3>
<div class="tab">
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'Home')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'ViewCourses')">View Courses</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'EditCourses')">Edit Courses</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'RemoveCourses')">Remove Courses</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'AddCourses')">Add Courses</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'logo')">Add/Edit Course Logo</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'AddVideos')">Add Videos</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'EditVideos')">Edit Videos</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'RemoveVideos')">Remove Videos</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'addtest')">Add/Edit Test</button>
</div>

<div id="Home" class="tabcontent">
  <h1>Home|Course-Management</h1>
  <h3>You can create a new course edit existing courses from here</h3>
  <h3>You can Add Videos in your courses create parts in courses</h3>
  <h3>You Delete Videos or Remove the entire course from website from here.</h3>
</div>
<div id="ViewCourses" class="tabcontent">
  <h3>View Courses</h3>
<iframe src="./ViewCourses.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px;overflow-horizontal: scroll;"></iframe>
</div>
<div id="EditCourses" class="tabcontent">
  <h3>Edit Courses</h3>
<iframe src="./EditCourses.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="RemoveCourses" class="tabcontent">
  <h3>Remove Courses</h3>
<iframe src="./RemoveCourse.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="AddCourses" class="tabcontent">
  <h3>Create New Course</h3>
<iframe src="./AddCourses.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="logo" class="tabcontent">
  <h3>Add/Edit Course Logo</h3>
<iframe src="./logo.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="AddVideos" class="tabcontent">
  <h3>Add Videos</h3>
<iframe src="./AddVideo.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="EditVideos" class="tabcontent">
  <h3>Edit Videos</h3>
<iframe src="./EditVideos.php" onmouseenter='hidecontextmenu();' scrolling="yes" style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="RemoveVideos" class="tabcontent">
  <h3>Remove Videos</h3>
<iframe src="./RemoveVideos.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="addtest" class="tabcontent">
  <h3>ADD/Edit TEST</h3>
<iframe src="./addtest.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>

<script>
function ChangeThisZahidToDiv(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
