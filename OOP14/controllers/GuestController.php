<?php

namespace controllers;


use traits\ViewTrait;
use traits\ValidationTrait;

class GuestController
{

    use ViewTrait, ValidationTrait;

    function registerView()
    {
        $title = "Register";

        $this->show("register", compact("title"));
    }


    function registerProcess()
    {
        //print_r($_POST);
        if (!$this->validLength($_POST["name"], 2, 30)) {
                //hibaüzenet}
            ;
        }


        if (!$this->validLength($_POST["password"], 4, 20)) {
            //hibaüzenet
        } else {
            if ($_POST["password"] != $_POST["passwordconfirmation"]) {
                    //hibaüzenete
                ;
            }
        }

        if (!$this->validEmail($_POST["email"])) {
                //hibaüzenet
            ;
        }
    }
}
