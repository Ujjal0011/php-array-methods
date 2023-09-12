<?php

$names = array("Alivia", "Serena", "Maximo", "Dakota", "Jonathon", "Hillary", "Arturo", "Merle");

$currentVal = current($names);
$nextVal = next($names);
$previousVal = prev($names);
$endVal = end($names);

echo "Current Value: ".$currentVal."<br>";
echo "Next Value: ".$nextVal."<br>";
echo "Previous Value: ".$previousVal."<br>";
echo "End Value: ".$endVal."<br>";