<?php
$name = "Ujjal";
$dept = "CSE";
$roll = 223802413;

$result = compact("name", "dept", "roll");

echo '<pre>';
print_r($result);
echo '</pre>';