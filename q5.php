<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = [];

foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $result[] = $number;
    }
}

echo "New array without even numbers: ";
print_r($result);
?>
