<?php



$date = "2012-12-21";

$date2 = date("Y-m-d", strtotime("+1 month", strtotime($date)));

echo $date2;



?>
