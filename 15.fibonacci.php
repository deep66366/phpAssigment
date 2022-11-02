<?php
$number = 10;
$a = 0;
$b= 1;
$c = 1;
echo "0<br>1";
for ($i = 2; $i < $number; $i++) {
    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo "<br>$b";
}
?>