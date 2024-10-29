<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="About_UsTi.css">
    <link rel="icon" type="image/x-icon" href="รูป/logo_BW.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
</head>
<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "คุณต้องเข้าสู่ระบบก่อน";
        header('location:login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
       
    }

?>

<body>
    <div>
        <div class="ggg">
            <div class="nav_bar">
                <div class="lmgj" onclick=close_nav_bar()> <i class='bx bx-window-close'></i> </div>
                    <div class="h1j"><a href="home.php" class="HPm">HOME</a></div>
                    <div class="h1j"><a href="Product.php" class="HPm"> PRODUCT</a></div>
                    <div class="h1lm">ABOUT US</div>
                    <div class="h1j"><p><a href="login.php?logout='1'" style="color: red; text-decoration: none;" >Logout</a></p></div>
            </div>
            <div class="ul1">
                <div class="lmg"><img src="รูป/logo_BW.png" alt=""></div>
                <div class="h1"><a href="home.php" class="HP">HOME</a></div>
                <div class="h1"><a href="Product.php" class="HP">PRODUCT</a></div>
                <div class="h1l">ABOUT US</div>
                <div class="h1g"><label >ยินดีต้อนรับคุณ</label> <strong><?php echo $_SESSION['username']; ?>  </strong></div>
                <div class="h1"><p><a href="login.php?logout='1'" class="Logout" >Logout</a></p></div>
                <div class="h1i" onclick=show_nav_bar() ><i class='bx bx-menu'></i></div>
            </div>
        </div>
    </div>
            <div class="info">
                <h1>เว็บไซต์นี้จัดทำโดย</h1>

                <h2>นาย พสธร ค้าเกิด</h2>
            
                <img src="รูป/Ipheet.jpg" >
            </div>
        



            <div class="con">
                <div class="Bd">
                    <a target="_blank" href="https://www.facebook.com/pheet4359"><i  class='bx bxl-facebook-circle'   ></i></a>
                </div>
                    <div class="Bd">
                        <a target="_blank" href="https://www.instagram.com/pheet4359/"><i  class=  'bx bxl-instagram box'   id="inbox" ></i></a>
                    </div>
            </div>
    







            <div class="end_home">
                <div><p>Copyright © 2024PenCraft</p></div>


                <div><img src="รูป/logo_BW.png" alt=""></div>


                
                
            </div>






    </div>
    <script>
        function show_nav_bar(){
            const nav_bar = document.querySelector('.nav_bar')
            nav_bar.style.display = 'flex'
        }
 
        function close_nav_bar(){
            const close_nav_bar = document.querySelector('.nav_bar')
            close_nav_bar.style.display = 'none'
        }
    </script>


</body>
</html>