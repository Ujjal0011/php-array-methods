<?php

$array_one = array(
    "a" => "aaa", 
    "b" => "bbb", 
    "c" => "ccc"
);
$array_two = array(
    "d" => "ddd", 
    "e" => "eee", 
    "c" => "fff"
);

$mergeArrays = array_merge($array_one, $array_two);

echo '<pre>';
print_r($mergeArrays);
echo '<pre>';