<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "clans";
    
    $connection = mysqli_connect($host, $username, $pass, $db);
    if(mysqli_connect_errno()){
                die ("Greska pri konekcija" . mysqli_error($connection));
            }
    $online = "SELECT player_count FROM statistics";
    $sql = mysqli_query($connection, $online);
    
    
    while($row = mysqli_fetch_assoc($sql)){
        echo $row['player_count'];
    }
?>
