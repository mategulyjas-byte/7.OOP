<?php

namespace controllers;

use traits\ValidationTrait;
use modells\User;
use traits\ViewTrait;

class ForgottController
{
    use ValidationTrait;
    use ViewTrait;


    function forgott()
    {                                                    // simán Get-es kérésre csak a register lapot mutatja, a show függvénynnek, melyet a ViewTrait ből emelte be  nem csak e filet hanem adatokat is átadok, jelen esetben ez az adat a Title
        $title = "forgott";

        $this->show("/forgott", compact("title"));
    }



    function forgottprocess($connection)               // Ha a kérés Post al érkezik akkor az alábbi function lép életbe.
    {
        $this->ValidLength("name", "2", "60", "A név minimum %d maximum %d karakter hosszú lehet")          // megviszgálom e beírt név hosszát
            ->ValidEmail("email", "Invalid email cím");                                                        // megvizsgálom a beírt emil cím validitását
      


        $_SESSION["flash"]["inputs"] = $_POST;                                              // bejövő változókat Session be helyezem

        $user = new User($connection);                                                      // példányosítom a User modellt, mert ide mentem el a beérkezendő adatokat
        

        $useradatok = $user->select(["id"])->where("email", "=", $_POST["email"])->selectösszegzesfirst();   // Megvizsgálom e bevivendő emilcímet- van e már a rendzserben, más felhazsnáló regisztárlt e már azzal korábban
        
        if ($useradatok == null) {                                                               // ha az emailszám nem 0  vagyis jelen esetben dob vissza pl 1db  id-t akkor
            $_SESSION["flash"]["errors"][] = "Válaszzon másik e-mail címet";                // a sessionba hibaüzenetet teszek
        }




        if (empty($_SESSION["flash"]["errors"])) {                  // Ha üres az errors akkor
            $user = new User($connection);                      // példányostom ismét a User táblát
           
$_SESSION["ujjelszo"]=$ujjelszo= rand(100, 1000);

$hasujjelszo=password_hash($ujjelszo, PASSWORD_DEFAULT);
$lejaratiido= date('Y-m-d H:i:s', time()+600);



            $user->update()->ertekek2("password", $hasujjelszo)->ertekek2("passwordtime", $lejaratiido)->whereupdate("id","=", $useradatok['id'])->updateosszegzes();   
            
            $_SESSION["flash"]["success"] = "Sikeres ideiglenes jelszó igénylés! <br> Lépjen be az e-mail fiókjába és a küldöttt jelszóval lépjen be <br> <strong>10 percen belül </strong> </br> majd azonnal változtassa meg jelszavát";   // Session flash- be elhelyezem a sikeres regisztrációról az üzenetet
        
        $subject="Új jelszó";
        $message="Önnek 10 perce van arra ahogy  az alábbi jelszótval: $ujjelszo belépjen fiókjába. Belépés után azonnal változtassa meg jelszavát";
        $headers= "From: mate.gulyjas@mate.nhely.hu";

        mail($_POST["email"],$subject, $message, $headers);

            }

        header("location:/forgott");                               // visszírányítok a getes regiszer oldalra
        exit;
    }



    function __destruct()                                       // ha lefutott a class után a destrudt is lefut autóómatikusan és unseteli flash-eket
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            unset($_SESSION["flash"]);
        }
    }
}
