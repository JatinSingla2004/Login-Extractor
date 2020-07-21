<?php

// Set the location to redirect the page
header ('Location: textdata2.php');

// Open the text file in writing mode
$file = fopen("form-save.txt", "a");

foreach($_POST as $name => $value) {
    fwrite($file, $name);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");
}

fwrite($file, "\r\n");
fclose($file);
exit;

?>
