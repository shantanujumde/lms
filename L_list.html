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
//for delete
$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"L_delete=success") == true){
    echo "<script>
    window.alert('Data deleated Successfully');
</script>";
}
///for edit
$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"L_edit=success") == true){
    echo "<div class='container-fluid'>
    <div class='col-lg-12'><div class='alert alert-info'>
    <strong>Success!</strong> Changes has been made to Database.<i class='material-icons'>
    sentiment_very_satisfied
    </i>
  </div></div></div>";
}?>
<div class="container-fluid">
    <div class="col-lg-12">
        <table id="t1" style="margin-top:50px" class="table table-hover table-secondary table-striped">
        <tr>
        <th>Sr.No</th>
        <th>name</th>
        <th>address</th>
        <th>DOB</th>
        <!-- <th>Course</th> -->
        <!-- <th>Qualifications</th> -->
        <th>Mobile Number</th>
        <!-- <th>Marks(prev. yr)</th> -->
        <th>Delete</th>
        <th>Edit</th>
        </tr>
       
<?php
$sql = "select * from learner;";
$r=mysqli_query($conn,$sql);
$rc=mysqli_num_rows($r);
$i=1;

if($rc>0){
    while($row =mysqli_fetch_assoc($r)){
        echo '<tr><td>'.$i."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['dob']."</td>";
        // echo "<td>".$row['course']."</td>";
        // echo "<td>".$row['qualification']."</td>";
        echo "<td>".$row['mob']."</td>";
        // echo "<td>".$row['marks']."</td>
        echo "<td><a class='btn btn-outline-danger' href='L_delete.php?id=$row[l_id]'>Remove</a></td>
        <td><a class='btn btn-outline-info' href='L_edit_form.php?id=$row[l_id]&nm=$row[name]&ad=$row[address]&dob=$row[dob]&co=$row[course]&qu=$row[qualification]&m=$row[mob]&mks=$row[marks]'>Edit</a></td>";
        $i=$i+1;
    }
    echo "
        </tr>
        </table></div></div>";
}
?>
<!-----------------------for alert massages--------------------------->  

<?php
    include "handf/footer_forms.php";
?>