<?php

$color_set_one = array(
    "first_color" => "red",
    "second_color" => "green",
    "third_color" => "blue",
    "fourth_color" => "white"
);

$color_set_two = array(
    "first_color" => "dark red",
    "fifth_color" => "purple",
    "sixth_color" => "white smoke"
);

$color_set_three = array(
    "first_color" => "pinky red",
    "seventh_color" => "dark",
    "eighth_color" => "gray"
);

$similarities = array_intersect_key($color_set_one, $color_set_two, $color_set_three);

echo "<pre>";
print_r($similarities);
echo "</pre>";