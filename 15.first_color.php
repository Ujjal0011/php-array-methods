<?php

$color_set_one = array(
    "first_color" => "red",
    "second_color" => "green",
    "third_color" => "blue",
    "fourth_color" => "white"
);

$result = array_keys($color_set_one, "red");

echo "<pre>";
print_r($result);
echo "</pre>";