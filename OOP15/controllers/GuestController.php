<?php

namespace controllers;;

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

      $_SESSION["flash"]=[];

      //$_SESSION["errors"] = $_SESSION["post"]=[];

       // $_SESSION["errors"] = [];
       // $_SESSION["post"]=[];

        // $this->validLength("name", 2, 30, "A név minimum %d és maximum %d karakter lehet");
        // $this->validLength("password", 4, 20, "A jelszó minimum %d és maximum %d karakter lehet");
        // $this->compare("password", "password_confirmation", "A két jelszó nem azonos" );
        // $this->validEmail("email" ,"Az email cím invalid");

        //print_r($_SESSION["errors"]);

        $this->validLength("name", 2, 30, "A név minimum %d és maximum %d karakter lehet")
            ->validLength("password", 4, 20, "A jelszó minimum %d és maximum %d karakter lehet")
            ->compare("password", "password_confirmation", "A két jelszó nem azonos")
            ->validEmail("email", "Az email cím invalid");
    
    if(count($_SESSION["flash"]["errors"]) >0){//hiba keletkezett

    } else{ //Minde oké}
            }

            header("location:/register" );
}
function __destruct()
{ if($_SERVER["REQUEST_METHOD"] !=="POST")

unset ($_SESSION["flash"]);
    //unset ($_SESSION["errors"], $_SESSION["post"] );
}

}





//     //print_r($_POST);
//          if (!$this->validLength($_POST["name"], 2, 30)) {//hibaüzenet}
//             ;}


//         if (!$this->validLength($_POST["password"], 4, 20)) {//hibaüzenet
//                 } else { if ($_POST["password"] != $_POST["passwordconfirmation"]) {//hibaüzenete
//                 ;}}
//          if (!$this->validEmail($_POST["email"])) {//hibaüzenet
//             ;}
//     }
// }
