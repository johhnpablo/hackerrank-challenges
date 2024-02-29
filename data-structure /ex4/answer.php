<?php 

function diagonalDifference($arr) {

  $n = count($arr);

  $somaPrimaria = 0;
  $somaSecundaria = 0;

  for ($i = 0; $i < $n; $i++) {
    $somaPrimaria += $arr[$i][$i];
    $somaSecundaria += $arr[$i][$n - 1 - $i];
  }
  
  return abs($somaPrimaria - $somaSecundaria);
}