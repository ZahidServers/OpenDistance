<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
if(isset($_POST['msg'])&&isset($_POST['name'])&&isset($_POST['email']))
{
	require '../phpmailer/PHPMailerAutoload.php';
	$localn = file("../footer/Email.txt");
	$hostn=implode(" ",$localn);
	$dbtf = file("../passe.txt");
	$udbs=implode(" ",$dbtf);
	$mail=new PHPMailer;
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Username='$hostn';
	$mail->Password='$udbs';
	$mail->setFrom($_POST['email'],$_POST['name']);
	$mail->addAddress('smarzabal@gmail.com');
	$mail->addReplyTo($_POST['email'],$_POST['name']);
	$mail->isHTML(true);
	$mail->Subject='Message Us Form Submission:'.$_POST['name'];
	$mail->Body='<h1 align="center">Email:'.$_POST['email'].'<br>Name'.$_POST['name'].'</h1>'.'<br>'.'Message'.$_POST['msg'].'';
	if(!$mail->send()){
		$result=1;
	}
	else
	{
		$result=0;
	}
	$azee=$mail->ErrorInfo;
	if($result==1)
	{
		echo'<script>alert("Message not Sent Connnection error '.$azee.'");</script>';
		unset($_POST);
		echo'<script>
			if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
			}
			</script>';
	}
	else
	{
		echo'<script>alert("Message Has been Sent");</script>';
		unset($_POST);
		echo'<script>
			if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
			}
			</script>';
	}
	unset($_POST);
}
?>
<style>
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
  z-index:+1;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 1;
  right: 15px;
  border: 3px solid #f1f1f1;
  background-color: white;
  z-index:+9;
}

/* Add styles to the form container */
.form-containerz {
  max-width: 300px;
  padding: 10px;
  background-color: white;
  height:500px;
}

/* Full-width textarea */
.form-containerz textarea {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 150px;
  max-height: 250px;
}
.form-containerz input[type=text], input[type=email] {
  width: 100%;
  padding: 4px 8px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  background-image:none;
  font-size:18px;
}
/* When the textarea gets focus, do something */
.form-containerz textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-containerz .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-containerz .cancel {
  background-color: red;
}
.form-containerz label{
	font-size:20px;
}
/* Add some hover effects to buttons */
.form-containerz .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<button class="open-button" onclick="openForm()">Message Us</button>

<div class="chat-popup" id="myForm">
  <form action="./" method="POST" class="form-containerz" autocomplete="off">
    <label for="email"><b>Your Credentials </b></label>
	<input type="text" style="display:none" autocomplete="off">
	<input autocomplete="false" name="hidden" type="text" style="display:none;">
	<input type="email" name="email" placeholder="Enter Your Email" autocomplete="new-password" autocomplete="off" autocomplete="false" required>
    <input type="text" name="name" placeholder="Enter Your Name" autocomplete="new-password" autocomplete="off"  autocomplete="false" required>
    <label for="msg" ><b>Your Enquiry</b></label>
	
    <textarea placeholder="Type message.." name="msg" autocomplete="new-password" autocomplete="false" autocomplete="off" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
