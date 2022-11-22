<?php
$str = "Hello I am Deepak Pal";
echo "String is : $str";
echo "<br>The length of a string : ".strlen($str);
echo "<br>The number of words in a string : ".str_word_count($str);
echo "<br>Reverse a string : ".strrev($str);
echo "<br>Position of 'am' in String : ".strpos($str, "am");
echo "<br>Replace 'Hello' with 'Hi!' : ".str_replace("Hello", "Hi!", $str);
?>