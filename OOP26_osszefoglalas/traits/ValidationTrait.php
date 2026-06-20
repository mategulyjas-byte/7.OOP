<?php

namespace traits;

trait ValidationTrait
{
    function ValidLength($key, $min, $max, $message)
    {
        $length = mb_strlen(trim($_POST[$key]));
        if ($length < $min || $length > $max) {
            $_SESSION["flash"]["errors"][] = sprintf($message, $min, $max);
        }
        return $this;
    }

    function ValidEmail($key, $message)
    {
        if (!filter_var($_POST[$key], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["flash"]["errors"][] = $message;
        }
        return $this;
    }

    function Compare($key1, $key2, $message)
    {
        if ($_POST[$key1] != $_POST[$key2]) {
            $_SESSION["flash"]["errors"][] = $message;
        }
        return $this;
    }
}
