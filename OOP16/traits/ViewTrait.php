<?php 

namespace traits;

trait ViewTrait{

function show($file, $Array=[]){ foreach ($Array as $key=>$value ) { $$key=$value;}; include __DIR__."/../view/$file.php";}
}
