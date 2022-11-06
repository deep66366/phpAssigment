<?php
function position($str, $word)
{
    for ($i = 0; $i < strlen($str) - strlen($word) + 1; $i++) {
        if ($str[$i] == $word[0]) {
            for ($j = 1; $j < strlen($word); $j++) {
                if ($str[$i + $j] != $word[$j]) {
                    break;
                }
                return $i;
            }
        }
    }
}
$s = "This is a sample string";
$w = "string";
echo "Position of '$w' in '$s' : " . position($s, $w);
?>