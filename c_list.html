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
        
        
        #other #p{
            text-align: center;
        }
    </style>
</head>
<br><br><br><br>
<!----------------------------------------->

<p id="p" class="text-lg-right font-weight-bold"> Scroll down for add tests in "other" categoris</p>
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
}elseif (strpos($url,"upload=success")==true) {
    echo "<div class='container-fluid'>
    <div class='col-lg-12'><div class='alert alert-success'>
    <strong>Success!</strong> Data uploaded successfully.<i class='material-icons'>
    sentiment_very_satisfied
    </i>
  </div></div></div>";
}
?>
<!----------------------------------------->
<div class="container-fluid">
    <div class="col-lg-12">
        <table id="t1" class="table table-hover table-secondary table-striped">
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Discription</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Upload</th>
                <th>Tests</th>
            </tr>

<?php
$sql = "select * from course;";
$r = mysqli_query($conn, $sql);
$rc = mysqli_num_rows($r);

if ($rc > 0) {
    while ($row = mysqli_fetch_assoc($r)) {
        $r1 = $row['c_id'];
        echo '<tr><td>' . $row['c_id'] . "</td>";
        echo "<td>" . $row['c_name'] . "</td>";
        echo "<td>" . $row['discription'] . "</td>
<td><a class='btn btn-outline-danger' href='c_delete.php?id=$r1'>Delete</a></td>
<td><a class='btn btn-outline-info' href='c_edit_form.php?id=$r1&nm=$row[c_name]&d=$row[discription]'>Edit</a></td>
<td><a class='btn btn-outline-primary ' href='d_course.php?id=$r1'>Add</a></td>
<td><a class='btn btn-outline-secondary' href='quiz/I_quiz.php?id=$r1'>Add</a></td>";
    }
    echo "
</tr>
</table>
</div>
</div>";
}
?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div id="other" class="card">
        <p id="p" class="font-italic">Add tests in "OTHER" cotegory</p>
        <a  class='btn btn-secondary' href='quiz/I_quiz.php?id=other'>Add</a>
        </div>
    </div>
</div>
<?php

include "handf/footer_forms.php";
?>