<?php
    // $servername = "172.21.0.4:3306";
    $servername = "database";
    // $username = "docker";
    // $password = "docker";    
    $username = "root";
    $password = "tiger";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>