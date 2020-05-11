<!DOCTYPE HTML>
<html>
<head>

</head>
<body>

    <?php

    if(isset($_POST['login-admin'])){

        require 'php_connection.php';

        
        $usernmail = $_POST["u_name"];
        $mypassword = $_POST["pass"];


        if (empty($usernmail) || empty($mypassword)) {

            header("Location: signinAdmin.php?error=emptyfields");
            exit();

        }

        else {
            $sql = "Select * from signup where nusername=? or nemail=?";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: signinAdmin.php?error=sqlerror");
                exit();
            }

            else {
                mysqli_stmt_bind_param($stmt,"ss",$usernmail,$usernmail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($mypassword,$row['npass']);
                    if ($mypassword!=$row['npass']) {
                        header("Location: signinAdmin.php?error=wrongpassword&npass=".$mypassword."&email=".$usernmail);
                        exit();
                    }
                    elseif ($mypassword==$row['npass']) {
                        session_start();
                        $_SESSION['a_id']=$row['id'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['nusername'] = $row['nusername'];
                        $_SESSION['type'] = "admin";
                        header("Location: admin_home.php?login=success");
                        exit();

                    }
                    else{
                        header("Location: signinAdmin.php?error=Wrongpassword");
                        exit();
                    }

                }
                else {

                    header("Location: signinAdmin.php?error=nouser");

                }
            }

        }

    }

    else {
        header("Location: signinAdmin.php");
    }


    ?>


</body>
</html>
