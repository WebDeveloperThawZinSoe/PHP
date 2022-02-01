<?php
    $file_name = "test.txt";
    $data = "I am Programmer";
    $opening_file = fopen($file_name,"a");
    fwrite($opening_file,$data);
    fclose($opening_file);
?>