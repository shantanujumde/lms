<?php
include_once "../php_connection.php";

$q=$_GET['que'];

$o1=$_GET['o1'];
$o2=$_GET['o2'];
$o3=$_GET['o3'];
$o4=$_GET['o4'];
$ans=$_GET['ans'];
$sr=$_GET['sr'];
$c_id=$_GET['tid'];
$sql="insert into quiz (question,opt1,opt2,opt3,opt4,ans,sr_no,test_id) values ('$q','$o1','$o2','$o3','$o4','$ans','$sr','$c_id');";

$up=mysqli_query($conn,$sql);

    if(!$up){
        echo "Data update failed";
        header("Location: I_quiz.php?quiz_sub=failed");
    }
    else{
        echo "Data updated";
        header("Location: I_quiz.php?id=$c_id&success");
    }
?>