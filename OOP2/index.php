<?php

include __DIR__."/Controllers/PageControllers.php";

$url=$_SERVER["REQUEST_URI"];

 
$page= new PageControllers;

switch ($url){
    case '/': $page->Homepage();
    break;

    case '/Connect/': $page->Connect();
    break;

    case '/AboutMe/': $page->AboutMe();
    break;

    case '/Product/': $page->Product();
    break;

    default: print "404 hiba";;
}