<?php
include 'php_connection.php';

$id=$_GET['id'];
$sql="delete from instructor where i_id='$id';";
mysqli_query($conn,$sql);
header("Location: I_list.php?I_delete=success");
?>