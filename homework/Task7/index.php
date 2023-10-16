<?php

$evenNumbers = array();
$number = 345;

while ($number <= 357) {
    $evenNumbers[] = $number;
    $number += 2;
}

foreach ($evenNumbers as $num) {
    echo $num . ' ';
}

?>