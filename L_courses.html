<?php
session_start();
include "handf/header_forms.php";
include_once 'php_connection.php';
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
?>


<head>
    <style>
        
                  
        #div2{
                width:280px; 
                height: 360px;
                overflow: auto;
            } 
        
        #other #p{
            text-align: center;
        }
    </style>
</head>
<br><br><br><br>
<!----------------------------------------->

<?php
$url = "http://$_SERVER[HTTP_HOST] $_SERVER[REQUEST_URI]";

if (strpos($url, "c_delete=success") == true) {
    echo "<script>
window.alert('Course Deleated Sucessfully!!!');
</script>";
}

if (strpos($url, "c_edit=success") == true) {
    echo "<div class='container-fluid'>
    <div class='col-lg-12'><div class='alert alert-info'>
    <strong>Success!</strong> Changes has been made to Database.<i class='material-icons'>
    sentiment_very_satisfied
    </i>
  </div></div></div>";
}
?>
<!----------------------------------------->


<?php
$sql = "select * from course;";
$r = mysqli_query($conn, $sql);
$rc = mysqli_num_rows($r);
echo "<div class='container'>
<div class='card-deck'>
<div class='row'>";
if ($rc > 0) {
    while ($row = mysqli_fetch_assoc($r)) {
        $r1 = $row['c_id'];
        echo "<div class='col-md-4'><div class='card text-left' style='width: 20rem; height:30rem;'>
        <div class='card-body'><div id='div2'>";
        echo "<h4 class='card-title'>" . $row['c_name'] . "</h4>";        
        echo "<h2 class='card-subtitle'>" . $row['c_id'] . "</h2>";
        echo "<p class='card-text'>" . $row['discription'] . "</p></div>
        <div class='card-footer'>
        <a class='btn btn-primary' href='L_course_preview.php?id=$r1'>Enter</a>";
        echo "</div></div></div>
</div>";
    }
    
}
echo "</div></div></div>";
?>

<?php

include "handf/footer_forms.php";
?>