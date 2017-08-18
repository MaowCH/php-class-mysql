<?php

class J_MYSQL{

    var $db_host;
    var $db_user;
    var $db_pass;
    var $db_name;
    var $db_connection;


    function J_MYSQL(){
        $this->db_host = "localhost";
        $this->db_user = "root";
        $this->db_pass = "1234";
        $this->db_name = "db_test";   
    }

    function J_Connect(){
        $this->db_connection = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
    }

    function J_Insert($arr,$tblName){
        $sql = " INSERT INTO table(id,name) VALUES('1','test');   ";
        $string1 = "INSERT INTO ".$tblName."(".implode(",",array_keys($arr)).")";
        $string2 = " VALUES('".implode("','",$arr)."');";
        $sql = $string1.$string2;

        return mysqli_query($this->db_connection,$sql);
    }


}

?>