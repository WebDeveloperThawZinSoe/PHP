<?php
    var_dump($_FILES["image"]);
    // file name , type , size , error , tmp_name
    echo "<hr>";
    echo $_FILES["image"]["name"];
    echo "<hr>";
    echo $_FILES["image"]["size"];
    echo "<hr>";
    echo $_FILES["image"]["type"];
    echo "<hr>";
    echo $_FILES["image"]["tmp_name"];
    echo "<hr>";
    echo $_FILES["image"]["error"];
    echo "<hr>";
?>