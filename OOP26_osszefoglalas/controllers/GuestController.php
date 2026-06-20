<?php

namespace controllers;

use traits\ValidationTrait;

class GuestController
{

    use ValidationTrait;

    function registerprocess()
    {
        $this->ValidLength("name", "1", "60", "A név minimum %d maximum %d karakter hosszú lehet")
            ->ValidEmail("email", "Invalid email cím")
            ->ValidLength("password", "1", "60", "A jelszó minimum %d, maximum %d karakter hosszú lehet")
            ->Compare("password", "passwordconf", "A jelszavak nem egyeznek meg");

        if (empty($_SESSION["flash"]["errors"])) { $_SESSION["flash"]["success"]="Siekres Regisztráció";}

        header("location:/register") ;exit;
    }

    function __destruct()
    {if($_SERVER["REQUEST_METHOD"] == "GET"){unset ($_SESSION["flash"]);}
        
    }
    
}
