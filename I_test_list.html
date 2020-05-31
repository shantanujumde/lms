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
?>
<?php
$id=$_GET['id'];
$sql="delete from quiz where test_id='$id';";
mysqli_query($conn,$sql);
header("Location: I_test_list.php?delete=success");
?>
<br><br><br><br><br>
<div class="container-fluid">
    <div class="col-lg-12">
        <table id="t1" class="table table-hover table-secondary table-striped">
        <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>View Test</th>
        <th>Delete Test</th>
        </tr>
<tr><td>Other</td>
    <td> NA </td>
    <td><a class='btn btn-outline-info' href='quiz/quiz_preview.php?tid=other'>View</a></td>
    <td><a class='btn btn-outline-danger' href='I_test_list.php?id=other'>Delete</a></td></tr>
<?php
$sql="select * from course";
$r=mysqli_query($conn,$sql);
$rc=mysqli_num_rows($r);

if($rc>0){
    while($row =mysqli_fetch_assoc($r)){
        echo '<tr><td>'.$row['c_id']."</td>";
        echo '<td>'.$row['c_name']."</td>";
        echo "<td><a class='btn btn-outline-info' href='quiz/quiz_preview.php?tid=$row[c_id]'>View</a></td>
        <td><a class='btn btn-outline-danger' href='I_test_list.php?id=$row[c_id]'>Delete</a></td>";
    }
}
echo "</tr></table></div>
</div>";
?>


<?php
    include "handf/footer_forms.php";
?>