<?php

/* - Exercise 3
Given an array of integers, write a program that returns the sum of the prime integers in the array using the array_reduce() function. */

//Filling the array with numbers from 1 to 50
$array = range(0, 50);
$primeArray = [];

function isPrime($array){

    foreach($array as $i){
        $is_prime = true;

        if($i != 2 && $i % 2 == 0 || $i == 1){
            $is_prime = false;
    } else{
        $divisor_found = false;
        for($j = 3; $j <= $i && !$divisor_found; $j += 2){
            if($i % $j == 0 && $j !== $i){
                $is_prime = false;
                $divisor_found = true;
            }
    }
}
if($is_prime){
    $primeArray[] = $i;
}
    }
    return $primeArray;
}
$primeArray = isPrime($array);
echo "<br><br>";
$sumPrimesArray = array_reduce($primeArray, function($carry, $item){
    return $carry + $item;
});

echo "This is the sum of the prime numbers in the array: ". $sumPrimesArray. "<br>";
?>