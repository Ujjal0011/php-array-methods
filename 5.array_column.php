<?php

$person = array(
    array(
        "id" => 101,
        "first_name" => "Kavon",
        "last_name" => "Cartwright"
    ),
    array(
        "id" => 222,
        "first_name" => "Augustine",
        "last_name" => "Medhurst"
    ),
    array(
        "id" => 305,
        "first_name" => "Geovanni",
        "last_name" => "Wintheiser"
    )
);

$lastName = array_column($person, "last_name");

echo "<pre>";
print_r(array_change_key_case($lastName));
echo "</pre>";