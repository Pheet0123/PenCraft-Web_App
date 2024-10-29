<?php 
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="icon" type="image/x-icon" href="รูป/logo_BW.png">
    <link rel="stylesheet" href="ssx.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    
    <div class="header">
        <h2>สมัคสมาชิก</h2>
    </div>
    <form action="register_db.php" method="post">
        <!-- <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?> -->
        <label for="username">ชื่อผู้ใช้</label>
        <div class="input-group">
            <input type="text" name="username" required>
            <div class="iconn">
            <i class="fa-regular fa-eye"></i>
            </div>
        </div>
        <label for="email">Email</label>
        <div class="input-group">
            <input type="email" name="email" required>
            <div class="iconn">
            <i class="fa-regular fa-eye"></i>
            </div>
        </div>
        <label for="password_1">รหัสผ่าน</label>
        <div class="input-group">
            <input type="password" name="password_1"  id="password" required>
            <i class="fa-solid fa-eye" id="eye"></i>
        </div>
        <label for="password_2">ยืนยันรหัสผ่าน</label>
        <div class="input-group">
            <input type="password" name="password_2"  id="password2" required>
            <i class="fa-solid fa-eye" id="eye2"></i>
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">สมัคสมาชิก</button>
        </div>
        <p> มีบัญชีอยู่แล้ว  <a href="login.php">กดที่นี่</a></p>
    </form>
    <script src="loging.js"> </script>
</body>
</html>