<?php

$studentList = array(
    array("Hellen Ledner", 10, 1-447-701-8972),
    array("Gerald Maggio", 15, 822-833-9881),
    array("Bennett Kutch", 20, 823-357-7642),
    array("Shaniya Pollich", 22, 757-304-1967),
    array("Thelma Konopelski", 50, 549-614-9132)
);
$studentListLength = count($studentList);
$studentListItemLength = count($studentList[0]);

for ($i = 0; $i < $studentListLength; $i++) { 
    for($j = 0; $j < $studentListItemLength; $j++) {
        echo $studentList[$i][$j]."; ";
    }
    echo "<br>";
}