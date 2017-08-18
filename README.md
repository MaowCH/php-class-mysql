# php-class-mysql
# php class connect mysql


# CODE INSERT
<?php

$mysql = new J_MYSQL;
$mysql->J_Connect();
$arr = array(
            "id" => "1",
            "fullname" => "test test"
            )
$mysql->J_Insert($arr,$table_name);

?>
