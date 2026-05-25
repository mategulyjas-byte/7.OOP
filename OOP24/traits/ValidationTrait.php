<?php
namespace traits;

trait ValidationTrait{


function validLength($key, $min, $max, $message){
    $length=strlen($_POST["$key"]); if($length<$min || $length>$max){$_SESSION["flas"]["errors"][]= sprintf($message, $min, $max);}
    
    return $this;}

function validEmail($key, $message){
    if( !filter_var($_POST[$key], FILTER_VALIDATE_EMAIL)){ $_SESSION["flas"]["errors"][]= $message;}
    return $this;}


function validCompare($key1, $key2, $message){
    if($_POST[$key1] !== $_POST[$key2]){$_SESSION["flas"]["errors"][]= $message;}
    return $this;}
}








