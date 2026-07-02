<?php

namespace controllers;

use traits\ValidationTrait;
use modells\User;
use traits\ViewTrait;

class GuestController
{
        use ValidationTrait;
        use ViewTrait;


    function register(){

    $this->show("/register");
    }

    function registerprocess($connection)
    {
        $this->ValidLength("name", "2", "60", "A név minimum %d maximum %d karakter hosszú lehet")
            ->ValidEmail("email", "Invalid email cím");
           $this->ValidLength("password", "2", "60", "A jelszó minimum %d, maximum %d karakter hosszú lehet")
            ->Compare("password", "passwordconf", "A jelszavak nem egyeznek meg");


           $_POST["password"]= password_hash($_POST["password"], PASSWORD_DEFAULT);

           $_SESSION["flash"]["inputs"]=$_POST;

        $user = new User ($connection);

        $emailszam= $user->select(["id"])->where("email", "=", $_POST["email"])->selectösszegzesfirst();

        if($emailszam != null){$_SESSION["flash"]["errors"][]="Válaszzon másik e-mail címet";}



            

        if (empty($_SESSION["flash"]["errors"])) { 
        
        $user = new User ($connection);




        $user->insert(["name","email","password"]);

        $_SESSION["flash"]["success"]="Siekres Regisztráció";}

        header("location:/register") ;exit;
    }

    function __destruct()
    {if($_SERVER["REQUEST_METHOD"] == "GET"){unset ($_SESSION["flash"]);}
       
    

    
    }
    
}
