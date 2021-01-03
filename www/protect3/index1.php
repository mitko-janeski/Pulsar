<?php
    session_start();
    if(isset($_SESSION['user'])){
        echo "<h1>Welcome back," . $_SESSION['user']['username'] . " - " . "<a href='logout1.php'>Logout</a>";
    }
    else{
        echo "<h1>Hello World</h1>";
    }
?>