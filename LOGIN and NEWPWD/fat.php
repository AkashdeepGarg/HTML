<html>

<body>
    <form method="post">
        <label>Enter Username</label>
        <input type="text" name="usern" required>
        <br>
        <label>Enter Phone Number</label>
        <input type="text" name="num" required>
        <br>
        <br>
        <input type="submit" name="s">
    </form>
    <?php
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $database = "demo";

    $con = new mysqli($servername, $username, $password, $database);
    if(!$con){
      die("Connection failed: " . mysqli_connect_error());
    }
    

    
    if(isset($_POST["s"]))
    {
        $name = $_POST["usern"];
        $num = $_POST["num"];
        
        $sql1 = "SELECT * from DB WHERE usern= '$name' AND pnum='$num'";
        $result1 = mysqli_query($con,$sql1);
        $num1=mysqli_num_rows($result1);

        if($num1>0){
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array();
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < 10; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $fpass = implode($pass);
            $hpwd = password_hash($fpass, PASSWORD_DEFAULT);
            $sql2 = "UPDATE DB set pwd='$hpwd' WHERE usern='$name' AND pnum='$num'";
            $result2 = mysqli_query($con,$sql2);
            echo "New Password generated is: ";
            echo $fpass;

        }
        else{
            echo "Invalid Credentials";
        }
    }    
?>

</body>


</html>