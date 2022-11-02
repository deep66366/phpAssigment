<?php
define("MSG", "This is a message<br>");
echo MSG;
echo MSG;
const CMSG = "This is constant<br>";
echo CMSG;
function get_message()
{
    echo "Using constant inside a function :- " . MSG;
}
get_message();
?>