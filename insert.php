<?php
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();

$arr = array(
    "id" => "2",
    "first_name" => "aaa",
    "last_name" => "aaa",
    "email" => "aaa@aaa.com"
);

$t = $mysql->J_Insert($arr,"tbl_profile");
echo $t;
?>