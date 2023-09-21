<?php

/*- Exercise 1
Given an array of integers, write a program that:

Return each value in the elevated array to the cube using the array_map() function.*/

// array_map syntax - function array_map(?callable $callback, array $array, array ...$arrays): array { }

$array = [1, 2, 3, 4, 5, 6, 7];

function cube($x){
    return pow($x, 3);
}

function elevateCube($array){
    return array_map('cube', $array);
}

$cubedArray = elevateCube($array);

foreach($cubedArray as $element){
    echo $element. '<br>';
}

print_r(elevateCube($array));

?>