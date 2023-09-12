<?php

$setOfMarks = array(50, 60, 72, 88, 85, 80, 45, 66, 67, 60, 35, 25, 72, 88, 85, 66, 67, 60, 35,
                    66, 67, 60, 35, 45, 66, 67, 60, 35, 25, 72, 88, 85, 80, 45, 66, 25, 72, 88);

echo "<pre>";
print_r(array_count_values($setOfMarks));
echo "</pre>";