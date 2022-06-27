<?php

class Flash
{
    public static function createAnswer($type, $message)
    {
        $_SESSION['ANSWER'] = ['type' => $type, 'message' => $message];
    }
}