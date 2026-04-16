<?php

// class user2{

// var $nev, $birthyear, $email;

//  function sayhello(){
//  return "Helló".$this->nev;

// }
// }

// $user = new user2;
// $user->nev= "Angi";
// print $user->sayhello();



// class user2{

// var $nev, $birthyear, $email;

// static function sayhello($nev){
//  return "Helló".$nev;

// }
// }

// print user2::sayhello("Angi");







class user3
{

    var $nev, $birthyear, $email;

    static function sayhello($nev)
    {
        return "Helló" . $nev;
    }
    static function __callStatic($name, $arguments)
    {
        print $name."<br>";
        print_r($arguments);
    }
}

print user3::nemlétezőfüggvény("Angi", "Máté");
