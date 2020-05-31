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

 <!--------------------profile picture-------------------------------------->
<head>
    <style>
        #div{
            background-color: gray;
            height: 270px;
            width: 700px;
        }
        </style>
       
</head>
<?php

if(isset($_POST['submit11'])){
    include_once 'php_connection.php';
    //echo $_SESSION['l_id']."---------------------<br>";
    //echo $_FILES['file']['name'];
    /*$s="insert into profilel (l_id,image) values ( '".$_SESSION['l_id']."','".$_FILES['file']['name']."')";*/
    /*----------------------------------------------------*/
    $sql2 = mysqli_query($conn,"SELECT * FROM `profilel`");
    while($row = mysqli_fetch_assoc($sql2)){
        if($row['l_id']!=$_SESSION['l_id']){
            /*--------------------------------------------------*/
            error_reporting(0);
                if($_SESSION['l_id']){
                    $iid=$_SESSION['l_id'];
                    $s="insert into profilel (l_id,image) values ( '$iid','".$_FILES['file']['name']."')";
                }elseif ($_SESSION['i_id']) {
                    $iid=$_SESSION['i_id'];
                    $s="insert into profilel (i_id,image) values ( '$iid','".$_FILES['file']['name']."')";
                }elseif ($_SESSION['a_id']) {
                    $iid=$_SESSION['a_id'];
                    $s="insert into profilel (a_id,image) values ( '$iid','".$_FILES['file']['name']."')";
                }else {
                    echo "invalid login details";
                }
            /*--------------------------------------------------*/
            
            $q = mysqli_query($conn,$s);
            $r=move_uploaded_file($_FILES['file']['tmp_name'],"profile/".$_FILES['file']['name']);
            if(!$q && !$r) {
                // echo "Server Error!!!";
            }else {
                // echo "Updated :)";
            }
        }else {
            /*------------------------------------------------------*/
            error_reporting(0);
            if($_SESSION['l_id']){
                $iid=$_SESSION['l_id'];
                $s="update profilel set image='".$_FILES['file']['name']."' where l_id='$iid'";
            }elseif ($_SESSION['i_id']) {
                $iid=$_SESSION['i_id'];
                $s="update profilel set image='".$_FILES['file']['name']."' where i_id='$iid'";
            }elseif ($_SESSION['a_id']) {
                $iid=$_SESSION['a_id'];
                $s="update profilel set image='".$_FILES['file']['name']."' where a_id='$iid'";
            }else {
                echo "invalid login details";
            }
            /*------------------------------------------------------*/

            $q = mysqli_query($conn,$s);
            move_uploaded_file($_FILES['file']['tmp_name'],"profile/".$_FILES['file']['name']);
            if(!$q) {
                // echo "Server Error!!!";
            }else {
                // echo "Updated :)";
            }
        }
    }}
    
?>
 <body>
     <br><br><br><br>
     <div id="div">
    
    <form action="profilel.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="col-md-6">
                <input type="file" name="file">
                <button type="submit" name="submit11">upload</button>
            </div>
        </div>
    </form>
    
    <?php
    include_once 'php_connection.php';
    /*-------------------------------------------------*/
    error_reporting(0);
    if($_SESSION['l_id']){
        $iid=$_SESSION['l_id'];
        $q = mysqli_query($conn,"SELECT image FROM `profilel` where l_id='$iid'");
    }elseif ($_SESSION['i_id']) {
        $iid=$_SESSION['i_id'];
        $q = mysqli_query($conn,"SELECT image FROM `profilel` where i_id='$iid'");
    }elseif ($_SESSION['a_id']) {
        $iid=$_SESSION['a_id'];
        $q = mysqli_query($conn,"SELECT image FROM `profilel` where a_id='$iid'");
    }else {
        echo "invalid login details";
    }
    /*-------------------------------------------------*/
    

            while($row = mysqli_fetch_assoc($q)){
                    if(!$row['image']){
                        // echo "mmmmmmmmmmmmmmmmmmmmmmmm";    
                        echo "<br><br><div class='container'><img width='100' height='100' src='profile/default.png' alt='Default Profile Pic'></div>";
                    } else {
                        // echo "hhhhhhhhhhhhhhhhhhhhhhhh";
                            echo "<br><br><div class='container'><img width='100' height='100' src='profile/".$row['image']."' alt='Profile Pic'></div>";
                    }
                    echo "<br>";
            
                }
                
    ?></div>
    <?php include "handf/footer_forms.php";?>
 </body>