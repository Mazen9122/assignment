<?php
echo "<table border='1'>";

for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
        echo "<td style='width:30px; height:30px; background-color:$color;'></td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
