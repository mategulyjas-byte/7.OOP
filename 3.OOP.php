<?php

// class user
// {

//     var $nev, $birthday;

//     function __construct()
//     {
//         print "a constructor lefutott"."<br> ";
//     }

//     function getAge()
//     {
//         return date("Y") - $this->birthday;
//     }
// }

// $user1= new user;
// $user1->birthday=2000;
// print $user1->getAge();




// class user2
// {

//     var $nev, $birthday;

//     function __construct($year)
//     {

//         $this->birthday = $year;
//     }

//     function getAge()
//     {
//         return date("Y") - $this->birthday;
//     }
// }

// $user2 = new user2(1980);
// print $user2->getAge();









class user3
{

    var $nev, $birthday;

    function __construct($year,$name)
    {

        $this->birthday = $year;
        $this->nev=$name;}
        

    function getAge()
    {
        return date("Y") - $this->birthday;
    }

    function getName(){return $this->nev;}
}

$user4 = new user3(1980, "Angi");
print $user4->getAge()." ".$user4->getName();


