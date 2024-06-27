<?php
//FILE HANDLING

$file = 'misc/users.txt';

if(file_exists($file)) {
    //echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}
else {
    $handle = fopen($file, 'w');
    $contents = 'Omer' . PHP_EOL . 'Ali' . PHP_EOL . 'Ahmed';
    fwrite($handle, $contents);
    fclose($handle);
}


?>
