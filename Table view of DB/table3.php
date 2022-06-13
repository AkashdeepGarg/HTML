<?php

$servername = "localhost"; 
$username = "root";
$password = "";
$database = "da5";

$conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


$sem3 = "SELECT * FROM fallsem2020";
$result3 = mysqli_query($conn, $sem3);

$num3=mysqli_num_rows($result3);

echo "<h1 id='h1' class='h1'>Course Details of Akashdeep<br>19BCI0036</br></h1>";

echo "
<table class='table' border=1 >
  <tr class='tr'>
    <th>Course Name</th>
    <th>Category</th>
    <th>Slot</th>
    <th>Faculty</th>
  </tr>
";



if($num3 > 0){
  while($row = mysqli_fetch_assoc($result3)){
    echo "
    <tr>
      <td>".$row['subject']."</td>
      <td>".$row['category']."</td>
      <td>".$row['slot']."</td>
      <td>".$row['faculty']."</td>
    </tr>
    ";
  }
}

echo "</table>";

?>