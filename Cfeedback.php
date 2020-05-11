<?php
session_start();
    
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
$cid=$_GET['id'];
$ins=$_GET['ins'];
$co=$_GET['co'];
$des=$_GET['des'];
$lid=$_SESSION['l_id'];

        $sql1="select * from feedback;";
        $r=mysqli_query($conn,$sql1);
        $rc = mysqli_num_rows($r);
        if ($rc > 0) {
            while ($row = mysqli_fetch_assoc($r)){
                if($row['l_id']==$lid){
                    //echo "found";
                    $sql1= "update feedback set course='$cid',i_rating='$ins', c_rating='$co',c_description='$des' where l_id='$lid';    ";
                    $up=mysqli_query($conn,$sql1);
                    header("Location: learners_home.php");
                    //echo "updated";
                }else{
                    //echo "not found";
                    $sql1= "insert into feedback (l_id ) values ('$lid');";
                    $up=mysqli_query($conn,$sql1);
                    $sql2= "update feedback set course='$cid',i_rating='$ins', c_rating='$co',c_description='$des' where l_id='$lid';    ";
                    $up1=mysqli_query($conn,$sql2);
                    header("Location: learners_home.php");
                    //echo "updated";
                    if($up){
                        //echo "success";
                    }
                }
        }
    }else{
        echo "ffffail";
    }
    $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($url,"Cfeedback.php?id=") == true){
        echo "<script>window.top.location='learners_home.php'</script>";
    }
       
    
?>
    <div class="container" id="c1">
        <div class="row" >
            <div class="col-md-4" >
                <p>.</p>
                
                <form class="form-group" method="GET" action="Cfeedback.php"> 
                Course Name/ID: <input id="i1" type="text" name="id" placeholder="eg. CS20x"><br>
                Rate Instructor: <input id="i1" type="text" name="ins" placeholder="rate:_/10"><br>
                Rate Course: <input id="i1" type="text" name="co" placeholder="rate:_/10"><br>
                <div class="row">
                <!--<div class="col-md-2">
                <label >feedback</label>
                </div>
                <div class="col-md-4 offset-3">
                <input type="radio" name="gender" id="1" value="1"> <input type="radio" id="2" name="gender" value="2">  <input type="radio" id="3" name="gender" value="3">   <input type="radio" id="4" name="gender" value="4">   <input type="radio" id="5" name="gender" value="5"><br>
                <label for="1">1</label> <label for="2"> -2</label><label for="3"> -3</label><label for="4"> - 4</label><label for="5">- 5</label>
                </div>-->
                </div>

                    <textarea placeholder="Description:" rows="4" name="des" cols="50"></textarea>
                    <input id="i1" type="hidden" name="id" value="<?php echo $_SESSION['l_id'] ?>"><br>
                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>

<?php include "handf/footer_forms.php";?>