<?php if(!defined("BELEP")){(print "Belépés megtagadva") && exit;}


//Cél: Cotroller.php- nak adatot átadni pl megjelenítenőd oldalakat, tömböket

// Ez fogja betölteni a megadott mappából az adott file-t, illetve 
// megadott tömbön végigmenyi és a változós változóhoz a megadott értéket rendeli

trait ViewTrait
{   //function- betölti az adott filet és tömbelemekt
    function show($filename, $Array=[]){

    foreach ($Array as $key=>$value) {$$key = $value;}

        //a function be behívom az adott változó php filet pl Homepage, About.php
        include __DIR__ . "/../$filename.php";
        // a function végigmegy a tömbön és kilistázza az elemeket
        
    }
}
