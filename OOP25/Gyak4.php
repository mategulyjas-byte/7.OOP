<?php

$_POST["name"]="Robi";
$_POST["email"]="sad@dghs.hu";
$_POST["password"]="12345";

 $_SESSION["flash"]["errors"]=[];

class Validation{

function ValidLength($key, $min, $max, $message){
if(strlen($_POST[$key]) <$min || strlen($_POST[$key]) >$max  ) { $_SESSION["flash"]["errors"][]=  sprintf( $message, $min, $max) ;}

}


}

$hossz =new Validation;
$hossz->ValidLength("name", "10", "20" , "a %d és a %d hhaj");
print_r( $_SESSION["flash"]["errors"]);