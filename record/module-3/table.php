<?php
    $number = $_GET['number'];
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<tr><td>" . $number . " x " . $i . "</td><td>=</td><td>" . $result . "</td></tr>";
    }
    echo "</table>";
?>
