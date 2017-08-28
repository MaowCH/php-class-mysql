<?php
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

$arr = array(
    "id" => "2",
    "first_name" => "กกกกกก",
    "last_name" => "test2",
    "email" => "test2@test.com"

);

$key = array("id");


$mysql->J_Update($arr,$key,"tbl_profiles");

$mysql->J_Close();

?>