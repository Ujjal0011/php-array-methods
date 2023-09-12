<?php

$color_set_one = array(
    "first_color" => "red",
    "second_color" => "green",
    "third_color" => "blue",
    "fourth_color" => "white"
);

$color_set_two = array(
    "fifth_color" => "red",
    "second_color" => "purple",
    "third_color" => "white smoke"
);

$color_set_three = array(
    "first_color" => "gray",
    "second_color" => "dark"
);

$difference = array_diff_key($color_set_one, $color_set_two, $color_set_three);

echo "<pre>";
print_r($difference);
echo "</pre>";