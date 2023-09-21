<?php

/*Exercise 1
Create a php code that contains two arrays of integers/floats. Once created, displays the result of:

- The intersection of the two arrays (common numbers). Discover the common numbers to both arrays;
- Merge both arrays.*/


$arrayX = [1, 2, 3, 4, 5, 6, 7, 8];
$arrayY = [29, 30, 3, 4, 5, 6, 40, 99];

function commonItems($arrayX, $arrayY){
    $result = array_intersect($arrayX, $arrayY);
    return $result;
}

function mergeArrays($arrayX, $arrayY){
    $result = array_merge($arrayX, $arrayY);
    return $result;
}

print_r(commonItems($arrayX, $arrayY));
echo "<br><br>";
print_r(mergeArrays($arrayX, $arrayY));

//echo "<br>";
//var_dump(CommonItems($arrayX, $arrayY));

?>