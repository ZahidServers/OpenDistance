<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<style>
.contextmenu{
	width:230px;
	height: auto;
	box-shadow:0 0 20px 0 #ccc;
	position:absolute;
	display:none;
	z-index:+3;
    font-size: 15px;
	background-color:white;
}
.contextmenu ul{
	list-style:none;
	padding:5px 5px 5px 5px;
	z-index:+5;
}
.contextmenu ul li{
	list-style:none;
	padding:5px 0px 5px 0px;
	border-left:4px solid transparent;
	cursor:pointer;
	z-index:+5;
}
.contextm1 {
	color:black;
	z-index:+5;
	
}
.contextm1:link {
  text-decoration: none;
  z-index:+5;
}

.contextm1:visited {
  text-decoration: none;
  z-index:+5;
}

.contextm1:hover {
  text-decoration: none;
  z-index:+5;
}

.contextm1:active {
  text-decoration: none;
  z-index:+5;
}
.contextmenu ul li:not(.sepratorcontextmenu){
	list-style:none;
	padding:5px 0px 5px 0px;
	border-left:4px solid transparent;
	cursor:pointer;
	z-index:+5;
}
.contextmenu ul li:hover{
	list-style:none;
	padding:5px 0px 5px 0px;
	border-left:4px solid #666;
	cursor:pointer;
	background:#eee;
	z-index:+5;
}
.sepratorcontextmenu{
	height:1px;
	background:#dedede;
	margin: 0px 0px 0px 0px;
	z-index:+5;
}
</style>
<div id="contextmenu" class="contextmenu">
<ul>
<li>Site Developed by<br>Mohammed Zahid Wadiwale</li>
<li><a class ="contextm1" href="../about">About US</a></li>
<li><a class ="contextm1" href="../contact">Contact Us</a></li>
<li><a class ="contextm1" href="">Contact Site Developer</a></li>
<li class="sepratorcontextmenu"></li>
<li><a class ="contextm1" onclick="location.reload();">Reload Page</a></li>
<li onclick="window.open('//twitter.com/intent/tweet?text=' + window.location.href);">Share Page on Twitter</li>
<li onclick="window.open('//facebook.com/sharer/sharer.php?u=' + window.location.href);">Share on Facebook</li>
<li onclick="window.location='mailto:?body='+window.location.href;">Email This Page</li>
<li>For Copy Use CTRL+Z</li>
</ul>
</div>
<script language="javascript">
window.onclick=hidecontextmenu;
window.onkeydown=listenkeyscontext;
var contextmenuheight=document.getElementById("contextmenu");
var contexteheight=contextmenuheight.offsetHeight;
var contextmenu=document.getElementById('contextmenu');
var contextdisp=window.innerHeight;
function showcontextmenu(event) {
	contextmenu.style.display="block";
	contextmenu.style.left=event.clientX+'px';
	contextmenu.style.top=event.clientY+'px';
	return false;
}
function hidecontextmenu(){
	contextmenu.style.display="none";
}
function listenkeyscontext(event){
	var KeyCode=event.which||event.KeyCode;
	if(KeyCode==27)
	{
		hidecontextmenu();
	}
}
</script>
