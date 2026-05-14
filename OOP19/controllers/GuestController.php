<?php 

namespace controllers;

use traits\ValidationTrait;
use traits\ViewsTrait;
use models\User;

class GuestController{

use ValidationTrait;
use ViewsTrait;



function registerView(){$this->show("register");}



function registerProcess($connection){

$_SESSION["flash"]=[];

    $this->validLength("name", 1, 40, "A névnek %d és %d karaketer között kell lennie")
    ->validEmail("email", "Az  email invalid")
    ->validLength("password", 1, 40, "A jelszónak %d és %d karakter között kell lennnie")
    ->compare("password", "password_confirm", "A jelszavak nem egyeznek")
    ;

if (!isset($_SESSION["flash"]["errors"]) || count ($_SESSION["flash"]["errors"]) === 0 ){
 
// mysqli_query($connection, "insert into user (name, email, password)  values
//  ('{$_POST["name"]}', '".$_POST["email"]."', '".$_POST["password"]."')" );

//$_SESSION["flash"]["success"]= "Sikeres regisztráció";


$model= new User ($connection);

 $model->insert(['name','email','password']);




$_SESSION["flash"]["success"]= "Sikeres regisztráció";




}

    

    header("location:register");;
    }



function __destruct(){
    if ( $_SERVER["REQUEST_METHOD"] == "GET") {unset ($_SESSION["flash"]);};
}
}


