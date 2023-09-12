<?php

$array_one = array(
    "a" => "red",
    "b" => "green"
);

$array_two = array(
    "a" => "blue",
    "yellow"
);
$result1 = array_replace($array_one, $array_two);

echo '<pre>';
print_r($result1);
echo '<pre>';
