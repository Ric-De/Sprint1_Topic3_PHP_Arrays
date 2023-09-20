<?php

/*Exercise 1
Create an array, add 5 integers to it and then display them one by one.*/

$array = [];

for($i = 1; $i < 6; $i++){
    $array[] = $i;
}
echo implode(', ', $array);

?>