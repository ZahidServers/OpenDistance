<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.runcountdowns{
    background-color: #191919;
    height:270px;
}
.runcountdownrr{
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  color: silver;
  text-shadow:5px 5px 10px white;
}
.runcountdownr{
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  color: red;
  text-shadow:5px 5px 10px red;
}
.runcountdown {
  text-align: center;
  margin-top: 0px;
  background: -webkit-linear-gradient(#eee, #333);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow:15px 15px 7px black;
  font-family: Arial, Helvetica, sans-serif;
}
@media(min-width:652px)
{
	.runcountdownr{
		font-size: 28px;
	}
	.runcountdownrr{
		font-size: 28px;
	}
}
@media(max-width:651px)
{
	.runcountdownr{
		font-size: 18px;
	}
	.runcountdownrr{
		font-size: 18px;
	}
}
@media(max-width:625px)
{
	.runcountdown{
		font-size: 30px;
	}
}
@media(min-width:625px)
{
	.runcountdown{
		font-size: 18px;
	    font-size: 40px;
	}
}
</style>
<div id="runcountdowns" class="runcountdowns">
<div id="runcountdownrr" class="runcountdownrr"><br>Get 50%Off on pro account for New Users</div>
<div id="runcountdown" class="runcountdown"></div><br><br>
<div id="runcountdownr" class="runcountdownr">*Hurry Limited period offer<br></div>
</div>

<script>
// Set the date we're counting down to

var countDownDate = new Date(<?php include 'jscountupdata.php'?>).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="runcountdowns"
  document.getElementById("runcountdown").innerHTML ="<br>" + days + " Days&nbsp; " + hours + " Hrs&nbsp; "
  + minutes + " mins&nbsp; " + seconds + " sec ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("runcountdowns").innerHTML = "EXPIRED";
  }
}, 1000);
</script>