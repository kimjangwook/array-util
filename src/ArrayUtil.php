<?php
namespace KimJangwook\ArrayUtil;

class ArrayUtil
{
    /**
     * Shift value that result of the array_filter() function.
     * If no value matches, return null.
     * @param array $array
     * @param $callback
     * @return mixed|null
     */
    public static function find(array $array, $callback)
    {
        $filteredArray = array_filter($array, $callback);
        if (!$filteredArray) {
            return null;
        }
        $filteredArray = array_values($filteredArray);
        return array_shift($filteredArray);
    }

    public static function exists(array $array, $callback)
    {
        return array_filter($array, $callback) ? true : false;
    }
}
