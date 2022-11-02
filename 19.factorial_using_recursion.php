<?php 
echo "Factorial of 4 is " . Factorial(4);
function Factorial($no)
{
    return ($no <= 1) ? 1 : $no * Factorial($no - 1);
}
?>