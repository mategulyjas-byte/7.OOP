<?php

// trait ViewTrait{

// function show ($filename){
//     include (__DIR__."/../View/$filename.php");
// }
// }



trait ViewTrait{

function show ($filename, $dataarray ){

foreach ($dataarray as $key=> $val){
    $$key = $val;
}

include (__DIR__."/../View/$filename.php");
}
}