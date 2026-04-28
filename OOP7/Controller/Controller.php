<?php
include __DIR__ . "/../ViewTrait/ViewTrait.php";
class Controller{
    use ViewTrait;
    public $ViewData;
    function Homepage()
    {// mivel net lassú ezért users.json kiterjesztésű file ba teszem bele és nem linkről hívom
    //$url= "https://jsonplaceholder.typicode.com/users";

        $this->ViewData = [];

        $url = __DIR__ . "/../users.json";
        $users = json_decode(file_get_contents($url));
        // foreach ($users as $user){print "$user->name <br>";}
        foreach ($users as $user) {$this->ViewData[] = $user->name;}

        $this->show("Homepage");
    }
}
;