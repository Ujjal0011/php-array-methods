<?php
$colors = array(
    "0" => "red",
    "1" => "green",
    "2" => "yellow",
    "3" => "black"
);

array_shift($colors);

echo '<pre>';
print_r($colors);
echo '</pre>';