<?php

$colors = array(
    0 => "red",
    1 => "green",
    2 => "black",
    3 => "white",
    4 => "purple",
    5 => "yellow",
    6 => "gray",
    7 => "smoke white"
);
shuffle($colors);

echo '<pre>';
print_r($colors);
echo '</pre>';