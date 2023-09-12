<?php

function doSomething($value) {
    return $value * $value;
}

$myValues = array(1, 2, 3, 4, 5, 6, 7, 8);

$result= array_map("doSomething", $myValues);

echo "<pre>";
print_r($result);
echo "</pre>";