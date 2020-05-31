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

<?php


?>
<br><br><br>
<div class="card">
    <div class="card-title text-right">
        <h3 class="card-title"><?php echo $_GET['id']; ?></h3>
    </div>
    <div class="card bg-light">
        <div class="card-body">
            <h4 class="card-subtitle">Announcements</h4>
            <?php 
            $cid=$_GET['id'];
            $sql="select announcement from course where c_id='$cid';";
            $r = mysqli_query($conn, $sql);
            $rc = mysqli_num_rows($r);
            if ($rc > 0) {
                while ($row = mysqli_fetch_assoc($r)){
                        echo "<p class='card-link'>$row[announcement]</p><br>";
                    }
                }
            ?>
            <p></p>
        </div>
    </div>
    <div class="card">
    <div class="card-body">
    </div>
    </div>
    <div class="card bg-light">
        <div class="card-body">
            <h4 class="card-subtitle">Course Contents</h4>
            <?php 
            $cid=$_GET['id'];
            $sql="select location from c_data where c_id='$cid';";
            $r = mysqli_query($conn, $sql);
            $rc = mysqli_num_rows($r);
            if ($rc > 0) {
                while ($row = mysqli_fetch_assoc($r)){
                        echo "<a href='upload/".$row['location']."' class='card-link'>$row[location]</a><br>";
                    }
                }else {
                    echo "<p class='card-text'>No Contents has been Uploaded Yet  <img src='https://img.icons8.com/ios/50/000000/sad-cloud.png'></p>";
                }
            ?>
        </div>
    </div>
    <div class="card">
    <div class="card-body">
    </div>
    </div>
    <div class="card bg-light">
        <div class="card-body">
            <h4 class="card-subtitle">Available Tests</h4>
            <?php 
            $cid=$_GET['id'];
            $sql="select que_id from quiz where test_id='$cid';";
            $r = mysqli_query($conn, $sql);
            $rc = mysqli_num_rows($r);
            if ($rc > 0) {
                echo "<td><a class='btn btn-outline-info' href='quiz/del.php?tid=$cid'>Attempt</a></td>";
                }else {
                    echo "<p class='card-text'>No Tests has been Uploaded Yet  <img src='https://img.icons8.com/ios/50/000000/sad-cloud.png'></p>";
                }

            ?>
        </div>
    </div>
</div>

<?php
include "handf/footer_forms.php";
?>