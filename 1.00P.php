<?php

// 1.00P.php    ez a file neve (egy.nulla nulla.php)

class user
{
    var $név;
    var $birthyear;
    function getAge()
    {
        return date("Y") - $this->birthyear;
    }
    function

    getName()
    {
        return $this->név;
    }
}


$user1 = new user;
$user1->birthyear = 2000;
print $user1->getAge();
print " éves jelenleg";
$user1->név = "Angéla";
print " ";
print $user1->getName();


print "<br>";

$user2 = new user;
$user2->birthyear = 1990;
print $user2->getAge();
print " éves jelenleg";
$user2->név = "Béla";
print " ";
print $user2->getName();
