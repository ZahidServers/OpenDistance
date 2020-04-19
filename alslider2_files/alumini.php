<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!DOCTYPE html>
<html oncontextmenu="return showcontextmenu(event);" >
<?php include 'contextmenu.php'?>
<head>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="aluminiZahidDiv(event, 'Aluminis')">Aluminis</button>
  <button class="tablinks" onclick="aluminiZahidDiv(event, 'student1')">student1</button>
  <button class="tablinks" onclick="aluminiZahidDiv(event, 'student2')">student2</button>
  <button class="tablinks" onclick="aluminiZahidDiv(event, 'student3')">student3</button>
</div>

<div id="Aluminis" class="tabcontent">
  <h4>Add group photo of aluminis and change text</h4>
<iframe src="./aluminigrp.php" scrolling="no" style=" width:100%;border:none;height:350px"></iframe>
</div>

<div id="student1" class="tabcontent">
  <h3>Add a student photo and add his caption</h3>
<iframe src="./student1.php" scrolling="no" style=" width:100%;border:none;height:350px"></iframe>
</div>

<div id="student2" class="tabcontent">
  <h3>Add another student and his caption</h3>
<iframe src="./student2.php" scrolling="no" style=" width:100%;border:none;height:350px"></iframe>
</div>

<div id="student3" class="tabcontent">
  <h3>Add another student and his caption</h3>
<iframe src="./student3.php" scrolling="no" style=" width:100%;border:none;height:350px"></iframe>
</div>

<script>
function aluminiZahidDiv(evt, cityName) {
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
</script>
   
</body>
</html> 
