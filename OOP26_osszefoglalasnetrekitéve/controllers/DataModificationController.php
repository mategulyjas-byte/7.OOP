<?php

namespace controllers;

use traits\ViewTrait;
use modells\User;
use traits\ValidationTrait;

class DataModificationController
{
    use ValidationTrait;
    use ViewTrait;

    function datamodification()
    {
        $this->show("datamodification");
    }

    function datamodificationprocess($connection)
    {
       


        $this->ValidLength("name", "2", "60", "A név minimum %d maximum %d karakter hosszú lehet")
            ->ValidEmail("email", "Invalid email cím")
            ->ValidLength("password", "2", "60", "A jelszó minimum %d, maximum %d karakter hosszú lehet")
        ;

        if (!empty($_SESSION["flash"]["errors"])){ $_SESSION["flash"]["inputs"]=$_POST;  header("location:/datamodification");}


        $user = new User($connection);

        $emailszam = $user->select(["email"])->where("email", "=", $_POST["email"])->where("id", "!=", $_SESSION["user"]["id"])->selectösszegzesfirst();

        if (!empty($emailszam)) {
            $_SESSION["flash"]["errors"][] = "Válasszon másik email címet";
            header("location:/datamodification");
            exit;
        }
        
        
        
        
        if (empty($_SESSION["flash"]["errors"])) {

            $user->update()->ertekek2("name", $_POST["name"])->ertekek2("email", $_POST["email"])->ertekek2("password", $_POST["password"])->whereupdate("id", "=", $_SESSION["user"]["id"])->updateosszegzes();


            $_SESSION["user"]["name"] = $_POST["name"];
            $_SESSION["user"]["email"] = $_POST["email"];
            $_SESSION["user"]["password"] = $_POST["password"];




            header("location:/datamodification");
            exit;
        }
    }

    function __destruct()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            unset($_SESSION["flash"]);
        }
    }
}
