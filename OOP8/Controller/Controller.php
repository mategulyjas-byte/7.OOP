<?php
include __DIR__ . "/../ViewTrait/ViewTrait.php";
class Controller{
    use ViewTrait;

    function Homepage()
    {

        $url = __DIR__ . "/../users.json";
        $users = json_decode(file_get_contents($url));


        $name= "Angi";
        $city="Kalocsa";

       // print_r(compact("name","city"));

        //$this->show("Homepage", ["name"=>"János"]);
   
          // $this->show("Homepage", ["name"=>$name, "city"=>$city]);

              $this->show("Homepage", (compact("name","city")));

        }
}
