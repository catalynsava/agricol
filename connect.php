<?php

    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "2021";

    $sql="";
    
    $cnn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($cnn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>