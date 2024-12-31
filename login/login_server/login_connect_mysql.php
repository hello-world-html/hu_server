<?php

$servername ="127.0.0.1";
$mysqlusername = "admin";
$mysqlpassword = "xc7788";
$dbname = "huserver_cn_org";
$port = 3306;

error_reporting(0);
$conn = new mysqli($servername, $mysqlusername, $mysqlpassword, $dbname, $port);
if ($conn->connect_error) {
    die("连接失败: ". $conn->connect_error);
}

?>