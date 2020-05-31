<?php
include_once 'php_connection.php';
$nm = mysqli_real_escape_string($conn,$_POST['name']);
$add = mysqli_real_escape_string($conn,$_POST['address']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);
$co = mysqli_real_escape_string($conn,$_POST['course']);
$qu = mysqli_real_escape_string($conn,$_POST['Qu']);
$mob = mysqli_real_escape_string($conn,$_POST['mob']);
$mks = mysqli_real_escape_string($conn,$_POST['mks']); 
$un = mysqli_real_escape_string($conn,$_POST['un']);
$pw = mysqli_real_escape_string($conn,$_POST['pw']);
$g = mysqli_real_escape_string($conn,$_POST['gender']);
if (empty($nm) || empty($add) || empty($dob) ||empty($mob)||empty($un)||empty($pw)||empty($g)) {
    header("Location: learner.php?error=emptyfields");
    exit();
}else{
$sql="insert into learner (name,address,dob,course,qualification,mob,marks,uname,pass,gender)  values (?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
$hash=password_hash($pw,PASSWORD_DEFAULT);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "SQL error";
}
else{
    mysqli_stmt_bind_param($stmt,"ssssssssss",$nm,$add,$dob,$co,$qu,$mob,$mks,$un,$pw,$g);

    mysqli_stmt_execute($stmt);  
}

header("Location: learner.php?learner_to_db=success");}
?>