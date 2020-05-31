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
        
        #div4{
            border-radius:25px;
            padding-top:40px;
            padding-left:100px;
            width:600px;
            height:200px;
            background-color:white;
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

?>
<!----------------------------------------->

<div class="container-fluid">
    <div class="col-lg-12">
    <div id="div4">
<?php
$sql = "select AVG(server_speed),AVG(errors),AVG(u_friendly),AVG(exp) from feedback;";
$r = mysqli_query($conn, $sql);
$rc = mysqli_num_rows($r);
echo "<h4>Average Ratings:  </h4>";
if ($rc > 0) {
    while ($row = mysqli_fetch_assoc($r)) {
        echo "Server Speed: ".$row['AVG(server_speed)']."<br>";
        echo "Errors: ".$row['AVG(errors)']."<br>";
        echo "User Friendly: ".$row['AVG(u_friendly)']."<br>";
        echo "User Experience: ".$row['AVG(exp)']."<br>";
    }
}?></div>
        <table id="t1" class="table table-hover table-secondary table-striped">
            <tr>
                <th>Descriptions by Students</th>
            </tr>

<?php
$sql = "select * from feedback;";
$r = mysqli_query($conn, $sql);
$rc = mysqli_num_rows($r);

if ($rc > 0) {
    while ($row = mysqli_fetch_assoc($r)) {
        echo "<tr><td>" . $row['description'] . "</td>";
    }
    echo "
</tr>
</table>
</div>
</div>";
}

/*--------------------------------------------------*/
?>
 <table id="t1" class="table table-hover table-secondary table-striped">
            <tr>
                <th>Course ID/Name</th>
                <th>Instructor's Ratings</th>
                <th>Courses' Ratings</th>
                <th>Description</th>
            </tr>

<?php
$sql = "select * from feedback;";
$r = mysqli_query($conn, $sql);
$rc = mysqli_num_rows($r);

if ($rc > 0) {
    while ($row = mysqli_fetch_assoc($r)) {
        echo "<tr><td>" . $row['course'] . "</td>";
        echo "<td>" . $row['i_rating'] . "</td>";
        echo "<td>" . $row['c_rating'] . "</td>";
        echo "<td>" . $row['c_description'] . "</td>";
    }
    echo "
</tr>
</table>
</div>
</div>";
}?>
<?php

include "handf/footer_forms.php";
?>