<?php 

namespace controllers;

use traits\ValidationTrait;
use traits\ViewsTrait;

class GuestController{

use ValidationTrait;
use ViewsTrait;


function registerview(){$this->show("register");}



function registerProcess(){

$_SESSION["flash"]["errors"]=[];

    $this->validLength("name", 2, 3, "A %s nek %d és %d karaketer között kell lennie")
    ->validEmail("email", "Az  email invalid")
    ->validLength("password", 3, 4, "A jelszónak %d és %d karakter között kell lennnie")
    ->compare("password", "password_confirmation", "A jelszavak nem egyeznek");
    
    header("location:/register");
    }



function __destruct(){
    if ( $_SERVER["REQUEST_METHOD"] == "GET") {unset ($_SESSION["flash"]);};
}
}


