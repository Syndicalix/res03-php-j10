<?php

function getRandomNumbersArray() : array
{
    $nbTab = range(-142, 142);
    shuffle($nbTab);

    echo ($nbTab);
    return $nbTab;
}

function sortNumbers(array $numbers, bool $desc = false) : array
{
    $length = count($numbers);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($desc) {
                if ($numbers[$i] < $numbers[$j]) {
                    $temp = $numbers[$i];
                    $numbers[$i] = $numbers[$j];
                    $numbers[$j] = $temp;
                }
            } else {
                if ($numbers[$i] > $numbers[$j]) {
                    $temp = $numbers[$i];
                    $numbers[$i] = $numbers[$j];
                    $numbers[$j] = $temp;
                }
            }
        }
    }
    
    echo ($numbers);
    return $numbers;
}

function power(int $base, int $exponent)
{
    $result = 1;
    for ($i = 0; $i < $exponent; $i++)
    {
        $result *= $base;
    }
    
    echo ($result);
    return $result;
}

?>