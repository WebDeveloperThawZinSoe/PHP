
    <a href="index.php">Home</a>
    <?php 
        session_start();
        if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
          
            ?>
     <a href="login.php">Login</a>
            <?php
        }
    ?>

<?php 
        if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
            ?>
                 <a href="logout.php">Logout</a>
            <?php
        }
    ?>
   
    <a href="member.php">Member</a>
  