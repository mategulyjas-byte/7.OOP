<?php





class user
    {var $nev, $email
    // ,$mydogname
    ;
    function __construct($name, $mail,
    // $kutyanev
    ){;
        $this->nev = $name;
        $this->email = $mail;
        // $this->mydogname=$kutyanev;
    }
function getName(){return $this->nev;}
function getEmail(){return $this->email;}
function __set($tulajdonság, $érték)
{
    print "A $tulajdonság és $érték nem létezik";
}
// function __get($tulajdonság){print "nem létezik a tulajdonság";}
}
$user1 = new user ("Pista","emai@email.hu"
// ,"Blöki"
);
$user1->kutyanev="Bodri";
// print $user1->mydogname;
