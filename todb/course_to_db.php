<?php
include_once '../php_connection.php';


$id = mysqli_real_escape_string($conn,$_POST['c_id']);
$nm = mysqli_real_escape_string($conn,$_POST['cnm']);
$d = mysqli_real_escape_string($conn,$_POST['disc']);

$sql="insert into course (c_id,c_name,discription)  values (?,?,?)";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "SQL error";
}
else{
    mysqli_stmt_bind_param($stmt,"sss",$id,$nm,$d);
    mysqli_stmt_execute($stmt);  
    echo "success";
}
if (empty($id) || empty($d)) {

    header("Location: ../course.php?error=emptyfields");
    exit();

}else{
    header("Location: ../course.php?course_to_db=success");
}
?>