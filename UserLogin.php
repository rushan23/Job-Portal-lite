
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
        background-image: url("userlogin.jpg");
        background-color: #cccccc;
      }
    </style>
</head>
<body>
    
    <?php

    $servername = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "jobportal";
    $conn = new mysqli($servername, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     

   
    
    if(isset($_POST['Register']))
{
  $User_name =        $_POST['Name'];
  $User_EmailId =     $_POST['EmailId'];
  $User_Password =     $_POST['Password'];
  $User_Address =    $_POST['Address'];    
  $User_MobileNo =    $_POST['MobNo'];


  

  $query = "INSERT into `user_registration` ( User_Name, User_Email, User_Password, User_Address, User_MobNo) VALUES ( '$User_name' , '$User_EmailId' , '$User_Password' , '$User_Address' , '$User_MobileNo')";
 
  /*if ($conn->query($query) === TRUE) 
  {
    echo "Registered successfully";
  } else {
    echo "Error: " . $query . "<br><br>" . $conn->error;
        }*/
  
  
  

}
?>




    
    
    

    
    <nav>
    <label class="logo">Job Portal</label> 
     
    <ul>
        <center>
        <li> <a href="Home.php">HOME</a></li>
            
            <LI> <a href="Post A Job.php">POST A JOB</a> </LI>
            <li> <a href="Contact Us.html">CONTACT</a></li>  
            <li><a href="JobProvider.php">JOB PROVIDER LOGIN</a></li>
            
        </ul>
        <h1 class="logo">Welcome to User Login Page!</h1>
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
            <?p
        if(isset($_POST['LogIn']))
        {
        $email = $_POST['LogEmailId'];
        $pass =  $_POST['LogPass'];

        $query = "SELECT * FROM user_login WHERE User_Email = '$email' && User_Password = '$pass'";
        }

        

            ?>
            
         </form method="POST">
		 <form id='register' class='input-group-register' method = "POST">
            
            <input type='text'class='input-field'placeholder='Name 'name="Name" required>
		        <input type='email'class='input-field'placeholder='Email Id'name="EmailId" required>
            <input type='password'class='input-field'placeholder='Password' name="Password" required>
            <input type='text'class='input-field'placeholder='Address'name="Address"  required>
            <input type='text'class='input-field'placeholder='Mobile No'name="MobNo"  required>  
               Resume File<input type="file" id="file" name="File">                                       
            <button type='submit'class='submit-btn' name='Register'>Register</button>
            
	    </form method="POST">
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
    
    


    
    </body>
    </html>
    