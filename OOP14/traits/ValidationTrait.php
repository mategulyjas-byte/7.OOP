<?php

namespace traits;

trait ValidationTrait
{

    function validLength($data, $min, $max)
    {
        $length = mb_strlen(trim($data));
        return $length <= $max && $length >= $max;
    }

    function validEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);

    }
}
 