<?php
$host = "localhost";
$dbname = "u741634386_lms_prototype";
$username = "u741634386_PIproto";
$password = "L9k9g#/#pb&";
 
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Database connection successful.";
}
?>