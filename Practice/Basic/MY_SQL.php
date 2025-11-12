<?php 

$host = 'localhost:3307'; 

$dbname = 'php_basic';
$user_db = 'root';

$password = ''; 

try{
    if(class_exists("PDO")){
        $option = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        
        $conn = new PDO ("mysql:host=$host;dbname=$dbname", $user_db , $password, $option);
        
        echo "Kết nối thành công";
        var_dump($conn);
        // $sql = "INSERT INTO users (name) VALUES(:name)"; //câu lệnh sql
        // $stm = $conn -> prepare($sql); // bảo về câu lệnh SQL khỏi SQL injection

        // $name = ["Linh", "Dũng", "Hiếu"]; // dữ liệu
        // foreach ($name as $item){
        //     $stm -> execute(
        //     [":name" => $item]
        // );

        // $sql = "UPDATE users SET name=:name WHERE id = :id"; //câu lệnh sql
        // $stm = $conn -> prepare($sql); // bảo về câu lệnh SQL khỏi SQL injection

        // $name = "Anh"; // dữ liệu
        // $id = 4;
        // $stm -> execute(
        //     [':name' => $name, ':id' => $id    
        //     ]
        // );
        
        // $sql = "DELETE FROM users WHERE id = :id"; //câu lệnh sql
        // $stm = $conn -> prepare($sql); // bảo về câu lệnh SQL khỏi SQL injection

        // $id = 6;
        // $stm -> execute(
        //     [':id' => $id    
        //     ]
        // );

        $sql = "SELECT * FROM users"; //câu lệnh sql
        $stm = $conn -> prepare($sql); // bảo về câu lệnh SQL khỏi SQL injection

        $stm -> execute();
        $result = $stm -> fetchAll(PDO::FETCH_ASSOC);

        echo '<pre>';
        print_r($result);
        echo "</pre>;";
    }
}catch(Exception $ex){
    echo 'Lỗi kết nối '.$ex->getMessage();
}