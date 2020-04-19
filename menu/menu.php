<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<script type="text/javascript" src="navbar/navcss.js"></script>
<script>/* Navbar Script pno-z30142#stdenrollment-student/Zahid/Server/Design-4028/pid-02 designed by Mohammed Zahid Wadiwale © Zahid Server*/
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}</script>
<?php include 'logos.php'; ?>
<?php include 'navs.php'; ?>