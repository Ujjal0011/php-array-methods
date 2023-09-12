<?php

$array_one = array(
    "a" => "Abdullah", 
    "b" => "Verlie", 
    "c" => "Ashley"
);

$result = array_pop($array_one); // will print the last element

echo '<pre>';
print_r($result); // Ashley
echo '<pre>';