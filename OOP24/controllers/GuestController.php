<?php

namespace controllers;

use traits\ViewTrait;
use traits\ValidationTrait;

class GuestController{
use ViewTrait;
use ValidationTrait;


function RegisterView(){$this->show("regisztracio") ;}



function RegisterProcess($connection){
 
    $_SESSION["flas"]["errors"]=[];

    $this->validLength("name", 2, 10, "A név minimum %d maximum %d karakter lehet")
    ->validEmail( "email" ,"Az e-mail cím invalid")
    ->validLength("password", 4, 10, "Az jelszó minimum %d maximum %d karakter hoszsú lehet") 
    ->validCompare("password", "password_confirmation", "A jelszavak nem egyeznek");


    if(isset($_SESSION["flas"]["errors"]) && empty($_SESSION["flas"]["errors"])) { $_SESSION["flas"]["success"]="Sikeres regisztráció"; }

header("location:/regisztracio"); exit;


}


function __destruct(){
if($_SERVER["REQUEST_METHOD"] == "GET"){unset ($_SESSION["flas"]);}}

















}

