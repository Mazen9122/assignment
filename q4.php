<?php
$arr = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$total = 0;

foreach ($arr as $array) {
    $total += $array;
}

$average = $total / count($arr);
echo "AVG =     $average";
?>

