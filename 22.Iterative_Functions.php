<?php
echo "This is Original Array<br>";
$a = array(4, 54, 6, 100, 0, -1, 400);
foreach ($a as $value) {
    echo "$value, ";
}
echo "<br>The Current Element is :" . current($a);
echo "<br>The Next Element is :" . next($a);
echo "<br>The Previus Element is :" . prev($a);
echo "<br>Reset By Reset() functions:" . reset($a);
echo "<br>The End Element is :" . end($a);
?>