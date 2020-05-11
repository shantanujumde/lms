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

$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"learner_to_db=success") == true){
    echo "<script>
    window.alert('Learner Added');
</script>";

}elseif(strpos($url,"error=emptyfields") == true){
    echo "<div class='container-fluid'>
    <div class='col-lg-12'><div class='alert alert-warning'>
    <strong>Empty!</strong> You left some fields empty!!!.<i class='material-icons'>
    sentiment_very_dissatisfied
    </i>
  </div></div></div>";
}?>
<!------------------------------------------------------------------------------------------------->
        <p id="p1">Add a Learner</p>
    <div class="container" id="c1">
        <div class="row" >
            <div class="col-md-4" >
                
                <p>.</p>
                <form class="form-group" method="POST" action="learner_to_db.php"> 
                    <input id="i1" type="text" name="name" placeholder="Enter name"><br>
                    <input id="i1" type="text" name="address" placeholder="Address"><br>
                    <input id="i1" type="date" name="dob" placeholder="DOB"><br>
                    
                    <input id="i1" type="text" name="mob" placeholder="Mobile Number"><br>
            </div>
            <div class="row" >
                <div class="col-md-4">
                            <p>.</p>
                            
                            <input type="radio" id="i6" name="gender" value="male">
                            <label for="i6">Male</label><br>
                            <input type="radio" id="i7" name="gender" value="female">
                            <label for="i7">Female</label>
                            <input id="i1" type="text" name="un" placeholder="username"><br>
                            <input id="i1" type="password" name="pw" placeholder="password"><br>
                            <button class="btn btn-success" name="submit" type="submit">Save</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>

    <!-----FOOTER----------------------------------------------------->
    
    <?php
//for delete

include "handf/footer_forms.php";
?>
    