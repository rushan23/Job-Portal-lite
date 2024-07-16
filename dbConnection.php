<?php
    //echo "Connected successfully";
    $dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "jobportal";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;    
