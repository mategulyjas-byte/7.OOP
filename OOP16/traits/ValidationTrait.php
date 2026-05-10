<?php

namespace traits;

trait ValidationTrait{




function validLength($key, $min, $max, $message){
    $length=mb_strlen((trim($_POST[$key])));
    if($length >$max || $length < $min){
        $_SESSION["flash"]["errors"][]= sprintf($message,$min,$max);} 
        return $this;
}

function validEmail($key,$message)
{
    if(!filter_var($_POST[$key], FILTER_VALIDATE_EMAIL)){
        $_SESSION["flash"]["errors"][]=$message;}
    return $this;
}

function compare($key1, $key2, $messge ){
    if ($_POST[$key1] !== $_POST[$key2]){ 
        $_SESSION["flash"]["errors"][]=$messge;}
               return $this;

}


}
