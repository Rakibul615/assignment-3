<?php

$studentGrades = [
    ['Math' => 85, 'English' => 92, 'Science' => 78],
    ['Math' => 88, 'English' => 95, 'Science' => 90],
    ['Math' => 75, 'English' => 82, 'Science' => 89]
];

function calculateAndPrintAverages($grades) {
    foreach ($grades as $student) {
        $average = array_sum($student) / count($student);
        echo "Average grade for this student: $average\n";
    }
}
calculateAndPrintAverages($studentGrades);

