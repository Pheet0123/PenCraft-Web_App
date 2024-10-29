<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT</title>
    <link rel="stylesheet" href="ProductT.css">
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
        $_SESSION['msg'] = "You must log in first";
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
                <div class="lmgj"onclick=close_nav_bar()> <i class='bx bx-window-close'></i> </div>
                    <div class="h1j"><a href="home.php" class="HPm">HOME</a></div>
                    <div class="h1lm">PRODUCT</div>
                    <div class="h1j"> <a href="About_Us.php" class="HPm">ABOUT US</a></div>
                    <div class="h1j"><p><a href="login.php?logout='1'" style="color: red; text-decoration: none;" >Logout</a></p></div>
            </div>

            <div class="ul1">
                <div class="lmg"><img src="รูป/logo_BW.png" alt=""></div>
                <div class="h1"><a href="home.php" class="HP">HOME</a></div>
                <div class="h1l">PRODUCT</div>
                <div class="h1"> <a href="About_Us.php" class="HP">ABOUT US</a></div>
                <div class="h1g"><label >ยินดีต้อนรับคุณ</label> <strong><?php echo $_SESSION['username']; ?>  </strong></div>
                <div class="h1"><p><a href="login.php?logout='1'" class="Logout" >Logout</a></p></div>
                <div class="h1i" onclick=show_nav_bar() ><i class='bx bx-menu'></i></div>
            </div>

            <div class="h">

                <div class="prod">
                    <h1>
                        PenCraft 001
                    </h1>
                    <p>
                        สีปลอกปากกา
                    </p>

                        <div class="cp1">
                            <button id="red_"class="btn1"> <div id="red_" class="red_"></div></button>
                            <button id="black_"class="btn1"><div  id="black_"class="black_"></div></button>
                        </div>

                        <div class="cp2">
                            <button id="green_" class="btn1"><div id="green_" class="green_"></div></button>
                            <button id="blue_" class="btn1"><div id="blue_" class="blue_"></div></button>
                        </div>
        

                    
                </div>
        
        
        
                
        
                <div class="img_p">
                    
                        
                        <img id ="img_pro" class="img_pro" src="รูป/ปากกาดำ-Photoroom.png" draggable="false" >
                    
                        <div class="h_img_mim">
                        <div class="img_mim">
                            <img  class="img_mim_1" draggable="false" >
                        </div>
                        <div class="img_mim">
                            <img class="img_mim_2" draggable="false" >
                        </div>
                        <div class="img_mim">
                            <img class="img_mim_3" draggable="false">
                        </div>
                        <div class="img_mim">
                            <img class="img_mim_4" draggable="false">
                        </div>
                    </div>

                </div>
        
            </div>
         
                    <div class="  img_min_399_host">
                        
                            <div class="img_mim">
                                <img  class="img_mim_1" draggable="false" >
                            </div>
                            <div class="img_mim">
                                <img class="img_mim_2" draggable="false" >
                            </div>
                            <div class="img_mim">
                                <img class="img_mim_3" draggable="false">
                            </div>
                            <div class="img_mim">
                                <img class="img_mim_4" draggable="false">
                            </div>
                        
                    </div>

            <div class="maydo">
                <div class="pen_Custom">
                    <p>ประเภทหมึกปากกา</p>
                    <div class="btn_Custom">
                        <button id="btn_Custom_1">หมึกเจล</button>
                        <button id="btn_Custom_2">หมึกซึม</button>
                        <button id="btn_Custom_3">หมึกกันน้ำ</button>


                    </div>
                </div>
                <div class="PP">

                    <p id="la_b"></p>
                </div>

            </div>

            
            <div id="Buynow" class="Buynow">
                <button>สั่งซื้อ</button>
            </div>




            <div class="end_home">
                <div><p>Copyright © 2024PenCraft</p></div>


                <div><img src="รูป/logo_BW.png" alt=""></div>

            </div>






    </div>
    <script src="ProductTI.js"></script>
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