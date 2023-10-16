<?php

$carsSpeeds = [
    95,
    140,
    78
];

$sumOfSpeeds = 0;
$countOfCars = 0;

foreach ($carsSpeeds as $speed) {
    $sumOfSpeeds += $speed;
    $countOfCars++;
}

if ($countOfCars > 0) {
    $averageSpeed = $sumOfSpeeds / $countOfCars;
    echo 'Средняя скорость движения по трассе: ' . $averageSpeed;
} else {
    echo 'Нет данных.';
}

?>