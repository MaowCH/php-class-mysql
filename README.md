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



```
# CODE UPDATE

include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();

$arr = array(
    "id" => "1",
    "first_name" => "test2",
    "last_name" => "test2",
    "email" => "test2@test.com"

);

$key = array("id"); // where clause
$mysql->J_Update($arr,$key,"tbl_profiles");
```
