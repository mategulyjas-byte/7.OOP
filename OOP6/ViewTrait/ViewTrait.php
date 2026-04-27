<?php

trait ViewTrait{

function show ($filename){
    include (__DIR__."/../View/$filename.php");
}
    
}