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
$ss=$_GET['ss'];
$er=$_GET['er'];
$uf=$_GET['uf'];
$ye=$_GET['ye'];
$des=$_GET['des'];
$lid=$_SESSION['l_id'];

$sql1="select * from feedback;";
$r=mysqli_query($conn,$sql1);
$rc = mysqli_num_rows($r);
if ($rc > 0) {
    while ($row = mysqli_fetch_assoc($r)){
        if($row['l_id']==$lid){
            //echo "found";
            $sql1= "update feedback set server_speed='$ss',errors='$er', u_friendly='$uf',exp='$ye',description='$des' where l_id='$lid';    ";
            $up=mysqli_query($conn,$sql1);
            //echo "updated";
        }else{
            //echo "not found";
            $sql1= "insert into feedback (l_id ) values ('$lid');";
            $up=mysqli_query($conn,$sql1);
            $sql2= "update feedback set server_speed='$ss',errors='$er', u_friendly='$uf',exp='$ye',description='$des' where l_id='$lid';    ";
            $up1=mysqli_query($conn,$sql2);
            //echo "updated";
        }
        
}
}else{
echo "ffffail";
}
$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($url,"Sfeedback.php?ss=") == true){
    echo "<script>window.top.location='learners_home.php'</script>";
}
/*
    $sql= "insert into feedback (l_id,server_speed,errors, u_friendly,exp,description) values ('$lid','$ss','$er','$uf','$ye','$des')";
    $up=mysqli_query($conn,$sql);
    if(!$up){
       $sql1= "update feedback set server_speed='$ss',errors='$er', u_friendly='$uf',exp='$ye',description='$des' where l_id='$lid';    ";
       $up=mysqli_query($conn,$sql1);
    }*/
?>
    <div class="container" id="c1">
        <div class="row" >
            <div class="col-md-4" >
                <p>.</p>
                
                <form class="form-group" method="GET" action="Sfeedback.php"> 
                Server Speed: <input id="i1" type="text" name="ss" placeholder="rate:_/10"><br>
                Errors: <input id="i1" type="text" name="er" placeholder="rate:_/10"><br>
                User Firendly: <input id="i1" type="text" name="uf" placeholder="rate:_/10"><br>
                Your Experience: <input id="i1" type="text" name="ye" placeholder="rate:_/10"><br>
                <div class="row">
                <!--<div class="col-md-2">
                <label >feedback</label>
                </div>
                <div class="col-md-4 offset-3">
                <input type="radio" name="gender" id="1" value="1"> <input type="radio" id="2" name="gender" value="2">  <input type="radio" id="3" name="gender" value="3">   <input type="radio" id="4" name="gender" value="4">   <input type="radio" id="5" name="gender" value="5"><br>
                <label for="1">1</label> <label for="2"> -2</label><label for="3"> -3</label><label for="4"> - 4</label><label for="5">- 5</label>
                </div>-->
                </div>

                    <textarea rows="4" placeholder="Description:" name="des" cols="50"></textarea>
                    <input id="i1" type="hidden" name="id" value="<?php echo $_SESSION['l_id'] ?>"><br>
                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>

<?php include "handf/footer_forms.php";?>