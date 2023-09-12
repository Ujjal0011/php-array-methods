<?php

$persons = array(
    "Buck" => 30,
    "Gabrielle" => 35,
    "Effie" => 40,
    "Haleigh" => 50,
    "Isaiah" => 44,
    "Jakayla" => 25,
    "Mike" => 60,
    "Tyler" => 55
);
ksort($persons);

foreach($persons as $name => $age) {
    echo "$name got $age.<br>";
}