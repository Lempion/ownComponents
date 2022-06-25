<?php

class Router
{

    public $paths = [
        "/" => "module/home_m.php",
        "/edit" => "module/edit_m.php",
        "/create" =>"module/create_m.php"
    ];

    public function findRoute($url)
    {
        if (array_key_exists($url, $this->paths)) {
            return $this->paths[$url];
        } else {
            return false;
        }
    }

}