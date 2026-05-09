<?php
spl_autoload_register(function ($file) {
    include(str_replace('\\', DIRECTORY_SEPARATOR, "$file.php"));
});

use controllers\GuestController;
use controllers\PageController as PC;

include __DIR__ . "/config.php";

$url = $_SERVER["REQUEST_URI"];

$guest = new GuestController;
$page = new PC;

switch ($url) {
    case '/':
        $page->homepage();
        break;
    case '/about':
        $page->about();
        break;

    case '/register':

        if ($_SERVER["REQUEST_METHOD"] == 'POST') { //print_r ($_POST);
            $guest->registerProcess();}
             
            else {$guest->registerView();}
        break;

    default:
        http_response_code(401);
}
