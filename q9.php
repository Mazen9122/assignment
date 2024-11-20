<?php


$mainStr = "Hello, Route Welcome to my code!";
$searchStr = "Route";

if (preg_match("/$searchStr/", $mainStr)) {
    echo "STR contains  '   $searchStr'  ";
} else {
    echo " STR doesn't contain '   $searchStr'  ";
}
?>
