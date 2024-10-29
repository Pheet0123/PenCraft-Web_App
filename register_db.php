<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

     
        if ($password_1 != $password_2) {
            array_push($errors, "รหัสผ่านทั้งสองไม่เหมือนกัน");
            $_SESSION['error'] = "รหัสผ่านทั้งสองไม่เหมือนกัน";
        }

        $user_check_query = "SELECT * FROM member WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "ชื่อผู้ใช้นี้มีผู้ใช้งานแล้ว");
                $_SESSION['error'] = "ชื่อผู้ใช้นี้มีผู้ใช้งานแล้ว";
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email นี้มีบัญชีอยู่แล้ว");
                $_SESSION['error'] = "Email นี้มีบัญชีอยู่แล้ว";
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO member (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        } else {
            header("location: register.php");
        }
    }

?>