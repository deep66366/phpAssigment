<?php
$a = 10;
$b = 100;
$c = 100;
if ($a == $b && $b == $c)
    echo "All numbers are equal";
elseif ($a == $b && $a > $c)
    echo "A and B are equal and greater than C";
elseif ($b == $c && $b > $a)
    echo "B and C are equal and greater than A";
elseif ($a == $c && $c > $b)
    echo "A and C are equal and greater than B";
else {
    if ($a > $b && $a > $c)
        echo "A is greater";
    else {
        if ($b > $c)
            echo "B is greater";
        else
            echo "C is greater";
    }
}
?>