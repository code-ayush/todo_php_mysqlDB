<?php
include "connection.php";

$sql = "INSERT INTO lol (caption, isCompleted)
VALUES ('$_POST[text]', '0')";

if ($conn->query($sql) === TRUE) //conn is the connection varible
{ 
    header("Location: {$_SERVER['HTTP_REFERER']}");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>