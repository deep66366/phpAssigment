<?php
    $marks = 71;
    echo "You got ";
    if ($marks>=90)
    {
        echo "Grade A";
    }
    elseif ($marks<90 && $marks>=70)
    {
        echo "Grade B";
    }
    elseif ($marks<70 && $marks>=35)
    {
        echo "Grade C";
    }
    else
    {
        echo "Grade D";
    }
?>