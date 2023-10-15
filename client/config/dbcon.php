<?php
$servername = "localhost";
$username = "u741634386_PIproto";
$password = "L9k9g#/#pb&";
$database = "u741634386_lms_prototype";

$con = mysqli_connect($servername, $username, $password, $database);
 
if (!$con) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>