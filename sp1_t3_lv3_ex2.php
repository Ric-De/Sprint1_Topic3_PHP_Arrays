<?php

/* - Exercise 2
Given an array of strings, write a program that:

Return an array containing only the strings that have an even number of characters using the array_filter() function.*/ 

$arrayString = array('bicycle', 'cat', 'ball', 'murderer', 'launch', 'sprint');

$arrayFiltered = array_filter($arrayString, function($string){
    return strlen($string) % 2 == 0;
});

print_r($arrayFiltered);

?>