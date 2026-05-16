<?php

namespace traits;

trait ViewTrait
{

    function show($file)
    {
        include __DIR__."/../views/$file.php";
    }
}
