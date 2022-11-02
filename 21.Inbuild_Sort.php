<?php
$a = array(54, 2, 56, 63, 100, 1);
echo "The Element of original Array:<br>";
foreach ($a as $value) {
    echo "$value, ";
}
echo "<br>The Elements in Ascending Order By Using sort() Function:<br>";
sort($a);

foreach ($a as $value) {
    echo "$value, ";
}
echo "<br>The Element  in Dscending Order By Using rsort() Function:<br>";
rsort($a);
foreach ($a as $value) {
    echo "$value, ";
}
?>