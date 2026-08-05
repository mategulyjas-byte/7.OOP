<?php

namespace controllers;

use traits\ValidationTrait;
use modells\User;
use traits\ViewTrait;

class GuestController
{
    use ValidationTrait;
    use ViewTrait;


    function register()
    {                                                    // simán Get-es kérésre csak a register lapot mutatja, a show függvénynnek, melyet a ViewTrait ből emelte be  nem csak e filet hanem adatokat is átadok, jelen esetben ez az adat a Title
        $title = "Regisztráció";

        $this->show("/register", compact("title"));
    }



    function registerprocess($connection)               // Ha a kérés Post al érkezik akkor az alábbi function lép életbe.
    {
        $this->ValidLength("name", "2", "60", "A név minimum %d maximum %d karakter hosszú lehet")          // megviszgálom e beírt név hosszát
            ->ValidEmail("email", "Invalid email cím");                                                        // megvizsgálom a beírt emil cím validitását
        $this->ValidLength("password", "2", "60", "A jelszó minimum %d, maximum %d karakter hosszú lehet")      // jelszó hosszát
            ->Compare("password", "passwordconf", "A jelszavak nem egyeznek meg");                              // a jelszók egyezését vizsgálom


        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);                               // titkosítom a jelszót

        $_SESSION["flash"]["inputs"] = $_POST;                                              // bejövő változókat Session be helyezem

        $user = new User($connection);                                                      // példányosítom a User modellt, mert ide mentem el a beérkezendő adatokat

        $emailszam = $user->select(["id"])->where("email", "=", $_POST["email"])->selectösszegzesfirst();   // Megvizsgálom e bevivendő emilcímet- van e már a rendzserben, más felhazsnáló regisztárlt e már azzal korábban
        if ($emailszam != null) {                                                               // ha az emailszám nem 0  vagyis jelen esetben dob vissza pl 1db  id-t akkor
            $_SESSION["flash"]["errors"][] = "Válaszzon másik e-mail címet";                // a sessionba hibaüzenetet teszek
        }



        if (empty($_SESSION["flash"]["errors"])) {                  // Ha üres az errors akkor
            $user = new User($connection);                          // példányostom ismét a User táblát
           
            $user->insert(["name", "email", "password"]);           // mivel korábban már validálva lettek a név, jelszó  stb  illetve nincs email egyezés és a hiba tárló üres ezért a psot adatokat beviszem a táblázatba
            $_SESSION["flash"]["success"] = "Siekres Regisztráció";   // Session flash- be elhelyezem a sikeres regisztrációról az üzenetet
        }

        header("location:/register");                               // visszírányítok a getes regiszer oldalra
        exit;
    }



    function __destruct()                                       // ha lefutott a class után a destrudt is lefut autóómatikusan és unseteli flash-eket
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            unset($_SESSION["flash"]);
        }
    }
}
