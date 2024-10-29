<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!");
        }

        if (empty($password)) {
            array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM member WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Your are now logged in";
                header("location: home.php");
            } else {
                array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!");
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!";
                header("location: login.php");
            }
        } else {
            
            header("location: login.php");
        }
    }

?>