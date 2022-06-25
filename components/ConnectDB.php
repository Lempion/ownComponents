<?php

class ConnectDB
{

    public static function connect($config)
    {
        return new PDO("{$config['connection']};dbname={$config['dbname']}",$config['login'],$config['password']);
    }

}