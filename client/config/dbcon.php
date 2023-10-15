<?php
$host = "localhost";
$username = "u741634386_PIproto";
$password = "L9k9g#/#pb&";
$database = "u741634386_lms_prototype";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    header ("Location: ../errors/dberror.php");
    die();}

?>