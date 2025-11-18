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

function getOne($sql){
    global $conn;
    $stm = $conn -> prepare($sql); // bảo về câu lệnh SQL khỏi SQL injection
    $stm -> execute();
    $result = $stm -> fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getRows($sql){
    global $conn;
    $stm = $conn -> prepare($sql); // bảo về câu lệnh SQL khỏi SQL injection
    $stm -> execute();
    $result = $stm -> rowCount();
    return $result;
}

function insert($table, $data){
    global $conn;
    $keys = array_keys($data);
    
    $cot = implode(',', $keys);
    $place = ':'.implode(',:', $keys);

    $sql = "INSERT INTO $table ($cot) values ($place)";
    $stm = $conn ->prepare($sql);

    $stm -> execute($data);
}

function update($table, $data, $condition = ''){
    global $conn;
    $update = '';

    foreach($data as $key => $value){
        $update .= $key.'=:'.$key.',';
    }
    $update = trim($update,',');

    if(!empty($condition)){
        $sql = "UPDATE $table SET $update where $condition";
    }else{
        $sql = "UPDATE $table SET $update";
    }

    $stm = $conn -> prepare($sql);

    $stm -> execute($data);
}

function delete($table, $condition=''){
    global $conn;
    if(!empty($condition)){
        $sql = "DELETE from $table where $condition";
    }else{
        $sql = "DELETE from $table";
    }

    $stm = $conn -> prepare($sql);
    $stm -> execute();
}


function lastID(){
    global $conn;
    return $conn -> lastInsertId();
}
?>