<?php
$a = 43;
$b = 28;
$q = $a;
$rem = $b % $a;
while ($rem != 0) {
    $s = $rem;
    $rem = $q % $rem;
    $q = $s;
}
$lcm = ($a * $b) / $q;
echo "LCM is $lcm <br>HCF is $q";
?>