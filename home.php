<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="homeT.css">
    <link rel="icon" type="image/x-icon" href="รูป/logo_BW.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "คุณต้องเข้าสู่ระบบก่อน";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
       
    }

?>

<div>
        <div class="ggg">
            <div class="nav_bar">
                    <div class="lmgj" onclick=close_nav_bar()> <i class='bx bx-window-close'></i> </div>
                    <div class="h1lm">HOME</div>
                    <div class="h1j"><a href="Product.php" class="HPm"> PRODUCT</a></div>
                    <div class="h1j"> <a href="About_Us.php" class="HPm">ABOUT US</a></div>
                    <div class="h1j"><p><a href="login.php?logout='1'" style="color: red; text-decoration: none;" >Logout</a></p></div>
            </div>
            <div class="ul1">
                <div class="lmg"><img src="รูป/logo_BW.png" alt=""></div>
                <div class="h1l">HOME</div>
                <div class="h1"><a href="Product.php" class="HP"> PRODUCT</a></div>
                <div class="h1"> <a href="About_Us.php" class="HP">ABOUT US</a></div>
                <div class="h1g"><label >ยินดีต้อนรับคุณ</label> <strong><?php echo $_SESSION['username']; ?>  </strong></div>
                <div class="h1"><p><a href="login.php?logout='1'" class="Logout"  >Logout</a></p></div>
                <div class="h1i" onclick=show_nav_bar() ><i class='bx bx-menu'></i></div>
            </div>
        </div>

            <div class="Buynow">
                <div class="Buynow_topic">  
                    <div><h1>PenCraft</h1></div>
                    <div><p>  ออกรูปแบบปากกาตามจิตวิญญาณของคุณ</p></div>
                    <div class="buy_box"> <button class="btn_buy"><a  class="btn_P_text" href="Product.php">ออกแบบเลย</a></button></div>

                </div>

                <div ><img class="img_buynow" src="รูป/gpp-Photoroom.png" alt=""></div>
            </div>


            <div class="ability">
                <div class="ab">
                    <div >
                        <img class="img_ab" src="รูป/muscles.png" alt="">
                    </div>
                    <p class="Tab">ปากกาขอเรามีความแข็งแรง </p>
                </div>
                
                <div class="ab">
                    <div >
                        <img class="img_ab" src="รูป/slip.png" alt="">
                    </div>
                    <p class="Tab">หมึกปากกาไหลไม่หยุดหยุดไม่อยู่</p>
                </div>

                <div class="ab">
                    <div >
                        <img class="img_ab" src="รูป/soft.png" alt="">
                    </div>
                    <p class="Tab">ปากกาของเรามีความนุ่มมาก</p>
                </div>
            </div>

            <div class="lore">
                <div > <img class="img_lore" src="รูป/man-5723449_1280.png" alt=""></div>
                <div class="lore_text">
                    <h1>ประวัติความเป็นมา</h1>
                    
                        <p>
                            PenCraft เกิดจากแรงบันดาลใจของผู้ก่อตั้งที่ชื่นชอบการนำชิ้นส่วนจากปากกาหลากหลายยี่ห้อ มาปรับแต่งและผสมผสานเพื่อสร้างสรรค์ปากกาที่มีเอกลักษณ์เฉพาะตัว แตกต่างจากปากกาทั่วไปในท้องตลาด ด้วยเหตุนี้ เราจึงมุ่งมั่นที่จะให้ทุกคนสามารถเลือกรูปแบบและดีไซน์ที่ตรงกับความต้องการและสไตล์ของตนเอง
                        </p>
                    
                </div>

            </div>

            <div class="btn_P">
                <div><a class="btn_P_text" href="Product.php"><button>ออกแบบเลย</button></a> </div>
                <div>     <p>สร้างสรรค์ปากกาที่สะท้อนเอกลักษณ์และตัวตนในแบบของคุณ</p> </div>
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