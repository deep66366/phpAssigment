<?php
$q = 13;
$b = 3;
echo "* PHP function without Argument and no return";
function name()
{
    echo " Simple Function<br>";
}
name();
echo "* PHP function with Argument and no return ";
function sum($c, $d)
{
    $r = $c + $d;
    echo "This is Addition : $r<br>";
}
sum($q, $b);
echo "* PHP function with Argument and return ";
function square($c)
{
    return $c * $c;
}
echo "Square of $b is " . square($b);
echo "<br>* PHP function without Argument and return ";
function cube()
{
    global $b;
    $ans = $b * $b * $b;
    return $ans;
}
echo "Cube is " . cube(); ?>