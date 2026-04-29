<?php

trait ViewTrait{

function show ($filename, $dataArray){

foreach ($dataArray as $key=>$value){
    $$key = $value;

}
    include (__DIR__."/../View/$filename.php");
}
    
}