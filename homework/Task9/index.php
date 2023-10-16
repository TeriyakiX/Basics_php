<?php

$array = [1, 3, 2];

sort($array);

$string = implode(":", $array);

echo $string;
echo '<br>';

//------------------------------------------------------------

$array = [1, 2, 3, 4, 5];

$resultArray = array_slice($array, 1, 3);

print_r($resultArray);

?>