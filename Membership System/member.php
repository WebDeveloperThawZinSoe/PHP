<?php
    include "header.php";
?>

<?php
    include "nav.php";
?>
<h1>Member</h1>

<?php
    include "footer.php";
?>

<?php
    //session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
        header("location:login.php");
    }
?>