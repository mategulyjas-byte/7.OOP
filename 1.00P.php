<?php
class user
{
    var $név;
    var $birthyear;
    function getAge()
    {
        return date("Y") - $this->birthyear;
    }
}
$user=new user;
$user->birthyear=2000;
print $user->getAge();

