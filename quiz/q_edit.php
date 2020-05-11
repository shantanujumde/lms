<?php

include_once '../php_connection.php';
$que=$_GET['que'];
$o1=$_GET['o1'];
$o2=$_GET['o2'];
$o3=$_GET['o3'];
$o4=$_GET['o4'];
$ans=$_GET['ans'];
$id=$_GET['que_id'];
    

    $sql="update quiz set question='$que' ,opt1='$o1' ,opt2='$o2' ,opt3='$o3' ,opt4='$o4' where que_id='$id';";
    $up=mysqli_query($conn,$sql);

    if(!$up){
        echo "Data update failed";
    }
    else{
        echo "Data updated";
        header("Location: I_quiz.php?c_edit=success");
    }

?>