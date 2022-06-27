<?php

class Validator
{
    /**
     * @param $data - массив для проверки (Массив типа Ключ -> Значение)
     * В случай успешной проверки и заполненности всех данных, выводит true иначе false
     * @return bool
     */
    public static function checkData($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return false;
            }
        }
        return true;
    }
}