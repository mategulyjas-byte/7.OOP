<?php


class user
{
    var $nev, $email;

function __destruct(){
print " "."destruct";}

    function __construct($name, $mail)
    {
        print "construct"." ";
        $this->nev = $name;
        $this->email = $mail;
    }
function getName(){return $this->nev;}
function getEmail(){return $this->email;}

}

$user1 = new user ("Pista","emai@email.hu");

print $user1->getName()." email címe:  ".$user1->getEmail();

print ""."alma"."";

