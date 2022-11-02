<html>

<head>
    <title>chess board</title>
</head>

<body>
    <table width="200px" height="200px" cellspacing="0px" border="1px">
        <?php
        $a = 0;
        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 8; $j++) {
                if (($j + $i) % 2 == 0)
                    echo "<td bgcolor=\"black\"></td>";
                else
                    echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>