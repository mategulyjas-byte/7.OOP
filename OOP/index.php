    <?php
include __DIR__."/controllers/PageControllers.php";

    $url= $_SERVER["REQUEST_URI"]; //unique  resource identifier
    //rooting

$page= new PageControllers;

    switch ($url) 
    {
    case '/':  $page->homepage();
            break;
    case '/ register':  if($_SERVER["REQUEST_METHOD"]=== "POST"){
        // dolgoza fel a belépépési adatokat
        }
    else{ // regisztrációs űrlap beviteli mező látszódik ;}
    }
    break;
    default: Print "HIBA";
    }