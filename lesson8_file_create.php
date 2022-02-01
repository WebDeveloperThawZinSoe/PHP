<?php
    $file_name = "test.txt";
    $opening_file = fopen($file_name,"w"); // filename , mode
    //r -> read , w -> write , a -> append
    fclose($opening_file);
?>