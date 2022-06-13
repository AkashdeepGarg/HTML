<!DOCTYPE html>
<html>
<head>
	<title>Average Calculator</title>
	<style type="text/css">
		body{
			width: 70%;
			margin: auto;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<fieldset>
		<legend style="font-family: Georgia, serif; font-size: 3rem">Student CAT-1 Marks:</legend>
		<br>
		<label style="font-family: Arial">Your Name:</label>
		<input type="text" name="name" placeholder="Enter Name" required>
		<br>
		<label style="font-family: Lucida Console">Reg. No.-:</label>
		<input type="text" name="regno" placeholder="Enter REG no" required>
		<br>
		<label style="font-family: Times New Roman">Your Stream:</label>
		<input type="text" name="stream" placeholder="Enter Stream Name" required>
		<br>
		<br>
		<label style="font-family: Algerian">Your Subject 1 Marks:</label>
		<input type="text" name="c1marks" placeholder="Enter Course 1 Marks" required>
		<br>
		<label style="font-family: Algerian">Your Subject 2 Marks:</label>
		<input type="text" name="c2marks" placeholder="Enter Course 2 Marks" required>
		<br>
		<label style="font-family: Algerian">Your Subject 3 Marks:</label>
		<input type="text" name="c3marks" placeholder="Enter Course 3 Marks" required>
		<br>
		<label style="font-family: Algerian">Your Subject 4 Marks:</label>
		<input type="text" name="c4marks" placeholder="Enter Course 4 Marks" required>
		<br>
		<label style="font-family: Algerian">Your Subject 5 Marks:</label>
		<input type="text" name="c5marks" placeholder="Enter Course 5 Marks" required>
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
    $a1=$_POST['c1marks'];
    $a2=$_POST['c2marks']; 
    $a3=$_POST['c3marks'];
    $a4=$_POST['c4marks'];
    $a5=$_POST['c5marks']; 
    $sum=$a1+$a2+$a3+$a4+$a5; 
    $avg=$sum/5;
    $cgpa=$sum/15;

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

    if($a1<15 || $a2<15 || $a3<15 || $a4<15 || $a5<15)
        echo '<script>alert("Slow Learner and Do the Extra Assignment work")</script>';


    echo "<br>";

echo "<table style='border: 1px solid black;'>";
    echo "<tr><td style='border: 1px solid black;'>Name</td><td style='border: 1px solid black;'>".$name."</td></tr>";
    echo "<tr><td style='border: 1px solid black;'>Reg. No.</td><td style='border: 1px solid black;'>".$regno."</td></tr>";
    echo "<tr><td style='border: 1px solid black;'>Stream Name</td><td style='border: 1px solid black;'>".$stream."</td></tr>";
    echo "<tr><td style='border: 1px solid black;'>Total Marks</td><td style='border: 1px solid black;'>".$sum."</td></tr>";
    echo "<tr><td style='border: 1px solid black;'>Average Marks</td><td style='border: 1px solid black;'>".$avg."</td></tr>";
    echo "<tr><td style='border: 1px solid black;'>CGPA</td><td style='border: 1px solid black;'>".$cgpa."</td></tr>";
    echo "</table>";}
        ?>



	</form>
</body>
</html>
