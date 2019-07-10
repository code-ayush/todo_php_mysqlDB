<?php
include "connection.php";

$i=$_REQUEST['index'];
$sql = "DELETE FROM lol WHERE id=$i";
$conn->query($sql);
    header("Location: {$_SERVER['HTTP_REFERER']}");
?>