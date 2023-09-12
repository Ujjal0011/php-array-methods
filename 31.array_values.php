<?php
$colors = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue"
);

$result = array_values($colors);

echo '<pre>';
print_r($result);
echo '</pre>';