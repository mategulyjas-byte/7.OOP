<?php
spl_autoload_register(function ($file) {
    include(str_replace('\\', DIRECTORY_SEPARATOR, "$file.php"));
});


include __DIR__ . "/config.php";

use controller\Controller as C;

$url = $_SERVER["REQUEST_URI"];

$Controller = new C;

switch ($url) {
    case '/':
        $Controller->homepage();
        break;
    case '/about':
        $Controller->about();
        break;
    case '/register':

        if($_SERVER["REQUEST_METHOD"]== 'POST'){


        }
        else{}

        break;



    default:
        http_response_code(401);
}
