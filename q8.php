<?php


$previous_month = date('n') - 1;

if ($previous_month == 0) {
    $previous_month = 12;
}

echo $previous_month;


?>
