<?php
session_start();
include_once 'php_connection.php';
include "handf/header_forms.php";
error_reporting(0);
if($_SESSION['l_id']){
    include "handf/slideL.php";
}elseif ($_SESSION['i_id']) {
    include "handf/slideI.php";
}elseif ($_SESSION['a_id']) {
    include "handf/slideA.php";
}else {
    echo "invalid login details";
}
echo "<br><br><br>";

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"course_to_db=success") == true){
    echo "<script>
    window.alert('New Course is Added');
</script>";
}elseif (strpos($url,"error=emptyfields")==true) {
    echo "<div class='container-fluid'>
    <div class='col-lg-12'><div class='alert alert-info'>
    <strong>Empty fields!</strong> Please submit all important fields. <i class='material-icons'>
    sentiment_very_dissatisfied
    </i></div>";
}
?>
<div class="container" id="c1">
        <div class="row" >
            <div class="col-md-4" >
                
                <p>.</p>
                <form class="form-group" method="POST" action="todb/course_to_db.php"> 
                    <input id="i1" type="text" name="c_id" placeholder="Course ID"><br>
                    <input id="i1" type="text" name="cnm" placeholder="Course Name"><br>
                    <input id="i1" type="text" name="disc" placeholder="Discription(Optional)"><br>
                    <button class="btn btn-success" name="submit" type="submit">Save</button>
            </div>
        </div>
</div>
<?php

include "handf/footer_forms.php";
?>