<html>
    <head>
        <title>
            cookies
        </title>
        <?php
       setcookie("test1","Ice Cream",time()+60);
        ?>
    </head>
    <body>
        <?php
        foreach ($_COOKIE as $key => $value) {
            echo "$key = $value<br>";
        }
        ?>
    </body>
</html>