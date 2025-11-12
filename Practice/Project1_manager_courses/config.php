<?php 
const _Tai = true;

const _MODULES = "dashboard";
const _ACTION = "index";

//khai báo database
const _HOST = "localhost:3307";
const _DB = "manager_course";
const _USER = "root";
const _PASS = "";
const _DRIVER = "mysql";

//debug error
const _DEBUG = true;

// thiết lập host
define('_HOST_URL', 'http://'.$_SERVER['HTTP_HOST'].'/PracticePHP/Practice/Project1_manager_courses');
define('_HOST_URL_TEMPLATES', 'http://'.$_SERVER['HTTP_HOST'].'/PracticePHP/Practice/Project1_manager_courses/template');


define('_PATH_URL', __DIR__);
define('_PATH_URL_TEMPLATES', __DIR__.'/template');

?>