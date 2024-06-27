<?php 
    define("DB_HOST", 'localhost');
    define("DB_USER", "omer");
    define("DB_PASS", "omer123");
    define("DB_NAME", "feedback");

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

?>