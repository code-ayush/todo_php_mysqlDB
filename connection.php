<?php
$servername = "localhost";
$username = "root";
$password = "goldtree9";
$dbname = "test"; //optional

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>