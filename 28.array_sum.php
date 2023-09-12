<?php
$marks = array(
    "Tina" => 40,
    "Monserrate" => 50,
    "Rudolph" => 60,
    "Aaron" => 70
);

$result = array_sum($marks);

echo '<pre>';
print_r($result);
echo '</pre>';