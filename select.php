<?php
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();


$sql = "SELECT * FROM tbl_profiles";
$rs = $mysql->J_Execute($sql);
foreach($rs as $read){
    echo $read["first_name"]."<br/>";
}


$mysql->J_Close();
?>