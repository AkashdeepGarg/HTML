<!DOCTYPE html>
<html>
<head>
	<title>CGPA Calculator</title>
	<style type="text/css">
		body{
			width: 80%;
			margin: auto;
		}
		table,td,tr{
			border: 1px solid black;
		}
	</style>
</head>
<body>

	<form action="" method="post">
		<fieldset>
		<legend style="font-family: Georgia, serif; font-size: 3rem">Student Marks:</legend>
		<br>
		<label style="font-family: Arial">Your Name:</label>
		<input type="text" name="name" placeholder="Enter Name" required>
		<br>
		<label style="font-family: Lucida Console">Reg. No.:</label>
		<input type="text" name="regno" placeholder="Enter REG no" required>
		<br>
		<label style="font-family: Times New Roman">Your Stream:</label>
		<input type="text" name="stream" placeholder="Enter Stream Name" required>
		<br>
		<br>
		<label style="font-family: Algerian">Your Subject 1 Marks:</label>
		<input type="text" name="c1marks1" placeholder="Enter CAT 1 Marks" required>
		<input type="text" name="c2marks1" placeholder="Enter CAT 2 Marks" required>
		<input type="text" name="d1marks1" placeholder="Enter DA 1 Marks" required>
		<input type="text" name="d2marks1" placeholder="Enter DA 2 Marks" required>
		<input type="text" name="qmarks1" placeholder="Enter QUIZ Marks" required>
		<br>
		<br>
		<label style="font-family: Algerian">Your Subject 2 Marks:</label>
		<input type="text" name="c1marks2" placeholder="Enter CAT 1 Marks" required>
		<input type="text" name="c2marks2" placeholder="Enter CAT 2 Marks" required>
		<input type="text" name="d1marks2" placeholder="Enter DA 1 Marks" required>
		<input type="text" name="d2marks2" placeholder="Enter DA 2 Marks" required>
		<input type="text" name="qmarks2" placeholder="Enter QUIZ Marks" required>
		<br>
		<br>
		<label style="font-family: Algerian">Your Subject 3 Marks:</label>
		<input type="text" name="c1marks3" placeholder="Enter CAT 1 Marks" required>
		<input type="text" name="c2marks3" placeholder="Enter CAT 2 Marks" required>
		<input type="text" name="d1marks3" placeholder="Enter DA 1 Marks" required>
		<input type="text" name="d2marks3" placeholder="Enter DA 2 Marks" required>
		<input type="text" name="qmarks3" placeholder="Enter QUIZ Marks" required>
		<br>
		<br>
		<label style="font-family: Algerian">Your Subject 4 Marks:</label>
		<input type="text" name="c1marks4" placeholder="Enter CAT 1 Marks" required>
		<input type="text" name="c2marks4" placeholder="Enter CAT 2 Marks" required>
		<input type="text" name="d1marks4" placeholder="Enter DA 1 Marks" required>
		<input type="text" name="d2marks4" placeholder="Enter DA 2 Marks" required>
		<input type="text" name="qmarks4" placeholder="Enter QUIZ Marks" required>
		<br>
		<br>
		<label style="font-family: Algerian">Your Subject 5 Marks:</label>
		<input type="text" name="c1marks5" placeholder="Enter CAT 1 Marks" required>
		<input type="text" name="c2marks5" placeholder="Enter CAT 2 Marks" required>
		<input type="text" name="d1marks5" placeholder="Enter DA 1 Marks" required>
		<input type="text" name="d2marks5" placeholder="Enter DA 2 Marks" required>
		<input type="text" name="qmarks5" placeholder="Enter QUIZ Marks" required>
		<br>
		<br>
		<br>
		<input style="font-family: Copperplate" type="submit" name="s" value="Result">
		</fieldset>
		<?php
if(isset($_POST['s']))
{
    $name=$_POST['name'];
    $regno=$_POST['regno'];
    $stream=$_POST['stream'];
    $a1=$_POST['c1marks1'];
    $a2=$_POST['c1marks2']; 
    $a3=$_POST['c1marks3'];
    $a4=$_POST['c1marks4'];
    $a5=$_POST['c1marks5'];
    $b1=$_POST['c2marks1'];
    $b2=$_POST['c2marks2'];
    $b3=$_POST['c2marks3'];
    $b4=$_POST['c2marks4'];
    $b5=$_POST['c2marks5'];
    $c1=$_POST['d1marks1'];
    $c2=$_POST['d1marks2'];
    $c3=$_POST['d1marks3'];
    $c4=$_POST['d1marks4'];
    $c5=$_POST['d1marks5'];
    $d1=$_POST['d2marks1'];
    $d2=$_POST['d2marks2'];
    $d3=$_POST['d2marks3'];
    $d4=$_POST['d2marks4'];
    $d5=$_POST['d2marks5'];
    $e1=$_POST['qmarks1'];
    $e2=$_POST['qmarks2'];
    $e3=$_POST['qmarks3'];
    $e4=$_POST['qmarks4'];
    $e5=$_POST['qmarks5'];

    function changeMarks($num1) {
            $sum = ($num1/30)*100;
            $sum = (15*$sum)/100;
            return $sum;
        }
    function changeMarks2($num2) {
            $num = ($num2/60)*100;
            $num = (100*$num)/1000;
            return $num;
        }

    if($a1<0 || $a1>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($a2<0 || $a2>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($a3<0 || $a3>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($a4<0 || $a4>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($a5<0 || $a5>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($b1<0 || $b1>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($b2<0 || $b2>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($b3<0 || $b3>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($b4<0 || $b4>30)
        echo '<script>alert("Invalid Marks")</script>';
    if($b5<0 || $b5>30)
        echo '<script>alert("Invalid Marks")</script>';

    if($a1<15 || $a2<15 || $a3<15 || $a4<15 || $a5<15 || $b1<15 || $b2<15 || $b3<15 || $b4<15 || $b5<15)
        echo '<script>alert("Slow Learner and Do the Extra Assignment work")</script>';

    $avg1=($a1+$a2+$a3+$a4+$a5)/5;
    $avg2=($b1+$b2+$b3+$b4+$b5)/5;

    $a1=changeMarks($a1);
    $a2=changeMarks($a2);
    $a3=changeMarks($a3);
    $a4=changeMarks($a4);
    $a5=changeMarks($a5);
    $b1=changeMarks($b1);
    $b2=changeMarks($b2);
    $b3=changeMarks($b3);
    $b4=changeMarks($b4);
    $b5=changeMarks($b5);

    $sum1 = $a1+$b1+$c1+$d1+$e1;
    $sum2 = $a2+$b2+$c2+$d2+$e2;
    $sum3 = $a3+$b3+$c3+$d3+$e3;
    $sum4 = $a4+$b4+$c4+$d4+$e4;
    $sum5 = $a5+$b5+$c5+$d5+$e5;
    $sum1 = changeMarks2($sum1);
    $sum2 = changeMarks2($sum2);
    $sum3 = changeMarks2($sum3);
    $sum4 = changeMarks2($sum4);
    $sum5 = changeMarks2($sum5);
    $cgpa = ($sum1 + $sum2 + $sum3 + $sum4 + $sum5)/5;
    $cgpa = 9.5*($cgpa);

    echo "<br>";

    echo "<table>";
    echo "<tr><td>Name</td><td>".$name."</td></tr>";
    echo "<tr><td>Reg. No.</td><td>".$regno."</td></tr>";
    echo "<tr><td>Stream Name</td><td>".$stream."</td></tr>";
    echo "<tr><td>Average Marks for CAT 1</td><td>".$avg1."</td></tr>";
    echo "<tr><td>Average Marks for CAT 2</td><td>".$avg2."</td></tr>";
    echo "<tr><td>CGPA</td><td>".$cgpa."</td></tr>";
    echo "</table>";
}
    ?>



	</form>
</body>
</html>
