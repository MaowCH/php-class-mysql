<?php
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();

$sql = "DELETE FROM tbl_profiles where id = 1";
$mysql->J_ExecuteNonQuery($sql);

$mysql->J_Close();
?>