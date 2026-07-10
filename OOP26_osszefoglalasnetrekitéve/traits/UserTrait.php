<?php

namespace traits;

trait UserTrait{

function ComparPassword($key1, $key2){
    if($_POST[$key1] != $key2){$_SESSION["flash"]["errors"][]="Hibás adatok";}; return $this;


}


}