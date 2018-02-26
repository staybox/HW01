<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 27.02.2018
 * Time: 0:02
 */
echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        if ($p%2 == 0) {
            echo "<td>($p)</td> \n";
        }elseif ($p%2 == 1) {
            echo "<td>[$p]</td> \n";
        }else {
            echo "<td>$p</td> \n";
        }
    }
    echo "</tr>";
}
echo "</table>";