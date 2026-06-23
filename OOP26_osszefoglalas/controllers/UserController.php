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
    $this->show("account");
}


function emailkeres($connection){

$user= new user($connection);

$emailkeres=$user->select(["id","email", "password"])->where ("email", "=", "{$_POST['email']}")->selectösszegzesfirst()
;





 if ($emailkeres === null){ $_SESSION["flash"]["errors"][]="Hibás adatok";}

else{$this->ComparPassword("password", $emailkeres['password']);}

if(!isset ($_SESSION["flash"]["errors"]) || count($_SESSION["flash"]["errors"])==0){  $_SESSION["userid"]=$emailkeres["id"];
    header("location:https://www.youtube.com/watch?v=4HkUkXYCFbo"); exit;
}

else{header("location:/account"); exit;}

}



}