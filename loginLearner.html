<!DOCTYPE HTML>
<html>
<head>

</head>
<body>

    <?php

    if(isset($_POST['login-learner'])){

        require 'php_connection.php';

        
        $usernmail = $_POST["u_name"];
        $mypassword = $_POST["pass"];

        if (empty($usernmail) || empty($mypassword)) {

            header("Location: signinLearner.php?error=emptyfields");
            exit();

        }

        else {
            $sql = "Select * from learner where uname=? or mob=?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: signinLearner.php?error=sqlerror");
                exit();
            }

            else {
                mysqli_stmt_bind_param($stmt,"ss",$usernmail,$usernmail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($mypassword,$row['pass']);
                    if ($mypassword!=$row['pass']) {
                        header("Location: signinLearner.php?error=wrongpassword&npass=".$mypassword."&email=".$usernmail);
                        exit();
                    }
                    elseif ($mypassword==$row['pass']) {
                        session_start();

                        $_SESSION['name'] = $row['name'];
                        $_SESSION['uname'] = $row['uname'];
                        $_SESSION['l_id'] = $row['l_id'];
                        $_SESSION['type'] = "learner";
                        header("Location: learners_home.php?login=success");
                        exit();

                    }
                    else{
                        header("Location: signinLearner.php?error=Wrongpassword");
                        exit();
                    }

                }
                else {

                    header("Location: signinLearner.php?error=nouser");

                }
            }

        }

    }

    else {
        header("Location: signinLearner.php");
    }


    ?>


</body>
</html>
