<?php
/*
* array array_diff_uassoc ( array $array1, array $array2 [, array $..., callback $key_compare_func] )
* Function is implemented in ext/standard/array.c
*/
function key_compare_func($a, $b) {
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
var_dump($result);
