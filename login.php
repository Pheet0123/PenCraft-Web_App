<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="รูป/logo_BW.png">
    <link rel="stylesheet" href="ssx.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    
    <div class="header">
        <h2>เข้าสู่ระบบ</h2>
    </div>

    <form action="login_db.php" method="post">
        <!-- <?php if (isset($_SESSION['error'])) : ?>
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
        
        <div class="input-groupTop">
            <input type="text" name="username" required >
            <div class="iconn">
            <i class="fa-regular fa-eye"></i>
            </div>
        </div>

        <label for="password">รหัสผ่าน</label>
        <div class="input-group">
            <input  type="password" name="password" id="password" required>
            <div class="iconn">
             <i class="fa-solid fa-eye " id="eye"></i>
            </div>
        </div>


        <div class="input-group">
            <button type="submit" name="login_user" class="btn">เข้าสู่ระบบ</button>
        </div>
        
        <p>ยังไม่ได้สมัคสมาชิก <a href="register.php">กดที่นี่</a></p>
    </form>
    <script src="loging.js"> </script>
</body>
</html>