<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Enter YourName"> 
        <br> <br>
        <input type="password" name="password" placeholder="Enter Your Password">
        <br> <br>
        <select name="role" id="">
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
            <option value="manager">Manager</option>
        </select>
        <br> <br>
        <input type="submit" name="btn" value="Register">
        <hr>
    </form>
    <table border="1px">
        <thead >
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Role</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            
                <?php

                    $connection = mysqli_connect("localhost","root","","blog13");
                    if(!$connection){
                        echo "Connection is Funcking Wrong <hr>";
                    }
                    $sql = "SELECT id,username,role FROM member ";
                    $result = mysqli_query($connection,$sql);
                    foreach($result as $key=>$r){
                        ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $r['username']; ?></td>
                            <td><?php echo $r['role'] ?></td>
                            <th><a href="form.php?id=<?php echo $r['id'] ?>">Delete</a></th>
                        </tr>
                        <?php 
                    }
                    // $key++ == $key += 1;
                    // ++$key
                ?>
           
        </tbody>
    </table>
</body>
</html>

<?php
    
    if(isset($_POST["btn"])){
       $username = $_POST["username"];
       $password = $_POST["password"];
       $role = $_POST["role"];
      // echo $username . $password . $role;
      $sql = "INSERT INTO member (username,password,role) VALUES ('$username','$password','$role') ";
      $result = mysqli_query($connection,$sql);
      if($result){
          echo "Account Register Success";
          header("Refresh:0");
      }
    }

    if(isset($_GET["id"])){
       $id = $_GET['id'];
       $sql = "DELETE FROM member WHERE id='$id'";
       $result = mysqli_query($connection,$sql);
       if($result){
          echo "Delete Data Success";
       }
    }
    
?>