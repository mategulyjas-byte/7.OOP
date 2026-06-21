<?php

session_start();
include __DIR__."/includes/config.php";

spl_autoload_register(function ($file2){$file2=(str_replace("\\","/", $file2)); include __DIR__."/$file2.php";});

$connection= mysqli_connect("localhost","root","","gulyas_mate");

use controllers\PageController;
use controllers\GuestController;
use controllers\TableController;


$pagecontroller = new PageController;
$guestcontroller = new GuestController;
$tablecontroller= new TableController;

$url=$_SERVER["REQUEST_URI"];

switch ($url) {
    case '/':
        $pagecontroller->homepage();
        break;
    
    case '/about':
        $pagecontroller->about();
        break; 

    case '/register':
        if($_SERVER["REQUEST_METHOD"]=="GET"){$guestcontroller->register();} else{$guestcontroller->registerprocess($connection);}

        break;

    case '/table':
        $tablecontroller->table($connection);
        break; 

    default:
        http_response_code(400);
        break;
}