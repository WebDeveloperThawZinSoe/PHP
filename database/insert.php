<?php
    include "connect.php";
    echo "<hr>";
    $sql = "INSERT INTO member(username,password,role) VALUES ('kyawkyaw','001','member')";
    /*
        insert into tablename column values data
    */
    $result = mysqli_query($connection,$sql);
    //database connection , query

    if($result){
        echo "Data Insert Success";
    }
?>