<?php

$person = array(
    "Bradly" => 30,
    "Tristian" => 35,
    "Lilian" => 45,
    "Rosanna" => 38,
    "Kaylee" => 25
);
echo "<pre>";
print_r(array_change_key_case($person, CASE_UPPER));
echo "</pre>";