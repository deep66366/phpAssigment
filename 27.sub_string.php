<?php
function position($str, $word)
{
    for ($i = 0; $i <= strlen($str) - strlen($word); $i++) {
        if ($str[$i] == $word[0]) {
            $m = true;
            for ($j = 1; $j < strlen($word); $j++) {
                if ($str[$i + $j] != $word[$j]) {
                    $m = false;
                    break;
                }
            }
            if ($m == 0) {
                return $i;
            }
        }
    }
}
$s = "This is a sample string";
$w = "string";
echo "Position of '$w' in '$s' : " . position($s, $w);
?>