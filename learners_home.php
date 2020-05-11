<?php
session_start();
include "handf/header_forms.php";
include "handf/slideL.php";
?>


<body>


  <div class="container">
  
  <div class="row " style="margin-top: 10%" >
  <div class="col-md-6 " >



  <div class="card" style="width:400px">
    <img class="card-img-top" src=" https://www.questpond.com/img/2.png" alt=" Courses" style="background-color:#42f5da;width:400px;height:300px;">
    <div class="card-body">
      <h4 class="card-title">Courses</h4>
    <p class="card-text">
    <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Courses
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item-text" href="L_courses.php">My Courses</a>
      <a class="dropdown-item-text" href="L_test_list.php">View Courses and Tests</a>
      <a class="dropdown-item-text" href="marks/learnerM.php">View scoresboard</a>
      </div>
    </div>
    </p>
    </div>
  </div>


  </div>
  <div class="col-md-6">

  <div class="card" style="width:400px">
    <img class="card-img-top" src=" https://cdn.pixabay.com/photo/2017/12/11/09/03/information-3011747_960_720.png" alt="Feedback" style="background-color:#42f5da;width:400;height:300px;">
    <div class="card-body">
      <h4 class="card-title">Feedback</h4>
      <p class="card-text"> 
      <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Feedback
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item-text" href="Sfeedback.php">System Feedback</a>
      <a class="dropdown-item-text" href="Cfeedback.php">Course Feedback</a>

      </div>
    </div>
      </p>
    </div>
  </div>


  </div>

</div>
</div>

<?php
    include "handf/footer_forms.php";
?>