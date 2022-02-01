<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $connection = mysqli_connect("localhost","root","","paginate");
       if($connection){
           echo "Database Connect Success <hr>";
       }
       $sql = "SELECT * FROM data";
       $result = mysqli_query($connection,$sql);
       foreach($result as $r){
           echo $r['name'];
       }
       echo "<hr>";

       $all_data = mysqli_num_rows($result);
       echo "<hr>";

       $per_page = 1;
       $number_of_page = ceil($all_data / $per_page);
       #echo $page;

       if(!isset($_GET["page"])){
            $page = 1;
       }else{
           $page = $_GET["page"];
       }

       $first_page_result = ($page - 1) * $per_page;
       // firstpage , 1 - 1 * 5
       // secondpage , 2 - 1 *5 
       // thirdpage , 3 - 1 * 5

       $sql = "SELECT * FROM data LIMIT $first_page_result,$per_page ";
       $result = mysqli_query($connection,$sql);
       foreach($result as $r){
           echo $r['name'] . '<br>';
       };

       for($i=1;$i<$number_of_page;$i++){
           ?>
            <a href="lesson15_paginate.php?page=<?php echo $i; ?>"><?php echo $i; ?></a> |
           <?php
       }
    ?>
</body>
</html>