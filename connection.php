<?php
$host = "localhost";
$username = "database_admin";
$user_passwd="Shilpa@123";
$database_in_use = "database_admin";

$mysqli = new mysqli($host, $username,$user_passwd, $database_in_use);
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>