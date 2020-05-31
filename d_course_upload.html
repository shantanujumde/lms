<?php
session_start();
include_once 'php_connection.php';

?>
<?php
if (isset($_POST['upload'])){
    
    $fn=$_FILES['file']['name'];
    $ft=$_FILES['file']['type'];
    $fs=$_FILES['file']['size'];
    $ftl=$_FILES['file']['tmp_name'];
    $fs="upload/".basename($fn);
    $text = $_POST['ext'];
    $cid = $_POST['cid'];
    $sql="insert into c_data (c_id,location,ext) values ('$cid','$fn','$text')";
    $u=mysqli_query($conn,$sql);
    $mov=move_uploaded_file($ftl,$fs);
    if($u){
        
        echo "inserted";
        if($mov){
            
            echo "success";
        }
        else{
            echo "failed";
        }
    }else {
        echo "failed";
    }
    
}else {
    echo "invalid";
}
?>
<?php
error_reporting(0);
if($_SESSION['l_id']){
    header('Location: c_list.php?upload=success');
    include "handf/slideL.php";
}elseif ($_SESSION['i_id']) {
    header('Location: c_list.php?upload=success');
    include "handf/slideI.php";
}elseif ($_SESSION['a_id']) {
    header('Location: c_list.php?upload=success');
    include "handf/slideA.php";
}else {
    echo "invalid login details";
}
?>