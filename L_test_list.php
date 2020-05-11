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
<div class="container-fluid">
    <div class="col-lg-12">
        <table id="t1" class="table table-hover table-secondary table-striped">
        <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <!--<th>View Test</th>-->
        <th>Attempt Test</th>
        </tr>
<tr><td>Other</td>
    <td> NA </td>
    <td><a class='btn btn-outline-info' href='quiz/del.php?tid=other'>Attempt</a></td>
    <!--<td><a class='btn btn-outline-danger' href='I_test_list.php?id=other'>Delete</a></td>--></tr>
<?php
$sql="select * from course";
$r=mysqli_query($conn,$sql);
$rc=mysqli_num_rows($r);

if($rc>0){
    while($row =mysqli_fetch_assoc($r)){
        echo '<tr><td>'.$row['c_id']."</td>";
        echo '<td>'.$row['c_name']."</td>";
        echo "<td><a class='btn btn-outline-info' href='quiz/del.php?tid=$row[c_id]'>Attempt</a></td>";
    }
}
echo "</tr></table></div>
</div>";
?>
<?php
echo "print";
$r1=$_GET["r1"];
$l_id=$_GET["l_id"];
$c_id=$_GET["c_id"];
$date=$_GET["date"];
// echo $r1;
// echo $l_id;
// echo $c_id;
// echo $date;

$sql9 = "select c_id from marks where l_id='$l_id';";
$r=mysqli_query($conn,$sql9);
$rc=mysqli_num_rows($r);


if($rc>0){
    // echo "<br>if<br>";
    $i=0;
    while($row =mysqli_fetch_assoc($r)){
        // echo "<br>while<br>";
        // echo $row['c_id'];
        if($row['c_id']==$c_id){
            echo $row['c_id'];
            $i=1;
            echo "found";
            break;
        }
}}
if($i==1){
    $sql8="update marks set marks='$r1', date='$date', l_id='$l_id' where  c_id='$c_id' ";
    $up8=mysqli_query($conn,$sql8);
    echo "updated";
}else{
    $sql7="insert into marks (marks ,c_id ,date ,l_id) values ('$r1','$c_id','$date','$l_id');";
    $up7=mysqli_query($conn,$sql7);
    if($up7){
        echo "inserted";    
    }else{
        echo "error";
    }
}
/*-----------------------------------------------------------*/
/*--------------------------for marks and sr_no reset---------------------------*/
// if(isset($_POST['complete'])){
    $sql5="update count set mks='0';";
    $up1=mysqli_query($conn,$sql5);

    /*if($up1){
        echo "Data updated";
    }
    else{
        echo "Data not updated";
    } */
    $sql6="update count set sr_no='1';";
    $up2=mysqli_query($conn,$sql6);

    
/*-----------------------------------------------------------*/
// $sql7="insert into marks (marks ,c_id ,date ,l_id) values ('$r1','$cid','$date','$l_id');";
// $up7=mysqli_query($conn,$sql7);
// echo "inserted";
// if(!$up7){
//     $sql8="update marks set marks='$r1', date='$date', l_id='$l_id' where  c_id='$c_id' ";
//     echo "updated";
// }
// }
?>

<?php
    include "handf/footer_forms.php";
?>