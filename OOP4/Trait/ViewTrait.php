<?php

// trait ViewTrait{

// function show ($filename){
//     include (__DIR__."/../View/$filename.php");
// }
// }



trait ViewTrait{

function show ($filename){
    print_r($this->ViewData);
    include (__DIR__."/../View/$filename.php");
}
}