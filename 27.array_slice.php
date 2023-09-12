<?php
$persons = array(
    "0" => "Tina",
    "1" => "Monserrate",
    "2" => "Rudolph",
    "3" => "Aaron",
    "4" => "Terrell",
    "5" => "Janice",
    "6" => "Sherwood",
    "7" => "Gregoria",
    "8" => "Herminia",
    "9" => "Carleton",
    "10" => "Natalia",
    "11" => "Raina",
    "12" => "Ida",
    "13" => "Destin",
    "14" => "Cleve",
    "15" => "Braxton",
    "16" => "Abbey"
);

$result = array_slice($persons, -4, -2);

echo '<pre>';
print_r($result);
echo '</pre>';