# php-class-mysql

```
# CODE INSERT

include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$arr = array(
            "id" => "1",
            "fullname" => "test test"
            )
$mysql->J_Insert($arr,$table_name);
```
