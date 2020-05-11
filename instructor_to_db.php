<?php
include_once 'php_connection.php';
$nm = mysqli_real_escape_string($conn,$_POST['name']);
$add = mysqli_real_escape_string($conn,$_POST['address']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);
$sub = mysqli_real_escape_string($conn,$_POST['sub']);
$qu = mysqli_real_escape_string($conn,$_POST['Qu']);
$mob = mysqli_real_escape_string($conn,$_POST['mob']);
$exp = mysqli_real_escape_string($conn,$_POST['exp']);
$un = mysqli_real_escape_string($conn,$_POST['un']);
$pass = mysqli_real_escape_string($conn,$_POST['pass']);
if (empty($nm) || empty($add) ||empty($dob) ||empty($sub)||empty($qu)||empty($mob)||empty($exp)) {

    header("Location: instructor.php?error=emptyfields");
    exit();

}else{
$sql="insert into instructor (name,address,dob,expert,qualification,mob,experience,uname,pass)  values (?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "SQL error";
}
else{
    mysqli_stmt_bind_param($stmt,"sssssssss",$nm,$add,$dob,$sub,$qu,$mob,$exp,$un,$pass);
    mysqli_stmt_execute($stmt); 
    /*$sql2="insert into marks (name,address,dob,expert,qualification,mob,experience)  values (?,?,?,?,?,?,?)";
    $stmt2 = mysqli_stmt_init($conn); 
    if(!mysqli_stmt_prepare($stmt2,$sql2)){
        echo "SQL error";
    }
    else{
        mysqli_stmt_bind_param($stmt,"sssssss",$nm,$add,$dob,$sub,$qu,$mob,$exp);
        mysqli_stmt_execute($stmt); 
    }*/
}

header("Location: instructor.php?instructor_to_db=success");}
?>