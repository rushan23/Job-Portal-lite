<?php
$servername = "a2nlmysql49plsk.secureserver.nett";
$username = "testing";
$password = "testing123";
$db = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>