<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <ul class="nav-links">
      <li>
        <div class="iocn-link" style="width: 40%;">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Choose Semester</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Semesters</a></li>
          <li> <input type="submit" id="show5" value="Fall semester 2021-22"> </li>
          <li><input type="submit" id="show4" value="Winter semester 2020-21"> </li>
          <li><input type="submit" id="show3" value="Fall semester 2020-21 "> </li>
		      <li><input type="submit" id="show2" value="Winter semester 2019-20"> </li>
		      <li><input type="submit" id="show1" value="Fall semester 2019-20"> </li>
        </ul>
      </li>
      <li>
  </li> 
</ul>
  </div>
  <h1 id="h1" class="h1">Course Details of Akashdeep<br>19BCI0036</br></h1>
  
  <div id="display"></div>
  

  <script src="index.js"></script>

<?php include('ajax.js'); ?>

</body>
</html>
