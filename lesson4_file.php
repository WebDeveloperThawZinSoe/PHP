<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"  enctype= "multipart/form-data">
        <input type="file" name="image">
        <br> <br>
        <input type="submit" name="upload" value="upload">
    </form>
</body>
</html>

<?php
    if(isset($_POST["upload"])){
       $name = $_FILES["image"]["name"];
       $tmp_name = $_FILES["image"]["tmp_name"];
       $size = $_FILES["image"]["size"];
       $type = $_FILES["image"]["type"];
       $error = $_FILES["image"]["error"];
    //    echo $name ;
    //    echo "<hr>";
    //    echo $tmp_name;
    //    echo "<hr>";
    //    echo $type;
    //    echo "<hr>";
    //    echo $size;
    //    echo "<hr>";
    //    echo $error;
    //    echo "<hr>";
    // filetype/extension

        if($error == 0){
            if($size < 10000000000){
                if($type == "image/jpg" || $type == "image/png" || $type == "image/jpeg" || $type == "image/gif"){
                    $gen_name = rand(0,1000) . $name;
                    move_uploaded_file($tmp_name,"upload/" . $gen_name);
                    // tmp_name , folder + filename
                }else{
                    echo "We only accpet jpg jpeg png and gif";
                }
            }else{
                echo "File is too big";
            }
        }else{
            echo "File Has Error";
        }
    }
?>