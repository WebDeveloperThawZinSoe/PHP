<?php
    // select data from tablename
    include "connect.php";

    echo "<hr>";

    $sql = "SELECT * FROM member";

    $result = mysqli_query($connection,$sql);

    foreach($result as $r){
        echo $r["id"] . "<br>";
    }
?>