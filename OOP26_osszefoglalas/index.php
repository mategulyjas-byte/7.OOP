<?php

session_start();
include __DIR__."/includes/config.php";

spl_autoload_register(function ($file2){$file2=(str_replace("\\","/", $file2)); include __DIR__."/$file2.php";});


use controllers\PageController;
use controllers\GuestController;


$pagecontroller = new PageController;
$guestcontroller = new GuestController;

$url=$_SERVER["REQUEST_URI"];

switch ($url) {
    case '/':
        $pagecontroller->homepage();
        break;
    
    case '/about':
        $pagecontroller->about();
        break; 

    case '/register':
        if($_SERVER["REQUEST_METHOD"]=="GET"){$pagecontroller->register();} else{$guestcontroller->registerprocess();}

        break;

    default:
        http_response_code(400);
        break;
}