<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "vtora_baza";
    
    $connect = mysqli_connect($host, $username, $password, $database);
    
    if(mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_connect_error($connect));
    }
    echo "Uspesno se logiravte <br>";
    
    $sql = "SELECT * FROM korisnici_2 ORDER BY prezime LIMIT 5 DESC";
    
    mysqli_close($connect);
?>
