<?php

$ageList = array(
    'Heather' => 18,
    'Luna' => 20,
    'Lempi' => 25,
    'Daisy' => 30,
    'Harrison' => 37
);

foreach($ageList as $name => $age) {
    echo "Name: ".$name."; Age: ".$age."<br>";
}