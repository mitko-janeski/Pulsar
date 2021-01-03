<?php
    $host = "localhost";
    $username = "mitko";
    $password = "1234";
    $database = "vtora_baza";
    
    $connect = mysqli_connect($host, $username, $password, $database);
    
    if (mysqli_connect_errno()){
        die("Greska pri konekcija" . mysqli_error($connect));
    }
    echo "Successfully connected to the database. <br>";
    
    // ZADACA 1
    $ime = "Michael";
    $prezime = "Jackson";
    
    
    //$sql = "SELECT * FROM korisnici_2 WHERE ime = 'Julius' ORDER BY korisnici_2id DESC LIMIT 5 ";
    
    //$sql = "SELECT * FROM korisnici_2 WHERE ime LIKE 'Ju%' LIMIT 5";
    
    //$sql = "SELECT * FROM korisnici_2 WHERE ime LIKE '%ul%'";
    
    //$sql = "SELECT * FROM korisnici_2 WHERE prezime LIKE 'Svava%'";
    
    //$sql = "SELECT korisnici_2id FROM korisnici_2 WHERE korisnici_2id > 15 AND korisnici_2id < 20 ORDER BY korisnici_2id DESC LIMIT 2";
    
    
    
    $result = mysqli_query($connect, $sql);
    
    $niza = mysqli_fetch_all($result);
    
    foreach($niza as $key => $value){
        echo $value[1] . " " . $value[2] . "<br>";
    }
    
    mysqli_close($connect);
    
?>

