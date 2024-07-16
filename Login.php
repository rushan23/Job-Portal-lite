<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="css/login.css">
    <link rel="application/json" href="manifest.json">
    <link rel="icon" type="image/x-icon" href="icons/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/icons/JobPortal_198.png">
    <meta name="theme-color" content="#076ae1"/>
    <style>
      body
      {
        background-image: url("JobProvider.jpg");
        background-color: #cccccc;
      }
      </style>
</head>
<body>

<?php

?>    <nav>
    <label class="logo">Job Portal</label>
     
    <ul>
        <center>
        <li> <a href="Home.html">HOME</a></li>
            
            <LI> <a href="Post A Job.php">POST A JOB</a> </LI>
            <li> <a href="Contact Us.html">CONTACT</a></li>  
            <li><a href="UserLogin.php">USER LOGIN</a></li>
            
        </ul>
        <h1 class="logo">Welcome to Job Provider Login Page!</h1>
    </nav>

    

    <div class="full-page">
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' method = "POST">
                <input type='email'class='input-field'placeholder='Email Id' name='LogEmailId' required >
		    <input type='password'class='input-field'placeholder='Enter Password'name='LogPass' required>
		    <button type='submit'class='submit-btn' name='LogIn'>Log in</button>
         </form method="POST">
		 <form id='register' class='input-group-register' method = "POST">
            
        <input type='text'class='input-field'placeholder='Name 'name="Name" required>
		    <input type='email'class='input-field'placeholder='Email Id'name="EmailId" required>
		    <input type='text'class='input-field'placeholder='Pincode'name="Pincode" required>
            <input type='password'class='input-field'placeholder='Password' name="Password" required>
            <input type='text'class='input-field'placeholder='Mobile No'name="MobileNo"  required>                                             
            <button type='submit'class='submit-btn' name='Register'>Register</button>
	    </form>
            </div>
        </div>
    </div>
    
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register($conn)
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login($conn)
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>

    <?php
    //echo "Connected successfully";
    $dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "testing";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;    


//echo "Connected successfully";
    
        if(isset($_POST['LogIn']))
        {
        $email = $_POST['LogEmailId'];
        $pass =  $_POST['LogPass'];

        $query = "SELECT * FROM jobprovider_login WHERE JobProvider_Email = '$email' && JobProvider_Password = '$pass'";

        $data = mysqli_query($conn,$query);

        $total = mysqli_num_rows($data);

        $test = "1";

        echo $total;
        echo $test;

       

        if(isset(['LogIn']))
        {
            session_start();
            $_SESSION['UserId'] = $_POST['name'];
           
            header('location:Post a Job.php');
        }
        else
        {
            echo "Login Failed";
            header('location:Login.php');
        }



        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["Name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["Name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }
          }
          
          if (empty($_POST["EmailId"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["EmailId"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }
        }

        
    ?>




    
    <?php  
    
    
    if(isset($_POST['Register']))
    {
      $JobProvider_name =        $_POST['Name'];
      $JobProvider_EmailId =     $_POST['EmailId'];
      $JobProvider_Pincode =     $_POST['Pincode'];
      $JobProvider_Password =    $_POST['Password'];    
      $JobProvider_MobileNo =    $_POST['MobileNo'];

      $query = "INSERT INTO `jobprovider_registration` (JobProvider_Name, JobProvider_Email, JobProvider_Pincode, JobProvider_Password, JobProvider_MobNo) VALUES ('$JobProvider_name' , '$JobProvider_EmailId' , '$JobProvider_Pincode' , '$JobProvider_Password' , '$JobProvider_MobileNo')";

      $data = mysqli_query($conn,$query);

      if ($conn->query($query) === TRUE) {
        echo "<script>alert('Registered Succesfully!');</script>";
        echo "Registered successfully";
      } else {
        echo "<script>alert('Something Went Wrong!');</script>";
        echo "Error: " . $query . "<br><br>" . $conn->error;
      }
      
      
    
    }

    
    ?>
    
    </body>
    </html>
    