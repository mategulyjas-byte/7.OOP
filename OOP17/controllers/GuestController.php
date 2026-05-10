<?php namespace controllers;

use traits\ValidationTrait;
use traits\ViewTrait;

class GuestController{


use ValidationTrait;
use ViewTrait;

function registerView(){ $this->show("register") ;}



function registerProcess (){ 

$_SESSION["flash"]["errors"]=[];

    $this->validationLength("name", 5, 50, "A névnek %d és %d karaketer között kell lennie")
    -> validationEmail("email","Invalid email cím")
    -> validationLength("password", 4, 40, "A jelszónak %d és %d karakter között kell lennie")
    ->compare("password","password_confirmation", "A jelszavak nem egyeznek")
;

header("location:/register");}

function __destruct(){ if( $_SERVER["REQUEST_METHOD"] == "GET") { unset ($_SESSION["flash"]);}}







}