<?php


echo 'Shape 1';
echo "<br>";

$size = 7;

for ($i = 1; $i < $size; $i++) {
    $str = str_pad(str_repeat('   *', 1 * $i - 1), $size, ' ', STR_PAD_BOTH) . "<br>";
    echo "<div style='text-align: center; width: ${size}ch;'>$str</div>";
}
for ($i = $size - 2; $i >= 1; $i--) {
    $str = str_pad(str_repeat('   *', 1 * $i - 1), $size, ' ', STR_PAD_BOTH) . "<br>";
    echo "<div style='text-align: center; width: ${size}ch;'>$str</div>";
    }

//----------------------------------------------\\


echo "<hr>";
echo "<br>";
echo'shape 2';
echo "<br>";
$size = 5; 
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat(' ', ($size - $i) / 2) . str_repeat('   *', $i) . "<br>";
}
for ($i = $size - 0; $i > 0; $i--) {
    echo str_repeat(' ', ($size - $i) / 2) . str_repeat('   *', $i) . "<br>";

}


//----------------------------------------------\\


echo "<hr>";
echo "<br>";
echo'shape 3';
echo "<br>";
$size = 6; 
for ($i = 1; $i <= $size; $i += 2) {
    echo str_repeat(' ', ($size - $i) / 2) . str_repeat('   *', $i) . "<br>";
}
for ($i = $size - 3; $i > 0; $i -= 2) {
    echo str_repeat(' ', ($size - $i) / 2) . str_repeat('   *', $i) . "<br>";
}
?>




