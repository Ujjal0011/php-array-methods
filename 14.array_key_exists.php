<?php

$color_set_one = array(
    "first_color" => "red",
    "second_color" => "green",
    "third_color" => "blue",
    "fourth_color" => "white"
);

if (array_key_exists("name", $color_set_one)) {
    echo "Array key found";
} else {
    echo "Array key not found";
}

echo "<pre>";
print_r($similarities);
echo "</pre>";