<?php
spl_autoload_register(function ($file) {
    include(str_replace('\\', DIRECTORY_SEPARATOR, "$file.php"));
});

session_start();
 
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

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            //print_r ($_POST);
            $guest->registerProcess();
        } else {
            $guest->registerView();
        }
        break;

    default:
        http_response_code(401);
}




// a printf függvén %S -string mindig s betű  %d -decimal szam mindig d betű, majd sorrendben a beírandó érték/
// Eredmény:   Az én nevem Sanyi, és 30 éves vagyok
// printf("Az én nevem %s, és %s éves vagyok", "Sanyi", 30 );

// // a sprintf függvén %S -string mindig s betű  %d -decimal szam mindig d betű, majd sorrendben a beírandó érték/

// sprintf("Az én nevem %s, és %s éves vagyok", "Sanyi", 30 );

// // Eredmény: változóba kell rakni és úgy adja vissza:   Az én nevem Sanyi, és 30 éves vagyok
// $szöveg=sprintf("Az én nevem %s, és %s éves vagyok", "Sanyi", 30 );

// // ha ki akarom íratni akkor ki kell a változót printelni
// print "<br><hr>";
// print $szöveg;