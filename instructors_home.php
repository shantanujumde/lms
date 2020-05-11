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


<head>
<style>

  #cm-popup{
         display:none;
         width:50%;
  height:400px;
  }
 .cm-btn{
         border:none;
         background:#405080;
         color:white;
  border-radius:2px;
  margin-left:700px;
  }
  .cm-btn2{
         border:none;
         background:#405080;
         color:white;
  border-radius:2px;

  }
  #o1{
    width:200px;
    border-radius:25px;
  }
</style>
</head>
<body>
<!------------------------------------------------------------------>
<div style="width:200px; margin:20px auto;">
  <button class="cm-btn btn-info"
          onclick="document.getElementById('cm-popup').style.display='block'">Add Announcement</button>
 </div>
 <div class="container" id="cm-popup">
      <!-- header of the pop up window -->
  <h2 style="width:98%;color:white;text-align:center;padding:1%;background:#405080;">Announce</h2>
        <?php
        $sql="select * from course";
        $r = mysqli_query($conn, $sql);
$rc = mysqli_num_rows($r);

if ($rc > 0) {
  echo "<form method='GET' action='instructors_home.php'>Select Subject : <br>";
    while ($row = mysqli_fetch_assoc($r)){
      echo "
      <input type='radio' name='gender' value='$row[c_id]'>$row[c_id]<br>
";
    }
    echo "<br><br>
    <input class='form-control' type='text' name='announce' id='ann1' placeholder='Write announcement'><br>
    <button type='submit' name='submit' class='btn btn-success'>Announce</button>
    </form>";
  }else{
    echo "No Subject Available";
    }
        ?>
   <button
       class="cm-btn2"
       style="position:absolute;bottom:5%;left:2%;width:80px; height:40px;"
       onclick="document.getElementById('cm-popup').style.display='none'">Hide</button>

 </div>

<!------------------------------------------------------------------>
  <div class="container">
  
  <div class="row " style="margin-top: 10%" >
  <div class="col-md-6 " >



  <div class="card" style="width:351px">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1471970471555-19d4b113e9ed?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="Manage Members" style="width:350px;height:300px;">
    <div class="card-body">
      <h4 class="card-title">Courses</h4>
    <p class="card-text">
    <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Manage courses
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item-text" href="course.php">Add Courses</a>
      <a class="dropdown-item-text" href="I_course_c.php">Remove Courses Content</a>
      <a class="dropdown-item-text" href="c_list.php">Manage Tests & Courses</a>
      <a class="dropdown-item-text" href="I_test_list.php">Edit or Delete Tests</a>
      </div>
    </div>
    </p>
    </div>
  </div>


  </div>
  <div class="col-md-6">

  <div class="card" style="width:351px">
    <img class="card-img-top" src=" https://s3.amazonaws.com/tinycards/image/8102b646e6c40fdc763b19b1966147cd " alt="Manage Tasks" style="width:350;height:300px;">
    <div class="card-body">
      <h4 class="card-title">Learners</h4>
      <p class="card-text"> 
      <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Manage Learners
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item-text" href="learner.php">Add Learner</a>
      <a class="dropdown-item-text" href="L_list.php">Manage learners</a>
      <a class="dropdown-item-text" href="marks/LearnerP.php">View Progress</a>
      </div>
    </div>
      </p>
    </div>
  </div>


  </div>

</div>
</div>

<?php

$op=$_GET['gender'];
$a=$_GET['announce'];
$sql="update course set announcement='$a' where c_id='$op'";
$b = mysqli_query($conn, $sql);


    include "handf/footer_forms.php";
?>