<?php



function compareTriplets($a, $b)
{
  $aline = 0;
  $bob = 0;

  for ($i = 0; $i < min(count($a), count($b)); $i++) {

    if ($a[$i] > $b[$i]) {
      $aline  += 1;
    }
    elseif ($a[$i] < $b[$i]) {
      $bob += 1;
    }

  }

  return [$aline, $bob];
}

$a = [4, 4, 3];

$b = [3, 6, 8];
$result = compareTriplets($a, $b);
print_r($result);

