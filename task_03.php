<?php



$grades = [85, 92, 78, 88, 95];
rsort($grades);
foreach ($grades as $grade) {
    echo $grade . " "; 
}
