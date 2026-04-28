<?php

include __DIR__."/Controller/Controller.php";


$url=$_SERVER["REQUEST_URI"];

$Controller= new Controller;

switch($url){
    case '/': $Controller->Homepage();
    break;
    default: print "404 hiba";
}