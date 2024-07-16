<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="application/json" href="manifest.json">
    <link rel="icon" type="image/x-icon" href="icons/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/icons/JobPortal_198.png">
    <meta name="theme-color" content="#076ae1"/>
    <style>
        body
      {
        background-image: url("adminimg.jpg");
        background-color: #cccccc;
      }


    </style>
</head>
<body>    
    <nav>
    <label class="logo">Job Portal</label>  
    <h1 class="logo">Welcome to Admin Login Page!</h1>
    </nav>
    <div class="full-page">
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div>
                    <h2  class="logo">Log In</h2>       
                </div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>"id='login' class='input-group-login'>
                    <input type='text'class='input-field'name ="AdminEmail"placeholder='Email Id' required >
		    <input type='password'class='input-field'name ="AdminPass"placeholder='Enter Password' required>
		    <button type='submit'name="LogIn"class='submit-btn'>Log in</button>
            <?php
            

            if(isset($_POST['LogIn']))
            {
                header("Location:Admin Panel.php");
                

            }
            ?>
		 </form>

            </div>
        </div>
    </div>
    
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
    </script>
    <?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "jobportal";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
    ?>
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