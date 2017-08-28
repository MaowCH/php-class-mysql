<?php
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();
$arr = array(
    "id" => "4",
    "first_name" => "นางขาว",
    "last_name" => "สมส่วน",
    "email" => "test"

);
$t = $mysql->J_Insert($arr,"tbl_profiles");
echo $t;

$mysql->J_Close();


?>