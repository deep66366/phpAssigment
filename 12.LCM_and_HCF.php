<?php
$a = 46;
$b = 28;
$q = $a;
$rem = $q % $b;
while ($rem != 0) {
    $s = $rem;
    $rem = $q % $rem;
    $q = $s;
}
$lcm = ($a * $b) / $q;
echo "LCM is $lcm <br>HCF is $q";
?>