<?php

namespace controllers;

use modells\User;
use mysqli;
use traits\UserTrait;
use traits\ViewTrait;


class UserController{

use UserTrait;
use ViewTrait;

function account(){


$title="Belépés";
    $this->show("account", compact("title"));
}


function emailkeres($connection){

$user= new User($connection);

$userdata=$user->select(["id","name","email", "password"])->where ("email", "=", "{$_POST['email']}")->selectösszegzesfirst()
;



 if ($userdata === null ||    (password_verify($_POST["password"],$userdata["password"] ) ==false )){ $_SESSION["flash"]["errors"][]="Hibás adatok";}


if($userdata !== null && (password_verify($_POST["password"],$userdata["password"] ) == true)
    
 && (!isset ($_SESSION["flash"]["errors"]) || count($_SESSION["flash"]["errors"])==0)){  $_SESSION["user"]=$userdata;



$_SESSION["flash"]["success"]="Siekres belépés";
    header("location:/profile"); exit;
}

else{header("location:/account"); exit;}

}



}