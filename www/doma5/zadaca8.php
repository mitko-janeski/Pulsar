<?php
    $host = "localhost";
    $username = "mitko";
    $pass = "1234";
    $database = "vtora_baza";
    
    $connect = mysqli_connect($host, $username, $pass, $database);
    
    if(mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_connect_error($connect));
    }
    
    $sql = "SELECT * FROM korisnici_2 ORDER BY korisnici_2id DESC";
    $rezultat = mysqli_query($connect, $sql);
        while($element = mysqli_fetch_array($rezultat, MYSQLI_ASSOC)){
            echo $element['ime'] . " - " . $element['prezime'] . "<br>";
        }
    
    mysqli_close($connect);
?>

