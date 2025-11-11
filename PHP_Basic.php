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

?>
