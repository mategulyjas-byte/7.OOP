<?php 
spl_autoload_register(function($file){include (str_replace("\\", DIRECTORY_SEPARATOR, "$file.php"));});

session_start();

use controllers\PageController;

$url=$_SERVER["REQUEST_URL"];

$page= new PageController;

switch ($url){
    case "/": $page->homepage();
    break;

    case "/about": $page->about();
    break;

    case "/register": 
        if ($_SERVER["REQUEST_METHOD"]== "POST"){  }

}