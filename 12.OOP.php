<?php

// class Szovegkiiratas{

//     function printelés($data){print $data;}
//     }
// (new Szovegkiiratas)->printelés("Ez egy szöveg");




// class Szovegkiiratas{

//     function szinez($color,$data){
//        return '<span style="color:'.$color.'">'.$data.'<span>'
//     ;}

//     function out($data){
//         return $this->szinez("red",$data,);}
//     }

// $obj =  new Szovegkiiratas;
// print $obj->out("ez egy szöveg");
    







// class Szovegkiiratas{

//     function szinez($data,$color){
//        return '<span style="color:'.$color.'">'.$data.'<span>'
//     ;}

//     function out($data,$color){
//         return $this->szinez($data, $color);}
//     }

// $obj =  new Szovegkiiratas;
// print $obj->out("ez egy szöveg","green");







// class Szovegkiiratas{

//     function szinez($data,$color){
//        return '<span style="color:'.$color.'">'.$data.'<span>'
//     ;}

//     function koverit($data){
//         return '<b>'.$data.'<b>'; 
//     }


//     function out($data,$color){
//         return $this->koverit($this->szinez($data, $color));}
//     }

// $obj =  new Szovegkiiratas;
// print $obj->out("ez egy szöveg","green");






include '12utils.php';

class Szovegkiiratas{

  use utils;

    function out($data,$color){
        return $this->koverit($this->szinez($data, $color));}
    }

$obj =  new Szovegkiiratas;
print $obj->out("ez egy szöveg","green");
