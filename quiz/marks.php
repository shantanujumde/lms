<?php
$a1=$_GET['gender'];
$ans=$_GET['ans'];
$marks=0;
if($a1==$ans){
    echo "pass";
    
}else{
    echo "failed";
}
if($a1==$ans){
    $marks=$marks+1;
}
header("Location: del.php?marks=$marks");

?>