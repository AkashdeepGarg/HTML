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


$sem5 = "SELECT * FROM fallsem2021";
$result5 = mysqli_query($conn, $sem5);

$num5=mysqli_num_rows($result5);

echo "<h1 id='h1' class='h1'>Course Details of Akashdeep<br>19BCI0036</br></h1>";

echo "
<table class='table' border=1 >
  <tr class='tr' >
    <th>Course Name</th>
    <th>Category</th>
    <th>Slot</th>
    <th>Faculty</th>
  </tr>
";



if($num5 > 0){
  while($row = mysqli_fetch_assoc($result5)){
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