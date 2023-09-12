<?php
$students = array(
    "Freida" => 50,
    "Celestine" => 60,
    "Genoveva" => 70, 
    "Maegan" => 80, 
    "Jared" => 90, 
    "Eden" => 45, 
    "Jewell" => 55, 
    "Litzy" => 75
);

arsort($students);

echo '<pre>';
print_r($students);
echo '</pre>';