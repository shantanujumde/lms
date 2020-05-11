<?php
session_start();
    include_once 'php_connection.php';
        $id=$_GET['id'];
        $nm=$_GET['nm'];
        $ad=$_GET['ad'];
        $dob=$_GET['dob'];
        $co=$_GET['co'];
        $qu=$_GET['qu'];
        $m=$_GET['m'];
        $mks=$_GET['mks'];
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
<!---------------------------------------------------------------------------------------------------------------->

        <p id="p1">Learner's Edit</p>
    <div class="container"  id="c1">
        <div class="row" >
            <div class="col-md-4" >
                
                <p>.</p>
                <form class="form-group" method="GET" action="L_edit.php"> 
                    <input value="<?php echo $nm?>" id="i1" type="text" name="name" placeholder="Enter name"><br>
                    <input value="<?php echo $ad?>" id="i1" type="text" name="address" placeholder="Address"><br>
                    <input value="<?php echo $dob?>" id="i1" type="date" name="dob" placeholder="DOB"><br>
                    <input value="<?php echo $co?>" id="i1" type="text" name="co" placeholder="Course"><br> 
                    <input value="<?php echo $id?>" id="i1" type="hidden" name="l_id" placeholder="l_id"><br>   
                
            </div>
        
        
    
            <div class="row" >
                <div class="col-md-4">
                        
                            <p>.</p>
                            <input value="<?php echo $qu?>" id="i1" type="text" name="Qu" placeholder="Qualification"><br>
                            <input value="<?php echo $m?>" id="i1" type="text" name="mob" placeholder="Mobile Number"><br>
                            <input value="<?php echo $mks?>" id="i1" type="text" name="mks" placeholder="marks"><br>
                            <input class="btn-info" name="submit" type="submit" value="update">
                    </form>
                
                </div>
            </div>
        </div>
    </div>

    <!-----FOOTER----------------------------------------------------->
    <?php
    include "handf/footer_forms.php";
    ?>