<?php
$a = 5;
$b = 6;
echo "The numbers are $a and $b<br>";
swap($a,$b);
echo "Now The numbers are $a and $b";
function swap($a, $b)
{
    $a += $b;
    $b = $a - $b;
    $a -= $b;
    echo "The numbers in function are $a and $b<br>";
}
?>