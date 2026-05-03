<?php
spl_autoload_register(function ($file) {
    print str_replace('\\', DIRECTORY_SEPARATOR, "$file.php");

    include(str_replace('\\', DIRECTORY_SEPARATOR, "$file.php"));
});

//spl_autoload_register( function($file){print str_replace('\\','/', "$file.php");include ("$file.php");}); 
// print DIRECTORY_SEPARATOR;
include __DIR__ . "/config.php";
//Lehetőségek:
// semmi
//use controller\Controller;
use controller\Controller as C;
//include __DIR__."/Controller/Controller.php";
// mivel névteret használok ezért  classeket tartalmazó file-okat
// az spl_autoload_registerrel "hívom be a korábbi includolás helyett, 
//de csak a classes/traitet tartalmazó filokat
$url = $_SERVER["REQUEST_URI"];
//$Controller= new Controller\Controller;
//$Controller= new Controller;
$Controller = new C;
//Elérési útvonal:
//ha mappákon belül is még mappákban vannak a classt tartalmazó fileok,
// akkor perjelekkel a mappáikg kell menni pl: (full qualified path)
// $Controller= new Controller\mappa1\mappa1.1.\Controller;
//abszolút elérési útvonal: pl: \ViewTrait\ViewTrait
switch ($url) {
    case '/':
        $Controller->Homepage();
        break;
    case '/About':
        $Controller->About();
        break;
    default:
        http_response_code(401);
}
