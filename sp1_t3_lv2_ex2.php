<?php

/*Exercise 2
Create a program that lists the grades of the students in a class. For this we will have to use an associative array where the key will be the name of each student. Each student will have 5 grades (valued from 0 to 10).

In addition, create a function that, given the grades of all the students, shows us both the average grade of each student and the average grade of the entire class.*/ 

$allStudentsGrades = array(
    'Ramon' => array(7, 8, 9, 5, 4),
    'Pedro' => array(6, 7, 8, 9, 4),
    'Maria' => array(2, 3, 4, 5, 6),
    'Joana' => array(1, 2, 3, 4, 5),
    'Vanderleia' => array(4, 5, 6, 8, 9)
);

// Iterate through each student and their grades
foreach($allStudentsGrades as $student => $grades){
    echo "Student: $student<br>";
    echo "Grades: ". implode(', ', $grades). "<br>";

    //Calculate and display the average grade for each student
    $averageGrade = array_sum($grades) / count($grades);
    echo "Average Grade: ". $averageGrade. "<br><br>";
    $eachStudentAvGrade[] = $averageGrade;
}

print_r($eachStudentAvGrade);

echo "<br><br>";

//Calculate and display the average garde for the entire class

$classAvGrade = array_sum($eachStudentAvGrade) / count($eachStudentAvGrade);

echo "Average Grade: ". $classAvGrade;

?>