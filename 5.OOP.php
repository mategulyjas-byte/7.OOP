<?php





class user
{
    var $nev, $email;

function __call($name, $arg){
print $name."<br>";
print_r ($arg);}

    function __construct($name, $mail)
    {
        ;
        $this->nev = $name;
        $this->email = $mail;
    }
function getName(){return $this->nev;}
function getEmail(){return $this->email;}

}

$user1 = new user ("Pista","emai@email.hu");

print $user1->sayhelo("egy","kettő");
