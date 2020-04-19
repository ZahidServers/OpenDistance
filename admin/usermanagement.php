<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!DOCTYPE html>
<html oncontextmenu="return showcontextmenu(event);" onmouseleave='hidecontextmenu();' >
<?php include 'contextmenu.php'?>
<head>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
  <title><?php include '../Home.php'?>|Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  padding:18px 14px;
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

<h2>Welcome to User-Management</h2>
 <h3>Warning:Changes done here would affect the site</h3>
<div class="tab">
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'Home')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'UserList')">User list</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'SearchUser')">Search User</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'RemoveUser')">Remove User</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'EditUserDetails')">Edit User Details</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'PaidUsers')">Paid User</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'FreeUsers')">Free User</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'PayDetails')">Payments Details</button>
  <button class="tablinks" onclick="ChangeThisZahidToDiv(event, 'SubDetails')">Subscription Details</button>
</div>

<div id="Home" class="tabcontent">
  <h3>Home|User-Management</h3>
<iframe src="./piechart-master/rpie.php" onmouseenter='hidecontextmenu();' scrolling="no" style=" width:100%;border:none;height:500px"></iframe>
</div>
<div id="UserList" class="tabcontent">
  <h3>User Details</h3>
<iframe src="./UserList.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px;overflow-horizontal: scroll;"></iframe>
</div>
<div id="SearchUser" class="tabcontent">
  <h3>Search User</h3>
<iframe src="./searchuser.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="RemoveUser" class="tabcontent">
  <h3>Remove User</h3>
<iframe src="./RemoveUser.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="EditUserDetails" class="tabcontent">
  <h3>Edit User Details</h3>
<iframe src="./EditUserDetails.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="PaidUsers" class="tabcontent">
<iframe src="./PaidUsers.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="FreeUsers" class="tabcontent">
<iframe src="./FreeUsers.php" onmouseenter='hidecontextmenu();' scrolling="yes" style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="PayDetails" class="tabcontent">
  <h3>Payment Details</h3>
<iframe src="./payment.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
</div>
<div id="SubDetails" class="tabcontent">
  <h3>Payment Details</h3>
<iframe src="./subscription.php" scrolling="yes" onmouseenter='hidecontextmenu();' style=" width:100%;border:none;height:400px"></iframe>
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
