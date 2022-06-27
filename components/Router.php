<?php

class Router
{

    public $paths = [
        "/" => "module/home_m.php",
        "/edit" => "module/edit_m.php",
        "/create" => "module/create_m.php"
    ];

    public function findRoute($url)
    {
        $arrayPaths = preg_split("|/|", $url);
        $id = $arrayPaths[2];
        settype($id, "int");
        $mainPath = '/' . $arrayPaths[1];

        if (array_key_exists($mainPath, $this->paths)) {
            if ($id && gettype($id) === "integer") {
                $_SESSION['GET'] = ['id' => $id];
            }
            return $this->paths[$mainPath];
        } else {
            return false;
        }
    }

}