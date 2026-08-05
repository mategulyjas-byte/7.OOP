<?php

namespace traits;

trait ValidationTrait                                               //elékszítem azokat az univerzális functionokat, melyek pl egy validáláshoz szükségesek.
{
    function ValidLength($key, $min, $max, $message)                          // hosszt viszgálom  ()
    {
        $length = mb_strlen(trim($_POST[$key]));                            // hosz= trimmelt post key
        if ($length < $min || $length > $max) {                             // ha a hosssz kisebb mint mi n vagy nagyobb mint max akkor
            $_SESSION["flash"]["errors"][] = sprintf($message, $min, $max);         // sprintf el hibaüzenetet készítek ( a beírt értéket aadja vissza-- sablonszövegbe (formátumstringbe) változókat és értékeket illeszt be)
        }
        return $this;                                               // return $this- hogy a functionok egymásból hívhatóak legyenek
    }

    function ValidEmail($key, $message)                                 // email validálása
    {
        if (!filter_var($_POST[$key], FILTER_VALIDATE_EMAIL)) {         // filtervalidate email- beépített
            $_SESSION["flash"]["errors"][] = $message;                  // ha invalid a akkor a session errorsba üzenet
        }
        return $this;
    }

    function Compare($key1, $key2, $message)                            // jelszavak összehhasonlítása
    {                                                                   
        if ($_POST[$key1] != $_POST[$key2]) {
            $_SESSION["flash"]["errors"][] = $message;                  // ha nem azonos, akkor session erros ba üzenet
        }
        return $this;                                                     
    }               
}
