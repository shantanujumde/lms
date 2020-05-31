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
<br><br><br><br><br>
<?php
//for delete
$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"I_delete=success") == true){
    echo "<script>
    window.alert('Data deleated Successfully');
</script>";
}
///for edit
$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"I_edit=success") == true){
    echo "<div class='container-fluid'>
    <div class='col-lg-12'><div class='alert alert-info'>
    <strong>Success!</strong> Changes has been made to Database.<i class='material-icons'>
    sentiment_very_satisfied
    </i>
  </div></div></div>";
}
?>
<!------------------------------------------------------------------------------------------------>
<div class="container-fluid">
    <div class="col-lg-12">
        <table id="t1" class="table table-hover table-secondary table-striped">
        <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>DOB</th>
        <th>Experties</th>
        <th>Qualifications</th>
        <th>Mobile Number</th>
        <th>Experience(yr.)</th>
        <th>Delete</th>
        <th>Edit</th>
        </tr>
       
<?php
$sql = "select * from instructor;";
$r=mysqli_query($conn,$sql);
$rc=mysqli_num_rows($r);

if($rc>0){
    while($row =mysqli_fetch_assoc($r)){
        $r1=$row['i_id'];
        echo '<tr><td>'.$row['i_id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['dob']."</td>";
        echo "<td>".$row['expert']."</td>";
        echo "<td>".$row['qualification']."</td>";
        echo "<td>".$row['mob']."</td>";
        echo "<td>".$row['experience']."</td>
        <td><a class='btn btn-outline-danger' href='I_delete.php?id=$r1'>Remove</a></td>
        <td><a class='btn btn-outline-info' href='I_edit_form.php?id=$r1&nm=$row[name]&ad=$row[address]&dob=$row[dob]&ex=$row[expert]&qu=$row[qualification]&m=$row[mob]&exp=$row[experience]'>Edit</a></td>";
    }
    echo "
        </tr>
        </table></div></div>";
}
?>
<!-----FOOTER----------------------------------------------------->
   
<!-----------------------for alert massages--------------------------->  

<?php
    include "handf/footer_forms.php";
?>