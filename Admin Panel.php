<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "jobportal";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    //echo "Connected successfully";
    ?>
    <?php
  session_start();
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  
  <link rel="icon" type="image/x-icon" href="icons/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    div.header
    {
      font-family: Verdana;
      display : flex;
      justify-content: space-between;
      align-items: center;

    }
    .header
    
    {
      display: inline-block;
      font-family: Verdana;
      

    }
    </style>
</head>
<body>

<div class ="container">
<h1>Welcome To Admin Panel -</h1>
<form method="POST">
<button class="btn btn-primary my-5" name ="Logout">Log out</button>
<button class="btn btn-primary my-5" name ="AddJobProvider"><a class="text-light" href="JobProvider.php">Add JobProvider</a></button>
<button class="btn btn-primary my-5" name ="AddUser"><a class="text-light" href="UserLogin.php">Add User</a></button>
<button class="btn btn-primary my-5" name ="AddJob"><a class="text-light" href="Post A Job.php">Add Job</a></button>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">SkillRequired</th>
      <th scope="col">Description</th>
      <th scope="col">Modifications</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $query = "SELECT DISTINCT * FROM jobprovider_post";
    $result = mysqli_query($conn,$query);
    if($result)
    {
      while($row=mysqli_fetch_assoc($result))
      {
        $id = $row['Job_ID'];
        $title = $row['Job_Title'];
        $exp = $row['Job_Exp'];
        $desc = $row['Job_Desc'];

        echo '<tr>
        <th scope="row">' .$id.'</th>
        <td>'.$title.'</td>
        <td>'.$exp.'</td>
        <td>'.$desc.'</td>
        <td>
        <button class="btn btn-primary"><a href="Post A Job.php" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="" class="text-light">Delete</a></button>
        </td>
      </tr>';
      }

    }



    ?>
  
  </tbody>
</table>
  </form>
  <br><br>
  <div>
    
    <?php
    
   /* $query = "SELECT User_ID FROM User_Registration";

    if ($result = mysqli_query($conn, $query)) {
      // Get field information for all fields
      while ($fieldinfo = mysqli_fetch_field($result)) {
        printf("ID: %s\n", $fieldinfo -> User_ID);
        //printf("Table: %s\n", $fieldinfo -> table);
        //printf("max. Len: %d\n", $fieldinfo -> max_length);
      }
      mysqli_free_result($result);
    }*/


    /*
    $queryUser = "SELECT User_ID FROM User_Registration";
$result = mysqli_query($conn, $queryUser);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " Current Users :  " . $row["User_ID"]. "<br>";
  }
} else {
  echo "0 results";
}

$queryProvider = "SELECT JobProvider_ID FROM JobProvider_Registration"; 

$result1 = mysqli_query($conn, $queryProvider);
  // output data of each row
  while($row = mysqli_fetch_assoc($result1)) {
    echo "Current Job Providers : " . $row["JobProvider_ID"]. "<br>";
  
} 
*/


   
    ?>


    <div>

  <?php

    if(isset($_POST['Logout']))    
    {
      session_destroy();
        header('location:AdminLogin.php');
    }

  ?>
</div>
</body>
</html>