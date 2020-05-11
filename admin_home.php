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
        #i1{
            height: 200px;
            background: url("https://images.unsplash.com/photo-1442406964439-e46ab8eff7c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80");
        }
        
    </style>
</head>
<br><br><br><br>
    <div class="container" >
        <div class="row">
            
            <div class="col-md-3 " id="i1">
                <div class="newDiv">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownButton"><img style="margin-top:10px" class="img-fluid" src="https://ak9.picdn.net/shutterstock/videos/3877019/thumb/7.jpg"/></a>
                            <a style="color:white" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownButton">Manage Tasks and Staff</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownButton">
                                <a href="learner.php" class="dropdown-item">Add Learner</a>
                                <a href="instructor.php" class="dropdown-item">Add Instructor</a>
                                <a href="L_list.php" class="dropdown-item">Manage Learners</a>
                                <a href="I_list.php" class="dropdown-item">Manage Instructors</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 offset-1" id="i1">
                <div class="newDiv">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownButton"><img style="margin-top:10px" class="img-fluid" src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/NGTYhyRhgilq4uu1a/cartoon-animation-of-a-boy-child-student-is-reading-education-book-on-his-desk-with-science-maths-chemistry-biology-engineering-physics-and-other-creative-knowledge-icon-until-graduation-in-hd_vjmybik0l__F0000.png"/></a>
                            <a style="color:white" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownButton">Tests and Courses</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownButton">
                                <a href="course.php" class="dropdown-item">Add Courses</a>
                                <a href="c_list.php" class="dropdown-item">Manage Courses</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 offset-1" id="i1">
                <div class="newDiv">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownButton"><img style="margin-top:10px; height:140px" class="img-fluid" src="https://images.unsplash.com/photo-1532153975070-2e9ab71f1b14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"/></a>
                            <a style="color:white" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownButton">Feedbacks</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownButton">
                                <a href="Afeedback.php" class="dropdown-item">Feedback by Students</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <?php
    include "handf/footer_forms.php";
    ?>