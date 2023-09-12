<?php
$colors = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue"
);

array_unshift($colors, "gray");

echo '<pre>';
print_r($colors);
echo '</pre>';