<?php
$numbers = [10, 30, 20];
$max = $numbers[0];

foreach ($numbers as $number) {

     if ($number > $max) {

         $max = $number; 

        } 

    }

echo "Maximum number is: " . $max;
?>
