<?php
    include "connect.php";
    echo "<hr>";
    //sql 
    // UPDATE tableName set column=data Where column=data

    $sql = "UPDATE member SET role='admin' WHERE role='editor' ";
    $result = mysqli_query($connection,$sql);
    if($result){
        echo "We update editor account to admin role";
    }
?>