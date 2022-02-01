<?php
    include "header.php";
    error_reporting(0);
?>

<?php
    include "nav.php";
?>
<h1>Login</h1>

<form action="" method="post">
    <input type="text" name="username" value="<?php
            if(isset($_COOKIE["username"])){ echo $_COOKIE["username"]; }
        ?>" >
    <br> <br>
    <input type="password" name="password" value="<?php
            if(isset($_COOKIE["password"])){ echo $_COOKIE["password"]; }
        ?>" >
    <br> <br>
    <input type="submit" name="login" value="login">
</form>

<?php
    include "footer.php";
?>


<?php
session_start();
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
       
        if($username == "mgmg" && $password == "123"){

            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            setcookie("username",$username,time()+3600,"/","");
            setcookie("password",$password,time()+3600,"/","");
            header("location:member.php");
        }
    }
?>