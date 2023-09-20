<?php

/*Exercise 2
$X = array(10, 20, 30, 40, 50,60);
Display the size of the previous array and then remove an element from it. After removing the element, the entire keys must be normalized (their indexes must be reorganized). Display the size of the array one last time.*/

$x = array(10, 20, 30, 40, 50, 60);

echo "The size of the previous array is ". count($x). "<br>"; //count($array) and sizeof($array) to exactly the same thing.

//$sizeBytes = strlen(serialize($x));
//echo "The size of the array is ". $sizeBytes. "<br>"; //This lines are only for testing purposes

unset($x[1]);

echo "The size of the previous array is ". sizeof($x). "<br>";

?>