<?php

$student = array("Fred", "Jarvis", "Brooklyn", "Vita");
$depertment = array("CSE", "EEE", "BBA", "ETE");
$combine = array_combine($student, $depertment);

echo "<pre>";
print_r($combine);
echo "</pre>";