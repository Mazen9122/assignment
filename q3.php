<?php
echo 'ASC';
echo '<br>';

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
           
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

echo "In ASC Order :      ";
print_r($array);


echo '<hr>';
echo 'DESC';
echo '<br>';

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
           
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

echo "In DESC Order :      ";
print_r($array);
?>
