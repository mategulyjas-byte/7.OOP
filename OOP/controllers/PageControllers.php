<?php

class PageControllers
{
    function homepage()
    {
        //print "Homepage vagyok";
        include(__DIR__."/../view/homepage.php");
    }

    function aboutpage(){
        print "Rólunk";
    }
}
