<?php 
spl_autoload_register(function($file){include (str_replace("\\", DIRECTORY_SEPARATOR, "$file.php"));});

session_start();


use controllers\PageController;
use controllers\GuestController;

$url=$_SERVER["REQUEST_URI"];

$page= new PageController;
$guest= new GuestController;

switch ($url){
    case "/": $page->homepage();
    break;

    case "/about": $page->about();
    break;

    case "/register": 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){ $guest->registerProcess();}

        else {$guest->registerView();}
    break;

}