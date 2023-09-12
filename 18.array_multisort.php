<?php

$array_one = array(
    "a" => "Abdullah", 
    "b" => "Verlie", 
    "c" => "Ashley"
);
$array_two = array(
    "d" => "Kirsten", 
    "e" => "Brenden", 
    "f" => "Sally"
);

array_multisort($array_one, SORT_ASC, $array_two, SORT_DESC);

echo '<pre>';
print_r($array_one);
echo '<pre>';

echo '<pre>';
print_r($array_two);
echo '<pre>';