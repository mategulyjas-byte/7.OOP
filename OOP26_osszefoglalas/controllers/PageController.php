<?php

namespace controllers;

use traits\ViewTrait;

class PageController
{
    use ViewTrait;

    function homepage()
    {
        $title = "Kezdőoldal";

        $this->show("homepage", compact("title"));
    }

    function about()
    {
                $title = "Rólunk";

        $this->show("about", compact("title"));
    }

    function profile()
    {
                $title = "Profilom";

        $this->show("profile", compact("title"));
    }


    function calculate(){

    $title="Számológép";
    $this->show("calculate", compact("title"));
    }

}

