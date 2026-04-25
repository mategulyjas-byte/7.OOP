<?php

include __DIR__."/Controller/Controller.php";

$url=$_SERVER["REQUEST_URI"];

$url= str_replace('/gulyasmate/index.php', '',$url);

$oladalak= new Controller;


switch ($url){

case '': $oladalak->Fooldal();
break;

case '/Rolunk': $oladalak->Rolunk();
break;

case '/Gyik': $oladalak->Gyik();
break;

case'/Galeria': $oladalak->Galeria();
break;

case '/Elerhetoseg': $oladalak->Elerhetoseg();
break;
default: print " Hiba!  Kérem ellenőrizze a beírt címet";
}
;
