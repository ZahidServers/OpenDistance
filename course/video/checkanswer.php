<!--This page is coded by Mohammed Zahid Wadiwale and is intellectual property of Zahid Servers-->
<?php
$course=$_POST['course'];
$part=$_POST['part'];
$user=$_POST['user'];
if(isset($_POST['q1'])){
$q1=$_POST['q1'];
}
else
{
    $q1="*7&falsehai";
}
if(isset($_POST['q2'])){
$q2=$_POST['q2'];
}
else
{
    $q2="*7&falsehai";
}
if(isset($_POST['q3'])){
$q3=$_POST['q3'];
}
else
{
    $q3="*7&falsehai";
}
if(isset($_POST['q4'])){
$q4=$_POST['q4'];
}
else
{
    $q4="*7&falsehai";
}
if(isset($_POST['q5'])){
$q5=$_POST['q5'];
}
else
{
    $q5="*7&falsehai";
}
if(isset($_POST['q6'])){
$q6=$_POST['q6'];
}
else
{
    $q6="*7&falsehai";
}
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
$ans5=$_POST['ans5'];
$ans6=$_POST['ans6'];
$mb1=0;
$mb2=0;
$mb3=0;
$mb4=0;
$mb5=0;
$mb6=0;
if($q1==$ans1)
{
    echo"Answer 1 is correct<br>";
    $mb1=1;
}
else
{
    echo"Answer 1 is incorrect<br>";
}
if($q2==$ans2)
{
    echo"Answer 2 is correct<br>";
    $mb2=1;
}
else
{
    echo"Answer 2 is incorrect<br>";
}
if($q3==$ans3)
{
    echo"Answer 3 is correct<br>";
    $mb3=1;
}
else
{
    echo"Answer 3 is incorrect<br>";
}
if($q4==$ans4)
{
    echo"Answer 4 is correct<br>";
    $mb4=1;
}
else
{
    echo"Answer 4 is incorrect<br>";
}
if($q5==$ans5)
{
    echo"Answer 5 is correct<br>";
    $mb5=1;
}
else
{
    echo"Answer 5 is incorrect<br>";
}
if($q6==$ans6)
{
    echo"Answer 6 is correct<br>";
    $mb6=1;
}
else
{
    echo"Answer 6 is incorrect<br>";
}
$mb=$mb1+$mb2+$mb3+$mb4+$mb5+$mb6;
$mbs=$mb*3;
$mbt=($mbs/18)*100;
echo"<h3>Total Marks is $mbs out of 18</h3>";
echo"Total Percentage is $mbt % out of 100%";
if($mbt>40)
{
    $greeting="Congradulations";
    $what="Pass";
    $pt1=1;
}
else
{
    $greeting="Sorry";
    $what="Fail Try Next Time Good Luck!";
    $pt1=0;
}
echo"<h4>$greeting $user you are $what</h4>";
if($pt1==1)
{
	$local = file("../../host.txt");
	$host=implode(" ",$local);
	$db = file("../../unam.txt");
	$udb=implode(" ",$db);
	$word = file("../../pass.txt");
	$pass=implode(" ",$word);
	$con = mysql_connect($host, $udb, $pass);
    if (!$con) 
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("studentenrollment",$con);
    $resultf=mysql_query("SELECT *FROM uid WHERE user='$user'");
    $result=mysql_query("SELECT *FROM uid");
    while($rowf=mysql_fetch_array($result))
    {
        $ifs=$rowf['id'];
    }
    $ifs=$ifs+1;
    $fsf=0;
    while($row=mysql_fetch_array($resultf))
    {
	   $i=$row['course'];
       $f=$row['part'];
       $marks2=$row['marks'];
        if($i==$course && $f==$part)
        {
            $fsf=1;
            $pmarks=$marks2;
        }
    }
    if($fsf!=1){
    mysql_query("INSERT INTO uid VALUES($ifs,'$user','$course','$part',$mbt)");
    }
    if($fsf==1)
    {
        echo"You had already given this test previously you got $pmarks %";
        if($pmarks<$mbt)
        {
            mysql_query("UPDATE uid SET marks='$mbt' WHERE user='$user' AND part=$part AND course=$course");
            echo"<br>We Updated your percentage to $mbt % from $pmarks %";
        }
        else{echo"<br>Your previous marks were greater than this so marks not updated";}
    }
    $resultn=mysql_query("SELECT *FROM uid WHERE user='$user' and course='$course'");
    $resultvs=mysql_query("SELECT *FROM playlist WHERE iv='$course'");
    $temporary=1;
    while($rowvs=mysql_fetch_array($resultvs))
    {
        $fvsmnm=$rowvs['part'];
        $temporary++;
    }
    $ifnnm=1;
    while($rown=mysql_fetch_array($resultn))
    {
        $immn=$rown['part'];
        $ifnnm++;   
    }
    if($temporary==$ifnnm)
    {
        $resultb=mysql_query("SELECT *FROM user WHERE name='$user'");
        while($rowb=mysql_fetch_array($resultb))
        {
            $completeditp=$rowb['completed'];
        }
        $mycourses2=explode(" ",$completeditp);
        if($completeditp!="")
        {
            $tempflag=0;
        for($ir=0;$ir<=str_word_count($completeditp)+1;$ir++)
        {
            error_reporting(E_ERROR | E_PARSE);
            $r=$mycourses2[$ir];
            $ivsm=$r;
            if($ivsm==$course)
            {
                $tempflag=1;
            }
        }
        if($tempflag==0)
        {
        $completedit="$completeditp $course";
        }
        else{$completedit=$completeditp;}
        }
        else{
            $completedit="$course";
        }
        mysql_query("UPDATE user SET completed='$completedit' WHERE name='$user'");
        echo"<h2>Congradulations you have completed this course</h2>";
    }
}
?>