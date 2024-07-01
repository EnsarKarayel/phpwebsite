<?php
$servername = "localhost"; // Ensar ıp adresi ekle
$username = "username";
$password = "password";
$dbname = "database_name";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
