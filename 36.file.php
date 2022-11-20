<?php

// Create a new file
$my_file = "file.txt";
$handle = fopen($my_file, "w");
if (!$handle) {
    die("Cannot open file:  " . $my_file);
}
echo "File open Successfully<br>";

//Write into a file
$data = "This is the data";
fwrite($handle, $data);

// Read the contents of the file
$read_file = file_get_contents($my_file);
echo $read_file;

// Delete the file
unlink($my_file);

?>