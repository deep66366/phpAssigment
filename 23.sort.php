<?php
function bubble_Sort($my_array)
{
    do {
        $swapped = false;
        for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
            if ($my_array[$i] > $my_array[$i + 1]) {
                $t = $my_array[$i];
                $my_array[$i] = $my_array[$i + 1];
                $my_array[$i + 1] = $t;
                $swapped = true;
            }
        }
    }
    while ($swapped);
    return $my_array;
}
$test_array = array(3, 2, 5, 0, -1, 4, 1);
echo "Real Array :<br>";
foreach ($test_array as $val) {
    echo "$val, ";
}
echo "<br>Sorted Array :<br>";
foreach (bubble_Sort($test_array) as $val) {
    echo "$val, ";
}
?>