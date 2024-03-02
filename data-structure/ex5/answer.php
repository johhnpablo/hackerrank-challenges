<?php

function resolveMinus ($arr)
{
    $positive = 0;
    $negative = 0;
    $zero = 0;
    foreach ($arr as $i) {
        if ($i > 0){
            $positive += 1;
        } else if ($i < 0) {
            $negative += 1;
        } else {
            $zero += 1;
        }
    }
    $resultPositive = $positive / count($arr);
    $resulNegative = $negative / count($arr);
    $resultZero = $zero / count($arr);

    printf (number_format($resultPositive, 6) . PHP_EOL . number_format($resulNegative, 6) . PHP_EOL . number_format($resultZero, 6));
}

resolveMinus($array =[-4, 3, -9, 0, 4, 1]);