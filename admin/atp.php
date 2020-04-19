<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<!--hh-->
<?php
$local = file("../host.txt");
$host=implode(" ",$local);
$db = file("../unam.txt");
$udb=implode(" ",$db);
$word = file("../pass.txt");
$pass=implode(" ",$word);
$con = mysql_connect($host, $udb, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("studentenrollment");
$getit=$_GET['iv'];
if(!isset($_GET['id'])){
	echo "<style>
	.box a{color:green;}
	.box a:hover{color:hotpink;}
	.box{display: inline-block;width:250px;padding-top:none;margin-top:none;vertical-align:top;}
	.time{font-size:10px;width:180px;}
	.description{font-size:15px;width:180px;}
	</style>";
	$query5=mysql_query("SELECT *FROM playlist WHERE iv='$getit'");
	while($rowsz=mysql_fetch_array($query5))
	{
		$id=$rowsz['part'];
		$iv=$rowsz['iv'];
		$title=$rowsz['title'];
		$description=$rowsz['description'];
		$ism=$rowsz['id'];
		$src="$iv.png";
		echo "<div class='box'>
		<h3><a href='./atp.php/?iv=".$getit."&id=".$id."&ism=".$ism."'><img width='210px;' height='120px;' border='4' src='../course/iv/$src' alt='$title'></img><br>$title part $id</a>&nbsp;&nbsp;&nbsp;<h3>
		<div class='description'><p>$description &nbsp;</p></div><div class='time'></div></div>";
	}
}
if(isset($_GET['id']))
{

	$n=$_GET['id'];
	$d=$_GET['ism'];
	$resultft=mysql_query("SELECT *FROM playlist WHERE id='$d'");
	while($rowft=mysql_fetch_array($resultft))
            {
                $question=$rowft['Question'];
                $bans=$rowft['ans'];
                $dopt1=$rowft['opt1'];
                $dopt2=$rowft['opt2'];
                $dopt3=$rowft['opt3'];
                $dopt4=$rowft['opt4'];
				$question1=$rowft['1Question'];
                $bans1=$rowft['1ans'];
                $fopt1=$rowft['1opt1'];
                $fopt2=$rowft['1opt2'];
                $fopt3=$rowft['1opt3'];
                $fopt4=$rowft['1opt4'];
				$question2=$rowft['2Question'];
                $bans2=$rowft['2ans'];
                $sopt1=$rowft['2opt1'];
                $sopt2=$rowft['2opt2'];
                $sopt3=$rowft['2opt3'];
                $sopt4=$rowft['2opt4'];
				$question3=$rowft['3Question'];
                $bans3=$rowft['3ans'];
                $topt1=$rowft['3opt1'];
                $topt2=$rowft['3opt2'];
                $topt3=$rowft['3opt3'];
                $topt4=$rowft['3opt4'];
				$question4=$rowft['4Question'];
                $bans4=$rowft['4ans'];
                $fropt1=$rowft['4opt1'];
                $fropt2=$rowft['4opt2'];
                $fropt3=$rowft['4opt3'];
                $fropt4=$rowft['4opt4'];
				$question5=$rowft['5Question'];
                $bans5=$rowft['5ans'];
                $fiopt1=$rowft['5opt1'];
                $fiopt2=$rowft['5opt2'];
                $fiopt3=$rowft['5opt3'];
                $fiopt4=$rowft['5opt4'];
			}
	$video='../course/storage/'.$getit.'zahid'.$n.'.mp4';
	$exam=5;
	$file_pointer=$video;
	if(isset($_POST['q1']))
	{
		$q1=$_POST['q1'];$ans1=$_POST['ans1'];$o1pt1=$_POST['o1pt1'];$o1pt2=$_POST['o1pt2'];$o1pt3=$_POST['o1pt3'];
		$q2=$_POST['q2'];$ans2=$_POST['ans2'];$o2pt1=$_POST['o2pt1'];$o2pt2=$_POST['o2pt2'];$o2pt3=$_POST['o2pt3'];
		$q3=$_POST['q3'];$ans3=$_POST['ans3'];$o3pt1=$_POST['o3pt1'];$o3pt2=$_POST['o3pt2'];$o3pt3=$_POST['o3pt3'];
		$q4=$_POST['q4'];$ans4=$_POST['ans4'];$o4pt1=$_POST['o4pt1'];$o4pt2=$_POST['o4pt2'];$o4pt3=$_POST['o4pt3'];
		$q5=$_POST['q5'];$ans5=$_POST['ans5'];$o5pt1=$_POST['o5pt1'];$o5pt2=$_POST['o5pt2'];$o5pt3=$_POST['o5pt3'];
		$q6=$_POST['q6'];$ans6=$_POST['ans6'];$o6pt1=$_POST['o6pt1'];$o6pt2=$_POST['o6pt2'];$o6pt3=$_POST['o6pt3'];
		$sql8="UPDATE playlist SET 
		Question='$q1',ans='$ans1',opt1='$ans1',opt2='$o1pt1',opt3='$o1pt2',opt4='$o1pt3',
		1Question='$q2',1ans='$ans2',1opt1='$o2pt1',1opt2='$ans2',1opt3='$o2pt2',1opt4='$o2pt3',
		2Question='$q3',2ans='$ans3',2opt1='$ans3',2opt2='$o3pt2',2opt3='$o3pt3',2opt4='$o3pt1',
		3Question='$q4',3ans='$ans4',3opt1='$o4pt1',3opt2='$o4pt2',3opt3='$o4pt3',3opt4='$ans4',
		4Question='$q5',4ans='$ans5',4opt1='$o5pt1',4opt2='$ans5',4opt3='$o5pt2',4opt4='$o5pt3',
		5Question='$q6',5ans='$ans6',5opt1='$o6pt1',5opt2='$o6pt2',5opt3='$ans6',5opt4='$o6pt3'
		WHERE id='$d'";
		if(mysql_query($sql8))
		{
			echo"<h1 style='color:red;background-color:hotpink;'>Test Sucessfully Created/Updated</h1>";
		}
		else{
			echo"<h1 style='color:red;background-color:hotpink;'>Error:".mysql_error()."</h1>";
		}
	}
	echo"<style>textarea{width:100%;}</style><table border='1'><form method='post'>
<tr>
	<td>
		<label>Question1</label>
	</td>
	<td colspan='3'>
		<textarea name='q1' required>$question</textarea>
	</td>
</tr><tr>
	<td>
		Answer:<input type='text' value='$bans' name='ans1' required></td><td>
		Option:<input type='text' value='$dopt2' name='o1pt1' required></td><td>
		Option:<input type='text' value='$dopt3' name='o1pt2' required></td><td>
		Option:<input type='text' value='$dopt4' name='o1pt3' required></td>
	</td>
</tr>
<tr>
	<td>
		<label>Question2</label>
	</td>
	<td colspan='3'>
		<textarea name='q2' required>$question1</textarea>
	</td>
</tr><tr>
		<td>
		Answer:<input type='text' value='$bans1' name='ans2' required></td><td>
		Option:<input type='text' value='$fopt1' name='o2pt1' required></td><td>
		Option:<input type='text' value='$fopt3' name='o2pt2' required></td><td>
		Option:<input type='text' value='$fopt4' name='o2pt3' required></td>
	</td>
</tr>
<tr>
	<td>
		<label>Question3</label>
	</td>
	<td colspan='3'>
		<textarea name='q3' required>$question2</textarea>
	</td>
</tr><tr>
		<td>
		Answer:<input type='text' value='$bans2' name='ans3' required></td><td>
		Option:<input type='text' value='$sopt2' name='o3pt1' required></td><td>
		Option:<input type='text' value='$sopt3' name='o3pt2' required></td><td>
		Option:<input type='text' value='$sopt4' name='o3pt3'  required></td>
	</td>
</tr>
<tr>
	<td>
		<label>Question4</label>
	</td>
	<td colspan='3'>
		<textarea name='q4' required>$question3</textarea>
	</td>
</tr><tr>
		<td>
		Answer:<input type='text' value='$bans3' name='ans4' required></td><td>
		Option:<input type='text' value='$topt1' name='o4pt1' required></td><td>
		Option:<input type='text' value='$topt2' name='o4pt2' required></td><td>
		Option:<input type='text' value='$topt3' name='o4pt3' required></td>
	</td>
</tr>
<tr>
	<td>
		<label>Question5</label>
	</td>
	<td colspan='3'>
		<textarea name='q5' required>$question4</textarea>
	</td>
</tr><tr>
		<td>
		Answer:<input type='text' value='$bans4' name='ans5' required></td><td>
		Option:<input type='text' value='$fropt1' name='o5pt1' required></td><td>
		Option:<input type='text' value='$fropt3' name='o5pt2' required></td><td>
		Option:<input type='text' value='$fropt4' name='o5pt3' required></td>
	</td>
</tr>
<tr>
	<td>
		<label>Question6</label>
	</td>
	<td colspan='3'>
		<textarea name='q6' required>$question5</textarea>
	</td>
</tr><tr>
		<td>
		Answer:<input type='text' value='$bans5' name='ans6' required></td><td>
		Option:<input type='text' value='$fiopt1' name='o6pt1' required></td><td>
		Option:<input type='text' value='$fiopt2' name='o6pt2' required></td><td>
		Option:<input type='text' value='$fiopt4' name='o6pt3' required></td>
	</td>
</tr>
		<tr>
			<td colspan='4'>
				<input type='submit' value='Create/Edit Text'>
			</td>
		</tr>
	</form>
</table>";
}
?>