<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!DOCTYPE html>
<html oncontextmenu="return showcontextmenu(event);" onmouseleave="hidecontextmenu();">
<?php include 'contextmenu.php'?>
<head>
  <title><?php include '../sitetitle.php'?>|Admin</title>
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
  width: 30%;
  height: 530px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
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
  width: 70%;
  border-left: none;
  height: 530px;
}
</style>
</head>
<body>

<h2>Welcome Content Admin</h2>
<h3>Warning:Changes done here would affect the site</h3>

<div class="tab">
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'sitetitle')" id="defaultOpen">Site Title</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'companyname')">Company Name</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'jscount')">Counter Time</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'marquee')">Announcement</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'banner')">Banner Text</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'Footer')">Footer</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'alumini')">Alumini</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'pricing')">Pricing</button>
</div>

<div id="sitetitle" class="tabcontent">
  <h3>Set Site Title</h3>
<iframe src="../sitetitler.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="companyname" class="tabcontent">
  <h3>Company Details</h3>
<iframe src="../companyname.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="jscount" class="tabcontent">
  <h3>Set Discount Counter date</h3>
<iframe src="../jscounter/jscount.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="marquee" class="tabcontent">
  <h3>Change Announcement</h3>
<iframe src="../marquee/marquee.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="banner" class="tabcontent">
  <h3>Change banner text</h3>
<iframe src="../banner/banner.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="Footer" class="tabcontent">
<iframe src="../footer/footer.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="alumini" class="tabcontent">
<iframe src="../alslider2_files/alumini.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="pricing" class="tabcontent">
  <h3>Change Price of Pro version</h3>
<iframe src="./pricing.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:370px"></iframe>
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
