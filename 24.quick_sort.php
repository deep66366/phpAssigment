<?php
function quickSort($arr)
{
    if (count($arr) <= 1)
        return $arr;

    $k = $arr[0];
    $x = $y = array();

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $k) {
            $x[] = $arr[$i];
        } else {
            $y[] = $arr[$i];
        }
    }

    return array_merge(quickSort($x), array($k), quickSort($y));
}

$arr = array(2, 3, 1, 4, 5);
echo "Original Array : ";
foreach ($arr as $value) {
    echo "$value, ";
}
echo "<br>Sorted Array : ";
foreach (quickSort($arr) as $value) {
    echo "$value, ";
}