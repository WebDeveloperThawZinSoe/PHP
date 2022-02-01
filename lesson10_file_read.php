<?php
    $fileName = "test.txt";
    $openingFile = fopen($fileName,"r");

    echo fread($openingFile,filesize($fileName));
    fclose($openingFile);
?>