<?php namespace View\ViewTrait;
 

if(!defined("BELEP")){(print "Belépés megtagadva") && exit;}

trait ViewTrait
{   
    function show($filename, $Array=[]){
     foreach ($Array as $key=>$value) {$$key = $value;}

        include __DIR__ . "/../$filename.php";
        
    }
}
      