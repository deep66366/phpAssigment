<?php
$num1 = 2;
$num2 = 3;
echo "the number before function $num1 and $num2<br>";
    function num(&$a,&$b)
    {
        $a++;
        $b--;
        echo "the number are $a and $b<br>";

    }
num($num1,$num2);
echo "the number after function $num1 and $num2<br>";
?>