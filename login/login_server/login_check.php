<?php

// header('Content-Type: text/html; charset=utf-8');

include("login_connect_mysql.php");//连接数据库
$userName = $_POST["username"];
$password = $_POST["password"];

$value = "value";

$sql = "SELECT * FROM user WHERE username = '$userName' AND password = '$password';";
$result = $conn->query($sql);
$row = mysqli_num_rows($result);

if ($row == 1) {
    setcookie("login", "true", time() + 3600, "/"); // 设置cookie，有效期为1小时
    header("location:../../hub/index.php") ;
}else{
    echo "<script>alert('登录失败!');location.href='../index.php';</script>";
}

?>