<?php
include __DIR__."/Config.php";

include __DIR__."/Controller/Controller.php";


$url=$_SERVER["REQUEST_URI"];

$Controller= new Controller;


    switch ($url) {
        case '/': $Controller->Homepage();
            break;
        
        case '/About': $Controller->About();
        break;

        default:  http_response_code(405);

    }