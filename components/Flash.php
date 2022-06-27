<?php

class Flash
{
    /**
     * @param $type - получаем либо 0 - сообщение об ошибке, или 1 - успешное выполнение
     * @param $message - сообщение для Флеш
     * @return void
     */
    public static function createAnswer($type, $message)
    {
        $_SESSION['ANSWER'] = ['type' => $type, 'message' => $message];
    }
}