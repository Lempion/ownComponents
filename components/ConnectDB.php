<?php

class ConnectDB
{
    /**
     * @param $config - данные для подключения к БД
     * @return PDO
     */
    public static function connect($config)
    {
        return new PDO("{$config['connection']};dbname={$config['dbname']}",$config['login'],$config['password']);
    }

}