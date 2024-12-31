<?php
// if ($_COOKIE['cookie'] !== "value") {
//     echo "<script>alert('请先登录!');location.href='../login/index.php';</script>";
//     exit;
// }

// $vlas="BnJhiFoPS4";
// if(isset($_COOKIE['vlas']))
//     echo '登录成功';
// $valid=array("name"=>"admin","password"=>"admin");
// if(isset($_POST['name']) and isset($_POST['pass'])){
//     if($_POST['name']==$valid['name']&&$_POST['pass']==$valid['password']){
//         $g=setcookie("vlas",$vlas,time()+30*2400);
//         $gs=$_COOKIE["vlas"];
//         echo '登录成功';
//         echo "你的Cookie是$gs";
//     }else{
//         echo'登录失败';
//       }
// }

// 检查是否存在名为"login"的cookie
if(isset($_COOKIE['login'])) {
    // cookie存在，用户已登录
    // echo "用户已登录";
    // 这里可以添加已登录用户可以看到的内容或执行相应的操作
} else {
    // cookie不存在，用户未登录
    echo "<script>alert('请先登录!');location.href='../login/index.php';</script>";
    // 可以在这里重定向到登录页面或显示登录提示
    // 例如：
    // header("Location: ../login/index.php");
    // exit;
}


?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta Keywords="hupixel">
    <title>test</title>
    <link rel="stylesheet" href="./style/style-index.css">
</head>

<body>
    <div class="header">
        <div class="zhuti">
            <h1>test</h1>
        </div>
        <div class="a-home">
            <div class="a" onclick="tiaozhuan1()">
                <a href="#" class="">Home</a>
            </div>
            <div class="a">
                <div class="login">
                    <p>login</p>
                </div>
            </div>
            <div class="a">
                <div class="register">
                    <p>register</p>
                </div>
            </div>
            <div class="a">
                <a href="#" class="">About</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="fu-biao-ti">
            <p class="fu-biao-ti-nierong">
                This a new mincraft server .</br>
                It has a good environment with quality anti-cheating.</br>
                It has a variety of gameplay, such as: arena, wake up war and so on.</br>
            </p>
        </div>
        <div class="out">
            <div class="inner">
                <div class="img">
                    <img src="picture/2024-10-12_21.38.36.png" alt="" />
                </div>
                <div class="img">
                    <img src="picture/2024-10-12_21.39.02.png" alt="" />
                </div>
                <div class="img">
                    <img src="picture/2024-10-12_21.41.50.png" alt="" />
                </div>
                <div class="img">
                    <img src="picture/2024-10-12_21.38.36.png" alt="" />
                </div>
                <div class="img">
                    <img src="picture/2024-10-12_21.41.51.png" alt="" />
                </div>
                <div class="img">
                    <img src="picture/2024-10-12_21.39.03.png" alt="" />
                </div>
                <div class="img">
                    <img src="picture/2024-10-12_21.41.17.png" alt="" />
                </div>
            </div>
        </div>
        <div class="maobolikapian-home">
            <div class="maoboli-kapian" onclick="tiaozhuan1()">
                <div class="xiao-biao-ti-1">
                    <p>大厅</p>
                </div>
                <div class="mao-buo-li-nierong-1">
                    <p></p>
                </div>
                <img src="picture/hu_join_smallgame.png" alt="" class="picture">
            </div>
            <div class="maoboli-kapian-1" onclick="tiaozhuan2()">
                <div class="xiao-biao-ti-1">
                    <p></p>
                </div>
                <div class="mao-buo-li-nierong-2">
                    <ul class="mao-buo-li-nierong-2-ul">
                        <li></li>
                    </ul>
                </div>
                <img src="picture/2024-10-12_21.41.07.png" class="picture">
            </div>
            <div class="maoboli-kapian-2" onclick="tiaozhuan2()">
                <div class="xiao-biao-ti-1">
                    <p>天坑</p>
                </div>
                <div class="mao-buo-li-nierong-2">
                    <ul class="mao-buo-li-nierong-2-ul">
                        <li>他做为我们的特色，当然人数很多，也很有趣。</li>
                        <li>你可以选择杀人升级，也可以选择去战斗专区</li>
                    </ul>
                </div>
                <img src="./picture/tiankeng1.png" class="picture">
            </div>
            <div class="maoboli-kapian-3" onclick="tiaozhuan2()">
                <div class="xiao-biao-ti-1">
                    <p>Skypvp</p>
                </div>
                <div class="mao-buo-li-nierong-2">
                    <ul class="mao-buo-li-nierong-2-ul">
                        <li></li>
                    </ul>
                </div>
                <img src="./picture/skypvp1.png" class="picture">
            </div>
        </div>
        <!-- <div class="after"></div>
        <div class="before"></div>
        <div class="after1"></div>
        <div class="before1"></div> -->
        <script src="script/script.js"></script>
</body>

</html>