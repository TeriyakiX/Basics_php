<?php

function findMin($num1, $num2, $num3)
{
    return min($num1, $num2, $num3);
}

$result = findMin(5.4, 2.7, 8.1);
echo "Минимальное значение: " . $result;
echo '<br>';

//------------------------------------------------------------

function multiplyByTwo(&$num1, &$num2) {
    $num1 *= 2;
    $num2 *= 2;
}

$a = 3;
$b = 7;
multiplyByTwo($a, $b);
echo "Умноженные значения: a = $a, b = $b";
echo '<br>';

//------------------------------------------------------------
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5;
$result = factorial($number);
echo "Факториал числа $number: $result";
echo '<br>';

//------------------------------------------------------------
function printNumbers($n) {
    if ($n >= 0) {
        printNumbers($n - 1);
        echo $n . " ";
    }
}

$limit = 7;
echo "Целые числа от 0 до $limit: ";
printNumbers($limit);
echo '<br>';

?>