<?php

session_start();

spl_autoload_register(function ($file){include (str_replace("\\", DIRECTORY_SEPARATOR, "$file.php")); });

use controllers\PageController;

$url=$_SERVER["REQUEST_URI"];

$page= new PageController;

switch ($url){

case '/': $page->homepag();
break;

case '/about': $page->about();
break;
}