<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add tinymce editor in PHP or HTML </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../blog/tinymce/tinymce.min.js"></script>
<style>
.texteditor-container { 
 width:700px;
 height:365px;
}
textarea#editor1 {
 width:500px !important;
 border:1px solid red;
 
}
</style>
<script>
if ( window.location === window.parent.location ) 
{
	window.location.href='../../404.php';
}
</script>
<script>
 tinymce.init({
   selector: 'textarea#editor',branding: false,  contextmenu: "link image imagetools table spellchecker",
  plugins:'code save link image media lists pageembed charmap preview contextmenu pagebreak searchreplace wordcount visualblocks table visualchars code fullscreen insertdatetime nonbreaking emoticons template paste textcolor',
  statubar: true,});
 
 $( document ).ready(function() {
 
  $('#buttonpost').on("click", function(){
   tinyMCE.triggerSave();
   var value = $("textarea#editor").val();  
   $("#display-post").html(value);
   $(".texteditor-container").hide();
   return false;
  });
 
 });   
 
</script>

</head>
<body>
 
 <div class="texteditor-container">
     <h1> Add tinymce editor in PHP or HTML </h1>
  <textarea name="editor" id="editor"></textarea>
  <input type="button" id="buttonpost" value="Publish Post"  />
 </div>
 
 <div id="display-post" style="width:700px;" ></div>
 
 
</body>
</html>