<?php

function reverse($str)
{
    $i = 0;
    $j = strlen($str) - 1;

    while ($i < $j) {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
        $i++;
        $j--;
    }

    return $str;
}

// Driver Code 
$s = "Hello I am Harshita";
$rev_s = reverse($s);

echo "The string is : " . $s;
echo "<br>The string is reversed : " . $rev_s;
?>