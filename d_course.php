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
<!------------------------------------------------------------------------------>
<?php
include_once 'php_connection.php';

$id=$_GET['id'];
?>
<h3></h3>
<div class="container" >
    <div class="col-lg-6 offset-2">
        <h2>Course ID:<?php echo $id?></h2>
        <h6>Select data to upload to above mentioned Course ID</h6>
<!------------------------------------------------------------------------------>
            <p>.</p>
        <form class="from-inline" action="d_course_upload.php" method="POST" enctype="multipart/form-data">
            <input class="btn btn-info" type="file" name="file">
            <input type="text" style="margin-top:30px" id="i1" placeholder="Extension(Optional)" name="ext">
            <input type="hidden" value="<?php echo $id?>" id="i1" placeholder="cid" name="cid">
            <input class="btn btn-success" value="Upload" type="submit" name="upload">
        </form>
    </div>
</div>
<?php
include "handf/footer_forms.php";
?>