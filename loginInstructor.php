<!DOCTYPE HTML>
<html>
<head>

</head>
<body>

    <?php

    if(isset($_POST['login-instructor'])){

        require 'php_connection.php';

        
        $usernmail = $_POST["u_name"];
        $mypassword = $_POST["pass"];


        if (empty($usernmail) || empty($mypassword)) {

            header("Location: signininstructor.php?error=emptyfields");
            exit();

        }

        else {
            $sql = "Select * from instructor where uname=? or mob=?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: signininstructor.php?error=sqlerror");
                exit();
            }

            else {
                mysqli_stmt_bind_param($stmt,"ss",$usernmail,$usernmail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($mypassword,$row['pass']);
                    if ($mypassword!=$row['pass']) {
                        header("Location: signininstructor.php?error=wrongpassword&npass=".$mypassword."&email=".$usernmail);
                        exit();
                    }
                    elseif ($mypassword==$row['pass']) {
                        session_start();

                        $_SESSION['name'] = $row['name'];
                        $_SESSION['uname'] = $row['uname'];
                        $_SESSION['i_id'] = $row['i_id'];
                        $_SESSION['type'] = "instructor";
                        header("Location: instructors_home.php?login=success");
                        exit();

                    }
                    else{
                        header("Location: signininstructor.php?error=Wrongpassword");
                        exit();
                    }

                }
                else {

                    header("Location: signininstructor.php?error=nouser");

                }
            }

        }

    }

    else {
        header("Location: signininstructor.php");
    }


    ?>


</body>
</html>
