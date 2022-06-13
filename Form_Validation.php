<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="form_validate.js"></script>

</head>
<body>
  <div class="wrapper">
    <div class="registration_form">
      <div class="title">
         --------Register---------

      </div>
      <br>
      <span style="size: 1px;">Create your account. It's free and only takes a mitune.</span>

      <form name="myform" method="post" action="register.php">
        <div class="form_wrap">
          <div class="input_grp">
            <div class="input_wrap">
              
              <input style="margin-right: 5px;" type="text" id="fname" name="fname" required placeholder="First Name">
            </div>
            <div class="input_wrap">
              
              <input style="margin-left: 5px;" type="text" id="lname" required name="lname" placeholder="Last Name">
            </div>
          </div>
          <div class="input_wrap">
              
              <input type="email" id="email" name="email" placeholder="Email ID" required>
            </div>
            <div class="input_wrap">
              <input type="password" id="password" name="pwd" required placeholder="Password">
            </div>
            <div class="input_wrap">
              <input type="password" id="cpassword" required placeholder="Confirm Password">
            </div>
             <div class="input_wrap">
              <input type="date" id="date" name="dob" placeholder="DOB" required>
            </div>
             <div class="input_wrap">
              <input type="text" id="country" name="country" required placeholder="Country">
            </div>
            <div>
              <input type="checkbox" value="check">I accept the <span style="color: green;">Terms of Use</span> & <span style="color: green;">Privacy Policy</span>
            </div>
            <!-- <div class="input_wrap">
              <input type="file" id="file" required placeholder="Browse..">
            </div> -->
            <br>
            <div class="input_wrap">
              <input type="submit" value="Register" class="btn" onclick="registration()" name="s">
            </div>
            
        </div>
      </form>
    </div>
  </div>
  <script>
     function registration()
    {

        var fname= document.getElementById("fname").value;
        var lname= document.getElementById("lname").value;
        var email= document.getElementById("email").value;
        var pwd= document.getElementById("password").value;           
        var cpwd= document.getElementById("cpassword").value;
        var country = document.getElementById("country").value;
        
        //email id expression code
        var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
        var letters = /^[A-Za-z]+$/;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(fname=='' || lname=='')
        {
            alert('Please enter your name');
        }
        else if(!letters.test(fname))
        {
            alert('Name field required only alphabet characters');
        }
        else if(!letters.test(lname))
        {
            alert('Name field required only alphabet characters');
        }
        else if(email=='')
        {
            alert('Please enter your user email id');
        }
        else if (!filter.test(email))
        {
            alert('Invalid email');
        }
        else if(pwd=='')
        {
            alert('Please enter Password');
        }
        else if(cpwd=='')
        {
            alert('Enter Confirm Password');
        }
        else if(!pwd_expression.test(pwd))
        {
            alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
        }
        else if(pwd != cpwd)
        {
            alert ('Password not Matched');
        }
        else if(document.getElementById("password").value.length < 6)
        {
            alert ('Password minimum length is 6');
        }
        else if(document.getElementById("password").value.length > 12)
        {
            alert ('Password max length is 12');
        }
        else
        {                                           
               alert('Thank You for Login Mr. '+ fname +' '+ lname);

               // Redirecting to other page or webste code. 
               window.location = "labfat2.php"; 
               clearFunc();
        }
    }
    function clearFunc()
    {
        document.getElementById("t1").value="";
        document.getElementById("t2").value="";
        document.getElementById("t3").value="";
        document.getElementById("t4").value="";
        document.getElementById("t5").value="";
    }   
    </script>
</body>
</html>
