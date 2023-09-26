<?php

$studentGrades = [
    [
        'name' => 'Student1',
        'subject' => [
            'Maths' => 95,
            'English' => 60,
            'Science' => 75
        ]
    ],
    [
        'name' => 'Student2',
        'subject' => [
            'Maths' => 92,
            'English' => 70,
            'Science' => 55

        ]
    ],
    [
        'name' => 'Student3',
        'subject' => [
            'Maths' => 95,
            'English' => 90,
            'Science' => 85
        ]
    ]

];

foreach ($studentGrades as $studentGrade) {
    $totalMarks = array_sum($studentGrade['subject']);
    $numSubjects = count($studentGrade['subject']);
    $averageMarks = $totalMarks / $numSubjects;
    
    echo $studentGrade['name'] ."<br>". "average marks is: " . $averageMarks . "<br>"."<br>";
}