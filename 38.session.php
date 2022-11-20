<?php
session_start();
?>
<html>

<head>
    <title>Session</title>
</head>

<body>
    <?php
    //setting the session variables
    $_SESSION['var'] = 'value';
    $_SESSION['Another'] = 'another value';
    $count = count($_SESSION);
    echo "<br>The Number of session variable set are $count<br>";
    echo "Printing all the session variables<br>";
    print_r($_SESSION);
    session_unset();
    session_destroy();
    ?>
</body>

</html>