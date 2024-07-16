
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post a Job</title>

    <style>
                body
        {
            text-decoration:none;
            margin:0;
            padding:0;

        }
        .logo
{
font-family: 'Verdana';
font-size: 24px;
color: black;

}
body{
  background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url("images/hero_1.jpg") ;
  background-size: cover;
  position: relative;
background-image: url("postajob.jpg");
background-color: #cccccc;  
}
nav
{
    background:transparent;
    height: 80px;
    width:100%;
    border-radius: 30px;

}
label.logo
{
    color:black;
    font-size:35px;
    line-height:80px;
    padding:0 100px;
    font-weight: bold;
    
}
nav ul 
{
    font-family: sans-serif;
    list-style-type: none;
    float: right;
    margin: 20px;
}
nav ul li
{
    display: inline-block;
    text-decoration: none;
    line-height: 80px;
    margin: 0 20px;
}
nav ul li a{
    color:black;
    text-decoration: none;


}
nav ul li  :hover{
    background-color: azure;
    color: rgb(3, 3, 3);
}


                    .backgroundimg {
                        background: no-repeat;
                        background-size: cover;
                        height: 900px;
                        width: 100%;
                        line-height: 80px;

                        background-color: #f03cc3;
                        background-image: linear-gradient(90deg, transparent 50%);
                        padding: 0;
                        margin: 0;
                    }

                    .fields
                    {
                       padding: 0 1000px;



                    }

                
                /* Add padding to containers */
                .container {
                    padding: 16px;
                    background-color: white;
                }

                /* Full-width input fields */
                input[type=text], input[type=password] {
                    width: 100%;
                    padding: 15px;
                    margin: 10px 0 28px 0;
                    display: inline-block;
                    border: none;
                    background: #f1f1f1;
                    margin-top: 10px;
                }

                    input[type=text]:focus, input[type=password]:focus {
                        background-color: #ddd;
                        outline: none;
                    }

                /* Overwrite default styles of hr */
                hr {
                    border: 1px solid #f1f1f1;
                    margin-bottom: 25px;
                }

                /* Set a style for the submit button */
                .registerbtn {
                    background-color: #04AA6D;
                    color: white;
                    padding: 16px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                    opacity: 0.9;
                }

                    .registerbtn:hover {
                        opacity: 1;
                    }

                /* Add a blue text color to links */
                a {
                    color: rgb(255, 45, 30);
                }

                /* Set a grey background color and center the text of the "sign in" section */
                .signin {
                    background-color: #f1f1f1;
                    text-align: center;
                }

                .fields {
                    padding: 0 300px;
                    font-family: 'Verdana';
                    color: #fff;
                }
                </style>
    <?php
$dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "testing";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    ?>

    

                </head >
                <body >
                <nav >

                <label class="logo" > JOB PORTAL</label >
                <ul >

                    <li> <a href="Home.php">HOME</a></li>
                    <LI> <a href="Post A Job.php">POST A JOB</a> </LI>
                    <li> <a href="Contact Us.html">CONTACT</a></li>  
                    <li><a href="UserLogin.php">LOGIN</a></li>
    
                
                </ul >
                <h1 class="logo">Welcome to Post A Job Page!</h1>
                <form class=fields method="POST">
                <input type='text'class='input-field'placeholder='Job Title' name="Title" required >
               
                <textarea class='input-field'placeholder='Skills Required' rows="8" cols="50" name="SkillRequired" required></textarea><br><br>
                <textarea class='input-field'placeholder='Description' rows="8" cols="50" name="Description" required></textarea><br><br>
                <input type="file" id="myFile" name="filename">
                <input type="submit" name="Post">
                </form>
                <form action=Home.php method="post">
                <?php
                if(isset($_POST['Post']))

    {
      
        
      $Job_Title =        $_POST['Title'];
      $Job_Exp =          $_POST['SkillRequired'];
      $Job_Desc =         $_POST['Description'];
    
      
        
      
      $query = "INSERT into `jobprovider_post` VALUES ( $Job_Title , $Job_Exp , $Job_Desc)";

    }
?>
</form>


</nav >



                </body>
                </html>
