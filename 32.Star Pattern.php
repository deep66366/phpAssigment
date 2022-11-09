<?php
echo "Star Pattern 1<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>Star Pattern 2<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < (3 - $i); $j++) {
        echo "*";
    }
    echo "<br>";
}
?>