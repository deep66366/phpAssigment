<?php
$temp = $number = 101;
$new = 0;
while ($temp > 1) {
    $d = $temp % 10;
    $new = $new * 10 + $d;
    $temp = $temp / 10;
}
echo "$number is ";
echo ($new == $number) ? "Palindrome" : "Not a Palindrome";
?>