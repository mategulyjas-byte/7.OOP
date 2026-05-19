<?php

namespace controllers;

use Odbc\Connection;
use traits\ValidationTrait;
use traits\ViewTrait;
use models\User;

class GuestController{

use ValidationTrait;
use ViewTrait;


function registerView(){$this->show("register");
}


function registerProcess($connection){
$_SESSION["flash"]["errors"]=[];

$this->validLength("name", 1, 50, "A név minimim %d és max %d karakter lehet")
->validEmail("email" , "Az email cím invalid")
->validLength("password", 1, 60, "A jelszó minimus %d maximum %d karaketr lehet")
->compare("password", "password_confirmation",  "A jelszavak nem egyeznek");


if(!isset( $_SESSION["flash"]["errors"]) || count ($_SESSION["flash"]["errors"]) == 0){
    $_SESSION["flash"]["success"] = "Sikeres reisztráció";}


$model= new user ($connection);

$model->insert(["name", "email", "password"]);



header("location:/register");}






function __destruct(){
    if(isset($_SESSION["flash"]) && $_SERVER["REQUEST_METHOD"]== "GET"){ unset ($_SESSION["flash"]);}
}




}