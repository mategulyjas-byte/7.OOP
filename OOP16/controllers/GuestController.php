<?php

namespace controllers;

use traits\ValidationTrait;
use traits\ViewTrait;

class GuestController{

use ViewTrait;
use ValidationTrait;

function registerView(){$this->show("register");}


function registerProcess(){
$_SESSION["flash"]["errors"]=[];

$this->validLength("name", 2, 30, "A név minimum %d és maximum %d karakter lehet")
->validLength("password", 4, 10, "A jelszó minimum %d, maximum %d karakter hosszú lehet")
->validEmail("email", "Az email cím nem valid")
->compare("password","password_confirmation", "A jelszavak nem egyeznek");

header("location:/register"); 

}


function __destruct()
{if ($_SERVER["REQUEST_METHOD"] =="GET"){ unset ($_SESSION["flash"]);}
    
}

;






}
