<?php
    $servername = "a2nlmysql49plsk.secureserver.net";
    $username = "testing";
    $password = "testing123";
    $db = "testing";
    
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    ?>