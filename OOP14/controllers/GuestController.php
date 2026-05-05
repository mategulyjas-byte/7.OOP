<?php

namespace controllers;


use traits\ViewTrait as VT;


class GuestController
{

    use VT;

    function registerView()
    {
        $title = "Register";

        $this->show("register", compact("title"));
    }



    function registerProcess()
    {print_r($_POST);
    }
}
