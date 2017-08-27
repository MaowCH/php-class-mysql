<?php
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();

$arr = array(
    "id" => "1",
    "first_name" => "test2",
    "last_name" => "test2",
    "email" => "test2@test.com"

);

$key = array("id");


$mysql->J_Update($arr,$key,"tbl_profiles");



?>