<?php
$temp = $number = 555;
$new = 0;
while ($temp > 10) {
    $d = $temp % 10;
    $new = $new * 10 + $d;
    $temp = $temp / 10;
}
$new = $new * 10 + $temp % 10;
echo "$number is ";
echo ($new == $number) ? "Palindrome" : "Not a Palindrome";
?>