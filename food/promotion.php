<!DOCTYPE html>
<?php
    session_start(); 
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/lay.css">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/rec.css">
    <link rel="stylesheet" href="css/promo.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Promotion</title>
</head>

<body>
    <div class="header">
        <center><a href="index.php"><img src="img/logo.png" width="230" height="230"></a></center>
    </div>

    <div class="topnav">
        <a href="index.php">หน้าแรก</a>
        <a href="promotion.php">โปรโมชั่น</a>
        <a href="his.php">ประวัติการสั่ง</a>
        <a href="user_account.php">บัญชี</a>
        <?php   // <------------------------------------- เช็คเงื่อนไขตอน Login กรณียังไม่ได้ Login  ----------------------------------------------->
        if($_SESSION['IDcard'] == "")
        { echo $_SESSION['IDcard'];
        ?>
        <div class="login">
            <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">พนักงาน</a>
        </div>
        <div class="login">
            <a onclick="document.getElementById('idf').style.display='block'" style="width:auto;">ผู้ใช้บริการ</a>
        </div>
        <div class="logtext">
            Login
        </div>
        <!-- <-------------------------------------ปิดเช็คเงื่อนไขตอน Login กรณียังไม่ได้ Login ---------------------------------------------------> 

        <?php // <------------------------------------- เช็คเงื่อนไขตอน Login กรณี Login แล้ว ----------------------------------------------->
        }
        else
        { 
        ?>
        <form  action="logout_All.php" method="POST">
            <div class="login">
                <button type="submit" style.display='block' class="bt" style="background-color: rgb(35, 199, 41);padding: 5px 10px;font-size: 18px;font-weight: 500;border-radius: 5px;">Logout</button>
            </div>
        </form>
        <form  action="http://localhost/food/login.php" method="POST">
        <div class="logtext" style = "color:rgb(29, 24, 78);">
            <i class="fa fa-user" style="font-size:20x"></i>
           <?php
              echo ("User : ").$_SESSION['First_name'];
           ?>
        </div>
        </form>
        <?php
        }
        ?>
        <!-- <------------------------------------- ปิดเช็คเงื่อนไขตอน Login กรณี Login แล้ว ----------------------------------------------->
    </div>
    <div class="propaper">
        <center>
            <h1><i class="fas fa-tags" style="font-size: 48px"></i> โปรโมชั่น <i class="fas fa-percent"
                    style="font-size: 48px"></i></h1>
        </center>
        <div class="probox">
            <img style="float:right;border-radius: 5%" src="img/menu/m1.jpg" width="50%" height="80%">
        </div>
        <div class="probox">
            <h2>เเกงส้มชะอมไข่-กุ้งสด <span style="font-size: 40px;color:rgb(0, 170, 0);">(ลด 10 %)</span></h2>
            <h3 style="display: inline">จาก ราคาปกติ</h3>
            <h3 style="color: red;display: inline">140</h3>
            <h3 style="display: inline">บาท <span style="font-size: 30px;color:rgb(76, 78, 76);">เหลือ</span></h3>
            <h4 style="display: inline">126</h4>
            <span style="font-size: 30px;color:rgb(76, 78, 76);">บาท</span><br>
            <button class="btpp btpp1" onclick="window.location.href='menu/oyua/oyua.html'">สั่งซื้อ</button>
        </div>
    </div>
    <div id="idf" class="modal">

        <form class="modal-content animate" action="/action_page.php">
            <div class="log">
                <div class="log1">
                    <span onclick="document.getElementById('idf').style.display='none'" class="close"
                        title="Close">&times;</span>
                    <center><i class='fas fa-address-card' style='font-size:60px;color:rgb(255, 88, 10)'></i>
                        ผู้ใช้บริการ</center>
                    <div class="container">
                        <label for="uname"><b><i class="material-icons"
                                    style='font-size:20px;color:rgb(5, 5, 5)'>&#xe0be;</i> Email</b></label>
                        <input type="text" placeholder="Enter Email" name="uname" required>

                        <label for="psw"><b><i class='fas fa-key' style='font-size:20px;color:rgb(12, 12, 12)'></i>
                                Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br><br>
                        <buttonl type="submit">Login</buttonl>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>
                    <br>
                    <buttonl type="button" onclick="window.location.href='register.php'"
                        style="background-color: rgb(255, 0, 0);">Sign Up</buttonl>
                    <span class="psw">Forgot <a href="#">password?</a></span>

                </div>
            </div>
        </form>
    </div>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php">
            <div class="log">
                <div class="log1">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                        title="Close">&times;</span>
                    <center><i class='fas fa-address-card' style='font-size:60px;color:rgb(22, 30, 153)'></i> พนักงาน</center>
                    <div class="container">
                        <label for="uname"><b><i class="material-icons"
                                    style='font-size:20px;color:rgb(5, 5, 5)'>&#xe0be;</i> Email</b></label>
                        <input type="text" placeholder="Enter Email" name="uname" required>

                        <label for="psw"><b><i class='fas fa-key' style='font-size:20px;color:rgb(12, 12, 12)'></i>
                                Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br><br>
                        <buttonl type="submit">Login</buttonl>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>
                    <br>
                    <buttonl type="button" onclick="window.location.href='register2.php'"
                        style="background-color: rgb(255, 0, 0);">Sign Up</buttonl>
                    <span class="psw">Forgot <a href="#">password?</a></span>

                </div>
            </div>
        </form>
    </div>
    <script src="js/log.js"></script>
</body>

</html>