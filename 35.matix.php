<?php
$mat = array(
    array(1,2),
    array(3,4),
    array(5,6));
echo "Matrix is :<br>";
for($i = 0 ; $i<count($mat);$i++){
    for ($j=0; $j < count($mat[$i]); $j++) { 
        echo $mat[$i][$j]," ";
    }
    echo "<br>";
}