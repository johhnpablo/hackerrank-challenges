<?php

/*
 * Complete the 'simpleArraySum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY ar as parameter.
 */
$ar = [1,1,1,1,1];
function simpleArraySum($ar) {
   return array_sum($ar);
}


simpleArraySum($ar);

// Nesse desafio utilizamos a função nativo do php array_sum(), que soma os valores de uma matriz de inteiros.