/* 未登入首頁
<!DOCTYPE html>
<html>

<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <style>
        body {
            width: 100%;
            height: 100%;
            background-color: #02023a;
            position: absolute;
            margin: 0px;
        }

        .topblock {
            width: 100%;
            height: 15%;
            background-color: #4400b1;
            position: absolute;

        }

        .testimg {
            height: 80%;
            width: 10%;
            margin: 10px;
        }

        .store {
            left: 14%;
            margin: 10px;
            height: 77%;
            width: 10%;
            border: 2px rgb(90, 83, 83) solid;
            font-size: 20px;
            text-align: center;
            background-color: #2c1b482f;
            position: absolute;
        }

        .storetext {
            color: white;
            text-align: center;
        }

        .collect {
            left: 28%;
            margin: 10px;
            height: 77%;
            width: 10%;
            border: 2px rgb(90, 83, 83) solid;
            font-size: 20px;
            text-align: center;
            background-color: #2c1b482f;
            position: absolute;
        }

        .collecttext {
            color: white;
            text-align: center;
        }

        .dropdown {
            right: 5%;
            margin: 10px;
            height: 77%;
            width: 10%;
            border: 2px rgb(90, 83, 83) solid;
            border-radius: 200px;
            font-size: 20px;
            text-align: center;
            background-color: #2c1b482f;
            position: absolute;
        }

        li {
            color: white;
        }

        .dropdown-menu {
            background-color: rgba(81, 0, 255, 0.603);
            opacity: 0%;
        }

        .dropdown-menu:hover {
            position: absolute;
            opacity: 100%;
        }

        .btn {
            color: white;
            text-align: center;
        }

        .swiper {
            top: 20%;
            right: 10%;
            width: 80%;
            height: 80%;

        }

        #slide {
            text-align: center;
            background: transparent;
        }

        .swiper-pagination {
            background-color: transparent;
        }
    </style>
</head>

<body>
    <div class="topblock">
        <span class="mainpage">
            <a href="./index.php"><img class="testimg" src="https://s.yimg.com/os/creatr-uploaded-images/2021-12/8e8910a0-6610-11ec-afff-db582318fed5"></a>
        </span>

        <!-- <span class="store">
        <a href="./main.html"><p class="storetext">商店</p></a>
        </span>

        <span class="collect">
            <a href="./main.html"><p class="collecttext">收藏庫</p></a>
        </span> -->
        <a onClick="window.location.replace('subpage/login.html'),'','height=500,width=611,scrollbars=yes,status =yes'">
            <span class="login" style="width: 90px; height:90px;position: absolute; right: 10%; border: 5px black solid ; border-radius: 100%;top:10px;">
                <img src="subpage/1596664909489.jpg" alt="未登入" style="width: 90px;height: 90px; border-radius:100%;">
            </span>
        </a>
        <!-- <script language="javascript">
            function click(){
                onclick="window.open('/subpage/registe.html')"
            }
        </script> -->

        <!-- <span class="dropdown">
            <p class="btn">設定</p>
            <a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#"><p class="btn">個人主頁</p></a></li>
                <li><a class="dropdown-item" href="#"><p class="btn">錢包</p></a></li>
                <li><a class="dropdown-item" href="#"><p class="btn">購物車</p></a></li>
                <li><a class="dropdown-item" href="#"><p class="btn">登出</p></a></li>
            </ul></a>
        </span> -->
    </div>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" id="slide"><img src="https://s.yimg.com/os/creatr-uploaded-images/2021-12/8e8910a0-6610-11ec-afff-db582318fed5">
            </div>
            <div class="swiper-slide" id="slide"><img src="https://s.yimg.com/os/creatr-uploaded-images/2021-12/8e8910a0-6610-11ec-afff-db582318fed5">
            </div>
            <div class="swiper-slide" id="slide"><img src="https://s.yimg.com/os/creatr-uploaded-images/2021-12/8e8910a0-6610-11ec-afff-db582318fed5">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 3000,
            },
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>