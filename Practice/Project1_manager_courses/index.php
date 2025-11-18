<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start(); // tạo mới 1 phiên làm việc
ob_start(); // tránh th bị lỗi dùng hàm header, cookie


require_once "./config.php";
require_once "./includes/connect.php";
require_once "./includes/database.php";

$rel = getOne("SELECT * FROM courses");
echo '<pre>';
print_r($rel);
echo '</pre>';

$data = [
    'name' => 'Tài',
    'slug' => 'Tao tên tàidsdsds',
];

$condition = 'id = 3';

$rel = lastID();
echo $rel;

$module = _MODULES;
$action = _ACTION;

if(!empty($_GET['module']))
    $module = $_GET['module'];

if(!empty($_GET['action']))
    $action = $_GET['action'];


$path = './modules/'.$module.'/'.$action.'.php';

if(!empty($path)){
    if(file_exists($path)){
        require_once $path;
    }else{
        require_once "./modules/errors/404.php";
    }
}else{
    require_once "./modules/errors/500.php";
}





