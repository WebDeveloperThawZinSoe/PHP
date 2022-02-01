<?php
    include "connect.php";
    echo "<hr>";
    //sql DELETE FROM tableName WHERE coulmn=whatwewanttodelete
    $sql = "DELETE FROM member WHERE role='admin'";
    $result = mysqli_query($connection,$sql);
    if($result){
        echo "We Delete All Admin Account <hr>";
    }
?>