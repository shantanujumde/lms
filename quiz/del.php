<?php
session_start();
$r1=0;
?>
<?php
include "../handf/header_forms.php";
include_once '../php_connection.php';
?>
<!-------------------------------------------------------------------->
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!------------------------------slide bar----------------------->
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div id="n1">

       <ul>
            <button class="btn" onclick="slide()" id="btn1"><i class="material-icons">close</i></button>

            <li><a class="btn" id="a1" href="../learners_home.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a class="btn" id="a1" href="../marks/learnerM.php"><i class="fa fa-book"></i> Progress and Marks</a></li>
            <li><a class="btn" id="a1" href="../L_test_list.php"><i class="fa fa-align-left"></i> Tests</a></li>
            <li><a class="btn" id="a1" href="../L_courses.php"><i class="fa fa-book"></i> Courses</a></li>
            <li><a class="btn" id="a1" href="../Logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
    
</div>

<!-------------------------nav bar------------------------>
<nav id="nav" class="navbar  navbar-expand-lg bg-light navbar-light sticky-bottom">
    <div class="container-fluid">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#newMenu" aria-controls="newMenu" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">
</span>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <button class="btn nav-link" id="b1" onclick="slide()"><i class="material-icons">menu</i></button>
            </li>
            <div class="collapse navbar-collapse" id="newMenu">
                <div class="navbar-nav">
                <li class="nav-item">
            <a class="nav-link" href="learners_home.php"><i class="fa fa-home"></i></a>
            </li>
<p> <style>
.vl {
  border-left: 4px solid black;
  height: 40px;
}
</style>

<div class="vl"></div> </p>
            <li class="nav-item">
            <a class="nav-link" href="Logout.php"><i class="fa fa-sign-out"></i>  </a>
            </li>
                </div>
            </div>
        </ul>
    <div class="navbar-header">
        <ul class="nav navbar-nav navbar-right">
            <li><a class="navbar-brand" href="../profilel.php"><?php
               /*-----------------------------------------------------------------------*/
               error_reporting(0);
               $sql="select name from learner where l_id='$_SESSION[l_id];'";
               $r=mysqli_query($conn,$sql);
               $rc=mysqli_num_rows($r);
               if($rc>0){
                   while($row =mysqli_fetch_assoc($r)){
                       $l=$row['name'];
                       // echo $l;
                   }}
       
               $sql1="select name from instructor where i_id='$_SESSION[i_id];'";
               $r=mysqli_query($conn,$sql1);
               $rc=mysqli_num_rows($r);
               if($rc>0){
                   while($row =mysqli_fetch_assoc($r)){
                       $i=$row['name'];
                       // echo $i;
                   }}
       
               $sql2="select name from signup where id='$_SESSION[a_id];'";
               $r=mysqli_query($conn,$sql2 );
               $rc=mysqli_num_rows($r);
               if($rc>0){
                   while($row =mysqli_fetch_assoc($r)){
                       $a=$row['name'];
                       // echo $a;
                   }}
       
               
            if($_SESSION['name']==$l){
                $lid=$_SESSION['l_id'];
                $q = mysqli_query($conn,"SELECT image FROM `profilel` where l_id=$lid" );
            }elseif($_SESSION['name']==$i){
                $iid=$_SESSION['i_id'];
                $q = mysqli_query($conn,"SELECT image FROM `profilel` where i_id=$iid" );
            }elseif ($_SESSION['name']==$a) {
               $aid=$_SESSION['a_id'];
               $q = mysqli_query($conn,"SELECT image FROM `profilel` where a_id=$aid" );
            }else {
               echo "<img width='35' height='35' src='profile/default.png' alt='Default Profile Pic'>";
                echo "error";
            }
               /*-----------------------------------------------------------------------*/  
 include_once 'php_connection.php';
    // $q = mysqli_query($conn,"SELECT image FROM `profilel` where l_id=$iid or i_id=$iid or a_id=$iid" );
            while($row = mysqli_fetch_assoc($q)){
                    if($row['image'] == ""){
                            echo "<img width='35' height='35' src='../profile/default.png' alt='Default Profile Pic'>";
                    } else {
                            echo "<img width='35' height='35' src='../profile/".$row['image']."' alt='Profile Pic'>";
                    }
                }
        ?></a></li>

            <li><a class="navbar-brand" href="profilel.php"><?php echo $_SESSION['name']?></a></li>
        </ul>  
        </div>
    </div>
</nav>
<!-------------------------------------------------------------------->
<head>
    <style>
 #f2{
            position: relative;
            padding: 50px;
            width: 700px;
            margin-left: 280px;
            margin-top: 50px;
            border-radius: 5px;
            background: rgba(255,255,255,0.8);
            align-items: center;
        }
        #f5{
            position: relative;
            padding: 50px;
            width: 700px;
            margin-left: 280px;
            margin-top: 50px;
            border-radius: 5px;
            background: rgba(255,255,255,0.8);
            align-items: center;
        }
        #f3{
            
            align-items: center;
        }
        #start{
            margin-left: 500px;
            position: fixed;
        }
        #butn2{
            display: none;
        }
        #f2{
            margin-top: 10%;
            margin-left: 500px;
        }
        
    </style>
    <script>
        function hide(){
            document.getElementById("butn2").style.display = "block"; 
            document.getElementById("butn1").style.display = "none"; 
        }
        function btn_text(){
                document.getElementById("start").value="Next";
                document.getElementById("start").click=true;
                return false;
            }
        function btn_next(){
            document.getElementById("next").click;
            return false;
        }

    </script>
</head>
<?php

 /*-----------------------------get serial number--------------------------------*/
 $sr=0;
 $sql3="select * from count;";
 $r=mysqli_query($conn,$sql3);
 $rc=mysqli_num_rows($r);

 if($rc>0){
     while($row = mysqli_fetch_assoc($r)){
         $sr=$row['sr_no'];
     }   
 }
// echo "sr from start".$sr;
 
/*---------------------------get question and opt.---------------------------*/
echo "<div class='form-group' id='f1'>";
// $tid=$_GET['tid'];
// echo $tid."<br>".$sr;
/*------------------------------------------*/
if($tid==""){
    $sql9="select test_id from count";
$r=mysqli_query($conn,$sql9);
$rc=mysqli_num_rows($r);
$row= mysqli_fetch_assoc($r);
    $cid=$row['test_id'];
}else{
    
$sql="update count set test_id='$tid';";
$r=mysqli_query($conn,$sql);

$sql9="select test_id from count";
$r=mysqli_query($conn,$sql9);
$rc=mysqli_num_rows($r);
$row= mysqli_fetch_assoc($r);
    $cid=$row['test_id'];
    echo $cid;
}

/*------------------------------------------*/
//$tid="other";
    $sql="select question,opt1,opt2,opt3,opt4,ans from quiz where test_id='$cid' and sr_no='$sr';";
    $r=mysqli_query($conn,$sql);
    $rc=mysqli_num_rows($r);
    // echo "<br>".$rc;    


if($rc>0){
    //if(isset($_GET['submit'])){//button is clicked or not
        
        $sr=$sr+1;
    $sql4="update count set sr_no='$sr';";
    $up=mysqli_query($conn,$sql4);

    /*if($up){
        echo "Data updated";
    }
    else{
        echo "Data not updated";
    }*/
        /*-------------display questions-------------*/
    while($row =mysqli_fetch_assoc($r)){
        /*$id=$row['que_id'];*/
        $que=$row['question'];
        $o1=$row['opt1'];
        $o2=$row['opt2'];
        $o3=$row['opt3'];
        $o4=$row['opt4'];
        $ans=$row['ans'];
        echo "<div id='f2'>
        <form method='GET'  action='marks.php'><p>$que</p>
        <input type='hidden' name='ans' value='$ans'>
        <input type='radio' name='gender' id='o1' value='$o1'><label for='o1'> $o1</label><br>
        <input type='radio' name='gender' id='o2' value='$o2'><label for='o2'> $o2</label><br>
        <input type='radio' name='gender' id='o3' value='$o3'><label for='o3'> $o3</label><br>
        <input type='radio' name='gender' id='o4' value='$o4'><label for='o4'> $o4</label><br>
        <button class='btn btn-success' name='submit' id='next' type='submit'>Submit</button>
        </form>";
    }//}

    /*echo "
    <form action='del.php' id='f3' method='GET'>
    <div id='main'>
        <div id='butn1'>
            <input class='btn btn-info' name='submit' type='submit' id='start' href='del.php?tid=$tid' value='Go>' onclick='hide();'>
            <button class='btn btn-info' name='submit' type='submit' href='del.php?tid=$tid'>next</button>
    </form> </div>

    ";*/
    //echo "</div>";
   /*---------------------------------------*/
    $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$mks=0;
    if(strpos($url,"marks=") == true){
   /*---------------------------------------*/
    $mks=$_GET['marks'];
// echo "mks1- ".$mks;
$r1=0;
    $sql2="select * from count;";
    $r=mysqli_query($conn,$sql2);
    $rc=mysqli_num_rows($r);

    if($rc>0){
        while($row = mysqli_fetch_assoc($r)){
            $r1=$row['mks'];
        }   
    }
    if($mks==1){
        $r1=$r1+1;
    }

//$mks="<script type='text/javascript'>document.write(r1);</script>";
//echo "fffff".$r1."<br>";
$sql="update count set mks='$r1';";
$up=mysqli_query($conn,$sql);

    /*if($up){
        echo "Data updated";
    }
    else{
        echo "Data not updated";
    }*/


}
}else{
    $sql8="select * from count;";
    $r=mysqli_query($conn,$sql8);
    $rc=mysqli_num_rows($r);

    if($rc>0){
        while($row = mysqli_fetch_assoc($r)){
            $r1=$row['mks'];
        }   
    }
    /*----------------------marks into student's DB---------------------*/
    $date = date('Y/m/d');
    $l_id=$_SESSION['l_id'];
    
        
        /*if($up7){
            echo "Marks Updated";
        }else{
            echo "Marks Update FAILED";
    }*/
    /*------------------------------------------------------------------*/
    echo "<div id='f5'><p>Marks Obtained: ".$r1."<br>";  
    echo "Name: ".$_SESSION['name']."</p>";
    
    echo "
    <form action='../L_test_list.php' method='GET'><p>Quiz completed</p>
    <input type='hidden' name='c_id' value='<?php echo $c_id; ?>'>
    <input type='hidden' name='date' value='<?php echo $date; ?>'>
    <input type='hidden' name='l_id' value='<?php echo $l_id; ?>'>
    <input type='hidden' name='r1' value='<?php echo $r1; ?>'>
    <a class='btn btn-danger' href='../L_test_list.php?c_id=$cid&date=$date&l_id=$l_id&r1=$r1'>Save and Exit</a>
    </form></div>
    <a class='btn btn-primary' href='../marks/learnerM.php' id='next'>Back to Home</a>
    ";


}

?>

<!------------------------------------------->
</body>
</html>