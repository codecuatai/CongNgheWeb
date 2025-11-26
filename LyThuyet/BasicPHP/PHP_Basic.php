<?php

print "hiloo";
echo "hiihiii", "sfsff";

$x = 5;
echo $x;


define("hihihi", 434);
echo hihihi;

const SITE_NAME = "ni hao";
echo SITE_NAME;

$bien1 = 'dsfsfsfs $bien2';
$bien2 = "sdsdsd $bien1 ";
echo $bien1;
echo $bien2 ;

$int = 5;
$float = 3.14;

echo "<br>";
echo var_dump($int);
echo var_dump($float);

echo "<br>", "<hr>";

$arr = ["PHP", "Tài", "Đẹp trai"];
echo "<pre>";
print_r($arr);
echo "</pre>";
echo $arr[1];


echo "<br>", "<hr>";

$a = 2;
$b = '2';
if($a === $b){
    echo "bằng nhau";
}else if($a == $b){
    echo "Bằng nhưng ko giống kiểu";
}else{
    echo "Ko bằng";
}

echo "<br>", "<hr>";

$array = [1,2,3,4,5,6];
foreach($array as $item){
    echo "$item<br>";
}


function getStart(){
    echo "Da jia hao";
}
getStart();

function sum($a, $b){ // tham trị
    return $a+$b;
}
echo sum(3,7);

echo "<br>", "<hr>";

function setNumber(&$x){
    $x+=10;
    echo $x;
}
$x = 10;
setNumber($x);
echo $x;


$func = function($title){
    echo "$title";
};
$func("xin chào mn");


$func1 = function(){
    global $func;
    $func("thử lại trong hàm nè");
};
$func1();


function getAll(){
    static $a = 10;
    $a++;
    echo $a;
}
getAll();
getAll();
getAll();

echo "<br>", "<hr>";
//hàm isset()để kiểm tra xem 1 biến có tồn tại hay không. trả về kết quả true/false
if(isset($a)){
    echo "không tồn tại";
}else{
    echo "đã tồn tại";
}
// hàm empty() ktra xem có rỗng hay không
$a=null;
if(empty($a)){
    echo "rỗng";
}else{
    echo "khôngrỗng";
}

echo "<br>", "<hr>", "<br>";
//include, include_once, require, require_one: nhúng file trong php


$car = array('Toyota', "KIA");

$motobikr = ['Toyota', "KIA"];


$car1 = [
    'toyota' => 'hihi, huhuhu',
    'kia' => 'sfddfd, dfdfdf',
];
echo $car1['kia'], "<br>";
foreach ($car1 as $key => $value){
    echo $key ," => ", $value, "<br>";
}

echo count($car1); //đếm số lượng phần tử trong mảng
echo "<br>", in_array("KIA", $motobikr), '<br>';// kiểm tra xem KIa trong mảng ko
$key_car = array_keys($car1);
foreach($key_car as $item){
    echo "<br>",$item;
};
$value_car = array_values($car1);
foreach($value_car as $item){
    echo "<br>",$item;
};

echo "<br>","<br>";
$arr10 = [6,3,5,7,9,3,2];
sort($arr10);  // Xắp xếp tăng dần
foreach($arr10 as $item){
    echo $item, " ";
}

echo "<br>","<br>";
rsort($arr10);// xắp xếp giảm dần
foreach($arr10 as $item){
    echo $item, " ";
}

echo "<br>","<br>";
array_push($arr10, "11"); // thêm phần tử vào cuối mảng
foreach($arr10 as $item){
    echo $item, " ";
}

echo "<br>","<br>";
$t = array_pop($arr10); // xóa phần tử cuối mảng và trả về phần tử đó
echo $t, "<br>";
foreach($arr10 as $item){
    echo $item, " ";
}

echo "<br>","<br>";
array_unshift($arr10, 10); // thêm phần tử đầu mảng 
foreach($arr10 as $item){
    echo $item, " ";
};

echo "<br>","<br>";
$t = array_shift($arr10); // xóa phần tử đầu mảng và trả về phần tử đó
echo $t, "<br>";
foreach($arr10 as $item){
    echo $item, " ";
};

echo "<br>","<br>";
$arr11 = array_filter($arr10, function ($value) {
    return $value%2===0; // loc nhung phan tu tra ve true
});
foreach($arr11 as $item){
    echo $item, " ";
}

echo "<br>","<br>";
$arr12 = array_unique($arr10); // loc cac phan tu trung lap
foreach($arr12 as $item){
    echo $item, " ";
};

echo "<br>","<br>";
$arr13 = array_merge($arr11, $arr12);
foreach($arr13 as $item){
    echo $item, " ";
};

echo "<br>","<br>";
$str = "Da Jia Hao Ni Man";
$arr14 = explode(" ", $str);
foreach($arr14 as $item){
    echo $item, "<br>";
};

echo "<br>","<br>";
$str1 = implode(",",$arr14);
echo $str1;


echo "<br><br>Chuooi ne";
$string1 = "hocj laapj trinh";
$string2 = "tu hoc as";
$string3 = $string1.' '.$string2;
echo $string3;
echo "<br>", strlen($string3);
echo "<br>", strrev($string3);
echo "<br>", strpos($string3, "tu");
echo "<br>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


echo "<br><br>Date<br>";

date_default_timezone_set('Asia/Ho_Chi_Minh');
$day= date("Y:m:d H:i:s", 1762859843);
echo $day;
echo "<br>", time();
echo "<br>", strtotime("next monday");
echo "<br>", date_default_timezone_get();
echo "<br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>
            UserName: <input type="text" name="userName" id="userName" placeholder="UserName">
        </label>
        <label>
            Password: <input type="password" name="password" id="password" placeholder="Password">
        </label>
        <input type="submit" value="Send">
    </form>
<?php 
if(!empty($_REQUEST)){
    print_r($_REQUEST);
}
?>

<br><br>
<form action="./result.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <button type="submit">Submit</button>
</form>





</body>
</html>


<?php 
    // setcookie("Tài1sdsd", "3000", time()+100);
    // if(isset($_COOKIE)){
    //     echo "<pre>";
    //     print_r( $_COOKIE);
    //     echo "</pre>";
    // };

    // session_start();
    // $_SESSION["Tài"] = "đẹp trai";
    // echo $_SESSION['Tài'];

    // ini_set('display_error',1);
    // ini_set('display_startup_errors',1);
    // echo error_reporting(E_ALL);

    try{
        $age = -18;
        if($age<=0){
            throw new Exception(" Tuổi không thể âm");
        }
    }catch(Exception $e){
        echo "ĐÃ xảy ra lỗi".$e->getMessage();
    }
?>
