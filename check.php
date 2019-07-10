<?php
include "connection.php";

$i=$_REQUEST['index'];

$sql1 = mysqli_query($conn,"SELECT * FROM lol Where id=$i");
$stat = mysqli_fetch_assoc($sql1);
 if($stat['isCompleted']=="0"){
     $sql="UPDATE lol SET isCompleted='1' WHERE id=$i";
     $conn->query($sql);
 }else{
     $sql="UPDATE lol SET isCompleted='0' WHERE id=$i";
     $conn->query($sql);
 }

    header("Location: {$_SERVER['HTTP_REFERER']}");
?>
