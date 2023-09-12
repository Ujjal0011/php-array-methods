<?php

$array_one = array(
    "a" => "Abdullah", 
    "b" => "Verlie", 
    "c" => "Ashley"
);

$result = array_pad($array_one, -5, "extra");

echo '<pre>';
print_r($result);
echo '<pre>';