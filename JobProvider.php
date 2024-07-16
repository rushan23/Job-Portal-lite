
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
        <li> <a href="Home.php">HOME</a></li>
            
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
?>
</body>
    </html>
    <?php

   if(isset($_POST['LogIn']))
   {
   $email = $_POST['LogEmailId'];
   $pass =  $_POST['LogPass'];

   $query = "SELECT * FROM User_Registration WHERE User_Email = '$email' && User_Password = '$pass'";

   $data = mysqli_query($conn,$query);

   $total = mysqli_num_rows($data);

   $test = "1";

   echo $total;
   echo $test;

   if($total == 1)
   {
       //session_start();
       //$_SESSION['AdminLoginId'] = $_POST['AdminEmail'];
       echo "<script>alert('Login Successful!');</script>";
       header('location:Home.php');
   }
   else
   {
       //echo "Login Failed";
       echo "<script>alert('Somethings Not Right :(  try Again...');</script>";
       header('location:UserLogin.php');
   }



   }


   if(isset($_POST['Register']))
{
 $JobProvider_name =        $_POST['Name'];
 $JobProvider_EmailId =     $_POST['EmailId'];
 $JobProvider_Password =     $_POST['Password'];
 $JobProvide_Pincode =    $_POST['Pincode'];    
 $JobProvider_MobileNo =    $_POST['MobNo'];


 

 $query = "INSERT into `jobprovider_registration` (JobProvider_Name,JobProvider_Email,JobProvider_Pincode,JobProvider_Password,JobProvider_MobNO) VALUES ( '$JobProvider_name' , '$JobProvider_EmailId' , '$JobProvider_Password' , '$JobProvider_Pincode','$JobProvider_MobileNo')";

 /*$data =*/ mysqli_query($conn,$query);
   /*
 $total = mysqli_num_rows($data);
 echo $total;
 */
   
 if ($conn->query($query) === TRUE) 
 {
   echo "Registered successfully";
 } else {
   echo "Error: " . $query . "<br><br>" . $conn->error;
       }
 
 
 

}
?>