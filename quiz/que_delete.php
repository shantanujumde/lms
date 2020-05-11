<?php
include_once '../php_connection.php';
$id=$_GET['id'];
echo $id;
$sql="delete from quiz where que_id='$id';";

mysqli_query($conn,$sql);

header("Location: quiz_preveiw.php?que_delete=success");
?>