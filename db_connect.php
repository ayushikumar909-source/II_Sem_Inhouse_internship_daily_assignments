<?php
$host = "localhost";
$user = "root";
$password = "2704";
$database = "Industrial_Training";   // apna actual DB name yaha confirm kar lena

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Connection Successful";
?>