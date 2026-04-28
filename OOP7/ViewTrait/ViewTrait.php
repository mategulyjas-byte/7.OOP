<?php

trait ViewTrait{

function show ($filename){

//ez nek mkell csak megnéztem hogy működik e innen is lérhetőa ViewData
    //print_r($this->ViewData);


    include (__DIR__."/../View/$filename.php");
}
    
}