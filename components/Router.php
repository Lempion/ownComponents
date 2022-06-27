<?php

class Router
{
    /**
     * @var string[] - массив с нашими путями
     */
    public $paths = [
        "/" => "module/home_m.php",
        "/edit" => "module/edit_m.php",
        "/create" => "module/create_m.php",
        "/remove" => "module/remove_m.php"
    ];

    /**
     * @param $url - принимаем url по которому зашёл позователь
     * @return false|string - в случай успешного вхождения отдваём путь для подлкючения файла, иначе false
     */
    public function findRoute($url)
    {
        // Нужно проверить передают ли нам айди, для этого разобьём наш url, с помощью preg_split
        $arrayPaths = preg_split("|/|", $url);
        // Если нам передали какой то айди, то он будет в массиве $arrayPaths под ключем 2. Сразу же переводим это значение в число
        $id = $arrayPaths[2];
        settype($id, "int");
        // Теперь нужно проверить вхождение, для этого в начале допишем /
        $mainPath = '/' . $arrayPaths[1];


        if (array_key_exists($mainPath, $this->paths)) {
            // Если нам передали айди тогда записываем его в SESSION[GET] для дальнейшего получения
            if ($id && gettype($id) === "integer") {
                $_SESSION['GET'] = ['id' => $id];
            }
            return $this->paths[$mainPath];
        } else {
            return false;
        }
    }

}