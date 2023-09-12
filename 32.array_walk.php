<?php
$students = array(
    "Freida" => "CSE",
    "Celestine" => "IT",
    "Genoveva" => "EEE"
);

function depertmentWithStudents($depertment, $name) {
    echo "$name takes $depertment.<br>";
}

array_walk($students, "depertmentWithStudents");