<?php
namespace controllers;

use traits\ValidationTrait;
use traits\ViewTrait;

class GuestController{

use ValidationTrait;
use ViewTrait;

function registerView(){$this->show("register");
}


function registerProcess(){
$_SESSION["flash"]["errors"]=[];

$this->validLength("name", 1, 50, "A név minimim %d és max %d karakter lehet")
->validEmail("email" , "Az email cím invalid")
->validLength("password", 1, 60, "A jelszó minimus %d maximum %d karaketr lehet")
->compare("password", "password_confirmation",  "A jelszavak nem egyeznek");


header("location:/register");

}

function __destruct(){
    if(isset($_SESSION["flash"]) && $_SERVER["REQUEST_METHOD"]== "GET"){ unset ($_SESSION["flash"]);}
}

}