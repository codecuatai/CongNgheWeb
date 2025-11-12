<?php
if(!defined("_Tai")){
    die("Truy cập không hợp lệ");
}

try{
    if(class_exists("PDO")){
        $option = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $dsn = _DRIVER.':host='._HOST.";dbname="._DB;
        $conn = new PDO ($dsn, _USER,_PASS, $option);
        
    }
}catch(Exception $ex){
    echo 'Lỗi kết nối '.$ex->getMessage();
}