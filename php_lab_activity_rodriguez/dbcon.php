<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "php_db";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connected Successfully to " . $db_name;
?>