<?php
if(!defined("_Tai")){
    die("Truy cập không hợp lệ");
}

function getALL($sql){
    global $conn;
    $stm = $conn -> prepare($sql); // bảo về câu lệnh SQL khỏi SQL injection

    $stm -> execute();

    $result = $stm -> fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

?>