<html>
    <body>
<table border=2px solid black padding=0>
    <?php
    echo "Chess by Dhruv";  
    for ($i=1; $i<=8 ; $i++) { 
        echo "<tr>";
        for ($j=1; $j<=8 ; $j++) { 
           if(($i+$j)%2==0){
            echo "<td  bgcolor=black height=25 width=25>";
           } else{
            echo "<td bgcolor=white>";
           }
            
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>