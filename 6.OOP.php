<?php





class user
{
    var $nev, $email
    // ,$mydogname
    ;
    function __construct($name, $mail,
    
    // $kutyanev
    )
    {
        ;
        $this->nev = $name;
        $this->email = $mail;

        // $this->mydogname=$kutyanev;
    }
function getName(){return $this->nev;}
function getEmail(){return $this->email;}

function __get($tulajdonság)
{
    print "A tulajdonság nem létezik";
}}
$user1 = new user ("Pista","emai@email.hu"

// ,"Blöki"

);


print $user1->mydogname;
