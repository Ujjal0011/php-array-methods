<?php
$marks = array(
    "Tina" => 40,
    "Monserrate" => 50,
    "Rudolph" => 60,
    "Dino" => 65,
    "Justice" => 80,
    "Louisa" => 85,
    "Gage" => 60,
    "Norene" => 70,
    "Myron" => 70,
    "Quentin" => 65,
    "Everette" => 80,
    "Ivah" => 40,
    "Tyson" => 60,
    "Dane" => 80,
    "Lauryn" => 75
);

$result = array_unique($marks);

echo '<pre>';
print_r($result);
echo '</pre>';