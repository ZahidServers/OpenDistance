<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<link rel="icon" type="image/png" href="../favicon.png" />
<link rel="icon" href="../favicon2.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon2.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" type="image/x-icon" href="../favicon2.ico" />
<title><?php include '../../sitetitle.php'?>|Test</title>
<script type="text/javascript">setTimeout("window.close();", 300000);
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>
<?php include '../vplayer/contextmenu.php';?>
<html oncontextmenu="return showcontextmenu(event);" >
    <?php 
            $id=$_POST['id'];
            $iv=$_POST['iv'];
            $title=$_POST['title'];
            $user=$_POST['user'];
            $enrolled=$_POST['enrolled'];
			echo'<div>Time Left <span id="time">5:00</span> minutes!</div>';
            echo"<center><h1>$title Test of part $id</h1><h4>Rules:-SELECT Correct Option any one out of four.<br>
			If no option is selected it will be considered incorrect answer<br>
			Complete all test to get certificate for this course<br>
			There is time limit of 3 minutes to complete the test 30s for each question</h4></center>";
			$local = file("../../host.txt");
			$host=implode(" ",$local);
			$db = file("../../unam.txt");
			$udb=implode(" ",$db);
			$word = file("../../pass.txt");
			$pass=implode(" ",$word);
			$con = mysql_connect($host, $udb, $pass);
			if (!$con) {
            die('Could not connect: ' . mysql_error());
            }
            mysql_select_db("studentenrollment",$con);
            $resultf=mysql_query("SELECT *FROM playlist WHERE iv=$iv AND id=$id");
            echo "<form action='./checkanswer.php' method='post'>";
            while($rowf=mysql_fetch_array($resultf))
            {
                $question=$rowf['Question'];
                $ans=$rowf['ans'];
                $opt1=$rowf['opt1'];
                $opt2=$rowf['opt2'];
                $opt3=$rowf['opt3'];
                $opt4=$rowf['opt4'];
                echo "<h4>Question1:$question</h4>
                <table width='480px'><tr><td><input type='radio' name='q1' value='$opt1'>$opt1</td><td><input type='radio' name='q1' value='$opt2'>$opt2</td></tr>
                <tr><td><input type='radio' name='q1' value='$opt3'>$opt3</td><td><input type='radio' name='q1' value='$opt4'>$opt4</td></tr></table>";
                $question1=$rowf['1Question'];
                $ans1=$rowf['1ans'];
                $fopt1=$rowf['1opt1'];
                $fopt2=$rowf['1opt2'];
                $fopt3=$rowf['1opt3'];
                $fopt4=$rowf['1opt4'];
                echo "<h4>Question2:$question1</h4>
                <table width='480px'><tr><td><input type='radio' name='q2' value='$fopt1'>$fopt1</td><td><input type='radio' name='q2' value='$fopt2'>$fopt2</td></tr>
                <tr><td><input type='radio' name='q2' value='$fopt3'>$fopt3</td><td><input type='radio' name='q2' value='$fopt4'>$fopt4</td></tr></table>";
                $question2=$rowf['2Question'];
                $ans2=$rowf['2ans'];
                $sopt1=$rowf['2opt1'];
                $sopt2=$rowf['2opt2'];
                $sopt3=$rowf['2opt3'];
                $sopt4=$rowf['2opt4'];
                echo "<h4>Question3:$question2</h4>
                <table width='480px'><tr><td><input type='radio' name='q3' value='$sopt1'>$sopt1</td><td><input type='radio' name='q3' value='$sopt2'>$sopt2</td></tr>
                <tr><td><input type='radio' name='q3' value='$sopt3'>$sopt3</td><td><input type='radio' name='q3' value='$sopt4'>$sopt4</td></tr></table>";
                $question3=$rowf['3Question'];
                $ans3=$rowf['3ans'];
                $topt1=$rowf['3opt1'];
                $topt2=$rowf['3opt2'];
                $topt3=$rowf['3opt3'];
                $topt4=$rowf['3opt4'];
                echo "<h4>Question4:$question3</h4>
                <table width='480px'><tr><td><input type='radio' name='q4' value='$topt1'>$topt1</td><td><input type='radio' name='q4' value='$topt2'>$topt2</td></tr>
                <tr><td><input type='radio' name='q4' value='$topt3'>$topt3</td><td><input type='radio' name='q4' value='$topt4'>$topt4</td></tr></table>";
                $question4=$rowf['4Question'];
                $ans4=$rowf['4ans'];
                $fropt1=$rowf['4opt1'];
                $fropt2=$rowf['4opt2'];
                $fropt3=$rowf['4opt3'];
                $fropt4=$rowf['4opt4'];
                echo "<h4>Question5:$question4</h4>
                <table width='480px'><tr><td><input type='radio' name='q5' value='$fropt1'>$fropt1</td><td><input type='radio' name='q5' value='$fropt2'>$fropt2</td></tr>
                <tr><td><input type='radio' name='q5' value='$fropt3'>$fropt3</td><td><input type='radio' name='q5' value='$fropt4'>$fropt4</td></tr></table>";
				$question5=$rowf['5Question'];
                $ans5=$rowf['5ans'];
                $fiopt1=$rowf['5opt1'];
                $fiopt2=$rowf['5opt2'];
                $fiopt3=$rowf['5opt3'];
                $fiopt4=$rowf['5opt4'];
                echo "<h4>Question6:$question5</h4>
                <table width='480px'><tr><td><input type='radio' name='q6' value='$fiopt1'>$fiopt1</td><td><input type='radio' name='q6' value='$fiopt2'>$fiopt2</td></tr>
                <tr><td><input type='radio' name='q6' value='$fiopt3'>$fiopt3</td><td><input type='radio' name='q6' value='$fiopt4'>$fiopt4</td></tr></table>";
				echo"<input type='text' style='display:none;' value='$ans' name='ans1'>";
				echo"<input type='text' style='display:none;' value='$ans1' name='ans2'>";
				echo"<input type='text' style='display:none;' value='$ans2' name='ans3'>";
				echo"<input type='text' style='display:none;' value='$ans3' name='ans4'>";
				echo"<input type='text' style='display:none;' value='$ans4' name='ans5'>";
				echo"<input type='text' style='display:none;' value='$ans5' name='ans6'>";
				echo"<input type='text' style='display:none;' value='$user' name='user'>";
				echo"<input type='text' style='display:none;' value='$iv' name='course'>";
				echo"<input type='text' style='display:none;' value='$id' name='part'>";
				echo"<input type='submit' value='submit'></form>";
            }

            
    ?>
</html>