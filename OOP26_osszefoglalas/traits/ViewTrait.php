<?php

namespace traits;

trait ViewTrait{

function show($file, $data=[]){ include __DIR__."/../views/$file.php" ; }
}