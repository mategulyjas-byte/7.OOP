<?php
include __DIR__ . "/../ViewTrait/ViewTrait.php";
class Controller
{
        use ViewTrait;

        function Homepage()
        {
                $name = "Angi";
                $city = "Sóskút";
                $title = "Főoldal";

                $this->show("Homepage", compact("name", "city", "title"));
        }
        function About()
        {
                $title = "Rólunk";
                
                $this->show("About", compact("title"));
        }
};
