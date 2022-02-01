<?php
    /*
        database host
        database host's username 
        database host's password 
        database name
    */
    $connection = mysqli_connect("localhost","root","","blog13");
    if($connection){
        echo "Database Connect Success";
    }
    /*
        mysqli_connect(host,username,password,databasename);
        localhost
        root 
        and password blank is default in local computer
    */
?>