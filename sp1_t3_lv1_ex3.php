<?php

/*Exercise 3
Create a function that receives as parameters an array of words and a character. The function returns true if all the words in the array have the character passed as the second parameter.

For example:
If we have [“hello”, “Php”, “Html”] it will return true if we ask for “h” but false if we ask for “l”.*/


$thingsArray = ["board", "banana", "plate", "water"];
$character = "a";


function hasCharac($thingsArray, $character){
    $allStrHaveCharacter = true;

    foreach($thingsArray as $element){
        if(!str_contains($element, $character)){
            $allStrHaveCharacter = false;
        }
}
    return $allStrHaveCharacter;
}

$result = hasCharac($thingsArray, $character);

if ($result) {
    echo "true";
} else {
    echo "false";
}

?>