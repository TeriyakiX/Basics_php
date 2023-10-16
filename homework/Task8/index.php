<?php

function checkPresence($arr, $value) {
    return in_array($value, $arr);
}

$myArray = [1, 2, 3, 4, 5];
$targetValue = 3;
echo checkPresence($myArray, $targetValue);
echo checkPresence($myArray, 6);
echo '<br>';


//------------------------------------------------------------

function countOccurrences($arr, $value) {
    return count(array_keys($arr, $value));
}

$myArray = [1, 2, 1, 3, 1, 4, 1];
$targetValue = 1;
echo countOccurrences($myArray, $targetValue);

?>