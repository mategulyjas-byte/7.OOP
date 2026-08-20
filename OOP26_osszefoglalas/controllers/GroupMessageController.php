<?php

namespace controllers;

use traits\ValidationTrait;
use modells\User;
use traits\ViewTrait;

class GroupMessageController
{
    use ValidationTrait;
    use ViewTrait;


    function groupmessage()
    {                                                    // simán Get-es kérésre csak a register lapot mutatja, a show függvénynnek, melyet a ViewTrait ből emelte be  nem csak e filet hanem adatokat is átadok, jelen esetben ez az adat a Title
        $title = "Csoportos üzenetek";

        $this->show("groupmessage", compact("title"));
    }



    function groupmessageprocess($connection)               // Ha a kérés Post al érkezik akkor az alábbi function lép életbe.
    {
        $this->ValidLength("groupmessage", "1", "10000", "Az üzenet minimum %d maximum %d karakter hosszú lehet") ;         // megviszgálom e beírt név hosszát

        $_SESSION["flash"]["inputs"] = $_POST;                                              // bejövő változókat Session be helyezem

      

        if (empty($_SESSION["flash"]["errors"])) {                  // Ha üres az errors akkor
            $user = new User($connection);                      // példányostom ismét a User táblát
           

        $data=$user->select(["email"])->selectösszegzes(); 
        
foreach($data as $egyfelhasznalo){ print $egyfelhasznalo["email"];


        $subject="Értesítés";
        $message=" {$_POST["groupmessage"]}";
        $headers= "From: mate.gulyjas@mate.nhely.hu";

        mail($egyfelhasznalo["email"],$subject, $message, $headers);

           }}

        header("location:/groupmessage");                               
        exit;
    }



    function __destruct()                                       // ha lefutott a class után a destrudt is lefut autóómatikusan és unseteli flash-eket
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            unset($_SESSION["flash"]);
        }
    }
}
